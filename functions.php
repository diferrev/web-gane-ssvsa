<?php

/* Soporte para imagen destacada */
add_theme_support( 'post-thumbnails' );

/* Registra menús de navegación */
function svssa_menus(){
    /* Registrar menú principal */
    register_nav_menus(array(
        'menu-header' => 'Menú principal'
    ));
    /* Registrar menú de pie de página */
    register_nav_menus(array(
        'menu-footer' => 'Menú Proteccion y Calidad'
    ));
}
add_action('init', 'svssa_menus');

function wpse_enqueue_datepicker() {
    // Load the datepicker script (pre-registered in WordPress).
    wp_enqueue_script( 'jquery-ui-datepicker' );

    // You need styling for the datepicker. For simplicity I've linked to Google's hosted jQuery UI CSS.
    wp_register_style( 'jquery-ui', 'https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css' );
    wp_enqueue_style( 'jquery-ui' );
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_datepicker' );