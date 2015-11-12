function blank(para1){
	if(para1 == 'show'){
		$('.blank').show('fade');
	}
	else if(para1 == 'hide'){
		$('.blank').hide('fade');
	}
	else{}
}
function init(){
	$('.menumobile').click(function() {
		$('.header .container').show('fade');
	});

	$('.closemobile').click(function() {
		$('.header .container').hide('fade');
	});
	setTimeout(function(){
		blank('hide');
	},500);
	setTimeout(function(){
		var bimg = $('.banner .imgt').height();
		$('.banner').animate({
			height: bimg-71
		},400);
	},700);

	setTimeout(function(){
		
	var tHeader = $('.imgf').height();
	$(window).scroll(function() {
		if($(window).scrollTop() >= tHeader-71){
			$('.title-image-fixed').css('display','block');
		}
		else{
			$('.title-image-fixed').css('display','none');
		}
	});
	},100);

	var colornumber = $('.pages .pages-content span').attr('class');
	var colornumber = colornumber.replace("b2color", "");
	$('.pages-content div:first-child span').addClass('active'+colornumber);
	$('.pages-content div span').click(function(){
		$('.pages-content div span').removeClass('active'+colornumber);
		$(this).addClass('active'+colornumber);

		$('.box').css('display','none');
		var name = $(this).attr('name');
		$('.box[name='+name+']').css('display','block');

	});

	$('.body .col-md-7 .content .box:first-child').css('display','block');
}