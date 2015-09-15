<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   	

		

        <?php

			//testa se o botão foi clicado

			if (isset($_POST['del'])) {

				if (!empty($_POST['cod']) and !empty($_POST['caminho'])) {

				//recupera dados

				$cod = $_POST['cod'];

				$cam = $_POST['caminho'];

				unlink("../../".$cam);

				// Conexão com o banco de dados

				include("../../php/conexao.php");

				//trabalha o sql para a var

				$sql = "DELETE FROM biblioDigital WHERE id='".$cod."'";

				//executa a query

				$del = mysql_query($sql,$conexao) or die ("Erro ao Excluir o Arquivo: ".mysql_error());

				//mostra a mensagem de sucesso

				echo '

						<script>

							alert("Arquivo Excluido com Sucesso!")

							location.href=("../sistema.php?menu='.base64_encode('Biblioteca Digital').'")

						</script>

						';						

			}

		} else { 

				echo '

					<script>

						location.href=("../sistema.php?menu='.base64_encode('Biblioteca Digital').'")

					</script>

					';

			} 

		?>