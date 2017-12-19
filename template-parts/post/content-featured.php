<?php
/**
 * Template part for displaying featured post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<?php 
// the query
$the_query = new WP_Query( array(
    'posts_per_page' => 1,
)); 
?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<div class="page-title">News<span>Recent</span></div>            
<article class="featured">
    <a href="<?php the_permalink(); ?>">
        <container class="featured-content">

            <p class="featured-title post-title"><?php the_title(); ?></p>
            <div class="post-excerpt content"><?php the_excerpt(); ?></div>

        </container>
    </a>
</article>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>

<div class="page-title">News</div>            
<article class="featured">
    <container class="featured-content">
        <p class="featured-title post-title">No News</p>
    </container>
</article>

<?php endif; ?>