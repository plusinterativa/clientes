<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['del'])) {

			if (!empty($_POST['cod'])) {

					$cod = $_POST['cod'];

					include("../../php/conexao.php");

					$sql = "SELECT * FROM noticias WHERE id='".$cod."'";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$consulta = mysql_fetch_array($select);

					if (!empty($consulta['foto'])) {

						unlink("../../".$consulta['foto']);

					}

					$sql = "DELETE FROM noticias WHERE id='".$cod."'";

					$del = mysql_query($sql,$conexao) or die (mysql_error());

					echo '

					 <script>

					 	alert("Notícia Excluída com Sucesso!")

						location.href=("../sistema.php?menu='.base64_encode('Notícias').'")	

					 </script>

					 ';			

			} else {

				echo '

					 <script>											location.href=("../sistema.php?menu='.base64_encode('Notícias').'")

					 </script>

					 ';	

			}

		}

	?>