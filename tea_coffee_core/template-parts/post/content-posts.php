<?
/**
 * Template part for displaying post list
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
    <a href="<? the_permalink(); ?>">
        <container>
            <h2 class="post-title"><? the_title(); ?></h2>
            <div class="post-excerpt content">
                <? the_excerpt(); ?>
            </div>
        </container>
    </a>
</article>
    
<? endwhile;
    else :
        echo '<p>No content found</p>';
endif;
?>