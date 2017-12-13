    <footer class="main main-footer">
        <container>
            <nav class="main-footer-links">
                <?php $args = array('theme_location' => 'footer'); ?>
                <?php wp_nav_menu( $args ); ?>
                <span><icon class="main-footer-icon"></icon></span>
            </nav>
        </container>
    </footer>
    <light></light>
    <!--[if lt IE 9]>
        <script src="js/scripts.js"></script>
    <![endif]-->
    <?php wp_footer(); ?>
</body>
</html>