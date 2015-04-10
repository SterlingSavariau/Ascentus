<?php 

// Enable support for Post Thumbnails, and declare two sizes.
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 672, 372, true );
add_image_size( 'PhotoLove-full-width', 1038, 576, true );

//Adds Menu
add_theme_support('menus'); 

//Enable Custom Background
add_theme_support('custom-background');

// Adds RSS feed links to <head> for posts and comments.
add_theme_support( 'automatic-feed-links' );

//Builds the definition for a single sidebar 
//and returns the ID. Call on "widgets_init" action.
function foundation_widgets_init() {

	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => 'Second Sidebar',
		'id' => 'sidebar_2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Third Sidebar',
		'id' => 'sidebar_3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Fourth Sidebar',
		'id' => 'sidebar_4',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'foundation_widgets_init' );

// Enable & Create Custom Menu

function foundation_menus() {

	 // This theme uses wp_nav_menu() in one locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' ),
	) );

}

// Load Foundation JS

function foundation_scripts() {

	// Load jQuery 2.0

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.1.3.js', false, null );
	wp_enqueue_script( 'jquery');

	//Load Foundation JS

	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), false, true );
	wp_register_script('modernizer', get_template_directory_uri()."/js/modernizr.js",array(), false);
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array( 'jquery', 'foundation_js' ), false, true );

	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.js', array(), false, true );

	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array(), false, true );

	wp_enqueue_script( 'owl_carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), false, true );

	wp_enqueue_script( 'odometer', get_template_directory_uri() . '/js/odometer.js', array(), false, true );

	wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/bxslider.js', array(), false, true );

	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array(), false, true );

	wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/js/skrollr.js', array(), false, true );


}

if ( !is_admin() ) add_action( 'wp_enqueue_scripts', 'foundation_scripts' );

// Load Foundation CSS

function foundation_styles() {

	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/carousel.css' );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css' );
	wp_enqueue_style( 'transitions', get_template_directory_uri() . '/css/transitions.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/bxslider.css' );
	wp_enqueue_style( 'simple_line_icons', get_template_directory_uri() . '/css/simple-line-icons.css' );
	wp_enqueue_style( 'odometer', get_template_directory_uri() . '/css/odometer.css' );
	wp_enqueue_style( 'magnific_popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css' );
	wp_enqueue_style( 'style', 'http://fonts.googleapis.com/css?family=Montserrat:400,700' );
	wp_enqueue_style( 'style', 'http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' );

}
add_action( 'wp_enqueue_scripts', 'foundation_styles' );

?>