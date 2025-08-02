<?php

/*
* Inmobiliaria Profesional
* @package Inmobiliaria rofesional
* @subpackage Inmobiliaria rofesional
* @since 1.0
*/

function ama_customize_register($wp_customize)
{
    // -----------------------------------
    //panel encabezado
    $wp_customize->add_panel('ama_header_panel', array(
        'title' => __('Encabezado', 'inmobiliaria_profesional'),
        'description' => __('Opciones de encabezado', 'inmobiliaria_profesional'),
        'priority' => 35
    ));

    //Seccion encabezado LOGO
    $wp_customize->add_section('ama_header_normal', array(
        'title' => __('Logo', 'inmobiliaria_profesional'),
        'description' => __('Opciones de Logo', 'inmobiliaria_profesional'),
        'priority' => 10,
        'panel' => 'ama_header_panel'
    ));

    //LOGO
    $wp_customize->add_setting('ama_settings[logo]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label' =>  __('Logo', 'inmobiliaria_profesional'),
        'description' => __('Carga Logo', 'inmobiliaria_profesional'),
        'section' => 'ama_header_normal',
        'settings' => 'ama_settings[logo]'
    )));

    // ————— Sección Botón CTA en el Header —————
    $wp_customize->add_section('ama_header_cta_section', array(
        'title'       => __('Botón Call To Action', 'inmobiliaria_profesional'),
        'description' => __('Configura texto y enlace del botón CTA en el encabezado', 'inmobiliaria_profesional'),
        'priority'    => 20,
        'panel'       => 'ama_header_panel',
    ));

    // Dentro de ama_customize_register()
    $wp_customize->add_setting('ama_settings[cta_text]', [
        'default'           => 'Encuentra tu inmueble',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('cta_text_control', [
        'label'    => __('Texto del botón', 'inmobiliaria_profesional'),
        'section'  => 'ama_header_cta_section',
        'settings' => 'ama_settings[cta_text]',
        'type'     => 'text',
    ]);

    $wp_customize->add_setting('ama_settings[cta_url]', [
        'default'           => 'contact.html',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('cta_url_control', [
        'label'    => __('URL del botón', 'inmobiliaria_profesional'),
        'section'  => 'ama_header_cta_section',
        'settings' => 'ama_settings[cta_url]',
        'type'     => 'url',
    ]);






    // Sección: Botón Call To Action
    $wp_customize->add_section('ama_header_cta_button', array(
        'title' => __('Botón Call To Action', 'inmobiliaria_profesional'),
        'description' => __('Configura el botón del encabezado', 'inmobiliaria_profesional'),
        'priority' => 20,
        'panel' => 'ama_header_panel'
    ));

    // Panel Pie de Página
    $wp_customize->add_panel('ama_footer_panel', array(
        'title' => __('Pie de Página', 'inmobiliaria_profesional'),
        'description' => __('Opciones del pie de página', 'inmobiliaria_profesional'),
        'priority' => 40
    ));

    // Sección Logo Footer
    $wp_customize->add_section('ama_footer_logo_section', array(
        'title' => __('Logo del Footer', 'inmobiliaria_profesional'),
        'description' => __('Carga el logo que aparecerá en el pie de página', 'inmobiliaria_profesional'),
        'priority' => 10,
        'panel' => 'ama_footer_panel'
    ));

    // Ajuste para subir imagen (logo footer)
    $wp_customize->add_setting('ama_footer_logo', array(
        'default' => '',
        'type' => 'theme_mod',
        'sanitize_callback' => 'esc_url'
    ));

    // Control de imagen para el logo del footer
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => __('Logo del Footer', 'inmobiliaria_profesional'),
        'description' => __('Sube una imagen que se mostrará como logo en el pie de página.', 'inmobiliaria_profesional'),
        'section' => 'ama_footer_logo_section',
        'settings' => 'ama_footer_logo'
    )));
}

add_action('customize_register', 'ama_customize_register');
