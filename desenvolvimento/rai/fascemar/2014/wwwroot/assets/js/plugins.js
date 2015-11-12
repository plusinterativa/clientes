function menuColor(){
  $(window).scroll(function() {
      if($(window).scrollTop() >= 50){
          $('.header').addClass('scroll',500);
      }
      else{
          $('.header').removeClass('scroll',500);
      }   
  });
}