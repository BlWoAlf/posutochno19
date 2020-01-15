document.querySelector('.mini_menu_button').onclick = function(){
    var object = document.querySelector('.header_mini_menu_box');
    if(object.style.display == 'block'){
        object.style.display = 'none';
    }
    else {
        object.style.display = 'block';
    }
}
window.onresize = function(){
    var object = document.querySelector('.header_mini_menu_box');
    var screen_width = document.documentElement.clientWidth;
    if(screen_width > 828){
        object.style.display = 'none';
    }
}

$('.more-pictures-container-box').on('click', '.mini-picture', function(){
    $("#main-picture").attr("src",$(this).attr("src"));
});

$(function() {
    $(".owl-carousel").owlCarousel();
});
$(".owl-carousel").owlCarousel({
    loop:true,
    nav: true,
    items: 6,
    margin: 30,
    navText: ["<i class=\"fas fa-angle-left\"></i>","<i class=\"fas fa-angle-right\"></i>"],
});

