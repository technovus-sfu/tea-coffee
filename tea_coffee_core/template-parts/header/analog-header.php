<?php
/**
 * The template for displaying the header for non white pages
 *
 * @link https://codex.wordpress.org/
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.0.0
 */
?>

<header class="analog-header site-header">
    <container>
        <div class="site-header-bar">
            <div class="site-title">
                <?php get_template_part( 'template-parts/site/logo', 'header' ); ?>
                <a class="site-name" href="<?php echo get_bloginfo('wpurl') ?>"><?php echo get_bloginfo('name')?></a>
            </div>
            <div class="flex right">
                <nav class="social-links">
                    <?php $args = array('theme_location' => 'social'); ?>
                    <?php wp_nav_menu( $args ); ?> 
                </nav>
            </div>
        </div>
        <nav class="site-links">
            <?php $args = array('theme_location' => 'primary'); ?>
            <?php wp_nav_menu( $args ); ?> 
        </nav>
    </container>
</header>