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
            <div class="col-md-12" style="margin-top:30px;padding-top:30px;text-align:center" >
              <div class="table-bottom-third" data-aos="fade-up"><?php echo $third['content_bottom']?></div>
              <div data-aos="fade-down">
                 <?php
                  $url2 = $third['button_url'];
                  $text2 = $third['button_text'];
                  generate_button($url2, "btn-secondary",$text2)?>


              </div>
             
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
      <?php 
      $args = array(
          'post_type' => 'post', 
          'posts_per_page' => -1, 
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) {
          $count = 0; 
          while ($query->have_posts()) {
              $query->the_post();
              $count++;
            
              $thumbnail = get_the_post_thumbnail_url();
              $title = get_the_title();
              $excerpt = get_the_excerpt();
              $article_number = sprintf('%02d', $count);
              if (strlen($excerpt) > 200) {
                  $excerpt = substr($excerpt, 0, 200) . '...';
              }

          
              echo '<div class="col-md-4 col-post position-relative" data-aos="fade-left"> ';
              if ($thumbnail) {
                  echo '<div class="post-thumbnail"> <div class="image-cover full-size center-bottom">
                    <img src='.esc_url($thumbnail).'>
                </div> </div>';
              }
              echo '<a href="'.get_the_permalink().'"><div class="text title"><div class="article-num">'.$article_number.'</div><div><h2 class="post-title">' . $title . '</h2>';
              echo '<div class="post-excerpt">' . $excerpt . '</div></div></div></a>';
              echo '</div>';
          }
          wp_reset_postdata(); 
            } else {
            }
      
      ?>

    </div>
  </div>

</section>
<?php
$fifth = get_field('fifth_section');
 ?>
<section class="fifth-section position-relative">
  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/or.png" class="or">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-6">
        <div class="fifth-subtext" data-aos="fade-right">
          <?php echo $fifth['subtext']?>
        </div>
        <div class="fifth-title" data-aos="fade-right">
          <?php echo $fifth['title']?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="text-fifth" data-aos="fade-left">
          <?php echo $fifth['content']?>
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
    </div>

  </div>


</section>

<?php
$sixth= get_field('sixth_section');
 ?>
<section class="sixth-section position-relative">
  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/or2.png" class="or2">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-5">
        <div class="sixth-subtext" data-aos="fade-right">
          <?php echo $sixth['subtext']?>
        </div>
        <div class="sixth-title padding-top-20" data-aos="fade-right">
          <?php echo $sixth['title']?>
        </div>
        <div class="fourth-text padding-top-20 padding-bottom-16" data-aos="fade-right">
          <?php echo $sixth['content']?>
        </div>
        <div class="contact-footer">
          <div class="contact-item d-flex align-items-center">
            <div class="icon-footer">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M4 4.00049H20C21.1046 4.00049 22 4.89592 22 6.00049V18.0005C22 19.1051 21.1046 20.0005 20 20.0005H4C2.89543 20.0005 2 19.1051 2 18.0005V6.00049C2 4.89592 2.89543 4.00049 4 4.00049ZM13.65 15.4505L20 11.0005V8.90049L12.65 14.0505C12.2591 14.3218 11.7409 14.3218 11.35 14.0505L4 8.90049V11.0005L10.35 15.4505C11.341 16.1432 12.659 16.1432 13.65 15.4505Z" fill="#1675ED"/>
              </svg>
            </div>
            <div>
              <a href="mailto:<?php the_field('email','option') ?>"><?php the_field('email','option') ?></a>
            </div>
          </div>

          <div class="contact-item d-flex align-items-center">
            <div class="icon-footer">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 21.0003C15.3463 20.9988 13.7183 20.5901 12.26 19.8103L11.81 19.5603C8.70075 17.8886 6.15169 15.3395 4.48 12.2303L4.23 11.7803C3.42982 10.3137 3.00713 8.67097 3 7.00027V6.33027C2.99958 5.79723 3.21196 5.28607 3.59 4.91027L5.28 3.22027C5.44413 3.05487 5.67581 2.97515 5.90696 3.00453C6.13811 3.03391 6.34248 3.16907 6.46 3.37027L8.71 7.23027C8.93753 7.62316 8.87183 8.12003 8.55 8.44027L6.66 10.3303C6.50304 10.4855 6.46647 10.7253 6.57 10.9203L6.92 11.5803C8.17704 13.9087 10.0893 15.8175 12.42 17.0703L13.08 17.4303C13.275 17.5338 13.5148 17.4972 13.67 17.3403L15.56 15.4503C15.8802 15.1285 16.3771 15.0628 16.77 15.2903L20.63 17.5403C20.8312 17.6578 20.9664 17.8622 20.9957 18.0933C21.0251 18.3245 20.9454 18.5562 20.78 18.7203L19.09 20.4103C18.7142 20.7883 18.203 21.0007 17.67 21.0003H17Z" fill="#1675ED"/>
              </svg>
              
            </div>
            <div>
              <a href="tel:<?php the_field('phone','option') ?>"><?php the_field('phone','option') ?></a>
            </div>
          </div>
            
          <div class="contact-item d-flex align-items-center">
            <div class="icon-footer">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.0002 1.99951C8.00619 1.99951 4.7569 5.24881 4.7569 9.24271C4.7569 14.1993 11.2389 21.4758 11.5149 21.7831C11.7741 22.0718 12.2267 22.0713 12.4855 21.7831C12.7614 21.4758 19.2434 14.1993 19.2434 9.24271C19.2433 5.24881 15.9941 1.99951 12.0002 1.99951ZM12.0002 12.887C9.99068 12.887 8.35592 11.2522 8.35592 9.24271C8.35592 7.23326 9.99072 5.59849 12.0002 5.59849C14.0096 5.59849 15.6444 7.2333 15.6444 9.24275C15.6444 11.2522 14.0096 12.887 12.0002 12.887Z" fill="#1675ED"/>
              </svg>
            </div>
            <div data-aos="fade-left">
              <?php the_field('location','option') ?>
            </div>


          </div>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="title-schedule">
          Schedule a job

        </div>
        <div data-aos="fade-right">
          <?php echo do_shortcode('[contact-form-7 id="d7db3ff" title="Contact form 1"]') ?>
        </div>
      </div>
       

      
    </div>

  </div>


</section>
<?php

get_footer();
