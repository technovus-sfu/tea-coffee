<?php
/**
 * The template for displaying the header for non white pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.2
 */
?>

<header class="analog-header site-header">
    <container>
        <div class="site-header-bar">
            <div class="site-title">
                <?php get_template_part( 'template-parts/site/logo', 'header' ); ?>
                <a class="site-name" href="<?php echo get_bloginfo('wpurl') ?>"><?php echo get_bloginfo('name')?></a>
            </div>
            <div class="mobile-nav right">
                <a id="mobile-nav-button" href="#">
                <span><i class="mobile-nav-icon"></i></span>
                </a>
            </div>
            <div class="header-widget-location right">
                <?php dynamic_sidebar('header1'); ?>
            </div>
        </div>
        <nav class="site-links">
            <?php $args = array('theme_location' => 'primary'); ?>
            <?php wp_nav_menu( $args ); ?> 
        </nav>
    </container>
</header>

