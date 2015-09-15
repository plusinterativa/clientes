<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['edit'])) {

				if (!empty($_POST['titulo']) and !empty($_POST['categoria'])) {

					include("functionRemoveAcentos.php");

					//recupera dados

					$cod = $_POST['cod'];

					$titulo = $_POST['titulo'];

					$ano = $_POST['ano'];	

					$cat2 = removeAcentos($_POST['categoria']);

					$ano2 = removeAcentos($_POST['ano']);

					$cat2 = str_replace(" ","_",$cat2);

					$ano2 = str_replace(" ","_",$ano2);

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

							$caminho_imagem = "../../arquivos/Biblioteca_Digital/".$cat2.'/'.$ano2.'/'.$nome_imagem;

							$caminho_imagem2 = "arquivos/Biblioteca_Digital/".$cat2.'/'.$ano2.'/'.$nome_imagem;

							// Faz o upload da imagem para seu respectivo caminho

							if (!file_exists("../../arquivos/")) {

								mkdir("../../arquivos/");

							}

							if (!file_exists("../../arquivos/Biblioteca_Digital/")) {

								mkdir("../../arquivos/Biblioteca_Digital/");

							}

							if (!file_exists("../../arquivos/Biblioteca_Digital/".$cat2.'/')) {

								mkdir("../../arquivos/Biblioteca_Digital/".$cat2.'/');

							}	

							if (!file_exists("../../arquivos/Biblioteca_Digital/".$cat2.'/'.$ano2.'/')) {

								mkdir("../../arquivos/Biblioteca_Digital/".$cat2.'/'.$ano2.'/');

							}		

							move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload do Arquivo");

							unlink("../../".$_POST['caminho']);

							// Conexão com o banco de dados

							include("../../php/conexao.php");

							//trabalha o sql para a var

							$sql = "UPDATE biblioDigital SET titulo='$titulo',ano='$ano',arquivo='$caminho_imagem2' WHERE id='".$_POST['cod']."'";

							//executa a query

							$update = mysql_query($sql,$conexao) or die ("Erro no Update do Arquivo: ".mysql_error());

							//mostra a mensagem de sucesso

							echo '

									<script>

										alert("Dados e Arquivo Atualizados com Sucesso na Categoria '.$cat.'!")

										location.href=("../sistema.php?menu='.base64_encode('Biblioteca Digital').'")

									</script>

									';						

						} else { //!empty erros 

						// Se houver mensagens de erro, exibe-as

							echo '

								<script>

									alert("ERRO!'.$erros[1].'")									location.href=("../sistema.php?menu='.base64_encode('Biblioteca Digital').'&acao=add")

								</script>

								';

						} // fecha o else do erros					

					

					} else {// else do !empty banner

							include("../../php/conexao.php");

							//trabalha o sql para a var

							$sql = "UPDATE biblioDigital SET titulo='$titulo',ano='$ano' WHERE id='".$_POST['cod']."'";

							//executa a query

							$update = mysql_query($sql,$conexao) or die ("Erro no Update dos dados: ".mysql_error());

							//mostra a mensagem de sucesso

							echo '

									<script>

										alert("Dados Atualizados com Sucesso na Categoria '.$cat.'!")

																			location.href=("../sistema.php?menu='.base64_encode('Biblioteca Digital').'")

									</script>

									';			

					} // fecha o else do !empty banner

				} else { // else do empty

				//mostra a mensagem de erro

					echo '

								<script>

									alert("Preencha Todos os Campos para Atualizar!")

location.href=("../sistema.php?menu='.base64_encode('Biblioteca Digital').'&acao=add")								

								</script>

								';

				} // fecha o else empty

			} // fecha o isset

		?>