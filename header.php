<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1f3a93">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title( '&#124;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
    <style type="text/css">
    body,button,figure{margin:0}html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}article,figure,header,main,nav,section{display:block}h1{font-size:2em;margin:.67em 0}a{background-color:transparent;-webkit-text-decoration-skip:objects}img{border-style:none}button{overflow:visible;text-transform:none;-webkit-appearance:button}.btn,.header .header__menu .menu li a{text-decoration:none;text-transform:uppercase}button::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring{outline:ButtonText dotted 1px}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}template{display:none}html{box-sizing:border-box;font-size:16px;height:100%}*,:after,:before{box-sizing:inherit}body{font-family:Open Sans,sans-serif;min-height:100%;position:relative;font-weight:400}p{line-height:1.4}.container{margin-left:auto;margin-right:auto;padding-left:15px;padding-right:15px}@media screen and (min-width:480px){.container{max-width:420px}}@media screen and (min-width:768px){.container{max-width:738px}}@media screen and (min-width:992px){body{padding-bottom:227px}.container{max-width:960px}}.section{padding:50px 0 25px}.btn{background-color:#fff;border:none;color:#3498db;display:inline-block;font-size:.9rem;font-weight:600;padding:10px 19.23px;text-align:center;border-radius:2px}.btn--raised{box-shadow:0 1px 5px rgba(0,0,0,.4)}.btn--yellow{background-color:#ffda0c;color:#000}.header{display:block;position:fixed;background:linear-gradient(rgba(0,0,0,.9),transparent);width:100%;z-index:3}.header .container{display:flex;flex-direction:column;padding:0}@media screen and (min-width:1280px){.container{max-width:1200px}.header .container{flex-direction:row;align-items:center;justify-content:space-between}}.header .header__logo{align-items:center;display:flex;justify-content:flex-start;height:120px;position:relative;text-align:center;width:100%;padding:0 15px}.header .header__logo img{margin:15px 0 15px 15px;width:150px}.header .header__toggle{background-color:rgba(0,0,0,.3);border:none;color:#fff;font-size:1.4rem;margin-right:20px;outline:0;padding:7px 12px}@media screen and (min-width:1280px){.header .header__logo{height:170px}.header .header__logo img{width:250px}.header .header__toggle{display:none}}.header .header__menu{position:relative}.header .header__menu .menu{list-style:none;margin:0 0 0 15px;padding:0;position:absolute;width:290px;height:400px;overflow:scroll;background-color:#fff;display:none;box-shadow:0 0 10px rgba(0,0,0,.5)}.header .header__menu .menu li{border-bottom:1px solid #f2f2f2}.header .header__menu .menu li.highlight{background-color:#ffda0c}.header .header__menu .menu li.highlight a{color:#000}.header .header__menu .menu li a{color:#000;display:block;font-family:Open Sans,fontawesome,sans-serif;font-size:.8rem;font-weight:700;padding:10px 20px;text-align:left}.header .header__menu .menu li ul{display:block;list-style:none;padding:0;background-color:rgba(0,0,0,.04)}.header .header__menu .menu li ul li{padding-left:15px}@media screen and (min-width:1280px){.header .header__menu .menu,.header .header__menu .menu li.highlight{background-color:transparent}.header .header__menu .menu{align-items:stretch;box-shadow:none;display:block;display:flex;height:70px;list-style:none;margin:0 0 0 15px;overflow:visible;padding:0;position:relative;text-align:right;width:900px}.header .header__menu .menu li{text-shadow:1px 1px 10px #000;display:inline-block;border:none;position:relative}.header .header__menu .menu li.highlight a{color:#ffda0c}.header .header__menu .menu li a{color:#f4f4f4;padding:28px 20px}.header .header__menu .menu li ul{display:none;position:absolute;left:-45px;list-style:none;padding:0;width:200px;box-shadow:0 0 10px rgba(0,0,0,.5)}.header .header__menu .menu li ul li{text-shadow:none;display:block;background-color:#fff}}@media screen and (min-width:1280px) and (min-width:1280px){.header .header__menu .menu li ul li{padding-left:0}}.slider{position:relative;height:100vh}@media screen and (min-width:768px){.slider{height:600px}}@media screen and (min-width:1280px){.header .header__menu .menu li ul li a{color:#000;border:none;padding:10px 20px;line-height:1.4}.slider{height:700px}}.slider .slider-item{background-position:50%;background-color:#1f3a93;background-size:cover;color:#fff;text-align:center;height:100%;width:100%;padding-top:120px}@media screen and (min-width:768px){.slider .slider-item{height:600px}}@media screen and (min-width:1280px){.slider .slider-item{height:700px}}.slider .slider-item .container{display:flex;flex-flow:column;height:100%}.slider .slider-item .slider-item__image{margin:0;padding:0;height:50%}.slider .slider-item .slider-item__image img{display:block;height:100%}@media screen and (min-width:768px){.slider .slider-item .container{flex-flow:row-reverse nowrap;justify-content:space-around;align-items:center}.slider .slider-item .slider-item__image{width:320px;height:320px}.slider .slider-item .slider-item__image img{height:100%;margin-left:auto;margin-right:auto}}@media screen and (min-width:1280px){.slider .slider-item .slider-item__image{width:380px;height:380px}}.slider .slider-item .slider-item__info{height:50%;margin-bottom:25px}@media screen and (min-width:768px){.slider .slider-item .slider-item__info{width:360px;height:auto;text-align:left}.slider .slider-item .slider-item__intro{font-size:1.4rem}}@media screen and (min-width:992px){.slider .slider-item .slider-item__info{width:460px;width:560px}.slider .slider-item .slider-item__intro{font-size:1.5rem}}.slider .slider-item .slider-item__title{font-size:1.6rem}@media screen and (min-width:768px){.slider .slider-item .slider-item__title{font-size:2.3rem}}.card{box-shadow:0 3px 5px 1px rgba(0,0,0,.4);display:flex;flex-direction:column;margin-bottom:25px;margin-left:12.5px;margin-right:12.5px;background-color:#fff}.card .card__image{height:auto;margin:0;overflow:hidden;padding:0;-webkit-margin-before:0;-webkit-margin-after:0}.card .card__image img{display:block;width:100%;height:auto}.promos{background-color:#f4f4f4}.promos .container{display:flex;flex-flow:row wrap;justify-content:center}@media screen and (min-width:480px){.promo{width:400px}}@media screen and (min-width:768px){.promo{width:46.4%}}@media screen and (min-width:992px){.slider .slider-item .slider-item__title{font-size:3rem}.promo{width:22.3%}}@media screen and (min-width:1280px){.promo{width:22.8%}}.supergiros .overlay{background-color:#253b83;opacity:.77;z-index:0}.simuchance__info{padding:0 12.5px}.simuchance__total{text-align:center}.simuchance__total .simuchance__prize{font-size:2.5rem;margin-top:12.5px;margin-bottom:12.5px;color:#ffe61c;text-shadow:2px 2px 0 #000}@media screen and (min-width:768px){.simuchance__info{width:60%}.simuchance__total .simuchance__prize{font-size:3.5rem}}@media screen and (min-width:992px){.simuchance__total .simuchance__prize{font-size:4rem}}@media screen and (min-width:1280px){.simuchance__total .simuchance__prize{font-size:4.5rem}}.simuchance__details h3{text-align:center;margin-bottom:12.5px;margin-top:0;font-size:.8rem}.simuchance__details .simuchance__detail{display:flex;flex-direction:column;justify-content:center}.simuchance__details .simuchance__detail ul{margin:0 0 25px;padding:0 15px;font-size:.8rem}@media screen and (min-width:768px){.simuchance__details .simuchance__detail{flex-direction:row}.simuchance__details .simuchance__detail ul{font-size:.8rem;width:50%}}@media screen and (min-width:1280px){.simuchance__details .simuchance__detail ul{width:35%}}.simuchance__details .simuchance__detail ul li{display:flex;justify-content:space-between}
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