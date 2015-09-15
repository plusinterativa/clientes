<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['edit'])) {

				if (!empty($_POST['contato']) and !empty($_POST['mail']) and !empty($_POST['nacional']) and !empty($_POST['natural']) and !empty($_POST['gen']) and !empty($_POST['cargo']) and !empty($_POST['user']) and !empty($_POST['cod'])) {

					if (!strstr($_POST['mail'],"@") or !strstr($_POST['mail'],".")) {

						echo '

									<script>

										alert("E-mail Inválido!")

									</script>

									';

					} else {

						// Conexão com o banco de dados

						include("../../php/conexao.php");

						$sql = "SELECT usuario FROM login WHERE id <> '".$_POST['cod']."'";

						$select = mysql_query($sql,$conexao) or die (mysql_error());

						$i=0;

						while ($consulta = mysql_fetch_array($select)) {

							if  ($_POST['user'] == $consulta['usuario']) {

								$i++;

							}

						}

						if ($i == 1) {

							echo '

									<script>

										alert("Nome de Usuário Não Disponível!")

										location.href=("../sistema.php?menu='.base64_encode('usuarios').'&acao=edit&cod='.$_POST['cod'].'")

									</script>

									';	

						} else {

							include("functionRemoveAcentos.php");

							//recupera dados

							$cod = $_POST['cod'];

							$nome = $_POST['nome'];

							$contato = $_POST['contato'];

							$mail = $_POST['mail'];

							$nacional = $_POST['nacional'];

							$natural = $_POST['natural'];

							$gen = $_POST['gen'];

							$cargo = $_POST['cargo'];

							$diaDtN = $_POST['diaDtN'];

							$mesDtN = $_POST['mesDtN'];

							$anoDtN = $_POST['anoDtN'];

							$cat = $_POST['cat'];

							if ($cat == 'Empregados') {

								$sql = "UPDATE login SET unidade='',subcategoria='',obs='' WHERE id='".$cod."'";

								$update = mysql_query($sql,$conexao) or die (mysql_error());

							}

							if (isset($_POST['subcategoria']) and $_POST['cat'] <> 'Empregados') {

								$subcat = $_POST['subcategoria'];	

							}

							if (isset($_POST['obs'])) {

								$obs = $_POST['obs'];	

							}

							if (isset($_POST['unidade']) and $_POST['cat'] <> 'Empregados') {

								$sql = "SELECT unidade FROM unidades WHERE abreviatura='".$_POST['unidade']."'";

									$select = mysql_query($sql,$conexao) or die (mysql_error());

									$consulta = mysql_fetch_array($select);

									if ($_POST['unidade'] == 'Abase' or $_POST['unidade'] == 'Sebrae Previdencia') {

							$unidade = $consulta['unidade'];

							} else {

								$unidade = $consulta['unidade'].' ('.$_POST['unidade'].')';	

							}

							}

							$user = $_POST['user'];

							$nivel_acesso = $_POST['nivel_acesso'];

							$banner = $_FILES["foto"];

							$banner1 = $_FILES["curriculo"];

							// Se a foto foi selecionada

							if (!empty($banner["name"])) {

								

								// Largura máxima em pixels

								$largura = 1280;

								// Altura máxima em pixels

								$altura = 1024;

								// Tamanho máximo do arquivo em Mb

								$tamanho = 1;

								$calc_tam = ($tamanho*1024)*1024;

								$tamanho = $calc_tam;

				 

								// Verifica se o arquivo é uma imagem

								if(strstr($banner["name"],"jpg") or strstr($banner["name"],"JPG") or strstr($banner["name"],"jpeg") or strstr($banner["name"],"JPEG") or strstr($banner["name"],"png") or strstr($banner["name"],"PNG") or strstr($banner["name"],"gif") or strstr($banner["name"],"GIF") or strstr($banner["name"],"bmp") or strstr($banner["name"],"BMP")){

									

								} else {

									$erros[1] = "Formato de Arquivo Inválido, Válidos: jpg, png, gif e bmp";

								}

				 

								// Pega as dimensões da imagem

								$dimensoes = getimagesize($banner["tmp_name"]);

				 

								// Verifica se a largura da imagem é maior que a largura permitida

								if($dimensoes[0] > $largura) {

									$erros[2] = "A largura da imagem não deve ultrapassar ".$largura." px";

								}

				

								// Verifica se a altura da imagem é maior que a altura permitida

								if($dimensoes[1] > $altura) {

									$erros[3] = "Altura da imagem não deve ultrapassar ".$altura." px";

								}

						 

								// Verifica se o tamanho da imagem é maior que o tamanho permitido

								if($banner["size"] > $tamanho) {

									$erros[4] = "A imagem deve ter no máximo ".$tamanho." Mb";

								}

						 

								// Se não houver nenhum erro

								if (empty($erros)) {

									// Gera um nome único para a imagem

									$bn = removeAcentos($banner['name']);

									$ne = str_replace(" ","_",$bn);

									$nome_imagem = uniqid().$ne; 

									// Caminho de onde ficará a imagem

									$caminho_imagem = "../../arquivos/usuarios/fotos/".$nome_imagem;

									$caminho_imagem2 = "arquivos/usuarios/fotos/".$nome_imagem;

									$b1 = 0;

									if (!empty($banner1['name'])) {

										// Gera um nome único para a imagem

										$bn1 = removeAcentos($banner1['name']);

										$ne1 = str_replace(" ","_",$bn1);

										$nome_imagem1 = uniqid().$ne1; 

										// Caminho de onde ficará a imagem

										$caminho_imagem1 = "../../arquivos/usuarios/curriculos/".$nome_imagem1;

										$caminho_imagem3 = "arquivos/usuarios/curriculos/".$nome_imagem1;

									} else {

										$b1++;	

									}

									// Faz o upload da imagem para seu respectivo caminho		

									if (!file_exists("../../arquivos/")) {

							mkdir("../../arquivos/");

						}

						if (!file_exists("../../arquivos/usuarios/")) {

							mkdir("../../arquivos/usuarios/");

						}

						if (!file_exists("../../arquivos/usuarios/fotos")) {

							mkdir("../../arquivos/usuarios/fotos");

						}

						if (!file_exists("../../arquivos/usuarios/curriculos")) {

							mkdir("../../arquivos/usuarios/curriculos");

						}

									if ($b1 == 0) {

										move_uploaded_file($banner1["tmp_name"], $caminho_imagem1) or die ("Erro no upload do Curriculo:".$banner['error']);

									}

									move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload da Foto:".$banner['error']);

									//apaga os arquivos atuais

									$sql = "SELECT curriculo,foto FROM login WHERE id='".$_POST['cod']."'";

									$select = mysql_query($sql,$conexao) or die (mysql_error());

									$consulta = mysql_fetch_array($select);

									if (!empty($consulta['foto'])) {

										unlink("../../".$consulta['foto']);	

									}

									//trabalha o sql para a var

									if ($b1==0) {

										if (!empty($consulta['curriculo'])) {

										unlink("../../".$consulta['curriculo']);	

										}

										$sql = "UPDATE login SET nome='$nome',usuario='$user',nivel_acesso='$nivel_acesso',contato='$contato',mail='$mail',cargo='$cargo',categoria='$cat'";

									if (isset($unidade)) {

										$sql = $sql.",unidade='$unidade'";	

									}

									if (isset($subcat)) {

										$sql = $sql.",subcategoria='$subcat'";	

									}

									if (isset($obs)) {

										$sql = $sql.",obs='$obs'";	

									}

									$sql = $sql.",foto='$caminho_imagem2',curriculo='$caminho_imagem3',nacionalidade='$nacional',naturalidade='$natural',genero='$gen',diaDtN='$diaDtN',mesDtN='$mesDtN',anoDtN='$anoDtN' WHERE id='".$_POST['cod']."'";

									} else {

										$sql = "UPDATE login SET nome='$nome',usuario='$user',nivel_acesso='$nivel_acesso',contato='$contato',mail='$mail',cargo='$cargo',categoria='$cat'";

									if (isset($unidade)) {

										$sql = $sql.",unidade='$unidade'";	

									}

									if (isset($subcat)) {

										$sql = $sql.",subcategoria='$subcat'";	

									}

									if (isset($obs)) {

										$sql = $sql.",obs='$obs'";	

									}

									$sql = $sql.",foto='$caminho_imagem2',nacionalidade='$nacional',naturalidade='$natural',genero='$gen',diaDtN='$diaDtN',mesDtN='$mesDtN',anoDtN='$anoDtN' WHERE id='".$_POST['cod']."'";

									}

									//executa a query

									$update = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Arquivo: ".mysql_error());

									//mostra a mensagem de sucesso

									if ($b1==0) {

										echo '

												<script>

													alert("Dados, Curriculo e Foto do Usuário Atualizados Com Sucesso!")

													location.href=("../sistema.php?menu='.base64_encode('usuarios').'")

												</script>

												';

									} else {												                                 	echo '

												<script>

													alert("Dados e Foto do Usuário Atualizados Com Sucesso!")

													location.href=("../sistema.php?menu='.base64_encode('usuarios').'")

												</script>

												';

									}

								} else { //!empty erros 

								// Se houver mensagens de erro, exibe-as

									echo '

										<script>

											alert("ERRO na Foto!';

											if (isset($erros[1])) { echo $erros[1];}

											echo ' - ';

											if (isset($erros[2])) { echo $erros[2];}

											echo ' - ';

											if (isset($erros[3])) { echo $erros[3];}

											echo ' - ';

											if (isset($erros[4])) { echo $erros[4];}

											echo '")

											location.href=("../sistema.php?menu='.base64_encode('usuarios').'&acao=edit&cod='.$_POST['cod'].'")

										</script>

										';

								} // fecha o else do erros

							} else {

								$b1 = 0;

								if (!empty($banner1['name'])) {

									// Gera um nome único para a imagem

									$bn1 = removeAcentos($banner1['name']);

									$ne1 = str_replace(" ","_",$bn1);

									$nome_imagem1 = uniqid().$ne1; 

									// Caminho de onde ficará a imagem

									$caminho_imagem1 = "../../arquivos/usuarios/curriculos/".$nome_imagem1;

									$caminho_imagem3 = "arquivos/usuarios/curriculos/".$nome_imagem1;

								} else {

									$b1++;	

								}

								

								$sql = "SELECT curriculo,foto FROM login WHERE id='".$_POST['cod']."'";

									$select = mysql_query($sql,$conexao) or die (mysql_error());

									$consulta = mysql_fetch_array($select);

									//trabalha o sql para a var

									if ($b1==0) {

										move_uploaded_file($banner1["tmp_name"], $caminho_imagem1) or die ("Erro no upload do Curriculo:".$banner['error']);

										//apaga o curriculo atual

										if (!empty($consulta['curriculo'])) {

										unlink("../../".$consulta['curriculo']);	

										}

										$sql = "UPDATE login SET nome='$nome',usuario='$user',nivel_acesso='$nivel_acesso',contato='$contato',mail='$mail',cargo='$cargo',categoria='$cat'";

									if (isset($unidade)) {

										$sql = $sql.",unidade='$unidade'";	

									}

									if (isset($subcat)) {

										$sql = $sql.",subcategoria='$subcat'";	

									}

									if (isset($obs)) {

										$sql = $sql.",obs='$obs'";	

									}

									$sql = $sql.",curriculo='$caminho_imagem3',nacionalidade='$nacional',naturalidade='$natural',genero='$gen',diaDtN='$diaDtN',mesDtN='$mesDtN',anoDtN='$anoDtN' WHERE id='".$_POST['cod']."'";

										//executa a query

										$update = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Arquivo: ".mysql_error());

										echo '

											<script>

												alert("Dados e Curriculo do Usuário Atualizado com Sucesso!")

location.href=("../sistema.php?menu='.base64_encode('usuarios').'")

											</script>

											';

									} else {

								//trabalha o sql para a var

								$sql = "UPDATE login SET nome='$nome',usuario='$user',nivel_acesso='$nivel_acesso',contato='$contato',mail='$mail',cargo='$cargo',categoria='$cat'";

									if (isset($unidade)) {

										$sql = $sql.",unidade='$unidade'";	

									}

									if (isset($subcat)) {

										$sql = $sql.",subcategoria='$subcat'";	

									}

									if (isset($obs)) {

										$sql = $sql.",obs='$obs'";	

									}

									$sql = $sql.",nacionalidade='$nacional',naturalidade='$natural',genero='$gen',diaDtN='$diaDtN',mesDtN='$mesDtN',anoDtN='$anoDtN' WHERE id='".$_POST['cod']."'";

									}

								//executa a query

									$update = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Arquivo: ".mysql_error());

								echo '

									<script>

										alert("Dados do Usuário Atualizado com Sucesso!")

										location.href=("../sistema.php?menu='.base64_encode('usuarios').'")

									</script>

											';

							} // fecha else empty banner

						} // fecha o else do teste de usuario

					} // fecha else de e-mail invalido

				} else {

					echo '

									<script>

										alert("Todos os Campos Devem estar Preenchidos para Atualizar!")

										location.href=("../sistema.php?menu='.base64_encode('usuarios').'&acao=edit&cod='.$_POST['cod'].'")

									</script>

									';

				}

			} else {

				echo '

									<script>										location.href=("../sistema.php?menu='.base64_encode('usuarios').'")

									</script>

									';

			}// fecha o else do !empty campos

		?>