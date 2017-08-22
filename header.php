<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1f3a93">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title( '&#124;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
    <style type="text/css">
    html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}article,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}main{display:block}a{background-color:transparent;-webkit-text-decoration-skip:objects}img{border-style:none}button{margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring{outline:1px dotted ButtonText}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}html{box-sizing:border-box;font-size:16px;height:100%}*,:after,:before{box-sizing:inherit}body{font-family:Open Sans,sans-serif;margin:0;min-height:100%;position:relative;font-weight:400}@media screen and (min-width:992px){body{padding-bottom:227px}}.container{margin-left:auto;margin-right:auto;padding-left:15px;padding-right:15px}@media screen and (min-width:480px){.container{max-width:420px}}@media screen and (min-width:768px){.container{max-width:738px}}@media screen and (min-width:992px){.container{max-width:960px}}@media screen and (min-width:1280px){.container{max-width:1200px}}.overlay{background-color:#000;bottom:0;left:0;opacity:.4;position:absolute;right:0;top:0;z-index:0}.overlay--black-op{background-color:rgba(0,0,0,.4)}.btn{background-color:#fff;border:none;color:#3498db;display:inline-block;font-size:.9rem;font-weight:600;padding:10px 19.23077px;text-align:center;text-decoration:none;text-transform:uppercase;border-radius:2px}.btn--raised{box-shadow:0 1px 5px rgba(0,0,0,.4)}.btn--cta{font-size:1.1rem;padding:14.70588px 19.23077px}.btn--yellow{background-color:#ffda0c;color:#000}.header{display:block;position:fixed;background:linear-gradient(rgba(0,0,0,.9),transparent);width:100%;z-index:5}.header .container{display:flex;flex-direction:column;padding:0}@media screen and (min-width:1280px){.header .container{flex-direction:row;align-items:center;justify-content:space-between}}.header .header__logo{align-items:center;display:flex;justify-content:flex-start;height:120px;position:relative;text-align:center;width:100%;padding:0 15px}.header .header__logo img{margin:15px 0 15px 15px;width:150px}@media screen and (min-width:1280px){.header .header__logo{height:170px}.header .header__logo img{width:250px}}.header .header__toggle{background-color:rgba(0,0,0,.3);border:none;color:#fff;font-size:1.4rem;margin-right:20px;outline:0;padding:7px 12px}@media screen and (min-width:1280px){.header .header__toggle{display:none}}.header .header__menu{position:relative}.header .header__menu .menu{list-style:none;margin:0 0 0 15px;padding:0;position:absolute;width:290px;height:400px;overflow:scroll;background-color:#fff;display:none;box-shadow:0 0 10px rgba(0,0,0,.5)}@media screen and (min-width:1280px){.header .header__menu .menu{align-items:stretch;background-color:transparent;box-shadow:none;display:block;display:flex;height:70px;list-style:none;margin:0 0 0 15px;overflow:visible;padding:0;position:relative;text-align:right;width:900px}}.slider{position:relative}.slider .slider-item{background-position:50%;background-color:#1f3a93;background-size:cover;color:#fff;text-align:center;height:500px;width:100%}@media screen and (min-width:768px){.slider .slider-item{height:600px}}@media screen and (min-width:1280px){.slider .slider-item{height:700px}}.slider .slider-item .container{display:flex;align-items:center;height:100%;justify-content:space-between}.slider .slider-item__info{width:100%}.slider .slider-item__title{font-size:2rem;text-shadow:1px 1px 10px #000;text-transform:uppercase;margin-top:12.5px}@media screen and (min-width:768px){.slider .slider-item__title{font-size:2.8rem}}@media screen and (min-width:1280px){.slider .slider-item__title{font-size:3.4rem}}.slider .slider-item__intro{font-size:1rem;text-shadow:1px 1px 10px #000;font-weight:600}@media screen and (min-width:768px){.slider .slider-item__intro{font-size:1rem}}@media screen and (min-width:1280px){.slider .slider-item__intro{font-size:1.5rem}}.post{overflow:hidden}.post h1{margin-top:0;color:#3498db;font-weight:400}.post__title{color:#3498db;text-align:center;font-weight:600!important}.post__header{align-items:center;background-color:#1b327e;background-position:50%;background-size:cover;display:flex;height:225px;justify-content:center;overflow:hidden;padding-top:140px;position:relative;text-align:center}@media screen and (min-width:768px){.post__header{padding-top:120px;height:325px}}@media screen and (min-width:1280px){.post__header{padding-top:170px;height:500px}}.post__content{padding-top:50px;margin-bottom:25px}.post__content .container{border-bottom:2px solid #f4f4f4}@media screen and (min-width:480px){.post__content .container{max-width:420px}}@media screen and (min-width:768px){.post__content .container{max-width:738px}}@media screen and (min-width:992px){.post__content .container{max-width:960px}}
    </style>
    <?php wp_head();?>
</head>
<body>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-97812172-1', 'auto');
ga('send', 'pageview');
setTimeout(function(){
	window.onscroll = function() {
		window.onscroll = null; // Only track the event once
		ga('send','event','Ajuste de Tasa de Rebote','Scroll despues de 5 segundos');
	}
}, 5000);
</script>
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