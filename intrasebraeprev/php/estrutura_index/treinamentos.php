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
	<div class="container page-treinamentos">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

		<?php

            	//echo '<div id="formArquivos"><h1 style="font-size:28px;width:920px;border-bottom:2px dotted #ddd;">Categoria: <div style="float:right;font-size:14px;color:rgb(50,50,50)"><form method="get" action="index.php">Procurar por Treinamentos: <input type="text" name="pesq"><input type="submit" value="Pesquisar" class="btnPesq"><input type="hidden" name="treinamentos"/></form></div></h1><h1 style="font-size:20px;width:920px;"><span style="font-size:16px;color:#333;">Interatividade > Treinamentos > </span>Treinamentos</h1>';

				if (isset($_GET['cod'])) {

					$sql = "SELECT * FROM treinamentos WHERE id='".$_GET['cod']."'";

					$select= mysql_query($sql,$conexao) or die (mysql_error());

					$consulta = mysql_fetch_array($select);

					echo '

						<div class="titleNot">

							<h4>'.$consulta['titulo'].'</h4>

						</div>

						<div class="corpNot">

							'.$consulta['descricao'].'

						</div>

							<table class="formUpload" style="width:920px;">

							<tr>

								<td colspan="2">

									<h3>Anexos</h3>

								</td>

							</tr>

							';

						if (!empty($consulta['link'])) {

							echo '<tr><td width="200">Treinamento em Video:</td><td><a href="'.$consulta['link'].'" target="_blank">Assistir Video</a></td></tr>';	

						}

						if (!empty($consulta['arquivo'])) {

							echo '<tr><td width="200">Arquivo do Treinamento:</td><td><a href="'.$consulta['arquivo'].'" target="_blank">Acessar</a></td></tr>';	

						}

						echo '

							</table>				

							 ';	

					$sql = "SELECT * FROM treinamentos ORDER BY id DESC LIMIT 10";

					$select= mysql_query($sql,$conexao) or die (mysql_error());

					echo '

						<div class="outNot">

							<h6> Outros Treinamentos </h6>

							

							';

					$n = mysql_num_rows($select);

					if ($n <> 1) {

						while ($consulta = mysql_fetch_array($select)) {

							if ($consulta['id'] <> $_GET['cod']) {

								echo '<a class="catDicas" href="?menu='.base64_encode('Treinamentos').'&cod='.$consulta['id'].'">'.$consulta['titulo'].' (Categoria:'.$consulta['categoria'].')</a>';

							}

						}

					} else {

						echo 'Não Existem Mais Treinamentos Cadastrados.';

					}

					echo '

						

						</div>

						';	

			//-------------------------------------

				} elseif (isset($_GET['categoria'])) {

					$sql = "SELECT * FROM treinamentos WHERE categoria='".$_GET['categoria']."' ORDER BY id DESC";

					$select= mysql_query($sql,$conexao) or die (mysql_error());

					$n = mysql_num_rows($select);

					echo '<div class="listando">Listando ('.$n.') Treinamentos Encontrados na Categoria <strong>'.$_GET['categoria'].'</strong>.</div>';

					if ($n == 0) {

						echo '<div class="nullregister">Nenhum Treinamento Cadastrado.</div>';

					} else {

						while ($consulta = mysql_fetch_array($select)) {

							echo '

								<div class="not">
									<div class="titleNot">
										<h4>'.$consulta['titulo'].'</h4>
									</div>

									<div class="corpNot">'.substr($consulta['descricao'],0,300).'...
									<span><a href="?menu='.base64_encode('Treinamentos').'&cod='.$consulta['id'].'">Veja mais</a></span>
									</div>

									

								</div>

								';

						}

					}

					

				} else {

					$sql = "SELECT DISTINCT categoria FROM treinamentos ORDER BY categoria";

					$select= mysql_query($sql,$conexao) or die (mysql_error());

					$n = mysql_num_rows($select);

					echo '<div class="listando">Listando ('.$n.') Categorias Encontradas em <strong>Treinamentos</strong>.</div>';

					echo '<div class="cat">Selecione a Categoria:</div>';

					if ($n == 0) {

						echo '<div class="nullregister">Nenhum Treinamento Cadastrado.</div>';

					} else {

						while ($consulta = mysql_fetch_array($select)) {

							echo '

								 <div class="catDicas">

								 	<a href="?menu='.base64_encode('Treinamentos').'&categoria='.$consulta['categoria'].'">'.$consulta['categoria'].'</a>

								 </div>

								 ';

						}

					}

				}

			

		?>

        	</div>
        </div>
	</div>