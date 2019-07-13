<?php 
  require('../../../wp-blog-header.php');
  header("HTTP/1.1 200 OK");

  $products = $_POST['products'];
  $all_products = array();

  // If user selected all indications
  if ($products === 'all' || in_array('all', $products)) {
  	$terms = get_terms( array(
		  'taxonomy' => 'product_type',
		  'hide_empty' => false,
		));
		foreach ($terms as $term) {
			array_push($all_products, $term->slug);
		}
		$products = $all_products;
  }

  $query = new WP_Query( array(
    'post_type'      => 'products',
    'posts_per_page' => -1,
    //'category_name'  => $category,
    'tax_query' => array(
  		array(
  			'taxonomy' => 'product_type',
  			'field'    => 'slug',
  			'terms'    => $products,
  		),
  	),
	));
	if($query->have_posts()) : 
	  while($query->have_posts()) : 
	    $query->the_post();
?>


    <div class="small-6 medium-3 large-3 cell panel" data-equalizer-watch>
    
        <?php $terms = get_the_terms( $post->ID , 'product_type' ); 
                    foreach ((array) $terms as $term ) {
                        $term_link = get_term_link( $term, 'product_type' );
                        //if( is_wp_error( $term_link ) )
                        //continue;
                      echo '<img class="type-icon" src="'. get_template_directory_uri() .'/assets/images/mtw-type-ico-' . $term->slug . '.png" />';
                    } 
                ?>
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

        <section class="featured-image" itemprop="text">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
        </section> <!-- end article section -->
      
        <header class="article-header">
          <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>  
          <?php //get_template_part( 'parts/content', 'byline' ); ?>    
          <?php if( get_field('part_number') ): ?>
            <h6>Part Number: <?php the_field('part_number'); ?></h6>
          <?php endif; ?>
        </header> <!-- end article header --> 
                
        <section class="entry-content" itemprop="text">
        <?php 
        $file = get_field('spec_sheet');
        if( $file ) {
          $url = wp_get_attachment_url( $file );
        ?>
          <a href="<?php echo $url; ?>" class="button download">Download Spec Sheet</a>
        <?php } ?>

          <a href="<?php the_permalink() ?>" class="button info">More Product Info</a>
        </section> <!-- end article section -->
                                  
      </article> <!-- end article -->
      
    </div>
<?php
	  endwhile;
  else: 
?>

  <h3>Sorry, no case studies match your filter. Please try again.</p>

<?php endif;wp_reset_postdata(); ?>
