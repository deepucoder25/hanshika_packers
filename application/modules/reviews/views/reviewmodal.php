<!-- Review Modal -->
<div class="modal fade custom-rvw-modal-v3" id="rvwmdl" tabindex="-1" role="dialog" aria-labelledby="rvwmdlLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0 shadow-lg overflow-hidden">
            
            <!-- Sleek Dark & Red Hero Header -->
            <div class="rvw-header-hero p-4 position-relative">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rvw-hero-icon-box">
                            <i class="bi bi-star-fill text-warning fs-3"></i>
                        </div>
                        <div>
                            <div class="rvw-hdr-badge mb-1">
                                <i class="bi bi-patch-check-fill text-warning me-1"></i> VERIFIED CUSTOMER REVIEWS
                            </div>
                            <h3 class="modal-title fw-bold text-white mb-0" id="rvwmdlLabel">Share Your Moving Experience</h3>
                        </div>
                    </div>
                    <button type="button" class="rvw-close-circle" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Body Form -->
            <div class="modal-body p-4 p-md-5">
                <form method="post" id="reviewsform" onsubmit="return handleReviewFormSubmit(event);" enctype="multipart/form-data">
                    <div class="row g-4">
                        
                        <!-- Full Name -->
                        <div class="col-md-6">
                            <div class="rvw-group">
                                <label class="rvw-lbl">FULL NAME <span class="text-danger">*</span></label>
                                <div class="rvw-input-group">
                                    <span class="rvw-input-icon"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control rvw-field" id="name" name="name" placeholder="Enter your full name" required>
                                </div>
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="col-md-6">
                            <div class="rvw-group">
                                <label class="rvw-lbl">EMAIL ADDRESS <span class="text-danger">*</span></label>
                                <div class="rvw-input-group">
                                    <span class="rvw-input-icon"><i class="bi bi-envelope-fill"></i></span>
                                    <input type="email" class="form-control rvw-field" name="email" placeholder="Enter your email address" required>
                                </div>
                            </div>
                        </div>

                        <!-- Review Title -->
                        <div class="col-md-6">
                            <div class="rvw-group">
                                <label class="rvw-lbl">REVIEW TITLE <span class="text-danger">*</span></label>
                                <div class="rvw-input-group">
                                    <span class="rvw-input-icon"><i class="bi bi-chat-quote-fill"></i></span>
                                    <input type="text" class="form-control rvw-field" name="title" placeholder="e.g. Smooth Household Shifting" required>
                                </div>
                            </div>
                        </div>

                        <!-- Star Rating Picker Card -->
                        <div class="col-md-6">
                            <div class="rvw-group">
                                <label class="rvw-lbl">YOUR RATING <span class="text-danger">*</span></label>
                                <div class="rvw-rating-card p-2 px-3 d-flex align-items-center justify-content-between">
                                    <span class="small fw-bold text-muted" id="starRatingLabel">Tap Stars To Rate</span>
                                    <div class="rvw-stars-v3">
                                        <input type="radio" name="stars" value="5" id="rating-5" checked><label for="rating-5" onclick="document.getElementById('starRatingLabel').textContent='5.0 Excellent!';"></label>
                                        <input type="radio" name="stars" value="4" id="rating-4"><label for="rating-4" onclick="document.getElementById('starRatingLabel').textContent='4.0 Very Good';"></label>
                                        <input type="radio" name="stars" value="3" id="rating-3"><label for="rating-3" onclick="document.getElementById('starRatingLabel').textContent='3.0 Average';"></label>
                                        <input type="radio" name="stars" value="2" id="rating-2"><label for="rating-2" onclick="document.getElementById('starRatingLabel').textContent='2.0 Below Average';"></label>
                                        <input type="radio" name="stars" value="1" id="rating-1"><label for="rating-1" onclick="document.getElementById('starRatingLabel').textContent='1.0 Poor';"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Text Area -->
                        <div class="col-12">
                            <div class="rvw-group">
                                <label class="rvw-lbl">YOUR DETAILED REVIEW <span class="text-danger">*</span></label>
                                <div class="rvw-input-group align-items-start">
                                    <span class="rvw-input-icon pt-3"><i class="bi bi-pencil-square"></i></span>
                                    <textarea class="form-control rvw-field rvw-area" name="desc" rows="3" placeholder="Describe packing quality, vehicle condition, timing, and staff behavior..." required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- File Upload Box -->
                        <div class="col-12">
                            <div class="rvw-dropzone p-3 text-center">
                                <label for="image" class="w-100 mb-0 cursor-pointer">
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <div class="rvw-dropzone-icon">
                                            <i class="bi bi-cloud-arrow-up-fill fs-3 text-red"></i>
                                        </div>
                                        <div class="text-start">
                                            <span class="fw-bold text-dark d-block">Attach Photo / Consignment Receipt <small class="text-muted fw-normal">(Optional)</small></span>
                                            <span class="small text-muted" id="rvwFileName">PNG, JPG or WEBP formats up to 5MB</span>
                                        </div>
                                    </div>
                                </label>
                                <input type="file" name="img" class="d-none" id="image" accept="image/*" onchange="document.getElementById('rvwFileName').textContent = this.files[0] ? 'Selected: ' + this.files[0].name : 'PNG, JPG or WEBP formats up to 5MB';">
                            </div>
                        </div>

                        <!-- Result & Action Buttons -->
                        <div class="col-12 text-center pt-2">
                            <div id="result" class="mb-3"></div>
                            <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                                <button id="submitbtn" type="submit" class="btn btn-submit-review-v3 flex-grow-1" style="max-width: 280px;">
                                    <span>SUBMIT YOUR REVIEW</span>
                                    <i class="bi bi-send-fill ms-2"></i>
                                </button>
                                <button onclick="document.getElementById('result').innerHTML=''; document.getElementById('rvwFileName').textContent = 'PNG, JPG or WEBP formats up to 5MB'; document.getElementById('starRatingLabel').textContent='Tap Stars To Rate';" type="reset" class="btn btn-reset-v3">
                                    <i class="bi bi-arrow-counterclockwise me-1"></i> Reset
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
function handleReviewFormSubmit(event) {
    if (event) event.preventDefault();

    var form = document.getElementById('reviewsform');
    var resultDiv = document.getElementById('result');
    var submitBtn = document.getElementById('submitbtn');

    if (!form) return false;

    var formData = new FormData(form);
    formData.append('is_ajax', '1');

    if (resultDiv) {
        resultDiv.innerHTML = '<div class="alert alert-info py-2 px-3 text-dark fw-bold mb-0"><i class="bi bi-hourglass-split me-2 text-danger"></i> Submitting your review...</div>';
    }

    if (submitBtn) submitBtn.disabled = true;

    fetch("<?php echo site_url('reviews/review') ?>", {
        method: "POST",
        body: formData,
        headers: {
            "X-Requested-With": "XMLHttpRequest"
        }
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        if (submitBtn) submitBtn.disabled = false;
        if (data && data.err === 0) {
            if (resultDiv) {
                resultDiv.innerHTML = "<div class='alert alert-success py-2 px-3 mb-0'><p class='text-success m-0 fw-bold'><i class='bi bi-check-circle-fill me-1'></i> Thank you! Your review was submitted successfully.</p></div>";
            }
            form.reset();
            var fileNameEl = document.getElementById('rvwFileName');
            var ratingLabelEl = document.getElementById('starRatingLabel');
            if (fileNameEl) fileNameEl.textContent = 'PNG, JPG or WEBP formats up to 5MB';
            if (ratingLabelEl) ratingLabelEl.textContent = 'Tap Stars To Rate';

            setTimeout(function() {
                window.location.reload();
            }, 1200);
        } else {
            if (resultDiv) {
                resultDiv.innerHTML = "<div class='alert alert-danger py-2 px-3 mb-0'>" + (data && data.msg ? data.msg : 'Failed to post review') + "</div>";
            }
        }
    })
    .catch(function(error) {
        console.error("Review Submit Error:", error);
        if (submitBtn) submitBtn.disabled = false;
        if (resultDiv) {
            resultDiv.innerHTML = '<div class="alert alert-danger py-2 px-3 mb-0">An error occurred while posting your review. Please try again later.</div>';
        }
    });

    return false;
}
</script>
