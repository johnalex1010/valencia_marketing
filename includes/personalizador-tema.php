<?php

/*
* Valencia Marketing
* @package Valencia Marketing
* @subpackage Valencia Marketing
* @since 1.0
*/

function valencia_marketing_customize_register($wp_customize)
{
    // -----------------------------------
    //panel encabezado
    $wp_customize->add_panel('valencia_marketing_header_panel', array(
        'title' => __('Encabezado', 'valencia_marketing'),
        'description' => __('Opciones de encabezado', 'valencia_marketing'),
        'priority' => 35
    ));

    //Seccion encabezado LOGO
    $wp_customize->add_section('valencia_marketing_header_normal', array(
        'title' => __('Logo', 'valencia_marketing'),
        'description' => __('Opciones de Logo', 'valencia_marketing'),
        'priority' => 10,
        'panel' => 'valencia_marketing_header_panel'
    ));

    // LOGO
    $wp_customize->add_setting('valencia_marketing_logo', array(
        'default' => '',
        'type'    => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'valencia_marketing_logo_control', array(
        'label'       => __('Logo', 'valencia_marketing'),
        'description' => __('Carga el logo del sitio', 'valencia_marketing'),
        'section'     => 'valencia_marketing_header_normal',
        'settings'    => 'valencia_marketing_logo',
    )));


    // Idiomas disponibles
    $languages = [
        'es' => 'Español',
        'en' => 'English',
    ];

    foreach ($languages as $lang_code => $lang_label) {
        // Sección del botón CTA por idioma
        $section_id = "valencia_marketing_header_cta_section_{$lang_code}";

        $wp_customize->add_section($section_id, array(
            'title'       => __('Botón Call To Action', 'valencia_marketing') . " ($lang_label)",
            'description' => __('Configura texto y enlace del botón CTA en el encabezado', 'valencia_marketing') . " ($lang_label)",
            'priority'    => ($lang_code === 'es') ? 20 : 21,
            'panel'       => 'valencia_marketing_header_panel',
        ));

        // Texto del botón
        $wp_customize->add_setting("valencia_marketing_cta_text_{$lang_code}", [
            'default'           => ($lang_code === 'en') ? 'Book your appointment' : 'Reserva tu cita',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("valencia_marketing_cta_text_control_{$lang_code}", [
            'label'    => __('Texto del botón', 'valencia_marketing') . " ($lang_label)",
            'section'  => $section_id,
            'settings' => "valencia_marketing_cta_text_{$lang_code}",
            'type'     => 'text',
        ]);

        // URL del botón
        $wp_customize->add_setting("valencia_marketing_cta_url_{$lang_code}", [
            'default'           => '',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control("valencia_marketing_cta_url_control_{$lang_code}", [
            'label'    => __('URL del botón', 'valencia_marketing') . " ($lang_label)",
            'section'  => $section_id,
            'settings' => "valencia_marketing_cta_url_{$lang_code}",
            'type'     => 'url',
        ]);
    }


    // Panel Pie de Página
    $wp_customize->add_panel('valencia_marketing_footer_panel', array(
        'title' => __('Pie de Página', 'valencia_marketing'),
        'description' => __('Opciones del pie de página', 'valencia_marketing'),
        'priority' => 40
    ));

    // Sección Logo Footer
    $wp_customize->add_section('valencia_marketing_footer_logo_section', array(
        'title' => __('Logo del Footer', 'valencia_marketing'),
        'description' => __('Carga el logo que aparecerá en el pie de página', 'valencia_marketing'),
        'priority' => 10,
        'panel' => 'valencia_marketing_footer_panel'
    ));

    // Ajuste para subir imagen (logo footer)
    $wp_customize->add_setting('valencia_marketing_footer_logo', array(
        'default' => '',
        'type' => 'theme_mod',
        'sanitize_callback' => 'esc_url'
    ));

    // Control de imagen para el logo del footer
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => __('Logo del Footer', 'valencia_marketing'),
        'description' => __('Sube una imagen que se mostrará como logo en el pie de página.', 'valencia_marketing'),
        'section' => 'valencia_marketing_footer_logo_section',
        'settings' => 'valencia_marketing_footer_logo'
    )));
}

add_action('customize_register', 'valencia_marketing_customize_register');
