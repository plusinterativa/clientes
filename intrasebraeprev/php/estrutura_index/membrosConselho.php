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

			for($i=1;$i<=2;$i++) {

				//echo '<div class="container">';

				$sql = "SELECT * FROM login WHERE categoria='Conselheiros' and subcategoria='".$sub[$i]."' ORDER BY nome";

				$select = mysql_query($sql,$conexao) or die (mysql_error());

				$n = mysql_num_rows($select);

				echo '<div class="col-md-12"><div class="tipo">'.$sub[$i].'</div></div>';

				if ($n == 0) {

					echo '<div class="col-md-12 nullregister">Nenhum Usuário Registrado no <strong>Conselho '.$sub[$i].'</strong>.</div>';

				} else {

					echo '<div class="col-md-12 listando">Listando ('.$n.') Membros do <strong>Conselho '.$sub[$i].'</strong>:</div>';

					while ($consulta = mysql_fetch_array($select)) {

						echo '

							<div class="col-md-3 box-user">
								
								<h1>

											'.$consulta['nome'].'

											<br>

											<span>Status: '.$consulta['obs'].'</span>

								</h1>

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

										

											<strong>Unidade:</strong> '.$consulta['unidade'].'

										

										

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