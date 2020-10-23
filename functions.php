<?php 

// Admin functions, handling backend CMS edits (hiding metabox, changing functionality etc)
@include_once('_includes/admin.php');

// Add Styles and Scripts
@include_once('_includes/styles.php');
@include_once('_includes/scripts.php');
@include_once('_includes/wp-styles.php');


// Get functions, for getting data
@include_once('_includes/get.php');


// Render functions, for rendering html
@include_once('_includes/render.php');

// Add Menus
@include_once('_includes/menus.php');

// Add Image Settings
@include_once('_includes/images.php');




// Checking if WooCommerce is active
if ( IS_WOOCOMMERCE_ACTIVE ) {
    @include_once('_includes/woocommerce.php');
}


?>