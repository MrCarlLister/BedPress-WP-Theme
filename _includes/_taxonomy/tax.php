<?php

function tax_lesson_type() {

    register_taxonomy(
        'tax-type',		// (max. 32 characters, only lowercase letters and underscore
        array(					// Array of post types to use this taxonomy
            'cpt-lessons',
            'cpt-location'
        ),
        array(					// Arguments - see https://codex.wordpress.org/Function_Reference/register_taxonomy#Arguments
            'labels'			=>	array(
                'name'			=>	'Lesson Type',
                'add_new_item'	=>	'Add Lesson Type',
                'new_item_name'	=>	"New Lesson Type"
            ),
            'public'            =>  true,
            'publicly_queryable'=>  true,
            'hierarchical'      =>  true,
            'show_in_nav_menus' =>  true,
            'has_archive'       =>  false,
            'show_ui'                    => true,
            'show_in_quick_edit'         => false,
            'meta_box_cb'                => false,

        )
    );

}

add_action( 'init', 'tax_lesson_type' );


?>