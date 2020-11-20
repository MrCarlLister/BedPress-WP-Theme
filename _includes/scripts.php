<?php
//
// ─── ADD SCRIPTS TO SITE THE RIGHT WAY ──────────────────────────────────────────
//


function ee_mph__enqueue_script() {

	// remove jquery to avoid conflicts
	wp_deregister_script('jquery');
	
	/**
	 * JQUERY
	 */
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null, true);

	/**
	 * REGISTER BUT DON'T ENQUEUE
	 */

	wp_register_script('bespokeSliderLibrary', 'https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js', array('jquery'), null);
	wp_register_script('bespokeSliderController',  get_template_directory_uri().'/_output/js/libs/bespokeSliderController.min.js', array('jquery'), null);

	wp_register_script('carouselLibrary',
		'https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js',
		array('jquery'),
		null
	);

	wp_register_script('carouselController',  get_template_directory_uri() . '/_output/js/libs/carouselController.min.js', array('jquery', 'carouselLibrary'), null);

	wp_register_script('videoController',
		get_template_directory_uri() . '/_output/js/libs/videoController.min.js',
		array('jquery'),
		null
	);

}

add_action( 'wp_enqueue_scripts', 'ee_mph__enqueue_script' );


// ────────────────────────────────────────────────────────────────────────────────


?>
