<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ATTRACTIVE CITY REVIEWS SWIPABLE SLIDER SECTION -->
<div class="pm-reviews-container my-4">

    <!-- Header & Rating Summary Card with Carousel Nav Controls -->
    <div class="pm-rev-header-card mb-4">
        <div class="row align-items-center g-3">
            
            <div class="col-md-7">
                <div class="pm-rev-eyebrow">
                    <i class="bi bi-star-fill text-warning me-1"></i> VERIFIED CUSTOMER REVIEWS
                </div>
                <h3 class="pm-rev-main-title mt-1 mb-2">
                    What Our Clients in <span class="text-danger"><?= htmlspecialchars($city) ?></span> Say About Us
                </h3>
                <p class="pm-rev-sub-text m-0">
                    Real feedback from families and businesses moved by <?= $company3 ?>.
                </p>
            </div>

            <div class="col-md-5 text-md-end d-flex align-items-center justify-content-md-end justify-content-between gap-3">
                <div class="pm-rev-score-box d-inline-flex align-items-center gap-3">
                    <div class="pm-rev-big-num"><?= $ratingValue ?></div>
                    <div class="text-start">
                        <div class="pm-rev-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="pm-rev-score-label"><?= $ratingCount ?> Reviews</span>
                    </div>
                </div>

                <!-- Navigation Arrows for Swiping/Scrolling -->
                <div class="pm-rev-nav-btns d-flex gap-2">
                    <button type="button" class="btn pm-rev-nav-btn" id="revPrevBtn" aria-label="Previous Review">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button type="button" class="btn pm-rev-nav-btn" id="revNextBtn" aria-label="Next Review">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Single Row Horizontal Swipable Track -->
    <div class="pm-rev-carousel-track" id="cityRevTrack">

        <!-- Card 1 -->
        <div class="pm-rev-slide">
            <div class="pm-rev-card">
                <i class="bi bi-quote pm-rev-quote-bg"></i>
                
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="pm-rev-card-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <span class="pm-rev-verified-pill">
                        <i class="bi bi-patch-check-fill text-primary"></i> Verified Shift
                    </span>
                </div>

                <p class="pm-rev-quote-text">
                    "Shifted my 2 BHK flat inside <?= htmlspecialchars($city) ?>. Their crew arrived at 8 AM sharp, brought premium bubble wrap, and finished packing faster than expected. Zero damage to fragile items!"
                </p>

                <div class="pm-rev-author-bar mt-3 pt-3 border-top">
                    <div class="pm-rev-avatar pm-rev-avatar-red">R</div>
                    <div class="flex-grow-1">
                        <strong class="pm-rev-author-name">Rohit Sharma</strong>
                        <div class="pm-rev-author-loc">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= htmlspecialchars($city) ?>, Maharashtra &bull; <span class="text-muted">Home Shifting</span>
                        </div>
                    </div>
                    <div class="pm-rev-time">2 days ago</div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="pm-rev-slide">
            <div class="pm-rev-card">
                <i class="bi bi-quote pm-rev-quote-bg"></i>
                
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="pm-rev-card-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <span class="pm-rev-verified-pill">
                        <i class="bi bi-patch-check-fill text-primary"></i> Verified Office Move
                    </span>
                </div>

                <p class="pm-rev-quote-text">
                    "We moved our office computers and IT equipment over the weekend. The supervisors handled everything systematically and coordinated seamlessly with security. Outstanding service!"
                </p>

                <div class="pm-rev-author-bar mt-3 pt-3 border-top">
                    <div class="pm-rev-avatar pm-rev-avatar-yellow">A</div>
                    <div class="flex-grow-1">
                        <strong class="pm-rev-author-name">Ananya Gupta</strong>
                        <div class="pm-rev-author-loc">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= htmlspecialchars($city) ?>, Maharashtra &bull; <span class="text-muted">Office Move</span>
                        </div>
                    </div>
                    <div class="pm-rev-time">1 week ago</div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="pm-rev-slide">
            <div class="pm-rev-card">
                <i class="bi bi-quote pm-rev-quote-bg"></i>
                
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="pm-rev-card-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <span class="pm-rev-verified-pill">
                        <i class="bi bi-patch-check-fill text-primary"></i> Verified Local Move
                    </span>
                </div>

                <p class="pm-rev-quote-text">
                    "Booked them after searching Packers and Movers Near Me in <?= htmlspecialchars($city) ?>. The estimate given on phone matched the final invoice exactly. Transparent pricing with zero hidden charges!"
                </p>

                <div class="pm-rev-author-bar mt-3 pt-3 border-top">
                    <div class="pm-rev-avatar pm-rev-avatar-dark">S</div>
                    <div class="flex-grow-1">
                        <strong class="pm-rev-author-name">Sandeep Verma</strong>
                        <div class="pm-rev-author-loc">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= htmlspecialchars($city) ?>, Maharashtra &bull; <span class="text-muted">Local Move</span>
                        </div>
                    </div>
                    <div class="pm-rev-time">2 weeks ago</div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="pm-rev-slide">
            <div class="pm-rev-card">
                <i class="bi bi-quote pm-rev-quote-bg"></i>
                
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="pm-rev-card-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <span class="pm-rev-verified-pill">
                        <i class="bi bi-patch-check-fill text-primary"></i> Verified Relocation
                    </span>
                </div>

                <p class="pm-rev-quote-text">
                    "Extremely polite &amp; helpful staff. My elderly parents were worried about wooden furniture scratches, but the multi-layer wrapping was top-notch. Genuinely impressed!"
                </p>

                <div class="pm-rev-author-bar mt-3 pt-3 border-top">
                    <div class="pm-rev-avatar pm-rev-avatar-red">P</div>
                    <div class="flex-grow-1">
                        <strong class="pm-rev-author-name">Priya Nair</strong>
                        <div class="pm-rev-author-loc">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= htmlspecialchars($city) ?>, Maharashtra &bull; <span class="text-muted">Intercity Move</span>
                        </div>
                    </div>
                    <div class="pm-rev-time">3 weeks ago</div>
                </div>
            </div>
        </div>

    </div>



</div>

<!-- JS for Swiping / Next-Prev Scrolling -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('cityRevTrack');
    const prevBtn = document.getElementById('revPrevBtn');
    const nextBtn = document.getElementById('revNextBtn');

    if (track && prevBtn && nextBtn) {
        prevBtn.addEventListener('click', function() {
            track.scrollBy({ left: -340, behavior: 'smooth' });
        });
        nextBtn.addEventListener('click', function() {
            track.scrollBy({ left: 340, behavior: 'smooth' });
        });
    }
});
</script>