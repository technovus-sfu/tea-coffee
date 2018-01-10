<?php 
/**
 * Site blog/news page
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.3
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
<section class="news-page-content-section">
    <container class="clearfix">
        <posts>
            <?php get_template_part( 'template-parts/post/content', 'posts' ); ?>
        </posts>
        <?php get_sidebar(); ?>
    </container>
</section>

<?php get_footer(); ?>
