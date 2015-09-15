<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['codDelComents'])) {

			if (!empty($_POST['codDelComents'])) {

					$cod = $_POST['codDelComents'];

					$topico = $_POST['topicDelComents'];

					include("conexao.php");

					$sql = "SELECT * FROM comentarios WHERE id='".$cod."'";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$consulta = mysql_fetch_array($select);

					for ($i=0;$i<=5;$i++) {

						if (!empty($consulta["Arquivo".$i])) {

							unlink('../'.$consulta["Arquivo".$i]);

						}

					}

					$sql = "DELETE FROM comentarios WHERE id='".$cod."'";

					$del = mysql_query($sql,$conexao) or die (mysql_error());

					echo '

					 <script>

					 	alert("Comentário Excluído com Sucesso!")

						location.href=("../index.php?forum='.base64_encode('true').'&topic='.$topico.'")

					 </script>

					 ';			

			} else {

				echo '

					 <script>										location.href=("../index.php?forum='.base64_encode('true').'&topic='.$topico.'")

					 </script>

					 ';	

			}

		}

	?>