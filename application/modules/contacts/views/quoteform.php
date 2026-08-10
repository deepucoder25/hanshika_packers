<div class="hero-form-card" itemscope itemtype="https://schema.org/QuoteAction">
  
  <!-- Red Header Banner -->
  <div class="hero-form-header">
    <div class="form-header-icon">
      <i class="bi bi-file-earmark-text-fill"></i>
    </div>
    <div class="form-header-text">
      <span>REQUEST A FREE</span>
      <strong>MOVING QUOTE</strong>
    </div>
  </div>

  <!-- White Form Body -->
  <div class="hero-form-body">
    <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
      
      <div class="row g-2">
        <!-- Name -->
        <div class="col-6">
          <div class="form-group-wrap">
            <i class="bi bi-person field-icon"></i>
            <input type="text" name="name" class="hero-form-input" placeholder="Your Name">
          </div>
        </div>
        
        <!-- Phone -->
        <div class="col-6">
          <div class="form-group-wrap">
            <i class="bi bi-telephone field-icon"></i>
            <input type="tel" name="phone" class="hero-form-input" placeholder="Mobile Number">
          </div>
        </div>

        <!-- Email -->
        <div class="col-6">
          <div class="form-group-wrap">
            <i class="bi bi-envelope field-icon"></i>
            <input type="email" name="email" class="hero-form-input" placeholder="Email Address">
          </div>
        </div>

        <!-- Type of Move -->
        <div class="col-6">
          <div class="form-group-wrap">
            <i class="bi bi-box-seam field-icon"></i>
            <select name="mtype" class="hero-form-select">
              <option value="" disabled selected>Type of Move</option>
              <option>Household Relocation</option>
              <option>Office Relocation</option>
              <option>Car/Bike Shifting</option>
              <option>Warehousing &amp; Storage</option>
            </select>
          </div>
        </div>

        <!-- Moving From -->
        <div class="col-6">
          <div class="form-group-wrap">
            <i class="bi bi-geo-alt field-icon"></i>
            <input type="text" name="mfrom" class="hero-form-input" value="<?= @$city ?>" placeholder="From Location">
          </div>
        </div>

        <!-- Moving To -->
        <div class="col-6">
          <div class="form-group-wrap">
            <i class="bi bi-geo-alt-fill field-icon"></i>
            <input type="text" name="mto" class="hero-form-input" placeholder="To Location">
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn-submit-hero-quote">
        GET A QUOTE NOW <i class="bi bi-arrow-right ms-2"></i>
      </button>

      <!-- Security Note -->
      <div class="form-security-note">
        <i class="bi bi-lock-fill me-1"></i> Your information is safe with us.
      </div>

      <div id="quoteformresults"></div>
    </form>
  </div>

</div>