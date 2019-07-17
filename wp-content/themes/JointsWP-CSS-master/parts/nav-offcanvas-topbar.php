<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li><?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?></li>
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
		<ul class="mob-menu" style="float:right; list-style:none; margin:0.75em; max-width:40px;">
			<li><a data-toggle="off-canvas"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mtw-mob-nav-menu-icon.svg"></a></li>
		</ul>
	</div>
</div>