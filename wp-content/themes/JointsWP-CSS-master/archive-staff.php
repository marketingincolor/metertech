<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
			
	<div class="grid-container sub-header hide-for-small-only">
		<div class=" grid-x grid-margin-x grid-padding-x align-spaced">

			<div class="breadcrumb small-12 column">
			<?php //if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
			</div>

		</div>
	</div>
			
	<?php get_template_part( 'parts/loop', 'staff-grid' ); ?>

<?php get_footer(); ?>

