(function ($) {

    function dropdownMenu() {
        $('.navbar-nav .dropdown .dropdown-toggle').click(function() {
            $('body').addClass('overflow-hidden')
        });
        $('.navbar-nav .dropdown .close-dropdown-menu').click(function() {
            $('body').removeClass('overflow-hidden')
        });
    }

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
        dropdownMenu()
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