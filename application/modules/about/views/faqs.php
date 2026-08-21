<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions (FAQ)',
    'bc_desc' => 'Find clear answers to common questions regarding home shifting, office relocation, packing materials, transit insurance, and vehicle transportation with ' . $company3 . '.',
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>

<?php
$faqItems = [
    [
        'q' => 'What services do ' . $company3 . ' offer?',
        'a' => 'Home relocation, office shifting, packing and moving, vehicle transportation (car and bike), loading and unloading, and storage-related services are some of the services provided by ' . $company3 . '. You may select the service according to your relocation needs.'
    ],
    [
        'q' => 'How do I get a quotation for my move?',
        'a' => 'You just have to give us the details of the pick-up place, the destination point, the preferred date for moving and an estimate of the number of goods that you wish to move. Our experts will analyze your moving requirements and give you a suitable moving quote. The cost may vary according to the distance, quantity of goods, packing needs, labor required and transportation required.'
    ],
    [
        'q' => 'How are my household items packed before transportation?',
        'a' => 'Depending upon the nature of your goods, our packing team uses suitable packing material for each item. The packing helps you to avoid unnecessary movements of the items as well as protects them during loading and transportation.'
    ],
    [
        'q' => 'Do you provide both local and intercity Shifting Services?',
        'a' => 'Yes, we do. ' . $company3 . ' provides local and intercity relocation solutions for over 10+ cities in our network of service locations. Tell us about your pickup and destination locations so that we can know if we can help you out.'
    ],
    [
        'q' => 'Can you move my car or bike along with my household stuff?',
        'a' => 'Yes, we can provide that service. We offer car transportation as well as bike transportation facilities to our clients who want to relocate their cars and bikes.'
    ],
    [
        'q' => 'Do Packers and Movers offer transit insurance?',
        'a' => 'Transit insurance may help you cover any losses that occur during transportation. This is according to the terms and conditions of the policy, the declared value of the items to be moved and necessary documentation. It is recommended that you check this out before booking any moving service.'
    ],
    [
        'q' => 'How long does it take to complete a relocation?',
        'a' => 'The time taken for relocation may not be the same for all customers. It may depend upon the distance, quantity of goods, packing requirements, route of transportation and delivery arrangement. Local relocations are likely to be quicker than intercity relocations. We will give you a more accurate estimate after analyzing your requirements.'
    ],
    [
        'q' => 'Do I need to pack all my stuff myself?',
        'a' => "No, you don't need to do that by yourself. In case you hire a packing and moving service, then our packing professionals will assist you in packing your belongings in proper packing materials."
    ],
    [
        'q' => 'What should I consider while selecting the Best Packers and Movers?',
        'a' => 'Comparing only the price is not sufficient. In addition to the price, you must consider other factors like experience, service coverage, packing method, quote clarity, customer reviews, insurance terms and communication process.<br><br>A good moving service should give a clear explanation of what is included in the quote that you get from them.'
    ],
    [
        'q' => 'How do I get reliable Packers and Movers near me?',
        'a' => 'You should first see whether the company offers services nearby, customer reviews, experience and the services that they offer. Search keywords like Packers and Movers Near Me, local moving services and home shifting services can help you make a short list. However, you need to verify the services that they actually offer before you go ahead with booking.'
    ]
];
?>

<!-- FAQ Page Main Container (Full col-12 Layout) -->
<section class="about-page-section py-5">
    <div class="container">
        
        <!-- Header Container -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h1 class="abt-sec-title mb-3">Frequently Asked Questions (FAQ)</h1>
            <p class="mb-0">
                Find clear answers to common questions regarding home shifting, office relocation, packing materials, transit insurance, and vehicle transportation with <strong><?= $company3 ?></strong>.
            </p>
        </div>

        <!-- Main FAQ Full-Width Row (col-12) -->
        <div class="row">
            <div class="col-12">
                <div class="faq-page-accordion" id="faqMainPageAccordion">
                    <?php foreach ($faqItems as $idx => $item): ?>
                        <div class="faq-pg-card mb-3">
                            <div class="faq-pg-header" id="faqHeading<?= $idx ?>">
                                <button class="faq-pg-btn <?= $idx !== 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse<?= $idx ?>" aria-expanded="<?= $idx === 0 ? 'true' : 'false' ?>" aria-controls="faqCollapse<?= $idx ?>">
                                    <span class="faq-pg-num"><?= sprintf('%02d', $idx + 1) ?></span>
                                    <span class="faq-pg-qtitle"><?= htmlspecialchars($item['q']) ?></span>
                                    <i class="bi bi-chevron-down faq-pg-chevron"></i>
                                </button>
                            </div>
                            <div id="faqCollapse<?= $idx ?>" class="collapse <?= $idx === 0 ? 'show' : '' ?>" aria-labelledby="faqHeading<?= $idx ?>" data-bs-parent="#faqMainPageAccordion">
                                <div class="faq-pg-body">
                                    <p class="mb-0"><?= $item['a'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Full-Width Bottom Contact Banner (col-12) -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="abt-hero-card p-4 p-md-5 shadow-sm border">
                    <div class="row align-items-center justify-content-between g-4">
                        <div class="col-lg-8 text-lg-start text-center">
                            <h3 class="fw-bold text-dark mb-2">Have More Questions About Your Move?</h3>
                            <p class="mb-0">Our dedicated relocation specialists are available to provide instant support and free customized quotes.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end text-center d-flex flex-wrap gap-2 justify-content-center justify-content-lg-end">
                            <a href="<?= $phonehtml ?>" class="btn-v2-primary">
                                <i class="bi bi-telephone-fill me-2"></i> Call <?= $phone ?>
                            </a>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn faq-help-wa-btn">
                                <i class="bi bi-whatsapp me-2"></i> WhatsApp Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>