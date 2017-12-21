<? 
/**
 * Site blog/news page
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
        <container class="clearfix">
            <posts>
                <? get_template_part( 'template-parts/post/content', 'posts' ); ?>
            </posts>
            <? get_sidebar(); ?>
        </container>
    </section>

<? get_footer(); ?>
