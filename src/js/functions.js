(function( $ ){
    /* 
     * Asignación de variables a elementos del DOM 
     */
    var $window = $(window);
    var $header = $(".header");
    var $headerToggle = $(".header__toggle");
    var $menu = $(".menu");
    var $menuItem = $(".menu > li.dropdown-menu > a");

    /* Mostrar logo y mantener el menú principal
     * en top de la ventana del navegador
     */
    $window.on("scroll load", function() {
        if ($window.scrollTop() > 160) {
            $header.addClass("header--scroll");
        } else {
            $header.removeClass("header--scroll");
        };
    });

    $headerToggle.on("click", function() {
        $menu.slideToggle();
    });

    $("#datepicker").datepicker({
        dateFormat: 'dd/mm/yy'
    });

    /* Stellar - Parallax Background Effect */ 
    $window.stellar({
        responsive: true,
        positionProperty: 'position',
        horizontalScrolling: false
    });

    /* ScrollReveal - Reveal Element Effect */
    window.sr = ScrollReveal({
        reset: false,
        mobile: true,
        easing: 'ease'
    });

    sr.reveal( '.rv-bottom', { origin: 'bottom', delay: 300 } );
    sr.reveal( '.rv-bottom-many', { duration: 1500, origin: 'bottom', delay: 300 }, 50 );
    sr.reveal( '.rv-left', { origin: 'left', distance: '50px', delay: 300 } );
    sr.reveal( '.rv-right', { origin: 'right', distance: '50px', delay: 300 } );

})( jQuery);