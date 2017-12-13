<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Technovus | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Homepage">
    <meta name="author" content="Technovus">
    <link rel="shortcut icon" href="" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Audiowide|Ubuntu|Kanit|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/css/front-page.css">
    
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
    <section class="splash-section">
        <bubble>
            <div class="splash-header">
                <container>
                    <div class="title-head">
                        <a href="#" class="title">
                            <icon class="splash-header-icon"></icon>
                            <span><?php echo get_bloginfo('name')?></span>
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
            </div>

            <div class="splash-info">
                <div class="splash-info-content">
                    <span><?php echo get_bloginfo('description'); ?></span>
                    <span class="typewriter">
                        <p>Community of Enthusiats.</p>
                    </span> 
                </div>
                <nav class="shortcut-links">
                    <a class="nav-item" href="#">WordPress</a>
                    <a class="nav-item" href="#">Swarmbots</a>
                    <a class="nav-item" href="#">Biped</a>
                    <a class="nav-item" href="#">Sixth Sense</a>
                    <a class="nav-item" href="#">Drawbot</a>
                </nav>
            </div>

            <div class="splash-footer">
                <container>
                    <nav class="splash-footer-links">
                        <?php $args = array('theme_location' => 'footer'); ?>
                        <?php wp_nav_menu( $args ); ?>
                        <span><icon class="splash-footer-icon"></icon></span>
                    </nav>
                </container>
            </div> 
        </bubble>
    </section>
    <!--[if lt IE 9]>
        <script src="js/scripts.js"></script>
    <![endif]-->
    <?php wp_footer(); ?>
</body>
</html>