/**
 * Created by Igor on 26.06.14.
 */

(function($) {
    $(document).ready(function()
    {
        //Add Inactive Class To All Accordion Headers
        $('.accordion-header').toggleClass('inactive-header');

        //Set The Accordion Content Width
        var contentwidth = $('.accordion-header').width();
        $('.accordion-content').css({'width' : contentwidth });

        // The Accordion Effect
        $('.accordion-header').click(function () {
            if($(this).is('.inactive-header')) {
                $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }

            else {
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }
        });

        return false;
    });
})(jQuery);