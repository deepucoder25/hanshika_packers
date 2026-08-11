<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose ' . $company3,
    'bc_desc' => 'Discover the 6 Gold Standards of relocation that make us India\'s most trusted, transparent, and damage-free packers and movers company.',
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- Why Choose Us Page Container -->
<section class="choose-page-section py-5">
    <div class="container">

        <!-- 1. Hero Story Banner Card -->
        <div class="chs-hero-card p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-12">
                    <div class="chs-badge-pill mb-3">
                        <i class="bi bi-patch-check-fill text-warning"></i> 100% RELOCATION SAFETY COMMITMENT
                    </div>
                    <h1 class="chs-main-title mb-3">
                        6 Reasons Why Families &amp; Businesses Choose <span class="chs-highlight"><?= $company3 ?></span>
                    </h1>
                    <p class="chs-lead-text mb-4">
                        Hiring the right relocation company is the difference between a smooth transition and a stressful disaster. At <strong><?= $company3 ?></strong>, we have spent over <?= $yearsExperience ?> years refining our packing, loading, and transit protocols to deliver 100% damage-free moving experiences.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        Unlike unorganized local movers who use old cartons and surprise customers with hidden fees at delivery, we provide transparent written quotations, 7-layer virgin packing materials, background-verified crew members, and live GPS consignment tracking.
                    </p>

                    <!-- Trust Verification Badges -->
                    <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                        <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                            <i class="bi bi-shield-fill-check text-success fs-5"></i>
                            <span class="small fw-bold text-dark">ISO 9001:2015 Certified</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                            <i class="bi bi-file-earmark-lock2-fill text-primary fs-5"></i>
                            <span class="small fw-bold text-dark">Full Transit Insurance</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 bg-light px-3 py-2 rounded-pill border">
                            <i class="bi bi-truck-front-fill text-danger fs-5"></i>
                            <span class="small fw-bold text-dark">150+ Container Trucks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. The 6 Gold Standards Grid -->
        <div class="my-5 py-4">
            <div class="chs-sec-hdr">
                <span class="chs-sec-subtitle">Service Benchmarks</span>
                <h2 class="chs-sec-title">The 6 Gold Standards of Safe Relocation</h2>
            </div>

            <div class="row g-4">
                <!-- Standard 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="chs-standard-card">
                        <span class="chs-card-step-badge">STANDARD 01</span>
                        <div class="chs-icon-wrap">
                            <i class="bi bi-receipt-cutoff"></i>
                        </div>
                        <h3 class="chs-card-title">100% Transparent Upfront Billing</h3>
                        <p class="chs-card-desc">
                            We provide itemized written quotations before starting the job. What we quote is what you pay—with zero last-minute delivery surcharges or hidden toll fees.
                        </p>
                        <ul class="chs-bullet-list">
                            <li><i class="bi bi-check-circle-fill"></i> Itemized quotation document</li>
                            <li><i class="bi bi-check-circle-fill"></i> All taxes &amp; octroi included upfront</li>
                            <li><i class="bi bi-check-circle-fill"></i> No cancellation fee traps</li>
                        </ul>
                    </div>
                </div>

                <!-- Standard 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="chs-standard-card">
                        <span class="chs-card-step-badge">STANDARD 02</span>
                        <div class="chs-icon-wrap">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="chs-card-title">7-Layer Heavy Duty Packing</h3>
                        <p class="chs-card-desc">
                            Every fragile piece of glass, OLED TV, sofa, and antique furniture is wrapped in multi-layer virgin bubble wrap, corrugated sheets, and customized wooden crates.
                        </p>
                        <ul class="chs-bullet-list">
                            <li><i class="bi bi-check-circle-fill"></i> Heavy-duty bubble wrap &amp; foam</li>
                            <li><i class="bi bi-check-circle-fill"></i> Wardrobe boxes for clothes</li>
                            <li><i class="bi bi-check-circle-fill"></i> Waterproof stretch film seal</li>
                        </ul>
                    </div>
                </div>

                <!-- Standard 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="chs-standard-card">
                        <span class="chs-card-step-badge">STANDARD 03</span>
                        <div class="chs-icon-wrap">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h3 class="chs-card-title">Sealed Container Fleet</h3>
                        <p class="chs-card-desc">
                            Your goods are carried inside company-owned, weatherproof container trucks equipped with air suspension to eliminate road vibration and rain intrusion.
                        </p>
                        <ul class="chs-bullet-list">
                            <li><i class="bi bi-check-circle-fill"></i> 100% weatherproof closed body</li>
                            <li><i class="bi bi-check-circle-fill"></i> Hydraulic ramps for safe loading</li>
                            <li><i class="bi bi-check-circle-fill"></i> Belt tie-down cargo locks</li>
                        </ul>
                    </div>
                </div>

                <!-- Standard 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="chs-standard-card">
                        <span class="chs-card-step-badge">STANDARD 04</span>
                        <div class="chs-icon-wrap">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 class="chs-card-title">Background-Verified Crew</h3>
                        <p class="chs-card-desc">
                            We never deploy unverified daily-wage laborers. Every packer, loader, carpenter, and driver is an in-house employee undergoing background checks.
                        </p>
                        <ul class="chs-bullet-list">
                            <li><i class="bi bi-check-circle-fill"></i> Police-verified personnel</li>
                            <li><i class="bi bi-check-circle-fill"></i> Skilled furniture carpenters</li>
                            <li><i class="bi bi-check-circle-fill"></i> Courteous &amp; uniformed crew</li>
                        </ul>
                    </div>
                </div>

                <!-- Standard 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="chs-standard-card">
                        <span class="chs-card-step-badge">STANDARD 05</span>
                        <div class="chs-icon-wrap">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3 class="chs-card-title">Real-Time Live GPS Fleet Tracking</h3>
                        <p class="chs-card-desc">
                            Know exactly where your household goods or vehicle consignment carrier is at any minute with automated GPS updates straight to your mobile.
                        </p>
                        <ul class="chs-bullet-list">
                            <li><i class="bi bi-check-circle-fill"></i> 24/7 live location tracking</li>
                            <li><i class="bi bi-check-circle-fill"></i> Estimated arrival updates</li>
                            <li><i class="bi bi-check-circle-fill"></i> Direct driver hotline access</li>
                        </ul>
                    </div>
                </div>

                <!-- Standard 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="chs-standard-card">
                        <span class="chs-card-step-badge">STANDARD 06</span>
                        <div class="chs-icon-wrap">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="chs-card-title">Full Transit Insurance Protection</h3>
                        <p class="chs-card-desc">
                            We provide comprehensive transit insurance policies covering unforeseen accidental loss, fire, or natural mishaps with fast, hassle-free claim settlement support.
                        </p>
                        <ul class="chs-bullet-list">
                            <li><i class="bi bi-check-circle-fill"></i> Genuine insurance policy copy</li>
                            <li><i class="bi bi-check-circle-fill"></i> Quick claim documentation</li>
                            <li><i class="bi bi-check-circle-fill"></i> Total financial peace of mind</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Comparison Matrix: Us vs Unorganized Local Movers -->
        <div class="my-5 py-4">
            <div class="chs-sec-hdr">
                <span class="chs-sec-subtitle">The Clear Difference</span>
                <h2 class="chs-sec-title"><?= $company3 ?> vs Local Unorganized Movers</h2>
            </div>

            <div class="chs-matrix-card">
                <div class="table-responsive">
                    <table class="table chs-matrix-table align-middle">
                        <thead>
                            <tr class="border-bottom">
                                <th class="text-dark">Relocation Criteria</th>
                                <th class="chs-col-brand text-center"><?= $company3 ?></th>
                                <th class="chs-col-others text-center">Unorganized Local Movers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold text-dark"><i class="bi bi-currency-rupee text-red me-2"></i> Upfront Pricing</td>
                                <td class="chs-col-brand">
                                    <div class="chs-matrix-check">
                                        <i class="bi bi-check-circle-fill"></i> 100% Fixed Written Quotation (Zero Hidden Charges)
                                    </div>
                                </td>
                                <td class="chs-col-others">
                                    <div class="chs-matrix-cross">
                                        <i class="bi bi-x-circle-fill"></i> Unwritten verbal estimates with high extra demands at delivery
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark"><i class="bi bi-box-seam text-red me-2"></i> Packing Materials</td>
                                <td class="chs-col-brand">
                                    <div class="chs-matrix-check">
                                        <i class="bi bi-check-circle-fill"></i> 7-Layer Virgin Bubble Wrap, Corrugated Rolls &amp; Crates
                                    </div>
                                </td>
                                <td class="chs-col-others">
                                    <div class="chs-matrix-cross">
                                        <i class="bi bi-x-circle-fill"></i> Single-layer old used cartons &amp; plastic bags
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark"><i class="bi bi-truck text-red me-2"></i> Fleet Safety</td>
                                <td class="chs-col-brand">
                                    <div class="chs-matrix-check">
                                        <i class="bi bi-check-circle-fill"></i> Sealed Weatherproof Containers with Air Suspension
                                    </div>
                                </td>
                                <td class="chs-col-others">
                                    <div class="chs-matrix-cross">
                                        <i class="bi bi-x-circle-fill"></i> Open pickup vans exposed to rain, dust, &amp; theft
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark"><i class="bi bi-person-badge text-red me-2"></i> Crew Verification</td>
                                <td class="chs-col-brand">
                                    <div class="chs-matrix-check">
                                        <i class="bi bi-check-circle-fill"></i> In-House Trained, Uniformed &amp; Background-Checked
                                    </div>
                                </td>
                                <td class="chs-col-others">
                                    <div class="chs-matrix-cross">
                                        <i class="bi bi-x-circle-fill"></i> Untrained daily-wage street laborers
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark"><i class="bi bi-geo-alt text-red me-2"></i> Consignment Tracking</td>
                                <td class="chs-col-brand">
                                    <div class="chs-matrix-check">
                                        <i class="bi bi-check-circle-fill"></i> Real-Time Live GPS Fleet Tracking 24/7
                                    </div>
                                </td>
                                <td class="chs-col-others">
                                    <div class="chs-matrix-cross">
                                        <i class="bi bi-x-circle-fill"></i> No tracking access, driver calls go unanswered
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-dark"><i class="bi bi-shield-check text-red me-2"></i> Risk Coverage</td>
                                <td class="chs-col-brand">
                                    <div class="chs-matrix-check">
                                        <i class="bi bi-check-circle-fill"></i> 100% Genuine Transit Insurance Policy Document
                                    </div>
                                </td>
                                <td class="chs-col-others">
                                    <div class="chs-matrix-cross">
                                        <i class="bi bi-x-circle-fill"></i> No insurance policy or damage compensation
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 4. Customer Peace of Mind Guarantees -->
        <div class="my-5 py-4">
            <div class="chs-sec-hdr">
                <span class="chs-sec-subtitle">Our Commitments</span>
                <h2 class="chs-sec-title">4 Peace-of-Mind Promises Every Customer Receives</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="chs-guarantee-card h-100">
                        <div class="chs-guarantee-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="chs-guarantee-title">24/7 Move Manager</h4>
                        <p class="chs-guarantee-desc">A single point of contact dedicated to coordinate your entire relocation process.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="chs-guarantee-card h-100">
                        <div class="chs-guarantee-icon">
                            <i class="bi bi-clipboard2-check-fill"></i>
                        </div>
                        <h4 class="chs-guarantee-title">Doorstep Pre-Move Survey</h4>
                        <p class="chs-guarantee-desc">Free volume assessment and customized packing strategy prior to booking.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="chs-guarantee-card h-100">
                        <div class="chs-guarantee-icon">
                            <i class="bi bi-gem"></i>
                        </div>
                        <h4 class="chs-guarantee-title">Zero Damage Goal</h4>
                        <p class="chs-guarantee-desc">Specialized foam wrapping for glass, TVs, marble tops, and fragile art pieces.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="chs-guarantee-card h-100">
                        <div class="chs-guarantee-icon">
                            <i class="bi bi-clock-check-fill"></i>
                        </div>
                        <h4 class="chs-guarantee-title">On-Time Delivery</h4>
                        <p class="chs-guarantee-desc">Strict adherence to scheduled dispatch and doorstep unloading timelines.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Call to Action Banner -->
        <div class="chs-cta-card mt-5 p-4 p-md-5">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-2 mb-2 text-warning fw-bold small">
                        <i class="bi bi-stars"></i> EXPERIENCE SAFE &amp; STRESS-FREE SHIFTING TODAY
                    </div>
                    <h2 class="fw-bold text-white mb-3">Book India's Most Trusted Movers &amp; Packers</h2>
                    <p class="text-white opacity-100 fw-medium leading-relaxed mb-0 chs-cta-text">
                        Contact <strong><?= $company3 ?></strong> today for a free doorstep survey and written quotation. Experience 100% transparent pricing and damage-free delivery.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end text-center d-flex flex-wrap gap-3 justify-content-center justify-content-lg-end">
                    <button type="button" class="btn chs-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <i class="bi bi-calculator-fill me-2"></i> Get Free Quote
                    </button>
                    <a href="<?= $phonehtml ?>" class="btn chs-cta-outline-btn">
                        <i class="bi bi-telephone-fill me-2"></i> <?= $phone ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>