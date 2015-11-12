$(function(){
	function windowSize() {
	    windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
	    windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
	}
	windowSize();
	$( window ).resize(function() {
	    windowSize();
	});

	$('.menumobile').click(function() {
		$('.header ul').show('fast');
	});

	$('.closemobile').click(function() {
		$('.header ul').hide('fast');
	});

	init();
	
	if(windowWidth < 500){
	}

$("#owl-demo").owlCarousel({
    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    autoHeight : true,
    transitionStyle:"fade"
});


$('.owl-controls').insertBefore('.owl-wrapper-outer');
	


	$('.menu-icons,.logo').click(function() {
		blank('show');
	});

function pulsate(){ 
  	$('.arrow').animate(
  		{
  			bottom:'70'
  		}, 400, 
  		function(){
    		$('.arrow').animate({bottom:'55'},300,pulsate);
  		}
  	);
}
pulsate();

$('.arrow').click(function() {
	var heightB = $('.banner').height();
	$('hmtl,body').animate({scrollTop:heightB},1500, 'easeOutCubic');
});



	$('.pages-content div:first-child span').addClass('active');
	$('.pages-content div span').click(function(){
		$('.pages-content div span').removeClass('active');
		$(this).addClass('active');
		var id = $(this).attr('name');
		$('.pages-content div span[name='+id+']').addClass('active');
		$('.content .box').removeClass('active');
		$('.content .box[name='+id+']').addClass('active');
	});

	$('.body .col-md-7 .content .box:first-child').addClass('active');
	
});