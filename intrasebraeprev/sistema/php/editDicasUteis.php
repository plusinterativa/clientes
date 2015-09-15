<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['edit'])) {

				if (!empty($_POST['titulo']) and !empty($_POST['dica']) and !empty($_POST['cod']) and !empty($_POST['cat'])) {

					include("functionRemoveAcentos.php");

					//recupera dados

					$cod = $_POST['cod'];

					$titulo = $_POST['titulo'];

					$cat = $_POST['cat'];

					$dica = $_POST['dica'];

					if (!strstr($_POST['dica'],"<p>") or !strstr($_POST['dica'],"</p>")) {

						$dica = '<p>'.$dica.'</p>';

					}

					$banner = $_FILES['arq'];

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

						$caminho_imagem = "../../arquivos/dicas/fotos/".$nome_imagem;

						$caminho_imagem2 = "arquivos/dicas/fotos/".$nome_imagem;

						// Faz o upload da imagem para seu respectivo caminho		

						if (!file_exists("../../arquivos/")) {

							mkdir("../../arquivos/");

						}	

						if (!file_exists("../../arquivos/dicas/")) {

							mkdir("../../arquivos/dicas/");

						}

						if (!file_exists("../../arquivos/dicas/fotos")) {

							mkdir("../../arquivos/dicas/fotos");

						}		

						move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload do Arquivo:".$banner['error']);

						// Conexão com o banco de dados

						include("../../php/conexao.php");

						$sql = "SELECT * FROM dicasUteis WHERE id='".$cod."'";

						$select = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar a Noticia: ".mysql_error());

						$consulta = mysql_fetch_array($select);

						if (!empty($consulta['foto'])) {

							unlink("../../".$consulta['foto']);

						}

						//trabalha o sql para a var

						$sql = "UPDATE dicasUteis SET titulo='$titulo',categoria='$cat',dica='$dica',foto='$caminho_imagem2' WHERE id='".$cod."'";

						//executa a query

						$update = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar a Noticia: ".mysql_error());

						//mostra a mensagem de sucesso

						echo '

								<script>

									alert("Dica Atualizada Com Sucesso!")

									location.href=("../sistema.php?menu='.base64_encode('Dicas Úteis').'")

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

						

								location.href=("../sistema.php?menu='.base64_encode('Dicas Úteis').'")

								</script>

								';

						} // fecha o else do erros					

					

					} else {// else do !empty banner

							include("../../php/conexao.php");

							//trabalha o sql para a var

							$sql = "UPDATE dicasUteis SET titulo='$titulo',categoria='$cat',dica='$dica' WHERE id='".$cod."'";

							//executa a query

							$update = mysql_query($sql,$conexao) or die ("Erro no Update dos dados: ".mysql_error());

							//mostra a mensagem de sucesso

							echo '

								<script>

									alert("Dados Atualizados com Sucesso!")

location.href=("../sistema.php?menu='.base64_encode('Dicas Úteis').'")				

								</script>

								';		

					} // fecha o else do !empty banner

				} else { // else do empty

				//mostra a mensagem de erro

					echo '

								<script>

									alert("Preencha Todos os Campos para Atualizar!")

location.href=("../sistema.php?menu='.base64_encode('Dicas Úteis').'&acao=edit&cod='.$_POST['cod'].'")				

								</script>

								';

				} // fecha o else empty

			} // fecha o isset

		?>