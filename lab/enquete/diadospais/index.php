<!DOCTYPE html>
<html lang="pt-br">
	<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title></title>

  	<link href="http://plusinterativa.com/desenvolvimento/lab/enquete/assets/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="http://plusinterativa.com/desenvolvimento/lab/enquete/assets/css/vendor/animate.css" rel="stylesheet">
	<link href="http://plusinterativa.com/desenvolvimento/lab/enquete/assets/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
      	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
	<img class="banner" src="assets/images/header.jpg">
    <div class="imagemax">
      <div class="shadow"></div>
      <div class="x ">x</div>
      <img src="assets/images/min/allan_ferreira_-_RJ.jpg">
    </div>
    <div class="message green">_</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div style="line-height: 19px;text-align: center;font-size: 16px;">
						<p>Votação encerrada. O resultado oficial será divulgado no dia 10 de agosto.</p>
						<p>O <strong>SEBRAE PREVIDÊNCIA</strong> agradece a todos pela participação e deseja um feliz Dia dos Pais.</p>
					</div>
					<div class="captcha" style="display:none;">
						<span>Clique aqui para validar o CAPTCHA e carregar as fotos</span>
						<div class="load">
							<span>Clique aqui para validar o CAPTCHA e carregar as fotos</span>
						</div>
						<div class="c"></div>
					</div>
				</div>
			</div>
			<div class="row gallery">
				<?php 
				include 'loop.php';
        		ksort($loop);
				foreach ($loop as $file => $name):
					if($name == ''){
  					$frag = explode("_-_", $file);
  					$name = ucwords(strtr($frag[0], "_", " ")) . ' - SEBRAE ' . strtr($frag[1], "_", " ");
					}
				?>
				<div class="col-md-4 col-sm-4">
					<div class="item">
            			<div class="zoom"></div>
						<span class="name"><?php echo $name;?></span>
					  <img class="thumb img-responsive" alt="assets/images/max/<?php echo $file;?>.jpg" src="assets/images/min/<?php echo $file;?>.jpg">
						<div class="confirm">
							<div class="text">Deseja confirmar a escolha?</div>
							<span alt="<?php echo $file;?>||<?php echo $name;?>" class="y choice">Sim</span>
							<div class="c"></div>
						</div>
					</div>
				</div>
				<?php endforeach;?>
			</div>
		</div>

		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="http://plusinterativa.com/desenvolvimento/lab/enquete/assets/js/vendor/jquery.nicescroll.min.js"></script>		
		<script src="http://plusinterativa.com/desenvolvimento/lab/enquete/assets/js/main.js"></script>
  </body>
</html>