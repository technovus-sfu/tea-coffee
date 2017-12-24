<?php
/**
 * Generic site head for multiple pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.1
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Homepage">
    <meta name="author" content="Technovus">

    <link href="https://fonts.googleapis.com/css?family=Audiowide|Kanit|Ubuntu|Raleway" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <?php wp_head() ?>
</head>

<body>
<div id="mobile-nav-view">
    <nav class="composite-mobile-navigation">
        <?php $args = array('theme_location' => 'primary'); ?>
        <?php wp_nav_menu( $args ); ?> 
        <?php dynamic_sidebar('header1'); ?>
    </nav>
</div>