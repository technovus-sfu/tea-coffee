<? 
/**
 * Main footer of website
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.0.0
 */
?>

<footer class="main main-footer">
    <container>
        <nav class="footer-links">
            <? $args = array('theme_location' => 'footer'); ?>
            <? wp_nav_menu( $args ); ?>
            <? get_template_part( 'template-parts/site/logo', 'footer' ); ?>
        </nav>
    </container>
</footer>
<light></light>
<!--[if lt IE 9]>
    <script src="js/scripts.js"></script>
<![endif]-->
<? wp_footer(); ?>
</body>
</html>