<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Home Relocation Services',
    'bc_desc' => 'End-to-end household moving solutions tailored by BHK type. Professional 7-layer packing, container transport, and doorstep assembly across India.',
    'breadcrumbs' => [
        ['name' => 'Home Relocation']
    ]
]);
?>

<!-- Home Relocation Main Section -->
<section class="hs-page-section py-5">
    <div class="container">

        <!-- 1. Hero Story & Capabilities Banner Card (Light Pristine Redesign) -->
        <div class="hs-hero-card p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <div class="hs-badge-pill mb-3">
                        <i class="bi bi-shield-check text-danger"></i> ISO 9001:2015 CERTIFIED MOVERS
                    </div>
                    <h1 class="hs-main-title mb-3">
                        Professional <span class="hs-highlight">Home Relocation</span> Services Across India
                    </h1>
                    <p class="hs-lead-text mb-4">
                        Relocating your home with <strong><?= $company3 ?></strong> is engineered for complete peace of mind. From delicate glassware and electronics to heavy wardrobes and sofas, we deliver 100% damage-free door-to-door shifting.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        We deploy standardized 7-layer virgin packing materials, background-verified moving crews, and company-owned sealed container trucks equipped with real-time GPS tracking from dispatch to final doorstep setup.
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
                                <i class="bi bi-patch-check-fill text-danger fs-5"></i> 7-Layer Virgin Packing &amp; Full Transit Insurance
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- 3. 4 Pillars of Our Damage-Free Relocation (Modern 4-Card Grid) -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Service Execution Standards</span>
                <h2 class="hs-sec-title">4 Pillars of Our Damage-Free Relocation</h2>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-clipboard2-check-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 01</span>
                        </div>
                        <h4 class="hs-pillar-title">Itemized Survey</h4>
                        <p class="hs-pillar-desc">
                            Detailed physical or virtual inventory assessment to calculate exact truck capacity and packing requirements before booking.
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
                        <h4 class="hs-pillar-title">7-Layer Packing</h4>
                        <p class="hs-pillar-desc">
                            Virgin bubble wrap, 5-ply corrugated sheets, stretch film, and custom wooden crating for fragile glass &amp; OLED screens.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 03</span>
                        </div>
                        <h4 class="hs-pillar-title">Sealed GPS Transit</h4>
                        <p class="hs-pillar-desc">
                            Goods loaded via hydraulic ramps into weatherproof sealed container trucks with live mobile GPS tracking updates.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-house-check-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 04</span>
                        </div>
                        <h4 class="hs-pillar-title">Doorstep Setup</h4>
                        <p class="hs-pillar-desc">
                            Doorstep unloading, unpacking, and skilled carpenter assembly of beds &amp; wardrobes for a ready-to-live home.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Full-Width (col-12) SEO Content Boxes (Enhanced Design) -->
        <div class="my-5 py-3">
            <div class="row g-4">
                <!-- Box 1 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-house-gear-fill"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">SERVICE EXCELLENCE</span>
                                <h3 class="hs-seo-title mb-0">Comprehensive Door-to-Door Household Relocation Solutions</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            At <strong><?= $company3 ?></strong>, we specialize in offering seamless and stress-free home relocation services across India. Moving your entire household requires careful planning, dedicated manpower, and specialized equipment. Whether you are shifting a compact 1 BHK studio or a luxury multi-story villa, our expert relocation team takes full responsibility from initial packing to doorstep unloading and unpacking.
                        </p>
                        <p class="hs-seo-desc">
                            Our doorstep pre-move survey allows us to assess your inventory volume, furniture dimensions, and fragile items accurately. Based on this survey, we assign dedicated move supervisors, experienced packers, and furniture carpenters who dismantle modular wardrobes, king-size beds, and dining sets so that every item reaches your new home in 100% pristine condition.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Pre-Move Volume Survey</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Furniture Disassembly &amp; Setup</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Door-to-Door Execution</span>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">MILITARY-GRADE SAFETY</span>
                                <h3 class="hs-seo-title mb-0">Standardized 7-Layer Protective Packing &amp; Weatherproof Containers</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            The foundation of our zero-damage home shifting record lies in our standardized 7-layer protective packing protocol. We utilize heavy-duty virgin bubble wrap, anti-static foam sheets, 5-ply corrugated cardboard corner guards, and waterproof stretch film to shield your belongings against dust, rain, and moisture during transit.
                        </p>
                        <p class="hs-seo-desc">
                            For delicate glass table tops, OLED televisions, chandeliers, and antique artwork, our team builds custom wooden crates for maximum shock absorption. Your packed household goods are loaded via hydraulic ramps into company-owned sealed container trucks equipped with internal cargo tie-down belts and real-time mobile GPS tracking.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> 7-Layer Virgin Packing</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Custom Wooden Crating</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Sealed Container GPS Fleet</span>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-12">
                    <div class="hs-seo-box">
                        <div class="hs-seo-header mb-4">
                            <div class="hs-seo-icon-wrap">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">100% TRANSPARENCY</span>
                                <h3 class="hs-seo-title mb-0">Transparent Written Quotation &amp; Genuine Transit Insurance</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            We believe complete transparency is essential for a reliable relocation experience. Unlike unorganized local movers who demand hidden loading, toll, or delivery surcharges, <strong><?= $company3 ?></strong> provides itemized written quotations where all labor, freight, packing materials, and GST taxes are disclosed upfront.
                        </p>
                        <p class="hs-seo-desc">
                            To ensure total financial peace of mind, we offer comprehensive transit insurance options covering unforeseen accidental loss or natural perils. Authentic policy documentation is provided to you prior to vehicle dispatch, making our home shifting service the most trusted choice for families nationwide.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> 100% Fixed Written Quotation</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Zero Hidden Delivery Fees</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Genuine Insurance Policy Copy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Home Relocation FAQs -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Frequently Asked Questions</span>
                <h2 class="hs-sec-title">Home Relocation Help Center</h2>
            </div>

            <div class="accordion" id="hsFaqAccordion">
                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq1">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q1</span>
                                <span>What packing materials are used for fragile kitchenware &amp; crockery?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq1" class="accordion-collapse collapse show" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Crockery and glassware are wrapped individually in anti-shock virgin bubble wrap and placed inside heavy-duty corrugated cartons lined with thermocol sheets to absorb road vibration completely.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq2">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q2</span>
                                <span>Will the moving crew dismantle and reassemble my double bed &amp; wardrobes?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq2" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes! Our moving packages include professional carpenters who dismantle modular beds, wardrobes, and dining tables at origin and re-assemble them safely at your new residence.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq3">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q3</span>
                                <span>How does <?= $company3 ?> ensure transparent written pricing?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq3" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            After your pre-move survey, we provide a formal itemized quotation covering packing material costs, labor, vehicle freight, and GST. What is written in your quote is 100% final with zero delivery surcharges.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Call to Action Banner -->
        <div class="hs-cta-card mt-5 p-4 p-md-5">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-2 mb-2 text-warning fw-bold small">
                        <i class="bi bi-stars"></i> EXPERIENCE STRESS-FREE HOUSEHOLD SHIFTING
                    </div>
                    <h2 class="fw-bold text-white mb-3">Plan Your Home Relocation With <?= $company3 ?></h2>
                    <p class="text-white opacity-100 fw-medium leading-relaxed mb-0 hs-cta-text">
                        Book a free doorstep or video survey today. Enjoy guaranteed written pricing, 7-layer virgin packing, and 100% damage-free delivery.
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
