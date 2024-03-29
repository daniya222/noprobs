<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package No_Probs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  
	<link href="<?php echo get_template_directory_uri(); ?>/inc/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


	<header id="masthead" class="site-header">
	<section class="logo-section">
		<div class="container container-logo">
			<div class="row justify-content-between">
				<div class="col-md-4">
					<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_field('logo', 'option')['url']?>" class=""></a>
				
				</div>
				<div class="col-md-6 d-flex justify-content-end col-call-us">
					<div class="call-us">
						<span>CALL US:</span>
						<p><a href="tel:<?php the_field('phone','option') ?>"><?php the_field('phone','option') ?></a></p>

					</div>
					<div class="email-us">
						<span>EMAIL US</span>
						<p><a href="mailto:<?php the_field('email','option') ?>"><?php the_field('email','option') ?></a></p>

					</div>
				
				</div>
			</div>

		</div>
	</section>
	<section class="section-menu">
		
		<div class="container container-menu">
			<div class="row">
				<div class="col-md-12">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'services',
							)
						);
						?>
				</div>
			</div>

		</div>
	</section>
	<section class="mobile-menu-section">
		<div class="mobile-menu-container">
			<div>
					<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_field('logo', 'option')['url']?>" class=""></a>
			</div>
			<div class="icon">
				<div class="hamburger"></div>
				<div class="hamburger"></div>
				<div class="hamburger"></div>
			</div>
			

		</div>
		
		<div>
			<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'services',
							)
						);
			?>
		</div>


	</section>
		
	</header><!-- #masthead -->
