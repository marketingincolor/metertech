<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
					<div class="inner-footer grid-x grid-margin-x grid-padding-x">
						
						<div class="small-12 medium-2 cell">
							<nav role="navigation">
								<a style="cursor:default;">Company</a>
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
						
						<div class="small-12 medium-2 cell">
							<nav role="navigation">
								<a style="cursor:default;">Products</a>
	    						<?php joints_footer_products(); ?>
	    					</nav>
	    				</div>

						<div class="small-12 medium-4 medium-offset-3 cell">
							<div class="footer-meta">
								<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
								<p><?php the_field('company_address', 'option'); ?> <?php the_field('company_address_alt', 'option'); ?></p>
								<p>P: <?php the_field('company_phone', 'option'); ?></p>
								<p>F: <?php the_field('company_fax', 'option'); ?></p>
							</div>
	    				</div>

						<div class="small-12 medium-12 large-12 cell text-center">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>
					
					</div> <!-- end #inner-footer -->
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/owl.carousel.min.js"></script>
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->