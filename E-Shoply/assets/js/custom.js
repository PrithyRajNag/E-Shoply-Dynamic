$(document).ready(function(){
    $(".closebtn").on('click',function(){
        $("#sidebar").addClass('active')
    })
    $(".navbar-brand").on('click',function(){
        $("#sidebar").toggleClass('active')
        if (!$("#sidebar").hasClass('active')) {
            $(".list-unstyled").removeClass('show')
        }
    });
});

var height1 = $('.top').height();
$(window).scroll(function(){
    if($(this).scrollTop() > height1){
        $('.upper-side').addClass('fixed');
    }
    else{
        $('.upper-side').removeClass('fixed');
    }
})
var height2 = $('.top').height();
$(window).scroll(function(){
    if($(this).scrollTop() > height2){
        $('.main-menu').addClass('fixed-menu');
    }
    else{
        $('.main-menu').removeClass('fixed-menu');
    }
})
var height_h = $('.new-arrivals').height();
$(window).scroll(function(){
    if($(this).scrollTop() > height_h){
        $('.hot-c3').addClass('fixed-hot');
    }
    else{
        $('.hot-c3').removeClass('fixed-hot');
    }
})

function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}