<?php

/*

function  slider_item_section(){
    // Custom Post Type Labels     
    $labels = array(
        'name'               => _x( 'Slider', 'post type general name' ),
        'singular_name'      => _x( 'Slider', 'post type singular name' ),
        'add_new'            => _x( 'Add New Slider', 'Images' ),
        'add_new_item'       => __( 'Add New Slider' ),
        'edit_item'          => __( 'Edit Slider' ),
        'new_item'           => __( 'New Slider' ),
        'all_items'          => __( 'All Sliders' ),
        'view_item'          => __( 'View Slider' ),
        'search_items'       => __( 'Search Sliders' ),
        'not_found'          => __( 'No Slider found' ),
        'not_found_in_trash' => __( 'No Slider found in trash' ),
        'parent_item_colon'  => __( 'Slider services' ),
        'menu_name'          => __( 'Slider' )
    );
   
    // Custom Post Type Supports 
    $supports = array('title', 'thumbnail');
   
    // Custom Post Type Arguments 
    $args = array(
        'labels'             => $labels,
        'hierarchical'       => false,
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => false,
        'show_in_admin_bar'  => true,
        'exclude_from_search'=> true,
        'query_var'          => true,
        'can_export'         => true,
        'rewrite'              => array("slug" => "slider"), // Permalinks format
        'has_archive'        => true,
        //'menu_position'      => 5,
        'supports'           => $supports,
        'capability_type'    => 'post',
    );
   
    register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_item_section' );






/*
function wp_blog_post_type(){
    // Custom Post Type Labels     
    $labels = array(
        'name'               => _x( 'WP Blog', 'post type general name' ),
        'singular_name'      => _x( 'WP Blog', 'post type singular name' ),
        'add_new'            => _x( 'Add new Blog', 'blog' ),
        'add_new_item'       => __( 'Add new Blog' ),
        'edit_item'          => __( 'Edit Blog' ),
        'new_item'           => __( 'New Blog' ),
        'all_items'          => __( 'All Blog' ),
        'view_item'          => __( 'View Blog' ),
        'search_items'       => __( 'Search Blog' ),
        'not_found'          => __( 'No Blog found' ),
        'not_found_in_trash' => __( 'No Blog found in trash' ),
        'parent_item_colon'  => __( 'Parent Blog' ),
        'menu_name'          => __( 'WP Blog' )
    );
   
    // Custom Post Type Supports 
    $supports = array('title', 'editor', 'thumbnail');
   
    // Custom Post Type Arguments 
    $args = array(
        'labels'             => $labels,
        'hierarchical'       => false,
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => false,
        'show_in_admin_bar'  => true,
        'exclude_from_search'=> true,
        'query_var'          => true,
        'can_export'         => true,
        'rewrite'              => array("slug" => "wpposts"), // Permalinks format
        'has_archive'        => true,
        //'menu_position'      => 5,
        'supports'           => $supports,
        'capability_type'    => 'post',
    );
   
    register_post_type( 'wppost', $args );

}
add_action( 'init', 'wp_blog_post_type' );



function wp_blog_taxonomy() {
    
    // Taxonomy Labels     
    $labels = array(
        'name'                       => _x( 'WP Blog Categories', 'taxonomy general name' ),
        'singular_name'              => _x( 'Category', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Categories' ),
        'popular_items'              => __( 'Popular Categories' ),
        'all_items'                  => __( 'All Categories' ),
        'parent_item'                => __( 'Parent Category' ),
        'parent_item_colon'          => __( 'Parent: Category' ),
        'edit_item'                  => __( 'Edit Category' ),
        'view_item'                  => __( 'View Category' ),
        'update_item'                => __( 'Update Category' ),
        'add_new_item'               => __( 'Add New Category' ),
        'new_item_name'              => __( 'New Category Name' ),
        'add_or_remove_items'        => __( 'Add or remove Categories' ),
        'choose_from_most_used'      => __( 'Choose from the most used Categories' ),
        'separate_items_with_commas' => __( 'Separate Categories with commas' ),
        'menu_name'                  => __( 'Categories' ),
    );
   
    // Linked Custom Post Type
    $cpts = array('wppost');
   
    // Taxonomy Arguments 
    $args = array(
        'labels'             => $labels,
        'hierarchical'       => true,
        'description'        => 'place each testimonial into a category.',
        'public'             => true,
        'show_ui'            => true,
        'show_tagcloud'      => false,
        'show_in_nav_menus'  => false,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => false,
    );
    register_taxonomy( 'wppost', $cpts, $args );
    
}
add_action( 'init', 'wp_blog_taxonomy' );

*/

