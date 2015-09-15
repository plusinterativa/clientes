<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['del'])) {

				if (!empty($_POST['cod']) and !empty($_POST['caminho'])) {

				//recupera dados

				$cod = $_POST['cod'];

				$cam = $_POST['caminho'];

				$raiz = $_POST['raiz'];

				$sub = $_POST['sub'];

				$cat = $_POST['cat'];

				$link = $_POST['link'];

				unlink("../../".$cam);

				// Conexão com o banco de dados

				include("../../php/conexao.php");

				//trabalha o sql para a var

				$sql = "DELETE FROM arquivos WHERE id='".$cod."'";

				//executa a query

				$del = mysql_query($sql,$conexao) or die ("Erro ao Cadastrar o Arquivo: ".mysql_error());

				//mostra a mensagem de sucesso

				echo '

						<script>

							alert("Arquivo Excluido com Sucesso!")

							location.href=("../sistema.php?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($cat).'&link='.base64_encode($link).'")

						</script>

						';						

			}

		} else { 

				echo '

					<script>

						location.href=("../sistema.php?raiz='.base64_encode($raiz).'&cat='.base64_encode($sub).'&menu='.base64_encode($cat).'&link='.base64_encode($link).'")

					</script>

					';

			} 

		?>