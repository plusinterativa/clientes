<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="first-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Pesquisa</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="table-responsive">
					<table class="table pesquisa">

		<?php



				$pesq = $_GET['pesq'];

            	//echo '<div id="formArquivos"><h1 style="font-size:28px;width:920px;border-bottom:2px dotted #ddd;">Pesquisa de Arquivos <div style="float:right;font-size:14px;color:rgb(50,50,50)"><form method="get" action="index.php" id="formPesq">Procurar por Arquivos: <input type="text" name="pesq"><input type="hidden" name="arq"><input type="submit" value="Pesquisar" class="btnPesq"></form></div></h1>';

				//echo '<div class="titleArq2" style="width:920px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#000;margin:10px 0 10px 0">Resultados ao Pesquisar por: <strong>"'.$pesq.'"</strong></div>';

				$itensPesq = array('titulo','ano','mes','categoria','menu');

				$i = 0;

				$r = 0;

				while ($i <= 4) {

					$sql = "SELECT * FROM arquivos WHERE ".$itensPesq[$i]." LIKE '%".$pesq."%' ORDER BY ".$itensPesq[$i];

					$select= mysql_query($sql,$conexao) or die (mysql_error());

					$n = mysql_num_rows($select);

					$r = $r+$n;

					if ($n == 0) {?>
						<tr>
							<td colspan="6">
							Nenhum Arquivo Encontrado ao Pesquisar: 
							<strong><?php echo $itensPesq[$i]?></strong>
							</td>
						</tr>	
					<?php
					} else {?>
					<tr>
						<td colspan="6">+ Listando 
							<strong>(<?php echo $n; ?>)</strong> Registros Encontrados ao Pesquisar Arquivos por <strong><?php  echo $itensPesq[$i]; ?> </strong>
						</td>
						</tr>
						
									<tr class="bg-blue">
										<th>Titulo</th>
										<th>Menu</th>
										<th>Categoria</th>
										<th>Ano</th>
										<th>Mes</th>
										<th>Arquivo</th>
									</tr>
					<?php
						while ($consulta = mysql_fetch_array($select)) {?>

						

								<tr>

									<td><?php echo $consulta['titulo'];?></td>

									<td><?php echo $consulta['menu'];?></td>

									<td><?php echo $consulta['categoria'];?></td>

									<td><?php echo $consulta['ano'];?></td>

									<td><?php echo $consulta['mes'];?></td>

									<td>
										<a href="<?php echo $consulta['caminho'];?>" target="_blank">Abrir Arquivo</a>
									</td>

								</tr>

						<?php

						} // fecha o while dos arquivos
						?>
						
				<?php
					} // fecha o else do $n

					$i++;

				} // fecha o while do $i ?>

				<tr>
					<td colspan="6">
					Foram Encontrados (<?php echo $r; ?>) Resultados para: <strong><?php echo $pesq; ?></strong>
					</td>
				</tr>

			

		
				</table>
			</div>
		</div>
	</div>
</div>



     