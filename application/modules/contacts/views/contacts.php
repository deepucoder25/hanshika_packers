<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Our Moving Experts',
    'bc_desc' => 'Get in touch with our 24x7 relocation support team for instant free quotes, branch addresses, helpline numbers, and live WhatsApp assistance.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- Contact Page Main Section -->
<section class="cnt-page-section py-5">
    <div class="container">

        <!-- 1. Top 3 Unique Contact Info Cards (Number, Address, Mail) -->
        <div class="row g-4 mb-5">
            <!-- Box 1: Number (Phone Hotline & WhatsApp) -->
            <div class="col-lg-4 col-md-6">
                <div class="cnt-top-card">
                    <span class="cnt-card-badge cnt-badge-red mb-3">
                        <i class="bi bi-headset"></i> 24/7 HELPLINE &amp; WHATSAPP
                    </span>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="cnt-card-icon-ring">
                            <i class="bi bi-telephone-outbound-fill"></i>
                        </div>
                        <div class="cnt-card-val mb-0"><?= $phone ?></div>
                    </div>
                    <p class="cnt-card-desc">Call our round-the-clock customer support desk or chat instantly on WhatsApp for quick price estimation.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="<?= $phonehtml ?>" class="cnt-card-action-btn cnt-btn-red">
                            <i class="bi bi-telephone-fill"></i> Call Helpline
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="cnt-card-action-btn cnt-btn-green">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- Box 2: Address (Headquarters / Office Location) -->
            <div class="col-lg-4 col-md-6">
                <div class="cnt-top-card">
                    <span class="cnt-card-badge cnt-badge-yellow mb-3">
                        <i class="bi bi-geo-alt-fill"></i> HEAD OFFICE LOCATION
                    </span>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="cnt-card-icon-ring">
                            <i class="bi bi-building-fill-gear"></i>
                        </div>
                        <div class="cnt-card-val mb-0"><?= !empty($city) ? $city : 'Headquarters' ?>, India</div>
                    </div>
                    <p class="cnt-card-desc mb-0"><?= $address ?></p>
                </div>
            </div>

            <!-- Box 3: Mail (Official Email Support) -->
            <?php 
                $displayMail = !empty($mail) ? $mail : (!empty($email) ? $email : '');
                $displayMailHtml = !empty($mailhtml) ? $mailhtml : (!empty($email) ? 'mailto:'.$email : '#');
            ?>
            <div class="col-lg-4 col-md-12">
                <div class="cnt-top-card">
                    <span class="cnt-card-badge cnt-badge-dark mb-3">
                        <i class="bi bi-envelope-paper-fill"></i> OFFICIAL EMAIL SUPPORT
                    </span>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="cnt-card-icon-ring">
                            <i class="bi bi-envelope-check-fill"></i>
                        </div>
                        <div class="cnt-card-val mb-0"><?= $displayMail ?></div>
                    </div>
                    <p class="cnt-card-desc">Send corporate inquiries, shifting inventories, or customer support queries for a written response.</p>
                    <a href="<?= $displayMailHtml ?>" class="cnt-card-action-link">
                        <span>Send Direct Email</span> <i class="bi bi-arrow-right-short"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- 2. Dual-Column Main Form & Network Section -->
        <div class="row g-4 g-lg-5">
            <!-- Left Column: Wavy Header Quote Portal Form -->
            <div class="col-lg-6">
                <div class="cnt-form-card">
                    <!-- Wavy Top Heading Header -->
                    <div class="cnt-wavy-header">
                        <span class="cnt-header-badge">
                            <i class="bi bi-stars me-1"></i> 100% Free Instant Tariff Quote
                        </span>
                        <h3 class="cnt-header-title">Get Free Moving Price Quote</h3>
                        <p class="cnt-header-subtitle">Fill in your shifting details below for an immediate tariff estimate &amp; instant callback.</p>

                        <!-- Bottom Wavy SVG Curve -->
                        <div class="cnt-header-wave">
                            <svg viewBox="0 0 600 24" preserveAspectRatio="none">
                                <path d="M0,0 C180,22 420,0 600,18 L600,24 L0,24 Z" fill="#ffffff"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Form Body -->
                    <div class="cnt-form-body">
                        <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                            
                            <!-- 2-Column Responsive Input Grid -->
                            <div class="row g-3">
                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <div class="cnt-input-wrap">
                                        <label for="contact_name" class="cnt-input-label">Your Full Name *</label>
                                        <div class="cnt-field-group">
                                            <i class="bi bi-person-fill cnt-input-icon"></i>
                                            <input type="text" name="name" id="contact_name" class="cnt-control" placeholder="Enter your full name" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile Number -->
                                <div class="col-md-6">
                                    <div class="cnt-input-wrap">
                                        <label for="contact_phone" class="cnt-input-label">Mobile Phone *</label>
                                        <div class="cnt-field-group">
                                            <i class="bi bi-telephone-fill cnt-input-icon"></i>
                                            <input type="tel" name="phone" id="contact_phone" class="cnt-control" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-12">
                                    <div class="cnt-input-wrap">
                                        <label for="contact_email" class="cnt-input-label">Email Address</label>
                                        <div class="cnt-field-group">
                                            <i class="bi bi-envelope-fill cnt-input-icon"></i>
                                            <input type="email" name="email" id="contact_email" class="cnt-control" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>

                                <!-- Shifting Details -->
                                <div class="col-md-12">
                                    <div class="cnt-input-wrap">
                                        <label for="contact_message" class="cnt-input-label">Shifting Details &amp; Preferred Date</label>
                                        <div class="cnt-field-group">
                                            <i class="bi bi-chat-left-text-fill cnt-input-icon"></i>
                                            <textarea name="message" id="contact_message" class="cnt-control" placeholder="Mention moving items, preferred date, pickup &amp; delivery location..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit CTA Button -->
                            <button type="submit" class="cnt-submit-btn mt-4">
                                <i class="bi bi-calculator-fill"></i>
                                <span>Calculate &amp; Get Free Quote</span>
                            </button>

                            <div id="contactformresults" class="mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Column: Network & Location Showcase Cards -->
            <div class="col-lg-6">
                <!-- Side Card 1: Nationwide Shifting Fleet -->
                <div class="cnt-side-card">
                    <h3 class="cnt-side-title">
                        <i class="bi bi-shield-check"></i> India's Premier Moving Network
                    </h3>
                    <p class="text-muted leading-relaxed mb-4">
                        At <strong><?= $company3 ?></strong>, we take pride in being one of India's most trusted packers and movers. Equipped with company-owned container trucks, trained moving crews, and standardized 7-layer virgin packing materials, we ensure 100% damage-free delivery.
                    </p>

                    <div class="row g-3 text-center mb-4">
                        <div class="col-6 col-sm-3">
                            <div class="cnt-stat-pill">
                                <div class="cnt-stat-num"><?= $yearsExperience ?></div>
                                <div class="cnt-stat-text">Years Active</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="cnt-stat-pill">
                                <div class="cnt-stat-num"><?= $happyClients ?></div>
                                <div class="cnt-stat-text">Happy Moves</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="cnt-stat-pill">
                                <div class="cnt-stat-num"><?= $statesCovered ?></div>
                                <div class="cnt-stat-text">Container Fleet</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="cnt-stat-pill">
                                <div class="cnt-stat-num text-success">100%</div>
                                <div class="cnt-stat-text">Safe Guarantee</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 bg-light rounded-4 border text-center">
                        <div class="d-inline-flex align-items-center gap-2 text-dark fw-bold small">
                            <i class="bi bi-patch-check-fill text-danger fs-5"></i> ISO 9001:2015 Certified &amp; Full Transit Insurance Support
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>