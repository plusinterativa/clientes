<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['cad'])) {

				if (empty($_POST['album'])) {

					echo '

						<script>

							alert("Digite o nome do Album!")

						</script>

						';

				} elseif (empty($_POST['titleAlbum'])) {

					echo '

						<script>

							alert("Digite o titulo do Album!")

						</script>

						';	

				} elseif (empty($_POST['dataAlbum'])) {

					echo '

						<script>

							alert("Digite a data do Album!")

						</script>

						';		

				} else {

					include("../php/conexao.php");

					$sql = "SELECT album FROM albumFoto";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$i=0;

					while ($consulta = mysql_fetch_array($select)) {

						if ($_POST['album'] == $consulta['album']) {

							$i++;	

						}

					}

					if ($i == 1) {

						echo '

						<script>

							alert("O Album: '.$_POST['album'].' ja existe!")

						</script>

						';

					} else {

						include("functionRemoveAcentos.php");

						//recupera dados

						$album = $_POST['album'];

						$titulo = $_POST['titleAlbum'];

						$data = $_POST['dataAlbum'];

						$banner = $_FILES['min'];

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

									$caminho_imagem = "../arquivos/fotos/miniaturas/".$nome_imagem;

									$caminho_imagem2 = "arquivos/fotos/miniaturas/".$nome_imagem;

									// Faz o upload da imagem para seu respectivo caminho

									if (!file_exists("../arquivos/")) {

										mkdir("../arquivos/");

									}

									if (!file_exists("../arquivos/fotos/")) {

										mkdir("../arquivos/fotos/");

									}

									if (!file_exists("../arquivos/fotos/miniaturas/")) {

										mkdir("../arquivos/fotos/miniaturas/");

									}

									move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload da Foto:".$banner['error']);

									include("../php/conexao.php");

									$sql = "INSERT INTO albumFoto (album,titulo,data,miniatura) VALUES ('$album','$titulo','$data','$caminho_imagem2')";

									//executa a query

									$insert = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Arquivo: ".mysql_error());

									//mostra a mensagem de sucesso

										echo '

												<script>

													alert("Album Cadastrado Com Sucesso!")

											location.href=("sistema.php?menu='.base64_encode('Galeria de Fotos').'")

												</script>

												';

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

								echo '

									<script>

										alert("Selecione a Miniatura para Cadastrar!")

									</script>

									';

						}

					}

				}

			} // fecha o isset

		?>