<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php

get_header();?>

<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

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