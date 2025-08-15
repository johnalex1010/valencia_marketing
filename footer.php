<!-- ========================== Footer Wrap ========================== -->
<footer class="miwlo-footer-wrap">
    <div class="footer-triangle-shape-top miwlo-parallax">
        <div class="layer" data-depth="1">
            <div>
                <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/shape-11.png" alt="Triangle">
            </div>
        </div>
    </div><!-- .footer-triangle-shape-top -->
    <div class="container">
        <div class="row">

            <div class="col-lg col-sm-4">
                <div class="miwlo-footer-text">
                    <?php
                    // Obtiene la URL del logo desde theme_mod
                    $logo = get_theme_mod('valencia_marketing_logo');

                    if (!empty($logo)) : ?>
                        <div class="logo">
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" class="logo">
                            </a>
                        </div>
                    <?php endif; ?>
                    <p><small>Copyright @ 2025<br> Designed by <a href="https://johnalex.com.co/" target="_blank">John Alex</a></small></p>
                    <!-- <ul class="miwlo-footer-social">
                        <li><a href="https://www.facebook.com/themestrace"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul> -->
                </div><!-- .miwlo-footer-text -->
            </div>
            <div class="col-lg col-sm-4">
                <div class="miwlo-footer-text">
                    <?php
                    $lang = get_current_lang();
                    $translations = [
                        'es' => 'Enlaces',
                        'en' => 'Links',
                    ];

                    $label = isset($translations[$lang]) ? $translations[$lang] : $translations['es'];
                    ?>

                    <h3><?php echo $label; ?></h3>

                    <ul>
                        <?php
                        $lang = get_current_lang(); // Asegúrate de tener esta función funcionando correctamente

                        $menu_location = ($lang === 'en') ? 'principal-menu-en' : 'principal-menu';

                        wp_nav_menu([
                            'theme_location' => $menu_location,
                            'container'      => 'nav',
                            'menu_class'     => 'navbar-nav ms-auto',
                            'depth'          => 2,
                            'fallback_cb'    => false
                        ]);
                        ?>
                    </ul>
                </div><!-- .miwlo-footer-text -->
            </div>
            <div class="col-lg col-sm-4">
                <div class="miwlo-footer-text">
                    <?php
                    $lang = get_current_lang();
                    $translations = [
                        'es' => 'Otros Enlaces',
                        'en' => 'Other Links',
                    ];

                    $label = isset($translations[$lang]) ? $translations[$lang] : $translations['es'];
                    ?>

                    <h3><?php echo $label; ?></h3>

                    <ul>
                        <?php
                        $lang = get_current_lang(); // Asegúrate de tener esta función funcionando correctamente

                        $menu_location = ($lang === 'en') ? 'otroslinks-menu-en' : 'otroslinks-menu';

                        wp_nav_menu([
                            'theme_location' => $menu_location,
                            'container'      => 'nav',
                            'menu_class'     => 'navbar-nav ms-auto',
                            'depth'          => 2,
                            'fallback_cb'    => false
                        ]);
                        ?>
                    </ul>
                </div><!-- .miwlo-footer-text -->
            </div>
            <!-- <div class="col-lg col-sm-4"></div> -->
        </div><!-- .row -->
    </div><!-- .container -->
    <div class="footer-triangle-shape-bottom miwlo-parallax">
        <div class="layer" data-depth="1">
            <div>
                <img data-parallax='{"y" : 30}' src="<?php echo IMAGES ?>/shape/shape-12.png" alt="Triangle">
            </div>
        </div>
    </div><!-- .footer-triangle-shape-bottom -->
    <!-- <img class="app-circle-shape-footer" src="<?php echo IMAGES ?>/shape/circle-line-footer.png" alt="Circle"> -->
</footer>


<?php wp_footer(); ?>
</body>

</html>