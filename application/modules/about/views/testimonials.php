<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Customer Testimonials & Reviews',
    'bc_desc' => 'Feedback From Our Customers About ' . $company3 . ': Read moving stories and experiences of our clients.',
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- Testimonials Page Main Container -->
<section class="about-page-section py-5">
    <div class="container">

        <!-- 1. Hero / Intro Banner Card -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-12">
                    <h1 class="abt-sec-title mb-2">Feedback From Our Customers About <?= $company3 ?></h1>
                    <h2 class="fw-bold text-dark fs-4 mb-3">Moving Stories of Our Clients</h2>
                    <p class="mb-3">
                        Moving is not just about moving things to their destination. It is about how the team treats furniture, how carefully the fragile items are packed, how transparently the process of moving is explained, and how confident you feel in your new place.
                    </p>
                    <p class="mb-0 text-muted small fst-italic">
                        Below you will find testimonial templates that describe realistic incidents during moves. Do not use them without matching them to an existing customer testimonial or a record from the service.
                    </p>
                </div>
            </div>
        </div>

        <!-- 2. Incidents Experienced by Our Customers -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-4">Incidents Experienced by Our Customers</h2>

            <div class="row g-4">
                <!-- Story 1 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-warning fs-6">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-light text-danger border">Home Relocation</span>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">"Our Furniture and Kitchen Items Were Handled With Care"</h3>
                        <div class="fw-bold text-primary small mb-3">
                            <i class="bi bi-person-fill me-1"></i> Riya Sharma | Siliguri, West Bengal
                        </div>
                        <p class="mb-3 fst-italic">
                            “We were quite concerned about shifting our household items because we had glassware, kitchen items, and several furniture pieces. The packing team arrived on time and handled the fragile items separately. They treated the furniture with great care and the unloading at the new place was organized. This helped us a lot.”
                        </p>
                        <div class="p-3 bg-light rounded-3 border">
                            <p class="small text-muted mb-0">
                                <strong>The incident:</strong> Shifting the household items with glassware, kitchen items, and furniture that required careful treatment.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-warning fs-6">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-light text-danger border">Office Relocation</span>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">"Our New Office Was Ready Before the Work Schedule"</h3>
                        <div class="fw-bold text-primary small mb-3">
                            <i class="bi bi-person-fill me-1"></i> Amit Agarwal | Kolkata, West Bengal
                        </div>
                        <p class="mb-3 fst-italic">
                            "Our office shifting had to be completed within a very tight schedule because we did not want to lose another workday. The team organized the shifting of furniture, files, and office equipment properly. Loading and unloading were managed in an organized way, which allowed us to get our office arranged quickly."
                        </p>
                        <div class="p-3 bg-light rounded-3 border">
                            <p class="small text-muted mb-0">
                                <strong>The incident:</strong> Business shifting where the schedule of work was considered, and attention was paid to office furniture and equipment.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-warning fs-6">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-light text-danger border">Household Shifting</span>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">"Our Move Turned Out To Be Easier Than Expected"</h3>
                        <div class="fw-bold text-primary small mb-3">
                            <i class="bi bi-person-fill me-1"></i> Neha Gupta | Guwahati, Assam
                        </div>
                        <p class="mb-3 fst-italic">
                            "This was our first major relocation of the household items, so we had many questions before booking. The team explained the procedure, helped with packing, and handled our household items carefully. Communication during the move was really appreciated."
                        </p>
                        <div class="p-3 bg-light rounded-3 border">
                            <p class="small text-muted mb-0">
                                <strong>The incident:</strong> Family relocation where communication and organization were important to the customer.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story 4 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-warning fs-6">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-light text-danger border">Intercity Relocation</span>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">"My Car and Household Goods Were Transported Separately"</h3>
                        <div class="fw-bold text-primary small mb-3">
                            <i class="bi bi-person-fill me-1"></i> Rahul Mehta | Siliguri, West Bengal
                        </div>
                        <p class="mb-3 fst-italic">
                            "We were relocating to another city and had to shift household items and our car. The discussion of the requirements together helped to plan the process. The household items were packed properly, and the car was transported separately."
                        </p>
                        <div class="p-3 bg-light rounded-3 border">
                            <p class="small text-muted mb-0">
                                <strong>The incident:</strong> Intercity relocation that involved both household goods and car.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story 5 -->
                <div class="col-lg-12">
                    <div class="abt-box-card p-4 h-100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-warning fs-6">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-light text-danger border">Home and Car Relocation</span>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">"The Fragile Items Required Extra Attention"</h3>
                        <div class="fw-bold text-primary small mb-3">
                            <i class="bi bi-person-fill me-1"></i> Priyanka Das | Jalpaiguri, West Bengal
                        </div>
                        <p class="mb-3 fst-italic">
                            "My main concern was fragile items such as glassware and electronic items. I specifically mentioned this issue before the move. The packing team paid special attention to them, and unloading was organized carefully at the destination point. This was the main feature of the service that I liked."
                        </p>
                        <div class="p-3 bg-light rounded-3 border">
                            <p class="small text-muted mb-0">
                                <strong>The incident:</strong> Fragile household items and electronic goods that got additional packing and handling.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Features of Our Moves Noticed by the Clients -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-4">Features of Our Moves Noticed by the Clients</h2>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-box-seam-fill text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">Careful Packing at the Pick-up Point</h3>
                        <p class="mb-0">
                            First of all, customers pay attention to the packing procedure. Furniture, electrical appliances, cartons, and fragile items require different types of handling. Preparation will allow loading to be organized better.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-chat-dots-fill text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">Good Communication During Transportation</h3>
                        <p class="mb-0">
                            The move will be easier for you when you know everything about it. Information about pick-up, transportation, and delivery helps to reduce unnecessary uncertainty.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-check-circle-fill text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">Careful Unloading at the Destination Point</h3>
                        <p class="mb-0">
                            The task does not end with the arrival of the vehicle to the destination point. Furniture and cartons have to be unloaded and arranged there.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Review Submission Callout Card -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm border">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-8 text-lg-start text-center">
                    <h2 class="abt-sec-title fs-3 mb-2">Share Your Hanshika Moving Experience - Your Feedback Will Help the Future Clients</h2>
                    <p class="mb-3">
                        If you have just relocated with the <strong><?= $company3 ?></strong>, your experience can help another family or company to make an informed decision.
                    </p>
                    <p class="mb-0">
                        Tell us what was special about your move: the packing procedure, behavior of the team, communication, transportation, or delivery.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <button type="button" class="btn-v2-primary py-3 px-4" data-bs-toggle="modal" data-bs-target="#rvwmdl">
                        <i class="bi bi-star-fill text-warning me-2"></i> Write a Review
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Load Review Submission Modal from Reviews Module -->
<?php $this->load->view('reviews/reviewmodal'); ?>