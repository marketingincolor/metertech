<?php
/**
 * The template part for displaying company staff members
 */
?>
<div class="content grid-container">
	<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x staff-grid">
	    <main class="main small-12 cell text-center" role="main">

				<h1 class="content-title">Our Staff</h1>
				<div class="grid-x grid-margin-x align-center">

				<?php 
					$args = array('post_type' => 'staff', 'posts_per_page' => '12' );
					$newsQuery = new WP_Query($args);
				?>
				<?php if ( $newsQuery->have_posts() ) : ?>
					<?php while ( $newsQuery->have_posts() ) : 
						$newsQuery->the_post() ?>

					<div class="small-8 medium-3 cell">
		
						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
						
							<section class="staff-image" itemprop="text">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
							</section> <!-- end article section -->
											
							<section class="staff-content" itemprop="text">
								<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<?php //the_excerpt(); ?>

								<?php if( get_field('staff_title') ): ?>
								    <h4><?php the_field('staff_title'); ?></h4>
								<?php endif; ?>
								<a href="<?php the_permalink(); ?>" class="cta-button">Read Bio</a>
							</section> <!-- end article section -->
											    							
						</article> <!-- end article -->
			
					</div>

					<?php endwhile;  wp_reset_postdata(); ?>
				<?php else : endif; ?>

				</div>

		</main> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->