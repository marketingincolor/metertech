<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */
$thetype = get_post_type($post_ID);
// Adjust the amount of rows in the grid
$grid_columns = 4; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="grid-x grid-margin-x grid-padding-x archive-grid" data-equalizer> <!--Begin Grid--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="small-12 medium-3 cell panel" xdata-equalizer-watch>
		<?php //$thetype = get_post_type($post_ID);?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<section class="featured-image" itemprop="text">

				<?php if ( in_array( $thetype, array('products', 'staff')) ) : ?>
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumb'); ?></a>
				<?php elseif ( $thetype=='certifications' ) : ?>
					<a href="<?php the_permalink() ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
				<?php elseif ( $thetype=='videos' ) : ?>
					<a href="<?php the_permalink() ?>"><i class="fa fa-file-video-o" aria-hidden="true"></i></a>
				<?php elseif ( $thetype=='page' ) : ?>
					<a href="<?php the_permalink() ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
				<?php elseif ( $thetype=='post' ) : ?>
					<a href="<?php the_permalink() ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
				<?php else : ?>
				<?php endif; ?>

				</section> <!-- end article section -->
			
				<header class="article-header">
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>		
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="text">

				<?php if ( $thetype=='products' ) : ?>
					<a class="read-button" href="<?php the_permalink(); ?>">See Product</a>
				<?php elseif ( $thetype=='staff' ) : ?>
					<a class="read-button" href="<?php the_permalink(); ?>">Read Bio</a>
				<?php elseif ( $thetype=='certifications' ) : ?>
					<a class="read-button" href="<?php the_permalink(); ?>">View Certification</a>
				<?php elseif ( $thetype=='videos' ) : ?>
					<a class="read-button" href="<?php the_permalink(); ?>">View Video</a>
				<?php elseif ( $thetype=='post' ) : ?>
					<a class="read-button" href="<?php the_permalink(); ?>">Read Article</a>
				<?php elseif ( $thetype=='page' ) : ?>
					<a class="read-button" href="<?php the_permalink(); ?>">Visit Page</a>
				<?php else : ?>
					<a class="read-button" href="<?php the_permalink(); ?>">View</a>
				<?php endif; ?>

				</section> <!-- end article section -->
								    							
			</article> <!-- end article -->
			
		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Grid --> 

<?php endif; ?>

