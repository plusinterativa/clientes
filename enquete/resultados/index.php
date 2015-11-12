<!DOCTYPE html>
<html lang="pt-br">
	<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title></title>

  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
      	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		<?php
		include '../JsonDB.class.php';
		$db = new JsonDB('../data.json');
		?>
		<!--<img src="../assets/images/header.jpg">-->
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="title">
						<h1>Resultado da enquete</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">

					<!--list-->
					<table class="list">
						<tr>
							<td class="voto">Votos</td>
							<td class="name">Nomes</td>
							<td class="imagem">Imagens</td>
						</tr>
					</table>
					<div class="scroller">
						<table class="list">
							<?php
							include '../loop.php';
							ksort($loop);
							foreach ($loop as $file => $name):
								if($name == ''){
									$frag = explode("_-_", $file);
									$name = ucwords(strtr($frag[0], "_", " ")) . ' - SEBRAE ' . strtr($frag[1], "_", " ");
								}
								$data[] = $db->get($file,"votos") . '||' . $db->get($file,"name") . '||' . $file;
							endforeach;
							//$dataDESC = $data;
							asort($data);
							foreach (array_reverse($data) as $key => $value):
								$frag = explode("||", $value);
								$votos[] = $frag[0];
								$voto =  $frag[0];
								$name = $frag[1];
								$file = $frag[2];
							?>	
								<tr>
									<td class="voto"><?php echo $voto;?></td>
									<td class="name"><?php echo $name;?></td>
									<td class="imagem"><img src="../assets/images/min/<?php echo $file;?>.jpg"/></td>
								</tr>

							<?php endforeach; ?>
						</table>
					</div>
					<!--/list-->
				</div>
				<div class="col-md-6 overflowX">
					<div class="chart">
					<?php 
					$opVotos = count($votos);
					$somaVotos = array_sum($votos);
					foreach (array_reverse($data) as $key => $value):
					$frag = explode("||", $value);
					$voto =  $frag[0];
					$name = $frag[1];
					$file = $frag[2];
					$porcVotos[$name.'||'.$file.'||'.$voto] = ($voto*100)/$somaVotos;
					endforeach;
					foreach ($porcVotos as $namefile => $porcVoto):
						$frag = explode("||", $namefile);
						$name =  $frag[0];
						$file = $frag[1];
						$voto = $frag[2];
						$porc = round($porcVoto,1);
					?>
					<div class="bar">
						<div class="fill" data-name="<?php echo $name;?>" data-file="../assets/images/min/<?php echo $file;?>.jpg" data-porc="<?php echo $porc;?>" data-voto="<?php echo $voto;?>" style="height:<?php echo round($porcVoto,1);?>%;"></div>
					</div>
					<?php endforeach;?>
					</div>
				</div>
				<div class="tool">
					<div class="arrow"></div>
					<div class="content">
					 	<span class="dataFile"></span>
					 	<div class="text">
						 	<div class="dataName"></div>
						 	<span class="dataPorc"></span><br/>
						 	<span class="dataVoto"></span>
					 	</div>
					</div>
				</div>
				<!--
				<div class="col-md-6 col-md-offset-3">
					<div class="tool">
						<div class="row">
							<div class="col-md-6">
								<span class="dataFile"></span>
							</div>
							<div class="col-md-6">
								<h1 class="dataName"></h1>
								<span class="dataVoto"></span>
								<span class="dataPorc"></span>
							</div>
						</div>	
					</div>
				</div>
				-->
			</div>
		</div>



		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="../assets/js/vendor/jquery.nicescroll.min.js"></script>
		<script src="../assets/js/main.js"></script>
  </body>
</html>