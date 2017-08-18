<?php

/* Soporte para imagen destacada */
add_theme_support( 'post-thumbnails' );

/* Habilitar extracto a páginas */
add_post_type_support( 'page', 'excerpt' );

/* Carga libreria de jQuery en el footer */
function load_jquery_in_footer()
{
    if( !is_admin() )
    {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', '/wp-includes/js/jquery/jquery.js', false, '1.12.4', true );
        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'wp_enqueue_scripts', 'load_jquery_in_footer' );

/* Registra menús de navegación */
function svssa_menus()
{
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


/* Carga jQuery UI Datepicker */
function wpse_enqueue_datepicker()
{
    wp_enqueue_script( 'jquery-ui-datepicker' );
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_datepicker' );

/* Añadiendo Open Graph en los atributos de lenguage */
function add_opengraph_doctype( $output )
{
		return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
	}
add_filter('language_attributes', 'add_opengraph_doctype');