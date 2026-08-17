<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<section class="about-section-v2 py-5">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            
            <!-- Left Side: Content Details -->
            <div class="col-lg-6 col-12 order-2 order-lg-1">
                <div class="about-v2-content">
                    
                    <!-- Top Category Badge -->
                    <div class="process-solid-badge mb-3">
                        <span>WHO WE ARE</span>
                    </div>

                    <!-- SEO Title -->
                    <h2 class="process-heading text-start mb-3">
                        Reliable Shifting &amp; Relocation Services by <span class="text-red"><?= $company3 ?></span>
                    </h2>

                    <!-- Descriptions -->
                    <p class="about-v2-lead mb-3">
                        Moving to a new home, office, or transporting vehicles can feel overwhelming. At <strong><?= $company3 ?></strong>, we are committed to making your relocation journey smooth, secure, and stress-free. Whether shifting locally within <?= $addressRegion ?> or relocating across <?= $companystate ?> and all over India, our team handles every move with extreme care and precision.
                    </p>

                    <p class="about-v2-desc mb-4">
                        With over <strong><?= $experience ?> years</strong> of professional experience, we stand as one of India's most trusted packing and moving brands. We use industry-standard packaging materials, modern cargo carriers, and structured loading systems to ensure your precious goods arrive safely and on time.
                    </p>



                    <!-- CTA Action Buttons -->
                    <div class="about-v2-cta d-flex flex-wrap align-items-center gap-3">
                        <a href="<?= site_url('about-us') ?>" class="btn-v2-primary">
                            Read More About Us <i class="bi bi-arrow-right ms-2"></i>
                        </a>

                        <div class="v2-call-pill">
                            <a href="<?= $phonehtml ?>" class="v2-call-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </a>
                            <div class="v2-call-info">
                                <span class="v2-call-sub">TALK TO AN EXPERT</span>
                                <a href="<?= $phonehtml ?>" class="v2-call-num">
                                    <?= $phone ?>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side: Image Showcase Card & Floating Experience Capsule -->
            <div class="col-lg-6 col-12 order-1 order-lg-2">
                <div class="about-v2-media-wrap">
                    
                    <!-- Main Showcase Card -->
                    <div class="about-v2-card shadow-lg">
                        <img src="<?= base_url('assets/images/home_modules/about.jpg') ?>" 
                             alt="Reliable Packers and Movers - <?= $company3 ?>" 
                             class="img-fluid about-v2-img"
                             loading="lazy">
                        
                        <!-- Floating Glass Experience Capsule -->
                        <div class="about-v2-exp-badge">
                            <div class="exp-v2-num"><?= $experience ?></div>
                            <div class="exp-v2-text">
                                <span class="exp-v2-title">YEARS OF</span>
                                <span class="exp-v2-sub">Excellence &amp; Trust</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Trust Pills Grid -->
                    <div class="about-v2-trust-grid mt-3">
                        <div class="v2-trust-pill">
                            <i class="bi bi-patch-check-fill" style="color: var(--theme-blue, #003A6A);"></i>
                            <span>Govt. Registered Shifting</span>
                        </div>
                        <div class="v2-trust-pill">
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>5-Star Rated Movers</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
