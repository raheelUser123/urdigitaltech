<?php
/**
 * Rename this file to config.local.php and add real credentials.
 * Never upload config.local.php to GitHub or share it publicly.
 */

define('SMTP_HOST', 'mail.yourdomain.com');
define('SMTP_PORT', 465);
define('SMTP_ENCRYPTION', 'ssl');
define('SMTP_USERNAME', 'forms@yourdomain.com');
define('SMTP_PASSWORD', 'YOUR_EMAIL_APP_PASSWORD');

define('MAIL_FROM_ADDRESS', 'forms@yourdomain.com');
define('MAIL_FROM_NAME', 'URDigital Tech Website');
define('MAIL_TO_ADDRESS', 'solutions@urdigitaltech.com');
define('MAIL_TO_NAME', 'URDigital Tech Team');

// Regenerate the token that was shared in chat, then paste the NEW token here.
define('CLICKUP_API_TOKEN', 'pk_REPLACE_WITH_NEW_TOKEN');
define('CLICKUP_LIST_ID', '901108518949');

// Optional ClickUp user ID. Leave blank to create unassigned tasks.
define('CLICKUP_DEFAULT_ASSIGNEE_ID', '');
define('CLICKUP_DEFAULT_TAG', 'website-lead');
