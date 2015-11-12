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
//Owl-Carusel//
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoHeight : true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false 
  }); 
});