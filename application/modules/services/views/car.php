<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Car Transportation Services',
    'bc_desc' => 'Safe, scratch-free, and enclosed car transportation services across India with hydraulic ramp loading and live GPS tracking.',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]);
?>

<!-- Car Transportation Main Section -->
<section class="hs-page-section py-5">
    <div class="container">

        <!-- 1. Hero Story & Capabilities Banner Card -->
        <div class="hs-hero-card p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <div class="hs-badge-pill mb-3">
                        <i class="bi bi-shield-shaded text-danger"></i> ENCLOSED CARRIER SPECIALISTS
                    </div>
                    <h1 class="hs-main-title mb-3">
                        Safe &amp; Scratch-Free <span class="hs-highlight">Car Transportation</span> Across India
                    </h1>
                    <p class="hs-lead-text mb-4">
                        Transporting your valuable vehicle with <strong><?= $company3 ?></strong> guarantees complete safety and peace of mind. We utilize dedicated enclosed car carrier trailers designed to shield your sedan, SUV, or luxury automobile from road debris, dust, and weather perils.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        Our trained automotive logistics team conducts a pre-loading inspection report, uses hydraulic ramp loading to prevent underbody scraping, and secures every wheel with heavy-duty nylon wheel chocks before real-time GPS dispatch.
                    </p>

                    <div class="d-flex flex-nowrap align-items-center gap-2 gap-sm-3 pt-2">
                        <button type="button" class="btn hs-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill me-1 me-sm-2"></i> Get Free Quote
                        </button>
                        <a href="<?= $phonehtml ?>" class="btn hs-hero-phone-btn">
                            <i class="bi bi-telephone-fill me-1 me-sm-2"></i> <?= $phone ?>
                        </a>
                    </div>
                </div>

                <!-- Right Feature Stats Box -->
                <div class="col-lg-5">
                    <div class="hs-hero-stats-box p-4">
                        <div class="row g-3 text-center">
                            <div class="col-6">
                                <div class="hs-stat-item p-3">
                                    <div class="hs-stat-num text-danger"><?= $yearsExperience ?></div>
                                    <div class="hs-stat-label">Years Active</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="hs-stat-item p-3">
                                    <div class="hs-stat-num text-dark"><?= $happyClients ?></div>
                                    <div class="hs-stat-label">Cars Shifted</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="hs-stat-item p-3">
                                    <div class="hs-stat-num text-dark"><?= $statesCovered ?></div>
                                    <div class="hs-stat-label">Carrier Trailers</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="hs-stat-item p-3">
                                    <div class="hs-stat-num text-success">100%</div>
                                    <div class="hs-stat-label">Safe Guarantee</div>
                                </div>
                            </div>
                        </div>

                        <!-- Protection guarantee badge -->
                        <div class="mt-4 pt-3 border-top text-center">
                            <div class="d-inline-flex align-items-center gap-2 text-dark fw-bold small">
                                <i class="bi bi-patch-check-fill text-danger fs-5"></i> Enclosed Car Carrier &amp; Full Transit Insurance
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. 4 Pillars of Car Transportation -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Automotive Safety Standards</span>
                <h2 class="hs-sec-title">4 Pillars of Our Car Transportation Service</h2>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-clipboard-data-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 01</span>
                        </div>
                        <h4 class="hs-pillar-title">Condition Report</h4>
                        <p class="hs-pillar-desc">
                            Thorough doorstep inspection report recording odometer reading, fuel level, bumper condition, and pre-existing marks.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 02</span>
                        </div>
                        <h4 class="hs-pillar-title">Hydraulic Ramps</h4>
                        <p class="hs-pillar-desc">
                            Gentle hydraulic ramp loading into enclosed car carrier trailers, protecting low ground-clearance bumpers.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-lock-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 03</span>
                        </div>
                        <h4 class="hs-pillar-title">Wheel Harness Lock</h4>
                        <p class="hs-pillar-desc">
                            4-point wheel chock securing and heavy-duty nylon belt tie-downs preventing movement inside transit containers.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 04</span>
                        </div>
                        <h4 class="hs-pillar-title">Doorstep Handover</h4>
                        <p class="hs-pillar-desc">
                            Door-to-door delivery at your destination city with joint inspection sign-off and key handover.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Full-Width (col-12) SEO Content Boxes -->
        <div class="my-5 py-3">
            <div class="row g-4">
                <!-- Box 1 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-car-front-fill"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">AUTOMOTIVE LOGISTICS</span>
                                <h3 class="hs-seo-title mb-0">Professional Door-to-Door Car Carrier &amp; Transport Services in India</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            Relocating your automobile across long interstate distances can add unwanted wear, mileage, and risk to your vehicle. At <strong><?= $company3 ?></strong>, we offer dedicated door-to-door car carrier services that transport your car safely inside specialized covered trailers without driving it on highways.
                        </p>
                        <p class="hs-seo-desc">
                            Our doorstep pickup process includes a written car inspection report co-signed by you. From luxury SUVs and sports coupes to daily sedans, our trained drivers handle your vehicle with utmost care, ensuring zero scratch delivery at your destination city.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Doorstep Pickup &amp; Delivery</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Pre-Loading Car Inspection Report</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Zero Highway Driving</span>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">ENCLOSED SAFETY PROTOCOL</span>
                                <h3 class="hs-seo-title mb-0">Enclosed Car Carrier Trailers &amp; Wheel-Locking Safety Protocol</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            Open car trailers expose vehicles to flying stones, dust storms, and extreme weather. <strong><?= $company3 ?></strong> uses multi-car closed container trailers built with hydraulic double-deck ramps to accommodate all car sizes safely.
                        </p>
                        <p class="hs-seo-desc">
                            Once positioned inside the carrier, your car wheels are locked into steel chocks and anchored with high-tensile safety belts. Our fleet is equipped with real-time GPS tracking, allowing you to monitor your car's exact interstate location round the clock.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Weatherproof Enclosed Trailers</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> 4-Point Wheel Safety Locks</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Live Mobile GPS Fleet Access</span>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-file-earmark-check"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">TRANSPARENT PRICING &amp; INSURANCE</span>
                                <h3 class="hs-seo-title mb-0">Transparent Transit Pricing &amp; Genuine Car Transit Insurance Policy</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            We provide clear, written car transportation quotes with no hidden charges. Our price covers door pickup, trailer freight, toll fees, loading/unloading labor, and GST taxes upfront.
                        </p>
                        <p class="hs-seo-desc">
                            Additionally, we issue authentic car transit insurance coverage protecting your vehicle against accidental damage, fire, or transit hazards. Authentic policy documentation is handed over prior to car dispatch for complete financial assurance.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> All-Inclusive Written Quote</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Genuine Transit Insurance Policy</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Zero Hidden Delivery Fees</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Car Transportation FAQs -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Frequently Asked Questions</span>
                <h2 class="hs-sec-title">Car Transportation Help Center</h2>
            </div>

            <div class="accordion" id="hsFaqAccordion">
                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq1">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q1</span>
                                <span>How is my car secured inside the car carrier truck?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq1" class="accordion-collapse collapse show" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Your car is driven onto a hydraulic ramp, positioned inside our covered trailer, and locked at all 4 wheels using steel chocks and heavy-duty nylon safety belts to eliminate any movement during transit.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq2">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q2</span>
                                <span>Is a physical inspection conducted before pickup?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq2" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes! Our team completes a detailed car condition report noting odometer reading, fuel level, and existing exterior state before taking key custody.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq3">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q3</span>
                                <span>Is transit insurance provided for car transport?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq3" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes, full transit insurance documentation is issued before your car is loaded, ensuring 100% risk protection against any accidental damage or natural perils.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Call to Action Banner -->
        <div class="hs-cta-card mt-5 p-4 p-md-5">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-2 mb-2 text-warning fw-bold small">
                        <i class="bi bi-stars"></i> NEED SAFE DOOR-TO-DOOR CAR TRANSPORTATION?
                    </div>
                    <h2 class="fw-bold text-white mb-3">Book Your Car Transportation With <?= $company3 ?></h2>
                    <p class="text-white opacity-100 fw-medium leading-relaxed mb-0 hs-cta-text">
                        Get a free doorstep car inspection and instant price quote today. Covered carrier trailers, wheel locks, and 100% scratch-free delivery.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end text-center d-flex flex-nowrap gap-2 gap-sm-3 justify-content-center justify-content-lg-end">
                    <button type="button" class="btn hs-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <i class="bi bi-calculator-fill me-1 me-sm-2"></i> Get Free Quote
                    </button>
                    <a href="<?= $phonehtml ?>" class="btn hs-cta-outline-btn">
                        <i class="bi bi-telephone-fill me-1 me-sm-2"></i> <?= $phone ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
