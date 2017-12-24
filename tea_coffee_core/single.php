<?php
/**
 * The template for displaying all single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.1
 */

get_template_part( 'template-parts/site/site', 'head' ); ?>

<section class="news-header-section">
    <?php get_template_part( 'template-parts/header/analog', 'header'); ?>

    <section class="news-header-content">
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
