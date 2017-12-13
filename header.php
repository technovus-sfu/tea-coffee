<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Technovus | General</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Homepage">
    <meta name="author" content="Technovus">
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Audiowide|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="css/general-styles.css?v=1.0">
    <link rel="stylesheet" href="css/home-styles.css?v=1.0">
    

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
    <header class="">
        <container>
            <div class="title-head">
                <a href="#" class="title">
                    <icon class="splash-header-icon"></icon>
                    <span>Technovus</span>
                </a>
                <div class="flex right">
                    <nav class="social-links">
                        <?php $args = array('theme_location' => 'social'); ?>
                        <?php wp_nav_menu( $args ); ?>                                
                    </nav>
                    <label for="header-main--trigger">
                            <span class="header-main--trigger_icon">
                                <i class="header-main--cross_hatch">×</i>
                            </span>
                    </label>
                </div>
            </div>
            <nav class="site-links">
                <?php $args = array('theme_location' => 'primary'); ?>
                <?php wp_nav_menu( $args ); ?>
            </nav>
        </container>
</header>