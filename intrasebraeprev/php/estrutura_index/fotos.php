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
<div class="container page-fotos">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">

    		<?php
				//<div style="position:relative;float:left; padding:20px;width:920px;margin-top:60px;margin-bottom:30px;">

				//echo '<div id="formArquivos" style="margin-bottom:20px;"><h1 style="font-size:28px;width:920px;border-bottom:2px dotted #ddd;">Categoria: <div style="float:right;font-size:14px;color:rgb(50,50,50)"></div></h1><h1 style="font-size:20px;width:920px;"><span style="font-size:16px;color:#333;"> Interatividade > Galeria de Fotos > </span> Galeria de Fotos </h1></div>';

				$sql = "SELECT * FROM albumFoto ORDER BY id DESC";

				$select = mysql_query($sql,$conexao) or die (mysql_error());

				$n = mysql_num_rows($select);

				if ($n == 0) {

					echo '<div class="nullregister">Nenhum Album Cadastrado.</div>';

				}elseif (isset($_GET['album'])) {

					$sql = "SELECT * FROM fotos WHERE album='".$_GET['album']."' ORDER BY id DESC";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$n = mysql_num_rows($select);

					echo '<div class="col-md-12 listando">Listando ('.$n.') <strong>Fotos</strong> Encontradas no Album <strong>'.$_GET['album'].'</strong>: <a href="?menu='.base64_encode('Galeria de Fotos').'">Voltar</a></div>';

					$i=0;

					while ($consulta = mysql_fetch_array($select)) {

						$i++;

						echo '

							<div class="col-md-12 text-center box-foto">

								<a href="#dialog'.$i.'" name="modal"><img src="'.$consulta['foto'].'" /></a>

								<p>'.$consulta['titulo'].'</p>

							</div>

							';

					}

				} else {

					echo '<div class="col-md-12 listando">Listando ('.$n.') <strong>Albuns</strong> Encontrados em Galeria de Fotos:</div>';

					while ($consulta = mysql_fetch_array($select)) {

						$sql2 = "SELECT id FROM fotos WHERE album='".$consulta['album']."'";

						$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

						$f = mysql_num_rows($select2);

						echo '

							<div class="col-md-12 text-center box-foto">

								<a href="?menu='.base64_encode('Galeria de Fotos').'&album='.$consulta['album'].'"><img src="'.$consulta['miniatura'].'" /></a>

								<p>'.$consulta['titulo'].' ('.$f.')</p>

								<h2> '.$consulta['data'].' </h2>

							</div>

							';

					}

				}

			?>	

        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>