<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Photo Gallery',
    'bc_title_white' => 'Photo',
    'bc_title_orange' => 'Gallery',
    'bc_desc' => 'Explore visual highlights of our cargo handling, warehouse storage, specialized container fleets, and global logistics operations.'
]); 
?>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2 class="service-section-title">Our Logistics Operations in Action</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            Take a look at our on-field photos demonstrating our dedication to safety, careful cargo handling, and organized supply chain management. Our photo gallery highlights our freight standards, secure warehouse storage, and specialized fleets.
                        </p>
                    </div>

                    <!-- Photo Gallery Grid -->
                    <div class="row">
                        <?php if(!empty($photos)): ?>
                            <?php foreach($photos as $photo): ?>
                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                    <div class="gallery-img-wrapper position-relative">
                                        <img loading="lazy" src="<?= base_url('assets/uploads/gallery/' . $photo->image) ?>" class="w-100 img-fluid gallery-img" alt="<?= $photo->title ?>">
                                        <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                            <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <?php if(!empty($photo->album_name)): ?>
                                        <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm"><?= $photo->album_name ?></span>
                                        <?php endif; ?>
                                        <h5 class="fw-bold mb-1 gallery-title-sm"><?= $photo->title ?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-12 text-center text-muted">
                                <p>No photos available in the gallery.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'photo-gallery']); ?>
            </div>
        </div>
    </div>
</section>

