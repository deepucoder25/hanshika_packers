<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About ' . $company3,
    'bc_desc' => 'Discover ' . $company3 . ': Moving With Care, Built on Trust. Professional packing, relocation & vehicle transportation services across India.',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- About Us Page Container -->
<section class="about-page-section py-5">
    <div class="container">

        <!-- 1. Hero / Intro Banner Card -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-12">
                    <div class="abt-badge-pill mb-3">
                        <i class="bi bi-shield-check text-red"></i> TRUSTED RELOCATION PARTNER
                    </div>
                    <h1 class="abt-main-title mb-3">
                        About <span class="abt-highlight-text"><?= $company3 ?></span>: Moving With Care, Built on Trust
                    </h1>
                    <p class="mb-0">
                        However, moving does not always mean just shifting the boxes from one location to another. It could mean beginning a new phase in one’s life by moving to a new city or opening a new office or moving to a new house. <strong><?= $company3 ?></strong> know the importance of moving well.
                    </p>
                </div>
            </div>
        </div>

        <!-- 2. How It Started Section -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-3">About Us: How <?= $company3 ?> Started Its Activity</h2>
            
            <p class="mb-3">
                We started with a basic understanding of the customer's needs in dealing with <b>Packers and Movers</b>: a responsible person who takes responsibility for the belongings and has communication skills.
            </p>
            <p class="mb-4">
                During the years of work, we had to deal with different relocation requirements: moving out of a 1BHK apartment, moving the family or office furniture, transporting vehicles. Every assignment gave the company the opportunity to gain the relocation experience.
            </p>

            <div class="pt-4 border-top">
                <h3 class="fw-bold text-dark mb-3">Building <?= $company3 ?> Through Practical Experience</h3>
                <p class="mb-3">
                    Our practical experience is our major asset. Unlike other companies which treat every booking as one and the same case, the <?= $company3 ?> team considers the practical relocation requirements before planning the moving process.
                </p>

                <div class="abt-question-box p-4 rounded-4 mb-4">
                    <p class="fw-semibold text-dark mb-0">
                        <i class="bi bi-question-circle-fill text-danger me-2 fs-5"></i>
                        Which items require packing? Which furniture pieces need special care? What loading help is needed? Which actions should be done at the destination point?
                    </p>
                </div>

                <p class="mb-3">
                    The answers to these questions give <?= $company3 ?> the opportunity to prepare for the job properly.
                </p>

                <div class="p-3 bg-light rounded-3 border mb-3">
                    <p class="fw-bold text-danger mb-0">
                        <i class="bi bi-graph-up-arrow me-2"></i>
                        At present, we have completed <?= $successfullShifts ?> successful moves, have worked in <?= $citiesCovered ?> cities and made <?= $happyClients ?> customers happy.
                    </p>
                </div>

                <p class="mb-0">
                    We have developed, but the basic principles remain the same: every move should be considered the same way as our own belongings have to be treated.
                </p>
            </div>
        </div>

        <!-- 3. Mission & Vision Section -->
        <div class="row g-4 mb-5">
            <!-- Mission Card -->
            <div class="col-lg-6">
                <div class="abt-pillar-card h-100 p-4 p-md-5">
                    <div class="abt-pillar-icon-box mb-3">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h2 class="abt-sec-title fs-3 mb-2">The Mission of <?= $company3 ?></h2>
                    <h3 class="fw-bold text-dark fs-5 mb-3">What Do We Stand For?</h3>
                    <p class="mb-3">
                        The mission of <?= $company3 ?> is making moving safe, clear and manageable.
                    </p>
                    <p class="mb-4">
                        The good moving company should not leave the client wondering about the following steps. Our team focuses on organized packing, responsible loading, transportation, unloading and delivery coordination.
                    </p>

                    <h5 class="fw-bold text-dark mb-3">The principles which we follow are:</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-danger mt-1"></i>
                            <div><strong>Care:</strong> handling the household goods and personal belongings.</div>
                        </li>
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-danger mt-1"></i>
                            <div><strong>Clarity:</strong> providing clear quotations and service information.</div>
                        </li>
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-danger mt-1"></i>
                            <div><strong>Responsibility:</strong> taking responsibility for the entire relocation process.</div>
                        </li>
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-danger mt-1"></i>
                            <div><strong>Comprehension:</strong> understanding the difficulties of moving.</div>
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <i class="bi bi-check-circle-fill text-danger mt-1"></i>
                            <div><strong>Improvement:</strong> learning from every relocation experience.</div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-lg-6">
                <div class="abt-pillar-card h-100 p-4 p-md-5">
                    <div class="abt-pillar-icon-box mb-3">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                    <h2 class="abt-sec-title fs-3 mb-2">The Vision of <?= $company3 ?></h2>
                    <h3 class="fw-bold text-dark fs-5 mb-3">Earning Customer Trust Through Professional Relocation Service</h3>
                    <p class="mb-3">
                        The vision of <?= $company3 ?> is to become the moving company which can be recommended to the family, friends and colleagues.
                    </p>
                    <p class="mb-3">
                        We believe that to belong to the list of the Top Packers and Movers means not to be among the search results, but to be trusted.
                    </p>
                    <p class="mb-0">
                        We want our customers to remember their relocation experience because of the right reasons.
                    </p>
                </div>
            </div>
        </div>

        <!-- 4. Distinctions Section -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-4">The Distinctions of <?= $company3 ?></h2>

            <div class="row g-4 mb-4">
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">Quality Packing and Careful Handling</h3>
                        <p class="mb-2">The packing process is one of the most crucial steps in the relocation process. Our packing specialists use the protective materials depending on the type of goods.</p>
                        <p class="mb-0">The furniture, appliances, fragile articles and household cartons require different treatment. We take into account all practical distinctions during preparation.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">Trained and Responsible Staff</h3>
                        <p class="mb-2">The successful moving service is always a coordinated work of the team. Our team consists of packing specialists, loaders, drivers and customer support specialists who participate in the moving process.</p>
                        <p class="mb-0">The roles may be different, but the responsibility is common - your belongings should be treated carefully.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">Support in Transits Insurance</h3>
                        <p class="mb-2">We realize that there is always a risk of something going wrong during the transit. The transits insurance gives you a financial protection against the insured events subject to the particular policy conditions, declared value and documentation.</p>
                        <p class="mb-0">We think that customers should know about their insurance coverage before booking the moving service.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-diagram-3-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-2">Coordination of Moving Process</h3>
                        <p class="mb-2">The relocation specialist has to know the pickup and destination requirements. Our team coordinates the packing, loading, transportation, unloading and delivery according to the established moving plan.</p>
                        <p class="mb-0">It is necessary for families, offices and anyone looking for Packers and Movers Near Me.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. The Team Section -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-4">The <?= $company3 ?> Team</h2>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">The Team Which Understands Its Responsibilities</h3>
                        <p class="mb-3">
                            The relocation service is provided by the people in the end. Our team consists of the packing specialists, loaders, drivers, customer support specialists and logistics specialists whose tasks are different, but the responsibility is one - careful handling of your belongings.
                        </p>
                        <p class="mb-0">
                            The packing specialist has to be patient and attentive. The furniture movers should be able to handle the heavy items. The driver and the transportation professional should behave responsibly on the road. The customer support specialist should provide the clear information. The team creates the relocation experience that customers receive.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-emoji-smile-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">Professionalism with the Friendly Approach</h3>
                        <p class="mb-0">
                            We think that professional moving service should be friendly. If you have any questions about the moving quote, packing requirements or delivery schedule, you can ask them. Friendly communication will help you to avoid many unnecessary stresses.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Achievements & Milestones Section -->
        <div class="mb-5">
            <h2 class="abt-sec-title mb-4">The Achievements and Milestones of <?= $company3 ?></h2>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="abt-milestone-card p-4">
                        <div class="abt-milestone-year"><?= $yearsExperience ?> Years</div>
                        <h3 class="abt-milestone-title"><?= $yearsExperience ?> Years of Experience</h3>
                        <p class="mb-0">Our experience is gained through thousands of relocation assignments and different requirements of the customers.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-milestone-card p-4">
                        <div class="abt-milestone-year"><?= $successfullShifts ?> Moves</div>
                        <h3 class="abt-milestone-title"><?= $successfullShifts ?> Successful Moves</h3>
                        <p class="mb-0">We have completed more than <?= $successfullShifts ?> successful moves, covering household, office and transportation requirements.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-milestone-card p-4">
                        <div class="abt-milestone-year"><?= $happyClients ?> Clients</div>
                        <h3 class="abt-milestone-title"><?= $happyClients ?> Happy Customers</h3>
                        <p class="mb-0">More than <?= $happyClients ?> customers have already trusted us.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-milestone-card p-4">
                        <div class="abt-milestone-year"><?= $citiesCovered ?> Cities</div>
                        <h3 class="abt-milestone-title"><?= $citiesCovered ?> Cities Served</h3>
                        <p class="mb-0">Our service network is spread over <?= $citiesCovered ?> cities, providing local and intercity relocation service.</p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="abt-milestone-card p-4 border-danger">
                        <div class="abt-milestone-year bg-danger text-white">100% Safe</div>
                        <h3 class="abt-milestone-title text-danger">100% Safe &amp; Secure Delivery Focus</h3>
                        <p class="mb-0">The safe and secure delivery is the primary focus during packing, transportation, unloading and delivery.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7. The Commitment Section -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-4">The Commitment of <?= $company3 ?> to Every Customer</h2>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <h3 class="fw-bold text-dark fs-5 mb-3">Your Belongings Deserve Careful Treatment, Not Just Transporter</h3>
                        <p class="mb-2">When you entrust your belongings to the Packers and Movers, you trust these items to the strangers.</p>
                        <p class="mb-2">It can be your family furniture, appliances, documents, office equipment or personal belongings. That is why the role of Packers and Movers goes far beyond transportation.</p>
                        <p class="fw-semibold text-dark mb-2">The care about your belongings is the focus of the <?= $company3 ?> specialists.</p>
                        <p class="mb-0">We take care of the careful packing, loading, transportation and unloading. Communication plays a significant role during all processes too.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <h3 class="fw-bold text-dark fs-5 mb-3">Clear and Honest Service Starts with the Right Information</h3>
                        <p class="mb-0">
                            When you are choosing the Best Packers and Movers, do not consider only prices. Discuss the quotation details, packing process, insurance and the communication process with Packers and Movers. We think that the clear information can help you to choose the best options.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 8. Reasons for Choosing Section -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-4">Reasons for Choosing <?= $company3 ?></h2>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">Experience Which Is Hard to Compare</h3>
                        <div class="p-3 bg-light rounded-3 border mb-3">
                            <p class="fw-bold text-danger mb-0">
                                <?= $yearsExperience ?> years, <?= $successfullShifts ?> successful moves, <?= $happyClients ?> happy customers, <?= $citiesCovered ?> cities.
                            </p>
                        </div>
                        <p class="mb-0">
                            These figures show the experience of the relocation assignments and relationships created through them.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-hand-thumbs-up-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">Moving Partner for Different Requirements</h3>
                        <p class="mb-3">
                            Our team provides such services as home shifting, office relocation, packing and moving, car transportation, bike transportation, loading and unloading, and storage requirements.
                        </p>
                        <p class="mb-0">
                            This makes us the practical partner for those customers who want to choose the relocation expert.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 9. Start Your Relocation Section -->
        <div class="abt-relocation-banner p-4 p-md-5 mb-4">
            <div class="row align-items-center g-4">
                <div class="col-12">
                    <h2 class="fw-bold text-white mb-2 fs-2">
                        <span class="text-warning">Start Your Relocation</span> with <?= $company3 ?>
                    </h2>
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-white bg-opacity-10 rounded-pill text-warning fw-bold small mb-3">
                        <i class="bi bi-box-seam-fill"></i> Tell Us What You Want to Move
                    </div>
                    <p class="text-white opacity-90 leading-relaxed mb-3">
                        Are you planning your next relocation? Share with our team your pickup location, destination point, moving date and basic requirements. We will understand your needs and help you to choose the appropriate relocation service.
                    </p>
                    <p class="text-white opacity-90 mb-0">
                        If you are searching for the Best Packers and Movers for your next relocation, we can help you to plan it with greater clarity and confidence.
                    </p>
                </div>
            </div>
        </div>

        <!-- 10. Help & Booking Info Separate Cards -->
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="abt-box-card p-4 h-100">
                    <div class="abt-fleet-icon mb-3">
                        <i class="bi bi-grid-3x3-gap-fill text-danger"></i>
                    </div>
                    <h4 class="fw-bold text-dark fs-6 mb-3">Need Help Choosing a Service?</h4>
                    <p class="mb-0">
                        You can choose the right relocation service from our Home Relocation, Office Relocation, Packing and Moving, Car Transportation, Bike Transportation, Loading and Unloading, and Storage Services.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="abt-box-card p-4 h-100">
                    <div class="abt-fleet-icon mb-3">
                        <i class="bi bi-chat-dots-fill text-danger"></i>
                    </div>
                    <h5 class="fw-bold text-dark fs-6 mb-3">Have Any Questions Before Booking?</h5>
                    <p class="mb-0">
                        Discuss your moving requirements, quotation and service availability with our team.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="abt-box-card p-4 h-100 border-danger">
                    <div class="abt-fleet-icon mb-3">
                        <i class="bi bi-telephone-outbound-fill text-danger"></i>
                    </div>
                    <h6 class="fw-bold text-danger fs-6 mb-3">Ready to Move?</h6>
                    <p class="mb-0">
                        Contact <strong><?= $company3 ?></strong> at <a href="<?= $phonehtml ?>" class="text-danger text-decoration-underline fw-bold"><?= $phone ?></a> and start your better-organized relocation.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>