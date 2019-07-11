<?php
/**
 * Template part for displaying SLIDER images on Home Page
 * slider 
 */
?>
<style>
  .orbit-caption { width:55%; margin: 10% 0%; padding: 3em; }
</style> 
<div class="grid-container-fluid home-slider"> 

  <div class="orbit" role="region" aria-label="MTW Product Showcase" data-orbit>

      <div class="orbit-wrapper">
      <div class="orbit-controls hide-for-medium">
        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&lsaquo;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&rsaquo;</button>
      </div>
      <ul class="orbit-container">

      <?php if( have_rows('showcase') ):
        while ( have_rows('showcase') ) : the_row(); ?>

        <li class="orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" src="<?php the_sub_field('slide_image'); ?>" alt="<?php the_sub_field('slide_title'); ?>">
            <figcaption class="orbit-caption grid-x grid-padding-x">
              <div class="orbit-caption-meta medium-8 medium-offset-2">
              <h2><?php the_sub_field('slide_title'); ?></h2>
              <h4><?php the_sub_field('slide_description'); ?></h4>
              <p><a href="<?php the_sub_field('slide_link'); ?>" class="slide-cta-button"><?php the_sub_field('slide_button'); ?></a></p>
              </div>
            </figcaption>
          </figure>
        </li>

      <?php 
        endwhile;
      else : // no rows found
      endif; ?>

      </ul>
    </div>

    <nav class="orbit-bullets">
      <button data-slide="0"><span class="show-for-sr">First slide details.</span></button>
      <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
      <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
      <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
    </nav>

  </div>

</div>