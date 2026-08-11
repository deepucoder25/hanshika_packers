<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

$lat = '';
$lon = '';
$state_code = '';

if (!empty($cities) && is_array($cities)) {
    foreach ($cities as $ct) {
        if (@$ct['nm'] == $city) {
            $lat = $ct['lat'];
            $lon = $ct['lon'];
            $state_code = $ct['sc'];
            break;
        }
    } 
}

if (!empty($lat) && !empty($lon)): 
?>

<!-- ATTRACTIVE CITY LOCATION MAP SECTION -->
<div class="pm-map-container my-4">

    <!-- Header Card -->
    <div class="pm-map-header-card mb-3">
        <div class="row align-items-center g-3">
            <div class="col-md-8">
                <div class="pm-map-eyebrow">
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> SERVICE LOCATION MAP
                </div>
                <h3 class="pm-map-main-title mt-1 mb-1">
                    Our Operational Network in <span class="text-danger"><?= htmlspecialchars($city) ?></span>
                </h3>
                <p class="pm-map-sub-text m-0">
                    Doorstep packing &amp; relocation services available across <?= htmlspecialchars($city) ?> and surrounding areas.
                </p>
            </div>
            <div class="col-md-4 text-md-end">
                <span class="pm-map-status-pill">
                    <span class="pm-map-live-dot"></span> Active Branch Hub
                </span>
            </div>
        </div>
    </div>

    <!-- Map iFrame Box -->
    <div class="pm-map-frame-wrap">
        <iframe
            width="100%"
            height="380"
            class="pm-city-map-iframe"
            loading="lazy"
            allowfullscreen
            src="https://www.google.com/maps?q=<?php echo urlencode($lat); ?>,<?php echo urlencode($lon); ?>&hl=en&z=13&output=embed">
        </iframe>
    </div>

    <!-- Bottom Info Bar -->
    <div class="pm-map-info-bar mt-3">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
            <span class="pm-map-info-item">
                <i class="bi bi-truck text-danger me-1"></i> Local &amp; Interstate Dispatch
            </span>
            <span class="pm-map-info-item">
                <i class="bi bi-shield-check text-success me-1"></i> 100% Verified Local Hub
            </span>
            <span class="pm-map-info-item">
                <i class="bi bi-lightning-fill text-warning me-1"></i> Fast On-Site Inspection
            </span>
        </div>
    </div>

</div>

<?php endif; ?>