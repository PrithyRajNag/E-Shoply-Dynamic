var height_s = $('.shops').height();
   $(window).scroll(function(){
    if($(this).scrollTop() > height_s){
       $('.shop-c3').addClass('fixed-hot');
    }
    else{
       $('.shop-c3').removeClass('fixed-hot');
    }
 })