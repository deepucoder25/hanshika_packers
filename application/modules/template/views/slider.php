<section class="home-page-slider" itemscope itemtype="https://schema.org/WPHeader">
  
  <div class="home-page-slider-content py-4">
    <div class="container position-relative">
      
      <div class="row align-items-center">
        <!-- Left Hero Content Column -->
        <div class="col-lg-7 text-start hero-text-col">
          
          <!-- Yellow Tag Banner -->
          <div class="hero-tag-badge">
            <span>SAFE. SECURE. ON TIME.</span>
          </div>

          <!-- Headline -->
          <h1 class="hero-title" itemprop="name">
            Hassle-Free <br>
            <span class="hero-title-red"><?= $company3 ?></span>
          </h1>

          <!-- Cursive Script Line -->
          <div class="hero-cursive-line">
            We Move Your <span class="cursive-highlight">Memories</span> With Care
            <svg class="curve-stroke" width="110" height="12" viewBox="0 0 110 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 9C30 3 80 2 108 8" stroke="var(--theme-yellow)" stroke-width="4" stroke-linecap="round"/>
            </svg>
          </div>

          <!-- Description -->
          <p class="hero-lead" itemprop="description">
            <?= $company3 ?> provides reliable and affordable moving services for your home, office, car and more.
          </p>

          <!-- 4 Feature Pills Strip -->
          <div class="hero-features-strip">
            <div class="feature-pill">
              <div class="pill-icon-ring"><i class="bi bi-shield-check"></i></div>
              <span>Safe &amp; Secure</span>
            </div>
            <div class="feature-pill">
              <div class="pill-icon-ring"><i class="bi bi-clock-history"></i></div>
              <span>On-Time Delivery</span>
            </div>
            <div class="feature-pill">
              <div class="pill-icon-ring"><i class="bi bi-people-fill"></i></div>
              <span>Experienced Team</span>
            </div>
            <div class="feature-pill">
              <div class="pill-icon-ring"><i class="bi bi-currency-rupee"></i></div>
              <span>Affordable Pricing</span>
            </div>
          </div>

          <!-- Hero Action Buttons -->
          <div class="hero-actions-row">
            <button type="button" class="btn-hero-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
              GET A FREE QUOTE <i class="bi bi-arrow-right ms-2"></i>
            </button>

            <div class="hero-call-wrap">
              <a href="<?= $phonehtml ?>" class="call-btn-circle">
                <i class="bi bi-telephone-fill"></i>
              </a>
              <div class="call-text-box">
                <span class="call-label">Call Us 24/7</span>
                <a href="<?= $phonehtml ?>" class="call-number"><?= $phone ?></a>
                <svg class="call-underline-stroke" width="90" height="6" viewBox="0 0 90 6" fill="none">
                  <path d="M1 4C25 1 65 1 89 4" stroke="var(--theme-yellow)" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
          </div>

          <!-- Floating Rating Badge (Top Center Desktop / Below Call Row Mobile) -->
          <div class="hero-rating-badge d-flex">
            <div class="rating-avatars">
              <img src="https://i.pravatar.cc/100?img=32" alt="Customer" class="avatar-img" loading="lazy">
              <img src="https://i.pravatar.cc/100?img=47" alt="Customer" class="avatar-img" loading="lazy">
              <img src="https://i.pravatar.cc/100?img=12" alt="Customer" class="avatar-img" loading="lazy">
              <span class="rating-score-pill"><?= $ratingValue ?></span>
            </div>
            <div class="rating-text-block">
              <div class="rating-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="rating-subtext">Trusted by <?= $happyClients ?> Happy Customers</span>
            </div>
          </div>

        </div>

        <!-- Right Side Overlay Quote Form Card -->
        <div class="col-lg-5 col-12 hero-form-col">
          <?php $this->load->view('contacts/quoteform.php'); ?>
        </div>

      </div>
    </div>
  </div>

  <!-- Bottom Red Wave Stats Banner -->
  <div class="hero-bottom-wave-banner">
    <div class="container position-relative">
      <div class="row align-items-center">
        
        <div class="col-12">
          <div class="hero-stats-row">
            
            <div class="stat-item">
              <div class="stat-icon-circle"><i class="bi bi-truck"></i></div>
              <div class="stat-text-box">
                <span class="stat-number"><?= $successfullShifts ?></span>
                <span class="stat-label">Successful Moves</span>
              </div>
            </div>

            <div class="stat-item">
              <div class="stat-icon-circle"><i class="bi bi-people-fill"></i></div>
              <div class="stat-text-box">
                <span class="stat-number"><?= $happyClients ?></span>
                <span class="stat-label">Happy Customers</span>
              </div>
            </div>

            <div class="stat-item">
              <div class="stat-icon-circle"><i class="bi bi-geo-alt-fill"></i></div>
              <div class="stat-text-box">
                <span class="stat-number"><?= $statesCovered ?></span>
                <span class="stat-label">Cities Served</span>
              </div>
            </div>

            <div class="stat-item">
              <div class="stat-icon-circle"><i class="bi bi-shield-check"></i></div>
              <div class="stat-text-box">
                <span class="stat-number"><?= $secureShifting ?></span>
                <span class="stat-label">Safe &amp; Secure Delivery</span>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</section>
