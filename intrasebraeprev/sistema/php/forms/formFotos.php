<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div class="user-cp">
	<div class="line">
		<span>Interatividade</span><div class="disc"></div>
		<li>Galeria de Fotos</li>
	</div>				
</div>
	<?php

	//echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Interatividade > Galeria de Fotos ></span> Galeria de Fotos </h1>';

				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('Galeria de Fotos').'" ><button>Voltar</button></a></div>';

						include("php/forms/formEditAlbuns.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('Galeria de Fotos').'" ><button>Voltar</button></a></div>';

						include("php/forms/formDelAlbuns.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'up') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('Galeria de Fotos').'" ><button>Voltar</button></a></div>';

						include("php/forms/formCadFotos.php"); 

					} else {

						echo '<div class="table-responsive"><table class="table">';

						include("../php/conexao.php");

						$sql = "SELECT id FROM albumFoto";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td>Nenhuma Foto Cadastrada.</td></tr>';

							include("php/forms/formCadAlbuns.php");	

						} else {

							echo '<tr><a href="?menu='.base64_encode('Galeria de Fotos').'&acao=add" class="newReg"><button>Novo Album</button></a></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Albuns Encontrados em <strong> Galeria de Fotos </strong>:</td></tr>';

							echo '<tr class="bg-blue">

										<th>Album</th>

										<th>Miniatura</th>

										<th>Fotos</th>

										<th>+ Fotos</th>

										<th>Editar</th>

									  </tr>

									  ';

							$sql = "SELECT * FROM albumFoto ORDER BY id DESC";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						

							while ($consulta = mysql_fetch_array($select)) {

								$sql2 = "SELECT id FROM fotos WHERE album='".$consulta['album']."'";

								$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

								$f = mysql_num_rows($select2);

								?><tr>

										<td><?php echo $consulta['album'];?></td>

										<td><img src="<?php echo $home_url.'/'.$consulta['miniatura'];?>" width="80" height="60"></td>

										<td><?php echo $f;?></td>

										<td><a href="?menu=<?php echo base64_encode('Galeria de Fotos');?>&acao=up&album=<?php echo $consulta['id'];?>">Adicionar</a>

										<td>
											<a style="margin-right:10px;"href="?menu=<?php echo base64_encode('Galeria de Fotos');?>&acao=edit&cod=<?php echo $consulta['id'];?>">
											<img class="pencil" src="<?php echo $home_url;?>/imagens/pencil.png" alt="">
											</a>
										
											<a href="?menu=<?php echo base64_encode('Galeria de Fotos');?>&acao=del&cod=<?php echo $consulta['id'];?>">
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

					echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('Galeria de Fotos').'" ><button>Voltar</button></a></div>';

					include("php/forms/formCadAlbuns.php");	

				}

			?>