<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

// Adjust the amount of rows in the grid
$grid_columns = 2; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div id="certification-grid" class="grid-x grid-margin-x NOgrid-padding-x archive-grid align-center certification-grid" data-equalizer> <!--Begin Grid--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="small-12 medium-5 cell panel" data-equalizer-watch>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">


				<div class="grid-x grid-margin-x">
					<div class="small-12 medium-shrink cell">
						<section class="featured-image" itemprop="text">
						<?php if( get_field('certification_document') ): ?>
							<a href="<?php the_field('certification_document'); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img class="type-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/mtw-pdf-icon-black.svg" /></a>
						<?php else: ?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img class="type-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/mtw-pdf-icon-black.svg" /></a>
						<?php endif; ?>
						</section> <!-- end article section -->
					</div>
					<div class="small-12 medium-auto cell">		
						<section class="entry-content" itemprop="text">
						<?php if( get_field('certification_document') ): ?>
							<h3 class="title"><?php the_title(); ?></h3>	
							<a href="<?php the_field('certification_document'); ?>" class="button view">View / Download PDF</a>
						<?php else: ?>
							<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
						<?php endif; ?>
						</section> <!-- end article section -->
					</div>
				</div>


			</article> <!-- end article -->
			
		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Grid --> 

<?php endif; ?>

