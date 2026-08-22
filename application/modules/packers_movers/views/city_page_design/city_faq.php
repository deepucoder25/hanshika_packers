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
                "q" => "Are we available in $city?",
                "a" => "Yes. We serve customers across 10+ cities and provide shifting support in $city as per its service availability."
            ],
            [
                "q" => "What type of shifting services do you provide?",
                "a" => "The company provides packing and moving support for home and office shifting, along with loading, unloading and transportation services."
            ],
            [
                "q" => "Are we a government registered shifting company?",
                "a" => "Yes. Our company is presented as a Government Registered Shifting service provider."
            ],
            [
                "q" => "How many successful moves have you completed?",
                "a" => "We have completed around 5,000+ successful moves."
            ],
            [
                "q" => "How many relocation specialists do you have?",
                "a" => "We have around 300+ trained relocation specialists."
            ],
            [
                "q" => "Are we ISO certified?",
                "a" => "Yes. Our company is ISO 9001:2015 certified."
            ],
            [
                "q" => "Do you provide transit insurance?",
                "a" => "Yes. 100% transit insurance is available. You should confirm the exact terms and coverage before booking for your clarity."
            ],
            [
                "q" => "How can I get a quotation?",
                "a" => "You have to follow simple steps:\nShare your pickup location, destination, moving date and details of the items you want to shift.Our team can then understand the work and provide you a quotation based on your requirement."
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
                    <?= nl2br(htmlspecialchars($faq['a'])) ?>
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