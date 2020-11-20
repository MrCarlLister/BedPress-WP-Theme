<?php
//
// ─── ADD STLES TO SITE THE RIGHT WAY ──────────────────────────────────────────
//

function ee__enqueue_style() {
	wp_enqueue_style('css-mmenu', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/8.2.1/mmenu.css', array());
	// wp_enqueue_style('css-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array());
	// wp_enqueue_style('css-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i&display=swap', array());

	wp_register_style('carouselStyle', 'https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css');
	// NOTE: UPDATE BEFORE LAUNCH
	wp_enqueue_style('css-main', get_template_directory_uri().'/_output/css/main.css', array(), time());
}

add_action( 'wp_enqueue_scripts', 'ee__enqueue_style' );

// ────────────────────────────────────────────────────────────────────────────────


// Add backend styles for Gutenberg.
// add_action('enqueue_block_editor_assets', 'ee_mph__enqueue_script');
add_action('enqueue_block_editor_assets', 'ee__enqueue_style');


?>
