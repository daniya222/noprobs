<?php
/* 
  Template Name: Home
  Template Post Type: page
*/
get_header();
?>
<?php
$banner = get_field('banner');
$bannerUrl = $banner['url'];
?>
<section class="position-relative banner-section">
  <div class="banner-holder">
        <div class="image-cover full-size center-bottom">
            <img src="<?php echo $bannerUrl;?>">
        </div>    
  </div>
  <div class="banner-continer-holder position-relative">
        <div class="container">
            <div class="row">
            </div>      
        </div> 
    </div>
</section>
<?php

get_footer();
