<?php
/**
 * Template part for displaying page content in page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.3
 * 
 * Template Name: Event
 */

get_header(); ?>

<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<section id="event-page-header" class="page-header">
		<bubble>
			<h1><?php the_title(); ?></h1>
            <span id="event-year"><?php echo get_theme_mod('cfe-event-year'); ?></span>
            <span id="event-datetime"><?php echo get_theme_mod('cfe-event-datetime'); ?></span>
            <span id="event-location"><?php echo get_theme_mod('cfe-event-location'); ?></span>
		</bubble>
	</section>

	<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

	<?php endwhile;
	else :
		echo '<p>No content found</p>';
endif;

get_footer();
	
?>