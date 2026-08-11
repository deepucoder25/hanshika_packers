<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Track Your Consignment',
    'bc_desc' => 'Get real-time updates, live container status, and accurate delivery timelines for your cargo.',
    'breadcrumbs' => [
        ['name' => 'Track Consignment']
    ]
]);
?>

<!-- Tracking Main Section -->
<section class="trk-page-section py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                
                <!-- 1. Search Form Hero Card -->
                <div class="trk-search-card text-center mb-4">
                    <span class="trk-badge">
                        <i class="bi bi-geo-alt-fill"></i> Live Cargo &amp; GPS Tracking
                    </span>
                    <h2 class="trk-main-title">Track Consignment Status</h2>
                    <p class="trk-subtitle">
                        Enter your LR / Docket / Consignment Number below to view live shipment location and delivery timeline.
                    </p>

                    <form action="" id="tracking_form" class="mx-auto" style="max-width: 650px;">
                        <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
                            <div class="trk-input-group">
                                <i class="bi bi-box-seam-fill trk-input-icon"></i>
                                <input type="text" class="trk-input" id="trackingNumber" name="trackingNumber" placeholder="Enter Tracking / LR Number (e.g. 123456)" required>
                            </div>
                            <button type="submit" class="btn trk-search-btn" id="tracking_submit">
                                <i class="bi bi-search"></i>
                                <span>Track Now</span>
                            </button>
                            <button type="reset" class="btn trk-clear-btn" title="Clear">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                        <div id="statusMessage" class="mt-3 text-start"></div>
                    </form>

                    <!-- 4 Quick Trust Badges -->
                    <div class="row g-3 pt-4 border-top mt-4 text-center">
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center justify-content-center gap-2 text-muted small fw-bold">
                                <i class="bi bi-lightning-charge-fill text-warning"></i> Real-time Updates
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center justify-content-center gap-2 text-muted small fw-bold">
                                <i class="bi bi-shield-check text-success"></i> Sealed Container
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center justify-content-center gap-2 text-muted small fw-bold">
                                <i class="bi bi-truck text-danger"></i> GPS Fleet Live
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="d-flex align-items-center justify-content-center gap-2 text-muted small fw-bold">
                                <i class="bi bi-headset text-primary"></i> 24/7 Helpline
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Tracking Details Container (Hidden until search result loads) -->
                <div class="contact-tracking-details-card trk-details-card" style="display: none;">
                    <div class="trk-details-header">
                        <h4 class="trk-details-title">
                            <i class="bi bi-truck-flatbed"></i> Consignment Tracking Details
                        </h4>
                        <span class="badge bg-success text-white px-3 py-2 rounded-pill small fw-bold">
                            <i class="bi bi-patch-check-fill me-1"></i> Verified Shipment
                        </span>
                    </div>

                    <div class="p-4 p-md-5">
                        <!-- 6-Metric Summary Grid -->
                        <div class="row g-3 mb-4">
                            <div class="col-6 col-md-4">
                                <div class="trk-summary-pill">
                                    <span class="trk-summary-label">Customer Name</span>
                                    <p class="trk-summary-val" id="customerName">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="trk-summary-pill">
                                    <span class="trk-summary-label">LR / Docket NO.</span>
                                    <p class="trk-summary-val" id="lrNumber">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="trk-summary-pill">
                                    <span class="trk-summary-label">Shipment Type</span>
                                    <p class="trk-summary-val" id="shipmentType">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="trk-summary-pill">
                                    <span class="trk-summary-label">Origin City</span>
                                    <p class="trk-summary-val" id="origin">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="trk-summary-pill">
                                    <span class="trk-summary-label">Destination City</span>
                                    <p class="trk-summary-val" id="destination">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="trk-summary-pill">
                                    <span class="trk-summary-label">Expected Delivery Date</span>
                                    <p class="trk-summary-val text-success">
                                        <span id="ex_del_date">-</span> <i class="bi bi-check-circle-fill ms-1"></i>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Process / Timeline Stepper Section Card -->
                        <div class="trk-process-card my-5">
                            <div class="trk-progress-header">
                                <h5 class="trk-progress-title">
                                    <i class="bi bi-diagram-3-fill text-danger"></i> Live Shipment Progress Status
                                </h5>
                                <span class="badge bg-light text-dark border px-3 py-2 rounded-pill small fw-bold">
                                    <i class="bi bi-broadcast text-danger me-1"></i> Real-Time Updates
                                </span>
                            </div>

                            <!-- Top Overall Progress Line Bar -->
                            <div class="trk-progress-track">
                                <div class="progress-bar contact-progress-bar" role="progressbar"></div>
                            </div>

                            <!-- 4 Step Cards Pipeline Grid -->
                            <div class="row g-3">
                                <!-- Step 1 -->
                                <div class="col-6 col-lg-3 contact-step step-processing">
                                    <div class="trk-step-box">
                                        <div class="trk-step-head">
                                            <span class="trk-step-no">STEP 01</span>
                                            <i class="bi bi-check-circle-fill trk-step-chk"></i>
                                        </div>
                                        <div class="trk-step-icon-wrap">
                                            <i class="bi bi-gear-wide-connected"></i>
                                        </div>
                                        <div class="trk-step-title">Processing</div>
                                        <div class="contact-step-date" id="processing-date"></div>
                                    </div>
                                </div>

                                <!-- Step 2 -->
                                <div class="col-6 col-lg-3 contact-step step-picked">
                                    <div class="trk-step-box">
                                        <div class="trk-step-head">
                                            <span class="trk-step-no">STEP 02</span>
                                            <i class="bi bi-check-circle-fill trk-step-chk"></i>
                                        </div>
                                        <div class="trk-step-icon-wrap">
                                            <i class="bi bi-box-seam-fill"></i>
                                        </div>
                                        <div class="trk-step-title">Picked Up</div>
                                        <div class="contact-step-date" id="picked-date"></div>
                                    </div>
                                </div>

                                <!-- Step 3 -->
                                <div class="col-6 col-lg-3 contact-step step-transit">
                                    <div class="trk-step-box">
                                        <div class="trk-step-head">
                                            <span class="trk-step-no">STEP 03</span>
                                            <i class="bi bi-check-circle-fill trk-step-chk"></i>
                                        </div>
                                        <div class="trk-step-icon-wrap">
                                            <i class="bi bi-truck-flatbed"></i>
                                        </div>
                                        <div class="trk-step-title">In Transit</div>
                                        <div class="contact-step-date" id="transit-date"></div>
                                    </div>
                                </div>

                                <!-- Step 4 -->
                                <div class="col-6 col-lg-3 contact-step step-delivered">
                                    <div class="trk-step-box">
                                        <div class="trk-step-head">
                                            <span class="trk-step-no">STEP 04</span>
                                            <i class="bi bi-check-circle-fill trk-step-chk"></i>
                                        </div>
                                        <div class="trk-step-icon-wrap">
                                            <i class="bi bi-house-check-fill"></i>
                                        </div>
                                        <div class="trk-step-title">Delivered</div>
                                        <div class="contact-step-date" id="delivered-date"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tracking Event History Table -->
                        <div class="mt-5">
                            <h5 class="fw-bold text-dark mb-3">
                                <i class="bi bi-clock-history text-danger me-2"></i> Tracking History Timeline
                            </h5>
                            <div class="table-responsive trk-table-wrap">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>STATUS</th>
                                            <th>DATE &amp; TIME</th>
                                            <th>EVENT REMARKS</th>
                                        </tr>
                                    </thead>
                                    <tbody id="trackingTableBody">
                                        <!-- Table rows injected via JS -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Support Helpline Banner -->
                        <div class="trk-support-box mt-4">
                            <div class="row align-items-center g-3">
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="fs-2 text-danger"><i class="bi bi-headset"></i></div>
                                        <div>
                                            <h6 class="fw-bold text-dark mb-1">Need Live Support For Your Shipment?</h6>
                                            <p class="text-muted small mb-0">Call our 24x7 control room hotline or leave a message for instant support.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <a href="<?= $phonehtml ?>" class="btn btn-danger rounded-pill px-4 py-2 fw-bold text-white">
                                        <i class="bi bi-telephone-fill me-1"></i> <?= $phone ?>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Live Tracking Ajax Script -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function () {
        const steps = {
            '1': 'Processing',
            '2': 'Picked Up',
            '3': 'In Transit',
            '4': 'Delivered',
        };

        $('#tracking_submit').click(function (e) {
            e.preventDefault();
            $('#statusMessage').html('<div class="alert alert-info py-2 px-3 fw-bold small"><i class="bi bi-hourglass-split me-1"></i> Fetching live shipment status...</div>');
            $(this).prop('disabled', true);
            $('.contact-tracking-details-card').hide();

            $.post("<?php echo site_url('tracking/track') ?>", $("#tracking_form").serialize(), function (
                response) {
                $('#tracking_submit').prop('disabled', false);
                $('#trackingTableBody').empty();

                if (response.status === 'success') {
                    // Show details section
                    $('.contact-tracking-details-card').show();

                    // Populate details
                    $('#customerName').text(response.main.c_name);
                    $('#lrNumber').text(response.main.tracking_id);
                    $('#shipmentType').text(response.main.ship_type);
                    $('#origin').text(response.main.ship_from);
                    $('#destination').text(response.main.ship_to);
                    $('#ex_del_date').text(response.main.ex_del_date);

                    // Build map of fetched steps
                    const received = {};
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            received[item.type.toString()] = item;
                        });
                    }

                    // Update progress bar and steps
                    let progress = 0;
                    let activeStep = 0;

                    if (received['1']) {
                        progress = 25;
                        activeStep = 1;
                        $('.step-processing').addClass('completed');
                        $('#processing-date').text(received['1'].date);
                    }

                    if (received['2']) {
                        progress = 50;
                        activeStep = 2;
                        $('.step-picked').addClass('completed');
                        $('#picked-date').text(received['2'].date);
                    }

                    if (received['3']) {
                        progress = 75;
                        activeStep = 3;
                        $('.step-transit').addClass('completed');
                        $('#transit-date').text(received['3'].date);
                    }

                    if (received['4']) {
                        progress = 100;
                        activeStep = 4;
                        $('.step-delivered').addClass('completed');
                        $('#delivered-date').text(received['4'].date);
                    }

                    // Set active step
                    $('.contact-step').removeClass('active');
                    if (activeStep > 0) {
                        $(`.contact-step:nth-child(${activeStep})`).addClass('active');
                    }

                    // Update progress bar width
                    $('.contact-progress-bar').css('width', progress + '%');

                    // Build tracking table
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            $('#trackingTableBody').append(`
                                <tr>
                                    <td><span class="badge bg-danger text-white px-2 py-1">${steps[item.type] || item.type}</span></td>
                                    <td>${item.date}</td>
                                    <td>${item.remarks}</td>
                                </tr>
                            `);
                        });
                    }

                    $('#statusMessage').empty();
                } else {
                    // Error: hide details, show message
                    $('.contact-tracking-details-card').hide();
                    $('#statusMessage').html(
                        `<div class="alert alert-danger py-2 px-3 fw-bold small"><i class="bi bi-exclamation-triangle-fill me-1"></i> ${response.message}</div>`);
                }
            }, 'json').fail(function(jqXHR, textStatus, errorThrown) {
                $('#tracking_submit').prop('disabled', false);
                $('#statusMessage').html('<div class="alert alert-danger py-2 px-3 fw-bold small">Error: ' + textStatus + ' - ' + errorThrown + '</div>');
            });
        });

        // Clear resets everything
        $('button[type="reset"]').click(function () {
            $('#statusMessage').empty();
            $('.contact-tracking-details-card').hide();
            $('.contact-step').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#customerName, #lrNumber, #shipmentType, #origin, #destination, #ex_del_date, #processing-date, #picked-date, #transit-date, #delivered-date')
                .text('');
            $('#trackingTableBody').empty();
        });
    });
</script>
