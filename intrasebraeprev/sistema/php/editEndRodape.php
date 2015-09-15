<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['edit'])) {

			if (!empty($_POST['endRodape'])) {

				$end = $_POST['endRodape'];

				include("../../php/conexao.php");

				$sql = "UPDATE endRodape SET texto='$end' WHERE id='1'";

				$update = mysql_query($sql,$conexao) or die (mysql_error());

				echo '

				 <script>

					alert("Link Atualizado com Sucesso!")

					location.href=("../sistema.php?menu='.base64_encode('endRodape').'")

				 </script>

				 ';

			} else {

				echo '

					 <script>

					 	alert("O campo Endereço não pode estar Vazio!")

						location.href=("../sistema.php?menu='.base64_encode('endRodape').'")

					 </script>

					 ';	

			}				

		}

	?>