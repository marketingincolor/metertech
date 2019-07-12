<?php
/**
 * The template part for displaying custom homepage content
 */
?>
<!-- <div class="hero" style="background-color:green; text-align:center;">
	<h2>HERO CONTAINER SLIDER</h2>
	<h2>HERO CONTAINER SLIDER</h2>
	<h2>HERO CONTAINER SLIDER</h2>
	<h2>HERO CONTAINER SLIDER</h2>
	<h2>HERO CONTAINER SLIDER</h2>
</div> -->


<?php get_template_part( 'parts/home', 'slider'); ?>


<div class="products-home" style="text-align:center;">
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x">
	    	<div class="main small-12 cell" role="container">

				<div class="grid-x grid-padding-x grid-padding-y align-center">
				<?php
				$categories = get_categories( array(
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
				    'orderby' => 'name',
				    'order'   => 'ASC'
				) );
				 
				foreach( $categories as $category ) {
				    //$category_link = sprintf( 
				        //'<a href="%1$s" alt="%2$s">%3$s</a>',
				        //'<a href="%1$s" alt="%2$s"><img src="' . get_template_directory_uri() . '/type-%3$s-icon-round.svg"></a>',
				        //esc_url( get_category_link( $category->term_id ) ),
				        //esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
				        //esc_html( $category->slug  )
				        //esc_html( $category->name )
				    //);
				     
				    //echo '<div class="cell small-4" style="border:1px solid black;">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</div> ';
				    //echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
				    //echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
				    $cat_link = get_category_link( $category->term_id );
				    echo '<div class="cell small-12 medium-4"><a href="' . $cat_link . '" class="swapper"><img src="' . get_template_directory_uri() . '/assets/images/mtw-' . $category->slug . '-btn-blue.png" /><img src="' . get_template_directory_uri() . '/assets/images/mtw-' . $category->slug . '-btn-red.png" /></a></div> ';
				} 
				?>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="videos-home">
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x">
	    	<div class="main small-12 cell" role="container">

				<h2><?php echo get_field('video_headline'); ?></h2>
				<div class="grid-x grid-margin-x">

				<?php 
					$args = array('post_type' => 'videos', 'posts_per_page' => '3');
					$videoQuery = new WP_Query($args);
				?>
				<?php if ( $videoQuery->have_posts() ) : ?>
					<?php while ( $videoQuery->have_posts() ) : 
						$videoQuery->the_post() ?>

					<div class="small-12 medium-4 cell">
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
					</div>

					<?php endwhile;  wp_reset_postdata(); ?>
				<?php else : endif; ?>

				</div>
				<p style="padding-top:2em;"><a href="../videos" class="cta-button">View All Videos</a></p>

			</div>
		</div>
	</div>
</div>

<div class="partners-home" style="text-align:center;">

	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
			<div class="partners-section small-12 medium-10 medium-offset-1 cell">
				<h3 class="text-center">Our Partners</h3>

					<div id="partner-carousel" class="owl-carousel">
					<?php
					if( have_rows('our_partners') ):
					    while ( have_rows('our_partners') ) : the_row(); ?>

						<div class="owl-carousel-container">
							<a href="<?php the_sub_field('partner_link'); ?>" target="_blank"><img src="<?php the_sub_field('partner_image'); ?>" alt="<?php the_sub_field('partner_name'); ?>"></a>
						</div>
					<?php
					    endwhile;
					else :
					    // no rows found
					endif;
					?>
					</div>

			</div> 
		</div> 
	</div> 

</div>