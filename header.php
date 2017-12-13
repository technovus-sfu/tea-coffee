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
    <header class="main main-header">
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