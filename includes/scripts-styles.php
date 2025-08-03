<?php

/*
* Valencia Marketing
* @package Valencia Marketing
* @subpackage Valencia Marketing
* @since 1.0
*/


/*
Cargando estilos
*/

function valencia_marketing_theme_styles()
{

    $theme_version = wp_get_theme()->get('Version');
    $theme_uri = get_template_directory_uri();

    // Estilos principales
    wp_enqueue_style('normalize-css', $theme_uri . '/css/normalize.css', [], $theme_version);
    wp_enqueue_style('slinky-css', $theme_uri . '/css/slinky.min.css', [], $theme_version);
    wp_enqueue_style('slinky-mobile-theme', $theme_uri . '/css/slinky-mobile-theme.css', [], $theme_version);
    wp_enqueue_style('font-awesome', $theme_uri . '/css/font-awesome.min.css', [], $theme_version);
    wp_enqueue_style('swiper-css', $theme_uri . '/lib/vendors/swiper-11.2.10/swiper-bundle.min.css', [], $theme_version);
    wp_enqueue_style('bootstrap-css', $theme_uri . '/lib/vendors/bootstrap-5.1.3/dist/css/bootstrap.min.css', [], $theme_version);
    wp_enqueue_style('main-css', $theme_uri . '/css/main.css', [], $theme_version);
    wp_enqueue_style('reset-css', $theme_uri . '/css/reset.css', [], $theme_version);
    wp_enqueue_style('miwlo-css', $theme_uri . '/css/miwlo.css', [], $theme_version);
    wp_enqueue_style('responsive-css', $theme_uri . '/css/responsive.css', [], $theme_version);
}



add_action('wp_enqueue_scripts', 'valencia_marketing_theme_styles');


/*
Cargando scripts
*/

function valencia_marketing_theme_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    $theme_uri     = get_template_directory_uri();


    // Resto de scripts en el footer
    // jQuery (personalizado, no el nativo de WP)
    wp_enqueue_script('jquery-local', $theme_uri . '/lib/vendors/code.jquery.com/jquery-3.6.0.min.js', [], $theme_version, true);

    // Bootstrap
    wp_enqueue_script('bootstrap', $theme_uri . '/lib/vendors/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js', ['jquery-local'], $theme_version, true);

    // Modernizr (debe ir en head)
    wp_enqueue_script('modernizr', $theme_uri . '/js/vendor/modernizr-3.11.2.min.js', [], $theme_version, false);

    // Parallax
    wp_enqueue_script('parallax', $theme_uri . '/js/parallax.min.js', [], $theme_version, true);
    wp_enqueue_script('parallax-scroll', $theme_uri . '/js/parallax-scroll.js', ['parallax'], $theme_version, true);

    // Swiper (slider)
    wp_enqueue_script('swiper-js', $theme_uri . '/lib/vendors/swiper-11.2.10/swiper-bundle.min.js', [], $theme_version, true);

    // FontAwesome JS (si es necesario, depende del uso)
    wp_enqueue_script('fontawesome-js', $theme_uri . '/js/font-awesome.min.js', [], $theme_version, true);

    // Slinky (menú móvil)
    wp_enqueue_script('slinky-js', $theme_uri . '/js/slinky.min.js', [], $theme_version, true);

    // App principal
    wp_enqueue_script('app-js', $theme_uri . '/js/app.js', [], $theme_version, true);
}

add_action('wp_enqueue_scripts', 'valencia_marketing_theme_scripts');
