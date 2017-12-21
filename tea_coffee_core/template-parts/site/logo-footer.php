<?
/**
 * Template part for displaying footer logo
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.0.0
 */
?>

<span>
    <? 
    if( has_custom_logo() ) :
            the_custom_logo(); 
    ?>
    <? else : ?>
        An SFSS Society
    <? endif; ?>
</span>