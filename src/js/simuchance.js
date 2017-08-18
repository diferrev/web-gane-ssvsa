( function( $ ){
    var iva = 1.19,
        notDiscount = 1529000,
        $betMode = $('[ data-bet="mode" ]'),
        $betValue = $('[ data-bet="value" ]'),
        $betCalculate = $('[ data-bet="calculate" ]'),
        $prizeContainer = $('.simuchance__main');

    var result = {
        grossValue: 0,
        mode: '',
        netValue: 0,
        iva: 0,
        grossPrize: 0,
        discount: 0,
        netPrize: 0
    }

    /* Validar la modalidad de la apuesta */
    function validateBetMode( m )
    {
        if( m == 0 )
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    
    /* Valida si el valor de la apuesta no es un dato vacio */
    function notEmpty( n )
    {
        for ( i = 0; i < n.length; i++ )
        {
            if ( n.charAt(i) != " " )
            {
                return true;
            }
        }
        return false;
    }

    /* Valida que el valor de la apueta sea correcto */
    function validateBetValue( v )
    {
        if( isNaN(v) || !notEmpty(v) )
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    /* Activar el template */
    function activateTemplate( id )
    {
        var template = document.querySelector( id );
        return document.importNode( template.content, true);
    }

    function currency ( n )
    {
        n = n.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
        n = n.split('').reverse().join('').replace(/^[\.]/,'');
        return '$ ' + n;
    }

    /* Insertar datos en el template y renderizar en pantalla */
    function renderPrize( r )
    {
        var clone = activateTemplate( "#simuchance__template" );

        $prizeContainer.find( '.simuchance__info' ).remove();

        clone.querySelector( "[data-prize='grossprize']").innerHTML = currency(r.grossPrize);
        clone.querySelector( "[data-prize='discount']").innerHTML = currency(r.discount);
        clone.querySelector( "[data-prize='netprize']").innerHTML = currency(r.netPrize);
        clone.querySelector( "[data-prize='netprize-det']").innerHTML = currency(r.netPrize);
        if( clone.querySelector( "[data-prize='grossvalue']") ){
            clone.querySelector( "[data-prize='grossvalue']").innerHTML =currency(r.grossValue);
            clone.querySelector( "[data-prize='iva']").innerHTML = currency(r.iva);
            clone.querySelector( "[data-prize='netvalue']").innerHTML = currency(r.netValue);
        }
        $prizeContainer.append(clone);
    }

    /* Calcular descuento de retención en la fuente */
    function calculateDiscount( r )
    {
        if( r.grossPrize > notDiscount )
        {
            discount = r.grossPrize * 0.20;
            r.discount = discount.toFixed();
            r.netPrize = r.grossPrize - r.discount;
        }
        else
        {
            r.discount = 0;
            r.netPrize = r.grossPrize;
        }
        renderPrize( r );
    }
     
    /* Calcula el premio bruto a ganar */
    function calculatePrize( r, p )
    {
        var netValue = parseInt( ( r.grossValue / iva ) );
        var ivaValue = r.grossValue - netValue;
        var prize = parseInt( ( netValue * p ) );

        r.iva = ivaValue;
        r.netValue = netValue;
        r.grossPrize = prize;
        
        calculateDiscount( r );
    }


    /* Obtiene el premio bruto a ganar según la modalidad */
    function getPrize( m, v )
    {
        var p = 0;
        result.mode = m;
        result.grossValue = parseInt( v );
        if ( m == '4' ){
            calculatePrize( result, 4500 );
        } else if ( m == '4c' ){
            calculatePrize( result, 208 );
        } else if ( m == '3' ){
            calculatePrize( result, 500 );
        } else if ( m == '3c' ){
            calculatePrize( result, 83 );
        } else if ( m == '2' ){
            calculatePrize( result, 50 );
        } else if ( m == '1' ){
            calculatePrize( result, 5 );
        }
    }

    /* Ejecutar cuando se haga clic en el botón de Calcular */
    $betCalculate.on( "click", function (e)
    {
        e.preventDefault();
        var mode = $betMode.val();
        var value = $betValue.val();
        if( validateBetMode( mode ) )
        {
            if( validateBetValue( value ) )
            {
                getPrize( mode, value);
            }
            else
            {
                alert("El valor de la apuesta es incorrecto, debe ser un número o no estar vacio");
            }
        }
        else
        {
            alert("No has seleccionado un modalidad de juego");
        }
        
    });

})( jQuery );