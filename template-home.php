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
        <div class="container banner-text h-100">
            <div class="row h-100">
              <div class="col-md-6 col-left">
                <div></div>
                <div class="margin-bottom-9-3"><h1><?php echo get_field('title_banner');?></h1></div>
                <div class="google-award">
                  <div>
                    <img width="60" src="<?php echo get_template_directory_uri(); ?>/inc/img/google.png">
                  </div>
                  <div>
                    <img width="98" src="<?php echo get_template_directory_uri(); ?>/inc/img/stars.png">
                    
                  </div>
                  <div class="padding-bottom-0-5">
                    <span class="number">4.9/</span>5.0
                    
                  </div>
                  <div class="rating">
                    Google Rating
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-banner-right">
                <div class="margin-bottom-3">
                  <?php the_content() ?>
                </div>
                <div class="button-holder">
                <?php if( have_rows('button') ):

                
                  while ( have_rows('button') ) : the_row();
                  $url = get_sub_field('button_url');
                  $class = get_sub_field('button_class');
                  $text = get_sub_field('button_text');

                   generate_button($url, $class, $text)
                ?> 
                

                 

                <?php  
                endwhile;

            

                

                endif;?>

                </div>

              </div>
            </div>      
        </div> 
    </div>
    
</section>

<?php

get_footer();
