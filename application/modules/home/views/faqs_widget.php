<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$faqs = [
    [
        'id' => 1,
        'question' => "What services does $company3 provide?",
        'answer' => 'We provide home relocation, office relocation, packing and moving, transportation of cars and bikes, loading, unloading and warehouse services.',
        'active' => true
    ],
    [
        'id' => 2,
        'question' => 'How do I book a moving service?',
        'answer' => 'You share your relocation requirements with us through a call or contact form and our team understands them and provides you with a suitable moving quote.',
        'active' => false
    ],
    [
        'id' => 3,
        'question' => 'Do you provide local and intercity relocation?',
        'answer' => "Yes. $company3 provides you with local and intercity relocation.",
        'active' => false
    ],
    [
        'id' => 4,
        'question' => 'How do you pack household belongings?',
        'answer' => 'Our packing team uses suitable quality packing materials based on the type of your belongings with careful attention to furniture, fragile items, household items and personal belongings.',
        'active' => false
    ],
    [
        'id' => 5,
        'question' => 'Can you transport my car and bike?',
        'answer' => 'Yes. We offer car and bike transportation services for customers who need to move their vehicles along with their household belongings or separately.',
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
