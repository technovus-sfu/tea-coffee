<?
/**
 * Template part for displaying page content in page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.0
 */

get_header(); ?>

<?
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<section class="page-header">
		<bubble>
			<h1><? the_title(); ?></h1>
		</bubble>
	</section>

	<? get_template_part( 'template-parts/page/content', 'page' ); ?>

	<? endwhile;
	else :
		echo '<p>No content found</p>';
endif;

get_footer();
	
?>