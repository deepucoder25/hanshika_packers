<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms and Conditions',
    'bc_desc' => 'Review our transparent terms and conditions governing relocation service agreements, transit insurance terms, payment policies, and guidelines.',
    'breadcrumbs' => [
        ['name' => 'Terms and Conditions']
    ]
]);
?>

<!-- Terms and Conditions Page Main Container -->
<section class="terms-page-section py-5">
    <div class="container">
        
        <div class="row g-4 g-lg-5">
            
            <!-- Left Side: Sticky Quick Navigation Sidebar -->
            <div class="col-lg-4 col-12">
                <div class="terms-sidebar-wrap p-4 shadow-sm position-sticky">
                    <div class="terms-sidebar-header mb-3 pb-2 border-bottom">
                        <i class="bi bi-file-earmark-text-fill text-red fs-4 me-2"></i>
                        <h4 class="fw-bold text-dark d-inline">Terms Index</h4>
                    </div>

                    <nav class="nav flex-column terms-quick-nav gap-2">
                        <a class="nav-link active" href="#tsection-1">
                            <i class="bi bi-briefcase-fill me-2"></i> 1. Scope of Service
                        </a>
                        <a class="nav-link" href="#tsection-2">
                            <i class="bi bi-cash-stack me-2"></i> 2. Quotes &amp; Payment Terms
                        </a>
                        <a class="nav-link" href="#tsection-3">
                            <i class="bi bi-person-check-fill me-2"></i> 3. Customer Responsibilities
                        </a>
                        <a class="nav-link" href="#tsection-4">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i> 4. Prohibited Goods Policy
                        </a>
                        <a class="nav-link" href="#tsection-5">
                            <i class="bi bi-shield-lock-fill me-2"></i> 5. Transit Insurance Claims
                        </a>
                        <a class="nav-link" href="#tsection-6">
                            <i class="bi bi-arrow-counterclockwise me-2"></i> 6. Cancellation &amp; Refunds
                        </a>
                    </nav>

                    <!-- Agreement Callout -->
                    <div class="terms-agree-box mt-4 p-3 text-center rounded">
                        <i class="bi bi-check-seal-fill text-red display-6 mb-2"></i>
                        <h6 class="fw-bold text-dark mb-1">Transparent Service Agreement</h6>
                        <p class="small text-muted mb-0">Booking our services implies acceptance of these contractual terms.</p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Terms Details Content -->
            <div class="col-lg-8 col-12">
                <div class="terms-content-card p-4 p-md-5 shadow-sm">
                    
                    <div class="terms-intro-box mb-5 pb-4 border-bottom">
                        <span class="badge bg-danger text-white px-3 py-2 rounded-pill mb-3">Version 2.4 - Updated 2026</span>
                        <h2 class="fw-bold text-dark mb-3">Service Terms &amp; Relocation Agreement</h2>
                        <p class="text-muted leading-relaxed">
                            Welcome to <strong><?= $company3 ?></strong>. By hiring our packing, moving, car transportation, or warehouse storage services, you agree to comply with and be bound by the following terms and conditions.
                        </p>
                    </div>

                    <!-- Section 1 -->
                    <div class="terms-section-item mb-5" id="tsection-1">
                        <h3 class="terms-sec-title mb-3">
                            <span class="sec-num text-red me-2">01.</span> Scope of Service
                        </h3>
                        <p class="text-muted leading-relaxed mb-3">
                            <?= $company3 ?> agrees to perform relocation services including packing, loading, transportation, unloading, and unpacking of household or office goods as explicitly agreed upon in the booking quotation document.
                        </p>
                        <ul class="terms-list mb-0">
                            <li>Services are executed during normal business hours unless express overnight/weekend arrangements are scheduled.</li>
                            <li>Dismantling and reassembly covers standard furniture items. Electrical, plumbing, and civil works (e.g. AC uninstallation, wall drillings) require prior notice.</li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="terms-section-item mb-5" id="tsection-2">
                        <h3 class="terms-sec-title mb-3">
                            <span class="sec-num text-red me-2">02.</span> Quotation &amp; Payment Terms
                        </h3>
                        <p class="text-muted leading-relaxed mb-3">
                            All quotations provided by our estimation managers are valid for 15 days from issue date.
                        </p>
                        <ul class="terms-list mb-0">
                            <li><strong>Advance Booking Fee:</strong> A token advance (10-20%) is required to confirm truck and crew allocation.</li>
                            <li><strong>Balance Payment:</strong> The remaining balance must be cleared upon completion of loading at origin or prior to unloading at destination.</li>
                            <li><strong>Unforeseen Charges:</strong> Extra charges apply if additional unlisted goods are loaded, or if long-distance manual carry (beyond 50 meters) or non-functional elevators occur.</li>
                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="terms-section-item mb-5" id="tsection-3">
                        <h3 class="terms-sec-title mb-3">
                            <span class="sec-num text-red me-2">03.</span> Customer Responsibilities
                        </h3>
                        <p class="text-muted leading-relaxed">
                            The customer is responsible for ensuring clear access for cargo vehicles at both origin and destination points, securing society/building movement permits, and personally safeguarding high-value items like cash, gold jewelry, laptops, and original legal documents.
                        </p>
                    </div>

                    <!-- Section 4: Prohibited Items Warning Cards Grid -->
                    <div class="terms-section-item mb-5" id="tsection-4">
                        <h3 class="terms-sec-title mb-3">
                            <span class="sec-num text-red me-2">04.</span> Prohibited &amp; Hazardous Goods
                        </h3>
                        <p class="text-muted leading-relaxed mb-4">
                            For safety and statutory compliance, the following items are strictly prohibited inside our cargo container vehicles:
                        </p>

                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <div class="prohibited-item-card p-3 rounded h-100 border">
                                    <i class="bi bi-fire text-red fs-3 mb-2 d-block"></i>
                                    <h6 class="fw-bold text-dark mb-1">Flammable Liquids &amp; Gas</h6>
                                    <p class="small text-muted mb-0">LPG cylinders, petrol/diesel cans, paints, thinners, kerosene, and fireworks.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="prohibited-item-card p-3 rounded h-100 border">
                                    <i class="bi bi-shield-slash-fill text-red fs-3 mb-2 d-block"></i>
                                    <h6 class="fw-bold text-dark mb-1">Contraband &amp; Explosives</h6>
                                    <p class="small text-muted mb-0">Illegal substances, firearms, ammunition, corrosive acids, and hazardous chemicals.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="prohibited-item-card p-3 rounded h-100 border">
                                    <i class="bi bi-cash-coin text-red fs-3 mb-2 d-block"></i>
                                    <h6 class="fw-bold text-dark mb-1">Cash, Bullion &amp; Jewelry</h6>
                                    <p class="small text-muted mb-0">Currency notes, gold/silver ornaments, stock certificates, and precious gemstones.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="prohibited-item-card p-3 rounded h-100 border">
                                    <i class="bi bi-tree-fill text-red fs-3 mb-2 d-block"></i>
                                    <h6 class="fw-bold text-dark mb-1">Perishables &amp; Live Items</h6>
                                    <p class="small text-muted mb-0">Unsealed food items, fresh meat, dairy, and domestic pets inside closed trucks.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 5 -->
                    <div class="terms-section-item mb-5" id="tsection-5">
                        <h3 class="terms-sec-title mb-3">
                            <span class="sec-num text-red me-2">05.</span> Transit Insurance Policy &amp; Claims
                        </h3>
                        <p class="text-muted leading-relaxed mb-3">
                            Comprehensive Transit Insurance covers damages caused by vehicle accidents, fire, rollover, or theft during transit:
                        </p>
                        <ul class="terms-list mb-0">
                            <li>Insurance policy covers declare value declared on the official inventory receipt.</li>
                            <li>Damage claims must be endorsed on the consignment receipt at the time of delivery and reported within 24 hours.</li>
                            <li>Pre-existing damages, wear-and-tear, or internal electronic faults of uninspected appliances are excluded.</li>
                        </ul>
                    </div>

                    <!-- Section 6 -->
                    <div class="terms-section-item mb-4" id="tsection-6">
                        <h3 class="terms-sec-title mb-3">
                            <span class="sec-num text-red me-2">06.</span> Cancellation &amp; Refund Policy
                        </h3>
                        <p class="text-muted leading-relaxed mb-4">
                            You may cancel or reschedule your move by notifying us in writing:
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle terms-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Cancellation Notice Period</th>
                                        <th>Refund Applicable</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>48 Hours prior to scheduled move</td>
                                        <td><span class="badge bg-success">100% Full Advance Refund</span></td>
                                    </tr>
                                    <tr>
                                        <td>24 to 48 Hours prior to move</td>
                                        <td><span class="badge bg-warning text-dark">50% Advance Refund</span></td>
                                    </tr>
                                    <tr>
                                        <td>Less than 24 Hours / Crew arrived</td>
                                        <td><span class="badge bg-danger">No Advance Refund (Mobilization Fee)</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>