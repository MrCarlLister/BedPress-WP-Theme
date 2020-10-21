<?php

    // Styling the visual editor with editor-style.css to match the theme style.
        add_editor_style('_dist/css/main.min.css');

    // Add Typekit to Wordpress Admin
        // add_filter("mce_external_plugins", "tomjn_mce_external_plugins");
        function tomjn_mce_external_plugins($plugin_array){
            $plugin_array['typekit']  =  get_stylesheet_directory_uri().'/includes/typekit.tinymce.js';
            return $plugin_array;
        }

    // Custom Login Styles
        function my_custom_login() {
            echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/_output/css/main.css" />';
        }
        add_action('login_head', 'my_custom_login');

    // Change link to wordpress from logo on login page
        function loginpage_custom_link() {
            return '/';
        }
        add_filter('login_headerurl','loginpage_custom_link');

        // Change tooltip on the logo on the login page
        function change_title_on_logo() {
            return 'View Website';
        }
        add_filter('login_headertitle', 'change_title_on_logo');

    // Custom Styles for Wordpress Edtior

        function wpb_mce_buttons_2($buttons) {
            array_unshift($buttons, 'styleselect');
            return $buttons;
        }

        // add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

        function my_mce_before_init_insert_formats( $init_array ) {

        // Define the style_formats array

            $style_formats = array (

                array (
                    'title' => 'Colour One',
                    'block' => 'span',
                    'classes' => 'color--alpha',
                    'wrapper' => true,
                )

            );
            // Insert the array, JSON ENCODED, into 'style_formats'
            $init_array['style_formats'] = json_encode( $style_formats );

            return $init_array;

        }

        // Attach callback to 'tiny_mce_before_init'
        // add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

?>