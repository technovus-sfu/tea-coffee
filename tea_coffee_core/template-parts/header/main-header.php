<?
/**
 * The template for displaying the header for white pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.0
 */
?>

<header class="main main-header site-header">
    <container>
        <div class="site-header-bar">
            <div class="site-title">
                <? get_template_part( 'template-parts/site/logo', 'header' ); ?>
                <a class="site-name" href="<? echo get_bloginfo('wpurl') ?>"><? echo get_bloginfo('name')?></a>
            </div>
            <div class="mobile-nav right">
                <span><i class="mobile-nav-icon"></i></span>
            </div>
            <div class="header-widget-location right">
                <? dynamic_sidebar('header1'); ?>
            </div>
        </div>
        <nav class="site-links">
            <? $args = array('theme_location' => 'primary'); ?>
            <? wp_nav_menu( $args ); ?>
        </nav>
    </container>
</header>
