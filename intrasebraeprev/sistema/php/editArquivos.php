<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['edit'])) {

				if (!empty($_POST['titulo']) and !empty($_POST['mes']) and !empty($_POST['ano'])) {

					include("functionRemoveAcentos.php");

					//recupera dados

					$titulo = $_POST['titulo'];

					$ano = $_POST['ano'];

					$tipo = $_POST['tipo'];

					$mes = '';

					if ($tipo == 'ano') {

						$mes = $_POST['mes'];

					}

					$cat = $_POST['menu'];

					if (isset($_POST['cat'])) {

						$cat = $_POST['cat'];	

					}

					$raiz2 = removeAcentos($_POST['raiz']);

					$link2 = removeAcentos($_POST['link']);

					$raiz = $_POST['raiz'];

					$sub = $_POST['sub'];

					$link = $_POST['link'];	

					$menu = $_POST['menu'];	

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

							$raiz2 = str_replace(" ","_",$raiz2);

							$caminho_imagem = "../../arquivos/".$raiz2.'/'.$link2."/".$nome_imagem;

							$caminho_imagem2 = "arquivos/".$raiz2.'/'.$link2."/".$nome_imagem;

							// Faz o upload da imagem para seu respectivo caminho			

							if (!file_exists("../../arquivos/")) {

							mkdir("../../arquivos/");

						}

						if (!file_exists("../../arquivos/".$raiz2.'/')) {

							mkdir("../../arquivos/".$raiz2.'/');

						}

						if (!file_exists("../../arquivos/".$raiz2.'/'.$link.'/')) {

							mkdir("../../arquivos/".$raiz2.'/'.$link2.'/');

						}		

							move_uploaded_file($banner["tmp_name"], $caminho_imagem) or die ("Erro no upload do Arquivo");

							unlink("../../".$_POST['caminho']);

							// Conexão com o banco de dados

							include("../../php/conexao.php");

							//trabalha o sql para a var

							$sql = "UPDATE arquivos SET titulo='$titulo',mes='$mes',ano='$ano',categoria='$cat',caminho='$caminho_imagem2',menu='$menu',tipo='$tipo' WHERE id='".$_POST['cod']."'";

							//executa a query

							$del = mysql_query($sql,$conexao) or die ("Erro no Update do Arquivo: ".mysql_error());

							//mostra a mensagem de sucesso

							echo '

									<script>

										alert("Dados e Arquivo Atualizados com Sucesso!")

										location.href=("../sistema.php?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($menu).'&link='.base64_encode($link).'")

									</script>

									';						

						} else { //!empty erros 

						// Se houver mensagens de erro, exibe-as

							echo '

								<script>

									alert("ERRO!'.$erros[1].'")

									location.href=("../sistema.php?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($menu).'&link='.base64_encode($link).'")

								</script>

								';

						} // fecha o else do erros					

					

					} else {// else do !empty banner

							include("../../php/conexao.php");

							//trabalha o sql para a var

							$sql = "UPDATE arquivos SET titulo='$titulo',mes='$mes',ano='$ano',categoria='$cat',menu='$menu',tipo='$tipo' WHERE id='".$_POST['cod']."'";

							//executa a query

							$del = mysql_query($sql,$conexao) or die ("Erro no Update dos dados: ".mysql_error());

							//mostra a mensagem de sucesso

							echo '

									<script>

										alert("Dados Atualizados com Sucesso!")

										location.href=("../sistema.php?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($menu).'&link='.base64_encode($link).'")

									</script>

									';			

					} // fecha o else do !empty banner

				} else { // else do empty

				//mostra a mensagem de erro

					echo '

								<script>

									alert("Preencha Todos os Campos para Cadastrar!")

location.href=("../sistema.php?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($menu).'&link='.base64_encode($link).'")								

								</script>

								';

				} // fecha o else empty

			} // fecha o isset

		?>