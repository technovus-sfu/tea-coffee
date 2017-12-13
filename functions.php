<?php

function  wordpress_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'wordpress_resources');

// Navigation
register_nav_menus(array(
    'primary' => __( 'Primary Links' ),
    'social'=> __( 'Social Links' ),
    'shortcuts'=> __( 'Shortcut Links' ),
    'footer' => __( 'Footer Links' ),
));

// Add custom Splash text section
function lwp_splash_info( $wp_customize ) {
    $wp_customize->add_section('lwp-splash-info-section', array(
        'title' => 'Splashpage Settings'
    ));

    $wp_customize->add_setting('lwp-splash-info-headline', array(
        'default' => 'Insert Headline Here.'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    lwp_splash-info-headline-control', array(
        'label' => 'Headline',
        'section' => 'lwp-splash-info-section',
        'settings' => 'lwp-splash-info-headline'
    )));

    $wp_customize->add_setting('lwp-splash-info-typing-prompt', array(
        'default' => 'Prompt '
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    lwp_splash-info-typing-prompt-control', array(
        'label' => 'Typing prompt',
        'section' => 'lwp-splash-info-section',
        'settings' => 'lwp-splash-info-typing-prompt'
    )));
    
    $wp_customize->add_setting('lwp-splash-info-typing-array', array(
        'default' => '[ "Prompt1", "Prompt2" ]'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    lwp_splash-info-typing-array-control', array(
        'label' => 'Typing array',
        'section' => 'lwp-splash-info-section',
        'settings' => 'lwp-splash-info-typing-array'
    )));

    $wp_customize->add_setting('lwp-splash-info-typing-speed', array(
        'default' => '500',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, '
    lwp_splash-info-typing-speed-control', array(
        'label' => 'Typing speed',
        'section' => 'lwp-splash-info-section',
        'settings' => 'lwp-splash-info-typing-speed',
    )));
}

add_action('customize_register', 'lwp_splash_info');

?>