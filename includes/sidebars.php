<?php
/*
* Valencia Marketing
* @package Valencia Marketing
* @subpackage Valencia Marketing
* @since 1.0
*/


function valencia_marketing_sidebars()
{
    register_sidebar(array(
        'name'          => sprintf(__('Barra Lateral', 'valencia_marketing')),
        'id'            => 'main-sidebar',
        'description'   =>  sprintf(__('Widgets en la barra Lateral', 'valencia_marketing')),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ));
    register_sidebar(array(
        'name'          => sprintf(__('Barra Inferior', 'valencia_marketing')),
        'id'            => 'main-sidebar-inferior',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ));
}
add_action('widgets_init', 'valencia_marketing_sidebars');
