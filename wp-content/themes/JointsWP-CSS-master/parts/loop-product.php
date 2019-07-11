<?php
/**
 * Template part for displaying a single PRODUCT post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<h4>Part Number: <?php the_field('part_number'); ?></h4>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php 
		$file = get_field('spec_sheet');
		if( $file ) {
			$url = wp_get_attachment_url( $file );
		?>
			<a href="<?php echo $url; ?>" class="button download">Download Spec Sheet</a>
		<?php } ?>

		
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
													
</article> <!-- end article -->