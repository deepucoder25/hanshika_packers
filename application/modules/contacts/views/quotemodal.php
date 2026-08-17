<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <div class="d-flex align-items-center gap-2 position-relative z-2">
                    <div class="modal-hdr-icon">
                        <i class="bi bi-lightning-charge-fill text-warning"></i>
                    </div>
                    <span class="modal-hdr-title">Get a Free Quote</span>
                </div>
                <button type="button" class="close position-relative z-2" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>

                <!-- Wavy Background Accent -->
                <div class="contact-hdr-wave">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" preserveAspectRatio="none">
                        <path d="M0,32L48,42.7C96,53,192,75,288,80C384,85,480,75,576,64C672,53,768,43,864,48C960,53,1056,75,1152,80C1248,85,1344,75,1392,70L1440,64L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z" fill="#003A6A" opacity="0.35"></path>
                        <path d="M0,64L48,69.3C96,75,192,85,288,80C384,75,480,53,576,48C672,43,768,53,864,64C960,75,1056,85,1152,85C1248,85,1344,75,1392,69.3L1440,64L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z" fill="#FF6A00" opacity="0.25"></path>
                    </svg>
                </div>
            </div>
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-person-badge"></i>
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-phone-vibrate"></i>
                                <input type="tel" class="form-control" name="phone" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-envelope-at"></i>
                                <input type="text" class="form-control" name="email" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                                <input type="text" class="form-control" name="mfrom" placeholder="From City">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-map-fill"></i>
                                <input type="text" class="form-control" name="mto" placeholder="To City">
                            </div>
                        </div>
                    </div>
                </div>
           <div class="form-group">
    <div class="form-icon">
        <i class="bi bi-chat-left-text"></i>
        <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Describe your relocation needs..."></textarea>
    </div>
</div>
                <div class="d-flex justify-content-center mt-2 contact-quote-gap">
                    <button id="submitbquotemodal" type="submit" class="theme-btn">Get My Free Quote <i class="bi bi-send-fill"></i></button>
                    <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="theme-btn">Clear Form</button>
                </div>
 
                <div id="resultquotemodal"></div>
            </form>
        </div>
    </div>
</div>