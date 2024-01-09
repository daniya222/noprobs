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
              <div class="col-md-6 col-left ">
                <div></div>
                <div class="margin-bottom-9-3" data-aos="fade-right"><h1><?php echo get_field('title_banner');?></h1></div>
                <div class="google-award" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
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
                <div class="margin-bottom-3" data-aos="fade-left">
                  <?php the_content() ?>
                </div>
                <div class="button-holder" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
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
$second = get_field('second_section');

?>
<section class="second-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 padding-right-2 d-flex flex-column justify-content-center">

      <div class="subtext-second" data-aos="fade-right">
        <?php echo $second['subtext']?>
      </div>
      <div class="title-second" data-aos="fade-right">
        <?php echo $second['title']?>
      </div>
      <div class="second-content" data-aos="fade-right">
        <?php echo $second['content'] ?>
      </div>
       <div class="button-holder padding-top-30" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
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
      <div class="col-md-6 col-right-second" data-aos="fade-left">
         <?php            
          $video_poster = $second['image_video'];
          $video_file = $second['video'];

          if ($video_poster && $video_file) {
              echo '<video controls poster="' . $video_poster['url'] . '">';
              echo '<source src="' . $video_file['url'] . '" type="' . $video_file['mime_type'] . '">';
              echo '</video>';
          } ?>

      </div>
    
    </div>
  </div>
</section>
<?php
$third= get_field('third_section');

?>
<section class="position-relative third-section">
  <div class="banner-holder">
        <div class="image-cover full-size center-bottom">
            <img src="<?php echo $third['bg']['url'];?>">
        </div>    
  </div>
  <div class="third-continer-holder position-relative">
        <div class="container">
          <div class="row padding-bottom-62">
            <div class="col-md-6 position-relative">
              <div class="third-title" data-aos="fade-right"><?php echo $third['title'];?></div>
              <img class="third-logo" data-aos="fade-down" width="522" src="<?php echo $third['logo']['url'];?>">

            </div>
            <div class="col-md-6 third-section-text">
              <div data-aos="fade-left"><?php echo $third['content'];?></div>
              
            </div>
            <div class="row border-top w-100" style="margin-top:30px;padding-top:30px">

            <?php
            $url2 = $third['button_url'];
            $text2 = $third['button_text'];
            generate_button($url2, "btn-secondary",$text2)?>

            </div>

          </div>
              
        </div> 
    </div>
    
</section>
<?php
$fourth = get_field('fourth_section');
 ?>
<section class="fourth-section">
  <div class="container">
    <div class="row justify-content-between align-items-end padding-bottom-69">
      <div class="col-md-5">
        <div class="subtext-second" data-aos="fade-right">
          <?php echo $fourth['subtext']?>
        </div>
        <div class="fourth-title" data-aos="fade-right">
          <?php echo $fourth['title']?>
        </div>
      </div>
      <div class="col-md-5">
        <div class="fourth-text" data-aos="fade-left">
          <?php echo $fourth['content']?>
        </div>
      </div>

    </div>
    <div class="row">

    </div>
  </div>

</section>
<section class="fifth-section">
  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/or.png">


</section>
<?php

get_footer();
