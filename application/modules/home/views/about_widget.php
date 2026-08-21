<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<section class="about-section-v2 py-5">
    <div class="container">
        
        <!-- Top Full-Width Hero Intro Box (col-12) -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="about-top-box p-4 p-md-5 rounded-4 shadow-sm bg-white border">
                    <h2 class="process-heading text-start mb-3">
                        <?= $company3 ?>: <span class="text-red">Reliable Home, Office and Vehicle Moving Services</span>
                    </h2>

                    <p>
                        <?= $company3 ?> offers home shifting, office shifting, packing and moving, vehicle and bike shifting, loading and unloading and storage services. Having <?= $yearsExperience ?> years of experience, with <?= $successfullShifts ?> moves done, <?= $happyClients ?> customers served and operational in <?= $citiesCovered ?> cities, <?= $company3 ?> makes the moving experience easy for you.
                    </p>

                    <h3 class="process-heading text-start mb-3 fs-3">
                        Welcome to <span class="text-red"><?= $company3 ?></span>
                    </h3>

                    <div class="about-intro-text">
                        <p>You are planning a move. You may have quite a lot of things to take care of: packing of your belongings, transportation and manpower and, last but not least, ensuring that all your stuff gets there safely. Here is where <strong><?= $company3 ?></strong> can come in handy.</p>

                        <p><?= $company3 ?> is a customer-focused moving company helping individuals, families and businesses relocate with ease. From a 1BHK home move to an office relocation, we plan each move according to the type and volume of goods. </p>

                        <p>When choosing a moving company, you want to know what you're paying for, how your belongings will be handled and who you can contact during the move. Our process is designed around these basic needs.</p>

                        <p>With <?= $yearsExperience ?> years of experience and <?= $successfullShifts ?> successful moves behind us we know that a good moving service is not only putting all the boxes in the car. It is about communication, proper packing, transportation and delivery of what was promised.</p>
                    </div>
                </div>
            </div>
        </div>

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
                        About <span class="text-red"><?= $company3 ?></span>
                    </h2>

                    <!-- Descriptions -->
                    <p>
                        <b><?= $company3 ?></b> started with a simple premise: moving should not cause any unnecessary stress.
                    </p>

                    <p>
                        After <?= $yearsExperience ?> years of experience we have helped our customers manage household relocation, office relocation, vehicle transportation and many other relocation requirements. We now operate in <?= $citiesCovered ?> cities, completing more than <?= $successfullShifts ?> successful moves.
                    </p>

                    <p>
                        Every move has different requirements. A household relocation may involve furniture and fragile items, while an office move may need careful planning around working hours. Vehicle transportation also requires a separate loading and handling plan. Our team plans the service according to the type and volume of goods being moved.
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
                            <i class="bi bi-patch-check-fill"></i>
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
