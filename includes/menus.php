<?php

/*
* Valencia Marketing
* @package Valencia Marketing
* @subpackage Valencia Marketing
* @since 1.0
*/

function valencia_marketing_menus()
{
    register_nav_menus([
        'principal-menu' => 'Menú Español',
        'principal-menu-en' => 'Menu Inglés'
    ]);
}

function valencia_marketing_others_menus()
{
    register_nav_menus([
        'otroslinks-menu' => 'Menú Otros Enlaces',
        'otroslinks-menu-en' => 'Menu Other Link'
    ]);
}


add_action('init', 'valencia_marketing_menus');
add_action('init', 'valencia_marketing_others_menus');
