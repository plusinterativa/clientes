<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<div class="user-cp">
		<div class="line">
			<span>Interatividade</span><div class="disc"></div>
			<li> Galeria de Vídeos</li>
		</div>							
	</div>
	<?php

	//echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Interatividade > Galeria de Vídeos ></span> Galeria de Vídeos</h1>';

				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" ><button> Voltar</button></a></div>';

						include("php/forms/formEditVideos.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" > <button>Voltar</button></a></div>';

						include("php/forms/formDelVideos.php"); 

					} else {

						echo '<div class="table-responsive"><table class="table">';

						include("../php/conexao.php");

						$sql = "SELECT * FROM videos";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td style="font-size:16px;">Nenhum Video Cadastrado.</td></tr>';

							include("php/forms/formCadVideos.php");	

						} else {

							echo '<tr><a href="?menu='.$encode.'&acao=add" class="newReg"><button>Novo Registro</button></a></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Registros Encontrados em <strong> Videos </strong>:</td></tr>';

							echo '<tr class="bg-blue">

										<th>Código</th>

										<th>Titulo</th>

										<th>Descrição</th>

										<th>Miniatura</th>

										<th>Editar</th>

									  </tr>

									  ';

							$sql = "SELECT * FROM videos ORDER BY id DESC";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {?>

									<tr>

										<td><?php echo $consulta['id'];?></td>

										<td><?php echo $consulta['titulo'];?></td>

										<td><?php echo substr($consulta['descricao'],0,80);?></td>

										<td><img src="../<?php echo $consulta['miniatura'];?>" width="80" height="50"/></td>

										<td>
											<a style="margin-left:-8px;margin-right:10px;"href="?menu=<?php echo $encode;?>&acao=edit&cod=<?php echo $consulta['id'];?>">
												<img class="pencil" src="<?php echo $home_url;?>/imagens/pencil.png" alt="">
											</a>											
											<a href="?menu=<?php echo $encode;?>&acao=del&cod=<?php echo $consulta['id'];?>">
												<img class="delete" src="<?php echo $home_url;?>/imagens/delete.png" alt="">
											</a>
										</td>

									  </tr>

							<?php 

							}

						}

						echo "</table></div>";

					}

				} else {

					echo '<div style="margin-top:15px;"><a href="?menu='.$encode.'" > < Voltar</a></div>';

					include("php/forms/formCadVideos.php");	

				}

			?>