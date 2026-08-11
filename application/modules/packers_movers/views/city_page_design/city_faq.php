<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ATTRACTIVE CITY FAQ ACCORDION SECTION -->
<div class="pm-faq-container my-4">

    <!-- Header Card -->
    <div class="pm-faq-header-card mb-4">
        <div class="row align-items-center g-3">
            <div class="col-12">
                <div class="pm-faq-eyebrow">
                    <i class="bi bi-question-circle-fill text-danger me-1"></i> GOT QUESTIONS? WE'VE GOT ANSWERS
                </div>
                <h3 class="pm-faq-main-title mt-1 mb-2">
                    Frequently Asked Questions in <span class="text-danger"><?= htmlspecialchars($city) ?></span>
                </h3>
                <p class="pm-faq-sub-text m-0">
                    Everything you need to know about packing &amp; moving with <?= $company3 ?>.
                </p>
            </div>
        </div>
    </div>

    <!-- FAQ Accordion List -->
    <div class="pm-faq-accordion" id="cityFaqAccordion">
        <?php
        $faqs = [
            [
                "q" => "How early should I book shifting services in $city?",
                "a" => "Booking at least 5–7 days in advance is recommended, especially for month-end dates and weekends when relocation demand is at its peak. However, we also cater to urgent same-day booking requests based on vehicle availability."
            ],
            [
                "q" => "Do you provide packing materials?",
                "a" => "Yes! We provide multi-layer protective packing materials including heavy-duty corrugated cartons, bubble wrap rolls, stretch film, edge guards, and waterproof tarpaulin covers tailored to your household items."
            ],
            [
                "q" => "Can I move only a few household items?",
                "a" => "Absolutely. We offer flexible single-item shifting, small apartment moves, and part-load truck transportation services within $city at affordable mini-truck rates."
            ],
            [
                "q" => "Are goods insured during relocation?",
                "a" => "Yes, we offer comprehensive transit insurance options covering your valuable belongings against accidental damage, fire, or theft during intercity or long-distance transit."
            ],
            [
                "q" => "Do you handle local office shifts in $city?",
                "a" => "Yes! Our commercial relocation team specializes in office furniture dismantle/reassemble, server & desktop packing, confidential file moving, and weekend shifting to minimize business downtime."
            ],
            [
                "q" => "What is the cost of packers and movers in $city?",
                "a" => "Shifting charges depend on the distance, volume of goods, elevator availability, and floor level. Contact our local $city team for a 100% transparent, flat-rate quote with zero hidden fees."
            ],
        ];

        foreach ($faqs as $i => $faq):
            $isOpen = ($i === 0);
        ?>
        <div class="pm-faq-item">
            <button class="pm-faq-btn <?= $isOpen ? '' : 'collapsed' ?>" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#cfaq<?= $i ?>"
                    aria-expanded="<?= $isOpen ? 'true' : 'false' ?>"
                    aria-controls="cfaq<?= $i ?>">
                <span class="pm-faq-q-icon"><i class="bi bi-question-lg"></i></span>
                <span class="pm-faq-title-text"><?= htmlspecialchars($faq['q']) ?></span>
                <span class="pm-faq-chevron-wrap"><i class="bi bi-chevron-down"></i></span>
            </button>
            <div id="cfaq<?= $i ?>" class="collapse <?= $isOpen ? 'show' : '' ?>" data-bs-parent="#cityFaqAccordion">
                <div class="pm-faq-body">
                    <?= htmlspecialchars($faq['a']) ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- FAQ Helpdesk Footer Bar -->
    <div class="pm-faq-footer-card mt-4">
        <div class="row align-items-center g-3 text-center text-md-start">
            <div class="col-md-8">
                <h5 class="fw-extrabold text-dark m-0 mb-1">Have a specific question about moving in <?= htmlspecialchars($city) ?>?</h5>
                <p class="text-muted small m-0">Our local relocation supervisors are available 24/7 for instant guidance.</p>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <a href="<?= $phonehtml ?>" class="btn pm-faq-call-btn">
                    <i class="bi bi-telephone-fill me-1"></i> Call Support Now
                </a>
            </div>
        </div>
    </div>

</div>