jQuery(function ($) {
    const search_input = $(".search-form__input");
    const search_results = $(".ajax-search");

    search_input.keyup(function () {
        let search_value = $(this).val();

        if (search_value.length > 2) { // кол-во символов
            $.ajax({
                url: "/wp-admin/admin-ajax.php",
                type: "POST",
                data: {
                    "action": "ajax_search", // functions.php
                    "term": search_value
                },
                success: function (results) {
                    search_results.fadeIn(200).html(results);
                }
            });
        } else {
            search_results.fadeOut(200);
        }
    });

    // Закрытие поиска при клике вне его
    $(document).mouseup(function (e) {
        if (
            (search_input.has(e.target).length === 0) &&
            (search_results.has(e.target).length === 0)
        ) {
            search_results.fadeOut(200);
        };
    });

    $('.search-result-close').click(function () {
        $('.search-result').removeClass('search-result-over');
        $('.search-result').empty();
        $('.search_form input[name="s"]').val('');
    })
    $( 'body' ).on( 'click', 'button.plus, button.minus', function() {

        var qty = $(this).parent().find( 'input' ),
            val = parseInt( qty.val() ),
            min = parseInt( qty.attr( 'min' ) ),
            max = parseInt( qty.attr( 'max' ) ),
            step = parseInt( qty.attr( 'step' ) );

        // дальше меняем значение количества в зависимости от нажатия кнопки
        if ( $( this ).is( '.plus' ) ) {
            if ( max && ( max <= val ) ) {
                qty.val( max );
            } else {
                qty.val( val + step );
            }
        } else {
            if ( min && ( min >= val ) ) {
                qty.val( min );
            } else if ( val > 1 ) {
                qty.val( val - step );
            }
        }

    });

});




