<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Bike Transportation Services',
    'bc_desc' => 'Safe, scratch-free two-wheeler and motorcycle transportation services across India with 4-layer bubble wrapping and wooden crating.',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
    ]
]);
?>

<!-- Bike Transportation Main Section -->
<section class="hs-page-section py-5">
    <div class="container">

        <!-- 1. Hero Story & Capabilities Banner Card -->
        <div class="hs-hero-card p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <div class="hs-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> TWO-WHEELER LOGISTICS MOVERS
                    </div>
                    <h1 class="hs-main-title mb-3">
                        Safe &amp; Scratch-Free <span class="hs-highlight">Two-Wheeler Bike Shifting</span> Across India
                    </h1>
                    <p class="hs-lead-text mb-4">
                        Shipping your bike or scooter with <strong><?= $company3 ?></strong> guarantees complete protection against scratches, denting, and transit vibration. From commuter two-wheelers to premium cruisers and superbikes, we deliver door-to-door bike transportation across all Indian states.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        Our specialized packaging team uses 4-layer virgin bubble wrap, corrugated sheets, waterproof stretch film, and custom wooden crating for high-end motorcycles. Every bike is secured inside covered container trucks with heavy-duty belt tie-downs.
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
                                    <div class="hs-stat-label">Bikes Delivered</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="hs-stat-item p-3">
                                    <div class="hs-stat-num text-dark"><?= $statesCovered ?></div>
                                    <div class="hs-stat-label">Container Fleet</div>
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
                                <i class="bi bi-patch-check-fill text-danger fs-5"></i> 4-Layer Bubble Wrap &amp; Custom Wooden Crating
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. 4 Pillars of Bike Transportation -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Two-Wheeler Safety Standards</span>
                <h2 class="hs-sec-title">4 Pillars of Our Bike Transportation Service</h2>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-fuel-pump-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 01</span>
                        </div>
                        <h4 class="hs-pillar-title">Fuel &amp; Safety Prep</h4>
                        <p class="hs-pillar-desc">
                            Petrol draining, rearview mirror removal, and battery safety preparation prior to packaging.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 02</span>
                        </div>
                        <h4 class="hs-pillar-title">4-Layer Cushioning</h4>
                        <p class="hs-pillar-desc">
                            Virgin bubble wrap, anti-static foam, 5-ply corrugated sheets, and film wrap protecting body panels &amp; silencers.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 03</span>
                        </div>
                        <h4 class="hs-pillar-title">Superbike Wooden Crate</h4>
                        <p class="hs-pillar-desc">
                            Custom rigid wooden frame crating for sports bikes, Royal Enfields, and luxury cruisers.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 04</span>
                        </div>
                        <h4 class="hs-pillar-title">Sealed Container Transit</h4>
                        <p class="hs-pillar-desc">
                            Enclosed container transport with internal belt tie-downs preventing tilt or friction damage.
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
                                <i class="bi bi-bicycle"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">BIKE SHIFTING SOLUTIONS</span>
                                <h3 class="hs-seo-title mb-0">Interstate Bike &amp; Two-Wheeler Transportation Services in India</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            Riding your motorcycle across long interstate distances involves highway risks, road dust, and mechanical wear. At <strong><?= $company3 ?></strong>, we provide door-to-door bike relocation services that deliver your two-wheeler to your new city in 100% factory-fresh condition.
                        </p>
                        <p class="hs-seo-desc">
                            Our team completes a thorough physical inspection report recording your bike's fuel level, odometer reading, and body condition before taking custody. We transport all types of bikes—including commuters, scooters, electric vehicles, sports bikes, and heavy touring cruisers.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Doorstep Pickup &amp; Delivery</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Pre-Shipping Inspection Sheet</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> All Bike &amp; EV Models Covered</span>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">PROTECTIVE PACKAGING</span>
                                <h3 class="hs-seo-title mb-0">Specialized 4-Layer Foam Wrapping &amp; Custom Wooden Crating</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            To ensure zero scratches during transit, every two-wheeler undergoes our signature 4-layer protective packaging. We wrap handlebars, headlights, mudguards, fuel tanks, and side panels in heavy-duty virgin bubble wrap, corrugated sheets, and stretch film.
                        </p>
                        <p class="hs-seo-desc">
                            For premium motorcycles, Harleys, and sports bikes, we construct custom rigid wooden cages around the bike to prevent any impact from neighboring cargo. Inside our covered container trucks, every bike is anchored vertically using nylon belt tie-downs.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> 4-Layer Virgin Bubble Wrap</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Custom Wooden Frame Crate</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Vertical Belt Anchoring</span>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-receipt"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">TRANSPARENT RATES</span>
                                <h3 class="hs-seo-title mb-0">Fixed Written Transport Rates &amp; Genuine Two-Wheeler Insurance</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            We offer 100% fixed, transparent written bike transport quotations. All packing costs, labor, freight charges, toll taxes, and GST are included upfront with zero delivery surcharges.
                        </p>
                        <p class="hs-seo-desc">
                            To protect your financial investment, we provide comprehensive transit insurance policy documentation before dispatch, covering accidental damage or transit perils during long-distance movement.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> All-Inclusive Fixed Rates</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Genuine Transit Insurance Copy</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Zero Hidden Delivery Surcharges</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Bike Transportation FAQs -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Frequently Asked Questions</span>
                <h2 class="hs-sec-title">Bike Transportation Help Center</h2>
            </div>

            <div class="accordion" id="hsFaqAccordion">
                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq1">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q1</span>
                                <span>How is my motorcycle packed to prevent scratches?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq1" class="accordion-collapse collapse show" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Your bike is wrapped in 4 layers: anti-static virgin bubble wrap, thick corrugated sheets, edge guards, and stretch film. Mirrors are removed and packed separately.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq2">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q2</span>
                                <span>Do I need to drain petrol from my bike before shipping?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq2" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes, safety guidelines require draining fuel tank petrol down to minimum reserve level to eliminate any fire hazard inside the closed container truck.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq3">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q3</span>
                                <span>Is transit insurance included for two-wheeler transport?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq3" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes, full transit insurance coverage documentation is issued prior to loading, protecting your bike against accidental damage or transit perils.
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
                        <i class="bi bi-stars"></i> NEED SAFE TWO-WHEELER BIKE TRANSPORTATION?
                    </div>
                    <h2 class="fw-bold text-white mb-3">Ship Your Two-Wheeler Safely With <?= $company3 ?></h2>
                    <p class="text-white opacity-100 fw-medium leading-relaxed mb-0 hs-cta-text">
                        Book a free doorstep bike inspection today. Enjoy 4-layer bubble wrapping, custom wooden crating, and 100% scratch-free delivery.
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