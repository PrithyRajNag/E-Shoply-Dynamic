var height_b = $('.brands').height();
     $(window).scroll(function(){
        if($(this).scrollTop() > height_b){
              $('.brand-c3').addClass('fixed-hot');
    }
     else{
        $('.brand-c3').removeClass('fixed-hot');
        }
    })