/**
 * Created by black on 01.07.14.
 */

(function($) {
    $(document).ready(function(){
        $('.faq-forms').hide();
        $('.faq-button').click(function(){
            $('.faq-forms').slideToggle('normal');
        });
    });
})(jQuery);