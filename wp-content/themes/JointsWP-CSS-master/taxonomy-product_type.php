<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
$uri = $_SERVER['REQUEST_URI'];
$the_tax = basename($uri);
get_header(); ?>
			
<?php get_template_part( 'parts/sub', 'header' ); ?>

	<div class="content grid-container">
	
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x product-grid">
		
		    <main class="main small-12 cell" role="main">

		    	<header>
		    		<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
		<?php //var_dump($wp_query->request);

		$tax_query = new WP_Query( array(
		    'post_type' => 'products',
		    'posts_per_page' => -1,
		    'tax_query' => array(
		    	array(
		    		'taxonomy' => 'product_type',
		    		'field' => 'slug',
		    		'terms' => $the_tax,
		    	),
		    ),
		    'orderby' => array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
		    'meta_key' => 'mtw_product'
		) );
		?>

		    	<?php if ($tax_query->have_posts()) : while ($tax_query->have_posts()) : $tax_query->the_post(); ?>
		    	<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->

					<?php //get_template_part( 'parts/loop', 'archive-product-grid' ); ?>


					<?php $grid_columns = 4; ?>

					<?php if( 0 === ( $tax_query->current_post  )  % $grid_columns ): ?>

					    <div id="products-grid" class="grid-x grid-margin-x NOgrid-padding-x archive-grid" data-equalizer> <!--Begin Grid--> 

					<?php endif; ?> 

							<!--Item: -->
							<div class="small-6 medium-3 large-3 cell panel" data-equalizer-watch>
							
									<?php $terms = get_the_terms( $post->ID , 'product_type' ); 
					                    foreach ((array) $terms as $term ) {
					                        $term_link = get_term_link( $term, 'product_type' );
					                        //if( is_wp_error( $term_link ) )
					                        //continue;
					                    	echo '<img class="type-icon" src="'. get_template_directory_uri() .'/assets/images/mtw-type-ico-' . $term->slug . '.png" />';
					                    } 
					                ?>
								
								<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

									<section class="featured-image" itemprop="text">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
									</section> <!-- end article section -->
								
									<header class="article-header">
										<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
										<?php //get_template_part( 'parts/content', 'byline' ); ?>		
										<?php if( get_field('part_number') ): ?>
											<h6>Part Number: <?php the_field('part_number'); ?></h6>
										<?php endif; ?>
									</header> <!-- end article header -->	
													
									<section class="entry-content" itemprop="text">
									<?php 
									$file = get_field('spec_sheet');
									if( $file ) {
										$url = wp_get_attachment_url( $file );
									?>
										<a href="<?php echo $url; ?>" class="button download">Download Spec Sheet</a>
									<?php } ?>

										<a href="<?php the_permalink() ?>" class="button info">More Product Info</a>
									</section> <!-- end article section -->
													    							
								</article> <!-- end article -->
								
							</div>

					<?php if( 0 === ( $tax_query->current_post + 1 )  % $grid_columns ||  ( $tax_query->current_post + 1 ) ===  $tax_query->post_count ): ?>

					   </div>  <!--End Grid --> 

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