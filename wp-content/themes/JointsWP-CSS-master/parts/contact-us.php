<?php
/**
 * The template part for displaying contact us content
 */
$form_id = get_field('contact_us_form_id', 'option');
$order_email = get_field('company_order_email', 'option');
$co_address = get_field('company_address', 'option');
$co_address_alt = get_field('company_address_alt', 'option');
$co_phone = get_field('company_phone', 'option');
$co_fax = get_field('company_fax', 'option');

?>

<div class="contact redbar" style="background-color:#A11217; padding:3em 0em; color:#fff;">
	<div class="xcontent grid-container">
		<div class="inner-content grid-x grid-margin-x align-center">
		    <div class="main small-12 medium-11 cell">

				<div class="grid-x grid-margin-x align-center-middle">
					<div class="cell shrink">
				    	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mtw-cu-order-icon.svg">
				    </div>
				    <div class="cell shrink">
						<span style="font-size:1.25em;">To place an order, email us at <a href="mailto:<?php echo $order_email; ?>" style="color:#fff;font-weight:600; "><?php echo $order_email; ?></a></span>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="contact graybar" style="background-color:#6B6E73; padding:2em 0em; color:#fff;">
	<div class="xcontent grid-container">
		<div class="inner-content grid-x grid-margin-x align-center">
		    <div class="main small-12 cell">

				<div class="grid-x grid-padding-x align-center-middle">
					<div class="cell small-12 medium-4" style="padding:1em 0em;">
						<div class="grid-x grid-padding-x align-center-middle">
							<div class="cell small-2 small-offset-1 medium-shrink">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mtw-cu-phone-icon.svg">
							</div>
					    	<div class="cell small-6 medium-shrink">
							<span style="font-size:1.25em;"><?php echo $co_phone; ?></span>
							</div>
						</div>
					</div>
					<div class="cell small-12 medium-4" style="padding:1em 0em;">
						<div class="grid-x grid-padding-x align-center-middle">
							<div class="cell small-2 small-offset-1 medium-shrink">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mtw-cu-fax-icon.svg">
							</div>
					    	<div class="cell small-6 medium-shrink">
							<span style="font-size:1.25em;"><?php echo $co_fax; ?></span>
							</div>
                        </div>
					</div>
					<div class="cell small-12 medium-4" style="padding:1em 0em;">
						<div class="grid-x grid-padding-x align-center-middle">
							<div class="cell small-2 small-offset-1 medium-shrink">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mtw-cu-loc-icon.svg">
							</div>
					    	<div class="cell small-6 medium-shrink">
							<span style="font-size:1.25em;"><?php echo $co_address; ?><br><?php echo $co_address_alt; ?></span>
							</div>
                        </div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<div class="contact form" style="text-align:center; padding:3em 0em;">
	<div class="content grid-container">
		<div class="inner-content grid-x grid-margin-x align-center">
		    <div class="main small-12 medium-11 cell">
				<?php echo do_shortcode($form_id); ?>
			</div>
		</div>
	</div>
</div>
