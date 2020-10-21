<?php
//
// ─── ADD SCRIPTS TO SITE THE RIGHT WAY ──────────────────────────────────────────
//


function ee__enqueue_script() {

	// remove jquery to avoid conflicts
	wp_deregister_script('jquery');
	
	// add new jquery, popper and bootstrap.
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null, true);
	// wp_enqueue_script('jqueryScrollReveal-defer', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', array('jquery'), null);
	// wp_enqueue_script('jqueryParallax', 'https://cdnjs.cloudflare.com/ajax/libs/rellax/1.10.0/rellax.min.js', array('jquery'), null, true);
	// wp_enqueue_script('recaptcha3-defer', 'https://www.google.com/recaptcha/api.js?render='.RECAPT_SITE, array('jquery'), null, false);

	// wp_enqueue_script( 'google-api', 'https://maps.googleapis.com/maps/api/js?key='.GOOGLE_API_KEY, null, null, true); // Add in your key

	// wp_enqueue_script('matchHeight-defer', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array('jquery'), null, true);
	// mmenu - mobile navigation library
	// wp_enqueue_script('mmenuJS-defer', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/8.2.1/mmenu.js', array('jquery'), null, true);
	// wp_enqueue_script('slickJS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), null, true);
	// Example script load, array('jquery') specifies that jquery must load first before this script
	// NOTE: UPDATE BEFORE LAUNCH
	wp_enqueue_script( 'main-script', get_template_directory_uri().'/_output/js/main.min.js', array('jquery'), time() );
}

add_action( 'wp_enqueue_scripts', 'ee__enqueue_script' );


// ────────────────────────────────────────────────────────────────────────────────


?>
