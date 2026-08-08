<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>



<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- About Card -->
        <div class="pm-city-content-card">

          <!-- Eyebrow + Heading -->
          <div class="pm-city-section-eyebrow">Top Rated Relocation</div>
          <h2 class="pm-city-section-title">
            
            <span class="pm-city-accent"><?= $city ?></span>
       Packers and Movers
          </h2>
<div class='city-prose'>
       
<?php echo $htmlcontent;?>  
<div class="pm-city-map mt-2 mb-2">
<?php include 'city_map.php';?>
</div> 
</div>  

    <?php echo $htmlcontent1;?>   
    <?php echo $htmlcontent2;?>      
       <?php include 'city_reviews.php'?>

    <?php include 'city_faq.php'?>

      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR (col-lg-4) ============ -->
      <div class="col-lg-4">
        <?php include 'city_siderbar.php'; ?>
      </div>

      </div><!-- /col-lg-4 -->

    </div><!-- /row -->

    <!-- Dynamic Services Section based on City -->
    <?php 
    $allowed_cities = [
        // 'aurangabad', 'chandigarh', 'dhanbad', 'gwalior', 'hyderabad', 'jodhpur',
        // 'kota', 'meerut', 'navi mumbai', 'rajkot', 'siliguri', 'vijayawada',
        // 'ahmedabad', 'bangalore', 'chennai', 'faridabad', 'gurugram', 'indore',
        // 'jamshedpur', 'mumbai', 'ranchi', 'surat', 'visakhapatnam',
        // 'allahabad', 'bareilly', 'coimbatore', 'ghaziabad', 'howrah', 'jabalpur', 'ludhiana',
        // 'nagpur', 'pune', 'solapur', 'vadodara',
        // 'amritsar', 'bhopal', 'delhi', 'hubli-dharwad', 'jaipur', 'kolkata', 'madurai', 'nashik',
        // 'raipur', 'srinagar'
    ];
    
    if(in_array(strtolower(trim($city)), $allowed_cities)): 
    ?>
        <?php include 'city_service.php'; ?>
    <?php endif; ?>

  </div><!-- /container -->
</section>



