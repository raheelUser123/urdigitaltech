<?php 
$page_title = 'Portfolio — URDigital Tech'; 
$page_description = 'Explore 40+ selected URDigital Tech websites, brand systems, marketing campaigns, analytics dashboards, and automation case studies.'; 
include 'includes/header.php';

$all_portfolio_items = [
    // Web & E-Commerce
    [
        'title' => 'Enterprise E-Commerce Portal',
        'cat' => 'E-Commerce',
        'code' => 'web',
        'image' => 'assets/images/portfolio/port1.jpg',
        'desc' => 'High-converting online store with seamless user journey, custom product showcase, and multi-currency checkout.'
    ],
    [
        'title' => 'Digital Experience & SaaS App',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/port2.png',
        'desc' => 'Modern Web application UI built for lightning speed, high customer engagement, and easy lead conversion.'
    ],
    [
        'title' => 'Services & Booking Platform',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/port5.png',
        'desc' => 'Clean digital booking interface with automated intake forms and responsive multi-device layout.'
    ],
    [
        'title' => 'Financial Analytics & Tech Hub',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/port6.png',
        'desc' => 'Data-intensive web platform featuring structured information architecture and live dashboard components.'
    ],
    [
        'title' => 'Corporate Agency Business Portal',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/port10.png',
        'desc' => 'Professional corporate website designed around trust, service clarity, and measurable lead generation.'
    ],
    [
        'title' => 'High-Impact Conversion Page',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/port14.jpg',
        'desc' => 'Focused landing page built to capture inbound interest and maximize visitor action.'
    ],
    [
        'title' => 'Modern Interactive Web UI',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/1.jpg',
        'desc' => 'Vibrant, responsive digital layout crafted for modern brand positioning and performance.'
    ],
    [
        'title' => 'B2B Marketplace & Store',
        'cat' => 'E-Commerce',
        'code' => 'web',
        'image' => 'assets/images/portfolio/2.jpg',
        'desc' => 'Scalable online shopping experience featuring intuitive catalog search and customer portal.'
    ],
    [
        'title' => 'Cloud Tech Solutions Portal',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/3.jpg',
        'desc' => 'Technology service website presenting complex offerings with visual clarity and speed.'
    ],
    [
        'title' => 'Health & Wellness Web Application',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/4.jpg',
        'desc' => 'Accessible, user-centric web platform engineered for seamless client onboarding.'
    ],
    [
        'title' => 'Creative Agency Digital Showcase',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/5.jpg',
        'desc' => 'Bold digital portfolio platform showcasing full-stack design and development expertise.'
    ],
    [
        'title' => 'Mobile-Optimized Web App Interface',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/9.webp',
        'desc' => 'Mobile-first application interface designed for effortless navigation and fast interactions.'
    ],

    // Branding & Logo Systems
    [
        'title' => 'Apex Tech Brand Identity',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/Logo1.webp',
        'desc' => 'Geometric, forward-looking logo mark designed for modern software and technology companies.'
    ],
    [
        'title' => 'Veritas Corporate Brand Mark',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/logo2.webp',
        'desc' => 'Versatile corporate identity system engineered for high legibility across print and digital media.'
    ],
    [
        'title' => 'Pulse Digital Startup Symbol',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/Logo3.webp',
        'desc' => 'Energetic visual mark and identity suite crafted for a high-growth tech startup.'
    ],
    [
        'title' => 'Nexus Ventures Brand System',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/Logo4.webp',
        'desc' => 'Clean typographic logo design paired with a comprehensive visual style architecture.'
    ],
    [
        'title' => 'Summit Financial Identity',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/Logo5.webp',
        'desc' => 'Strong, institutional emblem representing security, financial trust, and steady growth.'
    ],
    [
        'title' => 'Aura Studio Mark',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/logo6.webp',
        'desc' => 'Dynamic abstract logo mark blending modern color gradients with precise line work.'
    ],

    // Graphic Design & Marketing
    [
        'title' => 'Executive Keynote Deck Design',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp1.webp',
        'desc' => 'Polished investor and stakeholder presentation deck with custom data visualizations.'
    ],
    [
        'title' => 'Multi-Channel Social Campaign',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp2.webp',
        'desc' => 'Coordinated social graphics set tailored for cross-platform engagement and brand reach.'
    ],
    [
        'title' => 'Digital Product Rollout Kit',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp3.webp',
        'desc' => 'Complete marketing launch assets including social ads, email headers, and promo banners.'
    ],
    [
        'title' => 'Brand Asset & Guidelines Deck',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp4.webp',
        'desc' => 'Detailed visual standards guide establishing consistent typography, color palettes, and imagery.'
    ],
    [
        'title' => 'Lead Generation E-Book & Guide',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp5.webp',
        'desc' => 'Engaging multi-page lead magnet layout formatted for easy reading and conversion.'
    ],
    [
        'title' => 'Corporate Performance Report',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp6.webp',
        'desc' => 'Visually compelling annual report design featuring infographics and executive summaries.'
    ],
    [
        'title' => 'Retail Product Packaging System',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp7.webp',
        'desc' => 'Eye-catching packaging and label design built to stand out in competitive marketplaces.'
    ],
    [
        'title' => 'Trade Show & Event Collateral',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp8.webp',
        'desc' => 'High-resolution display graphics and printed materials for live conferences and events.'
    ],
    [
        'title' => 'Targeted Digital Display Ads',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp9.webp',
        'desc' => 'Performance ad creative suite optimized for display networks and retargeting campaigns.'
    ],
    [
        'title' => 'Content Marketing Visual Kit',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp10.webp',
        'desc' => 'Custom blog illustrations, infographic modules, and branded social assets.'
    ],
    [
        'title' => 'Sales Enablement One-Pager',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp11.webp',
        'desc' => 'High-impact sales sheet providing prospects with clear value propositions and pricing.'
    ],
    [
        'title' => 'Infographic & Data Visualization',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/bp12.webp',
        'desc' => 'Structured visual breakdown converting complex statistics into memorable, shareable insights.'
    ],

    // Automation & Dashboards
    [
        'title' => 'Real-Time Analytics & Funnel Dashboard',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/original-1a8e877909336fa9afb95b337864bf47.webp',
        'desc' => 'Live reporting console monitoring visitor traffic, lead pipeline stages, and conversion rates.'
    ],
    [
        'title' => 'CRM Lead Automation Console',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/original-a95fae93f827db9414b43038d4946ec4.webp',
        'desc' => 'Automated lead distribution and follow-up tracking system for sales and support teams.'
    ],
    [
        'title' => 'Customer Journey Tracking Portal',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/original-14a4259428156323b5367c87a4a9136d.webp',
        'desc' => 'Interactive campaign monitoring tool providing full transparency into lead acquisition channels.'
    ],
    [
        'title' => 'Automated Lead Capture Workflow',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/original-3ed6966095017bc72b02cf455e49c797.webp',
        'desc' => 'Integrated multi-step intake flow connected directly to automated email sequences.'
    ],
    [
        'title' => 'Custom Operations Management Portal',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/original-050aee70d94f2ef1afaabba39fb0dc0e.webp',
        'desc' => 'Centralized workflow management interface for tracking client deliverables and team tasks.'
    ],
    [
        'title' => 'Mobile Project Status Tracker',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/original-114e3628885d108cf861c6cefcec68c4.webp',
        'desc' => 'Responsive mobile app interface allowing managers to review project updates on the go.'
    ],
    [
        'title' => 'Enterprise Intelligence Dashboard',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/original-990ba4668b4af4524de31a5e413ebaba.webp',
        'desc' => 'Unified data hub consolidating web analytics, ad performance, and operational KPIs.'
    ],
    [
        'title' => 'Automated Alert & Notification Hub',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/original-d0898fdf8462c97d1eddc1b66877bf91.webp',
        'desc' => 'Real-time alert dispatch interface routing high-value leads to the right team member.'
    ],

    // UI Systems & Components
    [
        'title' => 'Cross-Device Web Interface System',
        'cat' => 'Web Design',
        'code' => 'web',
        'image' => 'assets/images/portfolio/types-img-1.png',
        'desc' => 'Modular component library ensuring visual and functional consistency across all screens.'
    ],
    [
        'title' => 'E-Commerce Conversion Checkout Flow',
        'cat' => 'E-Commerce',
        'code' => 'web',
        'image' => 'assets/images/portfolio/types-img-2.png',
        'desc' => 'Frictionless checkout UI designed to boost completion rates and order values.'
    ],
    [
        'title' => 'Digital Brand Asset & Icon Library',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/types-img-3.png',
        'desc' => 'Structured brand kit featuring scalable vector icons, badges, and UI elements.'
    ],
    [
        'title' => 'Social Campaign Creative Templates',
        'cat' => 'Marketing',
        'code' => 'marketing',
        'image' => 'assets/images/portfolio/types-img-4.png',
        'desc' => 'Flexible design layouts empowering marketing teams to produce consistent content fast.'
    ],
    [
        'title' => 'Automated Multi-Step Lead System',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/types-img-5.png',
        'desc' => 'Intelligent form architecture with real-time field validation and routing logic.'
    ],
    [
        'title' => 'Executive KPI & Growth Dashboard',
        'cat' => 'Automation',
        'code' => 'automation',
        'image' => 'assets/images/portfolio/types-img-6.png',
        'desc' => 'Executive-level metrics interface presenting revenue and customer acquisition trends.'
    ]
];

$cat_filter = isset($_GET['cat']) ? strtolower(trim($_GET['cat'])) : 'all';

$filtered_items = [];
if ($cat_filter !== 'all' && in_array($cat_filter, ['web', 'branding', 'marketing', 'automation'])) {
    foreach ($all_portfolio_items as $item) {
        if ($item['code'] === $cat_filter) {
            $filtered_items[] = $item;
        }
    }
} else {
    $filtered_items = $all_portfolio_items;
}

$per = 12;
$page = max(1, (int)($_GET['page'] ?? 1));
$pages = (int)ceil(count($filtered_items) / $per);
if ($pages < 1) $pages = 1;
$page = min($page, $pages);
$slice = array_slice($filtered_items, ($page - 1) * $per, $per);
?>

<header class="page-hero split-page-hero portfolio-hero">
  <div class="hero-orb orb-one"></div>
  <div class="container split-hero-grid">
    <div class="split-hero-copy reveal">
      <div class="eyebrow">Selected work</div>
      <h1>Digital work designed to earn attention and move people to act.</h1>
      <p class="lead">Explore websites, brand systems, campaigns, dashboards, and automations built around clearer journeys and measurable business goals.</p>
      <div class="cta-row">
        <a href="#portfolio-grid" class="btn btn-primary">Explore projects ↓</a>
        <a href="contact.php" class="btn btn-ghost">Start yours ↗</a>
      </div>
    </div>
    <div class="split-hero-media reveal">
      <img src="assets/images/portfolio/port1.jpg" alt="Modern website design portfolio showcase">
      <div class="hero-media-badge">
        <strong><?= count($all_portfolio_items) ?></strong>
        <span>featured projects</span>
      </div>
    </div>
  </div>
</header>

<?php include 'includes/trust-strip.php'; ?>

<section id="portfolio-grid">
  <div class="container">
    <div class="portfolio-filter reveal">
      <span>Explore by capability</span>
      <div>
        <a href="?cat=all#portfolio-grid" class="filter-btn <?= $cat_filter==='all'?'active':'' ?>">All (<?= count($all_portfolio_items) ?>)</a>
        <a href="?cat=web#portfolio-grid" class="filter-btn <?= $cat_filter==='web'?'active':'' ?>">Web Design</a>
        <a href="?cat=branding#portfolio-grid" class="filter-btn <?= $cat_filter==='branding'?'active':'' ?>">Branding</a>
        <a href="?cat=marketing#portfolio-grid" class="filter-btn <?= $cat_filter==='marketing'?'active':'' ?>">Marketing</a>
        <a href="?cat=automation#portfolio-grid" class="filter-btn <?= $cat_filter==='automation'?'active':'' ?>">Logos and Designs</a>
      </div>
    </div>

    <div class="portfolio-grid premium-portfolio">
      <?php foreach($slice as $x): ?>
        <article class="portfolio-card reveal" 
                 data-category="<?= htmlspecialchars($x['code']) ?>" 
                 data-title="<?= htmlspecialchars($x['title']) ?>" 
                 data-cat="<?= htmlspecialchars($x['cat']) ?>" 
                 data-img="<?= htmlspecialchars($x['image']) ?>" 
                 data-desc="<?= htmlspecialchars($x['desc']) ?>">
          <a class="portfolio-media portfolio-lightbox-trigger" href="javascript:void(0)" aria-label="View <?= htmlspecialchars($x['title']) ?>">
            <img src="<?= htmlspecialchars($x['image']) ?>" alt="<?= htmlspecialchars($x['title']) ?> showcase" loading="lazy">
            <span>Preview project ↗</span>
          </a>
          <div class="portfolio-copy">
            <small><?= htmlspecialchars($x['cat']) ?></small>
            <h2><?= htmlspecialchars($x['title']) ?></h2>
            <p><?= htmlspecialchars($x['desc']) ?></p>
            <a class="text-link portfolio-lightbox-trigger" href="javascript:void(0)">View project showcase →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <?php if ($pages > 1): ?>
      <nav class="pagination" aria-label="Portfolio pages">
        <?php for($p = 1; $p <= $pages; $p++): ?>
          <a class="<?= $p === $page ? 'active' : '' ?>" href="?page=<?= $p ?>&cat=<?= urlencode($cat_filter) ?>#portfolio-grid"><?= $p ?></a>
        <?php endfor; ?>
      </nav>
    <?php endif; ?>
  </div>
</section>

<!-- Portfolio Lightbox Modal -->
<div id="portfolio-modal" class="query-popup portfolio-modal" role="dialog" aria-hidden="true" aria-label="Project showcase detail">
  <div class="query-popup-card portfolio-modal-card">
    <div class="portfolio-modal-media">
      <div class="mac-bar">
        <div class="mac-dots">
          <span class="mac-dot mac-red"></span>
          <span class="mac-dot mac-yellow"></span>
          <span class="mac-dot mac-green"></span>
        </div>
        <div class="mac-url-bar" id="modal-url">urdigitaltech.com/preview</div>
      </div>
      <div class="portfolio-modal-media-inner">
        <img id="modal-img" src="" alt="Project Preview">
        <div class="portfolio-modal-hint">Hover to scroll full page ↕</div>
      </div>
    </div>
    <div class="query-popup-content portfolio-modal-content">
      <button class="query-popup-close modal-close" aria-label="Close modal">×</button>
      <div class="eyebrow" id="modal-cat">Capability</div>
      <h2 id="modal-title" style="font-size:clamp(1.8rem,3.2vw,2.6rem); margin: 6px 0 12px;">Project Title</h2>
      <p id="modal-desc" style="color:var(--muted); line-height:1.65; margin-bottom:24px;">Project description...</p>
      <div class="cta-row" style="margin-top:auto;">
        <a class="btn btn-primary pulse-cta" href="contact.php">Start a similar project →</a>
        <a class="btn btn-ghost" href="schedule.php">Book a call ↗</a>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('portfolio-modal');
  if (!modal) return;
  const modalImg = document.getElementById('modal-img');
  const modalCat = document.getElementById('modal-cat');
  const modalTitle = document.getElementById('modal-title');
  const modalDesc = document.getElementById('modal-desc');
  const modalUrl = document.getElementById('modal-url');
  const closeBtn = modal.querySelector('.modal-close');

  const setupHoverScroll = () => {
    modalImg.style.transform = 'translateY(0)';
    modalImg.style.transition = 'transform 0.3s ease';

    const inner = modalImg.closest('.portfolio-modal-media-inner') || modalImg.parentElement;
    if (!inner) return;

    const calcAndAttach = () => {
      const containerH = inner.clientHeight;
      const renderedH = modalImg.naturalHeight
        ? (modalImg.naturalHeight * (modalImg.clientWidth / modalImg.naturalWidth))
        : modalImg.clientHeight;
      const scrollDist = Math.max(0, renderedH - containerH);
      const duration = Math.min(8, Math.max(3.5, scrollDist / 250));

      inner.onmouseenter = () => {
        if (scrollDist > 10) {
          modalImg.style.transition = `transform ${duration}s cubic-bezier(0.25, 1, 0.5, 1)`;
          modalImg.style.transform = `translateY(-${scrollDist}px)`;
        }
      };

      inner.onmouseleave = () => {
        modalImg.style.transition = `transform 0.7s cubic-bezier(0.25, 1, 0.5, 1)`;
        modalImg.style.transform = 'translateY(0)';
      };
    };

    if (modalImg.complete) {
      calcAndAttach();
    } else {
      modalImg.onload = calcAndAttach;
    }
  };

  const openModal = (card) => {
    modalImg.src = card.dataset.img;
    modalCat.textContent = card.dataset.cat;
    modalTitle.textContent = card.dataset.title;
    modalDesc.textContent = card.dataset.desc;
    if (modalUrl) {
      const cleanSlug = (card.dataset.title || 'preview').toLowerCase().replace(/[^a-z0-9]+/g, '-');
      modalUrl.textContent = `urdigitaltech.com/${cleanSlug}`;
    }
    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    setupHoverScroll();
  };

  const closeModal = () => {
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    modalImg.style.transform = 'translateY(0)';
  };

  document.querySelectorAll('.portfolio-card').forEach(card => {
    card.querySelectorAll('.portfolio-lightbox-trigger').forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        e.preventDefault();
        openModal(card);
      });
    });
  });

  closeBtn?.addEventListener('click', closeModal);
  modal.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
  });
});
</script>

<?php include 'includes/footer.php'; ?>
