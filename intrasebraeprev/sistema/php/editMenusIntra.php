<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['edit'])) {

			if (!empty($_POST['menu'])) {

				$cat = $_POST['cat'];

				$menu = $_POST['menu'];

				include("../../php/conexao.php");

				switch ($cat) {

					case "menu":

						include("functionRemoveAcentos.php");

						$raiz = $_POST['raiz'];

						$sub = $_POST['sub'];

						$sigla = removeAcentos($_POST['menu']);

						$sigla = str_replace(" ","_",$sigla);						

						$sql = "UPDATE menus SET menu='$menu',categoria='$cat',raiz='$raiz',submenu='$sub',sigla='$sigla' WHERE id='".$_POST['cod']."'";

						break;

					case "submenu":

						if (isset($_POST['validaMenu']) and $_POST['validaMenu'] == 'true') {

							$raiz = $_POST['raiz'];						

							$sql = "UPDATE menus SET menu='$menu',categoria='$cat',raiz='$raiz',submenu='',sigla='' WHERE id='".$_POST['cod']."'";	

						} else {

							$raiz = $_POST['raiz'];						

							$sql = "UPDATE menus SET menu='$menu',categoria='$cat',raiz='$raiz',submenu='$menu',sigla='' WHERE id='".$_POST['cod']."'";

						}

						break;

					case "raiz":

						$sql = "UPDATE menus SET menu='$menu',categoria='$cat',raiz='',submenu='',sigla='' WHERE id='".$_POST['cod']."'";	

						break;

				}

				$insert = mysql_query($sql,$conexao) or die (mysql_error());

				

				echo '

				 <script>

					alert("Menu Atualizado com Sucesso!")

					location.href=("../sistema.php?menu='.base64_encode('menusIntra').'")

				 </script>

				 ';			

			} else {

				echo '

					 <script>

					 	alert("Digite o Nome do Menu para Atualizar!")

						location.href=("../sistema.php?menu='.base64_encode('menusIntra').'&acao=add")

					 </script>

					 ';	

			}

		}

	?>