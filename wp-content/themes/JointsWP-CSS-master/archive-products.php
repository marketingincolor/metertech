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
		
				<div class="product-filter grid-x grid-margin-x align-center text-center">
					<div class="small-12 medium-5 cell">
						<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
							<div class="product-search">
							<input type="text" value="" name="s" id="s" placeholder="Search Product Name, Categories, or Specs" style="width:80%; float:left;" />
							<input type="hidden" value="1" name="sentence" />
							<input type="hidden" value="products" name="post_type" />
							<input type="hidden" name="product_type" value="electric,gas,fittings,heat,water" />
							<input class="product-search-submit button contact-cta" type="submit" id="searchsubmit" value="Search" />
							</div>
						</form>

					</div>
					<div class="small-12 medium-1 cell"> OR </div>
					<div class="small-12 medium-5 cell">

						<form>
						  <div class="grid-x">
								<div class="small-8 cell">
									
										<select class="" name="products" id="products-select">
											<option value="all" selected>Filter By</option>

											<?php
												$terms = get_terms( array(
												    'taxonomy' => 'product_type',
												    'hide_empty' => false,
												));
												foreach ($terms as $term) {
											?>
																
											<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
																
										  <?php } ?>
										</select>
									
								</div>
								<div class="small-4 cell">
									<button id="filter-products" class="button contact-cta" type="submit">Filter Products</button>
								</div>
						  </div>
						</form>

					</div>
				</div>













		    	<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php //get_template_part( 'parts/loop', 'archive-product-grid' ); ?>
				    

    <div id="products-grid" class="grid-x grid-margin-x NOgrid-padding-x archive-grid" data-equalizer> <!--Begin Grid--> 

	<?php 
	$the_query = new WP_Query( array(
	    'post_type' => 'products',
	    'posts_per_page' => 12,
	    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	    'orderby' => array( 'meta_value' => 'DESC', 'date' => 'DESC' ),
	    'meta_key' => 'mtw_product'
	) );
	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

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



   <!-- </div> -->  <!--End Grid --> 



				<?php endwhile; ?>	


				<?php
					$big = 999999999; // This needs to be an unlikely integer
					$paginate_links = paginate_links( array(
						'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link( $big ) ) ),
						'current' => max( 1, get_query_var( 'paged' ) ),
						'total' => $the_query->max_num_pages,
						'mid_size' => 5,
						'prev_next' => true,
					    'prev_text' => __( '&laquo;', 'jointswp' ),
					    'next_text' => __( '&raquo;', 'jointswp' ),
						'type' => 'list',
					) );
					$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
					$paginate_links = str_replace( '<li><span class="page-numbers dots">', "<li><a href='#'>", $paginate_links );
					$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'>", $paginate_links );
					$paginate_links = str_replace( '</span>', '</a>', $paginate_links );
					$paginate_links = str_replace( "<li><a href='#'>&hellip;</a></li>", "<li><span class='dots'>&hellip;</span></li>", $paginate_links );
					$paginate_links = preg_replace( '/\s*page-numbers/', '', $paginate_links );
					// Display the pagination if more than one page is found.
					if ( $paginate_links ) {
						echo '<div class="page-navigation">';
						echo $paginate_links;
						echo '</div><!--// end .pagination -->';
					}
				?>


				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>



</div> 



		
			</main> <!-- end #main -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>