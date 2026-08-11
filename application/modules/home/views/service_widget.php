<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$services = [
    [
        'title_part1' => 'Home',
        'title_part2' => 'Shifting',
        'icon' => 'bi bi-house-door-fill',
        'desc' => 'Professional home shifting services to carefully transport all your household belongings with care and precision.',
        'link' => 'home-relocation'
    ],
    [
        'title_part1' => 'Office',
        'title_part2' => 'Relocation',
        'icon' => 'bi bi-building-fill',
        'desc' => 'Seamless office relocation services designed to minimize disruption and ensure a smooth business transition.',
        'link' => 'office-relocation'
    ],
    [
        'title_part1' => 'Car',
        'title_part2' => 'Transportation',
        'icon' => 'bi bi-car-front-fill',
        'desc' => 'Safe and reliable car transportation services to ensure your vehicle reaches its destination without hassle.',
        'link' => 'car-transportation'
    ],
    [
        'title_part1' => 'Bike',
        'title_part2' => 'Transportation',
        'icon' => 'bi bi-scooter',
        'desc' => 'Efficient bike transportation services tailored to ensure your bike reaches its destination safely and on time.',
        'link' => 'bike-transportation'
    ],
    [
        'title_part1' => 'Packing &',
        'title_part2' => 'Moving',
        'icon' => 'bi bi-box-seam-fill',
        'desc' => 'High-grade multi-layer packing and secure moving services using premium materials for maximum protection.',
        'link' => 'packing-and-moving'
    ],
    [
        'title_part1' => 'Loading &',
        'title_part2' => 'Unloading',
        'icon' => 'bi bi-truck-flatbed',
        'desc' => 'Expert loading and unloading services handling your heavy furniture, fragile items, and delicate cargo safely.',
        'link' => 'loading-unloading'
    ],
];
?>

<section class="services-section py-5">
    <div class="container position-relative z-2 home-service-widget-container">
        <!-- Header Section using exact Process Section classes -->
        <div class="text-center mb-5">
            <div class="process-solid-badge mb-3">
                <span>OUR SERVICES</span>
            </div>

            <h2 class="process-heading mb-2">
                Our <span class="text-red">Expert Moving & Relocation</span> Services
            </h2>

            <p class="process-lead-text mb-0">
                Professional packing, moving, logistics, and storage services tailored to meet all your residential and commercial needs across India.
            </p>
        </div>

        <!-- Grid of 6 Services -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($services as $index => $service): 
                $numStr = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
            ?>
                <div class="col-lg-4 col-md-6 col-6 d-flex">
                    <div class="srv-modern-card w-100 d-flex flex-column">
                        <div class="srv-card-top d-flex justify-content-between align-items-center mb-3">
                            <div class="srv-icon-box">
                                <i class="<?= $service['icon'] ?> srv-main-icon"></i>
                            </div>
                            <span class="srv-number-badge"><?= $numStr ?></span>
                        </div>

                        <h3 class="srv-card-title mb-2">
                            <span class="title-part1"><?= htmlspecialchars($service['title_part1']) ?></span>
                            <span class="title-part2"><?= htmlspecialchars($service['title_part2']) ?></span>
                        </h3>

                        <p class="srv-card-desc flex-grow-1 mb-4">
                            <?= htmlspecialchars($service['desc']) ?>
                        </p>

                        <div class="srv-card-footer mt-auto pt-2">
                            <a href="<?= site_url($service['link']) ?>" class="srv-action-btn">
                                <span>Read details <span class="visually-hidden">read details of <?= htmlspecialchars(strtolower($service['title_part1'] . ' ' . $service['title_part2'])) ?></span></span>
                                <i class="bi bi-arrow-right-short btn-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
