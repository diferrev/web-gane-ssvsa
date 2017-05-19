<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1f3a93">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title( '&#124;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,700" rel="stylesheet">
    <?php wp_head();?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <button class="header__toggle">
                    <i class="fa fa-bars"></i>
                </button>
                <a href="<?php bloginfo( 'url' ); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Gane - Le ponemos valor a tus sueños">
                </a>
            </div>
            <nav class="header__menu">
                <ul class="menu">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu-header',
                        'container' => '',
                        'items_wrap' => '%3$s'
                    ));?>
                </ul>
            </nav>
        </div>
    </header>