<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		include("../php/conexao.php");

		if (isset($_POST['nivel_acesso'])) {

			if (empty($_POST['nivel_acesso'])) {

				echo '

					 <script>

					 	alert("Digite o Nível de Acesso!")

					 </script>

					 ';	

			} else {

				$sql = "SELECT nivel_acesso FROM nivelAcesso";

				$select = mysql_query($sql,$conexao) or die (mysql_error());

				$t=0;

				while($consulta = mysql_fetch_array($select)) {

					if ($consulta['nivel_acesso'] == $_POST['nivel_acesso']) {

						$t++;	

					}

				}

				if ($t<>0) {

					echo '

					 <script>

					 	alert("Este Nível de Acesso Já Existe!")

					 </script>

					 ';	

				} else {

					$nivel_acesso = $_POST['nivel_acesso'];

					$sql = "INSERT INTO nivelAcesso (nivel_acesso) VALUES ('$nivel_acesso')";

					$insert = mysql_query($sql,$conexao) or die (mysql_error());

					$t=0;

					foreach($_POST as $p) {

						if ($t<>0) {

							$permissao = str_replace("_"," ",$p);

							$sql = "INSERT INTO permissoesNivelAcesso (permissao,nivel_acesso) VALUES ('$permissao','$nivel_acesso')";

							$insert = mysql_query($sql,$conexao) or die (mysql_error());

						}

						$t++;

					}

					//mostra a mensagem de sucesso

					echo '

					 <script>

						alert("Nivel de Acesso Cadastrado com Sucesso!")

						location.href=("sistema.php?menu='.base64_encode('nivel_acesso').'")

					 </script>

					 ';

				}	

			}

		}

	?>