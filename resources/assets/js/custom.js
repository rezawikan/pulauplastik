$(document).ready(function() {

    $(".front-background").vegas({
        delay: 7000,
        slides: [{
                src: "img/header.png"
            },
            {
                src: "img/poster-event.jpg"
            },
            // { src: "assets/img/robi.jpg" }
        ]
    });

    if (window.pageYOffset >= window.innerHeight) {
        $("nav").addClass("bg-dark");
        $("#problems").addClass("scroll-margin");
        $(".jumbotron .navbar-nav .nav-item .nav-link").addClass("scroll-color-header");
        $(".dropdown .dropdown-menu .dropdown-item").addClass("scroll-color-header");
        $(".dropdown").addClass("bg-dark");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $("nav").removeClass("bg-dark");
        $("#problems").removeClass("scroll-margin");
        $(".jumbotron .navbar-nav .nav-item .nav-link").removeClass("scroll-color-header");
        $(".dropdown .dropdown-menu .dropdown-item").removeClass("scroll-color-header");
        $(".dropdown").removeClass("bg-dark");
    }

    $(window).on("scroll", function() {
        if (window.pageYOffset >= window.innerHeight) {
            $("nav").addClass("bg-dark");
            $("#problems").addClass("scroll-margin");
            $(".jumbotron .navbar-nav .nav-item .nav-link").addClass("scroll-color-header");
            $(".dropdown .dropdown-menu .dropdown-item").addClass("scroll-color-header");
            $(".dropdown").addClass("bg-dark");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("nav").removeClass("bg-dark");
            $("#problems").removeClass("scroll-margin");
            $(".jumbotron .navbar-nav .nav-item .nav-link").removeClass("scroll-color-header");
            $(".dropdown .dropdown-menu .dropdown-item").removeClass("scroll-color-header");
            $(".dropdown").removeClass("bg-dark");
        }
    });

    $('.front-arrow').click(() => {
        $('html, body').animate({
            scrollTop: $('#problems').offset().top
        }, 'slow');
    });

    // if (window.location.hash.length) {
    //     window.scrollTo(0, 0);
    // }
    //
    // $("nav ul li a[href^='#']").on('click', function(e) {
    //
    //     // prevent default anchor click behavior
    //     e.preventDefault();
    //
    //     // store hash
    //     var hash = this.hash;
    //
    //     // animate
    //     if ($(hash).length) {
    //         $('html, body').animate({
    //             scrollTop: $(hash).offset().top -55
    //         }, 1000, function() {
    //
    //             // when done, add hash to url
    //             // (default click behaviour)
    //             window.location.href = hash;
    //             location.reload();
    //         });
    //     }
    // });


    // direct browser to top right away
    if (window.location.hash)
        scroll(0, 0);
    // takes care of some browsers issue
    setTimeout(function() {
        scroll(0, 0);
    }, 1);

    $(function() {
        //your current click function
        $("nav ul li a[href^='#']").on('click', function(e) {
            e.preventDefault();
            console.log('asd');
            if (this.hash) {
                $('html,body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 1000);
            }

        });

        // if we have anchor on the url (calling from other page)
        if (window.location.hash) {
            // smooth scroll to the anchor id
            $('html,body').animate({
                scrollTop: $(window.location.hash).offset().top
            }, 1000);
        }
    });

});
