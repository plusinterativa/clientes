<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['cad'])) {

				if (empty($_POST['nome'])) {

					echo '

								<script>

									alert("Digite o Seu Nome!")

								</script>

								';	

				} elseif (empty($_POST['contato'])) {

					echo '

								<script>

									alert("Digite seus Contatos!")

								</script>

								';

				} elseif (empty($_POST['mail'])) {

					echo '

								<script>

									alert("Digite o Seu E-mail!")

								</script>

								';

				} elseif (!strstr($_POST['mail'],"@") or !strstr($_POST['mail'],".")) {

					echo '

								<script>

									alert("E-mail Inválido!")

								</script>

								';

				} elseif (empty($_POST['nacional'])) {

					echo '

								<script>

									alert("Digite a sua Nacionalidade!")

								</script>

								';

				} elseif (empty($_POST['natural'])) {

					echo '

								<script>

									alert("Digite a Sua Naturalidade!")

								</script>

								';

				} elseif (empty($_POST['gen'])) {

					echo '

								<script>

									alert("Selecione o Gênero!")

								</script>

								';	

				} elseif (empty($_POST['cargo'])) {

					echo '

								<script>

									alert("Digite o Seu Cargo")

								</script>

								';

				} elseif (empty($_POST['user'])) {

					echo '

								<script>

									alert("Digite o Seu Nome de Usuário!")

								</script>

								';

				} else {

					// Conexão com o banco de dados

					include("../php/conexao.php");

					$sql = "SELECT usuario FROM login";

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

								</script>

								';	

					} else {

						include("functionRemoveAcentos.php");

						//recupera dados

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

						if (isset($_POST['subcategoria'])) {

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

						$pass = md5($_POST['pass']);

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

								$caminho_imagem = "../arquivos/usuarios/fotos/".$nome_imagem;

								$caminho_imagem2 = "arquivos/usuarios/fotos/".$nome_imagem;

								$b1 = 0;

								if (!empty($banner1['name'])) {

									// Gera um nome único para a imagem

									$bn1 = removeAcentos($banner1['name']);

									$ne1 = str_replace(" ","_",$bn1);

									$nome_imagem1 = uniqid().$ne1; 

									// Caminho de onde ficará a imagem

									$caminho_imagem1 = "../arquivos/usuarios/curriculos/".$nome_imagem1;

									$caminho_imagem3 = "arquivos/usuarios/curriculos/".$nome_imagem1;

								} else {

									$b1++;	

								}

								// Faz o upload da imagem para seu respectivo caminho

								if (!file_exists("../arquivos/")) {

									mkdir("../arquivos/");

								}

								if (!file_exists("../arquivos/usuarios/")) {

									mkdir("../arquivos/usuarios/");

								}

								if (!file_exists("../arquivos/usuarios/fotos/")) {

									mkdir("../arquivos/usuarios/fotos/");

								}

								if ($b1 == 0) {

									if (!file_exists("../arquivos/usuarios/curriculos/")) {

										mkdir("../arquivos/usuarios/curriculos/");

									}

									move_uploaded_file($banner1["tmp_name"], $caminho_imagem1) or die ("Erro no upload do Curriculo:".$banner['error']);

								}

								move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload da Foto:".$banner['error']);

								//trabalha o sql para a var

								if ($b1==0) {

									$sql = "INSERT INTO login (nome,usuario,senha,nivel_acesso,contato,mail,cargo,categoria";

									if (isset($unidade)) {

										$sql = $sql.',unidade';	

									}

									if (isset($subcat)) {

										$sql = $sql.',subcategoria';	

									}

									if (isset($obs)) {

										$sql = $sql.',obs';	

									}

									$sql = $sql."																																																					,foto,curriculo,nacionalidade,naturalidade,genero,diaDtN,mesDtN,anoDtN) VALUES ('$nome','$user','$pass','$nivel_acesso','$contato','$mail','$cargo','$cat'";

									if (isset($unidade)) {

										$sql = $sql.",'$unidade'";	

									}

									if (isset($subcat)) {

										$sql = $sql.",'$subcat'";	

									}

									if (isset($obs)) {

										$sql = $sql.",'$obs'";	

									}

									$sql = $sql.",'$caminho_imagem2','$caminho_imagem3','$nacional','$natural','$gen','$diaDtN','$mesDtN','$anoDtN')";

								} else {

									$sql = "INSERT INTO login (nome,usuario,senha,nivel_acesso,contato,mail,cargo,categoria";

									if (isset($unidade)) {

										$sql = $sql.',unidade';	

									}

									if (isset($subcat)) {

										$sql = $sql.',subcategoria';	

									}

									if (isset($obs)) {

										$sql = $sql.',obs';	

									}

									$sql = $sql."																																																					,foto,nacionalidade,naturalidade,genero,diaDtN,mesDtN,anoDtN) VALUES ('$nome','$user','$pass','$nivel_acesso','$contato','$mail','$cargo','$cat'";

									if (isset($unidade)) {

										$sql = $sql.",'$unidade'";	

									}

									if (isset($subcat)) {

										$sql = $sql.",'$subcat'";	

									}

									if (isset($obs)) {

										$sql = $sql.",'$obs'";	

									}

									$sql = $sql.",'$caminho_imagem2','$nacional','$natural','$gen','$diaDtN','$mesDtN','$anoDtN')";	

								}

								//executa a query

								$insert = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Arquivo: ".mysql_error());

								//mostra a mensagem de sucesso

								if ($b1==0) {

									echo '

											<script>

												alert("Usuário Cadastrado Com Sucesso!")

												location.href=("sistema.php?menu='.base64_encode('usuarios').'")

											</script>

											';

								} else {												                                 	echo '

											<script>

												alert("Usuário (Sem Curriculo) Cadastrado Com Sucesso!")

												location.href=("sistema.php?menu='.base64_encode('usuarios').'")

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

									$caminho_imagem1 = "../arquivos/usuarios/curriculos/".$nome_imagem1;

									$caminho_imagem3 = "arquivos/usuarios/curriculos/".$nome_imagem1;

								} else {

									$b1++;	

								}

									//trabalha o sql para a var

									if ($b1==0) {

										move_uploaded_file($banner1["tmp_name"], $caminho_imagem1) or die ("Erro no upload do Curriculo:".$banner['error']);

										$sql = "INSERT INTO login (nome,usuario,senha,nivel_acesso,contato,mail,cargo,categoria";

									if (isset($unidade)) {

										$sql = $sql.',unidade';	

									}

									if (isset($subcat)) {

										$sql = $sql.',subcategoria';	

									}

									if (isset($obs)) {

										$sql = $sql.',obs';	

									}

									$sql = $sql."																																																					,curriculo,nacionalidade,naturalidade,genero,diaDtN,mesDtN,anoDtN) VALUES ('$nome','$user','$pass','$nivel_acesso','$contato','$mail','$cargo','$cat'";

									if (isset($unidade)) {

										$sql = $sql.",'$unidade'";	

									}

									if (isset($subcat)) {

										$sql = $sql.",'$subcat'";	

									}

									if (isset($obs)) {

										$sql = $sql.",'$obs'";	

									}

									$sql = $sql.",'$caminho_imagem3','$nacional','$natural','$gen','$diaDtN','$mesDtN','$anoDtN')";

										//executa a query

										$update = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Arquivo: ".mysql_error());

										echo '

											<script>

												alert("Usuario (Sem Foto) Cadastrado com Sucesso!")

			location.href=("sistema.php?menu='.base64_encode('usuarios').'")

											</script>

											';

									} else {

							//mostra a mensagem de erro

							$sql = "INSERT INTO login (nome,usuario,senha,nivel_acesso,contato,mail,cargo,categoria";

									if (isset($unidade)) {

										$sql = $sql.',unidade';	

									}

									if (isset($subcat)) {

										$sql = $sql.',subcategoria';	

									}

									if (isset($obs)) {

										$sql = $sql.',obs';	

									}

									$sql = $sql."																																																					,nacionalidade,naturalidade,genero,diaDtN,mesDtN,anoDtN) VALUES ('$nome','$user','$pass','$nivel_acesso','$contato','$mail','$cargo','$cat'";

									if (isset($unidade)) {

										$sql = $sql.",'$unidade'";	

									}

									if (isset($subcat)) {

										$sql = $sql.",'$subcat'";	

									}

									if (isset($obs)) {

										$sql = $sql.",'$obs'";	

									}

									$sql = $sql.",'$nacional','$natural','$gen','$diaDtN','$mesDtN','$anoDtN')";

							//executa a query

								$insert = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Arquivo: ".mysql_error());

							echo '

										<script>

											alert("Usuário (Sem Foto e Curriculo) Cadastrado com Sucesso!")

											location.href=("sistema.php?menu='.base64_encode('usuarios').'")

										</script>

										';

									}

						} // fecha else empty banner

					} // fecha o else do teste de usuario

				} // fecha o else do !empty campos

			} // fecha o isset

		?>