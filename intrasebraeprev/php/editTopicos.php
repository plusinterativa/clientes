<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['edit'])) {

				if (!empty($_POST['titulo']) and !empty($_POST['comentario'])) {

					include("sistema/php/functionRemoveAcentos.php");

					//recupera dados

					$cod = $_POST['cod'];

					$titulo = $_POST['titulo'];

					$comentario = $_POST['comentario'];

					$permissoes = $_POST['permissoes'];

					$link1 = $_POST['link1'];

					$link2 = $_POST['link2'];

					$link3 = $_POST['link3'];

					$link4 = $_POST['link4'];

					$link5 = $_POST['link5'];

					$user = $_SESSION['usuario'];

					$nome = $_SESSION['nome'];

					

					//----- Cria o topico ------

					$sql = "UPDATE topicos SET titulo='$titulo',comentario='$comentario',usuario='$user',nome='$nome',permissoes='$permissoes',Link1='$link1',Link2='$link2',Link3='$link3',Link4='$link4',Link5='$link5' WHERE id='".$cod."'";

					//executa a query

					$update = mysql_query($sql,$conexao) or die ("Erro ao Atualizar o Tópico: ".mysql_error());

					//mostra a mensagem de sucesso

					

					// cria as pastas

					if (!file_exists("arquivos/")) {

						mkdir("arquivos/");

					}

					if (!file_exists("arquivos/forum/")) {

						mkdir("arquivos/forum/");

					}

					if (!file_exists("arquivos/forum/arquivos")) {

						mkdir("arquivos/forum/arquivos");

					}

					for($i=1;$i<=5;$i++) {

						$banner = $_FILES["Arquivo".$i];

						if (!empty($banner["name"])) {

								// Gera um nome único para a imagem

								$bn = removeAcentos($banner['name']);

								$ne = str_replace(" ","_",$bn);

								$nome_imagem = uniqid().$ne;	 

								// Caminho de onde ficará a imagem

								$caminho_imagem[$i] = "arquivos/forum/arquivos/".$nome_imagem;

								// Faz o upload da imagem para seu respectivo caminho

													

								move_uploaded_file($banner["tmp_name"], $caminho_imagem[$i]) or die ("Erro no upload dos Arquivos:".$banner['error']);

						}

					}

					if (isset($caminho_imagem)) {

						$t=0;

						//trabalha o sql para a var

						$sql = "UPDATE topicos SET ";

						if (!empty($caminho_imagem['1'])) {

							$sql = $sql."Arquivo1='".$caminho_imagem[1]."'";

							$t++;

							

						}

						if (!empty($caminho_imagem['2'])) {

							if ($t==0) {

								$sql = $sql."Arquivo2='".$caminho_imagem[2]."'";

							} else {

								$sql = $sql.",Arquivo2='".$caminho_imagem[2]."'";

							}

							$t++;

						}

						if (!empty($caminho_imagem['3'])) {

							if ($t==0) {

								$sql = $sql."Arquivo3='".$caminho_imagem[3]."'";

							} else {

								$sql = $sql.",Arquivo3='".$caminho_imagem[3]."'";

							}

							$t++;

						}

						if (!empty($caminho_imagem['4'])) {

							if ($t==0) {

								$sql = $sql."Arquivo4='".$caminho_imagem[4]."'";

							} else {

								$sql = $sql.",Arquivo4='".$caminho_imagem[4]."'";

							}

							$t++;

						}

						if (!empty($caminho_imagem['5'])) {

							if ($t==0) {

								$sql = $sql."Arquivo5='".$caminho_imagem[5]."'";

							} else {

								$sql = $sql.",Arquivo5='".$caminho_imagem[5]."'";

							}

							$t++;

						}

						$sql = $sql." WHERE usuario='".$user."' and titulo='".$titulo."'";

					//executa a query

					$update = mysql_query($sql,$conexao) or die ("Erro no update do topico: ".mysql_error());

					//mostra a mensagem de sucesso

					echo '

							<script>

								alert("Topico Atualizado Com Sucesso!")

								location.href=("index.php?forum='.base64_encode('true').'")

							</script>

							';

					} else {

						echo '

								<script>

									alert("Dados do Tópico Atualizado Com Sucesso!")	

									location.href=("index.php?forum='.base64_encode('true').'")					

								</script>

								';

					}

				} else {

				//mostra a mensagem de erro

					echo '

								<script>

									alert("Os Campos Titulo do Tópico e Comentário sobre o Tópico não podem estar vazios para Atualizar!")						

								</script>

								';

				} // fecha o else do !empty campos

			} // fecha o isset

		?>