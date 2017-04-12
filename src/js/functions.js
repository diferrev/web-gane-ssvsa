(function( $ ){
    /* 
     * Asignación de variables a elementos del DOM 
     */
    var $window = $(window),
        $header = $(".header"),
        $header__logo = $(".header__logo");

    /* Mostrar logo y mantener el menú principal
     * en top de la ventana del navegador
     */
    $window.on("scroll load", function() {
        if ($window.scrollTop() > 300) {
            $header.addClass("header--scroll");
        } else {
            $header.removeClass("header--scroll");
        };
    });
})( jQuery);