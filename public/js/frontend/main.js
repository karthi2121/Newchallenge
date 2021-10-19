$('#footer').css('margin-top',$(document).height() - ($('#header').height() + $('#content').height()  ) - $('#footer').height());


$('#back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({
        scrollTop: 0
    }, 700);
});

 
//paste this code under the head tag or in a separate js file.
// Wait for window load
$(window).on("load",function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
});



// for owl carousel
$(document).ready(function() {

var owl = $('.slider-section .owl-carousel');
    owl.owlCarousel({
        margin: 0,
        smartSpeed: 1000,
        autoplay:true,
        nav: false,
        dots: true,
        dotsEach: true,
        items: 1,
        loop: true,
        responsive: {
            0: {
                margin: 50,
                center: false,
                autoHeight: true,
            },
            992: {
                margin: 0,
                center: true,
            },
        },
    });
  });
  