<?php
/**
 * Template part for displaying footer logo
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.1
 */
?>

<span>
    <?php 
    if( has_custom_logo() ) :
            the_custom_logo(); 
    ?>
    <?php else : ?>
        An SFSS Society
    <?php endif; ?>
</span>