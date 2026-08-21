<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- WHY CHOOSE US SECTION -->
<section class="why-choose-section py-5 position-relative">
    
    <!-- Decorative Matrix Backgrounds -->
    <div class="faq-dot-matrix matrix-left"></div>
    <div class="faq-dot-matrix matrix-right"></div>

    <div class="container position-relative z-2">
        
        <!-- Header Section -->
        <div class="text-center mb-5">
            <div class="process-solid-badge mb-3">
                <span>WHY CHOOSE US</span>
            </div>

            <h3 class="process-heading mb-2">
                Why Choose <span class="text-red"><?= $company3 ?></span>?
            </h3>
        </div>

        <!-- 6 Feature Cards Grid -->
        <div class="row g-4">
            
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-card h-100 p-4 rounded-4 bg-white shadow-sm border transition-all">
                    <div class="d-flex align-items-center mb-3">
                        <div class="why-icon-box me-3 flex-shrink-0 d-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h5 class="why-card-title mb-0"><?= $yearsExperience ?> Years of Moving Experience</h5>
                    </div>
                    <p class="why-card-desc mb-0">
                        Our experience includes different types of household, commercial and transportation requirements. This practical experience helps our team to develop an individual relocation plan for each move.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-card h-100 p-4 rounded-4 bg-white shadow-sm border transition-all">
                    <div class="d-flex align-items-center mb-3">
                        <div class="why-icon-box me-3 flex-shrink-0 d-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h5 class="why-card-title mb-0"><?= $successfullShifts ?> Successful Moves</h5>
                    </div>
                    <p class="why-card-desc mb-0">
                        We have completed <?= $successfullShifts ?>+ successful moves, which gives you the confidence that your relocation will be handled by a professional moving company.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-card h-100 p-4 rounded-4 bg-white shadow-sm border transition-all">
                    <div class="d-flex align-items-center mb-3">
                        <div class="why-icon-box me-3 flex-shrink-0 d-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5 class="why-card-title mb-0"><?= $happyClients ?> Happy Customers</h5>
                    </div>
                    <p class="why-card-desc mb-0">
                        Customer satisfaction has been built move by move. Our increasing customer base proves how much we value proper and careful service and communication.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-card h-100 p-4 rounded-4 bg-white shadow-sm border transition-all">
                    <div class="d-flex align-items-center mb-3">
                        <div class="why-icon-box me-3 flex-shrink-0 d-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h5 class="why-card-title mb-0"><?= $citiesCovered ?> Cities Served</h5>
                    </div>
                    <p class="why-card-desc mb-0">
                        Our service network operates in <?= $citiesCovered ?> cities, helping you with local and intercity relocation.
                    </p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-card h-100 p-4 rounded-4 bg-white shadow-sm border transition-all">
                    <div class="d-flex align-items-center mb-3">
                        <div class="why-icon-box me-3 flex-shrink-0 d-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5 class="why-card-title mb-0">Careful Handling and Delivery</h5>
                    </div>
                    <p class="why-card-desc mb-0">
                        Careful handling and transportation are central to our service. We pay attention to your belongings throughout the moving process.
                    </p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-card h-100 p-4 rounded-4 bg-white shadow-sm border transition-all">
                    <div class="d-flex align-items-center mb-3">
                        <div class="why-icon-box me-3 flex-shrink-0 d-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <h5 class="why-card-title mb-0">Clear Moving Quotations</h5>
                    </div>
                    <p class="why-card-desc mb-0">
                        You share your moving requirements with us and our team will understand the scale of the task and provide a proper and affordable quote.
                    </p>
                </div>
            </div>

        </div>

        <!-- Careful Handling Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="why-choose-card p-4 p-md-5 rounded-4 bg-white shadow-sm border">
                    <h4 class="fw-bold text-dark mb-3">Careful Handling at Every Stage</h4>
                    <p class="why-card-desc mb-3 fw-semibold text-dark">
                        That's where the work of our moving specialists starts.
                    </p>
                    <p class="why-card-desc mb-3">
                        We ensure careful handling, high-quality packing materials and constant communication during the whole relocation process. Our mission is quite simple: to provide a moving service, which you can trust and recommend to your friends.
                    </p>
                    <p class="why-card-desc mb-0">
                        Serving more than <?= $happyClients ?> customers is an important milestone for us, but the main indicator is much simpler: when your belongings get delivered in one piece and you feel that your move was managed successfully, we have done our job well.
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer / Closing Tip Box -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="why-choose-note-banner p-4 rounded-4 bg-white shadow-sm d-flex align-items-center gap-3">
                    <div class="note-icon-wrap flex-shrink-0 d-none d-sm-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-lightbulb-fill text-danger fs-4"></i>
                    </div>
                    <p class="mb-0 fs-6 text-dark fw-medium">
                        If you have been looking for <strong class="text-danger fw-bold">Packers and Movers Near Me</strong>, please do not look only at prices. Consider experience, process, service coverage and customer feedback too.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
