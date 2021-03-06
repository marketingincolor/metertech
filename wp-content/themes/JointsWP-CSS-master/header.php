<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>
<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Gothic+A1:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/b5fdac7867.css">
		<!-- <script src="https://use.fontawesome.com/b5fdac7867.js"></script> -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/owl.carousel.min.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/owl.theme.default.min.css" />
		<script>templateURL = '<?php bloginfo("template_directory"); ?>';</script>
		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">
					<div class="grid-container">		
						<!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
						<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
						<div class="top-bar-cta show-for-medium">
							<a href="<?php the_field('billing_payment_link', 'option'); ?>" class="button pay-cta" target="_blank">Pay Your Bill</a><a href="<?php echo get_the_permalink(get_field('contact_us_link', 'option')); ?>" class="button contact-cta">Contact Us</a>
						</div>
						<div class="top-bar-mob-cta hide-for-medium">
							<a href="<?php the_field('billing_payment_link', 'option'); ?>" class="button pay-cta" target="_blank">Pay Your Bill</a><a href="<?php echo get_the_permalink(get_field('contact_us_link', 'option')); ?>" class="button contact-cta">Contact Us</a>
						</div>
	 				</div>
				</header> <!-- end .header -->