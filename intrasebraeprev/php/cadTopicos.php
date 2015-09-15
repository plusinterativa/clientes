<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['cad'])) {

				if (!empty($_POST['titulo']) and !empty($_POST['comentario'])) {

					include("sistema/php/functionRemoveAcentos.php");

					//recupera dados

					$titulo = $_POST['titulo'];

					$comentario = $_POST['comentario'];

					$permissoes = $_POST['permissoes'];

					$link1 = $_POST['link1'];

					$link2 = $_POST['link2'];

					$link3 = $_POST['link3'];

					$link4 = $_POST['link4'];

					$link5 = $_POST['link5'];

					$post = date('d/m/y - h:i');

					//------user ---------

					include('php/conexao.php');

					$sql = "SELECT usuario,nome FROM login WHERE id='".$_SESSION['id']."'";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$consulta = mysql_fetch_array($select);

					$user = $consulta['usuario'];

					$nome = $consulta['nome'];

					

					//----- Cria o topico ------

					$sql = "INSERT INTO topicos (titulo,comentario,post,usuario,nome,permissoes,link1,link2,link3,link4,link5) VALUES ('$titulo','$comentario','$post','$user','$nome','$permissoes','$link1','$link2','$link3','$link4','$link5')";

					//executa a query

					$insert = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Tópico: ".mysql_error());

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

					//trabalha o sql para a var

					$sql = "UPDATE topicos SET Arquivo1='".$caminho_imagem[1]."',Arquivo2='".$caminho_imagem[2]."',Arquivo3='".$caminho_imagem[3]."',Arquivo4='".$caminho_imagem[4]."',Arquivo5='".$caminho_imagem[5]."' WHERE usuario='".$user."' and titulo='".$titulo."'";

					//executa a query

					$update = mysql_query($sql,$conexao) or die ("Erro no update do topico: ".mysql_error());

					//mostra a mensagem de sucesso

					echo '

							<script>

								alert("Topico Cadastrado Com Sucesso!")

								location.href=("index.php?forum='.base64_encode('true').'")

							</script>

							';

					} else {

						echo '

								<script>

									alert("Tópico (Sem Arquivos) Cadastrado Com Sucesso!")	

									location.href=("index.php?forum='.base64_encode('true').'")					

								</script>

								';

					}

				} else {

				//mostra a mensagem de erro

					echo '

								<script>

									alert("Os Campos Titulo do Tópico e Comentário sobre o Tópico não podem estar vazios para Cadastrar!")						

								</script>

								';

				} // fecha o else do !empty campos

			} // fecha o isset

		?>