<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packing & Moving Services',
    'bc_desc' => 'Professional packing and moving services across India with standardized 7-layer virgin packaging materials, trained crew, and GPS container transport.',
    'breadcrumbs' => [
        ['name' => 'Packing & Moving']
    ]
]);
?>

<!-- Packing & Moving Main Section -->
<section class="hs-page-section py-5">
    <div class="container">

        <!-- 1. Hero Story & Capabilities Banner Card -->
        <div class="hs-hero-card p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <div class="hs-badge-pill mb-3">
                        <i class="bi bi-box-seam-fill text-danger"></i> PACKING &amp; MOVING SPECIALISTS
                    </div>
                    <h1 class="hs-main-title mb-3">
                        Premium 7-Layer <span class="hs-highlight">Packing &amp; Moving</span> Services Across India
                    </h1>
                    <p class="hs-lead-text mb-4">
                        Packing and moving your home or office with <strong><?= $company3 ?></strong> ensures military-grade safety for every single item. From delicate glassware and LED screens to bulky furniture and machinery, we deliver zero-damage packing and seamless transport across India.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        We deploy standardized 7-layer virgin packing materials, background-verified packing crews, and company-owned sealed container trucks equipped with real-time mobile GPS tracking from dispatch to final doorstep placement.
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

        <!-- 2. 4 Pillars of Packing & Moving -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Packaging Execution Standards</span>
                <h2 class="hs-sec-title">4 Pillars of Our Packing &amp; Moving Service</h2>
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
                        <h4 class="hs-pillar-title">Inventory Assessment</h4>
                        <p class="hs-pillar-desc">
                            Detailed physical survey calculating volume, fragile item count, and exact packaging material requirements.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-layers-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 02</span>
                        </div>
                        <h4 class="hs-pillar-title">7-Layer Packaging</h4>
                        <p class="hs-pillar-desc">
                            Virgin bubble wrap, 5-ply corrugated cardboard, thermocol, stretch film, and custom wooden crating.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 03</span>
                        </div>
                        <h4 class="hs-pillar-title">Trained Moving Crew</h4>
                        <p class="hs-pillar-desc">
                            Background-verified packers and skilled carpenters trained in furniture disassembly and handling.
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
                            Enclosed container transport with internal belt tie-downs and automated live mobile GPS tracking updates.
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
                                <i class="bi bi-box2-heart-fill"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">END-TO-END MOVING</span>
                                <h3 class="hs-seo-title mb-0">Professional Packing &amp; Moving Services for Household &amp; Commercial Moves</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            Proper packaging is the single most critical factor in guaranteeing zero-damage relocations. At <strong><?= $company3 ?></strong>, we provide end-to-end packing and moving solutions tailored for household goods, commercial offices, and industrial consignments across India.
                        </p>
                        <p class="hs-seo-desc">
                            Our doorstep packing teams arrive equipped with specialized cartons, wardrobe boxes, bubble rolls, and corner guards. Every item—from delicate crockery and artwork to heavy double beds and refrigerators—is wrapped systematically to withstand long-distance highway vibration.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Pre-Move Survey &amp; Quotation</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Specialized Wardrobe &amp; Book Boxes</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Complete Door-to-Door Service</span>
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
                                <span class="hs-seo-badge mb-1">PACKAGING PROTOCOL</span>
                                <h3 class="hs-seo-title mb-0">Standardized 7-Layer Virgin Packing Materials &amp; Custom Wooden Crates</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            We never compromise on material quality. Our 7-layer packaging standard uses anti-static virgin bubble wrap, 5-ply corrugated sheets, shock-absorbing thermocol pads, waterproof stretch film, and heavy-duty adhesive sealing tapes.
                        </p>
                        <p class="hs-seo-desc">
                            For high-value fragile possessions—including glass dining tables, OLED televisions, chandeliers, and marble idols—our carpenters build custom wooden crates on site to ensure total shock resistance inside container trucks.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> 7-Layer Virgin Bubble Wrap</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> On-Site Custom Wooden Crating</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Waterproof Stretch Film Shield</span>
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
                                <span class="hs-seo-badge mb-1">TRANSPARENT PRICING</span>
                                <h3 class="hs-seo-title mb-0">100% Fixed Written Quotation &amp; Genuine Transit Insurance Coverage</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            Transparency is central to our service. We provide detailed written estimates covering packing material costs, skilled labor, truck freight, toll taxes, and GST taxes upfront.
                        </p>
                        <p class="hs-seo-desc">
                            To protect your financial investment, we issue authentic transit insurance policy documents prior to vehicle dispatch, giving you 100% risk coverage against accidental damage, fire, or natural perils.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> All-Inclusive Written Estimate</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Genuine Transit Insurance Policy</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Zero Hidden Surcharges</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Packing & Moving FAQs -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Frequently Asked Questions</span>
                <h2 class="hs-sec-title">Packing &amp; Moving Help Center</h2>
            </div>

            <div class="accordion" id="hsFaqAccordion">
                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq1">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q1</span>
                                <span>What types of packing materials does <?= $company3 ?> use?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq1" class="accordion-collapse collapse show" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            We use 7-layer packaging materials including virgin bubble wrap, anti-static foam sheets, 5-ply corrugated cartons, thermocol corner guards, stretch film, and custom wooden crates.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq2">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q2</span>
                                <span>Are fragile items like electronics and glassware crated separately?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq2" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes! Delicate items like OLED TVs, marble table tops, chandeliers, and glassware are packed in heavy-duty bubble wrap and encased in custom wooden crates built on site.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq3">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q3</span>
                                <span>Do you provide unpacking and furniture re-assembly at destination?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq3" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes! Our team unloads every item, unpacks cartons, places furniture in designated rooms, and re-assembles beds and wardrobes so your home is ready to live in on Day 1.
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
                        <i class="bi bi-stars"></i> NEED PROFESSIONAL PACKING &amp; MOVING?
                    </div>
                    <h2 class="fw-bold text-white mb-3">Book Professional Packing &amp; Moving With <?= $company3 ?></h2>
                    <p class="text-white opacity-100 fw-medium leading-relaxed mb-0 hs-cta-text">
                        Book a free doorstep survey today. Enjoy 7-layer virgin packaging, skilled carpenters, and 100% damage-free delivery.
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
