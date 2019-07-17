<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
<?php if ( is_front_page() ) : ?>

	<?php get_template_part( 'parts/content', 'home' ); ?>

<?php else: ?>

	<div class="content grid-container">
	
		<div class="inner-content grid-x grid-margin-x align-center REMOVEgrid-padding-x">
	
		    <main class="main small-12 medium-11 cell" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php endif; ?>

<?php if ( is_page('about') ) : ?>

	<?php get_template_part( 'parts/loop', 'staff-grid' ); ?>

<?php else: ?>
	
<?php endif; ?>

<?php get_footer(); ?>