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
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
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

  <!-- Slim Top Bar -->
  <div class="top-bar">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <!-- Left Side: Email & Phone -->
        <div class="top-bar-left d-flex align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-telephone"></i> <span><?= $phone ?></span>
          </a>
        </div>

        <!-- Middle-Left: Trust Badge & Happy Customers -->
        <div class="top-bar-middle d-flex align-items-center gap-3">
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-shield-check text-primary-light"></i> <span>Verified & Trusted</span>
          </span>
          <span class="divider-line">|</span>
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-people"></i> <span><?= $happyClients ?> Happy Customers</span>
          </span>
        </div>

        <!-- Right Side: Offer & Reviews Badges -->
        <div class="top-bar-right d-flex align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF ON YOUR FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Reviews
          </span>
        </div>
      </div>

      <!-- Mobile Top Bar -->
      <div class="top-bar-mobile d-flex d-lg-none flex-column gap-2 py-1">
        <!-- Row 1: Contact Info -->
        <div class="d-flex justify-content-center align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-telephone"></i> <span><?= $phone ?></span>
          </a>
        </div>
        <!-- Row 2: Offer & Google Reviews -->
        <div class="d-flex justify-content-center align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF ON YOUR FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Reviews
          </span>
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
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-4" itemscope
        itemtype="https://schema.org/SiteNavigationElement">
        <a itemprop="url" href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>"><span
            itemprop="name">Home</span></a>
        <div class="nav-item dropdown">
          <a href="<?= site_url('about-us') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'about' ? ' active' : '' ?>">About Us <i
              class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'about-us' ? ' active' : '' ?>"
                href="<?= site_url('about-us') ?>">About Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>"
                href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'faqs' ? ' active' : '' ?>"
                href="<?= site_url('faqs') ?>">FAQ</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'testimonials' ? ' active' : '' ?>"
                href="<?= site_url('testimonials') ?>">Testimonial</a></li>
          </ul>
        </div>
        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>"
            class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>">Services <i
              class="bi bi-chevron-down ms-1"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= $segment1 === 'home-relocation' ? ' active' : '' ?>"
                href="<?= site_url('home-relocation') ?>">Home Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'office-relocation' ? ' active' : '' ?>"
                href="<?= site_url('office-relocation') ?>">Office Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'car-transportation' ? ' active' : '' ?>"
                href="<?= site_url('car-transportation') ?>">Car Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'bike-transportation' ? ' active' : '' ?>"
                href="<?= site_url('bike-transportation') ?>">Bike Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'packing-and-moving' ? ' active' : '' ?>"
                href="<?= site_url('packing-and-moving') ?>">Packing &amp; Moving Service</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'loading-unloading' ? ' active' : '' ?>"
                href="<?= site_url('loading-unloading') ?>">Loading Unloading Service</a></li>
          </ul>
        </div>
        <a href="<?= site_url('our-branches') ?>"
          class="nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>">Locations</a>
        <a href="<?= site_url('blog') ?>" class="nav-link<?= $active_tab === 'blog' ? ' active' : '' ?>">Blog</a>
        <a href="<?= site_url('contact-us') ?>"
          class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">Contact Us</a>
        <a href="<?= site_url('tracking') ?>"
          class="nav-link<?= $active_tab === 'tracking' ? ' active' : '' ?>">Track</a>
      </nav>

      <!-- Header Action Buttons -->
      <div class="d-flex align-items-center gap-3">
        <!-- Get a Quote Button -->
        <a href="#" class="btn-quote d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
          <i class="bi bi-file-earmark-text"></i>
          <span>Get a Quote</span>
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

      <!-- Navigation Accordion -->
      <div class="mobile-nav-list">
        <div class="mobile-nav-item<?= $active_tab === 'home' ? ' active' : '' ?>">
          <a href="<?= site_url() ?>" class="mobile-nav-link">Home</a>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>About Us</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>">About Us</a>
            <a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>">Why
              Choose Us</a>
            <a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>">FAQ</a>
            <a href="<?= site_url('testimonials') ?>"
              class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>">Testimonial</a>
          </div>
        </div>

        <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
          <button class="mobile-nav-link mobile-dropdown-toggle">
            <span>Services</span>
            <i class="bi bi-chevron-down toggle-icon"></i>
          </button>
          <div class="mobile-dropdown-menu">
            <a href="<?= site_url('home-relocation') ?>"
              class="<?= $segment1 === 'home-relocation' ? 'active' : '' ?>">Home Relocation</a>
            <a href="<?= site_url('office-relocation') ?>"
              class="<?= $segment1 === 'office-relocation' ? 'active' : '' ?>">Office Relocation</a>
            <a href="<?= site_url('car-transportation') ?>"
              class="<?= $segment1 === 'car-transportation' ? 'active' : '' ?>">Car Transportation</a>
            <a href="<?= site_url('bike-transportation') ?>"
              class="<?= $segment1 === 'bike-transportation' ? 'active' : '' ?>">Bike Transportation</a>
            <a href="<?= site_url('packing-and-moving') ?>"
              class="<?= $segment1 === 'packing-and-moving' ? 'active' : '' ?>">Packing &amp; Moving Service</a>
            <a href="<?= site_url('loading-unloading') ?>"
              class="<?= $segment1 === 'loading-unloading' ? 'active' : '' ?>">Loading Unloading Service</a>
          </div>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'locations' ? ' active' : '' ?>">
          <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link">Locations</a>
        </div>
        <div class="mobile-nav-item<?= $active_tab === 'blog' ? ' active' : '' ?>">
          <a href="<?= site_url('blog') ?>" class="mobile-nav-link">Blog</a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
          <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link">Contact Us</a>
        </div>

        <div class="mobile-nav-item<?= $active_tab === 'tracking' ? ' active' : '' ?>">
          <a href="<?= site_url('tracking') ?>" class="mobile-nav-link">Track</a>
        </div>
      </div>

      <!-- Secondary Links -->
      <div class="mobile-sec-links">
        <a href="<?= site_url('photo-gallery') ?>">Gallery</a>
        <a href="<?= site_url('reviews') ?>">Reviews</a>
        <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
        <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
        <a href="<?= $megaWhatsappLink ?>" target="_blank" rel="noopener">WhatsApp</a>
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