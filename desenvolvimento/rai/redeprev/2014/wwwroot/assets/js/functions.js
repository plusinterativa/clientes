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
	setTimeout(function(){
		blank('hide');
	},500);




	setTimeout(function(){
		var bHeight = $('.banner').height();
		$(window).scroll(function() {
			if($(window).scrollTop() >= bHeight-71){
				$('.side-menu.fixed').css('display','block');
				$('.logohide').addClass('opeen',200);
			}
			else{
				$('.side-menu.fixed').css('display','none');
				$('.logohide').removeClass('opeen');
			}

			if($(window).scrollTop() >= bHeight-30){
				$('.banner.fixed').css('display','block');
			}
			else{
				$('.banner.fixed').css('display','none');
			}

		});
	},100);

}