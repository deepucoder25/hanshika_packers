<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$companyName = isset($company3) ? $company3 : 'Hanshika Packers and Movers';
?>

<section class="reviews-section-exact py-5 position-relative">

    <div class="container position-relative z-2">
        <div class="row align-items-center g-4 g-xl-5">
            
            <!-- Left Header Column -->
            <div class="col-lg-4 col-12">
                <div class="rev-exact-header">
                    
                    <!-- Yellow Category Badge -->
                    <div class="rev-exact-badge mb-3">
                        <span>TESTIMONIALS</span>
                    </div>

                    <!-- Main Section Title -->
                    <h2 class="rev-exact-title mb-3">
                        What Our
                        <span class="text-yellow">Happy Customers</span> Say
                    </h2>

                    <!-- Quote Icon Line Divider -->
                    <div class="rev-exact-divider mb-3">
                        <span class="divider-line"></span>
                        <span class="divider-quote">“ ”</span>
                        <span class="divider-line"></span>
                    </div>

                    <!-- Description -->
                    <p class="rev-exact-desc mb-4">
                        We take pride in the trust our customers place in us. Here's what they have to say about their moving experience with <?= htmlspecialchars($companyName) ?>.
                    </p>

                    <!-- CTA Button -->
                    <a href="<?= site_url('testimonials') ?>" class="btn-rev-exact-cta">
                        <span>VIEW ALL REVIEWS</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                </div>
            </div>

            <!-- Right Cards Slider Column -->
            <div class="col-lg-8 col-12">
                <div class="rev-exact-slider-wrap">
                    
                    <div class="rev-exact-track-viewport" id="revExactViewport">
                        <div class="rev-exact-track">
                            
                            <!-- Card 1 -->
                            <div class="rev-exact-card">
                                <div class="rev-card-quote-mark">“</div>
                                <div class="rev-card-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="rev-card-text">
                                    Excellent service! My household items were packed very professionally and delivered on time without any damage.
                                </p>
                                <div class="rev-card-author">
                                    <div class="author-avatar-initial">R</div>
                                    <div class="author-meta">
                                        <h4 class="author-name">Rohit Sharma</h4>
                                        <span class="author-city">Patna</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="rev-exact-card">
                                <div class="rev-card-quote-mark">“</div>
                                <div class="rev-card-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="rev-card-text">
                                    Very professional and cooperative team. They handled my office relocation smoothly. Highly recommended!
                                </p>
                                <div class="rev-card-author">
                                    <div class="author-avatar-initial">P</div>
                                    <div class="author-meta">
                                        <h4 class="author-name">Priya Singh</h4>
                                        <span class="author-city">Noida</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="rev-exact-card">
                                <div class="rev-card-quote-mark">“</div>
                                <div class="rev-card-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="rev-card-text">
                                    Great experience with <?= htmlspecialchars($companyName) ?>. Everything was on time and perfectly managed.
                                </p>
                                <div class="rev-card-author">
                                    <div class="author-avatar-initial">A</div>
                                    <div class="author-meta">
                                        <h4 class="author-name">Amit Verma</h4>
                                        <span class="author-city">Delhi</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="rev-exact-card">
                                <div class="rev-card-quote-mark">“</div>
                                <div class="rev-card-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="rev-card-text">
                                    Top-class bike &amp; car shifting service. Delivered without even a single scratch. Completely satisfied!
                                </p>
                                <div class="rev-card-author">
                                    <div class="author-avatar-initial">S</div>
                                    <div class="author-meta">
                                        <h4 class="author-name">Suresh Kumar</h4>
                                        <span class="author-city">Mumbai</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Pagination Dots & Bottom Nav Buttons -->
                    <div class="rev-exact-controls-bottom d-flex align-items-center justify-content-center gap-3 mt-4">
                        <button class="rev-bottom-nav prev-bottom" id="rev-bottom-prev" aria-label="Previous review">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        
                        <div class="rev-exact-dots" id="revExactDots">
                            <span class="dot active"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                        
                        <button class="rev-bottom-nav next-bottom" id="rev-bottom-next" aria-label="Next review">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Minimal Ultra-Lightweight JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const vp = document.getElementById('revExactViewport');
    const p = document.getElementById('rev-bottom-prev');
    const n = document.getElementById('rev-bottom-next');
    const dots = document.querySelectorAll('#revExactDots .dot');
    
    if (!vp) return;
    
    const getScrollAmount = () => vp.clientWidth * 0.75;
    
    if (p) p.onclick = () => vp.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
    if (n) n.onclick = () => vp.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
    
    vp.onscroll = () => {
        const idx = Math.round(vp.scrollLeft / (vp.clientWidth / 3));
        dots.forEach((d, i) => d.classList.toggle('active', i === Math.min(idx, dots.length - 1)));
    };
    
    dots.forEach((d, i) => {
        d.onclick = () => vp.scrollTo({ left: i * (vp.clientWidth / 3), behavior: 'smooth' });
    });
});
</script>
