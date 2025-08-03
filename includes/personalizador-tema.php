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

    //LOGO
    $wp_customize->add_setting('valencia_marketing_settings[logo]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label' =>  __('Logo', 'valencia_marketing'),
        'description' => __('Carga Logo', 'valencia_marketing'),
        'section' => 'valencia_marketing_header_normal',
        'settings' => 'valencia_marketing_settings[logo]'
    )));

    // ————— Sección Botón CTA en el Header —————
    $wp_customize->add_section('valencia_marketing_header_cta_section', array(
        'title'       => __('Botón Call To Action', 'valencia_marketing'),
        'description' => __('Configura texto y enlace del botón CTA en el encabezado', 'valencia_marketing'),
        'priority'    => 20,
        'panel'       => 'valencia_marketing_header_panel',
    ));

    // Dentro de valencia_marketing_customize_register()
    $wp_customize->add_setting('valencia_marketing_settings[cta_text]', [
        'default'           => 'Reserva tu cita',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('cta_text_control', [
        'label'    => __('Texto del botón', 'valencia_marketing'),
        'section'  => 'valencia_marketing_header_cta_section',
        'settings' => 'valencia_marketing_settings[cta_text]',
        'type'     => 'text',
    ]);

    $wp_customize->add_setting('valencia_marketing_settings[cta_url]', [
        'default'           => '',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('cta_url_control', [
        'label'    => __('URL del botón', 'valencia_marketing'),
        'section'  => 'valencia_marketing_header_cta_section',
        'settings' => 'valencia_marketing_settings[cta_url]',
        'type'     => 'url',
    ]);

    // Sección: Botón Call To Action
    $wp_customize->add_section('valencia_marketing_header_cta_button', array(
        'title' => __('Botón Call To Action', 'valencia_marketing'),
        'description' => __('Configura el botón del encabezado', 'valencia_marketing'),
        'priority' => 20,
        'panel' => 'valencia_marketing_header_panel'
    ));

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
