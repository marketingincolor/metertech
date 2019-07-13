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


<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">

<div class="nav-search">
<!-- <label class="screen-reader-text" for="s">Search for:</label> -->
<input type="text" value="" name="s" id="s" placeholder="Search Site" />
<input class="nav-search-submit" type="submit" id="searchsubmit" value="Search" />
</div>

<div class="nav-sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mtw-search-icon.png"></div>

</form>
				<?php //get_search_form(); ?>

				<!-- <a href="/search" class="menu-item-cta" style="padding:0em 1em;">Search</a> -->
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