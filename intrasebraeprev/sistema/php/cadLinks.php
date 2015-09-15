<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['cad'])) {

			if (!empty($_POST['titulo']) and !empty($_POST['link'])) {

				if (strlen($_POST['titulo']) <= 100)  {

					$title = $_POST['titulo'];

					$link = $_POST['link'];

					include("../../php/conexao.php");

					$sql = "INSERT INTO links (titulo,link) VALUES ('$title','$link')";

					$insert = mysql_query($sql,$conexao) or die (mysql_error());

					echo '

					 <script>

					 	alert("Link Cadastrado com Sucesso!")

						location.href=("../sistema.php?menu='.base64_encode('links').'")

					 </script>

					 ';

				} else {

					echo '

					 <script>

					 	alert("O campo título não pode ter mais de 100 caracteres!")

						location.href=("../index.php?menu='.base64_encode('links').'&acao=add")

					 </script>

					 ';	

				}				

			} else {

				echo '

					 <script>

					 	alert("Preencha Todos os Campos para Cadastrar!")

						location.href=("../sistema.php?menu='.base64_encode('links').'&acao=add")

					 </script>

					 ';	

			}

		}

	?>