jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function(){// Remove empty P tags created by WP inside of Accordion and Orbit
ajaxFilterProducts();
jQuery('.accordion p:empty, .orbit p:empty').remove();// Adds Flex Video to YouTube and Vimeo Embeds
jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){if(jQuery(this).innerWidth()/jQuery(this).innerHeight()>1.5){jQuery(this).wrap("<div class='widescreen responsive-embed'/>");}else{jQuery(this).wrap("<div class='responsive-embed'/>");}});});

/*
Insert Custom JS Below
*/

function ajaxFilterProducts(){
	jQuery('#filter-products').on('click',function(e){
	e.preventDefault();
    var products = jQuery('#products-select').val();
    var $content    = jQuery('#products-grid');
    var ajaxURL     = templateURL + '/ajax-filter-products.php';
    var currentURL  = location.href;
    var category;
console.log(products);
    // if locations or indications is blank send alert and exit the function
    if (products === null) {
    	alert('You must select a Product Type to filter by.');
    	return false;
    }

    // Show Loading Gif
    $content.html('<div class="small-12 cell text-center"><img class="loading" src="' + templateURL + '/assets/images/loading.gif" style="width:100px"></div>');

		jQuery.ajax({
			url: ajaxURL,
			type: 'POST',
			data: {
				products : products
			},
			success: function(response) {
                $content.html(response);
            }
		});
	});
}

jQuery(document).ready(function(){
	jQuery("#partner-carousel").owlCarousel({
		//items:4,
		loop:true,
		margin:20,
		nav:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:true
			},
			1000:{
				items:4,
				nav:true
			}
		},
		//dots:true,
		//autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:true,
		navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
	});
});

jQuery('.product-thumb').on('click', function() {
	jQuery('#main-product-image').attr('src', jQuery(this).data('image'));
	//jQuery('.product-thumb').toggleClass('active');
	//jQuery(this).toggleClass('active');
	jQuery('.product-thumb').removeClass('active');
	jQuery(this).addClass('active');
});

jQuery('.nav-sub').on('click', function() {
	jQuery(this).css('opacity', '0');
	jQuery(this).css('width', '0px');
	jQuery('.nav-search').css('opacity', '1');
})
