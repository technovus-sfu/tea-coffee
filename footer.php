    <footer class="">
        <container>
            <nav class="splash-footer-links">
                <?php $args = array('theme_location' => 'footer'); ?>
                <?php wp_nav_menu( $args ); ?>
                <span><icon class="splash-footer-icon"></icon></span>
            </nav>
        </container>
    </footer>
    <!--[if lt IE 9]>
        <script src="js/scripts.js"></script>
    <![endif]-->
    <?php wp_footer(); ?>
</body>
</html>