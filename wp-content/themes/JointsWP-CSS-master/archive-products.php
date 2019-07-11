<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
			
<?php get_template_part( 'parts/sub', 'header' ); ?>

	<div class="content grid-container">
	
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x product-grid">
		
		    <main class="main small-12 cell" role="main">
			    
		    	<header>
		    		<h1 class="page-title"><?php //post_type_archive_title(); ?>Our Products</h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
		
				<div class="product-filter grid-x grid-margin-x text-center">
					<div class="small-12 medium-5 cell">search</div>
					<div class="small-12 medium-2 cell"> OR </div>
					<div class="small-12 medium-5 cell">filter</div>
				</div>
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-product-grid' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>