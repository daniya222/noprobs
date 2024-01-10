<?php

get_header();
?>
<?php
$banner = get_field('hero');
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
            <div class="row h-100 align-items-center">
						<div class="col-md-8">
								<div><h1 class="fourth-title" style="color:var(--white)"><?php the_title() ?></h1></div>

								

								

						</div>
						
              
            </div>      
        </div> 
    </div>
    
</section>
<section class="section-post">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="font-author" style="">By: <?php echo the_field('author'); ?></div>
				<div class="fourth-text"><?php the_content() ?></div>
			</div>

		</div>
	</div>
</section>



<?php

get_footer();
