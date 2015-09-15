<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['del'])) {

			if (!empty($_POST['cod'])) {

					$cod = $_POST['cod'];

					include("../../php/conexao.php");

					$sql = "SELECT * FROM fotos WHERE id='".$cod."'";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$consulta = mysql_fetch_array($select);

					$sql2 = "SELECT id FROM albumFoto WHERE album='".$consulta['album']."'";

					$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

					$consulta2 = mysql_fetch_array($select2);

					if (!empty($consulta['foto'])) {

						unlink("../../".$consulta['foto']);

					}

					$sql = "DELETE FROM fotos WHERE id='".$cod."'";

					$del = mysql_query($sql,$conexao) or die (mysql_error());

					echo '

					 <script>

					 	alert("Foto Excluída com Sucesso!")

						location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'&acao=del&cod='.$consulta2['id'].'")

					 </script>

					 ';			

			} else {

				echo '

					 <script>										location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'&acao=del&cod='.$consulta2['id'].'")

					 </script>

					 ';	

			}

		}

	?>