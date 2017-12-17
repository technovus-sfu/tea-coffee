<?php
/**
 * Main site header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_template_part( 'template-parts/site/site', 'head' ); ?>

<header class="main main-header <?php echo 'default-header'; ?>">
    <container>
        <div class="title-head">
            <a href="<?php echo get_bloginfo('wpurl') ?>" class="title">
                <icon class="main-header-icon">
                    <?php the_custom_logo(); ?>
                </icon>
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