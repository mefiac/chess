$(document).ready(function () {
    $('td').each(function () {
        $(this).click(function () {

            if ($(this).find('.elem').length == 0) {
                var elem = $('.activElem');
                elem.
                    clone().
                    addClass('activElem').
                    removeAttr('id').
                    attr('id', token()).prependTo($(this));
                elem.detach();

            } else {

                var id = event.target.id;

                $(".elem").removeClass('activElem');
                $('#' + id).addClass('activElem');
            }


        });


    });

    $('#save').click(function (event) {

        var array = [];


        $('td').each(function (index) {
                if ($(this).html().trim()) {
                    var div = $(this).find('div');
                    name = div.attr('value');
                    js_id = div.attr('id');
                    var moment = {name: name, pos: index, js_id: js_id};

                    array[index] = moment;


                }
            }
        );
        $.ajax({
            url: '/index.php?r=site%2Fsave',
            data: {obj: array, _csrf: $("[name='_csrf']").val()},
            type: 'POST',
            success: function (data) {

            }
        });
        console.log();
    });
    var emptyElem = function () {
        var value;
        $('td').each(function () {


            if (!$(this).html().trim()) {
                value = $(this);
                return false;

            }
        });
        return value;
    }
    $('#ButtonAdd').click(function () {
        var that = $("#FigureAdd option:selected").val();
        $('.activElem').removeClass('activElem');
        $('.' + that).clone().
            addClass('activElem').
            removeClass(that).
            removeAttr('id').
            attr('id', token()).prependTo(emptyElem());


    });
    $('#ButtonDell').click(function () {

        $('.activElem').detach();


    });
    var rand = function () {
        return Math.random().toString(36).substr(2);
    };

    var token = function () {
        return rand() + rand();
    };
});