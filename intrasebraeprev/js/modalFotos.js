// JavaScript Document





$(document).ready(function() { 

	

	//seleciona os elementos a com atributo name="modal" 

	$('a[name=modal]').click(function(e) {

		

		//cancela o comportamento padrão do link 

		e.preventDefault(); 

 		//armazena o atributo href do link 

		var id = $(this).attr('href'); 

		//armazena a largura e a altura da tela 

		var maskHeight = $(document).height(); 

		var maskWidth = $(window).width(); 

 

		//Define largura e altura do div#mask iguais ás dimensões da tela 

		$('#mask').css({'width':maskWidth,'height':maskHeight}); 

 

		//efeito de transição

		$('#mask').fadeIn(1000); 

		$('#mask').fadeTo("slow",0.8); 

 

		//armazena a largura e a altura da janela 

		var winH = $(window).height(); 

		var winW = $(window).width();

		 

		//centraliza na tela a janela popup 

		$(id).css('top',  (winH-$(id).height())/2); 

		$(id).css('left', (winW-$(id).width())/2); 

		//efeito de transição 

		$(id).fadeIn(2000);  

	}); 



	//se o botãoo fechar for clicado 

	$('.window .close').click(function (e) { 



		//cancela o comportamento padrão do link 

		e.preventDefault();

		// esconde a mascara e a janela

		$('#mask, .window').hide(); 

	}); 

  

	//se div#mask for clicado -- clicando fora sai a foto

	$('#mask').click(function () { 

		$(this).hide(); 

		$('.window').hide(); 

	}); 

	

	

	/*------------------------------------------ NEXT / PREV ---------------------------------*/

	$(".foto_next").click(function(e) {

		e.preventDefault()

		var id = $(this).attr('href');

		var num = parseFloat($(this).attr('id'));

		var div = id+num;

		$(div).hide();

		var i = num+1;

		var next = id+i

		//armazena a largura e a altura da janela 

		var winH = $(window).height(); 

		var winW = $(window).width();

		//centraliza na tela a janela popup 

		$(next).css('top',  (winH-$(next).height())/2); 

		$(next).css('left', (winW-$(next).width())/2); 

		//efeito de transição 

		$(next).show(); 

	}); // fecha o click da seta next

	

	$(".foto_prev").click(function(e) {

		e.preventDefault()

		var id = $(this).attr('href');

		var num = parseFloat($(this).attr('id'));

		var div = id+num;

		$(div).hide();

		var i = num-1;

		var next = id+i

		//armazena a largura e a altura da janela 

		var winH = $(window).height(); 

		var winW = $(window).width();

		//centraliza na tela a janela popup 

		$(next).css('top',  (winH-$(next).height())/2); 

		$(next).css('left', (winW-$(next).width())/2); 

		//efeito de transição 

		$(next).show(); 

	}); // fecha o click da seta prev

}); //fecha o document ready