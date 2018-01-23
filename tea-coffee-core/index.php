<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home. file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.4
 */

get_header(); ?>

<section class="page-header">
	<bubble>
		<h1>Index</h1>
	</bubble>
</section>

<div class="page-content content index-content">
	<container>
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_excerpt();?>
		<?php 
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
		?>
	</container>
</div>

<?php get_footer(); ?>