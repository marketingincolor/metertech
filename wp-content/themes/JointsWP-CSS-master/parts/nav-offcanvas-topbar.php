<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<?php //if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
		<ul class="menu">
			<li><?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?></li>
			<!-- <li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li> -->
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-alt show-for-medium" style="flex:0 1 auto; margin-left:auto; -webkit-flex: 0 1 auto; -webkit-box-flex:0;">
		<ul class="medium-horizontal menu dropdown">
			<li class="menu-item menu-item-type-cta">
				<a href="/search" class="menu-item-cta" style="padding:0em 1em;">Search</a>
			</li>
		</ul>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>