<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<?php get_template_part( 'parts/sub', 'header' ); ?>
			
<div class="content grid-container">

	<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x">
	
		<main class="main small-12 medium-10 medium-offset-1 cell" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php if (is_singular('products')) : ?>

		    		<?php get_template_part( 'parts/loop', 'product' ); ?>
		    		<?php get_template_part( 'parts/product', 'certifications' ); ?>

				<?php elseif (is_singular('videos')) : ?>

		    		<?php get_template_part( 'parts/loop', 'video' ); ?>

				<?php else : ?>

		    		<?php get_template_part( 'parts/loop', 'single' ); ?>
		    		
		    	<?php endif; ?>

		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php if ( is_singular('post') && in_category('news') ) : ?>

	<?php get_template_part( 'parts/related', 'news' ); ?>

<?php elseif ( is_singular('products') ) : ?>

	<?php get_template_part( 'parts/related', 'certifications' ); ?>

<?php endif; ?>

<?php get_footer(); ?>