<?
/**
 * Template part for displaying single post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.0.0
 */
?>

<?
if (have_posts()) :
    while (have_posts()) : the_post();
?>

<article>
    <container>
        <h2 class="post-title"><? the_title(); ?></h2>
        <div class="single-post-content content">
                <? the_content(); ?>
        </div>
    </container>
</article>
    
<? endwhile;
    else :
        echo '<p>No content found</p>';
endif;
?>