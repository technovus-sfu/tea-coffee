<?php
/**
 * Generic site head for multiple pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php echo get_bloginfo('name'); ?> | <?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Homepage">
    <meta name="author" content="Technovus">
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Audiowide|Kanit|Ubuntu" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <?php wp_head() ?>
</head>

<body>