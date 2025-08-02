<?php

/*
* Huevos Guativita
* @package Huevos Guativita
* @subpackage Huevos Guativita
* @since 1.0
*/

function ama_menus()
{
    register_nav_menu(
        'main-menu', // Identificador del menú
        __('Menu principal de encabezado', 'ama_abogados') // Descripción del menú
    );
}

add_action('init', 'ama_menus');
