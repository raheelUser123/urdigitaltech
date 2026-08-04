<?php 
$page_title = 'Portfolio — URDigital Tech'; 
$page_description = 'Explore 40+ selected URDigital Tech websites, brand systems, marketing campaigns, analytics dashboards, and automation case studies.'; 
include 'includes/header.php';

$all_portfolio_items = [
    [
        'title' => 'Website Mockup 01',
        'cat' => 'Website',
        'code' => 'web',
        'image' => 'assets/images/portfolio/webui/web1.jpeg',
        'desc' => 'Modern website showcase designed for a clean SaaS-style presentation and higher conversion flow.'
    ],
    [
        'title' => 'Website Mockup 02',
        'cat' => 'Website',
        'code' => 'web',
        'image' => 'assets/images/portfolio/webui/web2.jpeg',
        'desc' => 'Responsive digital layout with strong product positioning, clarity, and polished user journey cues.'
    ],
    [
        'title' => 'Website Mockup 03',
        'cat' => 'Website',
        'code' => 'web',
        'image' => 'assets/images/portfolio/webui/web3.webp',
        'desc' => 'Conversion-first web concept built to communicate service value with speed and confidence.'
    ],
    [
        'title' => 'Website Mockup 04',
        'cat' => 'Website',
        'code' => 'web',
        'image' => 'assets/images/portfolio/webui/web4.webp',
        'desc' => 'Premium product and portfolio presentation developed for a modern digital-first brand.'
    ],
    [
        'title' => 'Website Mockup 05',
        'cat' => 'Website',
        'code' => 'web',
        'image' => 'assets/images/portfolio/webui/web5.webp',
        'desc' => 'High-impact homepage layout focused on trust, messaging clarity, and service positioning.'
    ],
    [
        'title' => 'Website Mockup 06',
        'cat' => 'Website',
        'code' => 'web',
        'image' => 'assets/images/portfolio/webui/web6.webp',
        'desc' => 'Clean, structured website concept designed to highlight conversion paths and product credibility.'
    ],
    [
        'title' => 'Branding Concept 01',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/branding/1.jpg',
        'desc' => 'Brand identity concept with a premium, strategic look tailored to modern business positioning.'
    ],
    [
        'title' => 'Branding Concept 02',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/branding/2.jpg',
        'desc' => 'Visual identity direction built around clarity, trust, and memorable modern brand signals.'
    ],
    [
        'title' => 'Branding Concept 03',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/branding/3.jpg',
        'desc' => 'Creative branding exploration balancing polished presentation with clear market differentiation.'
    ],
    [
        'title' => 'Branding Concept 04',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/branding/4.jpg',
        'desc' => 'Modern brand direction using typography, composition, and strong visual rhythm for recognition.'
    ],
    [
        'title' => 'Branding Concept 05',
        'cat' => 'Branding',
        'code' => 'branding',
        'image' => 'assets/images/portfolio/branding/5.jpg',
        'desc' => 'Fresh brand system designed to elevate perception and support a stronger digital presence.'
    ],
    [
        'title' => 'Logo Design 01',
        'cat' => 'Logo Design',
        'code' => 'logo',
        'image' => 'assets/images/portfolio/logo/Logo1.webp',
        'desc' => 'Logo concept crafted to feel professional, scalable, and easy to apply across online platforms.'
    ],
    [
        'title' => 'Logo Design 02',
        'cat' => 'Logo Design',
        'code' => 'logo',
        'image' => 'assets/images/portfolio/logo/Logo3.webp',
        'desc' => 'Distinct brand symbol developed for a clean, modern, and memorable digital-first identity.'
    ],
    [
        'title' => 'Logo Design 03',
        'cat' => 'Logo Design',
        'code' => 'logo',
        'image' => 'assets/images/portfolio/logo/Logo4.webp',
        'desc' => 'Creative logo exploration with strong shape language for technology, service, and brand recognition.'
    ],
    [
        'title' => 'Logo Design 04',
        'cat' => 'Logo Design',
        'code' => 'logo',
        'image' => 'assets/images/portfolio/logo/Logo5.webp',
        'desc' => 'Brand mark built for high flexibility across digital, print, and social usage scenarios.'
    ],
    [
        'title' => 'Logo Design 05',
        'cat' => 'Logo Design',
        'code' => 'logo',
        'image' => 'assets/images/portfolio/logo/Logo6.webp',
        'desc' => 'Professional logo design focused on clarity, impact, and long-term positioning value.'
    ],
    [
        'title' => 'Logo Design 06',
        'cat' => 'Logo Design',
        'code' => 'logo',
        'image' => 'assets/images/portfolio/logo/1.webp',
        'desc' => 'Modern visual identity built to feel credible, strong, and adaptable for growth-focused brands.'
    ],
    [
        'title' => 'Logo Design 07',
        'cat' => 'Logo Design',
        'code' => 'logo',
        'image' => 'assets/images/portfolio/logo/9.webp',
        'desc' => 'Logo direction designed to maintain consistency across web, print, packaging, and marketing.'
    ]
];

$cat_filter = isset($_GET['cat']) ? strtolower(trim($_GET['cat'])) : 'all';

$filtered_items = [];
if ($cat_filter !== 'all' && in_array($cat_filter, ['web', 'branding', 'logo'])) {
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
      <img src="assets/images/portfolio/logo/Logo1.webp" alt="Logo design portfolio showcase">
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
        <a href="?cat=web#portfolio-grid" class="filter-btn <?= $cat_filter==='web'?'active':'' ?>">Website</a>
        <a href="?cat=branding#portfolio-grid" class="filter-btn <?= $cat_filter==='branding'?'active':'' ?>">Branding</a>
        <a href="?cat=logo#portfolio-grid" class="filter-btn <?= $cat_filter==='logo'?'active':'' ?>">Logo Designs</a>
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
