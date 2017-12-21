<?
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
 * @version 1.0
 */

get_header(); ?>

<section class="page-header">
	<bubble>
		<h1>Index</h1>
	</bubble>
</section>

<div class="page-content content index-content">
	<container>
		<?
		if (have_posts()) :
			while (have_posts()) : the_post();
		?>
				<h1><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h1>
				<? the_excerpt();?>
		<? 
			endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
		?>
	</container>
</div>

<? get_footer(); ?>