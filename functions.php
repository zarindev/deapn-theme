<?php

//after setup theme
function _tk_setup() {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
/*
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );
*/
    
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

    /* Logo */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
	) );
    
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
    
	/**
	 * Register Menus
	*/
	register_nav_menus( array(
		'primary'  => __( 'Primary Menu', '_tk' ),
	) );

    
    /* Theme Images Size */
    //add_image_size( 'slider-size', 1170, 530, true );
    
    
}

add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
        'description'   => __( 'Appears in the section of the site.', '_tk' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {


	// load Theme styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );
    
    // load Theme script
    //wp_enqueue_script('jquery');


}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';


/* Post Type Require Files */
require get_template_directory() . '/includes/post-type.php';







