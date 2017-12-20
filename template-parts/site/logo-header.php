<?php
/**
 * Template part for displaying header logo
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Coffee
 * @version 1.0.0
 */
?>

<?php 
    if( has_custom_logo() ) { ?>
        <icon class="header-icon">
            <?php the_custom_logo(); ?>
        </icon>
    <?php }
?>