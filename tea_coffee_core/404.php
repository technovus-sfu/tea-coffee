<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.0
 */

get_template_part( 'template-parts/site/site', 'head' ); ?>

<section class="splash-section">
    <bubble>
        <div class="error splash-info">
            <div class="splash-info-content">
                <div class="heading">404</div>
                <div class="text">
                    These are not the droids youre looking for. Try escaping to <a href="<?php echo get_bloginfo('wpurl'); ?>">Home</a>.
                </div>
            </div>
        </div>
    </bubble>
</section>
</body>
</html>
