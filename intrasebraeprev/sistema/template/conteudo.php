<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-2 conteudo-cpanel">
				
			

		<?php
			if (!isset($_GET['menu']) or empty($_GET['menu'])) {
		?>

		<div class="topo-gerenciar-conteudo">
			<h1>INTRANET SEBRAE PREVID&Ecirc;NCIA GERENCIADOR DE CONTE&Uacute;DO</h1>
			<h3>Escolha uma op&ccedil;&atilde;o a esquerda</h3>
		</div>		

		<?php	
			} elseif(base64_decode($_GET['menu']) == 'slide') {

				include("php/forms/formSlide.php");

			} elseif(base64_decode($_GET['menu']) == 'pop-up') {

				include("php/forms/formPopUp.php");

			} elseif(base64_decode($_GET['menu']) == 'links') {

				include("php/forms/formLinks.php");

			} elseif(base64_decode($_GET['menu']) == 'endRodape') {

				include("php/forms/formEndRodape.php");

			} elseif(base64_decode($_GET['menu']) == 'Treinamentos') {

				include("php/forms/formTreinamentos.php");

			} elseif(base64_decode($_GET['menu']) == 'Notícias') {
				
				$encode = base64_encode('Notícias');
				include("php/forms/formNoticias.php");

			} elseif(base64_decode($_GET['menu']) == 'Dicas Úteis') {

				$encode = base64_encode('Dicas Úteis');
				include("php/forms/formDicasUteis.php");

			} elseif(base64_decode($_GET['menu']) == 'nivel_acesso') {

				include("php/forms/formNivelAcesso.php");

			} elseif(base64_decode($_GET['menu']) == 'Galeria de Vídeos') {

				$encode = base64_encode('Galeria de Vídeos');
				include("php/forms/formVideos.php");

			} elseif(base64_decode($_GET['menu']) == 'usuarios') {

				include("php/forms/formUsuarios.php");

			} elseif(base64_decode($_GET['menu']) == 'menusIntra') {

				include("php/forms/formMenusIntra.php");

			} elseif(base64_decode($_GET['menu']) == 'Galeria de Fotos') {

				include("php/forms/formFotos.php");

			} else {

				$r = $_GET['raiz'];

				$c = $_GET['cat'];

				$m = $_GET['menu'];

				$raiz = base64_decode($r);

				$sub = base64_decode($c);

				$menu = base64_decode($m);

				$link = base64_decode($_GET['link']);

            	//echo '<div id="formArquivos"><h1 style="font-size:28px;border-bottom:2px dotted #ddd;">Categoria: </h1><h1 style="font-size:20px;"><span style="font-size:16px;color:#333;">'.$raiz." > ".$sub." > </span>".$menu."</h1></div>";
				?>
				<div class="user-cp">
					<div class="line">
						<span><?php echo $raiz;?></span><div class="disc"></div>
						<li><?php echo $sub;?>><?php echo $menu;?></li>
					</div>							
				</div>
				<?php	
				if (!isset($_GET['acao']) or $_GET['acao'] <> 'add') {

					if (isset($_GET['acao']) and $_GET['acao'] == 'edit') {

						echo '<a href="?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($menu).'&link='.base64_encode($link).'" ><button>Voltar</button></a>';

						include("php/forms/formEditArquivos.php");

					} elseif (isset($_GET['acao']) and $_GET['acao'] == 'del') {

						echo '<a href="?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($menu).'&link='.base64_encode($link).'" ><button>Voltar</button></a>';

						include("php/forms/formDelArquivos.php"); 

					} else {

						echo '<div class="table-responsive"><table class="table">';

						include("../php/conexao.php");

						$sql = "SELECT * FROM arquivos WHERE menu='".$menu."'";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$n = mysql_num_rows($select);

						if ($n == 0) {

							echo '<tr><td style="font-size:16px;">Nenhum Arquivo Encontrado na Categoria: <strong>'.$menu.'</strong>.</td></tr>';

							include("php/forms/formUpArquivos.php");	

						} else {

							echo '<tr> <a href="?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($menu).'&link='.base64_encode($link).'&acao=add" class="newReg"><button>Novo Registro</button></a></tr>';

							echo '<tr> <td colspan="6"> Listando ('.$n.') Arquivos Encontrados em <strong>'.$menu.'</strong>:</td></tr>';

							echo '<tr class="bg-blue">

										<th>Código</th>

										<th>Titulo</th>

										<th>Ano</th>

										<th>Editar</th>

									  </tr>

									  ';

							$sql = "SELECT * FROM arquivos WHERE menu='".$menu."' ORDER BY id DESC";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {?>

								<tr>
										<td><?php echo $consulta['id'];?></td>

										<td><?php echo $consulta['titulo'];?></td>

										<td><?php echo$consulta['ano'];?></td>

										<td style="text-align: center;">
											<a style="margin-right: 10px;margin-left: -20px;"href="?raiz=<?php echo base64_encode($raiz);?>&cat=<?php echo base64_encode($sub);?>&menu=<?php echo base64_encode($menu);?>&link=<?php echo base64_encode($link);?>&acao=edit&cod=<?php echo $consulta['id'];?>">
												<img class="pencil" src="<?php echo $home_url;?>/imagens/pencil.png" alt="">
											</a>
											<a href="?raiz=<?php echo base64_encode($raiz);?>&cat=<?php echo base64_encode($sub);?>&menu=<?php echo base64_encode($menu);?>&acao=del&cod=<?php echo $consulta['id'];?>&link=<?php echo base64_encode($link);?>">
												<img class="delete" src="<?php echo $home_url;?>/imagens/delete.png" alt="">
											</a>
										</td>

								</tr>

							<?php 

							}

						}

						echo "</div></table>";

					}

				} else {

					echo '<div style="margin-top:15px;"><a href="?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($menu).'&link='.base64_encode($link).'" ><button>Voltar</button></a></div>';

					include("php/forms/formUpArquivos.php");	

				}

			}

		?>

	</div>
	</div>
		</div>

   