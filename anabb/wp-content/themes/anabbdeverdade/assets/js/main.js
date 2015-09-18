$(function() {
    var bgScroll = $('.bg-topo').height();
	var quemSomosScroll = $('#quemSomos').height();
	var propScroll = $('#nossasProp').height();
	var noticiasScroll = $('#noticias').height();
	var faleScroll = $('#fale').height();
$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    //$('.roll').html(scroll);
    // Do something
		if (scroll < bgScroll) {
			$('.circle').removeClass('circle-current');
			$('a[href=#inicio] .circle').addClass('circle-current');
		};

		if(scroll > bgScroll && scroll < (bgScroll + quemSomosScroll)) {
			$('.circle').removeClass('circle-current');
			$('a[href=#quemSomos] .circle').addClass('circle-current');
		};
		if(scroll > (bgScroll + quemSomosScroll) && scroll < (bgScroll + quemSomosScroll + propScroll)) {
			$('.circle').removeClass('circle-current');
			$('a[href=#nossasProp] .circle').addClass('circle-current');
		};
		if(scroll > (bgScroll + quemSomosScroll + propScroll) && scroll < (bgScroll + quemSomosScroll + propScroll + noticiasScroll)) {
			$('.circle').removeClass('circle-current');
			$('a[href=#noticias] .circle').addClass('circle-current');
		};
		if(scroll > (bgScroll + quemSomosScroll + propScroll + noticiasScroll) && scroll < (bgScroll + quemSomosScroll + propScroll + noticiasScroll + faleScroll)) {
			$('.circle').removeClass('circle-current');
			$('a[href=#fale] .circle').addClass('circle-current');
		};
});
/*
	$("div[data='age']").hover(function() {
		text = $(this).attr('data-content-age');
		$('.agebox span').html("");			
		$('.agebox span').append(text);
	},function(){			
	});


	var integrantes = $('.integrantes');
	integrantes.find('a').addClass('get');

	$('.integrantes img').click(function() {		
		//tam = $('.og-expander').height();
		setTimeout(function(){
		$(this).parent().parent().css('height','715px important');
		},1000);
		
	});*/

// HOVER TROCA IMAGENS DA PAGINA DE PROPOSTAS //
	$('.hov').hover(function(){
		$(this).parent().find('.img').removeClass('circle-unchecked');
		$(this).parent().find('.img').addClass('circle-checked');
		}, function() {
		$(this).parent().find('.img').removeClass('circle-checked');
		$(this).parent().find('.img').addClass('circle-unchecked');
	});
//ROLAGEM SUAVE//
	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });



	//alert(bgScroll +' '+ quemSomosScroll +' '+ propScroll +' '+ noticiasScroll +' ' + faleScroll);


});
