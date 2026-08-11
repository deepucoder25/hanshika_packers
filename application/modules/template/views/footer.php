<!-- FOOTER SECTION -->
<?php
$floatingPhoneNumber = preg_replace('/\D+/', '', (string) $phone);
$floatingWhatsappLink = !empty($whatsapphtml)
  ? $whatsapphtml
  : (!empty($floatingPhoneNumber) ? 'https://wa.me/' . $floatingPhoneNumber : '#');
?>
<footer class="footer-section">

  <!-- Floating Top CTA Card -->
  <div class="footer-top-card-wrapper">
    <div class="container">
      <div class="footer-top-card">
        <!-- Call Box -->
        <div class="footer-cta-box footer-cta-call">
          <div class="cta-icon-circle">
            <i class="bi bi-headset"></i>
          </div>
          <div class="cta-text-content">
            <span class="cta-label">Need Help? Call Us 24/7</span>
            <a href="<?= $phonehtml ?>" class="cta-phone"><?= $phone ?></a>
            <span class="cta-subtext">We are here to assist you!</span>
          </div>
        </div>

        <div class="cta-divider d-none d-lg-block"></div>

        <!-- Quote Info Box -->
        <div class="footer-cta-box footer-cta-quote-info">
          <div class="cta-icon-circle">
            <i class="bi bi-file-earmark-text-fill"></i>
          </div>
          <div class="cta-text-content">
            <span class="cta-main-title">Get a Free <strong class="text-danger">Moving Quote</strong></span>
          </div>
          <div class="cta-arrow-graphic d-none d-md-block">
            <svg width="45" height="24" viewBox="0 0 45 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 18C12 4 28 2 40 14M40 14L32 10M40 14L36 20" stroke="var(--theme-yellow)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>

        <!-- Request Quote Button -->
        <div class="footer-cta-box footer-cta-action">
          <button type="button" class="btn-request-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
            REQUEST A QUOTE <i class="bi bi-arrow-right ms-2"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Footer Body -->
  <div class="footer-main">
    <div class="container">
      <div class="row g-4 g-lg-4">

        <!-- Column 1: Logo & Company Bio -->
        <div class="col-lg-4 col-md-6 footer-col">
            <?php
              $cName = !empty($company3) ? $company3 : 'Hanshika Packers and Movers';
              if (stripos($cName, 'Packers') !== false) {
                $parts = preg_split('/(?=Packers)/i', $cName, 2);
                $brandMain = trim($parts[0]);
                $brandSub = trim($parts[1]);
              } else {
                $brandMain = $cName;
                $brandSub = 'Packers & Movers';
              }
            ?>
            <a href="<?= site_url() ?>" class="footer-brand-header text-decoration-none">
              <div class="brand-text-block">
                <span class="brand-main"><?= htmlspecialchars(strtoupper($brandMain)) ?></span>
                <span class="brand-sub"><?= htmlspecialchars(strtoupper($brandSub)) ?></span>
              </div>
            </a>

            <p class="footer-bio-text">
              <?= $company3 ?> is a trusted name in the packing and moving industry. We ensure safe, secure and on-time relocation with complete care.
            </p>

            <div class="footer-social-circles">
              <a href="<?= !empty($facebookhtml) ? $facebookhtml : '#' ?>" target="_blank" aria-label="Facebook" class="social-btn social-fb"><i class="bi bi-facebook"></i></a>
              <a href="<?= !empty($instagramhtml) ? $instagramhtml : '#' ?>" target="_blank" aria-label="Instagram" class="social-btn social-insta"><i class="bi bi-instagram"></i></a>
              <a href="<?= !empty($twitterhtml) ? $twitterhtml : '#' ?>" target="_blank" aria-label="Twitter" class="social-btn social-x"><i class="bi bi-twitter-x"></i></a>
              <a href="<?= !empty($linkedinhtml) ? $linkedinhtml : '#' ?>" target="_blank" aria-label="LinkedIn" class="social-btn social-linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="<?= !empty($youtubehtml) ? $youtubehtml : '#' ?>" target="_blank" aria-label="YouTube" class="social-btn social-yt"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

        <!-- Column 2: QUICK LINKS (Pages from Navigation) -->
        <div class="col-lg-2 col-md-6 col-6 footer-col">
          <div class="footer-widget-col">
            <h5 class="widget-title">QUICK LINKS</h5>
            <ul class="widget-list list-icons">
              <li><a href="<?= site_url() ?>"><i class="bi bi-house-door-fill text-danger"></i> Home</a></li>
              <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-building text-danger"></i> About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-patch-check-fill text-danger"></i> Why Choose Us</a></li>
              <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-question-circle-fill text-danger"></i> FAQ</a></li>
              <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chat-square-quote-fill text-danger"></i> Testimonials</a></li>
              <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-geo-alt-fill text-danger"></i> Locations</a></li>
              <li><a href="<?= site_url('blog') ?>"><i class="bi bi-journal-richtext text-danger"></i> Blog</a></li>
              <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-telephone-outbound-fill text-danger"></i> Contact Us</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 3: OUR SERVICES (Services from Navigation) -->
        <div class="col-lg-3 col-md-6 col-6 footer-col">
          <div class="footer-widget-col">
            <h5 class="widget-title">OUR SERVICES</h5>
            <ul class="widget-list list-icons">
              <li><a href="<?= site_url('home-relocation') ?>"><i class="bi bi-house-door-fill text-warning"></i> Home Shifting</a></li>
              <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-briefcase-fill text-warning"></i> Office Shifting</a></li>
              <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front-fill text-warning"></i> Car Transportation</a></li>
              <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-scooter text-warning"></i> Bike Transportation</a></li>
              <li><a href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-box-seam-fill text-warning"></i> Packing &amp; Moving</a></li>
              <li><a href="<?= site_url('loading-unloading') ?>"><i class="bi bi-truck text-warning"></i> Loading &amp; Unloading</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 4: CONTACT US -->
        <div class="col-lg-3 col-md-6 col-12 footer-col border-0">
          <div class="footer-widget-col">
            <h5 class="widget-title">CONTACT US</h5>
            <div class="footer-contact-blocks">

              <div class="contact-block-item">
                <div class="contact-icon-box">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-block-text">
                  <a href="<?= $phonehtml ?>"><?= $phone ?></a>
                </div>
              </div>

              <div class="contact-block-item">
                <div class="contact-icon-box">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="contact-block-text">
                  <a href="<?= $mailhtml ?>"><?= $mail ?></a>
                </div>
              </div>

              <div class="contact-block-item">
                <div class="contact-icon-box">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="contact-block-text">
                  <span><?= $address ?></span>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Trust Badges Strip (Middle Row) -->
  <div class="footer-trust-strip">
    <div class="container">
      <div class="row g-3 text-center align-items-center">

        <div class="col-lg-3 col-sm-6 trust-col">
          <div class="trust-item-box">
            <div class="trust-icon-ring">
              <i class="bi bi-shield-check"></i>
            </div>
            <div class="trust-text-box">
              <h6 class="trust-title">SAFE &amp; SECURE</h6>
              <p class="trust-desc">Your goods are always safe with us.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 trust-col">
          <div class="trust-item-box">
            <div class="trust-icon-ring">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="trust-text-box">
              <h6 class="trust-title">EXPERIENCED TEAM</h6>
              <p class="trust-desc">Skilled professionals for a hassle-free move.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 trust-col">
          <div class="trust-item-box">
            <div class="trust-icon-ring">
              <i class="bi bi-clock-history"></i>
            </div>
            <div class="trust-text-box">
              <h6 class="trust-title">ON-TIME DELIVERY</h6>
              <p class="trust-desc">We value your time and deliver on time.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 trust-col border-0">
          <div class="trust-item-box">
            <div class="trust-icon-ring">
              <i class="bi bi-hand-thumbs-up-fill"></i>
            </div>
            <div class="trust-text-box">
              <h6 class="trust-title">100% SATISFACTION</h6>
              <p class="trust-desc">Customer satisfaction is our top priority.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer Bottom Bar -->
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-bottom-flex">

        <div class="footer-bottom-left">
          <div class="truck-graphic">
            <i class="bi bi-truck"></i>
          </div>
          <p class="copyright-text">
            &copy; <?= date('Y') ?> <strong class="text-danger"><?= $company3 ?></strong>. All Rights Reserved.
          </p>
        </div>

        <div class="footer-bottom-right">
          <div class="legal-links">
            <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
            <span class="sep">|</span>
            <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
          </div>

          <a href="#" id="scrollTopBtn" class="scroll-top-btn" aria-label="Scroll to top">
            <i class="bi bi-arrow-up"></i>
          </a>
        </div>

      </div>
    </div>
  </div>

</footer>

<div class="floating-actions">
  <a href="<?= $phonehtml ?>" class="float-btn float-call" title="Call Now" aria-label="Call <?= $company3 ?> now">
    <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
    <span>Call Now</span>
  </a>
  <button type="button" class="float-btn float-quote" data-bs-toggle="modal" data-bs-target="#qteModal"
    title="Get Quote" aria-label="Get Free Quote">
    <div class="icon-wrap"><i class="bi bi-calculator-fill"></i></div>
    <span>Get Quote</span>
  </button>
  <a href="<?= $floatingWhatsappLink ?>" class="float-btn float-whatsapp" title="WhatsApp Us" target="_blank"
    rel="noopener" aria-label="Message <?= $company3 ?> on WhatsApp">
    <div class="icon-wrap"><i class="bi bi-whatsapp"></i></div>
    <span>WhatsApp</span>
  </a>
</div>

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/form.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var scrollBtn = document.getElementById('scrollTopBtn');
  if (scrollBtn) {
    scrollBtn.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});
</script>
</body>

</html>