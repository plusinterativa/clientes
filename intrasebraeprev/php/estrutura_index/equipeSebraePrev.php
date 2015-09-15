<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />.
<script>/*		
<?php
	//$r = $_GET['raiz'];
	//$c = $_GET['cat'];
	$m = $_GET['menu'];
	//$raiz = base64_decode($r);
	//$sub = base64_decode($c);
	$menu = base64_decode($m);  
	?>
<div class="first-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h1><?php echo $menu;?></h1>
				</div>
			</div>
		</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
    		<?php
				//echo '<div id="formArquivos" style="margin-bottom:20px;"><h1 style="font-size:28px;width:920px;border-bottom:2px dotted #ddd;">Categoria: <div style="float:right;font-size:14px;color:rgb(50,50,50)"></div></h1><h1 style="font-size:20px;width:920px;"><span style="font-size:16px;color:#333;"> Administração e Finanças > Administrativo > </span>Equipe Sebrae Previdência</h1></div>';
				$sql = "SELECT * FROM login WHERE categoria='Empregados' ORDER BY nome";
				$select = mysql_query($sql,$conexao) or die (mysql_error());
				$n = mysql_num_rows($select);
				if ($n == 0) {
					echo '<div class="titleArq">Nenhum Registro Encontrado em Equipe Sebrae Previdência.</div>';
				} else {
					echo '<div class="titleArq2" style="width:920px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#000;margin:10px 0 10px 0">Listando ('.$n.') Registros em <strong>Equipe SEBRAE PREVIDENCIA</strong>:</div>';
					while ($consulta = mysql_fetch_array($select)) {
						echo '
							<div class="showUsers">
								<h1 class="nomeUsers">
											'.$consulta['nome'].'
								</h1>
								<div class="containerUsers">
									<div class="fotoUsers">
										<img src="
								';
								if (!empty($consulta['foto'])) {
									echo $consulta['foto'];
								} else {
									echo "arquivos/usuarios/fotos/semFoto.jpg";	
								}
								echo '">
									</div>
									<div class="infoUsers">
										<h4>
											<strong>Cargo:</strong> '.$consulta['cargo'].'
										</h4>
										
									</div>								
								</div>
								<div class="contatoUsers">
									<p>
										<strong>Contatos:</strong> '.$consulta['contato'].'
										<p class="mail"> <strong>Email:</strong> '.$consulta['mail'].'</h3>
										</p>
										<p>
										';
								if (empty($consulta['curriculo'])) {
									echo '<strong>Curriculo:</strong> Curriculo não Cadastrado.';
								} else {
									echo '<strong>Curriculo:</strong> <a href="'.$consulta['curriculo'].'" target="_blank">Visualizar Curriculo.</a>';
								}
								echo '
									</p>
								</div>
							 </div>
							 ';
					}
				}
			?>	
        </div>
    </div>
</div>
/*
</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	//$r = $_GET['raiz'];
	//$c = $_GET['cat'];
	$m = $_GET['menu'];
	//$raiz = base64_decode($r);
	//$sub = base64_decode($c);
	$menu = base64_decode($m);  
	?>
	
<div class="first-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h1><?php echo $menu;?></h1>
				</div>
			</div>
		</div>
</div>
	<div class="container page-conselhos">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-12">	
					<div class="row">			

    		<?php

				//echo '<div id="formArquivos" style="margin-bottom:20px;"><h1 style="font-size:28px;width:920px;border-bottom:2px dotted #ddd;">Categoria: <div style="float:right;font-size:14px;color:rgb(50,50,50)"></div></h1><h1 style="font-size:20px;width:920px;"><span style="font-size:16px;color:#333;"> Conselhos > Membros do Conselho > </span> Membros do Conselho </h1></div>';

			$sub[1] = 'Deliberativo';

			$sub[2] = 'Fiscal';

			for($i=1;$i<=1;$i++) {

				//echo '<div class="container">';

				$sql = "SELECT * FROM login WHERE categoria='Empregados' ORDER BY nome";

				$select = mysql_query($sql,$conexao) or die (mysql_error());

				$n = mysql_num_rows($select);

				//echo '<div class="col-md-12"><div class="tipo">'.$sub[$i].'</div></div>';

				if ($n == 0) {

					echo '<div class="col-md-12 nullregister">Nenhum Usuário Registrado em Equipe SEBRAE PREVIDENCIA</div>';

				} else {

					echo '<div class="col-md-12 listando">Listando ('.$n.' )Registrado em <strong>Equipe SEBRAE PREVIDENCIA</strong>:</div>';

					while ($consulta = mysql_fetch_array($select)) {

						echo '

							<div class="col-md-3 box-user">
								
								<h2>

											'.$consulta['nome'].'

											
								</h2>

								<div>

									<div class="fotoUsers">

										<img style="width:100%" src="

								';

								if (!empty($consulta['foto'])) {

									echo $consulta['foto'];

								} else {

									echo "arquivos/usuarios/fotos/semFoto.jpg";	

								}

								echo '">

									</div>

									<div class="infoUsers">

										

											<strong>Cargo:</strong> '.$consulta['cargo'].'

										

										

							';												

						$diaDtN = $consulta['diaDtN'];

						$mesDtN = $consulta['mesDtN'];

						$anoDtN = $consulta['anoDtN'];

						$dtNasc = $diaDtN.'/'.$mesDtN.'/'.$anoDtN;

						$m = date("m");

						$d = date("d");

						if ($m <= $mesDtN) {

							if ($m == $mesDtN and $d >= $diaDtN) {

								$a = date("Y");

							}elseif ($m > $mesDtN) {

								$a = date("Y");

							} else {

								$a = date("Y")-1;

							}

						} else {

							$a = date("Y");

						}

						$idade = $a - $anoDtN;

						$idade = $idade." anos";

									echo '

										

									</div>								

								</div>

								<div class="contatoUsers">									

										<strong>Contatos:</strong> '.$consulta['contato'].'

										<p> <strong>Email:</strong> '.$consulta['mail'].'</p>

										

										';

								if (empty($consulta['curriculo'])) {

									echo '<strong>Curriculo:</strong> Curriculo não Cadastrado.';

								} else {

									echo '<strong>Curriculo:</strong> <a href="'.$consulta['curriculo'].'" target="_blank">Visualizar Curriculo.</a>';

								}

								echo '

								</div>

							 </div>

							 ';

					}

				}

				

			}

			?>	

        
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>