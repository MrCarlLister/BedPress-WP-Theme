<?php 

// Admin functions, handling backend CMS edits (hiding metabox, changing functionality etc)
@include_once('_includes/admin.php');

// Add Styles and Scripts
@include_once('_includes/styles.php');
@include_once('_includes/scripts.php');
@include_once('_includes/wp-styles.php');

// Add Post Types
// @include_once('_includes/_post-types/autoload.php');
// @include_once('_includes/_taxonomy/autoload.php');

// Add Menus
@include_once('_includes/menus.php');

// Add Image Settings
@include_once('_includes/images.php');




// Checking if WooCommerce is active
if ( IS_WOOCOMMERCE_ACTIVE ) {
    @include_once('_includes/woocommerce.php');
}


?>