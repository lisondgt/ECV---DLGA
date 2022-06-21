(function ($) {

    function responsiveNavFooter() {
        $('.nav-footer .title-nav').click(function() {
            $(this).parent('.nav-footer').toggleClass('open');
        });
    }

    $(window).on('scroll');
    $(window).trigger('scroll');

    $(document).ready(function () {
        var width = $(window).width();
        if (width < 991){
            responsiveNavFooter()
        }
    });

    $(window).resize(function () {
        var width = $(window).width();
        if (width < 991){
            responsiveNavFooter()
        }
    });

    $(window).scroll(function() {
    });

})(jQuery);