<?php
/**
 * Main site header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Coffee
 * @version 1.0.0
 */

get_template_part( 'template-parts/site/site', 'head' ); ?>

<header class="main main-header">
    <container>
        <div class="title-head">
            <a href="<?php echo get_bloginfo('wpurl') ?>" class="title">
                <?php get_template_part( 'template-parts/site/logo', 'header' ); ?>
                <span><?php echo get_bloginfo('name')?></span>
            </a>
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