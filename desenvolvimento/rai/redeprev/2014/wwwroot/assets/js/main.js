$(function(){
	init();
	$('.menu-icons,.logo').click(function() {
		blank('show');
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