// JavaScript Document





$(document).ready(function() { 	

	//seleciona os elementos a com atributo name="modal" 

	if ($('.validaModalForum').text() == 'true') { 

 		//armazena o atributo href do link 

		var id = '.modalForum'; 

		//armazena a largura e a altura da tela 

		var maskHeight = $(document).height()*2; 

		var maskWidth = $(window).width()+500; 

 

		//Define largura e altura do div#mask iguais ás dimensões da tela 

		$('#maskForum').css({'width':maskWidth,'height':maskHeight}); 

 

		//efeito de transição

		$('#maskForum').fadeIn('normal'); 

		$('#maskForum').fadeTo("slow",0.8);

 

		//armazena a largura e a altura da janela 

		var winH = $(window).height(); 

		var winW = $(window).width();

		 

		//centraliza na tela a janela popup 

		$(id).css('top',  (winH-$(id).height())/3); 

		$(id).css('left', (winW-$(id).width())/7); 

		//efeito de transição 

		$(id).fadeIn('slow');  

	}; 



	//se o botãoo fechar for clicado 

	$('.modalForum .close').click(function (e) { 

		var a = $(this).attr('href');

		//cancela o comportamento padrão do link 

		e.preventDefault();

		// esconde a mascara e a janela

		$('#maskForum, .modalForum').hide(); 

		location.href=(a);

	}); 

  

	//se div#mask for clicado -- clicando fora sai a foto

	$('#maskForum').click(function () { 

		$(this).hide(); 

		$('.modalForum').hide();

		location.href=("index.php?forum=dHJ1ZQ==");

	}); 

}); //fecha o document ready