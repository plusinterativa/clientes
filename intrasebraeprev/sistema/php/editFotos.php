<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['edit'])) {

			if (!empty($_POST['titulo']) and !empty($_POST['cod'])) {

					$cod = $_POST['cod'];

					$title = $_POST['titulo'];

					include("../../php/conexao.php");

					$sql = "SELECT album FROM fotos WHERE id='".$cod."'";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$consulta = mysql_fetch_array($select);

					$sql3 = "SELECT id FROM albumFoto WHERE album='".$consulta['album']."'";

					$select3 = mysql_query($sql3,$conexao) or die (mysql_error());

					$consulta3 = mysql_fetch_array($select3);

					$sql2 = "UPDATE fotos SET titulo='$title' WHERE id='".$cod."'";

					$update = mysql_query($sql2,$conexao) or die (mysql_error());

					echo '

					 <script>

					 	alert("Foto Atualizada com Sucesso!")

						location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'&acao=edit&cod='.$consulta3['id'].'")

					 </script>

					 ';				

			} else {

				echo '

					 <script>

					 	alert("O campo não pode Estar vazio para Cadastrar!")

						location.href=("../sistema.php?menu='.base64_encode('Galeria de Fotos').'&acao=edit&cod='.$consulta3['id'].'")

					 </script>

					 ';	

			}

		}

	?>