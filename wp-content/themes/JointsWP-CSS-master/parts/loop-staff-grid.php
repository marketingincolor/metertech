<?php
/**
 * The template part for displaying company staff members
 */
?>

<div class="content grid-container">
	<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x staff-grid">
	    <main class="main small-12 cell" role="main">



				<h2>Our Staff</h2>
				<div class="grid-x grid-margin-x">

				<?php 
					$args = array('post_type' => 'staff', 'posts_per_page' => '4' );
					$newsQuery = new WP_Query($args);
				?>
				<?php if ( $newsQuery->have_posts() ) : ?>
					<?php while ( $newsQuery->have_posts() ) : 
						$newsQuery->the_post() ?>

					<div class="small-12 medium-3 cell">

		
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


		</main> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->