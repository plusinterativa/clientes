<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="user-cp">
				<div class="line">
					<span>Menus</span><div class="disc"></div>
					<li>Menus da Intranet</li>
				</div>				
					
								
			</div>
	<?php

	//echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Menus > Gerenciar ></span> Menus Intranet</h1>';

				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('menusIntra').'" ><button>Voltar</button></a></div>';

						include("php/forms/formEditMenusIntra.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<div style="margin-top:15px;"><a href="?menu='.base64_encode('menusIntra').'" ><button>Voltar</button></a></div>';

						include("php/forms/formDelMenusIntra.php"); 

					} else {

						echo '<div class="table-responsive"><table class="table">';

						include("../php/conexao.php");

						$sql = "SELECT * FROM menus";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td style="font-size:16px;">Nenhum Menu Cadastrado.</td></tr>';

							include("php/forms/formCadMenusIntra.php");	

						} else {

							echo '<tr> <a href="?menu='.base64_encode('menusIntra').'&acao=add" class="newReg"><button>Novo Registro</button></a></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Registros Encontrados em <strong> Menus da Intranet </strong>:</td></tr>';

							echo '<tr class="bg-blue";>

										<th>Código no Sistema</th>

										<th>Menu</th>

										<th>Categoria</th>

										<th>Editar</th>
										

									  </tr>

									  ';

							$sql = "SELECT * FROM menus ORDER BY id DESC";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {?>

								<tr>

										<td><?php echo $consulta['id'];?>'</td>

										<td><?php echo $consulta['menu'];?> </td>

										<td><?php echo $consulta['categoria'];?> </td>

										<td>
											<a style="margin-right:20px;"href="?menu=<?php echo base64_encode('menusIntra');?>&acao=edit&cod=<?php echo $consulta['id'];?>">
												<img class="pencil" src="<?php echo $home_url;?>/imagens/pencil.png" alt="">
											</a>

											<a href="?menu=<?php echo base64_encode('menusIntra');?>&acao=del&cod=<?php echo $consulta['id'];?>">
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

					echo '<a href="?menu='.base64_encode('menusIntra').'" ><button>Voltar</button></a>';

					include("php/forms/formCadMenusIntra.php");	

				}

			?>