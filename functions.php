<?php

/*
* Valencia Marketing
* @package Valencia Marketing
* @subpackage Valencia Marketing
* @since 1.0
*/

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/images');
define('JS', THEMEROOT . '/js');


// Set content width value based on the theme's design
if (!isset($content_width))
    $content_width = 1200;

if (!function_exists('ama_custom_theme_features')) {

    // Register Theme Features
    function ama_custom_theme_features()
    {

        // Add theme support for Automatic Feed Links
        add_theme_support('automatic-feed-links');

        // Add theme support for Post Formats
        add_theme_support('post-formats', array('video', 'audio'));

        // Add theme support for Featured Images
        add_theme_support('post-thumbnails', array(''));

        // Add theme support for Custom Background
        $background_args = array(
            'default-color'          => 'ffffff',
            'default-image'          => '',
            'default-repeat'         => '',
            'default-position-x'     => '',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        );
        add_theme_support('custom-background', $background_args);

        // Add theme support for HTML5 Semantic Markup
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

        // Add theme support for document Title tag
        add_theme_support('title-tag');

        //Imagen destacada
        add_theme_support('post-thumbnails');

        // Add theme support for Translation
        load_theme_textdomain('valencia_marketing', get_template_directory() . '/languages');

        add_image_size('blog_size_image', 1200, 900, true);
    }
    add_action('after_setup_theme', 'ama_custom_theme_features');
}

// Agregar soporte para el campo de extracto en las páginas
function agregar_extracto_a_paginas()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'agregar_extracto_a_paginas');

// Agregar soporte para etiquetas en páginas
function agregar_etiquetas_a_paginas()
{
    register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'agregar_etiquetas_a_paginas');

// Agregar soporte para categorías en páginas
function agregar_categorias_a_paginas()
{
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'agregar_categorias_a_paginas');


//Agregar meta description
function agregar_meta_descripcion()
{
    // Obtener la descripción del post o página actual
    $descripcion = '';

    if (is_singular()) { // Si es una entrada individual o página
        $descripcion = get_the_excerpt(); // Obtener el extracto del post
    } elseif (is_home() || is_front_page()) { // Si es la página de inicio
        $descripcion = get_bloginfo('description'); // Obtener la descripción del sitio
    }

    // Imprimir la etiqueta meta con la descripción
    if (!empty($descripcion)) {
        echo '<meta name="description" content="' . esc_attr($descripcion) . '">';
    }
}
add_action('wp_head', 'agregar_meta_descripcion');

/* Cargando hojas de estilos */
require_once('includes/scripts-styles.php');

/* Cargando items menus */
require_once('includes/menus.php');

/* Cargando Widgets */
require_once('includes/sidebars.php');

/* Cargando Personzalizador Tema */
require_once('includes/personalizador-tema.php');



// Registrar el menú
function registrar_menu_principal()
{
    register_nav_menus(array(
        'main-menu' => __('Menú Principal')
    ));
}
add_action('after_setup_theme', 'registrar_menu_principal');

// Clase Walker personalizada
class Custom_Nav_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $active_class = in_array('current-menu-item', $item->classes) ? ' active' : '';
        $output .= '<a href="' . esc_url($item->url) . '" class="nav-item nav-link' . $active_class . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
}

// Registrar zonas de widgets en el Footer
function mi_tema_widgets_footer()
{

    register_sidebar(array(
        'name'          => 'Footer - Columna 1',
        'id'            => 'footer_columna_1',
        'before_widget' => '<div class="footer-widget footer-columna-1">',
        'after_widget'  => '</div>',
        // 'before_title'  => '<h3 class="titulo-footer">',
        // 'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'Footer - Columna 2',
        'id'            => 'footer_columna_2',
        'before_widget' => '<div class="footer-widget footer-columna-2">',
        'after_widget'  => '</div>',
        // 'before_title'  => '<h3 class="titulo-footer">',
        // 'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'Footer - Columna 3',
        'id'            => 'footer_columna_3',
        'before_widget' => '<div class="footer-widget footer-columna-3">',
        'after_widget'  => '</div>',
        // 'before_title'  => '<h3 class="titulo-footer">',
        // 'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mi_tema_widgets_footer');


// Registrar menú de Enlaces Rápidos en el Footer
function mi_tema_menus()
{
    register_nav_menus(array(
        'menu_footer' => 'Menú Footer'
    ));
}
add_action('after_setup_theme', 'mi_tema_menus');

// En functions.php de tu tema o child theme
function registrar_mis_menus()
{
    register_nav_menu('principal-menu', __('Menú Principal', 'valencia_marketing'));
}
add_action('after_setup_theme', 'registrar_mis_menus');
