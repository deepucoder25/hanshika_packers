<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <?php 
    $post_title = isset($query[0]->title) && !empty($query[0]->title) ? $query[0]->title : (isset($query[0]->main_title) && !empty($query[0]->main_title) ? $query[0]->main_title : 'Blog Details');

    $this->load->view('about/dynamic_breadcrumbs', [
        'bc_h1' => $post_title,
        'bc_desc' => 'Read expert relocation guides and shifting tips from ' . htmlspecialchars(isset($company3) ? $company3 : 'Elite Packers and Movers'),
        'breadcrumbs' => [
            ['name' => 'Blog', 'url' => site_url('blog')],
            ['name' => $post_title]
        ]
    ]); 
    ?>

    <!-- Blog Single Post -->
    <section class="blog-details-section py-5 bg-light">
        <div class="container my-3">
            <div class="row ">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                        <!-- Image -->
                        <div class="mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                            <?php 
                            $image_path = FCPATH . 'uploads/blogs/' . @$query[0]->image;
                            if (@$query[0]->image && file_exists($image_path)): ?>
                                <img src="<?= base_url('uploads/blogs/' . @$query[0]->image) ?>" alt="<?= htmlspecialchars(@$query[0]->title) ?> - Blog Cover" class="img-fluid w-100 blog-details-img" loading="lazy">
                            <?php else: ?>
                                <img src="<?= base_url('assets/images/about/packers_movers.jpg') ?>" alt="<?= htmlspecialchars(isset($company3) ? $company3 : 'Relocation') ?> Relocation Guide" class="img-fluid w-100 blog-details-img" loading="lazy">
                            <?php endif; ?>
                        </div>
                        
                        <!-- Meta Info -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <div class="d-flex gap-3 text-muted small">
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-calendar-event blog-icon-primary"></i> <?= date('M d, Y', strtotime(@$query[0]->created_at)) ?></span>
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-person-circle text-success"></i> By Admin</span>
                            </div>
                            <div>
                                <button class="btn btn-sm px-3 rounded-pill fw-bold blog-btn-share" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share me-1"></i> Share Post
                                </button>
                            </div>
                        </div>

                        <!-- Blog Details -->
                        <h2 class="fw-bold mb-4 blog-details-title"><?= @$query[0]->title ?></h2>
                        <div class="blog-content-wrapper text-muted">
                            <?php 
                            $body_text = !empty($query[0]->content) ? $query[0]->content : (!empty($query[0]->description) ? $query[0]->description : '');
                            echo nl2br($body_text);
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="blog-sidebar sticky-top blog-sidebar-sticky">
                        <div class="bg-white p-4 rounded-4 shadow-sm mb-4">
                            <h5 class="fw-bold mb-4 pb-2 border-bottom blog-icon-primary">Recent Posts</h5>
                            <div class="recent-posts-list">
                                <?php if (!empty($recent_posts)): ?>
                                    <?php foreach ($recent_posts as $post_arr): $post = (object)$post_arr; ?>
                                        <?php
                                        $image_file = $post->image;
                                        $full_path = FCPATH . 'uploads/blogs/' . $image_file;
                                        $imagePath = ($image_file && file_exists($full_path)) ? base_url('uploads/blogs/' . $image_file) : base_url('assets/images/about/packers_movers.jpg');
                                        $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        ?>
                                        <a href="<?= site_url('blog/'.$custom_slug) ?>" class="d-flex align-items-center gap-3 mb-3 text-decoration-none post-link-item blog-post-link-item">
                                            <div class="flex-shrink-0">
                                                <img src="<?= $imagePath ?>" alt="<?= htmlspecialchars($post->title) ?> Thumbnail" class="rounded-3 shadow-sm blog-recent-post-img" loading="lazy">
                                            </div>
                                            <div>
                                                <h6 class="fw-bold text-dark mb-1 blog-post-title"><?= $post->title ?></h6>
                                                <small class="text-muted"><i class="bi bi-clock me-1"></i> <?= date('M d, Y', strtotime($post->created_at)) ?></small>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted">No recent posts available.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Sticky CTA Widget -->
                        <div class="bg-light p-4 rounded-4 shadow-sm text-center border-top border-4 blog-border-warning">
                            <div class="mb-3">
                                <i class="bi bi-headset blog-icon-lg-primary"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Need Moving Help?</h5>
                            <p class="text-muted small mb-4">Get a quick and free estimate for your relocation directly from our experts.</p>
                            <button class="btn w-100 fw-bold py-2 rounded-pill shadow-sm blog-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-file-earmark-text me-2"></i> Get a Free Quote
                            </button>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title fw-bold blog-icon-primary">Share this post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="d-grid gap-3 social-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-fb">
                        <i class="bi bi-facebook me-2"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-tw">
                        <i class="bi bi-twitter me-2"></i> Share on Twitter
                    </a>
                    <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" class="btn text-white py-2 rounded-3 fw-bold blog-bg-wa">
                        <i class="bi bi-whatsapp me-2"></i> Share on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-buttons a').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
</script>



<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(@$query[0]->title) ?>",
    "image": [
        "<?= @$query[0]->image ? base_url('uploads/blogs/' . @$query[0]->image) : base_url('assets/images/about/packers_movers.jpg') ?>"
    ],
    "datePublished": "<?= date('c', strtotime(@$query[0]->created_at)) ?>",
    "author": {
        "@type": "Person",
        "name": "Admin"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'MyCompany' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/images/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description), 0, 160)) ?>",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= current_url() ?>"
    }
}
</script>