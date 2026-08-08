<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================
     CITY PAGE SIDEBAR
     Available vars: $city, $state, $company3, $experience,
                     $startYear, $phone, $phone1, $phonehtml,
                     $phonehtml1, $whatsapphtml, $cities, $st
  ====================================================== -->

<aside class="pm-city-sidebar">

  <!-- CTA Contact Card -->
  <div class="pm-city-sidebar-widget pm-city-cta-card">
    <!-- Decorative BG icon -->
    <i class="bi bi-headset pm-city-cta-bg-icon"></i>

    <div class="pm-city-cta-inner">
      <div class="pm-city-cta-icon-wrap">
        <i class="bi bi-headset"></i>
      </div>
      <h4 class="pm-city-cta-title">Need Help Moving in <span><?= $city ?></span>?</h4>
      <p class="pm-city-cta-desc">Get a free consultation from our shifting experts. Available 24/7.</p>

      <div class="pm-city-cta-buttons">
        <!-- Primary Phone -->
        <a href="<?= $phonehtml ?>" class="pm-city-cta-btn pm-city-cta-call" id="sidebarCallBtn">
          <i class="bi bi-telephone-fill"></i>
          <div>
            <small>Call Support &nbsp;<span class="pm-city-badge-live">LIVE</span></small>
            <strong><?= $phone ?></strong>
          </div>
        </a>

        <!-- Alternate Phone -->
        <a href="<?= $phonehtml1 ?>" class="pm-city-cta-btn pm-city-cta-alt-call" id="sidebarAltCallBtn">
          <i class="bi bi-telephone"></i>
          <div>
            <small>Alternate Line</small>
            <strong><?= $phone1 ?></strong>
          </div>
        </a>

        <!-- Action Row -->
        <div class="pm-city-cta-action-row">
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="pm-city-action-btn pm-city-whatsapp-btn" id="sidebarWhatsAppBtn">
            <i class="bi bi-whatsapp"></i>
            WhatsApp
          </a>
          <button type="button" class="pm-city-action-btn pm-city-quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal" id="sidebarQuoteBtn">
            <i class="bi bi-clipboard-check"></i>
            Get Quote
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Services Widget -->
  <div class="pm-city-sidebar-widget mt-4" id="sidebarServicesWidget">
    <h4 class="pm-city-sidebar-widget-title">
      <i class="bi bi-grid-3x3-gap-fill me-2"></i>Our Services
    </h4>
    <p class="pm-city-sidebar-widget-desc">Expert relocation solutions in <?= $city ?>.</p>
    <ul class="pm-city-services-list" id="citySidebarServiceList">
      <?php
      $sidebar_services = [
        ['slug' => 'home-shifting',         'name' => 'Home Shifting',         'icon' => 'bi-house-heart-fill'],
        ['slug' => 'office-relocation',     'name' => 'Office Relocation',     'icon' => 'bi-building-gear'],
        ['slug' => 'car-transportation',    'name' => 'Car Transportation',    'icon' => 'bi-car-front-fill'],
        ['slug' => 'bike-transportation',   'name' => 'Bike Transportation',   'icon' => 'bi-bicycle'],
        ['slug' => 'warehouse-and-storage', 'name' => 'Warehouse & Storage',   'icon' => 'bi-box-seam-fill'],
        ['slug' => 'domestic-relocation',   'name' => 'Domestic Relocation',   'icon' => 'bi-truck'],
        ['slug' => 'local-shifting',        'name' => 'Local Shifting',        'icon' => 'bi-geo-alt-fill'],
        ['slug' => 'intercity-shifting',    'name' => 'Intercity Shifting',    'icon' => 'bi-signpost-split-fill'],
      ];
      foreach ($sidebar_services as $srv):
      ?>
      <li>
        <a href="<?= site_url($srv['slug']) ?>" class="pm-city-service-link" id="sidebarService-<?= $srv['slug'] ?>">
          <span class="pm-city-svc-icon"><i class="bi <?= $srv['icon'] ?>"></i></span>
          <span class="pm-city-svc-name"><?= $srv['name'] ?></span>
          <i class="bi bi-chevron-right pm-city-svc-arrow"></i>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
    <a href="<?= site_url('our-services') ?>" class="pm-city-view-all-btn" id="sidebarViewAllServices">
      <i class="bi bi-grid me-1"></i> View All Services
      <i class="bi bi-arrow-right ms-1"></i>
    </a>
  </div>

  <!-- Trust Badges Widget -->
  <div class="pm-city-sidebar-widget mt-4" id="sidebarTrustWidget">
    <h4 class="pm-city-sidebar-widget-title">
      <i class="bi bi-patch-check-fill me-2 text-success"></i>Why Choose <?= $company3 ?>?
    </h4>
    <ul class="pm-city-trust-list">
      <li>
        <div class="pm-city-trust-icon-wrap"><i class="bi bi-clock-history"></i></div>
        <div>
          <strong><?= $yearsExperience ?> Years Experience</strong>
          <small>Trusted since <?= $startYear ?></small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-green"><i class="bi bi-people-fill"></i></div>
        <div>
          <strong><?= $happyClients ?> Happy Clients</strong>
          <small>Families and businesses trust us</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-orange"><i class="bi bi-patch-check-fill"></i></div>
        <div>
          <strong>Verified & Licensed</strong>
          <small>ISO certified packers and movers</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-red"><i class="bi bi-shield-fill-check"></i></div>
        <div>
          <strong><?= $secureShifting ?> Secure Shifting</strong>
          <small>Complete transit insurance options</small>
        </div>
      </li>
      <li>
        <div class="pm-city-trust-icon-wrap pm-city-trust-yellow"><i class="bi bi-geo-alt-fill"></i></div>
        <div>
          <strong>Pan-India Coverage</strong>
          <small>100+ branches across <?= $statesCovered ?> states</small>
        </div>
      </li>
    </ul>
  </div>

  <!-- Related Locations -->
  <div class="pm-city-sidebar-widget mt-4" id="sidebarRelatedLocations">
    <h4 class="pm-city-sidebar-widget-title">
      <i class="bi bi-pin-map-fill me-2"></i>Nearby Cities
    </h4>
    <p class="pm-city-sidebar-widget-desc">Packers and Movers near <?= $city ?>.</p>
    <div class="pm-city-related-tags" id="relatedCityTags">
      <?php
      $count = 0;
      foreach ($cities as $ct):
        if ($ct['nm'] == $city) continue;
        if ($count >= 10) break;
        $link      = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
        $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
      ?>
      <a href="<?= site_url("$link-packers-movers-$statename") ?>"
         class="pm-city-tag"
         id="relatedCity-<?= $count ?>">
        <i class="bi bi-arrow-right-short"></i><?= $ct['nm'] ?>
      </a>
      <?php
        $count++;
      endforeach;
      ?>
    </div>
  </div>

</aside><!-- /city-sidebar -->


