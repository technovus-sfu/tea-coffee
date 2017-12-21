<? 
/**
 * Front page of website
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.0.0
 */

get_template_part( 'template-parts/site/site', 'head' ); ?>

<section class="splash-section">
    <bubble>
        <? get_template_part( 'template-parts/header/analog', 'header'); ?>

        <div class="splash-info">
            <div class="splash-info-content">
                <span><? echo get_theme_mod('cfe-splash-info-headline'); ?></span>
                <span class="typewriter">
                    <p><? echo get_theme_mod('cfe-splash-info-typing-prompt'); ?> 
                        <span class="txt-rotate" data-period="<? echo get_theme_mod('cfe-splash-info-typing-speed')?>" 
                        data-rotate='<? echo get_theme_mod('cfe-splash-info-typing-array');?>'></span>
                    <p>
                </span> 
            </div>
            <nav class="shortcut-links">
                <? $args = array('theme_location' => 'shortcuts'); ?>
                <? wp_nav_menu( $args ) ?>
            </nav>
        </div>

        <div class="splash-footer">
            <container>
                <nav class="footer-links">
                    <? $args = array('theme_location' => 'footer'); ?>
                    <? wp_nav_menu( $args ); ?>
                    <? get_template_part( 'template-parts/site/logo', 'footer' ); ?>
                </nav>
            </container>
        </div> 
    </bubble>
</section>
<script src="<? echo get_bloginfo( 'template_directory' );?>/assets/js/front-page.js"></script>
<!--[if lt IE 9]>
    <script src="js/scripts.js"></script>
<![endif]-->
<? wp_footer(); ?>
</body>
</html>