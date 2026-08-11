<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>

<section class="pm-city-details-section py-5">
    <div class="container">
        
        <!-- 1. FULL-WIDTH (col-12) ABOUT US SECTION: 50% CONTENT + 50% IMAGE COLLAGE -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="abt-section-wrap">
                    
                    <div class="abt-grid-row">
                        
                        <!-- LEFT SIDE: Content, Heading, 3 Metrics & CTA Button (50% Width) -->
                        <div class="abt-content-col">
                            <div class="abt-eyebrow">
                                <span class="abt-eyebrow-line"></span> ABOUT US
                            </div>
                            <h2 class="abt-title">
                                Moving You Forward With <span class="text-danger">Care &amp; Trust</span> in <?= htmlspecialchars($city) ?>
                            </h2>
                            <div class="abt-dash-divider">
                                <span class="abt-dash-red"></span>
                                <span class="abt-dash-yellow"></span>
                            </div>
                            
                            <div class="abt-prose">
                                <?php echo $htmlcontent; ?>
                            </div>

                            <!-- 3 Metrics Card Box -->
                            <div class="abt-metrics-card text-center">
                                <div class="row g-2">
                                    <div class="col-4 border-end">
                                        <div class="abt-metric-circle-red">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <div class="abt-metric-num"><?= $happyClients ?></div>
                                        <p class="abt-metric-label">Happy Customers</p>
                                    </div>
                                    <div class="col-4 border-end">
                                        <div class="abt-metric-circle-yellow">
                                            <i class="bi bi-award-fill"></i>
                                        </div>
                                        <div class="abt-metric-num"><?= $yearsExperience ?></div>
                                        <p class="abt-metric-label">Years of Experience</p>
                                    </div>
                                    <div class="col-4">
                                        <div class="abt-metric-circle-red">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                        <div class="abt-metric-num"><?= $successfullShifts ?></div>
                                        <p class="abt-metric-label">Successful Moves</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Red Action Button & Dot Matrix -->
                            <div class="d-flex align-items-center gap-3">
                                <a href="<?= site_url('about') ?>" class="btn abt-red-btn">
                                    <span>KNOW MORE ABOUT US</span> <i class="bi bi-arrow-right-short fs-5"></i>
                                </a>
                                <div class="abt-dots-matrix d-none d-sm-grid">
                                    <?php for($i=0; $i<15; $i++): ?>
                                        <span class="abt-dot"></span>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT SIDE: 3 Overlapping Image Collage (50% Width) -->
                        <div class="abt-collage-col">
                            <div class="abt-collage-container">
                                
                                <!-- Box 1: Top Right Main Truck Loading Box -->
                                <div class="abt-collage-main">
                                    <img src="<?= base_url('assets/images/city_page/city_about3.jpg') ?>" alt="<?= $company3 ?> Truck Loading in <?= htmlspecialchars($city) ?>" loading="lazy">
                                </div>

                                <!-- Box 2: Bottom Left Golden Border Box -->
                                <div class="abt-collage-left">
                                    <img src="<?= base_url('assets/images/city_page/city_about2.jpg') ?>" alt="<?= $company3 ?> Furniture Packing" loading="lazy">
                                </div>

                                <!-- Box 3: Bottom Right Tall Vertical Box -->
                                <div class="abt-collage-right">
                                    <img src="<?= base_url('assets/images/city_page/city_about1.jpg') ?>" alt="<?= $company3 ?> Inventory Supervisor" loading="lazy">
                                </div>

                                <!-- Floating Shield Pill Badge -->
                                <div class="abt-collage-shield">
                                    <i class="bi bi-shield-check text-danger fs-4"></i>
                                    <div class="small fw-bold text-dark">
                                        Your Belongings, <span class="text-danger fst-italic">Our Responsibility.</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Wavy Bottom Accent Background Curve -->
                    <div class="abt-wave-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none">
                            <path d="M0,20 C360,60 1080,0 1440,30 L1440,60 L0,60 Z" fill="#d32f2f" opacity="0.15"/>
                            <path d="M0,35 C480,10 960,50 1440,25 L1440,60 L0,60 Z" fill="#d32f2f" opacity="0.8"/>
                        </svg>
                    </div>

                </div>
            </div>
        </div>

        <!-- 2. FULL-WIDTH 4-STEP RELOCATION PROCESS SECTION -->
        <?php include 'city_process.php'; ?>

        <!-- 3. LOWER SECTION: SEO CONTENT BOX, MAP, REVIEWS & FAQ (col-lg-8) + SIDEBAR (col-lg-4) -->
        <div class="row g-4 mb-5">
            
            <!-- LEFT: SEO Content Box, Map, Reviews & FAQ (col-lg-8) -->
            <div class="col-lg-8">
                
                <!-- NEW ATTRACTIVE SEO-FRIENDLY CONTENT BOX BEFORE MAP -->
                <div class="pm-seo-card mb-4">
                    <div class="pm-seo-header mb-3">
                        <span class="pm-seo-badge">
                            <i class="bi bi-award-fill text-warning me-1"></i> TOP RATED RELOCATION SERVICE IN <?= strtoupper(htmlspecialchars($city)) ?>
                        </span>
                        
                    </div>

                    <div class="pm-seo-body"> 
                      <?= $htmlcontent1 ?>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="pm-city-map my-4">
                    <?php include 'city_map.php'; ?>
                </div>

                <!-- Reviews & FAQ Accordion -->
                <div class="mt-4">
                    <?php include 'city_reviews.php'; ?>
                    <?php include 'city_faq.php'; ?>
                </div>

            </div>

            <!-- RIGHT: SIDEBAR (col-lg-4) -->
            <div class="col-lg-4">
                <?php include 'city_siderbar.php'; ?>
            </div>

        </div><!-- /row -->

        <!-- Dynamic Services Section based on City -->
        <?php 
        $allowed_cities = [];
        if (in_array(strtolower(trim($city)), $allowed_cities)): 
        ?>
            <?php include 'city_service.php'; ?>
        <?php endif; ?>

    </div><!-- /container -->
</section>
