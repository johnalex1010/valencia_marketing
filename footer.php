    <!-- footer -->
    <footer class="footer-bg footer-p pt-90" style="background: url('<?php echo IMAGES ?>/bg/f-bg.png'); background-size: cover;">
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <?php
                            $footer_logo = get_theme_mod('ama_footer_logo');
                            ?>
                            <div class="flog mb-25">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php if (!empty($footer_logo)): ?>
                                        <img src="<?php echo esc_url($footer_logo); ?>" alt="logo pie de página">
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/w_logo.png" alt="logo por defecto">
                                    <?php endif; ?>
                                </a>
                            </div>



                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6">
                        <div class="footer-widget mb-30">

                            <div class="footer-link">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu_footer',
                                    'container' => false,
                                    'menu_class' => '', // No usa una clase por defecto en <ul>
                                    'items_wrap' => '<ul>%3$s</ul>',
                                    'depth' => 1,
                                    'fallback_cb' => false,
                                    'link_before' => '<i class="fas fa-chevron-right"></i>',
                                    'link_after' => '',
                                ));
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg">
                        &copy; 2025 creador por <a href="#" class="text-white">John Alex</a>.
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->


    <?php wp_footer(); ?>
    </body>

    </html>