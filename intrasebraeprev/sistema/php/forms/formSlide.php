<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<div class="user-cp">
		<div class="line">
			<span>Início</span><div class="disc"></div>
			<li>Slide Show <span style="font-size:15px;">Tam (920 x 400)</span></li>
		</div>							
	</div>
	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM slides";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$t = 0;

		while ($consulta = mysql_fetch_array($select)) {

			$t++;

			echo '
				<div class="table-responsive">	
				<table class="table">

				<form method="post" action="php/upSlides.php" enctype="multipart/form-data">

				<tr>

					<td colspan="5" class="titulo">

						<h3> Slide '.$t.' </h3>

					</td>

				</tr>

				<tr>

					<td colspan="5">

						<img src="../'.$consulta['caminho'].'" width="660" height="287">

					</td>

				</tr>

				<tr>

					<td> Status: </td>

					<td> <select name="status">

				';

				if ($consulta['status'] == "Visível On-line") {

					echo '<option selected="selected">Visível on-line</option>

						  <option>Não-Visível On-line</option>

						  ';

				} else {

					echo '<option selected="selected">Não-Visível On-line</option>

						  <option>Visível On-line</option>

						  ';

				}

				echo '
atualizar
					</select>							

					</td>

					<td> Alterar Slide: </td>

					<td> <input type="file" name="arq"> </td>					
					

					</tr>

					<tr>

						<td>

							Link:

						</td>

						<td>

							<input type="text" name="link" style="width:155px;" value="'.$consulta['link'].'">

						</td>

						<td>

							Texto:

						</td>

						<td>

							<input type="text" name="texto" style="width:300px;" value="'.$consulta['texto'].'">

						</td>

					</tr>
					<tr>

					<td colspan="5"> <input type="submit" name="edit" value="Atualizar" style="padding:24px 20px 24px 20px;"> </td>

					<input type="hidden" name="cod" value="'.$t.'">		
					
					</tr>
					</form>	

					</table>				  

					';	

		}

	?>	        

    </div>