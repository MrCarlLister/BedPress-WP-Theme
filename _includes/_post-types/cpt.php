<?php

function post_type_articles() {
    $labels = array(
        'name'               => _x( 'Articles', 'post type Articles name' ),
        'singular_name'      => _x( 'Articles', 'post type Articles name' ),
        'add_new'            => _x( 'Add New', 'Articles' ),
        'add_new_item'       => __( 'Add New Articles' ),
        'edit_item'          => __( 'Edit Articles' ),
        'new_item'           => __( 'New Articles' ),
        'all_items'          => __( 'All Articles' ),
        'view_item'          => __( 'View Articles' ),
        'search_items'       => __( 'Search Articles' ),
        'not_found'          => __( 'No Articles found' ),
        'not_found_in_trash' => __( 'No Articles found in the trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Articles'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Articles specific data',
        'public'        => true,
        'show_ui'       => true,
        'menu_position' => 31,
        'supports'      => array( 'title', 'revisions' ),
        'has_archive'   => false,
        'hierarchical'  => false,
        'rewrite'       => array('with_front'=>false, 'slug'=>'articles'),
        'menu_icon'     => 'dashicons-welcome-learn-more',
    );
    register_post_type( 'cpt-lessons', $args );
}

add_action( 'init', 'post_type_articles' );


function post_type_team() {
    $labels = array(
        'name'               => _x( 'Team members', 'post type lessons name' ),
        'singular_name'      => _x( 'Team member', 'post type lessons name' ),
        'add_new'            => _x( 'Add New', 'Team member' ),
        'add_new_item'       => __( 'Add New Team member' ),
        'edit_item'          => __( 'Edit Team member' ),
        'new_item'           => __( 'New Team member' ),
        'all_items'          => __( 'All Team members' ),
        'view_item'          => __( 'View Team members' ),
        'search_items'       => __( 'Search Team members' ),
        'not_found'          => __( 'No Team members found' ),
        'not_found_in_trash' => __( 'No Team members found in the trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Team members'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our location specific data',
        'public'        => false,
        'show_ui'       => true,
        'menu_position' => 31,
        'supports'      => array( 'title', 'revisions' ),
        'has_archive'   => false,
        'hierarchical'  => false,
        // 'rewrite'       => array('with_front'=>false, 'slug'=>'team-member'),
        'menu_icon'     => 'dashicons-groups',
    );
    register_post_type( 'cpt-team-member', $args );
}

add_action( 'init', 'post_type_team' );
