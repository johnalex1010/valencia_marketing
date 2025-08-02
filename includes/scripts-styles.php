<?php

/*
* Huevos Guativita
* @package Huevos Guativita
* @subpackage Huevos Guativita
* @since 1.0
*/


/*
Cargando estilos
*/

function ama_theme_styles()
{

    $theme_version = wp_get_theme()->get('Version');
    $theme_uri = get_template_directory_uri();

    // Google Fonts base (ejemplo de precarga)
    wp_enqueue_style('g-fonts-1-css', 'https://fonts.googleapis.com', [], $theme_version);

    // Estilos principales
    wp_enqueue_style('bootstrap-css', $theme_uri . '/styles/bootstrap.min.css', [], $theme_version);
    wp_enqueue_style('animate-css', $theme_uri . '/styles/animate.min.css', [], $theme_version);
    wp_enqueue_style('magnific-popup-css', $theme_uri . '/styles/magnific-popup.css', [], $theme_version);
    wp_enqueue_style('fontawesome-css', $theme_uri . '/lib/fontawesome/css/all.min.css', [], $theme_version);
    wp_enqueue_style('flaticon-css', $theme_uri . '/lib/font-flaticon/flaticon.css', [], $theme_version);
    wp_enqueue_style('dripicons-css', $theme_uri . '/styles/dripicons.css', [], $theme_version);
    wp_enqueue_style('slick-css', $theme_uri . '/styles/slick.css', [], $theme_version);
    wp_enqueue_style('meanmenu-css', $theme_uri . '/styles/meanmenu.css', [], $theme_version);
    wp_enqueue_style('default-css', $theme_uri . '/styles/default.css', [], $theme_version);
    wp_enqueue_style('responsive-css', $theme_uri . '/styles/responsive.css', [], $theme_version);
    wp_enqueue_style('main-style-css', $theme_uri . '/styles/style.css', [], $theme_version);
}



add_action('wp_enqueue_scripts', 'ama_theme_styles');


/*
Cargando scripts
*/

function ama_theme_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    $theme_uri     = get_template_directory_uri();
    // Modernizr en el head
    wp_enqueue_script('modernizr-js', $theme_uri . '/js/vendor/modernizr-3.5.0.min.js', [], $theme_version, false);

    // jQuery local (sobrescribe el de WP si es necesario)
    wp_enqueue_script('jquery-local', $theme_uri . '/js/vendor/jquery-1.12.4.min.js', [], $theme_version, true);

    // Resto de scripts en el footer
    wp_enqueue_script('popper-js',             $theme_uri . '/js/popper.min.js',             ['jquery-local'], $theme_version, true);
    wp_enqueue_script('bootstrap-js',          $theme_uri . '/js/bootstrap.min.js',          ['popper-js'],    $theme_version, true);
    wp_enqueue_script('one-page-nav-js',       $theme_uri . '/js/one-page-nav-min.js',       ['jquery-local'], $theme_version, true);
    wp_enqueue_script('slick-js',              $theme_uri . '/js/slick.min.js',              ['jquery-local'], $theme_version, true);
    wp_enqueue_script('ajax-form-js',          $theme_uri . '/js/ajax-form.js',              ['jquery-local'], $theme_version, true);
    wp_enqueue_script('paroller-js',           $theme_uri . '/js/paroller.js',               ['jquery-local'], $theme_version, true);
    wp_enqueue_script('wow-js',                $theme_uri . '/js/wow.min.js',                [],               $theme_version, true);
    wp_enqueue_script('isotope-js',            $theme_uri . '/js/js_isotope.pkgd.min.js',    ['jquery-local'], $theme_version, true);
    wp_enqueue_script('imagesloaded-js',       $theme_uri . '/js/imagesloaded.min.js',       ['isotope-js'],   $theme_version, true);
    wp_enqueue_script('parallax-js',           $theme_uri . '/js/parallax.min.js',           [],               $theme_version, true);
    wp_enqueue_script('waypoints-js',          $theme_uri . '/js/jquery.waypoints.min.js',   ['jquery-local'], $theme_version, true);
    wp_enqueue_script('counterup-js',          $theme_uri . '/js/jquery.counterup.min.js',   ['waypoints-js'], $theme_version, true);
    wp_enqueue_script('scrollup-js',           $theme_uri . '/js/jquery.scrollUp.min.js',    ['jquery-local'], $theme_version, true);
    wp_enqueue_script('meanmenu-js',           $theme_uri . '/js/jquery.meanmenu.min.js',    ['jquery-local'], $theme_version, true);
    wp_enqueue_script('parallax-scroll-js',    $theme_uri . '/js/parallax-scroll.js',        ['jquery-local'], $theme_version, true);
    wp_enqueue_script('magnific-popup-js',     $theme_uri . '/js/jquery.magnific-popup.min.js', ['jquery-local'], $theme_version, true);
    wp_enqueue_script('element-in-view-js',    $theme_uri . '/js/element-in-view.js',        [],               $theme_version, true);
    wp_enqueue_script('main-js',               $theme_uri . '/js/main.js',                   ['jquery-local'], $theme_version, true);
}

add_action('wp_enqueue_scripts', 'ama_theme_scripts');


//------------------------
// INICIO SCROLL INFINITE
//------------------------
// En el archivo functions.php
function enqueue_infinite_scroll_script()
{
    if (is_page_template('template-parts/blog.php')) {
        wp_enqueue_script('infinite-scroll', get_template_directory_uri() . '/js/infinite-scroll.js', array('jquery'), null, true);
        wp_localize_script('infinite-scroll', 'ajax_params', array(
            'ajax_url' => admin_url('admin-ajax.php'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'enqueue_infinite_scroll_script');


function loadmore_ajax_handler()
{
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8, // Mantener la consistencia con el número de posts inicial
        'paged' => $_POST['page'] + 1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <article class="blog_card">
                <div class="blog_item_image">
                    <?php
                    if (has_post_thumbnail()) {
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

                        echo '<img src="' . esc_url(get_the_post_thumbnail_url($post->ID, 'full')) . '" alt="' . esc_attr($alt) . '" title="' . esc_attr($alt) . '">';
                    }
                    ?>
                </div>
                <div class="blog_item_text">
                    <div class="blog_item_text_title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="blog_item_text_paragraph">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="blog_item_text_link">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="boton">Leer más... <span class="fa-solid fa-book-open-reader"></span></a>
                    </div>
                </div>
            </article>
<?php endwhile;
    endif;
    wp_reset_postdata();
    die();
}


add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');


function infinite_scroll_params()
{
    global $wp_query;

    // Sólo ejecutar en la plantilla de scroll infinito
    if (is_page_template('template-parts/blog.php')) {
        wp_localize_script('infinite-scroll', 'infinite_scroll_params', array(
            'posts' => json_encode($wp_query->query_vars),
            'current_page' => max(1, get_query_var('paged')),
            'max_page' => $wp_query->max_num_pages
        ));
    }
}
add_action('wp_enqueue_scripts', 'infinite_scroll_params');

//------------------------
// FIN SCROLL INFINITE
//------------------------
