// JavaScript Document





$(document).ready(function() { 

		

	var id = '#dialogB1';

	//armazena a largura e a altura da tela 

	var maskHeight = $(document).height(); 

	var maskWidth = $(window).width(); 



	//Define largura e altura do div#mask iguais ás dimensões da tela 

	$('#maskB').css({'width':maskWidth,'height':maskHeight}); 



	//efeito de transição

	$('#maskB').fadeIn(1000); 

	$('#maskB').fadeTo("slow",0.8); 



	//armazena a largura e a altura da janela 

	var winH = $(window).height(); 

	var winW = $(window).width();

	 

	//centraliza na tela a janela popup 

	$(id).css('top',  (winH-$(id).height())/2); 

	$(id).css('left', (winW-$(id).width())/2); 

	//efeito de transição 

	$(id).fadeIn(2000);  



	//se o botãoo fechar for clicado 

	$('.windowB .close').click(function (e) { 



		//cancela o comportamento padrão do link 

		e.preventDefault();

		// esconde a mascara e a janela

		$('#maskB, .windowB').hide(); 

	}); 

  

	//se div#mask for clicado -- clicando fora sai a foto

	$('#maskB').click(function () { 

		$(this).hide(); 

		$('.windowB').hide(); 

	}); 

}); //fecha o document ready