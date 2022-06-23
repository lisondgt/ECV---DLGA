(function ($) {

    function dropdownMenu() {
        $('.navbar-nav .dropdown .dropdown-toggle').click(function() {
            $('body').addClass('overflow-hidden').append('<div class="modal-backdrop fade show"></div>')
        });
        $('.navbar-nav .dropdown .close-dropdown-menu').click(function() {
            $('body').removeClass('overflow-hidden')
            $('.modal-backdrop').remove()
        });
        var dropdownsMenu = document.querySelectorAll('.navbar-nav .dropdown')
        dropdownsMenu.forEach(dropdownMenu => {
            dropdownMenu.addEventListener('hide.bs.dropdown', function () {
                $('body').removeClass('overflow-hidden')
                $('.modal-backdrop').remove()
            })
        });
    }

    function responsiveNavFooter() {
        $('.nav-footer .title-nav').click(function() {
            $(this).parent('.nav-footer').toggleClass('open');
        });
    }

    function scrollTextAnimation() {
        $(".section-text-images").each(function() {
            var windowTop = $(window).scrollTop();
            var elementTop = $(this).offset().top;
            var leftPosition = windowTop - elementTop;
            $(this)
                .find(".text-image.text-left")
                .css({ left: leftPosition });
            $(this)
                .find(".text-image.text-right")
                .css({ right: leftPosition });
        });
    }

    function modalGreen() {
        $('.link-modal-green').click(function() {
            $('.modal-backdrop').addClass('white-bg')
        })
    }

    $(window).on('scroll');
    $(window).trigger('scroll');

    $(document).ready(function () {
        var width = $(window).width();
        if (width < 991){
            responsiveNavFooter()
        }
        dropdownMenu()
        modalGreen()
    });

    $(window).on("load resize scroll", function() {
        scrollTextAnimation()
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