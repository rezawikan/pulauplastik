$(document).ready(function() {

    // $(".front-background").vegas({
    //     delay: 7000,
    //     slides: [{
    //             src: "img/header.png"
    //         },
    //         // {
    //         //     src: "img/poster-event.jpg"
    //         // },
    //         // { src: "assets/img/robi.jpg" }
    //     ]
    // });

    if (window.pageYOffset >= window.innerHeight) {
        $("nav").addClass("navbar-scroll");
        $("nav").removeClass("navbar-transparent");
        $("#problems").addClass("scroll-margin");
        $('.small-logo').attr('src', function() {
            return this.src.replace('logo_whites', 'logo_black');
        });
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("nav").removeClass("navbar-scroll");
        $("nav").addClass("navbar-transparent");
        $("#problems").removeClass("scroll-margin");
        $('.small-logo').attr('src', function() {
            return this.src.replace('logo_black', 'logo_whites');
        });
    }

    $(window).on("scroll", function() {
        if (window.pageYOffset >= window.innerHeight) {
            $("nav").addClass("navbar-scroll");
            $("nav").removeClass("navbar-transparent");
            $("#problems").addClass("scroll-margin");
            $('.small-logo').attr('src', function() {
                console.log('test');
                return this.src.replace('logo_whites', 'logo_black');
            });
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("nav").removeClass("navbar-scroll");
            $("nav").addClass("navbar-transparent");
            $("#problems").removeClass("scroll-margin");
            $('.small-logo').attr('src', function() {
                return this.src.replace('logo_black', 'logo_whites');
            });
        }
    });


    $('.front-arrow').click(() => {
        $('html, body').animate({
            scrollTop: $('#problems').offset().top
        }, 'slow');
    });

    $('.take-action').click(() => {
        $('html, body').animate({
            scrollTop: $('#problems').offset().top
        }, 'slow');
    });

    $('[data-fancybox]').fancybox({
        youtube: {
            controls: 0,
            showinfo: 0
        }
    });
});
