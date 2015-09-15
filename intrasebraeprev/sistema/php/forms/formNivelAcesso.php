<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	<!--<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;"> Usuários > Gerenciar ></span> Niveis de Acesso</h1>-->
	<div class="user-cp">
		<div class="line">
			<span>Usuários</span><div class="disc"></div>
			<li>Nível de Acesso</li>
		</div>					
	</div>
	<?php
				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<a href="?menu='.base64_encode('nivel_acesso').'" ><button>Voltar</button></a>';

						include("php/forms/formEditNivelAcesso.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<a href="?menu='.base64_encode('nivel_acesso').'" ><button>Voltar</button></a>';

						include("php/forms/formDelNivelAcesso.php"); 

					} else {

						echo '<div class="table-responsive"><table class="table">';

						include("../php/conexao.php");

						$sql = "SELECT * FROM nivelAcesso";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td style="font-size:16px;">Nenhum Nível de Acesso Cadastrado.</td></tr>';

							include("php/forms/formCadNivelAcesso.php");	

						} else {
							?>
							<a href="?menu=<?php echo base64_encode('nivel_acesso');?>&acao=add">
								<button>Novo Registro</button>
							</a>
							<?php 	
							//echo '<tr> <td colspan="6"> <a href="?menu='.base64_encode('nivel_acesso').'&acao=add" class="newReg">Novo Registro</a></td></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Registros Encontrados em <strong> Níveis de Acesso </strong>:</td></tr>';

							echo '<tr class="bg-blue">

										<th>Código no Sistema</th>

										<th>Nível de Acesso</th>

										<th>Editar</th>										

									  </tr>

									  ';

							$sql = "SELECT * FROM nivelAcesso ORDER BY id DESC";

							$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {?>

								<tr>

										<td><?php echo $consulta['id'];?></td>

										<td><?php echo $consulta['nivel_acesso'];?></td>
											
										<td style="text-align:center;">
										
										<a style="margin-left: -21px;"href="?menu=<?php echo base64_encode('nivel_acesso');?>&acao=edit&cod=<?php echo $consulta['id'];?>">
											<img class="pencil" src="<?php echo $home_url;?>/imagens/pencil.png" alt="">
										</a>

										<a style="margin-left: 16px;"href="?menu=<?php echo base64_encode('nivel_acesso');?>&acao=del&cod=<?php echo $consulta['id'];?>">
											<img class="delete" src="<?php echo $home_url;?>/imagens/delete.png" alt="">
										</a>
										</td>

									  </tr>

						<?php 

							}

						}

						echo "</table></div></div>";

					}

				} else {

					echo '<a href="?menu='.base64_encode('nivel_acesso').'" ><button>Voltar</button></a>';

					include("php/forms/formCadNivelAcesso.php");	

				}

			?>