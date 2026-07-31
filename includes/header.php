<?php
if (!isset($page_title)) $page_title = 'URDigital Tech — Digital, Creative & Business Services';
if (!isset($page_description)) $page_description = 'URDigital Tech helps businesses grow with web, marketing, design, consulting and operational support.';
if (!isset($canonical_path)) $canonical_path = basename($_SERVER['PHP_SELF']);
$current_page = basename($_SERVER['PHP_SELF']);
$all_services = require __DIR__ . '/../data.php';
function service_url($slug){ return $slug . '.php'; }
?>
<!doctype html><html lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">
<link rel="canonical" href="https://urdigitaltech.com/<?= htmlspecialchars($canonical_path === 'index.php' ? '' : $canonical_path) ?>">
<meta property="og:type" content="website"><meta property="og:title" content="<?= htmlspecialchars($page_title) ?>"><meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
<meta property="og:image" content="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80">
<meta name="theme-color" content="#080b19">
<link rel="icon" href="assets/favicon/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
<link rel="manifest" href="assets/favicon/site.webmanifest">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css"></head><body>
<div class="site-noise" aria-hidden="true"></div>
<nav class="nav"><div class="container nav-inner">
<a href="index.php" class="brand" aria-label="URDigital Tech home"><img src="assets/images/urdigilogo.png" alt="URDigital Tech logo" class="brand-logo"></a>
<div class="desktop-nav">
<a href="index.php">Home</a><a href="about.php">About</a>
<div class="nav-dropdown"><button type="button">Services <svg class="nav-caret" viewBox="0 0 12 8" aria-hidden="true"><path d="M1.5 1.5 6 6l4.5-4.5"/></svg></button><div class="mega-menu"><div class="mega-intro"><span class="eyebrow">All capabilities</span><h3>One partner for digital growth.</h3><p>Strategy, design, technology, marketing and business support in one coordinated team.</p><a class="text-link" href="services.php">Explore all services →</a></div><div class="mega-links"><?php foreach ($all_services as $slug=>$service): ?><a href="<?= service_url($slug) ?>"><span><span class="service-menu-icon"><?= htmlspecialchars(strtoupper(substr($service['title'],0,2))) ?></span><?= htmlspecialchars($service['title']) ?></span><small>View details →</small></a><?php endforeach; ?></div></div></div>
<a href="portfolio.php">Portfolio</a><a href="faq.php">FAQs</a><a href="lead-capture-system.php">Lead Capture</a>
</div>
<div class="nav-actions"><button class="theme-toggle" id="theme-toggle" aria-label="Toggle color theme"><span class="theme-icon">◐</span></button><a href="schedule.php" class="nav-cta">Book a Call</a><button class="menu-trigger" id="menu-trigger" aria-label="Open menu" aria-expanded="false"><span></span><span></span></button></div>
</div></nav>
<div class="menu-overlay" id="menu-overlay"></div>
<aside class="side-panel" id="side-panel" aria-hidden="true"><div class="panel-head"><a href="index.php" class="brand"><img src="assets/images/urdigilogo.png" alt="URDigital Tech logo" class="brand-logo"></a><button id="menu-close" class="menu-close" aria-label="Close menu">×</button></div><div class="panel-scroll"><nav class="panel-nav"><a href="index.php">Home</a><a href="about.php">About</a><details open><summary>Services</summary><div class="panel-service-grid"><?php foreach ($all_services as $slug=>$service): ?><a href="<?= service_url($slug) ?>"><span class="service-menu-icon"><?= htmlspecialchars(strtoupper(substr($service['title'],0,2))) ?></span><?= htmlspecialchars($service['title']) ?></a><?php endforeach; ?></div></details><a href="portfolio.php">Portfolio</a><a href="faq.php">FAQs</a><a href="lead-capture-system.php">Lead Capture System</a><a href="contact.php">Contact</a><a href="schedule.php">Schedule a Call</a></nav></div><div class="panel-contact"><span>Let’s talk</span><a href="mailto:solutions@urdigitaltech.com">solutions@urdigitaltech.com</a><a href="tel:17164000769">(716) 400-0769</a><p>Buffalo, New York</p><div class="panel-cta-row"><a class="btn btn-primary" href="contact.php">Start a project</a><a class="btn btn-ghost" href="schedule.php">Book a call</a></div></div></aside>
<main>