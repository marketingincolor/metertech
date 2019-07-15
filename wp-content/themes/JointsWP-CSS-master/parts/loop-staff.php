<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">
		<div class="content grid-container text-left">
			<div class="inner-content grid-x grid-margin-x">
				<div class="small-12 medium-4 cell">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<div class="small-12 medium-4 cell text-left">
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

				<?php if( get_field('staff_title') ): ?>
					<h2><?php the_field('staff_title'); ?></h2>
				<?php endif; ?>

				<?php if( get_field('staff_email') ): $shortcode = get_field('staff_email'); ?>

					<div class="reveal" id="contactModal" data-reveal>
						<?php echo do_shortcode( $shortcode ); ?>
						<button class="close-button" data-close aria-label="Close modal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<p class="nomargin"><button class="non-button" data-open="contactModal">Contact <?php the_title(); ?></button></p>

				<?php endif; ?>

				<?php if( get_field('staff_linkedin') ): ?>
					<p class="nomargin"><a href="<?php the_field('staff_linkedin'); ?>" target="_blank">Find me on LinkedIn!</a></p>
				<?php endif; ?>

			</div>
		</div>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<?php the_content(); ?>

	</section> <!-- end article section -->
						
	<footer class="article-footer">

	</footer> <!-- end article footer -->
													
</article> <!-- end article -->