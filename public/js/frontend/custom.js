$(document).ready(function() 
{
    var owl = $('.banner ul');
    owl.owlCarousel({
        margin: 0,
        nav: true,
        autoplay:true,
        loop: true,
        responsive: {
            0: {
                items: 1,
                center: true,
            }
        },
    });
})