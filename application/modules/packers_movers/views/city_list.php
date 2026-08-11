<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$st = strtolower(str_replace(" ", "-", $state));
if (file_exists(APPPATH . "modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
}
$stateName = ucwords($state);
?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . $stateName,
    'bc_desc' => 'Find verified, professional packers and movers in ' . $stateName . ' offering safe household shifting, office relocation, and vehicle transportation.',
    'breadcrumbs' => [
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => $stateName]
    ]
]);
?>

<div class="pm-list-service-page">
    <div class="container pm-list-feature-section">
        
        <!-- Header Banner & Real-Time Filter Box -->
        <div class="pm-list-header-box text-center">
            <span class="pm-list-badge mb-2">
                <i class="bi bi-geo-alt-fill"></i> VERIFIED CITY BRANCH NETWORK
            </span>
            <h2 class="pm-list-header-title">
                Packers and Movers Service Hubs in <span class="text-danger"><?= $stateName ?></span>
            </h2>
            <p class="pm-list-header-desc">
                Select your city below to get doorstep packing rates, local shifting estimates, and instant moving quotes.
            </p>

            <!-- Real-Time City Search Input -->
            <div class="pm-list-search-wrap">
                <i class="bi bi-search pm-list-search-icon"></i>
                <input type="text" id="citySearchInput" class="form-control pm-list-search-input" placeholder="Search city or branch location in <?= $stateName ?>...">
            </div>
        </div>

        <!-- City Cards Grid -->
        <div class="row g-3" id="cityGridContainer">
            <?php
            $stUrl = str_replace(" ", "-", $state);
            if (!empty($cities) && is_array($cities)):
                foreach ($cities as $ct):
                    $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                    $statename = urlencode(strtolower(str_replace(" ", "-", $stUrl)));
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 city-grid-item" data-cityname="<?= strtolower(htmlspecialchars($ct['nm'])) ?>">
                        <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="pm-list-city-card-link d-block h-100 text-decoration-none">
                            <div class="pm-list-city-card h-100">
                                <div class="pm-list-card-body">
                                    <!-- Updated Icon Ring Box -->
                                    <div class="pm-list-icon">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <!-- Title Container -->
                                    <div class="pm-list-city-name">
                                        <span class="pm-list-sublabel">Packers and Movers</span>
                                        <h3 class="pm-list-city-title"><?= htmlspecialchars($ct['nm']) ?></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info py-3 px-4 d-inline-block rounded-pill">
                        <i class="bi bi-info-circle-fill me-2"></i> No branch locations found for <?= $stateName ?>.
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- No Filter Results State (Hidden by default) -->
        <div id="noCityResults" class="text-center py-5" style="display: none;">
            <div class="alert alert-warning py-3 px-4 d-inline-block rounded-pill fw-bold">
                <i class="bi bi-exclamation-triangle-fill me-2"></i> No matching city found. Try searching another location.
            </div>
        </div>

    </div>
</div>

<!-- Real-Time City Search Filter Script -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function() {
        $('#citySearchInput').on('keyup input', function() {
            const query = $(this).val().toLowerCase().trim();
            let visibleCount = 0;

            $('.city-grid-item').each(function() {
                const cityName = $(this).data('cityname') || '';
                if (cityName.indexOf(query) !== -1) {
                    $(this).show();
                    visibleCount++;
                } else {
                    $(this).hide();
                }
            });

            if (visibleCount === 0) {
                $('#noCityResults').show();
            } else {
                $('#noCityResults').hide();
            }
        });
    });
</script>