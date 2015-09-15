<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <?php

		if (isset($_POST['cad'])) {

			if (!empty($_POST['menu'])) {

				$cat = $_POST['cat'];

				$menu = $_POST['menu'];

				include("../../php/conexao.php");

				switch ($cat) {

					case "menu":

						include("functionRemoveAcentos.php");INSERT

						$raiz = $_POST['raiz'];

						$sub = $_POST['sub'];

						$sigla = removeAcentos($_POST['menu']);

						$sigla = str_replace(" ","_",$sigla);						

						$sql = "INSERT INTO menus (menu,categoria,raiz,submenu,sigla) VALUES ('$menu','$cat','$raiz','$sub','$sigla')";

						break;

					case "submenu":

						if (isset($_POST['validaMenu']) and $_POST['validaMenu'] == 'true') {

							$raiz = $_POST['raiz'];						

							$sql = "INSERT INTO menus (menu,categoria,raiz) VALUES ('$menu','$cat','$raiz')";	

						} else {

							$raiz = $_POST['raiz'];						

							$sql = "INSERT INTO menus (menu,categoria,raiz,submenu) VALUES ('$menu','$cat','$raiz','$menu')";

						}

						break;

					case "raiz":

						$sql = "INSERT INTO menus (menu,categoria) VALUES ('$menu','$cat')";

						break;

				}

				$insert = mysql_query($sql,$conexao) or die (mysql_error());

				

				echo '

				 <script>

					alert("Menu Cadastrado com Sucesso!")

					location.href=("../sistema.php?menu='.base64_encode('menusIntra').'")

				 </script>

				 ';			

			} else {

				echo '

					 <script>

					 	alert("Digite o Nome do Menu para Cadastrar!")

						location.href=("../sistema.php?menu='.base64_encode('menusIntra').'&acao=add")

					 </script>

					 ';	

			}

		}

	?>