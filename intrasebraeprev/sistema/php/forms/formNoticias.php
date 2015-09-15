<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<div class="user-cp">
		<div class="line">
			<span>Interatividade</span><div class="disc"></div>
			<li>Notícias</li>
		</div>							
	</div>
	<?php

	//echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Interatividade > Notícias ></span> Notícias</h1>';

				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" > <button> Voltar</button></a></div>';

						include("php/forms/formEditNoticias.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" > <button> Voltar</button></a></div>';

						include("php/forms/formDelNoticias.php"); 

					} else {

						echo '<div class="table-responsive"><table class="table">';

						include("../php/conexao.php");

						$sql = "SELECT * FROM noticias";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td style="font-size:16px;">Nenhuma Noticia Cadastrada.</td></tr>';

							include("php/forms/formCadNoticias.php");	

						} else {

							echo '<tr> <a href="?menu='.$encode.'&acao=add" class="newReg"><button>Novo Registro</button></a></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Registros Encontrados em <strong> Noticias </strong>:</td></tr>';

							echo '<tr class="bg-blue">

										<th>Código</th>

										<th>Titulo</th>

										<th>Resumo da Noticia</th>

										<th>Fonte</th>

										<th>Data</th>

										<th>Editar</th>

									  </tr>

									  ';

							$sql = "SELECT * FROM noticias ORDER BY id DESC";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {

								echo '<tr>

										<td>'.$consulta['id'].'</td>

										<td>'.$consulta['titulo'].'</td>

										<td>'.substr($consulta['noticia'],0,50).'...</td>

										<td>'.$consulta['fonte'].'</td>

										<td>'.$consulta['post'].'</td>										

										<td>
											<a href="?menu='.$encode.'&acao=edit&cod='.$consulta['id'].'">
												<img class="pencil" src="'.$home_url.'/imagens/pencil.png" alt="">
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

					echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" > <button> Voltar</button></a></div>';

					include("php/forms/formCadNoticias.php");	

				}

			?>