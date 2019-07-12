<?php
/**
 * The template part for displaying related certifications
 */
?>
<?php if( have_rows('related_certifications') ): ?>

<div class="related-cert" style="text-align:center;">
	<div class="content grid-container" style="margin-bottom:0;">
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	    	<div class="main small-12 XXmedium-10 XXmedium-offset-1 cell" role="container">
				<h2>Download Related Certifications</h2>
				<div class="grid-x grid-margin-x align-center" style="text-align:left;">

				<?php while ( have_rows('related_certifications') ) : the_row(); ?>
					<?php $post_object = get_sub_field('certification_name'); ?>
					<div class="medium-4 cell">
		
						<div class="grid-x grid-margin-x Xgrid-padding-x">
							<div class="cell shrink">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mtw-pdf-icon-white.svg" />
							</div>
							<div class="cell auto">
								<p><?php echo $post_object->post_title; ?></p>
								<p><a href="<?php the_field('certification_document', $post_object->ID ); ?>" class="cta-button" target="_blank">View/Download PDF</a></p>
							</div>
						</div>
			
					</div>
				<?php endwhile;  ?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>