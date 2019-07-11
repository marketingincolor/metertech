<?php
/**
 * Template part for displaying breadcrumbs and social links
 */
?>

<div class="grid-container sub-header hide-for-small-only">
	<div class=" grid-x grid-margin-x grid-padding-x align-spaced">

		<div class="breadcrumb small-12 column">
		<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
		</div>

	</div>
</div>