<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['cad'])) {

				if (!empty($_POST['titulo']) and !empty($_POST['cat'])) {

				include("functionRemoveAcentos.php");

				//recupera dados

				$titulo = $_POST['titulo'];

				$cat = $_POST['cat'];

				$desc = $_POST['desc'];

				$link = $_POST['link'];

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

						//trabalha o sql para a var

						$sql = "INSERT INTO treinamentos(titulo,categoria,descricao,arquivo,link) VALUES ('$titulo','$cat','$desc','$caminho_imagem2','$link')";

						//executa a query

						$insert = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Treinamento: ".mysql_error());

						//mostra a mensagem de sucesso

						echo '

								<script>

									alert("Treinamento Cadastrado Com Sucesso!")

									location.href=("../sistema.php?menu='.base64_encode('Treinamentos').'")

								</script>

								';						

					} else { //!empty erros 

					// Se houver mensagens de erro, exibe-as

						echo '

							<script>

								alert("ERRO!';

						if (isset($erros[1])) { echo $erros[1];}

						echo '")						

	location.href=("../sistema.php?menu='.base64_encode('Treinamentos').'")

							</script>

							';

					} // fecha o else do erros

				} else {

					// Conexão com o banco de dados

						include("../../php/conexao.php");

						//trabalha o sql para a var

						$sql = "INSERT INTO treinamentos(titulo,categoria,descricao,link) VALUES ('$titulo','$cat','$desc','$link')";

						//executa a query

						$del = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Treinamento: ".mysql_error());

						//mostra a mensagem de sucesso

						echo '

								<script>

									alert("Treinamento (Sem Arquivo) Cadastrado Com Sucesso!")

									location.href=("../sistema.php?menu='.base64_encode('Treinamentos').'")

								</script>

								';	

				}

			} else {

				//mostra a mensagem de erro

					echo '

								<script>

									alert("Os campos Titulo e Categoria não podem estar vazios para Cadastrar!")

location.href=("../sistema.php?menu='.base64_encode('Treinamentos').'")							

								</script>

								';

			} // fecha o else do !empty campos

		} // fecha o isset

		?>