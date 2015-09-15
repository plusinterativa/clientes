<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <?php

		include("../../php/conexao.php");

		if (isset($_POST['cod'])) {

			if (empty($_POST['nivel_acesso'])) {

				echo '

					 <script>

					 	alert("Digite o Nível de Acesso!")

					 </script>

					 ';	

			} else {

				$nivel_acesso = $_POST['nivel_acesso'];

				$cod = $_POST['cod'];

				$sql = "SELECT nivel_acesso FROM nivelAcesso WHERE id='".$cod."'";

				$select = mysql_query($sql,$conexao) or die (mysql_error());

				$consulta = mysql_fetch_array($select);

				if ($nivel_acesso <> $consulta['nivel_acesso']) {

					//altera o nivel de acesso

					$sql = "UPDATE nivelAcesso SET nivel_acesso='$nivel_acesso' WHERE id='".$cod."'";

					$update = mysql_query($sql,$conexao) or die (mysql_error());	

					//altera o nivel de acesso dos usuarios

					$sql = "UPDATE login SET nivel_acesso='$nivel_acesso' WHERE nivel_acesso='".$consulta['nivel_acesso']."'";

					$update = mysql_query($sql,$conexao) or die (mysql_error());	

				}

				//exclui todas as permissoes atuais

				$sqlD = "DELETE FROM permissoesNivelAcesso WHERE nivel_acesso='".$nivel_acesso."'";

				//executa o sql

				$delete = mysql_query($sqlD,$conexao) or die (mysql_error());

				$t=0;

				foreach($_POST as $p) {

					if ($t<>0) {

						$permissao = str_replace("_"," ",$p);

						$sqlP = "INSERT INTO permissoesNivelAcesso (permissao,nivel_acesso) VALUES ('$permissao','$nivel_acesso')";

						//executa o sql

						$insert = mysql_query($sqlP,$conexao) or die (mysql_error());

					}

					$t++;

				}

				//mostra a mensagem de sucesso

				echo '

				 <script>

					alert("Nivel de Acesso Atualizado com Sucesso!")

					location.href=("../sistema.php?menu='.base64_encode('nivel_acesso').'")

				 </script>

				 ';

			}

		}

	?>