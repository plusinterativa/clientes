<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['edit'])) {

				if (!empty($_POST['titulo']) and !empty($_POST['cat']) and !empty($_POST['cod'])) {

					include("functionRemoveAcentos.php");

					//recupera dados

					$cod = $_POST['cod'];

					$titulo = $_POST['titulo'];

					$cat = $_POST['cat'];

					$desc = $_POST['desc'];

					$link = $_POST['link'];

					$banner = $_FILES['arq'];

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

						$bn = removeAcentos($banner['name']);

						$ne = str_replace(" ","_",$bn);

						$nome_imagem = uniqid().$ne;	 

						// Caminho de onde ficará a imagem

						$caminho_imagem = "../../arquivos/treinamentos/arquivos/".$nome_imagem;

						$caminho_imagem2 = "arquivos/treinamentos/arquivos/".$nome_imagem;

						// Faz o upload da imagem para seu respectivo caminho				

						if (!file_exists("../../arquivos/")) {

							mkdir("../../arquivos/");

						}

						if (!file_exists("../../arquivos/treinamentos/")) {

							mkdir("../../arquivos/treinamentos/");

						}

						if (!file_exists("../../arquivos/treinamentos/arquivos")) {

							mkdir("../../arquivos/treinamentos/arquivos");

						}

						move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload do Arquivo:".$banner['error']);

						// Conexão com o banco de dados

						include("../../php/conexao.php");

						$sql = "SELECT * FROM treinamentos WHERE id='".$cod."'";

						$select = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o treinamento: ".mysql_error());

						$consulta = mysql_fetch_array($select);

						if (!empty($consulta['arquivo'])) {

							unlink("../../".$consulta['arquivo']);

						}

						//trabalha o sql para a var

						$sql = "UPDATE treinamentos SET titulo='$titulo',categoria='$cat',descricao='$desc',arquivo='$caminho_imagem2',link='$link' WHERE id='".$cod."'";

						//executa a query

						$update = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Treinamento: ".mysql_error());

						//mostra a mensagem de sucesso

						echo '

								<script>

									alert("Treinamento Atualizado Com Sucesso!")

									location.href=("../sistema.php?menu='.base64_encode('Treinamentos').'")

								</script>

								';						

						} else { //!empty erros 

						// Se houver mensagens de erro, exibe-as

							echo '

								<script>

									alert("ERRO!';

						if (isset($erros[1])) { echo $erros[1];}

						echo '")											location.href=("../sistema.php?menu='.base64_encode('Treinamentos').'")

								</script>

								';

						} // fecha o else do erros					

					

					} else {// else do !empty banner

							include("../../php/conexao.php");

							//trabalha o sql para a var

							$sql = "UPDATE treinamentos SET titulo='$titulo',categoria='$cat',descricao='$desc',link='$link' WHERE id='".$cod."'";

							//executa a query

							$update = mysql_query($sql,$conexao) or die ("Erro no Update dos dados: ".mysql_error());

							//mostra a mensagem de sucesso

							echo '

								<script>

									alert("Dados Atualizados com Sucesso!")

location.href=("../sistema.php?menu='.base64_encode('Treinamentos').'")				

								</script>

								';		

					} // fecha o else do !empty banner

				} else { // else do empty

				//mostra a mensagem de erro

					echo '

								<script>

									("Os campos Titulo e Categoria não podem estar vazios para Atualizar!")

location.href=("../sistema.php?menu='.base64_encode('Treinamentos').'&acao=edit&cod='.$_POST['cod'].'")				

								</script>

								';

				} // fecha o else empty

			} // fecha o isset

		?>