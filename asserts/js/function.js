$(document).ready(function(){
    $('.owl-carousel-banner').owlCarousel({
        loop:true,
        autoplay: true,
        margin:0,
        nav: true,
        items: 1,
        dots: true
    })

    $('.owl-carousel-slide').owlCarousel({
        loop:true,
        autoplay: true,
        margin:10,
        nav: true,
        items: 3,
        dots: true
    })
})