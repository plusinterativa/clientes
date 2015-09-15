<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['del'])) {

			if (!empty($_POST['cod'])) {

					$cod = $_POST['cod'];

					include("../../php/conexao.php");

					//seleciona o menu

					$selectM = mysql_query("SELECT * FROM menus WHERE id='".$cod."'",$conexao) or die (mysql_error());	

					$consultaM = mysql_fetch_array($selectM);

	//------------exclui as permissões para o menu--------------

					switch ($consultaM['categoria']) {

						case "raiz":

							//exclui as permissoes do raiz

							$deleteP = mysql_query("DELETE FROM permissoesNivelAcesso WHERE permissao='".$consultaM['menu']."'",$conexao) or die (mysql_error());

							//exclui as permissoes dos submenus

							$selectTemp = mysql_query("SELECT menu FROM menus WHERE categoria='submenu' and raiz='".$consultaM['menu']."'",$conexao) or die (mysql_error());

							while ($consultaTemp = mysql_fetch_array($selectTemp)) {

								$deleteTemp = mysql_query("DELETE FROM permissoesNivelAcesso WHERE permissao='".$consultaTemp['menu']."'",$conexao) or die (mysql_error());		

							}

							//exclui as permissoes dos menus

							$selectTemp = mysql_query("SELECT menu FROM menus WHERE categoria='menu' and raiz='".$consultaM['menu']."'",$conexao) or die (mysql_error());

							while ($consultaTemp = mysql_fetch_array($selectTemp)) {

								$deleteTemp = mysql_query("DELETE FROM permissoesNivelAcesso WHERE permissao='".$consultaTemp['menu']."'",$conexao) or die (mysql_error());		

							}

							break;

						case "submenu":

							//exclui as permissoes do submenu

							$deleteP = mysql_query("DELETE FROM permissoesNivelAcesso WHERE permissao='".$consultaM['menu']."'",$conexao) or die (mysql_error());

							//exclui as permissoes dos menus

							$selectTemp = mysql_query("SELECT menu FROM menus WHERE categoria='menu' and submenu='".$consultaM['menu']."'",$conexao) or die (mysql_error());

							while ($consultaTemp = mysql_fetch_array($selectTemp)) {

								$deleteTemp = mysql_query("DELETE FROM permissoesNivelAcesso WHERE permissao='".$consultaTemp['menu']."'",$conexao) or die (mysql_error());		

							}

							break;

						case "menu":

							//exclui as permissoes do submenu

							$deleteP = mysql_query("DELETE FROM permissoesNivelAcesso WHERE permissao='".$consultaM['menu']."'",$conexao) or die (mysql_error());

							break;

					}

					//exclui o menu condicionalmente

					switch ($consultaM['categoria']) {

			//------------------------- caso raiz ---------------

						case "raiz":

							//exclui todos os menus e submenus

							$delete = mysql_query("DELETE FROM menus WHERE raiz='".$consultaM['menu']."'",$conexao) or die (mysql_error());

							//exclui o menu raiz

							$deleteM = mysql_query("DELETE FROM menus WHERE id='".$cod."'",$conexao) or die (mysql_error());

							break;

					

			//------------------------- caso submenu ---------------	

						case "submenu":

							//exclui todos os menus

							$delete = mysql_query("DELETE FROM menus WHERE submenu='".$consultaM['menu']."'",$conexao) or die (mysql_error());

							if (empty($consultaM['submenu'])) {

								//exclui o submenu

								$deleteM = mysql_query("DELETE FROM menus WHERE id='".$cod."'",$conexao) or die (mysql_error());

							}

							break;	

						case "menu":

							//exclui o menu

							$deleteM = mysql_query("DELETE FROM menus WHERE id='".$cod."'",$conexao) or die (mysql_error());

							break;						

					}

					echo '

					 <script>

					 	alert("Menu Excluído com Sucesso!")

						location.href=("../sistema.php?menu='.base64_encode('menusIntra').'")

					 </script>

					 ';			

			} else {

				echo '

					 <script>						location.href=("../sistema.php?menu='.base64_encode('menusIntra').'")

					 </script>

					 ';	

			}

		}

	?>