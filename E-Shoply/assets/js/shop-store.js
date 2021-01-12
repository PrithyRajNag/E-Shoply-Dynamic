var height_ss = $('.store').height();
    $(window).scroll(function(){
    if($(this).scrollTop() > height_ss){
    $('.ss-c3').addClass('fixed-category');
    }
    else{
    $('.ss-c3').removeClass('fixed-category');
    }
   })