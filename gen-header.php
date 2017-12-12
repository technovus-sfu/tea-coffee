<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Homepage">
    <meta name="author" content="Technovus">
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Audiowide|Ubuntu" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
    <?php wp_head();?>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
    <section class="header-section">
        <header class="fixed-top">
            <div class="container">
                <a href="#">
                    <icon class="header-icon"></icon>
                </a>
                <nav>
                    <a class="nav-item active" href="#">Technovus</a>
                    <a class="nav-item" href="#">About</a>
                    <a class="nav-item" href="#">News</a>
                    <a class="nav-item" href="#">Projects</a>
                    <a class="nav-item" href="#">Links</a>      
                </nav>
                <datetime class="right">
                    <?php 
                        $mydate=getdate(date("U"));
                        echo "$mydate[weekday]  $mydate[month] $mydate[mday], $mydate[year]";
                    ?>
                </datetime>
            </div>
        </header>
        <span class="header-shadow"></span>
        <div class="container">
            <bubble>
                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
            </bubble>
        </div>
    </section>