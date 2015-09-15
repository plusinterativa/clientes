<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$m = $_GET['menu'];
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
			
    		<form method="get" action="" id="filtraUnidade">

            	<input type="hidden" name="filter" />

                <input type="hidden" name="menu" value="<?php echo base64_encode('Gestores'); ?>" />

            </form>
			
			<?php

				$sql = "SELECT id FROM login WHERE categoria='Gestores' ORDER BY id DESC";

				$select = mysql_query($sql,$conexao) or die (mysql_error());

				$n = mysql_num_rows($select);

				if ($n == 0) {

					echo '<div class="nullregister"><h1>Nenhum Registro Encontrado.</h1></div>';

				} else {

					echo '<div class="titleArq2" style="width:920px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#000;margin:10px 0 10px 0">Foram Encontrados ('.$n.') Registros em <strong>Gestores</strong>:</div>';

				echo '<div class="titleArq">';

				if (isset($_GET['filter']) and !empty($_GET['filter'])) {

					echo 'Filtrando por Unidade: <strong>'.$_GET['filter'].'</strong> | Alterar Filtro: ';

				} else {

					echo 'Filtrar por Unidade: ';

				}

				echo '<select name="filterUn">';

				$sqlP = "SELECT DISTINCT unidade FROM login WHERE categoria='Gestores' ORDER BY unidade";

				$selectP = mysql_query($sqlP,$conexao) or die (mysql_error());

				echo '<option>Todas</option>';

				while ($consultaP = mysql_fetch_array($selectP)) {

					if (isset($_GET['filter']) and $_GET['filter'] == $consultaP['unidade']) {

						echo '<option selected="selected">'.$consultaP['unidade'].'</option>';

					} else {

						echo '<option>'.$consultaP['unidade'].'</option>';	

					}

				}

				echo '</select></div>';										

					//---------------------------------------------------------------------

//---------------------------------------------------------------------

					//seleciona todas as unidades

					if (isset($_GET['filter']) and !empty($_GET['filter']) and $_GET['filter'] <> "Todas") {

						$sqlUnidade = "SELECT DISTINCT unidade FROM login WHERE categoria='Gestores' and unidade='".$_GET['filter']."' ORDER BY unidade";

					} else {

						$sqlUnidade = "SELECT DISTINCT unidade FROM login WHERE categoria='Gestores' ORDER BY unidade";

					}

					$selectUnidade = mysql_query($sqlUnidade,$conexao) or die (mysql_error());					

					$numUnidade = mysql_num_rows($selectUnidade);

					$i=0;

					//Unidade

					while ($consultaUnidade = mysql_fetch_array($selectUnidade)) {

						echo '<div class="anoArq"> + '.$consultaUnidade['unidade'].'</div><div class="itenArq">';

							$sqlSub = "SELECT DISTINCT subcategoria FROM login WHERE categoria='Gestores' and unidade='".$consultaUnidade['unidade']."' ORDER BY subcategoria";

							$selectSub = mysql_query($sqlSub,$conexao) or die (mysql_error());

						//mes

						while ($consultaSub = mysql_fetch_array($selectSub)) {

							echo '<div class="mesArq"> + '.$consultaSub['subcategoria'].'</div>';

							echo '<div class="listArq">';

							$sqlLogin = "SELECT * FROM login WHERE categoria='Gestores' and unidade='".$consultaUnidade['unidade']."' and subcategoria='".$consultaSub['subcategoria']."' ORDER BY nome";

				$selectLogin = mysql_query($sqlLogin,$conexao) or die (mysql_error());

							while ($consultaLogin = mysql_fetch_array($selectLogin)) {

								echo '

									<div class="showUsers">

										<h1 class="nomeUsers">

													'.$consultaLogin['nome'].'

										</h1>

										<div class="containerUsers">

											<div class="fotoUsers">

												<img src="

										';

										if (!empty($consultaLogin['foto'])) {

											echo $consultaLogin['foto'];

										} else {

											echo "arquivos/usuarios/fotos/semFoto.jpg";	

										}

										echo '">

											</div>

											<div class="infoUsers">

												<h4>

													<strong>Unidade:</strong> '.$consultaLogin['unidade'].'

												</h4>

												<h4>

													<strong>Cargo:</strong> '.$consultaLogin['cargo'].'

												</h4>

												<h4>

													<strong>Gênero:</strong> '.$consultaLogin['genero'].'</h4>

									';												

										echo '

											<h4>

												<strong>Nacionalidade:</strong> '.$consultaLogin['nacionalidade'].'

											</h4>

											<h4>

												<strong>Naturalidade:</strong> '.$consultaLogin['naturalidade'].'

											</h4>

											</div>								

										</div>

										<div class="contatoUsers">

											<p>

												<strong>Contatos:</strong> '.$consultaLogin['contato'].'

												<p class="mail"> <strong>Email:</strong> '.$consultaLogin['mail'].'</h3>

												</p>

												<p>

												';

										if (empty($consultaLogin['curriculo'])) {

											echo '<strong>Curriculo:</strong> Curriculo não Cadastrado.';

										} else {

											echo '<strong>Curriculo:</strong> <a href="'.$consultaLogin['curriculo'].'" target="_blank">Visualizar Curriculo.</a>';

										}

										echo '

											</p>

										</div>

									 </div>

									 ';

							}

							echo '</div>';

						} //fecha o while mes

						echo '</div>';

					} // fecha o while ano

//---------------------------------------------------------------------

//---------------------------------------------------------------------	

				}

			

		?>
	</div>
	</div>