<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>


    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Site Meta -->
    <meta name="description" content="<?php echo esc_attr(get_the_excerpt()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!-- ======================== Language Selector ======================= -->
    <aside class="lenguajes-selector" aria-label="Selector de idioma">
        <?php
        $lang = get_current_lang();

        // Título según idioma actual
        $heading = ($lang === 'en') ? 'Select a language' : 'Selecciona un idioma';

        // Define URLs base por idioma
        $base_url = home_url('/');
        $languages = [
            'en' => $base_url,
            'es' => trailingslashit($base_url) . 'es/',
        ];
        ?>

        <h2 class="lenguajes-titulo"><?php echo esc_html($heading); ?></h2>

        <ul class="language-switcher">
            <?php foreach ($languages as $code => $url) :
                $flag_url = IMAGES . "/flags/{$code}.png";
            ?>
                <li class="<?php echo ($lang === $code) ? 'active' : ''; ?>">
                    <a href="<?php echo esc_url($url); ?>">
                        <img src="<?php echo esc_url($flag_url); ?>" alt="<?php echo esc_attr(strtoupper($code)); ?>" width="30" height="auto" style="vertical-align: middle; margin-right: 6px;">
                        <?php //echo strtoupper($code); 
                        ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </aside>

    <!-- ======================== Desktop Menu Area ======================= -->
    <header class="header-area-desktop miwlo-white-bg miwlo-header-black">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-md miwlo-initial-navbar">


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

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <?php
                                $lang = get_current_lang();

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

                            <ul class="button-wrapper ml-5">
                                <li>
                                    <?php
                                    $lang = get_current_lang();

                                    $cta_text = get_theme_mod("valencia_marketing_cta_text_{$lang}");
                                    $cta_url  = get_theme_mod("valencia_marketing_cta_url_{$lang}");

                                    if (!empty($cta_text) && !empty($cta_url)) : ?>
                                        <a class="miwlo-btn-pill btn-black" href="<?php echo esc_url($cta_url); ?>" target="_blank" title="<?php echo esc_attr($cta_text); ?>">
                                            <?php echo esc_html($cta_text); ?>
                                        </a>
                                    <?php endif; ?>

                                </li>
                            </ul>
                        </div><!-- .collapse .navbar-collapse -->
                    </nav>
                </div><!-- .col-xs-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header>

    <!-- ======================== Mobile Menu Area ======================= -->
    <nav class="miwlo-header-area-mobile">
        <div class="miwlo-header-mobile">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ul class="active">
                            <li>
                                <?php
                                $options = get_theme_mod('ama_settings');

                                //Logo
                                if (!empty($options['logo'])) {
                                    $logo = $options['logo'];
                                }
                                ?>
                                <a class="mobile-logo" href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo $logo ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
                                </a>
                            </li>
                            <li class="mobile-header-btn-wrapper">
                                <?php
                                // 1) Recuperar el array completo que WP guarda bajo "ama_settings"
                                $ama_opts = get_theme_mod('ama_settings', []);

                                // 2) Extraer el texto y la URL, con fallback a tus predeterminados
                                $cta_text = ! empty($ama_opts['cta_text']) ? $ama_opts['cta_text'] : 'Reserva tu cita';
                                $cta_url  = ! empty($ama_opts['cta_url']) ? $ama_opts['cta_url']  : '#';
                                ?>

                                <?php if ($cta_text && $cta_url) : ?>

                                    <a class="miwlo-btn-pill btn-black" target="_blank" title="<?php echo esc_attr($cta_text); ?>" href="<?php echo esc_url($cta_url); ?>">
                                        <?php echo esc_html($cta_text); ?>
                                    </a>

                                <?php endif; ?>

                            <li>
                                <a href="#">
                                    <span>
                                        <span class="bar"></span>
                                        <span class="bar"></span>
                                        <span class="bar"></span>
                                    </span>
                                </a>
                                <ul>
                                    <?php
                                    $lang = get_current_lang(); // Asegúrate de tener esta función funcionando correctamente

                                    $menu_location = ($lang === 'en') ? 'principal-menu-en' : 'principal-menu';

                                    wp_nav_menu([
                                        'theme_location' => $menu_location,
                                        'container'      => false,
                                        'items_wrap'     => '%3$s', // Solo imprime los <li> sin <ul>
                                        'fallback_cb'    => false
                                    ]);
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .miwlo-header-mobile -->
    </nav>