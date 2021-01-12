var height_cs = $('.camp-shop').height();
      $(window).scroll(function(){
        if($(this).scrollTop() > height_cs){
          $('.cs-c3').addClass('fixed-category');
        }
        else{
            $('.cs-c3').removeClass('fixed-category');
        }
    })