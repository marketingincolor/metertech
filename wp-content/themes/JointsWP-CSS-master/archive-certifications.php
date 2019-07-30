<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
			
	<div class="content grid-container">
	
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x">
		
		    <main class="main small-12 cell" role="main">
			    
			    <div class="grid-x grid-margin-x grid-padding-x">
			    	<div class="small-12 medium-8 medium-offset-2">
				    	<header>
				    		<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
							<?php //the_archive_description('<div class="taxonomy-description">', '</div>');?>
							<?php if( get_field('certifications_header', 'options') ): ?>
								<?php the_field('certifications_header', 'options'); ?>
							<?php endif; ?>
				    	</header>
				    </div>
				</div>



<?php
    // get all the categories from the database
    $cats = get_terms( 'certification_type', array('orderby' => 'name', 'order' => 'DESC') );
 
    // loop through the categories
    foreach ($cats as $cat) {
        // setup the category ID
        $cat_id = $cat->term_id;
        // Make a header for the category
        echo "<h2 style='text-align:center; margin:2rem 0rem;'>".$cat->name."</h2>";
        // create a custom wordpress query
 
        query_posts(array( 
            'post_type' => 'certifications',
            'showposts' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'certification_type',
                    'terms' => $cat_id,
                    'field' => 'term_id',
                )
            ),
            )
        );
 
        // start the wordpress loop!
        if (have_posts()) : while (have_posts()) : the_post(); ?>
 
            <!-- <div class='special_offer'>
                <h3><?php the_title(); ?></h3>
                <span class='offer_text'><?php the_content(); ?></span>
            </div> -->
            <?php get_template_part( 'parts/loop', 'archive-cert-grid' ); ?>
 
    <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
<?php } // done the foreach statement ?>














		    	<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php //get_template_part( 'parts/loop', 'archive-cert-grid' ); ?>
				    
				<?php //endwhile; ?>	

					<?php //joints_page_navi(); ?>
					
				<?php //else : ?>
											
					<?php //get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php //endif; ?>

		
			</main> <!-- end #main -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>