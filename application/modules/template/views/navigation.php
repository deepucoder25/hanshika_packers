<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials', 'privacy-policy', 'terms-and-conditions'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'warehouse-and-storage', 'domestic-relocation', 'international-shifting', 'corporate-shifting', 'intercity-shifting', 'local-shifting', 'logistic-services', 'pet-relocation', 'home-relocation', 'storage-services', 'car-transportation-service'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
    $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- Slim Top Bar (Hidden on Mobile) -->
  <div class="top-bar d-none d-lg-block">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <!-- Left Side: Email & Phone Pill Buttons -->
        <div class="top-bar-left d-flex align-items-center gap-2">
          <a href="<?= $mailhtml ?>" class="top-info-link d-flex align-items-center gap-2">
            <i class="bi bi-envelope-fill"></i> <span><?= $mail ?></span>
          </a>
          <a href="<?= $phonehtml ?>" class="top-info-link d-flex align-items-center gap-2">
            <i class="bi bi-telephone-fill"></i> <span><?= $phone ?></span>
          </a>
        </div>

        <!-- Middle: 24x7 Support & Pan-India Coverage Badges -->
        <div class="top-bar-middle d-flex align-items-center gap-2">
          <span class="top-badge-pill highlight-support">
            <i class="bi bi-headset text-warning"></i> 24x7 Helpline
          </span>
          <span class="top-badge-pill highlight-coverage">
            <i class="bi bi-geo-alt-fill text-warning"></i> Pan-India Moving
          </span>
          <span class="top-badge-pill highlight-trust">
            <i class="bi bi-shield-check text-warning"></i> Verified &amp; Trusted
          </span>
        </div>

        <!-- Right Side: Offer, Reviews & WhatsApp Quick Chat -->
        <div class="top-bar-right d-flex align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?>★ Google Rated
          </span>
          <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener" class="top-badge-pill highlight-whatsapp text-decoration-none">
            <i class="bi bi-whatsapp"></i> Live Chat
          </a>
        </div>
      </div>

      <!-- Mobile Top Bar -->
      <div class="top-bar-mobile d-flex d-lg-none flex-column gap-2 py-1">
        <!-- Row 1: Contact Info -->
        <div class="d-flex justify-content-center align-items-center gap-2">
          <a href="<?= $mailhtml ?>" class="top-info-link d-flex align-items-center gap-1">
            <i class="bi bi-envelope-fill"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="top-info-link d-flex align-items-center gap-1">
            <i class="bi bi-telephone-fill"></i> <span><?= $phone ?></span>
          </a>
        </div>
        <!-- Row 2: Offer, Google Reviews & WhatsApp -->
        <div class="d-flex justify-content-center align-items-center flex-wrap gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?>★ Rated
          </span>
          <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener" class="top-badge-pill highlight-whatsapp text-decoration-none">
            <i class="bi bi-whatsapp"></i> WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- SEO Friendly SiteNavigationElement Schema -->
  <?php
  $nav_schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
      ["@type" => "SiteNavigationElement", "name" => "Locations", "url" => site_url('our-branches')],
      ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')],
      ["@type" => "SiteNavigationElement", "name" => "Track", "url" => site_url('tracking')]
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers"
          class="brand-logo">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-2" itemscope
        itemtype="https://schema.org/SiteNavigationElement">
        <a itemprop="url" href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>">
          <i class="bi bi-house-door-fill nav-icon"></i>
          <span itemprop="name">Home</span>
        </a>

        <div class="nav-item dropdown">
          <a href="<?= site_url('about-us') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'about' ? ' active' : '' ?>">
            <i class="bi bi-info-circle-fill nav-icon"></i>
            <span>About Us</span>
            <i class="bi bi-chevron-down ms-1 arrow-icon"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item<?= $segment1 === 'about-us' ? ' active' : '' ?>" href="<?= site_url('about-us') ?>">
                <span class="icon-box red-icon"><i class="bi bi-building"></i></span>
                <span>About Company</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>" href="<?= site_url('why-choose-us') ?>">
                <span class="icon-box yellow-icon"><i class="bi bi-patch-check-fill"></i></span>
                <span>Why Choose Us</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'faqs' ? ' active' : '' ?>" href="<?= site_url('faqs') ?>">
                <span class="icon-box red-icon"><i class="bi bi-question-circle-fill"></i></span>
                <span>FAQ</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'testimonials' ? ' active' : '' ?>" href="<?= site_url('testimonials') ?>">
                <span class="icon-box yellow-icon"><i class="bi bi-chat-square-quote-fill"></i></span>
                <span>Testimonials</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'privacy-policy' ? ' active' : '' ?>" href="<?= site_url('privacy-policy') ?>">
                <span class="icon-box red-icon"><i class="bi bi-shield-lock-fill"></i></span>
                <span>Privacy Policy</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'terms-and-conditions' ? ' active' : '' ?>" href="<?= site_url('terms-and-conditions') ?>">
                <span class="icon-box yellow-icon"><i class="bi bi-file-earmark-text-fill"></i></span>
                <span>Terms &amp; Conditions</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">
            <i class="bi bi-box-seam-fill nav-icon"></i>
            <span>Services</span>
            <i class="bi bi-chevron-down ms-1 arrow-icon"></i>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item<?= $segment1 === 'home-relocation' ? ' active' : '' ?>" href="<?= site_url('home-relocation') ?>">
                <span class="icon-box red-icon"><i class="bi bi-house-door-fill"></i></span>
                <span>Home Relocation</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'office-relocation' ? ' active' : '' ?>" href="<?= site_url('office-relocation') ?>">
                <span class="icon-box red-icon"><i class="bi bi-briefcase-fill"></i></span>
                <span>Office Relocation</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'car-transportation' ? ' active' : '' ?>" href="<?= site_url('car-transportation') ?>">
                <span class="icon-box yellow-icon"><i class="bi bi-car-front-fill"></i></span>
                <span>Car Transportation</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'bike-transportation' ? ' active' : '' ?>" href="<?= site_url('bike-transportation') ?>">
                <span class="icon-box yellow-icon"><i class="bi bi-scooter"></i></span>
                <span>Bike Transportation</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'packing-and-moving' ? ' active' : '' ?>" href="<?= site_url('packing-and-moving') ?>">
                <span class="icon-box red-icon"><i class="bi bi-box-seam-fill"></i></span>
                <span>Packing &amp; Moving</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
            <li>
              <a class="dropdown-item<?= $segment1 === 'loading-unloading' ? ' active' : '' ?>" href="<?= site_url('loading-unloading') ?>">
                <span class="icon-box red-icon"><i class="bi bi-truck"></i></span>
                <span>Loading &amp; Unloading</span>
                <i class="bi bi-chevron-right item-arrow"></i>
              </a>
            </li>
          </ul>
        </div>

        <a href="<?= site_url('our-branches') ?>"
          class="nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>">
          <i class="bi bi-geo-alt-fill nav-icon"></i>
          <span>Locations</span>
        </a>

        <a href="<?= site_url('blog') ?>" class="nav-link<?= $active_tab === 'blog' ? ' active' : '' ?>">
          <i class="bi bi-journal-richtext nav-icon"></i>
          <span>Blog</span>
        </a>

        <a href="<?= site_url('contact-us') ?>"
          class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">
          <i class="bi bi-telephone-outbound-fill nav-icon"></i>
          <span>Contact Us</span>
        </a>

        <a href="<?= site_url('tracking') ?>"
          class="nav-link<?= $active_tab === 'tracking' ? ' active' : '' ?>">
          <i class="bi bi-crosshair nav-icon"></i>
          <span>Track</span>
        </a>
      </nav>

      <!-- Header Action Buttons (Only Phone Number Button) -->
      <div class="d-flex align-items-center gap-2">
        <a href="<?= $phonehtml ?>" class="btn-phone-cta d-flex align-items-center gap-2">
          <i class="bi bi-telephone-fill"></i>
          <span><?= $phone ?></span>
        </a>

        <!-- Hamburger for Mobile -->
        <button class="hamburger d-flex d-lg-none" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu (overlay menu when clicking hamburger) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
      <i class="bi bi-x"></i>
    </button>

    <div class="mega-inner">
      <!-- Mobile Brand & Quick Action Header Card -->
      <div class="mega-brand-card">
        <div class="d-flex align-items-center justify-content-between mb-2">
          <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers" class="mega-logo" loading="lazy">
          <span class="mega-badge"><i class="bi bi-patch-check-fill me-1"></i> ISO Certified</span>
        </div>
        <div class="mega-call-btn-container">
          <a href="<?= $phonehtml ?>" class="mega-call-primary">
            <i class="bi bi-telephone-fill"></i> <span>Call <?= $phone ?></span>
          </a>
        </div>
      </div>

      <!-- Navigation Accordion List -->
      <div class="mobile-nav-list">
        <div class="mobile-nav-item<?= $active_tab === 'home' ? ' active' : '' ?>">
          <a href="<?= site_url() ?>" class="mobile-nav-link">
            <div class="d-flex align-items-center">
              <span class="m-icon-box"><i class="bi bi-house-door-fill"></i></span>
              <span class="nav-text">Home</span>
            </div>
            <i class="bi bi-chevron-right item-arrow"></i>
          </a>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <div class="d-flex align-items-center">
              <span class="m-icon-box"><i class="bi bi-info-circle-fill"></i></span>
              <span class="nav-text">About Us</span>
            </div>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('about-us') ?>" class="sub-item-link<?= $segment1 === 'about-us' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-building"></i></span>
                <span>About Company</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('why-choose-us') ?>" class="sub-item-link<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-patch-check-fill"></i></span>
                <span>Why Choose Us</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('faqs') ?>" class="sub-item-link<?= $segment1 === 'faqs' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-question-circle-fill"></i></span>
                <span>FAQ</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('testimonials') ?>" class="sub-item-link<?= $segment1 === 'testimonials' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-chat-square-quote-fill"></i></span>
                <span>Testimonials</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('privacy-policy') ?>" class="sub-item-link<?= $segment1 === 'privacy-policy' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-shield-lock-fill"></i></span>
                <span>Privacy Policy</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('terms-and-conditions') ?>" class="sub-item-link<?= $segment1 === 'terms-and-conditions' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-file-earmark-text-fill"></i></span>
                <span>Terms &amp; Conditions</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
          </div>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <div class="d-flex align-items-center">
              <span class="m-icon-box"><i class="bi bi-box-seam-fill"></i></span>
              <span class="nav-text">Services</span>
            </div>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('home-relocation') ?>" class="sub-item-link<?= $segment1 === 'home-relocation' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-house-door-fill"></i></span>
                <span>Home Relocation</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('office-relocation') ?>" class="sub-item-link<?= $segment1 === 'office-relocation' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-briefcase-fill"></i></span>
                <span>Office Relocation</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('car-transportation') ?>" class="sub-item-link<?= $segment1 === 'car-transportation' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-car-front-fill"></i></span>
                <span>Car Transportation</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('bike-transportation') ?>" class="sub-item-link<?= $segment1 === 'bike-transportation' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-scooter"></i></span>
                <span>Bike Transportation</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('packing-and-moving') ?>" class="sub-item-link<?= $segment1 === 'packing-and-moving' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-box-seam-fill"></i></span>
                <span>Packing &amp; Moving</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
            <a href="<?= site_url('loading-unloading') ?>" class="sub-item-link<?= $segment1 === 'loading-unloading' ? ' active' : '' ?>">
              <div class="d-flex align-items-center">
                <span class="sub-icon-box"><i class="bi bi-truck"></i></span>
                <span>Loading &amp; Unloading</span>
              </div>
              <i class="bi bi-chevron-right sub-arrow"></i>
            </a>
          </div>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'locations' ? ' active' : '' ?>">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link">
            <div class="d-flex align-items-center">
              <span class="m-icon-box"><i class="bi bi-geo-alt-fill"></i></span>
              <span class="nav-text">Locations</span>
            </div>
            <i class="bi bi-chevron-right item-arrow"></i>
          </a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'blog' ? ' active' : '' ?>">
          <a href="<?= site_url('blog') ?>" class="mobile-nav-link">
            <div class="d-flex align-items-center">
              <span class="m-icon-box"><i class="bi bi-journal-richtext"></i></span>
              <span class="nav-text">Blog</span>
            </div>
            <i class="bi bi-chevron-right item-arrow"></i>
          </a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link">
            <div class="d-flex align-items-center">
              <span class="m-icon-box"><i class="bi bi-telephone-outbound-fill"></i></span>
              <span class="nav-text">Contact Us</span>
            </div>
            <i class="bi bi-chevron-right item-arrow"></i>
          </a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'tracking' ? ' active' : '' ?>">
          <a href="<?= site_url('tracking') ?>" class="mobile-nav-link">
            <div class="d-flex align-items-center">
              <span class="m-icon-box"><i class="bi bi-crosshair"></i></span>
              <span class="nav-text">Track Consignment</span>
            </div>
            <i class="bi bi-chevron-right item-arrow"></i>
          </a>
        </div>
      </div>

      <!-- Secondary Links Pills Footer -->
      <div class="mobile-sec-links">
        <div class="sec-links-title">
          <i class="bi bi-compass-fill text-danger me-1"></i> Quick Shortcuts
        </div>
        <div class="d-flex flex-wrap gap-2">
          <a href="<?= site_url('photo-gallery') ?>" class="sec-chip gallery-chip">
            <i class="bi bi-images me-1"></i> Gallery
          </a>
          <a href="<?= site_url('reviews') ?>" class="sec-chip reviews-chip">
            <i class="bi bi-star-fill me-1"></i> Reviews
          </a>
          <a href="<?= site_url('privacy-policy') ?>" class="sec-chip standard-chip">
            <i class="bi bi-shield-lock-fill me-1"></i> Privacy Policy
          </a>
          <a href="<?= site_url('terms-and-conditions') ?>" class="sec-chip standard-chip">
            <i class="bi bi-file-text-fill me-1"></i> Terms
          </a>
          <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener" class="sec-chip whatsapp-chip">
            <i class="bi bi-whatsapp me-1"></i> WhatsApp Chat
          </a>
        </div>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    openMenu.addEventListener('click', () => {
      megaMenu.classList.add('active');
      body.classList.add('menu-open');
    });

    closeMenu.addEventListener('click', () => {
      megaMenu.classList.remove('active');
      body.classList.remove('menu-open');
    });

    // Toggle mobile dropdown accordions
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');

        // Close other open dropdowns (accordion style)
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('active');
          }
        });

        parent.classList.toggle('active');
      });
    });

    // Close menu when clicking on backdrop overlay
    megaMenu.addEventListener('click', (e) => {
      if (e.target === megaMenu) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      mainHeader.classList.toggle('scrolled', window.scrollY > 20);
    });
  </script>