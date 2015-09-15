<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<div class="user-cp">
		<div class="line">
			<span>Interatividade</span><div class="disc"></div>
			<li> Dicas Úteis</li>
		</div>							
	</div>
	<?php

	//echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Interatividade > Dicas Úteis ></span> Dicas Úteis</h1>';

				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" > <button> Voltar</button></a></div>';

						include("php/forms/formEditDicasUteis.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" > <button> Voltar</button></a></div>';

						include("php/forms/formDelDicasUteis.php"); 

					} else {

						echo '<div class="table-responsive"><table class="table">';

						include("../php/conexao.php");

						$sql = "SELECT * FROM dicasUteis";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td style="font-size:16px;">Nenhuma Dica Cadastrada.</td></tr>';

							include("php/forms/formCadDicasUteis.php");	

						} else {

							echo '<tr> <a href="?menu='.$encode.'&acao=add" class="newReg"><buttton>Novo Registro</button></a></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Registros Encontrados em <strong> Dicas Úteis </strong>:</td></tr>';

							echo '<tr class="bg-blue">

										<th>Categoria</th>

										<th>Titulo</th>

										<th>Resumo da Descrição</th>

										<th>Editar</th>

									</tr>

									  ';

							$sql = "SELECT * FROM dicasUteis ORDER BY id DESC";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {

								echo '<tr>

										<td>'.$consulta['categoria'].'</td>

										<td>'.$consulta['titulo'].'</td>

										<td>'.substr($consulta['dica'],0,85).'...</td>

										<td class="text-center">
											<a href="?menu='.$encode.'&acao=edit&cod='.$consulta['id'].'">
											<img style="margin-left:-10px;margin-right:8px;class="pencil" src="'.$home_url.'/imagens/pencil.png" alt="">
											</a>
											<a href="?menu='.$encode.'&acao=del&cod='.$consulta['id'].'">
												<img class="delete" src="'.$home_url.'/imagens/delete.png" alt="">
											</a>
										</td>

									  </tr>

									  ';

							}

						}

						echo "</table></div>";

					}

				} else {

					echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" ><button>Voltar</button></a></div>';

					include("php/forms/formCadDicasUteis.php");	

				}

			?>