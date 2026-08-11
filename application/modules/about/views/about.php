<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About ' . $company3,
    'bc_desc' => 'Discover India\'s leading certified packing & moving company with 15+ years of excellence, a fleet of 150+ covered trucks, and 50,000+ happy relocations nationwide.',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- About Us Page Container -->
<section class="about-page-section py-5">
    <div class="container">

        <!-- 1. Hero Story & Capabilities Banner Card -->
        <div class="abt-hero-card p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <div class="abt-badge-pill mb-3">
                        <i class="bi bi-shield-check text-red"></i> ISO 9001:2015 CERTIFIED MOVERS
                    </div>
                    <h1 class="abt-main-title mb-3">
                        Pioneering <span class="abt-highlight-text">Safe &amp; Stress-Free</span> Relocations Across India
                    </h1>
                    <p class="abt-lead-desc mb-4">
                        At <strong><?= $company3 ?></strong>, we believe moving to a new home or office should be an exciting milestone, not a stressful ordeal. Established with a vision to deliver premium, reliable, and transparent relocation services, we have grown into one of India’s most trusted packers and movers companies.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        With over <?= $yearsExperience?> years of operational expertise, a dedicated team of 300+ trained relocation specialists, and a company-owned fleet of 150+ all-weather container trucks, we ensure every item—from delicate glassware to heavy industrial machinery—is packed with military-grade precision and transported securely.
                    </p>

                    <!-- Key Stat Cards Grid -->
                    <div class="row g-3">
                        <div class="col-6 col-sm-3">
                            <div class="abt-stat-card text-center">
                                <div class="abt-stat-num"><?= $yearsExperience?></div>
                                <div class="abt-stat-label">Years Active</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="abt-stat-card text-center">
                                <div class="abt-stat-num"><?= $happyClients ?></div>
                                <div class="abt-stat-label">Happy Moves</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="abt-stat-card text-center">
                                <div class="abt-stat-num"><?= $statesCovered ?></div>
                                <div class="abt-stat-label">Truck Fleet</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="abt-stat-card text-center">
                                <div class="abt-stat-num"><?= $secureShifting ?></div>
                                <div class="abt-stat-label">Safety Record</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Feature List Card -->
                <div class="col-lg-5">
                    <div class="abt-feature-card">
                        <h4 class="fw-bold text-dark mb-4 border-bottom pb-3">Why Customers Choose Us</h4>
                        
                        <div class="abt-feat-item">
                            <div class="abt-feat-icon">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <div>
                                <h5 class="abt-feat-title">7-Layer Heavy Duty Packing</h5>
                                <p class="abt-feat-desc">Bubble wraps, corrugated sheets, stretch films, and wooden crates for 100% protection.</p>
                            </div>
                        </div>

                        <div class="abt-feat-item">
                            <div class="abt-feat-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h5 class="abt-feat-title">Real-Time GPS Fleet Tracking</h5>
                                <p class="abt-feat-desc">Monitor your consignment carrier live from dispatch to doorstep delivery.</p>
                            </div>
                        </div>

                        <div class="abt-feat-item">
                            <div class="abt-feat-icon">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div>
                                <h5 class="abt-feat-title">Full Transit Insurance Coverage</h5>
                                <p class="abt-feat-desc">Complete financial protection against unforeseen transit perils or accidental loss.</p>
                            </div>
                        </div>

                        <div class="abt-feat-item">
                            <div class="abt-feat-icon">
                                <i class="bi bi-currency-rupee"></i>
                            </div>
                            <div>
                                <h5 class="abt-feat-title">Zero Hidden Fees Guarantee</h5>
                                <p class="abt-feat-desc">100% upfront transparent written quotations with no last-minute surprise charges.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Our Mission, Vision & Core Values Section -->
        <div class="my-5 py-4">
            <div class="abt-sec-hdr">
                <span class="abt-sec-subtitle">Our Driving Philosophy</span>
                <h2 class="abt-sec-title">Mission, Vision &amp; Quality Commitments</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="abt-pillar-card">
                        <div class="abt-pillar-icon-box">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="abt-pillar-title">Our Mission</h3>
                        <p class="abt-pillar-text">
                            To deliver world-class household, corporate, and vehicle relocation services across India with zero damage, total price transparency, and unmatched operational speed.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-pillar-card">
                        <div class="abt-pillar-icon-box">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                        <h3 class="abt-pillar-title">Our Vision</h3>
                        <p class="abt-pillar-text">
                            To become India's #1 tech-enabled logistics &amp; moving brand, recognized globally for innovation, safety benchmarks, eco-friendly packing, and customer satisfaction.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="abt-pillar-card">
                        <div class="abt-pillar-icon-box">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h3 class="abt-pillar-title">Quality Assurance</h3>
                        <p class="abt-pillar-text">
                            We strictly enforce standardized 7-layer packing protocols, background-checked personnel, hydraulic car carriers, and 24/7 client helpline assistance on every job.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Our Infrastructure & Fleet Showcase -->
        <div class="my-5 py-4">
            <div class="abt-sec-hdr">
                <span class="abt-sec-subtitle">Robust Capabilities</span>
                <h2 class="abt-sec-title">Infrastructure &amp; Fleet Excellence</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="abt-fleet-card h-100">
                        <div class="abt-fleet-icon">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h4 class="abt-fleet-title">Company-Owned Fleet</h4>
                        <p class="abt-fleet-desc">Over 150+ closed container trucks equipped with air-suspension and weatherproof seals to prevent dust and water intrusion during long-distance transit.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-fleet-card h-100">
                        <div class="abt-fleet-icon">
                            <i class="bi bi-boxes"></i>
                        </div>
                        <h4 class="abt-fleet-title">Customized Packing Materials</h4>
                        <p class="abt-fleet-desc">Premium virgin bubble wrap, heavy-duty corrugated boxes, thermocol cushions, edge protectors, wardrobe cartons, and waterproof stretch films.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-fleet-card h-100">
                        <div class="abt-fleet-icon">
                            <i class="bi bi-building-lock"></i>
                        </div>
                        <h4 class="abt-fleet-title">Secure Warehousing</h4>
                        <p class="abt-fleet-desc">Spacious, climate-controlled storage hubs with 24/7 CCTV surveillance, fire-fighting systems, and pest control for short &amp; long-term goods storage.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-fleet-card h-100">
                        <div class="abt-fleet-icon">
                            <i class="bi bi-person-workspace"></i>
                        </div>
                        <h4 class="abt-fleet-title">Trained Professional Crew</h4>
                        <p class="abt-fleet-desc">Background-verified packers, skilled drivers, furniture carpenters, and senior site supervisors trained in handling luxury items and electronics.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-fleet-card h-100">
                        <div class="abt-fleet-icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <h4 class="abt-fleet-title">Car &amp; Bike Carriers</h4>
                        <p class="abt-fleet-desc">Dedicated hydraulic car container trailers and safety-padded motorcycle rigs designed for scratch-free inter-city vehicle transport.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-fleet-card h-100">
                        <div class="abt-fleet-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="abt-fleet-title">24/7 Support Desk</h4>
                        <p class="abt-fleet-desc">Dedicated move managers available round-the-clock to answer queries, provide GPS updates, and facilitate smooth delivery coordination.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Our Standard 5-Step Moving Process -->
        <div class="my-5 py-4">
            <div class="abt-sec-hdr">
                <span class="abt-sec-subtitle">How We Work</span>
                <h2 class="abt-sec-title">Our Standardized 5-Step Relocation Process</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="abt-step-card h-100">
                        <div class="abt-step-num">01</div>
                        <h5 class="abt-step-title">Free Survey</h5>
                        <p class="abt-step-desc">Physical or video survey to assess goods volume.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="abt-step-card h-100">
                        <div class="abt-step-num">02</div>
                        <h5 class="abt-step-title">Safe Packing</h5>
                        <p class="abt-step-desc">Multi-layer protective packing at your doorstep.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="abt-step-card h-100">
                        <div class="abt-step-num">03</div>
                        <h5 class="abt-step-title">Smart Loading</h5>
                        <p class="abt-step-desc">Hydraulic ramps &amp; systematic cargo placement.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="abt-step-card h-100">
                        <div class="abt-step-num">04</div>
                        <h5 class="abt-step-title">GPS Transit</h5>
                        <p class="abt-step-desc">Sealed container transport with live tracking.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="abt-step-card h-100">
                        <div class="abt-step-num">05</div>
                        <h5 class="abt-step-title">Unpacking</h5>
                        <p class="abt-step-desc">Doorstep delivery, furniture assembly &amp; setup.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="abt-step-card abt-step-card-highlight h-100 border-danger">
                        <div class="abt-step-num abt-step-num-highlight">06</div>
                        <h5 class="abt-step-title text-danger">Smile Guaranteed</h5>
                        <p class="abt-step-desc">100% satisfaction check &amp; debris cleanup.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Call to Action Banner -->
        <div class="abt-cta-card mt-5 p-4 p-md-5">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-2 mb-2 text-warning fw-bold small">
                        <i class="bi bi-stars"></i> READY FOR A STRESS-FREE SHIFTING EXPERIENCE?
                    </div>
                    <h2 class="fw-bold text-white mb-3">Get Your Free Upfront Moving Quote Today</h2>
                    <p class="text-white opacity-100 fw-medium leading-relaxed mb-0 abt-cta-text">
                        Contact <strong><?= $company3 ?></strong> now for a complimentary doorstep or digital survey. Experience 100% safe packing and damage-free delivery across India.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end text-center d-flex flex-wrap gap-3 justify-content-center justify-content-lg-end">
                    <button type="button" class="btn abt-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <i class="bi bi-calculator-fill me-2"></i> Get Free Quote
                    </button>
                    <a href="<?= $phonehtml ?>" class="btn abt-cta-outline-btn">
                        <i class="bi bi-telephone-fill me-2"></i> <?= $phone ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>