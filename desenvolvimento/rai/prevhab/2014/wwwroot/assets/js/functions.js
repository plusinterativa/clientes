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

	





}