<?php
	
	include "../location.php";
?>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Intranet - SEBRAE PREVIDÊNCIA</title>
<meta name="keywords" content="Intranet, Sebrae Previdência" />
<meta name="viewport" content="width=device-width">
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
		include("../php/conexao.php");
		session_start();
		$select = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$_SESSION['nivel_acesso']."'",$conexao) or die (mysql_error());
		$t=0;
		while ($consulta=mysql_fetch_array($select)) {
			if ($consulta['permissao'] == 'sistema') {						
				$t++;
			}
		}
		if (!isset($_SESSION['nome']) or !isset($_SESSION['nivel_acesso']) or $t <> 1) {?>
			<script>
				alert("É Necessário um Nível Maior de Privilégios para Acessar esta Área!")
				location.href=("../../index.php");
			</script>
	<?php 
		} else {
			include ("../php/estrutura_index/topo.php");
			include ("template/menus.php");
			include ("template/conteudo.php");
			//include ("../php/estrutura_index/rodape.php");
		}
	?>
</body>
</html>