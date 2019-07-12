<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

<?php get_template_part( 'parts/sub', 'header' ); ?>
			
	<div class="content grid-container">
	
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x">
		
		    <main class="main small-12 cell" role="main">
			    
		    	<header>
		    		<h1 class="page-title">
		    			<?php if (is_category('news')) : ?>
						The Latest News from MTW
		    			<?php else : ?>	
		    			<?php the_archive_title();?>
		    			<?php endif; ?>
		    		</h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
		
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<?php if (is_category('news')) : ?>
					<?php get_template_part( 'parts/loop', 'archive-news-grid' ); ?>
					
					<?php else : ?>
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
					<?php endif; ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>