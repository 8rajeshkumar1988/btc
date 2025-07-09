<?php

function university_post_types() {
    // Event Post Type
    register_post_type( 'event', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'excerpt' ),
        'rewrite' => array( 'slug' => 'events' ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ) );

    // Program Post Type
    register_post_type( 'product', array(
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Products',
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Product',
            'singular_name' => 'Product'
        ),
        'menu_icon' => 'dashicons-awards'
    ) );

    // Professor Post Type
    register_post_type( 'category', array(
        'label' => 'Categories',
        'public' => true,
        'show_ui' => true,
        'has_archive' => false,
        'show_in_rest' => true,
        'rewrite' => array( 'slug' => 'products' ),
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category',
            'add_new_item' => 'Add New Category',
            'edit_item' => 'Edit Category',
            'all_items' => 'All Categories',
        ),
        'menu_icon' => 'dashicons-tag',
    ) );
}

add_action( 'init', 'university_post_types' );