<?php

get_header();?>

<section class="page-header">
	<bubble>
		<h1><?php echo 'News' ?></h1>
	</bubble>
</section>

<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post">
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	</article>

	<?php endwhile;
	else :
		echo '<p>No content found</p>';
endif;

get_footer();
	
?>