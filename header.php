<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>


    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php
    if (is_single() && comments_open()) {
        wp_enqueue_script('comment-reply');
    }
    ?>


    <meta name="description" content="<?php echo esc_attr(get_the_excerpt()); ?>">
</head>

<body <?php body_class(); ?>>



    <!-- header -->
    <header class="header-area">
        <div class="header-top second-header d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 d-none  d-md-block">
                        <div class="header-cta">
                            <ul>
                                <li> Soy Profesional <i class="far fa-heart"></i> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-none d-lg-block">
                        <div class="header-social text-right">
                            <span>
                                <a href="https://www.facebook.com/INMOBILIARIAPRO" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/inmobiliaria_profesional/" target="_blank" title="Facebook"><i class="fab fa-instagram"></i></a>
                                <a href="https://es.linkedin.com/company/inmobiliariaprofesional" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </span>
                            <!--  /social media icon redux -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">

                            <?php
                            $options = get_theme_mod('ama_settings');

                            //Logo
                            if (!empty($options['logo'])) {
                                $logo = $options['logo'];
                            }
                            ?>
                            <div class="logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo $logo ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" class="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">

                            <div class="main-menu text-center text-xl-center">
                                <?php
                                wp_nav_menu([
                                    'theme_location' => 'principal-menu',
                                    'container'      => 'nav',
                                    'container_id'   => 'mobile-menu',
                                    'menu_class'     => '',         // Si quieres clases extra para el <ul>
                                    'depth'          => 2,          // Profundidad de submenús
                                    'fallback_cb'    => false,      // Si no hay menú asignado, no muestra nada
                                    'walker'         => ''          // Puedes usar un custom walker si tu HTML requiere tags especiales
                                ]);
                                ?>
                            </div>
                        </div>


                        <?php
                        // 1) Recuperar el array completo que WP guarda bajo "ama_settings"
                        $ama_opts = get_theme_mod('ama_settings', []);

                        // 2) Extraer el texto y la URL, con fallback a tus predeterminados
                        $cta_text = ! empty($ama_opts['cta_text']) ? $ama_opts['cta_text'] : 'Encuentra tu inmueble';
                        $cta_url  = ! empty($ama_opts['cta_url']) ? $ama_opts['cta_url']  : '#';
                        ?>

                        <?php if ($cta_text && $cta_url) : ?>
                            <div class="col-xl-3 col-lg-3 text-center d-none d-lg-block">
                                <a target="_blank" title="<?php echo esc_attr($cta_text); ?>" href="<?php echo esc_url($cta_url); ?>" class="btn ss-btn" style="padding: 14px;">
                                    <?php echo esc_html($cta_text); ?>
                                </a>
                            </div>
                        <?php endif; ?>






                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->