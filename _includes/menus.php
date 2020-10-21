<?php
	
	//
	// ─── ADD MENUS TO THEME ─────────────────────────────────────────────────────────
	//
		
	add_theme_support( 'menus' );

	function register_theme_menus() {

		// Specify Menus
		register_nav_menus(
			array(
				'primary-menu' => __( 'Main Navigation' ),
				'secondary-menu' => __( 'Secondary Navigation' ),
				'footer-menu' => __( 'Footer Menu' ),
			)
		);

	}
	add_action( 'init' , 'register_theme_menus' );

	// ────────────────────────────────────────────────────────────────────────────────

?>