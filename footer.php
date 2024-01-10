<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package No_Probs
 */

?>

	<footer id="colophon" class="site-footer">
		<section class="section-footer-menu">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3" data-aos="fade-left">
						<div class="logo-footer">
							<img height="42" src="<?php echo get_field('logo', 'option')['url']?>" class="">
						
						</div>
						<div class="text-footer">
							<?php echo get_field('text_footer', 'option')?>
						</div>
						<div class="d-flex align-items-center">
							<div style="margin-right:10px">
								<a href=""><img width="60" src="<?php echo get_template_directory_uri(); ?>/inc/img/fb.png" class="fb"></a>
							</div>
							<div style="">
								<a href=""><img height="55" src="<?php echo get_template_directory_uri(); ?>/inc/img/google2.png" class="google"></a>
							</div>
						</div>
						
					</div>
					<div class="col-md-6" data-aos="fade-left">
						<div class="row service-row">
							<div class="col-md-6 mtm-30">
								<span style="font-weight:600">Services</span>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'services',
									)
								);
								?>

							</div>
							<div class="col-md-6 mtm-30">
								<span style="font-weight:600">Contact</span>
								<ul class="menu">
									<li><a href="tel:<?php the_field('phone','option') ?>"><?php the_field('phone','option') ?></a></li>
									<li><a href="mailto:<?php the_field('email','option') ?>" style="color:#8CC3E1;"><?php the_field('email','option') ?></li>
									<li><?php the_field('location','option') ?></li>
									<li><?php the_field('operartional_time','option') ?></li>
									<li class="mtm-0" style="margin-top:45px"><a href="/privacy-policy">Privacy Policy</li>
								</ul>

							</div>
						</div>
					

					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container copy-container">
				<div class="row">
					<div class="col-md-12">
						<?php echo the_field('copyrights','option')?>

					</div>

				</div>

			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

</body>
</html>
