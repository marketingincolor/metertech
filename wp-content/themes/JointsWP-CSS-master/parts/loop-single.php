<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<?php the_post_thumbnail('full'); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php if ( is_singular('post') && in_category('news') ) : ?>
		<?php
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
		    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="read-button">Back to News Feed</a>';
		}
		?>
		<?php endif; ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
													
</article> <!-- end article -->