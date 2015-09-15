<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['edit'])) {

				if (!empty($_POST['cod'])) {

				//recupera dados

				$cod = $_POST['cod'];

				$status = $_POST['status'];

				$link = "#";

				$texto = $_POST['texto'];

				if (!empty($_POST['link'])) {

					$link = $_POST['link'];

				}

				$banner = $_FILES["arq"];

				// Se a foto foi selecionada

				if (!empty($banner["name"])) {

					// Tamanho máximo do arquivo em bytes

					$tamanho = 8388608;

					$calc_tam = ($tamanho*1024)*1024;

					$tamanho = $calc_tam;	 			 

					// Verifica se o tamanho da imagem é maior que o tamanho permitido

					if($banner["size"] > $tamanho) {

						$erros[1] = "A imagem deve ter no máximo ".$tamanho." Mb";

					}

			 

					// Se não houver nenhum erro

					if (empty($erros)) {

						// Gera um nome único para a imagem	 

						// Caminho de onde ficará a imagem

						$caminho_imagem = "../../imagens/slider/slide".$cod.".jpg";

						$caminho_imagem2 = "imagens/slider/slide".$cod.".jpg";

						// Faz o upload da imagem para seu respectivo caminho					

						move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload do Arquivo:".$banner['error']);

						// Conexão com o banco de dados

						include("../../php/conexao.php");

						//trabalha o sql para a var

						$sql = "UPDATE slides SET status='$status',link='$link',texto='$texto' WHERE id='".$cod."'";

						//executa a query

						$del = mysql_query($sql,$conexao) or die ("Erro ao Atualizar o Status: ".mysql_error());

						//mostra a mensagem de sucesso

						echo '

								<script>

									alert("Slide '.$cod.' Atualizado com Sucesso!")

											location.href=("../sistema.php?menu='.base64_encode('slide').'")

								</script>

								';						

					} else { //!empty erros 

					// Se houver mensagens de erro, exibe-as

						echo '

							<script>

								alert("ERRO!'.$erros[1].'")

								location.href=("../sistema.php?menu='.base64_encode('slide').'")

							</script>

							';

					} // fecha o else do erros

				} else {

					// Conexão com o banco de dados

						include("../../php/conexao.php");

						//trabalha o sql para a var

						$sql = "UPDATE slides SET status='$status',link='$link',texto='$texto' WHERE id='".$cod."'";

						//executa a query

						$del = mysql_query($sql,$conexao) or die ("Erro ao Atualizar o Status: ".mysql_error());

						//mostra a mensagem de sucesso

						echo '

								<script>

									alert("Status do Slide '.$cod.' Atualizado com Sucesso!")

											location.href=("../sistema.php?menu='.base64_encode('slide').'")

								</script>

								';	

				}

			}

		} // fecha o isset

		?>