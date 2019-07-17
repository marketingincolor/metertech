<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>

		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/MTW-Logo_Horizontal-White.png" width="222" height="66" class="" alt="Meter Tech Werks" style="padding:1em 0em 1em .625em;">

		<ul class="mob-menu" style="float:right; list-style:none; margin:0.75em; max-width:40px;">
			<li><a data-toggle="off-canvas"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mtw-mob-nav-close-icon.svg"></a></li>
		</ul>

	<br clear="both">
	<?php joints_off_canvas_nav(); ?>
	<br clear="both">

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">

<div class="nav-search" style="opacity:unset; width:50%; margin:auto; position:relative; background:#FFF; height:40px; margin-bottom:3em;">
<input type="text" value="" name="s" id="s" placeholder="Search Site" />
<input class="nav-search-submit" type="submit" id="searchsubmit" value="Search" />
</div>

</form>

	<div class="top-bar-mob-cta">
		<a href="<?php the_field('billing_payment_link', 'option'); ?>" class="button pay-cta" target="_blank">Pay Your Bill</a><a href="<?php the_field('contact_us_link', 'option'); ?>" class="button contact-cta">Contact Us</a>
	</div>

</div>
