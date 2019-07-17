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

		<div class="grid-x align-center product-image-gallery">
			<div class="cell auto">
				<img class="product-image" id="main-product-image" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
			</div>

		<?php if( have_rows('additional_images') ): ?>
			<div class="cell shrink">

				<ul class="menu vertical product-thumbs align-center">
				<li><a class="product-thumb active" data-image="<?php the_post_thumbnail_url('full'); ?>"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>"></a></li>

				<?php while ( have_rows('additional_images') ) : the_row(); ?>
				    <?php $image = get_sub_field('product_image'); 
						if( !empty($image) ): 
							$url = $image['url'];
							$size = 'thumbnail';
							$thumb = $image['sizes'][ $size ];
						endif;
				     ?>

		     		<li><a class="product-thumb" data-image="<?php echo $url; ?>"><img src="<?php echo $thumb; ?>"></a></li>
					
				<?php endwhile; ?>

				</ul>

			</div>
		<?php else : ?>
		<?php endif; ?>

		</div>

		<?php the_content(); ?>

	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php 
		$file = get_field('spec_sheet');
		if( $file ) {
			$url = wp_get_attachment_url( $file );
		?>
			<a href="<?php echo $url; ?>" class="button download" target="_blank">Download Spec Sheet</a>
		<?php } ?>


		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
													
</article> <!-- end article -->