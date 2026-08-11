<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Office Relocation Services',
    'bc_desc' => 'Professional corporate & office relocation services with zero business downtime, IT equipment security, and seamless commercial moving across India.',
    'breadcrumbs' => [
        ['name' => 'Office Relocation']
    ]
]);
?>

<!-- Office Relocation Main Section -->
<section class="hs-page-section py-5">
    <div class="container">

        <!-- 1. Hero Story & Capabilities Banner Card -->
        <div class="hs-hero-card p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <div class="hs-badge-pill mb-3">
                        <i class="bi bi-building-check text-danger"></i> CORPORATE RELOCATION SPECIALISTS
                    </div>
                    <h1 class="hs-main-title mb-3">
                        Seamless &amp; Zero-Downtime <span class="hs-highlight">Office Relocation</span> Across India
                    </h1>
                    <p class="hs-lead-text mb-4">
                        Relocating your business requires precision planning, speed, and absolute security for sensitive corporate assets. At <strong><?= $company3 ?></strong>, we deliver end-to-end office shifting solutions tailored to minimize operational downtime and protect critical IT hardware.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        Whether you are moving a startup office or relocating a multi-floor corporate headquarters, our background-verified commercial crew uses color-coded labeling, anti-static IT packaging, and weekend moving slots to ensure your business is back online on Monday morning.
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
                                    <div class="hs-stat-label">Corporate Moves</div>
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
                                <i class="bi bi-patch-check-fill text-danger fs-5"></i> Anti-Static IT Packing &amp; Weekend Shifting
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. 4 Pillars of Corporate Relocation -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Commercial Execution Standards</span>
                <h2 class="hs-sec-title">4 Pillars of Our Commercial Moving Service</h2>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-cpu-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 01</span>
                        </div>
                        <h4 class="hs-pillar-title">IT &amp; Server Security</h4>
                        <p class="hs-pillar-desc">
                            Anti-static bubble wrap, foam padding, and dedicated server crates for desktops, monitors, switches, and server racks.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 02</span>
                        </div>
                        <h4 class="hs-pillar-title">Weekend Execution</h4>
                        <p class="hs-pillar-desc">
                            Flexible overnight and weekend relocation schedules designed to prevent any loss of billable office work hours.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-tags-fill"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 03</span>
                        </div>
                        <h4 class="hs-pillar-title">Color-Coded Tagging</h4>
                        <p class="hs-pillar-desc">
                            Department-wise color coding and workstation inventory numbering for seamless unpacking at your new facility.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="hs-pillar-card h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="hs-pillar-icon">
                                <i class="bi bi-display"></i>
                            </div>
                            <span class="hs-pillar-step">PILLAR 04</span>
                        </div>
                        <h4 class="hs-pillar-title">Floor-Plan Re-Setup</h4>
                        <p class="hs-pillar-desc">
                            Desk re-assembly, conference table installation, and file storage setup strictly following your architect floor plan.
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
                                <i class="bi bi-building-gear"></i>
                            </div>
                            <div>
                                <span class="hs-seo-badge mb-1">COMMERCIAL RELOCATION</span>
                                <h3 class="hs-seo-title mb-0">Corporate &amp; Office Relocation Services with Zero Business Downtime</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            At <strong><?= $company3 ?></strong>, we understand that office relocation is a complex enterprise operation where time is money. Our specialized commercial moving division plans every phase of your office move to guarantee zero disruption to your daily business operations, clients, and revenue.
                        </p>
                        <p class="hs-seo-desc">
                            Our corporate move managers conduct a comprehensive floor-plan assessment prior to move day. We assign workstation IDs, inventory tags, and department color codes so every desk, chair, computer, and file box arrives at its exact pre-designated location in your new corporate facility.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Zero Workday Disruption</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Color-Coded Workstation Tagging</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Dedicated Corporate Move Manager</span>
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
                                <span class="hs-seo-badge mb-1">IT HARDWARE PROTECTION</span>
                                <h3 class="hs-seo-title mb-0">Specialized IT Equipment Packing, Server Racks &amp; Document Security</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            Corporate hardware—including servers, networking switches, monitors, and laptops—demands specialized handling. We use anti-static virgin bubble wraps, custom foam cushioning, and reinforced wooden crates to protect your high-value IT infrastructure against static charges, vibration, and impact.
                        </p>
                        <p class="hs-seo-desc">
                            For confidential legal files, financial ledgers, and employee records, we provide lockable plastic crates and tamper-evident security seals. Your commercial assets are transported in company-owned weatherproof container trucks monitored by 24/7 live mobile GPS tracking.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Anti-Static IT Bubble Wrapping</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Lockable Security File Crates</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> GPS Tracked Sealed Fleet</span>
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
                                <span class="hs-seo-badge mb-1">TRANSPARENT COMMERCIAL PRICING</span>
                                <h3 class="hs-seo-title mb-0">Fixed Commercial Quotation &amp; Comprehensive Corporate Insurance</h3>
                            </div>
                        </div>
                        <p class="hs-seo-desc">
                            We offer 100% transparent written commercial quotations with zero surprise surcharges. Our quotation covers all packing materials, professional labor, vehicle freight, toll taxes, and GST upfront, enabling clear corporate budget approval.
                        </p>
                        <p class="hs-seo-desc">
                            Furthermore, we issue authentic corporate transit insurance documentation prior to dispatch, giving your board of directors and finance team total risk coverage against accidental damage or transit perils.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-3">
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> GST Compliant Written Quotation</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Full Corporate Transit Policy</span>
                            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> Flexible Payment Terms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Office Relocation FAQs -->
        <div class="my-5 py-4">
            <div class="hs-sec-hdr">
                <span class="hs-sec-subtitle">Frequently Asked Questions</span>
                <h2 class="hs-sec-title">Office Relocation Help Center</h2>
            </div>

            <div class="accordion" id="hsFaqAccordion">
                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq1">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q1</span>
                                <span>How does <?= $company3 ?> minimize office downtime during relocation?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq1" class="accordion-collapse collapse show" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            We schedule office relocations during weekend slots (Friday evening to Sunday night) or overnight shifts. Our color-coded tagging and pre-assigned floor plans allow your staff to resume work on Monday morning without disruption.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq2">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q2</span>
                                <span>How are sensitive IT servers and desktop computers packed?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq2" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            All electronic hardware is wrapped in anti-static bubble wrap, cushioned with foam inserts, and transported inside shock-proof wooden crates or specialized IT server containers.
                        </div>
                    </div>
                </div>

                <div class="hs-faq-card">
                    <h3 class="accordion-header">
                        <button class="hs-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hsFaq3">
                            <span class="d-flex align-items-center gap-3 pe-3">
                                <span class="hs-faq-icon-q">Q3</span>
                                <span>Can office relocation be scheduled on weekends or overnight?</span>
                            </span>
                            <span class="hs-faq-arrow"><i class="bi bi-chevron-down"></i></span>
                        </button>
                    </h3>
                    <div id="hsFaq3" class="accordion-collapse collapse" data-bs-parent="#hsFaqAccordion">
                        <div class="hs-faq-body">
                            Yes! Weekend and night shifting is our standard operating model for commercial clients, ensuring your business suffers zero billable hour losses.
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
                        <i class="bi bi-stars"></i> READY FOR A ZERO-DOWNTIME CORPORATE MOVE?
                    </div>
                    <h2 class="fw-bold text-white mb-3">Plan Your Corporate Office Relocation With <?= $company3 ?></h2>
                    <p class="text-white opacity-100 fw-medium leading-relaxed mb-0 hs-cta-text">
                        Book a free doorstep commercial survey today. Enjoy guaranteed GST pricing, anti-static IT packing, and zero workday interruption.
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
