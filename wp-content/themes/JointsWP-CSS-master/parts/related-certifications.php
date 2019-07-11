<?php
/**
 * The template part for displaying related certifications
 */
?>
<?php if( have_rows('related_certifications') ): ?>

<div class="related-cert" style="background-color:grey; text-align:center;">
	<div class="content grid-container" style="margin-bottom:0;">
		<div class="inner-content grid-x grid-margin-x REMOVEgrid-padding-x">
	    	<div class="main small-12 cell" role="container">

				<h2>Related Certifications</h2>
				<div class="grid-x grid-margin-x">


				<?php while ( have_rows('related_certifications') ) : the_row(); ?>
					<?php $post_object = get_sub_field('certification_name'); ?>
					<div class="medium-auto cell">
		
						<?php echo '<pre>';
						    print_r( $post_object );
						echo '</pre>';
						die;
						?>

						<a href="<?php //echo the_sub_field('certification_name'); ?>">Cert Link</a>
			
					</div>

					<?php endwhile;  ?>

				<?php //else : endif; ?>

				</div>

			</div>
		</div>
	</div>
</div>

<?php endif; ?>