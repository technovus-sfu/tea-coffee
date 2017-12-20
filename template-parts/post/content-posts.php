<?php
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

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>

<article>
    <a href="<?php the_permalink(); ?>">
        <container>
            <h2 class="post-title"><?php the_title(); ?></h2>
            <div class="post-excerpt content">
                <?php the_excerpt(); ?>
            </div>
        </container>
    </a>
</article>
    
<?php endwhile;
    else :
        echo '<p>No content found</p>';
endif;
?>