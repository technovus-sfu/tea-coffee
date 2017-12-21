<?
/**
 * The template for displaying all single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.0
 */

get_template_part( 'template-parts/site/site', 'head' ); ?>

<section class="news-header-section">
    <? get_template_part( 'template-parts/header/analog', 'header'); ?>

    <section class="news-header-content">
        <container>
            <? get_template_part( 'template-parts/post/content', 'featured' ); ?>
        </container>
    </section>
</section>

<section class="news-page-content-section">
    <container>      
        <posts>
            <h1 class="post-title archive">
            <?
                if ( is_category() ):
                    single_cat_title();
                elseif ( is_tag() ) :
                    single_tag_title();
                elseif ( is_author() ) :
                    the_post();
                    echo 'Author Archives: ' . get_the_author();
                elseif ( is_day() ) :
                    echo 'Daily Archives: ' . get_the_date();
                elseif ( is_month() ) :
                    echo 'Monthly Archives: ' . get_the_date('F Y');
                elseif ( is_year() ) :
                    echo 'Yearly Archives: ' . get_the_date('Y');
                else :
                    echo 'Archives: ';
                endif;
            ?>
            </h1>
            <? get_template_part( 'template-parts/post/content', 'archive' ); ?>
        </posts>
        <? get_sidebar(); ?>
    </container>
</section>

<? get_footer(); ?>
