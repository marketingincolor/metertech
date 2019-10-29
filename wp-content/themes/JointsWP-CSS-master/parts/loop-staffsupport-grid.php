<?php
/**
 * The template part for displaying company support staff members
 */
?>
<div class="content grid-container">
	<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x staff-grid">
	    <main class="main small-12 cell text-center" role="main">

				<h1 class="content-title">Our Support Team</h1>
				<div class="grid-x grid-margin-x align-center">

				<?php 
					$args = array('post_type' => 'staff', 'posts_per_page' => '12', 'meta_key' => 'staff_support', 'meta_value' => 1 );
					$supQuery = new WP_Query($args);
				?>
				<?php if ( $supQuery->have_posts() ) : ?>
					<?php while ( $supQuery->have_posts() ) : 
						$supQuery->the_post() ?>

					<div class="small-10 medium-3 cell">
		
						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
						
							<section class="support-content" itemprop="text">
								<h3 class="title"><?php the_title(); ?></h3>
							<?php if( get_field('staff_title') ): ?>
							    <h4><?php the_field('staff_title'); ?></h4>
							<?php endif; ?>
								<button class="cta-button" data-open="staffModal<?php echo $post->ID;?>">Read More</button>
							</section> <!-- end article section -->

							<div class="reveal" id="staffModal<?php echo $post->ID;?>" data-reveal>
								<h3><?php the_title(); ?></h3>
							<?php if( get_field('staff_title') ): ?>
							    <h4><?php the_field('staff_title'); ?></h4>
							<?php endif; ?>
								<p><?php the_content(); ?></p>
								<button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
											    							
						</article> <!-- end article -->
			
					</div>

					<?php endwhile;  wp_reset_postdata(); ?>
				<?php else : endif; ?>

				</div>

		</main> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->