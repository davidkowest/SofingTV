$('#myCarousel').carousel({
    pause: true,
    interval: false
})

$('#myCarousel2').carousel({
    pause: true,
    interval: false
})

$('#myCarousel3').carousel({
    pause: true,
    interval: false
})

$('#myCarousel4').carousel({
    pause: true,
    interval: false
})

$('#myCarousel5').carousel({
    pause: true,
    interval: false
})
$('#myCarousel6').carousel({
    pause: true,
    interval: false
})

$('.carousel .carousel-item').each(function() {
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});