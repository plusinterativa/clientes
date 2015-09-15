<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['edit'])) {

				if (!empty($_POST['album']) and !empty($_POST['cod']) and !empty($_POST['titleAlbum']) and !empty($_POST['dataAlbum'])) {

					include("functionRemoveAcentos.php");

					//recupera dados

					$cod = $_POST['cod'];

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

						$caminho_imagem = "../../arquivos/fotos/miniaturas/".$nome_imagem;

						$caminho_imagem2 = "arquivos/fotos/miniaturas/".$nome_imagem;

						// Faz o upload da imagem para seu respectivo caminho		

						if (!file_exists("../../arquivos/")) {

							mkdir("../../arquivos/");

						}	

						if (!file_exists("../../arquivos/fotos/")) {

							mkdir("../../arquivos/fotos/");

						}

						if (!file_exists("../../arquivos/fotos/miniaturas")) {

							mkdir("../../arquivos/fotos/miniaturas");

						}		

						move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload da Miniatura:".$banner['error']);

						// Conexão com o banco de dados

						include("../../php/conexao.php");

						$sql = "SELECT miniatura FROM albumFoto WHERE id='".$cod."'";

						$select = mysql_query($sql,$conexao) or die ("Erro ao Pesquisar a Miniatura: ".mysql_error());

						$consulta = mysql_fetch_array($select);

						if (!empty($consulta['miniatura'])) {

							unlink("../../".$consulta['miniatura']);

						}

						$sql2 = "SELECT album FROM albumFoto WHERE id='".$cod."'";

						//executa a query

						$select2 = mysql_query($sql2,$conexao) or die ("Erro no Update do album e Miniatura: ".mysql_error());

						$consulta2 = mysql_fetch_array($select2);

						$sql3 = "UPDATE fotos SET album='$album' WHERE album='".$consulta2['album']."'";

						//executa a query

						$update3 = mysql_query($sql3,$conexao) or die ("Erro no Update do album e Miniatura: ".mysql_error());

						//trabalha o sql para a var

						$sql = "UPDATE albumFoto SET album='$album',titulo='$titulo',data='$data',miniatura='$caminho_imagem2' WHERE id='".$cod."'";

						//executa a query

						$update = mysql_query($sql,$conexao) or die ("Erro no Update do album e Miniatura: ".mysql_error());

						//mostra a mensagem de sucesso

						echo '

								<script>

									alert("Album e Miniatura Atualizados Com Sucesso!")

									location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'")

								</script>

								';						

						} else { //!empty erros 

						// Se houver mensagens de erro, exibe-as

							echo '

								<script>

									alert("ERRO!';

						if (isset($erros[1])) { echo $erros[1];}

						echo ' - ';

						if (isset($erros[2])) { echo $erros[2];}

						echo ' - ';

						if (isset($erros[3])) { echo $erros[3];}

						echo ' - ';

						if (isset($erros[4])) { echo $erros[4];}

						echo '")

						

								location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'")

								</script>

								';

						} // fecha o else do erros					

					

					} else {// else do !empty banner

							include("../../php/conexao.php");

							$sql2 = "SELECT album FROM albumFoto WHERE id='".$cod."'";

						//executa a query

						$select2 = mysql_query($sql2,$conexao) or die ("Erro no Update do album e Miniatura: ".mysql_error());

						$consulta2 = mysql_fetch_array($select2);

						$sql3 = "UPDATE fotos SET album='$album' WHERE album='".$consulta2['album']."'";

						//executa a query

						$update3 = mysql_query($sql3,$conexao) or die ("Erro no Update do album e Miniatura: ".mysql_error());

							//trabalha o sql para a var

							$sql = "UPDATE albumFoto SET album='$album',titulo='$titulo',data='$data' WHERE id='".$cod."'";

							//executa a query

							$update = mysql_query($sql,$conexao) or die ("Erro no Update dos dados: ".mysql_error());

							

							//mostra a mensagem de sucesso

							echo '

								<script>

									alert("Album Atualizado com Sucesso!")

location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'")				

								</script>

								';		

					} // fecha o else do !empty banner

				} else { // else do empty

				//mostra a mensagem de erro

					echo '

								<script>

									alert("Preencha Todos os Campos para Atualizar!")

location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'&acao=edit&cod='.$_POST['cod'].'")				

								</script>

								';

				} // fecha o else empty

			} // fecha o isset

		?>