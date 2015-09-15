<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['del'])) {

			if (!empty($_POST['cod'])) {

					$cod = $_POST['cod'];

					include("../../php/conexao.php");

					$sql = "SELECT * FROM albumFoto WHERE id='".$cod."'";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$consulta = mysql_fetch_array($select);

					if (!empty($consulta['miniatura'])) {

						unlink("../../".$consulta['miniatura']);

					}

					$sql2 = "SELECT * FROM fotos WHERE album='".$consulta['album']."'";

					$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

					while ($consulta2 = mysql_fetch_array($select2)) {

						unlink("../../".$consulta2['foto']);

						$delete = mysql_query("DELETE FROM fotos WHERE id='".$consulta2['id']."'",$conexao) or die (mysql_error());

					}

					$sql = "DELETE FROM albumFoto WHERE id='".$cod."'";

					$del = mysql_query($sql,$conexao) or die (mysql_error());

					echo '

					 <script>

					 	alert("Album Excluído com Sucesso!")

						location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'")

					 </script>

					 ';			

			} else {

				echo '

					 <script>										location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'")

					 </script>

					 ';	

			}

		}

	?>