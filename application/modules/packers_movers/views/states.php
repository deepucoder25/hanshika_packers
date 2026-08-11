<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Branch Network Across India',
    'bc_desc' => 'Explore our nationwide network of branch offices across major Indian states for doorstep packing, local shifting, intercity moving, and warehousing.',
    'breadcrumbs' => [
        ['name' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "maharashtra.jpg",
        "category" => "Maharashtra",
        "link" => "maharashtra"
    ],
    [
        "image" => "bangalore.jpg",
        "category" => "Bangalore",
        "link" => "bangalore"
    ],
    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
];
?>

<!-- Branch Section -->
<section class="pm-states-section py-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <span class="pm-states-badge mb-2">
                <i class="bi bi-geo-alt-fill"></i> NATIONWIDE BRANCH NETWORK
            </span>
            <h2 class="pm-states-main-title">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="pm-states-subtitle">
                Reliable doorstep packing, intercity moving, and warehousing services available across major Indian states.
            </p>
        </div>

        <!-- 4 State Cards Grid -->
        <div class="row g-4">
            <?php foreach ($state as $item): ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="pm-states-card">
                        <!-- Image Container with Zoom & Glassmorphism Overlay -->
                        <div class="pm-states-img">
                            <img class="w-100" src="<?= base_url('assets/images/state/' . $item['image']) ?>" alt="<?= htmlspecialchars($item['category']) ?>" loading="lazy">
                            <div class="pm-states-overlay">
                                <a href="<?= site_url($item['link']) ?>" class="pm-states-btn">
                                    <span>Explore Branches</span> <i class="bi bi-arrow-right-short fs-5"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="pm-states-body">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <span class="pm-states-yellow-dash"></span>
                                <h3 class="pm-states-name">
                                    <a href="<?= site_url($item['link']) ?>" class="text-decoration-none text-dark">
                                        <?= htmlspecialchars($item['category']) ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="pm-states-city-count ps-4">
                                <i class="bi bi-building-check text-danger"></i> Verified Service Hubs
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>