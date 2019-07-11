<?php
/**
 * Template part for displaying a single VIDEO post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<?php //the_post_thumbnail('full'); ?>

		<?php
		// get iframe HTML
		$iframe = get_field('youtube_video');
		// use preg_match to find iframe src
		preg_match('/src="(.+?)"/', $iframe, $matches);
		$src = $matches[1];
		// add extra params to iframe src
		$params = array(
		    'controls'    => 0,
		    'hd'        => 1,
		    'autohide'    => 1
		);
		$new_src = add_query_arg($params, $src);
		$iframe = str_replace($src, $new_src, $iframe);
		// add extra attributes to iframe html
		$attributes = 'frameborder="0"';
		$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
		// echo $iframe
		echo $iframe;
		?>

		<?php the_content(); ?>

	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
													
</article> <!-- end article -->