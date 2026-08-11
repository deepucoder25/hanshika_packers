<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Customer Testimonials & Reviews',
    'bc_desc' => 'Read real customer feedback, ratings, and success stories from families and corporate clients who experienced our fast, safe, and stress-free relocation.',
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<?php
$testimonials = [
    [
        'name' => 'Rohit Sharma',
        'city' => 'Patna to Bangalore',
        'initial' => 'R',
        'rating' => 5,
        'service' => 'Home Shifting',
        'date' => '2 weeks ago',
        'review' => 'Exceptional packing quality! All my fragile glassware, TV, and wooden bed were wrapped meticulously with multi-layer bubble wrap. Delivered to Bangalore without even a tiny scratch. The drivers and loading team were extremely polite.'
    ],
    [
        'name' => 'Priya Singh',
        'city' => 'Noida to Hyderabad',
        'initial' => 'P',
        'rating' => 5,
        'service' => 'Office Relocation',
        'date' => '1 month ago',
        'review' => 'Managed our entire IT office shifting over the weekend. Computers, servers, glass tables, and employee chairs were packed systematic with labels. We resumed work on Monday morning without any downtime!'
    ],
    [
        'name' => 'Amit Verma',
        'city' => 'Delhi to Pune',
        'initial' => 'A',
        'rating' => 5,
        'service' => 'Car Transportation',
        'date' => '3 weeks ago',
        'review' => 'Transported my Hyundai Creta from Delhi to Pune in a closed car container carrier. Received regular GPS tracking updates and the vehicle was delivered in immaculate condition. Highly recommended!'
    ],
    [
        'name' => 'Suresh Kumar',
        'city' => 'Mumbai to Patna',
        'initial' => 'S',
        'rating' => 5,
        'service' => 'Bike Transport',
        'date' => '1 month ago',
        'review' => 'Shifted my Royal Enfield bike smoothly. Special foam padding was used on handlebars, mirrors, and fuel tank. Reasonable price and total peace of mind.'
    ],
    [
        'name' => 'Ananya Chatterjee',
        'city' => 'Kolkata to Ranchi',
        'initial' => 'A',
        'rating' => 5,
        'service' => 'Home Shifting',
        'date' => '2 months ago',
        'review' => 'Very professional team. They handled my heavy double-door refrigerator and washing machine with modern lifting straps. Loading and unloading went super fast.'
    ],
    [
        'name' => 'Vikramaditya Roy',
        'city' => 'Gurgaon to Ahmedabad',
        'initial' => 'V',
        'rating' => 5,
        'service' => 'Packing & Moving',
        'date' => '3 weeks ago',
        'review' => "Third time using $company3 for interstate relocation. Transparent pricing, no hidden delivery charges, and 100% genuine insurance policy documentation provided."
    ]
];

$db_reviews = [];
if (isset($reviews) && is_object($reviews) && method_exists($reviews, 'result_array')) {
    $rows = $reviews->result_array();
    foreach ($rows as $row) {
        $db_reviews[] = [
            'name' => !empty($row['name']) ? htmlspecialchars($row['name']) : 'Valued Customer',
            'city' => !empty($row['r_title']) ? htmlspecialchars($row['r_title']) : (!empty($row['title']) ? htmlspecialchars($row['title']) : 'Home Relocation'),
            'initial' => !empty($row['name']) ? strtoupper(substr($row['name'], 0, 1)) : 'U',
            'rating' => isset($row['stars']) && (int)$row['stars'] > 0 ? (int)$row['stars'] : 5,
            'service' => 'Customer Feedback',
            'date' => !empty($row['posted_date']) ? date('d M Y', strtotime($row['posted_date'])) : 'Recently',
            'review' => !empty($row['r_desc']) ? htmlspecialchars($row['r_desc']) : ''
        ];
    }
} elseif (isset($reviews) && is_array($reviews)) {
    foreach ($reviews as $row) {
        $db_reviews[] = [
            'name' => !empty($row['name']) ? htmlspecialchars($row['name']) : 'Valued Customer',
            'city' => !empty($row['r_title']) ? htmlspecialchars($row['r_title']) : (!empty($row['title']) ? htmlspecialchars($row['title']) : 'Home Relocation'),
            'initial' => !empty($row['name']) ? strtoupper(substr($row['name'], 0, 1)) : 'U',
            'rating' => isset($row['stars']) && (int)$row['stars'] > 0 ? (int)$row['stars'] : 5,
            'service' => 'Customer Feedback',
            'date' => !empty($row['posted_date']) ? date('d M Y', strtotime($row['posted_date'])) : 'Recently',
            'review' => !empty($row['r_desc']) ? htmlspecialchars($row['r_desc']) : ''
        ];
    }
}

// Check if admin has enabled hiding default/prefix sample reviews
$is_hidden_sample = isset($hide_sample_reviews) ? $hide_sample_reviews : file_exists(FCPATH . 'assets/hide_sample_reviews.txt');

if ($is_hidden_sample) {
    // Show ONLY user-submitted reviews from DB (hide default prefix sample reviews)
    $testimonials = $db_reviews;
} else {
    // Merge user-submitted reviews with default prefix sample reviews
    if (!empty($db_reviews)) {
        $testimonials = array_merge($db_reviews, $testimonials);
    }
}
?>

<!-- Testimonials Page Main Container -->
<section class="testimonials-page-section py-5">
    <div class="container">
        
        <!-- Page Title & Rating Summary Hero Card -->
        <div class="testi-hero-card p-4 p-md-5 mb-5 shadow-sm text-center">
            <div class="process-solid-badge mb-3">
                <span>VERIFIED REVIEWS</span>
            </div>
            <h2 class="process-heading mb-3">
                Trusted by <span class="text-red">Thousands</span> of Families &amp; Businesses
            </h2>
            <p class="process-lead-text mx-auto mb-4" style="max-width: 680px;">
                See how our commitment to safety, punctual delivery, and premium packaging has built nationwide trust.
            </p>

            <!-- Stats Bar -->
            <div class="testi-stats-grid row g-3 g-lg-4 justify-content-center pt-4 border-top mt-4">
                
                <div class="col-6 col-lg-3">
                    <div class="stat-item-box">
                        <div class="stat-icon-wrap icon-yellow">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-val"><?= $ratingValue ?> <span class="stat-unit">/ 5.0</span></div>
                            <div class="stat-lbl">Average Rating</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="stat-item-box">
                        <div class="stat-icon-wrap icon-red">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-val"><?= $happyClients ?></div>
                            <div class="stat-lbl">Happy Clients</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="stat-item-box">
                        <div class="stat-icon-wrap icon-yellow">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-val">99.8%</div>
                            <div class="stat-lbl">On-Time Moves</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="stat-item-box">
                        <div class="stat-icon-wrap icon-red">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-val"><?= $secureShifting ?></div>
                            <div class="stat-lbl">Safe Transit</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Submit Review Callout Card (Positioned on top of testimonial cards grid) -->
        <div class="testi-cta-box mb-5 p-4 p-lg-5 text-center shadow-sm">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-8 text-lg-start text-center">
                    <h3 class="fw-bold text-dark mb-2">Have You Recently Moved With Us?</h3>
                    <p class="text-muted mb-0">Share your moving experience and help others choose safe, transparent relocation services.</p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <button type="button" class="btn btn-v2-primary" data-bs-toggle="modal" data-bs-target="#rvwmdl">
                        <i class="bi bi-star-fill text-warning me-2"></i> Write a Review
                    </button>
                </div>
            </div>
        </div>

        <!-- Review Grid -->
        <div class="row g-4" id="testiGrid">
            <?php if (empty($testimonials)): ?>
                <div class="col-12 text-center py-5">
                    <div class="p-4 bg-white rounded-4 shadow-sm border mx-auto" style="max-width: 500px;">
                        <i class="bi bi-chat-square-heart text-danger fs-1 d-block mb-2"></i>
                        <h5 class="fw-bold text-dark mb-1">No Reviews Published Yet</h5>
                        <p class="text-muted small mb-0">Be the first to share your moving experience with us!</p>
                    </div>
                </div>
            <?php else: ?>
                <?php foreach ($testimonials as $t): ?>
                    <div class="col-lg-4 col-md-6 col-12 testi-item-col">
                        <div class="testi-pg-card h-100 shadow-sm">
                            
                            <!-- Top Quote Mark & Stars -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="testi-stars text-warning">
                                    <?php for ($i = 0; $i < $t['rating']; $i++): ?>
                                        <i class="bi bi-star-fill me-1"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="testi-route-badge">
                                    <i class="bi bi-geo-alt-fill text-red me-1"></i> <?= htmlspecialchars($t['city']) ?>
                                </span>
                            </div>

                            <!-- Service Badge -->
                            <div class="testi-srv-pill mb-3">
                                <i class="bi bi-box-seam-fill me-1"></i> <?= htmlspecialchars($t['service']) ?>
                            </div>

                            <!-- Review Text -->
                            <p class="testi-quote-text mb-4">
                                "<?= htmlspecialchars($t['review']) ?>"
                            </p>

                            <!-- Author Footer -->
                            <div class="testi-author-row mt-auto pt-3 border-top d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="testi-avatar-circle">
                                        <?= htmlspecialchars($t['initial']) ?>
                                    </div>
                                    <div>
                                        <h5 class="testi-author-name mb-0"><?= htmlspecialchars($t['name']) ?></h5>
                                        <span class="testi-verified-tag">
                                            <i class="bi bi-patch-check-fill text-success me-1"></i> Verified Customer
                                        </span>
                                    </div>
                                </div>
                                <span class="testi-date text-muted"><?= htmlspecialchars($t['date']) ?></span>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- Load Review Submission Modal from Reviews Module -->
<?php $this->load->view('reviews/reviewmodal'); ?>