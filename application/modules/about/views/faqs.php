<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions (FAQ)',
    'bc_desc' => 'Find clear answers to common questions regarding moving costs, transit insurance coverage, packing techniques, consignment tracking, and shifting timelines.',
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>

<?php
$phoneNum = isset($phone) ? $phone : '+91 9905206385';
$phoneHtml = isset($phonehtml) ? $phonehtml : 'tel:+919905206385';

$faqItems = [
    [
        'q' => 'How is the total moving cost calculated for household shifting?',
        'a' => 'The cost of household shifting depends on factors such as the total volume/weight of goods, distance between origin and destination, quality of packing materials required, floor levels (availability of elevator), and additional services like vehicle transportation or warehouse storage. We provide 100% transparent quotes with zero hidden charges.'
    ],
    [
        'q' => 'Are there any hidden costs in the final moving bill?',
        'a' => "No, absolutely not. At $company3, we provide an all-inclusive written quotation upfront. Toll taxes, state octroi, loading/unloading, packing, and GST charges are clearly detailed before booking your move."
    ],
    [
        'q' => 'What kind of packing materials do you use for fragile household items?',
        'a' => 'We use multi-layer premium packing materials including heavy-duty 5-ply corrugated boxes, high-density bubble wraps, foam sheets, stretch films, waterproof tarpaulins, edge guards, and custom wooden crates for delicate items like glassware, TVs, electronics, and artwork.'
    ],
    [
        'q' => 'Do you disassemble and reassemble furniture items during shifting?',
        'a' => 'Yes! Our experienced crew handles complete dismantling and reassembly of complex furniture pieces including modular beds, wardrobes, dining tables, and office workstations using professional toolkits.'
    ],
    [
        'q' => 'Is transit insurance mandatory, and how does it protect my goods?',
        'a' => 'While transit insurance is optional, we highly recommend it for peace of mind. Our Comprehensive Transit Insurance protects your belongings against unforeseen circumstances such as road accidents, fire, theft, or natural calamities during transportation. In the rare event of damage, claims are processed quickly with full documentation support.'
    ],
    [
        'q' => 'How can I claim insurance if any item gets damaged during transit?',
        'a' => 'If any damage is noticed during unloading, simply mention it on the consignment delivery copy and notify our customer support team within 24 hours with photos. We will guide you through the hassle-free insurance claim process.'
    ],
    [
        'q' => 'How long does intercity household or vehicle transportation take?',
        'a' => 'Local moves within the city are completed on the same day (4-8 hours). Intercity moves take 2 to 5 days depending on the distance between states, road conditions, and vehicle type (dedicated container vs. shared carrier).'
    ],
    [
        'q' => 'Can I track my consignment location while goods are in transit?',
        'a' => 'Yes! All our long-distance cargo trucks are fitted with GPS tracking devices. You will receive regular movement updates from your dedicated shift manager or via our customer helpline.'
    ],
    [
        'q' => 'Do you transport domestic pets or live plants during relocation?',
        'a' => 'Specialized care is required for pets and live plants. While we don\'t transport pets inside closed cargo trucks, we can arrange dedicated pet transportation or advise on safe plant care during moving.'
    ],
    [
        'q' => 'How far in advance should I book my relocation service?',
        'a' => 'We recommend booking 3 to 7 days prior to your preferred moving date, especially for month-end moves or weekend shifts. However, emergency same-day booking services are also available subject to vehicle availability.'
    ]
];
?>

<!-- FAQ Page Main Container (Full col-12 Layout) -->
<section class="faq-page-section py-5">
    <div class="container">
        
        <!-- Header Banner Container -->
        <div class="faq-page-header text-center mb-5">
            <div class="process-solid-badge mb-3">
                <span>KNOWLEDGE BASE</span>
            </div>
            <h2 class="process-heading mb-3">
                Frequently Asked <span class="text-red">Questions</span>
            </h2>
            <p class="process-lead-text mx-auto mb-0" style="max-width: 700px;">
                Find clear answers to common questions regarding moving costs, transit insurance coverage, packing techniques, consignment tracking, and shifting timelines.
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
                                    <p><?= htmlspecialchars($item['a']) ?></p>
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
                <div class="faq-full-contact-banner p-4 p-md-5 text-center shadow-sm">
                    <div class="row align-items-center justify-content-between g-4">
                        <div class="col-lg-8 text-lg-start text-center">
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3 mb-2">
                                <div class="faq-banner-icon flex-shrink-0">
                                    <i class="bi bi-headset text-red fs-3"></i>
                                </div>
                                <h3 class="fw-bold text-dark mb-0">Have More Questions About Your Move?</h3>
                            </div>
                            <p class="text-muted mb-0">Our dedicated relocation specialists are available 24/7 to provide instant support and free customized quotes.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end text-center d-flex flex-wrap gap-2 justify-content-center justify-content-lg-end">
                            <a href="<?= $phoneHtml ?>" class="btn btn-v2-primary">
                                <i class="bi bi-telephone-fill me-2"></i> Call <?= $phone ?>
                            </a>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn faq-help-wa-btn">
                                <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>