jQuery("document").ready(function($){

    var nav = $('.header-main');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 60) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });

});