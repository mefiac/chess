$(".elem").draggable({
    containment: 'parent'
});
$(document).ready(function () {
    $('td').each(function () {
        $(this).click(function () {

            if($(this).find('.activElem').length==0){
            var elem=$('.activElem');
                elem .
                clone().
                addClass('activElem').
                removeAttr('id').
                attr('id', token()).prependTo($(this));
                elem.detach();

        }

        });


    });
    $('.elem').click(function (event) {

        var id = event.target.id;
            $(".elem").removeClass('activElem');
            $('#' + id).addClass('activElem');

    });
    var rand = function () {
        return Math.random().toString(36).substr(2);
    };

    var token = function () {
        return rand() + rand();
    };
});