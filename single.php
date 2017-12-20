<?php
/**
 * The template for displaying all single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package Wordpress
 * @subpackage Coffee
 * @version 1.0.0
 */

get_template_part( 'template-parts/site/site', 'head' ); ?>

<section class="news-header-section">
    <div class="news-header">
        <container>
            <div class="title-head">
                <a href="<?php echo get_bloginfo('wpurl'); ?>" class="title">
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
    </div>
    <section class="header-content">
        <container>
            <?php get_template_part( 'template-parts/post/content', 'featured' ); ?>
        </container>
    </section>
</section>
<section class="news-page-content-section news-single-page-content-section">
    <container>
        <posts>
            <?php get_template_part( 'template-parts/post/content', 'single' ); ?>
        </posts>
        <?php get_sidebar(); ?>
    </container>
</section>

<?php get_footer(); ?>
