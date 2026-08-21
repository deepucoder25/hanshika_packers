<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose ' . $company3,
    'bc_desc' => 'Discover why ' . $company3 . ' is your trusted, reliable partner for household, office, and vehicle relocation across India.',
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- Why Choose Us Page Container -->
<section class="about-page-section py-5">
    <div class="container">

        <!-- 1. Hero / Intro Banner Card -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <div class="row align-items-center g-4">
                <div class="col-12">
                    <h2 class="abt-sec-title mb-3">Why Should You Choose <?= $company3 ?>?</h2>
                    <p class="mb-3">
                        To find the right <em>Packers and Movers</em> means to choose not only the right vehicle but also the reliable company that will take care of furniture, appliances, documentation and other possessions.
                    </p>
                    <p class="mb-3">
                        The approach of <strong><?= $company3 ?></strong> is based on careful handling, clear communication and reliable moving assistance. Over <?= $yearsExperience ?> years of experience, <?= $successfullShifts ?> successful moves, <?= $happyClients ?> satisfied customers and relocation services across <?= $citiesCovered ?> cities have shaped our services according to customer preferences.
                    </p>
                    <p class="mb-0">
                        We think that relocation shouldn't be a difficult process for customers. You should be aware of what will be relocated, who will do that and how.
                    </p>
                </div>
            </div>
        </div>

        <!-- 2. 6 Reasons to Choose Section -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-4">6 Reasons to Choose <?= $company3 ?></h2>

            <div class="row g-4">
                <!-- Reason 1 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-clock-history text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">01. <?= $yearsExperience ?> Years of Moving Experience</h3>
                        <p class="mb-2">Experience makes the moving team aware of various relocation needs.</p>
                        <p class="mb-2">In <?= $yearsExperience ?> years of moving services, we helped our clients to move household, offices, vehicles, to pack and move different goods.</p>
                        <p class="mb-2">The move of the 1BHK household is different from the relocation of the entire office. Our team takes into account all the peculiarities of the job before the work starts.</p>
                        <p class="mb-0">It's one of the experiences that customers should consider when they compare the Top Packers and Movers.</p>
                    </div>
                </div>

                <!-- Reason 2 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-box-seam-fill text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">02. <?= $successfullShifts ?> Successful Moves</h3>
                        <p class="mb-2">Each move provides us with practical experience.</p>
                        <p class="mb-2">With <?= $successfullShifts ?> successful moves behind our backs, we helped to move furniture, household goods, office items and transport the goods to different locations.</p>
                        <p class="mb-2">There are many small details that can affect the move. The order of packing, loading, handling and unloading is among them.</p>
                        <p class="mb-0">And our mission is to take care of these details to make your move less stressful.</p>
                    </div>
                </div>

                <!-- Reason 3 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-people-fill text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">03. <?= $happyClients ?> Satisfied Customers</h3>
                        <p class="mb-2">One of the landmarks of <?= $company3 ?> is our customer base.</p>
                        <p class="mb-2">Over <?= $happyClients ?> customers chose <?= $company3 ?> as their relocation service. It included families, working professionals and businesses needing the reliable Shifting Services.</p>
                        <p class="mb-0">All our customers are not just the number of orders but people who need our advice, consultation and help to understand their quotation.</p>
                    </div>
                </div>

                <!-- Reason 4 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-shield-check text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">04. Careful Packing and Handling</h3>
                        <p class="mb-2">Proper preparation ensures the successful transportation.</p>
                        <p class="mb-2">Our packing team uses appropriate quality packing materials in accordance with the goods being transported. Different handling is required for fragile goods, furniture, appliances and general household cartons.</p>
                        <p class="mb-0">The main purpose is to provide protection of your belongings during handling, loading, transportation and unloading.</p>
                    </div>
                </div>

                <!-- Reason 5 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-shield-lock-fill text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">05. Safe and Secure Delivery Focus</h3>
                        <p class="mb-2">We know the biggest worry of the clients during the relocation process: Will my belongings reach safely?</p>
                        <p class="mb-2">The service provided by <?= $company3 ?> is focused on the careful handling of the goods during the entire move. Our team is responsible for packing, loading, transportation, unloading and delivery in accordance with the agreement made.</p>
                        <p class="mb-2">Our service commitment is 100% Safe &amp; Secure Delivery, as safe transportation is the priority for us during the whole relocation process.</p>
                        <p class="mb-0">For transit insurance coverage depends on the policy, the goods and the policy terms. We think that our clients should be provided with the information about the insurance before booking.</p>
                    </div>
                </div>

                <!-- Reason 6 -->
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-geo-alt-fill text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">06. Services Available in <?= $citiesCovered ?> Cities</h3>
                        <p class="mb-2">Relocation isn't always made locally. Now our services are available in <?= $citiesCovered ?> cities and we provide our clients with the local and intercity relocation services.</p>
                        <p class="mb-2">The list of services includes the household relocation, office shifting, vehicle transportation, bike transportation, packing and moving, loading and unloading and storage services.</p>
                        <p class="mb-0">So we are able to offer both Local Packers and Movers and the long distance moving services.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. What Makes Our Moving Service Unique? -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-4">What Makes Our Moving Service Unique?</h2>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-sliders text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">A Process Tailored to the Customer Requirement</h3>
                        <p class="mb-2">We don't suppose that every client has the same moving plan.</p>
                        <p class="mb-2">Families can need assistance during the entire household relocation. Working professionals can require relocation of selected furniture to another city. Business can require the relocation of office equipment and furniture within a certain schedule.</p>
                        <p class="mb-0">Our team first understands the requirement and coordinates the corresponding moving service.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="abt-box-card p-4 h-100">
                        <div class="abt-fleet-icon mb-3">
                            <i class="bi bi-chat-quote-fill text-danger"></i>
                        </div>
                        <h3 class="fw-bold text-dark fs-5 mb-3">Clear Communication Is Important</h3>
                        <p class="mb-2">Relocation can become stressful if the information is unclear.</p>
                        <p class="mb-2">That's why we pay much attention to the communication in regard to customer requirements, quotation and moving arrangements. Customers should understand everything before the move.</p>
                        <p class="mb-0">This approach helps us to create trust in the Best Packers and Movers.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Our Figures Show Part of Our Work -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm">
            <h2 class="abt-sec-title mb-3">Our Figures Show Part of Our Work</h2>
            <h3 class="fw-bold text-dark fs-5 mb-4">Experience Visible to Customers</h3>

            <div class="row g-4 mb-4">
                <div class="col-lg-4 col-md-6">
                    <div class="abt-milestone-card p-4">
                        <div class="abt-milestone-year"><?= $yearsExperience ?> Years</div>
                        <h4 class="abt-milestone-title fs-6"><?= $yearsExperience ?> Years</h4>
                        <p class="mb-0">Experience in relocation services</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-milestone-card p-4">
                        <div class="abt-milestone-year"><?= $successfullShifts ?> Moves</div>
                        <h4 class="abt-milestone-title fs-6"><?= $successfullShifts ?></h4>
                        <p class="mb-0">Successful moves</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-milestone-card p-4">
                        <div class="abt-milestone-year"><?= $happyClients ?> Clients</div>
                        <h4 class="abt-milestone-title fs-6"><?= $happyClients ?></h4>
                        <p class="mb-0">Satisfied customers</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="abt-milestone-card p-4">
                        <div class="abt-milestone-year"><?= $citiesCovered ?> Cities</div>
                        <h4 class="abt-milestone-title fs-6"><?= $citiesCovered ?></h4>
                        <p class="mb-0">Cities served</p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="abt-milestone-card p-4 border-danger">
                        <div class="abt-milestone-year bg-danger text-white">100% Safe</div>
                        <h4 class="abt-milestone-title text-danger fs-6">100%</h4>
                        <p class="mb-0">Safe &amp; Secure Delivery service commitment</p>
                    </div>
                </div>
            </div>

            <p class="mb-0">
                These numbers are important but we understand that only figures don't make the moving company trustworthy. The proof of the pudding is in the eating and we try to take care of it.
            </p>
        </div>

        <!-- 5. Looking for the Reliable Packers and Movers? -->
        <div class="abt-hero-card p-4 p-md-5 mb-5 shadow-sm border">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-12">
                    <h2 class="abt-sec-title mb-2">Looking for the Reliable Packers and Movers?</h2>
                    <h3 class="fw-bold text-danger fs-5 mb-3">Receive the Moving Quotation According to Your Requirement</h3>
                    <p class="mb-3">
                        Planning household shift, office relocation or vehicle transportation?
                    </p>
                    <p class="mb-3">
                        Provide <strong><?= $company3 ?></strong> with the pickup location, destination, moving date and basic moving requirement. Our team will understand your requirements and provide you with the suitable moving quotation.
                    </p>
                    <p class="mb-0">
                        When comparing <b>Top Packers and Movers</b> or choosing the <b>Best Packers and Movers</b>, you should pay attention to the experience, transparent communication, careful handling and service corresponding to your requirement.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>