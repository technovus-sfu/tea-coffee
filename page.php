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

	<article class="post">
		<?php the_content(); ?>
	</article>

	<?php endwhile;
	else :
		echo '<p>No content found</p>';
endif;

get_footer();
	
?>