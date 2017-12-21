<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.0
 */

get_header(); ?>

<?php

if (have_posts()) :
	while (have_posts()) : the_post();?>

	<section class="page-header">
		<bubble>
			<h1><?php the_title(); ?></h1>
		</bubble>
	</section>

	<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

	<?php endwhile;
	else :
		echo '<p>No content found</p>';
endif;

get_footer();
	
?>