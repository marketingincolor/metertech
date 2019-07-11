<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

// Adjust the amount of rows in the grid
$grid_columns = 4; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="grid-x grid-margin-x NOgrid-padding-x archive-grid" data-equalizer> <!--Begin Grid--> 

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

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Grid --> 

<?php endif; ?>

