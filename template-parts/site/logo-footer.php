<?php
/**
 * Template part for displaying footer logo
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Coffee
 * @version 1.0.0
 */
?>

<span>
    <?php if( has_custom_logo() ) { ?>
        <icon class="footer-icon">
            <?php the_custom_logo(); ?>
        </icon>
    <?php } else { ?>
        An SFSS Society
    <?php } ?>
</span>