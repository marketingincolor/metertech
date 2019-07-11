<?php
/**
 * The template part for displaying related news items
 */
?>
<div class="videos-home" style="background-color:grey; text-align:center;">
	<div class="content grid-container" style="margin-bottom:0;">
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x">
	    	<div class="main small-12 cell" role="container">

				<h2>Related News Articles</h2>
				<div class="grid-x grid-margin-x">

				<?php 
					$args = array('category' => 'news', 'posts_per_page' => '2', 'post__not_in' => array($post->ID) );
					$newsQuery = new WP_Query($args);
				?>
				<?php if ( $newsQuery->have_posts() ) : ?>
					<?php while ( $newsQuery->have_posts() ) : 
						$newsQuery->the_post() ?>

					<div class="small-12 medium-6 cell">

		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<section class="featured-image" itemprop="text">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
				</section> <!-- end article section -->
			
				<header class="article-header">
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>		
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="text">
					<?php the_excerpt(); ?> 
					<a class="cta-button" href="<?php the_permalink(); ?>">Read Article</a>
				</section> <!-- end article section -->
								    							
			</article> <!-- end article -->
			
			
					</div>

					<?php endwhile;  wp_reset_postdata(); ?>
				<?php else : endif; ?>

				</div>

			</div>
		</div>
	</div>
</div>