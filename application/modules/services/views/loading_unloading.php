<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Loading & Unloading Services',
    'bc_desc' => 'Safe, systematic, and equipment-assisted loading and unloading labor services across India for household goods, office furniture, and machinery.',
    'breadcrumbs' => [
        ['name' => 'Loading & Unloading']
    ]
]);
?>

<!-- Loading & Unloading Main Section -->
<section class="hs-page-section py-5">
    <div class="container">

        <!-- 1. Hero Story & Capabilities Banner Card -->
        <div class="hs-hero-card p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <div class="hs-badge-pill mb-3">
                        <i class="bi bi-truck-flatbed text-danger"></i> MATERIAL HANDLING SPECIALISTS
                    </div>
                    <h1 class="hs-main-title mb-3">
                        Safe &amp; Systematic <span class="hs-highlight">Loading &amp; Unloading</span> Services Across India
                    </h1>
                    <p class="hs-lead-text mb-4">
                        Loading and unloading heavy household furniture, electronics, and commercial inventory requires trained labor and specialized lifting gear. At <strong><?= $company3 ?></strong>, our background-verified moving crews use hydraulic ramps, lifting belts, and rubber-wheel trolleys to ensure 100% damage-free handling.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        Whether you need standalone loading/unloading manpower or full-service handling, our crew arranges goods inside container trucks scientifically to prevent shifting, scraping, or crushing during transit.
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
                                    <div class="hs-stat-label">Happy Moves</div>
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
                                <i class="bi bi-patch-check-fill text-danger fs-5"></i> Hydraulic Ramps &amp; Ergonomic Lifting Belts
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. 4 Pillars of Loading & Unloading -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Material Handling Standards</span>
                <h2 class="hs-sec-title">4 Pillars of Our Loading &amp; Unloading Service</h2>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-gear-wide-connected"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 01</span>
                        </div>
                        <h4 class="hs-pillar-title">Hydraulic Ramps</h4>
                        <p class="hs-pillar-desc">
                            Inclined hydraulic loading ramps and heavy-duty trolleys ensuring smooth, floor-safe movement into trucks.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 02</span>
                        </div>
                        <h4 class="hs-pillar-title">Trained Handlers</h4>
                        <p class="hs-pillar-desc">
                            Background-verified crew trained in stair-carrying, weight distribution, and ergonomic lifting techniques.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-boxes"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 03</span>
                        </div>
                        <h4 class="hs-pillar-title">Container Stacking</h4>
                        <p class="hs-pillar-desc">
                            Scientific weight arrangement placing heavy items at the bottom and anchoring with internal tie-down belts.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-house-door-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 04</span>
                        </div>
                        <h4 class="hs-pillar-title">Room Placement</h4>
                        <p class="hs-pillar-desc">
                            Careful unloading, room-by-room carton placement, and skilled furniture re-assembly at your new residence.
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
                                <i class="bi bi-truck-flatbed"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">MATERIAL HANDLING</span>
                                <h3 class="hs-seo-title mb-0">Professional Loading &amp; Unloading Labor Services in India</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            Improper loading is one of the leading causes of goods damage during transport. At <strong><?= $company3 ?></strong>, we provide experienced, physically fit, and background-verified loading and unloading teams capable of handling delicate household items, heavy safes, double beds, and commercial inventory.
                        </p>
                        <p class="hs-seo-desc">
                            Our team follows strict safety protocols—using protective blankets, rubber-wheel trolleys, and floor padding to ensure walls, doorways, and staircase railings remain 100% scratch-free during movement.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Background-Verified Handlers</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> High-Rise &amp; Staircase Specialists</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Scratch-Free Doorway Protection</span>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-tools"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">EQUIPMENT &amp; TOOLS</span>
                                <h3 class="hs-seo-title mb-0">Modern Hydraulic Ramps, Lifting Belts &amp; Material Handling Tools</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            We equip our crews with modern material handling tools including hydraulic tail-lifts, nylon lifting straps, hand trucks, and multi-tier dollies. This equipment allows us to move heavy wardrobes, sideboards, and heavy appliances smoothly without physical strain or accidental drops.
                        </p>
                        <p class="hs-seo-desc">
                            Inside container trucks, our crew stacks goods systematically—placing heavy wooden furniture at the bottom, cushioning gaps with thermocol blocks, and securing top-tier cartons with internal cargo tie-down belts.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Hydraulic Tail-Lifts &amp; Ramps</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Ergonomic Nylon Lifting Belts</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Internal Cargo Tie-Down Belts</span>
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
                                <span class="hs-seo-badge mb-1">TRANSPARENT LABOR RATES</span>
                                <h3 class="hs-seo-title mb-0">Fixed Transparent Labor Rates &amp; Complete Goods Insurance</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            We provide transparent written quotes for loading and unloading services with zero hidden fees. Labor counts, equipment charges, and GST are clearly stated upfront so you know your exact cost before work begins.
                        </p>
                        <p class="hs-seo-desc">
                            Our comprehensive transit insurance options cover goods handling during both loading and unloading phases, ensuring complete financial protection against accidental mishaps.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> All-Inclusive Fixed Quotes</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Comprehensive Handling Insurance</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Zero Surcharge Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Loading & Unloading FAQs -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Frequently Asked Questions</span>
                <h2 class="hs-sec-title">Loading &amp; Unloading Help Center</h2>
            </div>

            <div class="accordion" id="hsFaqAccordion">
                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq1">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q1</span>
                                <span>How are heavy furniture items like king beds and sofas loaded?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq1" class="accordion-collapse collapse show" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Heavy furniture items are dismantled by skilled carpenters, wrapped in protective 7-layer cushioning, and loaded using hydraulic ramps and nylon lifting straps.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq2">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q2</span>
                                <span>Do you provide loading &amp; unloading for high-rise buildings without lifts?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq2" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes! Our experienced moving teams are trained in manual staircase carrying techniques using shoulder harnesses and protective corner padding.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq3">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q3</span>
                                <span>Is transit insurance applicable during loading and unloading?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq3" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes, our comprehensive transit insurance policy covers goods handling during loading, transit, and doorstep unloading.
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
                        <i class="bi bi-stars"></i> NEED SAFE LOADING &amp; UNLOADING LABOR?
                    </div>
                    <h2 class="fw-bold text-white mb-3">Book Professional Loading &amp; Unloading With <?= $company3 ?></h2>
                    <p class="text-white opacity-100 fw-medium leading-relaxed mb-0 hs-cta-text">
                        Get a free doorstep estimate today. Trained handlers, hydraulic ramps, rubber-wheel trolleys, and 100% damage-free handling.
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
