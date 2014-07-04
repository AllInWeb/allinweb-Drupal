(function($) {
    $(document).ready(function(){
        $('.faq').hide();
        $(".button-faq").click(function(){
            $(".faq").slideToggle('slow');
        });
    });
})(jQuery);