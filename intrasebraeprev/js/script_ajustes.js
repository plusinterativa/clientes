// JavaScript Document
$(document).ready(function() {
	
		$(".ajustes").click(function() {
			$("#settings").slideToggle('normal');	
		});
		$(".anoArq").click(function() {
			$(this).next().slideToggle('normal');
		});
		$(".mesArq").click(function() {
			$(this).next().slideToggle('normal');
		});
		$(".btnPesq").click(function(e) {
			if ($("input[name=pesq]").val()=="") {
				e.preventDefault();
				alert("Digite o que você procura!")
			}
		});
		$(".mostrarSenha").click(function() {
			$(this).next().slideToggle('normal');
		});
		$('.area-conteudo p:last-child').append('...');
		$('select[name=filterUn]').change(function() {
			var filter = $(this).val();
			$('input[name=filter]').val(filter);
			$('#filtraUnidade').submit();
		})
		//--------Link-------
		$('#link2').hide();
		$('#link3').hide();
		$('#link4').hide();
		$('#link5').hide();
		//----------arquivo-----
		$('#Arquivo2').hide();
		$('#Arquivo3').hide();
		$('#Arquivo4').hide();
		$('#Arquivo5').hide();
		$('.Arquivo2').hide();
		$('.Arquivo3').hide();
		$('.Arquivo4').hide();
		$('.Arquivo5').hide();
		//------------link-----------------
		$('.otherLink').click(function(e) {
			e.preventDefault();
			var n = $(this).attr('href');
			$('#otherLink'+n).hide();
			$('#link'+n).show();
			if (n==5) {
				$('tr.textoLink td').css('color','#F03');
				$('tr.textoLink td').text('Máximo de 5 Links Por Postagem.');	
			}
			
		})
		//------------Arquivo-----------------
		$('.otherArquivo').click(function(e) {
			e.preventDefault();
			var n = $(this).attr('href');
			$('#otherArquivo'+n).hide();
			$('.Arquivo'+n).show();
			$('#Arquivo'+n).show();
			if (n==5) {
				$('tr.textoArquivo td').css('color','#F03');
				$('tr.textoArquivo td').text('Máximo de 5 Arquivos Por Postagem.');	
			}
			
		})	
		//---------------Del Coments---------------
		$('.btnDelComents').click(function(e) {
			e.preventDefault();
			var c = confirm("Tem Certeza que você deseja Excluir o Comentário?");
			if (c == true) {
				var coment = $(this).attr('id');
				$('input[name=codDelComents]').val(coment);
				$('#formDelComents').submit();
			}
		});
}); //fecha document ready