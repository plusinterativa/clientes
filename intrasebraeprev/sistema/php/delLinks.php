<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['del'])) {

			if (!empty($_POST['cod'])) {

					$cod = $_POST['cod'];

					include("../../php/conexao.php");

					$sql = "DELETE FROM links WHERE id='".$cod."'";

					$insert = mysql_query($sql,$conexao) or die (mysql_error());

					echo '

					 <script>

					 	alert("Link Excluído com Sucesso!")

						location.href=("../sistema.php?menu='.base64_encode('links').'")

					 </script>

					 ';			

			} else {

				echo '

					 <script>						location.href=("../sistema.php?menu='.base64_encode('links').'")

					 </script>

					 ';	

			}

		}

	?>