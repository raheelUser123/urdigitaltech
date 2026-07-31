<?php
/**
 * Receives every website lead form, emails the submission, and creates a task
 * inside ClickUp > URDigital Tech > Leads.
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

require __DIR__ . '/config.php';

function respond(bool $success, string $message, array $extra = []): void
{
    http_response_code($success ? 200 : 422);
    echo json_encode(array_merge([
        'success' => $success,
        'message' => $message,
    ], $extra), JSON_UNESCAPED_SLASHES);
    exit;
}

function clean_text($value, int $maxLength = 5000): string
{
    $value = is_string($value) ? trim($value) : '';
    $value = strip_tags($value);
    $value = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $value) ?? '';
    return mb_substr($value, 0, $maxLength);
}

function client_ip(): string
{
    $forwarded = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
    if ($forwarded !== '') {
        $candidate = trim(explode(',', $forwarded)[0]);
        if (filter_var($candidate, FILTER_VALIDATE_IP)) return $candidate;
    }
    return filter_var($_SERVER['REMOTE_ADDR'] ?? '', FILTER_VALIDATE_IP) ?: 'unknown';
}

function rate_limit(string $ip): void
{
    if ($ip === 'unknown') return;
    $dir = sys_get_temp_dir() . '/urd-form-rate-limit';
    if (!is_dir($dir)) @mkdir($dir, 0700, true);
    $file = $dir . '/' . hash('sha256', $ip) . '.txt';
    $last = is_file($file) ? (int) file_get_contents($file) : 0;
    if ($last > 0 && (time() - $last) < FORM_RATE_LIMIT_SECONDS) {
        respond(false, 'Please wait a few seconds before submitting another request.');
    }
    @file_put_contents($file, (string) time(), LOCK_EX);
}

function clickup_is_configured(): bool
{
    return CLICKUP_API_TOKEN !== ''
        && strpos(CLICKUP_API_TOKEN, 'REPLACE_') === false
        && CLICKUP_LIST_ID !== '';
}

function create_clickup_task(array $lead): array
{
    if (!clickup_is_configured()) {
        return ['success' => false, 'error' => 'ClickUp credentials are not configured.'];
    }
    if (!function_exists('curl_init')) {
        return ['success' => false, 'error' => 'PHP cURL extension is not enabled.'];
    }

    $typeLabels = [
        'strategy_call' => 'Strategy Call',
        'lead_capture' => 'Lead Capture',
        'proposal' => 'Proposal Request',
        'general_inquiry' => 'Website Inquiry',
    ];
    $typeLabel = $typeLabels[$lead['form_type']] ?? ucwords(str_replace('_', ' ', $lead['form_type']));
    $servicePart = $lead['service'] !== '' ? ' - ' . $lead['service'] : '';
    $taskName = $lead['name'] . $servicePart . ' - ' . $typeLabel;

    $description = "## New website lead\n\n"
        . "**Form:** {$typeLabel}\n"
        . "**Name:** {$lead['name']}\n"
        . "**Business:** " . ($lead['business'] ?: 'Not provided') . "\n"
        . "**Email:** {$lead['email']}\n"
        . "**Phone:** " . ($lead['phone'] ?: 'Not provided') . "\n"
        . "**Service:** " . ($lead['service'] ?: 'Not selected') . "\n"
        . "**Budget:** " . ($lead['budget'] ?: 'Not provided') . "\n"
        . "**Timeframe:** " . ($lead['timeframe'] ?: 'Not provided') . "\n"
        . "**Preferred date:** " . ($lead['preferred_date'] ?: 'Not provided') . "\n"
        . "**Preferred time:** " . ($lead['preferred_time'] ?: 'Not provided') . "\n"
        . "**Timezone:** " . ($lead['timezone'] ?: 'Not provided') . "\n"
        . "**Source page:** {$lead['source_page']}\n"
        . "**Submitted:** {$lead['submitted_at']}\n"
        . "**IP:** {$lead['ip']}\n\n"
        . "## Message\n\n" . ($lead['message'] ?: 'No message provided.');

    $payload = [
        'name' => mb_substr($taskName, 0, 250),
        'markdown_description' => $description,
        'tags' => array_values(array_filter([CLICKUP_DEFAULT_TAG, $lead['service'] !== '' ? strtolower(preg_replace('/[^a-z0-9]+/i', '-', $lead['service'])) : ''])),
        'priority' => 3,
    ];
    if (CLICKUP_DEFAULT_ASSIGNEE_ID !== '') {
        $payload['assignees'] = [(int) CLICKUP_DEFAULT_ASSIGNEE_ID];
    }

    $ch = curl_init('https://api.clickup.com/api/v2/list/' . rawurlencode(CLICKUP_LIST_ID) . '/task');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_HTTPHEADER => [
            'Authorization: ' . CLICKUP_API_TOKEN,
            'Content-Type: application/json',
        ],
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_SLASHES),
    ]);
    $body = curl_exec($ch);
    $curlError = curl_error($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $decoded = is_string($body) ? json_decode($body, true) : null;
    if ($curlError !== '') return ['success' => false, 'error' => $curlError];
    if ($status < 200 || $status >= 300) {
        $apiMessage = is_array($decoded) ? ($decoded['err'] ?? $decoded['error'] ?? $decoded['message'] ?? '') : '';
        return ['success' => false, 'error' => "ClickUp HTTP {$status}: {$apiMessage}"];
    }

    return [
        'success' => true,
        'task_id' => $decoded['id'] ?? '',
        'task_url' => $decoded['url'] ?? '',
    ];
}

function send_admin_email(array $lead): array
{
    $autoload = __DIR__ . '/vendor/autoload.php';
    if (!is_file($autoload)) return ['success' => false, 'error' => 'Composer vendor files are missing. Run composer install.'];
    require_once $autoload;

    $typeLabel = ucwords(str_replace('_', ' ', $lead['form_type']));
    $subject = "New {$typeLabel} - {$lead['name']}";
    $bodyLines = [
        "Form type: {$typeLabel}",
        "Name: {$lead['name']}",
        "Business: {$lead['business']}",
        "Email: {$lead['email']}",
        "Phone: {$lead['phone']}",
        "Service: {$lead['service']}",
        "Budget: {$lead['budget']}",
        "Timeframe: {$lead['timeframe']}",
        "Preferred date: {$lead['preferred_date']}",
        "Preferred time: {$lead['preferred_time']}",
        "Timezone: {$lead['timezone']}",
        "Source page: {$lead['source_page']}",
        "Submitted: {$lead['submitted_at']}",
        "IP: {$lead['ip']}",
        "",
        "Message:",
        $lead['message'],
    ];

    try {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION === 'ssl'
            ? PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS
            : PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = SMTP_PORT;
        $mail->CharSet = 'UTF-8';
        $mail->setFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
        $mail->addAddress(MAIL_TO_ADDRESS, MAIL_TO_NAME);
        $mail->addReplyTo($lead['email'], $lead['name']);
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = implode("\n", $bodyLines);
        $mail->send();

        // Confirmation email. Its failure should not lose the main submission.
        try {
            $confirm = clone $mail;
            $confirm->clearAllRecipients();
            $confirm->clearReplyTos();
            $confirm->addAddress($lead['email'], $lead['name']);
            $confirm->Subject = "We've received your request - URDigital Tech";
            $confirm->Body = "Hi {$lead['name']},\n\nThanks for contacting URDigital Tech. "
                . "We received your request and will follow up within one business day.\n\n"
                . "Your selected service: " . ($lead['service'] ?: 'General inquiry') . "\n\n"
                . "- URDigital Tech";
            $confirm->send();
        } catch (Throwable $confirmationError) {
            error_log('Confirmation email failed: ' . $confirmationError->getMessage());
        }

        return ['success' => true];
    } catch (Throwable $error) {
        return ['success' => false, 'error' => $error->getMessage()];
    }
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    respond(false, 'Invalid request method.');
}
if (!empty($_POST['website'])) respond(true, 'Submitted.');

$ip = client_ip();
rate_limit($ip);

$lead = [
    'name' => clean_text($_POST['name'] ?? '', 120),
    'business' => clean_text($_POST['business'] ?? '', 180),
    'email' => filter_var(trim((string) ($_POST['email'] ?? '')), FILTER_SANITIZE_EMAIL),
    'phone' => clean_text($_POST['phone'] ?? '', 80),
    'service' => clean_text($_POST['service'] ?? '', 180),
    'message' => clean_text($_POST['message'] ?? '', 8000),
    'preferred_date' => clean_text($_POST['preferred_date'] ?? '', 40),
    'preferred_time' => clean_text($_POST['preferred_time'] ?? '', 40),
    'timezone' => clean_text($_POST['timezone'] ?? '', 80),
    'form_type' => clean_text($_POST['form_type'] ?? 'general_inquiry', 80),
    'budget' => clean_text($_POST['budget'] ?? '', 120),
    'timeframe' => clean_text($_POST['timeframe'] ?? '', 120),
    'source_page' => clean_text($_SERVER['HTTP_REFERER'] ?? SITE_URL, 1000),
    'submitted_at' => date('Y-m-d H:i:s T'),
    'ip' => $ip,
];

if ($lead['name'] === '' || !filter_var($lead['email'], FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Please enter a valid name and email address.');
}
if ($lead['form_type'] === 'strategy_call' && $lead['phone'] === '') {
    respond(false, 'Please include a phone number so we can confirm your call.');
}

$clickup = create_clickup_task($lead);
$email = send_admin_email($lead);

if (!$clickup['success']) error_log('ClickUp lead creation failed: ' . ($clickup['error'] ?? 'Unknown error'));
if (!$email['success']) error_log('Lead email failed: ' . ($email['error'] ?? 'Unknown error'));

// The lead is considered safely captured if either delivery channel succeeded.
if ($clickup['success'] || $email['success']) {
    $message = ($clickup['success'] && $email['success'])
        ? 'Your request has been sent successfully.'
        : 'Your request has been received. Our team will follow up shortly.';
    respond(true, $message);
}

respond(false, 'We could not submit your request right now. Please call (716) 400-0769 or email solutions@urdigitaltech.com.');
