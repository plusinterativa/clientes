$(function(){
	init();
	$('.menu-icons,.logo').click(function() {
		blank('show');
	});

	$('.pages-content span').click(function() {
		setTimeout(function(){
			//var scroll = $(window).scrollTop()-90;
			//$(window).scrollTop(scroll);
			
			//$('body,html').animate({ 
			//		scrollTop: scroll
			//},400);
		},100);

//$('[data-spy="scroll"]').each(function () {
//      var $spy = $(this)
//      $spy.scrollspy($spy.data())
//    })

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

	$('.body .content .box:first-child').addClass('active');
	$('.owl-controls').insertBefore('.owl-wrapper-outer');
});