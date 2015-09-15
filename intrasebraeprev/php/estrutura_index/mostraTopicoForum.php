<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div class="topicos">

                <?php 

                    echo '<div id="formArquivos"><h1 style="font-size:28px;width:710px;border-bottom:2px dotted #ddd;">Tópicos do Fórum <div style="float:right;font-size:14px;color:rgb(50,50,50)"><form method="get">Procurar por Tópicos: <input type="text" name="pesq" style="width:180px;"><input type="submit" value="Pesquisar" class="btnPesq"><input type="hidden" name="topico"/></form></div></h1></div></div>';

					echo '<div class="titleArq2" style="float:left;width:710px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#000;margin:40px 0 10px 20px">Listando Tópico Abaixo.</div>';

			$sql = "SELECT * FROM topicos WHERE id='".$_GET['topic']."'";

            $select = mysql_query($sql,$conexao) or die (mysql_error());

            $consulta = mysql_fetch_array($select);

			$sql2 = "SELECT * FROM login WHERE usuario='".$consulta['usuario']."'";

            $select2 = mysql_query($sql2,$conexao) or die (mysql_error());

            $consulta2 = mysql_fetch_array($select2);

			echo '

				<div class="containerTopic">

					<div class="headerTopic">

						<h1>Tópico: </h1><h3> '.$consulta['titulo'].'</h3><span style="float:right;margin-top:10px;"><b>Data do Post:</b> '.$consulta['post'].'</span>

				 	</div>

					<div class="infosTopic">

						<div class="fotoAutor">

							<img src="'.$consulta2['foto'].'">

							<h1> Criado Por:<strong>'.$consulta2['nome'].'</strong></h1>

						</div>

						<div class="descTopic">

							<h2>Descrição</h2>

							<p>'.$consulta['comentario'].'</p>

							<h2>Anexos</h2>

							<div class="anexos">

							<strong>Links: </strong>';

						$t=0;

						for($i=1;$i<=5;$i++) {

							if (!empty($consulta['Link'.$i])) {

								$t++;

								echo '<a href="'.$consulta['Link'.$i].'" target="_blank">Acessar Link '.$i.'</a>';

								if ($i <> 5) {

									echo ' | ';	

								}

							}

						}

						if ($t==0) {

							echo 'Nenhum Link Cadastrado.';

						}

						echo '

							<br>

							<strong>Arquivos:</strong>

							';

							$t=0;

							for($i=1;$i<=5;$i++) {

								if (!empty($consulta['Arquivo'.$i])) {

									$t++;

									echo '<a href="'.$consulta['Arquivo'.$i].'" target="_blank">Acessar Arquivo '.$i.'</a>';

									if ($i <> 5) {

										echo ' | ';	

									}

								}

							}

							if ($t==0) {

								echo 'Nenhum Arquivo Cadastrado.';

							}

						echo '

							</div>

						</div>

					</div>

				 </div>

				 ';

				 $sqlC = "SELECT * FROM comentarios WHERE topico='".$consulta['titulo']."' ORDER BY id DESC";

            	 $selectC = mysql_query($sqlC,$conexao) or die (mysql_error());

            	 while ($consultaC = mysql_fetch_array($selectC)) {

					 $sql2 = "SELECT * FROM login WHERE usuario='".$consultaC['usuario']."'";

            $select2 = mysql_query($sql2,$conexao) or die (mysql_error());

            $consulta2 = mysql_fetch_array($select2);

					 echo '

				<div class="containerTopic" style="background:none;min-height:150px;">

					<span class="post"><b>Postado:</b> '.$consultaC['post'];

					include("editPost.php");

					echo '</span>

					<div class="infosTopic">

						<div class="fotoAutor" style="margin-top:5px;height:150px;padding-top:10px;">

							<img src="'.$consulta2['foto'].'">

							<h1> <strong>'.$consulta2['nome'].'</strong></h1>

						</div>

						<div class="descTopic">

							<h2>Comentario:</h2>

							<p>'.$consultaC['comentario'].'</p>

							<h2>Anexos</h2>

							<div class="anexos">

							<strong>Links: </strong>';

						$t=0;

						for($i=1;$i<=5;$i++) {

							if (!empty($consultaC['Link'.$i])) {

								$t++;

								echo '<a href="'.$consultaC['Link'.$i].'" target="_blank">Acessar Link '.$i.'</a>';

								if ($i <> 5) {

									echo ' | ';	

								}

							}

						}

						if ($t==0) {

							echo 'Nenhum Link Cadastrado.';

						}

						echo '

							<br>

							<strong>Arquivos:</strong>

							';

							$t=0;

							for($i=1;$i<=5;$i++) {

								if (!empty($consultaC['Arquivo'.$i])) {

									$t++;

									echo '<a href="'.$consultaC['Arquivo'.$i].'" target="_blank">Acessar Arquivo '.$i.'</a>';

									if ($i <> 5) {

										echo ' | ';	

									}

								}

							}

							if ($t==0) {

								echo 'Nenhum Arquivo Cadastrado.';

							}

						echo '

							</div>

						</div>

					</div>

				 </div>

				 ';

				}

				if (isset($_GET['post'])) {

					echo '

						<script type="text/javascript">

							$(document).ready(function() {

								$(".modalForum").css("top","300px");

							});

						</script>

						<div style="display:none;" class="validaModalForum">true</div>

							<div class="modalForum">

							<a href="index.php?forum='.base64_encode('true').'&topic='.$_GET['topic'].'" class="close">Fechar <span> [X] </span></a>';

						include("formEditComentarios.php");

					echo '

						</div>

						<div id="maskForum"></div>

						';

				}

			?>

			<form method="post" action="php/delComents.php" id="formDelComents">

            	<input type="hidden" name="codDelComents" />

                <input type="hidden" name="topicDelComents" value="<?php echo $_GET['topic']; ?>" />

            </form>

