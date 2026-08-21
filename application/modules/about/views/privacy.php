<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => 'Read our comprehensive privacy policy detailing data security practices, customer information protection, and user confidentiality guarantees.',
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]);
?>


<!-- Privacy Policy Page Main Container -->
<section class="privacy-page-section py-5">
    <div class="container">
        
        <div class="row g-4 g-lg-5">
            
            <!-- Left Side: Sticky Quick Navigation Sidebar -->
            <div class="col-lg-4 col-12">
                <div class="privacy-sidebar-wrap p-4 shadow-sm position-sticky">
                    <div class="privacy-sidebar-header mb-3 pb-2 border-bottom">
                        <i class="bi bi-shield-lock-fill text-red fs-4 me-2"></i>
                        <h4 class="fw-bold text-dark d-inline">Policy Index</h4>
                    </div>

                    <nav class="nav flex-column privacy-quick-nav gap-2">
                        <a class="nav-link active" href="#section-1">
                            <i class="bi bi-person-lines-fill me-2"></i> 1. Information We Collect
                        </a>
                        <a class="nav-link" href="#section-2">
                            <i class="bi bi-gear-fill me-2"></i> 2. How We Use Data
                        </a>
                        <a class="nav-link" href="#section-3">
                            <i class="bi bi-shield-check me-2"></i> 3. Data Security &amp; Storage
                        </a>
                        <a class="nav-link" href="#section-4">
                            <i class="bi bi-share-fill me-2"></i> 4. Third-Party Sharing Policy
                        </a>
                        <a class="nav-link" href="#section-5">
                            <i class="bi bi-cookie me-2"></i> 5. Cookies &amp; Tracking
                        </a>
                        <a class="nav-link" href="#section-6">
                            <i class="bi bi-envelope-check-fill me-2"></i> 6. User Rights &amp; Contact
                        </a>
                    </nav>

                    <!-- Data Protection Seal -->
                    <div class="privacy-seal-box mt-4 p-3 text-center">
                        <i class="bi bi-lock-fill text-yellow display-6 mb-2"></i>
                        <h6 class="fw-bold text-dark mb-1">100% Data Confidentiality</h6>
                        <p class="small text-muted mb-0">Your privacy is safeguarded under Indian IT Act 2000 guidelines.</p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Policy Details Content -->
            <div class="col-lg-8 col-12">
                <div class="privacy-content-card p-4 p-md-5 shadow-sm">
                    
                    <div class="privacy-intro-box mb-5 pb-4 border-bottom">
                        <span class="badge bg-danger text-white px-3 py-2 rounded-pill mb-3">Effective Date: January 1, 2026</span>
                        <h2 class="fw-bold text-dark mb-3">Privacy Policy &amp; Data Protection Statement</h2>
                        <p class="text-muted leading-relaxed">
                            At <strong><?= $company3 ?></strong>, accessible from our official website, one of our main priorities is the privacy of our visitors and customers. This Privacy Policy document contains types of information that is collected and recorded by us and how we use it.
                        </p>
                    </div>

                    <!-- Highlight Guard Box -->
                    <div class="privacy-alert-box p-3 mb-5 border-start border-4 border-danger rounded shadow-sm">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-shield-fill-check text-red display-6 flex-shrink-0"></i>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Our Strict Privacy Guarantee</h5>
                                <p class="small text-muted mb-0">We never sell, rent, or trade customer contact details or shifting inventories to third-party telemarketing agencies or lead brokers.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 1 -->
                    <div class="privacy-section-item mb-5" id="section-1">
                        <h3 class="privacy-sec-title mb-3">
                            <span class="sec-num text-red me-2">01.</span> Information We Collect
                        </h3>
                        <p class="text-muted leading-relaxed mb-3">
                            When you request a moving estimate or book our packing and moving services, we collect personal information necessary to deliver seamless relocation:
                        </p>
                        <ul class="privacy-list mb-0">
                            <li><strong>Contact Details:</strong> Full name, email address, phone numbers, pick-up address, and delivery destination address.</li>
                            <li><strong>Consignment Details:</strong> Inventory list of household goods, vehicle registration numbers, and preferred moving dates.</li>
                            <li><strong>Technical Data:</strong> IP address, browser type, operating system, and pages visited via cookie analytics.</li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="privacy-section-item mb-5" id="section-2">
                        <h3 class="privacy-sec-title mb-3">
                            <span class="sec-num text-red me-2">02.</span> How We Use Your Information
                        </h3>
                        <p class="text-muted leading-relaxed mb-3">
                            We use the collected information strictly for operational and service delivery purposes:
                        </p>
                        <ul class="privacy-list mb-0">
                            <li>To calculate accurate moving quotes and issue official booking receipts/bills.</li>
                            <li>To assign dedicated crew members, drivers, and cargo container trucks to your location.</li>
                            <li>To issue Transit Insurance policies through accredited insurance partners.</li>
                            <li>To send real-time SMS or WhatsApp GPS tracking updates during consignment movement.</li>
                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="privacy-section-item mb-5" id="section-3">
                        <h3 class="privacy-sec-title mb-3">
                            <span class="sec-num text-red me-2">03.</span> Data Security &amp; Storage
                        </h3>
                        <p class="text-muted leading-relaxed">
                            We implement SSL encryption, secure firewall servers, and strict access controls to safeguard your personal data from unauthorized access, alteration, disclosure, or destruction. Physical copies of consignment notes and bills are stored in access-restricted administrative offices.
                        </p>
                    </div>

                    <!-- Section 4 -->
                    <div class="privacy-section-item mb-5" id="section-4">
                        <h3 class="privacy-sec-title mb-3">
                            <span class="sec-num text-red me-2">04.</span> Third-Party Sharing Policy
                        </h3>
                        <p class="text-muted leading-relaxed">
                            We do not share personal information except with authorized logistics service partners required to complete your move (such as verified insurance underwriters or specialized car carrier associates). All partners are legally bound by strict non-disclosure contracts.
                        </p>
                    </div>

                    <!-- Section 5 -->
                    <div class="privacy-section-item mb-5" id="section-5">
                        <h3 class="privacy-sec-title mb-3">
                            <span class="sec-num text-red me-2">05.</span> Cookies &amp; Web Analytics
                        </h3>
                        <p class="text-muted leading-relaxed">
                            Our website uses standard cookies to store visitor preferences, optimize page loading speed, and monitor website traffic trends via Google Analytics. You can choose to disable cookies through your individual browser options.
                        </p>
                    </div>

                    <!-- Section 6 -->
                    <div class="privacy-section-item mb-4" id="section-6">
                        <h3 class="privacy-sec-title mb-3">
                            <span class="sec-num text-red me-2">06.</span> User Rights &amp; Contact Information
                        </h3>
                        <p class="text-muted leading-relaxed mb-4">
                            You have the right to request access to, correction of, or deletion of your stored personal data at any time. For data privacy inquiries or grievances, contact our Data Protection Desk:
                        </p>

                        <div class="privacy-contact-card p-4 rounded shadow-sm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="bi bi-envelope-paper-fill text-red fs-3"></i>
                                        <div>
                                            <span class="small text-muted d-block">Official Privacy Email</span>
                                            <a href="<?= $mailhtml ?>" class="fw-bold text-dark text-decoration-none">
                                                <?= $mail ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="bi bi-telephone-inbound-fill text-red fs-3"></i>
                                        <div>
                                            <span class="small text-muted d-block">Helpline Support</span>
                                            <a href="<?= $phonehtml ?>" class="fw-bold text-dark text-decoration-none">
                                                <?= $phone ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>