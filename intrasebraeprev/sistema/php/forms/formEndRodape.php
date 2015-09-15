<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="user-cp">
		<div class="line">
			<span>Início</span><div class="disc"></div>
			<li>Endereço Rodapé</li>
		</div>							
	</div>
		<?php

			//echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Inicio > Endereço do Rodape ></span> Endereço</h1>';

			echo '<div class="table-responsive"><table class="table">';

			include("../php/conexao.php");

			$sql = "SELECT * FROM endRodape";

			$select = mysql_query($sql,$conexao) or die (mysql_error());

			$consulta = mysql_fetch_array($select);

			echo '

				<form method="post" action="php/editEndRodape.php">

				

					<tr><td><h3>Editar Registro</h3></td></tr>

					<tr>

						<td><textarea style="min-width:98%;max-width:98%; height:300px;"name="endRodape">'.$consulta['texto'].'</textarea></td>

					</tr>

					<tr>

						<td><input type="submit" value="Atualizar" name="edit"></td>

					</tr>

				</form>

				

				'

		?>
		</table>
	</div>