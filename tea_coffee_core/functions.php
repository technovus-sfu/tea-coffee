<?php
/**
 * TBA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.0.0
 */

/**
 * Setup theme function
 */
function tea_coffee_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

    // This theme uses wp_nav_menu() in four locations.
    register_nav_menus(array(
        'primary' => __( 'Primary Links' ),
        'social'=> __( 'Social Links' ),
        'shortcuts'=> __( 'Shortcut Links' ),
        'footer' => __( 'Footer Links' ),
    ));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

}

/**
 * Loading wordpress resources
 */
function  wordpress_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

/**
 * Add custom Splash text section
 */
function cfe_splash_info( $wp_customize ) {
    $wp_customize->add_section('cfe-splash-info-section', array(
        'title' => 'Splashpage Settings'
    ));

    $wp_customize->add_setting('cfe-splash-info-headline', array(
        'default' => 'Insert Headline Here.'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    cfe_splash-info-headline-control', array(
        'label' => 'Headline',
        'section' => 'cfe-splash-info-section',
        'settings' => 'cfe-splash-info-headline'
    )));

    $wp_customize->add_setting('cfe-splash-info-typing-prompt', array(
        'default' => 'Prompt '
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    cfe_splash-info-typing-prompt-control', array(
        'label' => 'Typing prompt',
        'section' => 'cfe-splash-info-section',
        'settings' => 'cfe-splash-info-typing-prompt'
    )));
    
    $wp_customize->add_setting('cfe-splash-info-typing-array', array(
        'default' => '[ "Prompt1", "Prompt2" ]'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    cfe_splash-info-typing-array-control', array(
        'label' => 'Typing array',
        'section' => 'cfe-splash-info-section',
        'settings' => 'cfe-splash-info-typing-array'
    )));

    $wp_customize->add_setting('cfe-splash-info-typing-speed', array(
        'default' => '500',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    cfe_splash-info-typing-speed-control', array(
        'label' => 'Typing speed',
        'section' => 'cfe-splash-info-section',
        'settings' => 'cfe-splash-info-typing-speed',
    )));
}

/**
 * Change excerpt length
 */
function custom_excerpt_length( $length ) {
	return 25;
}

/** 
 * Add widget locations for word press
 */

function WidgetLocation(){
    register_sidebar( array (

        'name'=> 'Sidebar', //human friendly widget location
        'id'=>'sidebar1', //for computer
        'before_widget'=>'<div class="widget-item">',
        'after_widget' => '</div>'
        ));
}

add_action( 'after_setup_theme', 'tea_coffee_setup' );
add_action( 'wp_enqueue_scripts', 'wordpress_resources');
add_action('customize_register', 'cfe_splash_info');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_action('widgets_init', 'WidgetLocation');

?>
