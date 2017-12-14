<?php

	get_head();
?>
    <header class="main main-header project-header">
        <container>
            <div class="title-head">
                <a href="<?php echo get_bloginfo('wpurl') ?>" class="title">
                    <icon class="main-header-icon"></icon>
                    <span><?php echo get_bloginfo('name')?></span>
                </a>
                <div class="flex right">
                    <nav class="social-links">
                        <?php $args = array('theme_location' => 'social'); ?>
                        <?php wp_nav_menu( $args ); ?> 
                    </nav>
                </div>
            </div>
            <nav class="site-links">
                <?php $args = array('theme_location' => 'primary'); ?>
                <?php wp_nav_menu( $args ); ?>
            </nav>
        </container>
    </header>
<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<section class="projects-header">
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