<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================
     NEW FRESH CITY SIDEBAR WIDGETS
     Available vars: $city, $state, $company3, $experience,
                     $startYear, $phone, $phone1, $phonehtml,
                     $phonehtml1, $whatsapphtml, $cities, $st
   ====================================================== -->

<aside class="pm-city-sidebar">



    <!-- ATTRACTIVE REDESIGNED SAFETY SHIELD CARD -->
    <div class="pm-city-sidebar-widget sb-safety-card mb-4">
        <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
            <div class="sb-safety-badge-icon">
                <i class="bi bi-shield-fill-check"></i>
            </div>
            <div>
                <h5 class="fw-extrabold text-dark m-0"><?= $company3 ?> Safety Shield</h5>
                <span class="sb-safety-verified-pill mt-1">
                    <i class="bi bi-patch-check-fill text-danger me-1"></i> VERIFIED CITY RELOCATION
                </span>
            </div>
        </div>

        <div class="sb-safety-items-wrap">
            <div class="sb-safety-item">
                <div class="sb-safety-item-icon">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
                <div>
                    <strong class="sb-safety-item-title">Zero-Damage Transit Guarantee</strong>
                    <span class="sb-safety-item-sub">100% Transit insurance options available</span>
                </div>
            </div>

            <div class="sb-safety-item">
                <div class="sb-safety-item-icon">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div>
                    <strong class="sb-safety-item-title">GPS Live Fleet Tracking</strong>
                    <span class="sb-safety-item-sub">Track your container truck live 24/7</span>
                </div>
            </div>

            <div class="sb-safety-item">
                <div class="sb-safety-item-icon">
                    <i class="bi bi-currency-rupee"></i>
                </div>
                <div>
                    <strong class="sb-safety-item-title">Transparent Flat Price</strong>
                    <span class="sb-safety-item-sub">Zero hidden charges or unexpected costs</span>
                </div>
            </div>

            <div class="sb-safety-item">
                <div class="sb-safety-item-icon">
                    <i class="bi bi-person-check-fill"></i>
                </div>
                <div>
                    <strong class="sb-safety-item-title">Verified Professional Staff</strong>
                    <span class="sb-safety-item-sub">Uniformed &amp; background checked crew</span>
                </div>
            </div>
        </div>
    </div>

    <!-- REDESIGNED 24/7 Relocation Helpline Card -->
    <div class="pm-city-sidebar-widget sb-helpline-card mb-4">
        <div class="sb-helpline-header">
            <div class="sb-agent-avatar-wrap">
                <div class="sb-agent-icon"><i class="bi bi-headset"></i></div>
                <span class="sb-online-dot"></span>
            </div>
            <div>
                <span class="sb-live-badge"><span class="sb-pulse-green"></span> ONLINE 24/7</span>
                <h5 class="sb-helpline-heading">Need Help in <span class="text-danger"><?= htmlspecialchars($city) ?></span>?</h5>
            </div>
        </div>
        <p class="sb-helpline-sub">Talk to our relocation expert for instant assistance.</p>

        <div class="d-flex flex-column gap-2">
            <a href="<?= $phonehtml ?>" class="sb-call-action-btn">
                <div class="sb-action-icon-red"><i class="bi bi-telephone-fill"></i></div>
                <div class="sb-action-text">
                    <small>CALL SUPPORT LINE</small>
                    <strong><?= $phone ?></strong>
                </div>
                <i class="bi bi-arrow-right-short ms-auto fs-5 text-danger"></i>
            </a>

            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="sb-wa-action-btn">
                <div class="sb-action-icon-green"><i class="bi bi-whatsapp"></i></div>
                <div class="sb-action-text">
                    <small>INSTANT CHAT</small>
                    <strong>WhatsApp Support</strong>
                </div>
                <i class="bi bi-arrow-right-short ms-auto fs-5 text-success"></i>
            </a>
        </div>
    </div>

    <!-- NEW WIDGET 4: Nearby Popular Shifting Locations Tag Cloud -->
    <div class="pm-city-sidebar-widget sb-locations-card">
        <h5 class="sb-widget-title-sm mb-3">
            <i class="bi bi-geo-alt-fill text-danger me-1"></i> Nearby Branch Locations
        </h5>
        <div class="sb-tags-wrap">
            <?php
            $count = 0;
            if (!empty($cities) && is_array($cities)):
                foreach ($cities as $ct):
                    if (strtolower($ct['nm']) == strtolower($city)) continue;
                    if ($count >= 10) break;
                    $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                    $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="sb-location-tag">
                        <i class="bi bi-arrow-right-short text-danger"></i> <?= htmlspecialchars($ct['nm']) ?>
                    </a>
            <?php
                    $count++;
                endforeach;
            endif;
            ?>
        </div>
    </div>

</aside>
