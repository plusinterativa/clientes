$(function(){
	init();
	$('.menu-icons,.logo').click(function() {
		blank('show');
	});
	$('.header li').hover(
		function() {
			colorclass = $(this).find('a').attr('name');
			$(this).find('a').addClass(colorclass);
		}, 
		function() {
			$(this).find('a').removeClass(colorclass);
		}
	);

	function windowSize() {
	    windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
	    windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
	}
	windowSize();
	$( window ).resize(function() {
	    windowSize();
	});


	init();

	
	
});