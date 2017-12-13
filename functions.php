<?php

function  wordpress_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'wordpress_resources');

// Navigation
register_nav_menus(array(
    'primary' => __( 'Primary Links' ),
    'social'=> __( 'Social Links' ),
    'footer' => __( 'Footer Links' ),
))
?>