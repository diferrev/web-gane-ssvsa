(function( $ ){
    /* 
     * Página de resultados
     */
    var API_URL = 'https://portal.ganesuperservicios.co/api/resultados';
    var IMG_URL = 'https://new.ganesuperservicios.co/wp-content/themes/ganesuperservicios/assets/img/lotteries/';
    
    var $fieldSearch = $("#datepicker").datepicker();
    var $buttonSearch = $("[data-button='search']");
    var $resultDate = $("[data-resultdate]");
    var $resultsBox = $(".results");
    var date = null;

    $buttonSearch.on("click", searchResults);

    function searchResults()
    {
        date = $fieldSearch.val();
        if( date ){
            $.getJSON( API_URL + "?fecha=" + date, renderResults );
        }else{
            $.getJSON( API_URL, renderResults );
        }
        
    }

    function renderResults( data )
    {
        var results = data.resultados;
        $resultsBox.find('.card').remove();
        if( date ){
            $resultDate.html("Resultados para el: " + date);
        }
        results.forEach( function( result ){
            //console.log( result );
            renderResult( result );
        });
    }

    function activateTemplate( id)
    {
        var template = document.querySelector(id);
        return document.importNode( template.content, true);
    }

    function renderResult( result )
    {
        var clone = activateTemplate( "#template-result" );

        clone.querySelector("[data-image]").src = IMG_URL + result.lottery.name + '.jpg';
        clone.querySelector("[data-lottery]").innerHTML = result.lottery.display_name + '<br>' + result.lottery.short_name;
        clone.querySelector("[data-number]").innerHTML = result.number;
        clone.querySelector("[data-date]").innerHTML = result.played_at;
        if( result.zodiac_sign != null )
        {
            clone.querySelector("[data-sign='container']").classList.remove('hidden')
            clone.querySelector("[data-sign='icon']").classList.add('zodiac-' + result.zodiac_sign );
            clone.querySelector("[data-sign='name']").innerHTML = result.zodiac_sign;
        }
        $resultsBox.append(clone).find('.card').fadeIn('slow');
    }

    if($resultsBox.length)
    {
        searchResults();
    }
})( jQuery);