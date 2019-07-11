<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

// Adjust the amount of rows in the grid
$grid_columns = 4; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="grid-x grid-margin-x grid-padding-x archive-grid" data-equalizer> <!--Begin Grid--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="small-6 medium-3 large-3 cell panel" data-equalizer-watch>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<?php $terms = get_the_terms( $post->ID , 'product_type' ); 
                    foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term, 'product_type' );
                        if( is_wp_error( $term_link ) )
                        continue;
                    echo '<a href="' . $term_link . '">' . $term->name . '</a>';
                    } 
                ?>

				<section class="featured-image" itemprop="text">
					<?php the_post_thumbnail('full'); ?>
				</section> <!-- end article section -->
			
				<header class="article-header">
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
					<?php //get_template_part( 'parts/content', 'byline' ); ?>		
					<?php if( get_field('part_number') ): ?>
						<h6>Part Number: <?php the_field('part_number'); ?></h6>
					<?php endif; ?>
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="text">
					<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?> 

					<a href="<?php the_permalink() ?>" class="button">Download Spec Sheet</a>
					<a href="<?php the_permalink() ?>" class="button">More Product Info</a>
				</section> <!-- end article section -->
								    							
			</article> <!-- end article -->
			
		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Grid --> 

<?php endif; ?>

