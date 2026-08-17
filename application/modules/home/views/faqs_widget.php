<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$faqs = [
    [
        'id' => 1,
        'question' => '1. How can I get a moving quote?',
        'answer' => 'You can get a free moving quote by filling out our quick enquiry form or by calling our customer support team.',
        'active' => true
    ],
    [
        'id' => 2,
        'question' => '2. Do you provide packing materials?',
        'answer' => 'Yes, we provide high-quality packing materials including heavy-duty corrugated boxes, bubble wrap, stretch film, and wooden crates for complete safety.',
        'active' => false
    ],
    [
        'id' => 3,
        'question' => '3. Is my goods insured during the move?',
        'answer' => 'Yes, we offer comprehensive transit insurance options to protect all your household and vehicle items during transit.',
        'active' => false
    ],
    [
        'id' => 4,
        'question' => '4. How long does the moving process take?',
        'answer' => 'Local city moves are completed within 24 hours, while intercity moves usually take 2 to 5 days depending on the destination distance.',
        'active' => false
    ],
    [
        'id' => 5,
        'question' => '5. Do you provide storage facilities?',
        'answer' => 'Yes, we offer 24/7 CCTV-monitored safe and spacious short-term and long-term warehouse storage facilities.',
        'active' => false
    ]
];
?>

<section class="faqs-section-exact py-5 position-relative">
    
    <!-- Background Dot Matrix Patterns (Top Left & Top Right) -->
    <div class="faq-dot-matrix matrix-left"></div>
    <div class="faq-dot-matrix matrix-right"></div>

    <div class="container position-relative z-2">
        
        <!-- Header Section (Uses Process Section Header Classes) -->
        <div class="text-center mb-5">
            <!-- Solid Red Pill Badge -->
            <div class="process-solid-badge mb-3">
                <span>FAQS</span>
            </div>

            <!-- Main Heading -->
            <h2 class="process-heading mb-2">
                Frequently Asked <span class="text-red">Questions</span>
            </h2>

            <!-- Subtitle -->
            <p class="process-lead-text mb-0">
                Find answers to some of the common questions about our moving services.
            </p>
        </div>

        <!-- FAQ Main Content Row -->
        <div class="row g-4 align-items-center">
            
            <!-- Left Column: Company Cardboard Boxes & Plant Image -->
            <div class="col-lg-5 col-12">
                <div class="faq-image-wrapper text-center">
                    <img src="<?= base_url('assets/images/home_modules/faqs.jpg') ?>" 
                         alt="<?= $company3 ?> Boxes" 
                         class="img-fluid faq-boxes-img shadow-sm" loading="lazy" />
                </div>
            </div>

            <!-- Right Column: Accordion Cards -->
            <div class="col-lg-7 col-12">
                <div class="accordion faq-custom-accordion" id="hanshikaFaqAccordion">
                    <?php foreach ($faqs as $faq): ?>
                        <div class="accordion-item faq-accordion-card mb-3 border-0">
                            <h2 class="accordion-header" id="heading-<?= $faq['id'] ?>">
                                <button class="accordion-button faq-accordion-btn <?= $faq['active'] ? '' : 'collapsed' ?>" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapse-<?= $faq['id'] ?>" 
                                        aria-expanded="<?= $faq['active'] ? 'true' : 'false' ?>" 
                                        aria-controls="collapse-<?= $faq['id'] ?>">
                                    <span class="faq-question-text"><?= htmlspecialchars($faq['question']) ?></span>
                                </button>
                            </h2>
                            <div id="collapse-<?= $faq['id'] ?>" 
                                 class="accordion-collapse collapse <?= $faq['active'] ? 'show' : '' ?>" 
                                 aria-labelledby="heading-<?= $faq['id'] ?>" 
                                 data-bs-parent="#hanshikaFaqAccordion">
                                <div class="accordion-body faq-accordion-answer pt-2 pb-4 px-4">
                                    <p class="mb-0"><?= htmlspecialchars($faq['answer']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

    </div>
</section>
