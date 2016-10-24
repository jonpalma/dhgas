$(window).scroll(function () {
    if ($(window).scrollTop() >= '80' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '80' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});


$('a[data-toggle=tab').click(function() {
    $('a[data-toggle=tab').removeClass('active');
    $(this).addClass('active');
});


$('.map-column a').click(function() {
    $('.map-column').removeClass('active');
    $(this).closest('.map-column').addClass('active');
});

$('.cerrar').click(function() {
    $('.map-column').removeClass('active');
});