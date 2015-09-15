<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



   <div class="user-cp">
		<div class="line">
			<span>Início</span><div class="disc"></div>
			<li>Popup</li>
		</div>			
								
	</div>
	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM bannerIndex";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);

			echo '
			<div class="table-responsive">
				<table class="table">

				<form method="post" action="php/upPopUp.php" enctype="multipart/form-data">

				<tr>

					<td colspan="5" class="titulo">

						<h3> Pop-Up Index </h3>

					</td>

				</tr>

				<tr>

					<td colspan="5">

						<img src="../'.$consulta['banner'].'" width="640" height="480">

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

					</select>							

					</td>

					<td> Alterar Slide: </td>

					<td> <input type="file" name="arq"> </td>


					</tr>

					<tr>

						<td>

							Link:

						</td>

						<td colspan="5">

							<input type="text" name="link" style="width:450px;" value="'.$consulta['link'].'">

						</td>

					</tr>
					<tr>
						<td colspan="5"> <input type="submit" name="edit" value="Atualizar" style="padding:24px 20px 24px 20px;"> </td>	
					</tr>
					</form>	

					</table>				  

					';	

	?>	        

   