// $(document).ready(function() {

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

        if (this.hash) {
            $('.navbar-collapse').collapse('hide');
            $('html,body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 76
            }, 1000);
        }

    });

    // if we have anchor on the url (calling from other page)
    if (window.location.hash) {

        // smooth scroll to the anchor id
        $('html,body').animate({
            scrollTop: $(window.location.hash).offset().top - 66
        }, 1000);
    }
});

$(".dropdown-item").on('click', function(e) {

    if (window.location.href.split('#')[0] == this.getAttribute('href').split('#')[0]) {
        // console.log('asd');
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top - 76
        }, 1000);

    }
});

// Add slideDown animation to dropdown
// $('.dropdown').on('show.bs.dropdown', function(e){
//   $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
// });
//
// // Add slideUp animation to dropdown
// $('.dropdown').on('hide.bs.dropdown', function(e){
//   $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
// });

// });
