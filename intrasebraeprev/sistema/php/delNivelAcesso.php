<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['cod'])) {

			if (!empty($_POST['cod'])) {

					$cod = $_POST['cod'];

					include("../../php/conexao.php");

					//pesquisa o nivel de acesso

					$sql = "SELECT nivel_acesso FROM nivelAcesso WHERE id='".$cod."'";

					$select = mysql_query($sql,$conexao) or die ("1".mysql_error());

					$consulta = mysql_fetch_array($select);

				   //pesquisa os usuarios com este nivel de acesso

					$sqlU = "SELECT foto,curriculo FROM login WHERE nivel_acesso='".$consulta['nivel_acesso']."'";

					$selectU = mysql_query($sqlU,$conexao) or die ("2".mysql_error());

					while ($consultaU = mysql_fetch_array($selectU)) {

						if (!empty($consultaU['foto'])) {

							unlink("../../".$consultaU['foto']);

						}

						if (!empty($consultaU['curriculo'])) {

							unlink("../../".$consultaU['curriculo']);

						}

					}

					//exclui os usuarios com este nivel de acesso

					$sqlL = "DELETE FROM login WHERE nivel_acesso='".$consulta['nivel_acesso']."'";

					$deleteL = mysql_query($sqlL,$conexao) or die ("3".mysql_error());

					//exclui as permissoes deste nivel de acesso

					$sqlP = "DELETE FROM permissoesNivelAcesso WHERE nivel_acesso='".$consulta['nivel_acesso']."'";

					$deleteP = mysql_query($sqlP,$conexao) or die ("3".mysql_error());

					//exclui o  nivel de acesso

					$sqlN = "DELETE FROM nivelAcesso WHERE id='".$cod."'";

					$deleteN = mysql_query($sqlN,$conexao) or die ("4".mysql_error());

					echo '

					 <script>

					 	alert("Nível de Acesso Excluído com Sucesso!")

						location.href=("../sistema.php?menu='.base64_encode('nivel_acesso').'")

					 </script>

					 ';			

			} else {

				echo '

					 <script>						location.href=("../sistema.php?menu='.base64_encode('nivel_acesso').'")

					 </script>

					 ';	

			}

		}

	?>