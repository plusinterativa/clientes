<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

	echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Conselhos > Biblioteca Digital ></span> Biblioteca Digital</h1>';

				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('Biblioteca Digital').'" > < Voltar</a></div>';

						include("php/forms/formEditBiblioDigital.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('Biblioteca Digital').'" > < Voltar</a></div>';

						include("php/forms/formDelBiblioDigital.php"); 

					} else {

						echo '<table class="mostResult">';

						include("../php/conexao.php");

						$sql = "SELECT * FROM biblioDigital";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td style="font-size:16px;">Nenhum Arquivo Encontrado.</td></tr>';

							include("php/forms/formCadBiblioDigital.php");	

						} else {

							echo '<tr> <td colspan="6"> <a href="?menu='.base64_encode('Biblioteca Digital').'&acao=add" class="newReg">Novo Registro</a></td></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Arquivos Encontrados em <strong> Biblioteca Digital </strong>:</td></tr>';

							echo '<tr>

										<td>Código no Sistema</td>

										<td>Titulo</td>

										<td> Categoria </td>

										<td> Ano </td>

										<td>Editar</td>

										<td>Excluir</td>

									  </tr>

									  ';

							$sql = "SELECT * FROM biblioDigital ORDER BY id DESC";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {

								echo '<tr>

										<td>'.$consulta['id'].'</td>

										<td>'.$consulta['titulo'].'</td>

										<td>'.$consulta['categoria'].'</td>

										<td>'.$consulta['ano'].'</td>

										<td><a href="?menu='.base64_encode('Biblioteca Digital').'&acao=edit&cod='.$consulta['id'].'">Editar</a></td>

										<td><a href="?menu='.base64_encode('Biblioteca Digital').'&acao=del&cod='.$consulta['id'].'">Excluir</a></td>

									  </tr>

									  ';

							}

						}

						echo "</table></div>";

					}

				} else {

					echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('Biblioteca Digital').'" > < Voltar</a></div>';

					include("php/forms/formCadBiblioDigital.php");	

				}

			?>