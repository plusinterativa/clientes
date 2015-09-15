<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<div class="user-cp">
		<div class="line">
			<span>Início</span><div class="disc"></div>
			<li>Links</li>
		</div>							
	</div>
	<?php

	//echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Inicio > Links Úteis ></span> Links Úteis</h1>';

				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('links').'" > <button>Voltar</button></a></div>';

						include("php/forms/formEditLinks.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('links').'" ><button>Voltar</button></a></div>';

						include("php/forms/formDelLinks.php"); 

					} else {

						echo '<div class="table-responsive"><table class="mostResult">';

						include("../php/conexao.php");

						$sql = "SELECT * FROM links";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td style="font-size:16px;">Nenhum Link Cadastrado.</td></tr>';

							include("php/forms/formCadLinks.php");	

						} else {

							echo '<tr><a href="?menu='.base64_encode('links').'&acao=add" class="newReg"><button>Novo Registro</button></a></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Registros Encontrados em <strong> Links Úteis </strong>:</td></tr>';

							echo '<tr class="bg-blue">

										<th>Código no Sistema</th>

										<th>Titulo</th>

										<th>URL</th>

										<th>Editar</th>

									  </tr>

									  ';

							$sql = "SELECT * FROM links ORDER BY id DESC";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {?>

								<tr>

										<td><?php echo $consulta['id'];?></td>

										<td><?php echo $consulta['titulo'];?></td>

										<td><a href="<?php echo $consulta['link'];?>" target="_blank"><?php echo $consulta['link'];?></a></td>

										<td>
											<a href="?menu=<?php echo base64_encode('links');?>&acao=edit&cod=<?php echo $consulta['id'];?>">
												<img class="pencil" src="<?php echo $home_url;?>/imagens/pencil.png" alt="">
											</a>

											<a style="margin-left:10px;"href="?menu=<?php echo base64_encode('links');?>&acao=del&cod=<?php echo $consulta['id'];?>">
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

					echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('links').'" > < Voltar</a></div>';

					include("php/forms/formCadLinks.php");	

				}

			?>