var height_np = $('.new-products').height();
     $(window).scroll(function(){
     if($(this).scrollTop() > height_np){
     $('.newp-c3').addClass('fixed-hot');
     }
     else{
     $('.newp-c3').removeClass('fixed-hot');
     }
    })