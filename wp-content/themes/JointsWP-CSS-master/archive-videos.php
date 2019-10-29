<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
			
<?php get_template_part( 'parts/sub', 'header' ); ?>

	<div class="content videos grid-container">
	
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x">
		
		    <main class="main small-12 cell" role="main">
			    
		    	<header style="text-align:center;">
		    		<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
		    		<h5 style="margin:auto; margin-bottom:4em; width:70%;">MTW is committed to helping educate the users of its products. On this page we will post videos that assist our customers with the use of our products.</p>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
		
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-video-grid' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>