<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet - SEBRAE PREVIDÊNCIA</title>
<meta name="keywords" content="Intranet, Sebrae Previdência" />
	<meta name="description" content="Intranet do SEBRAE PREVIDÊNCIA" />
	<meta name="robots" content="index, follow" />
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>
<body>
<?php 

	if (!isset($_POST['user']) or !isset($_POST['pass']) or empty($_POST['user']) or empty($_POST['pass']) ) {

		echo '

			<script>

				alert("Digite o Seu Usuário e a Sua Senha para Logar!")

				location.href=("../index.php")

			</script>

			';

	} else {

		$user = $_POST['user'];

		$pass = md5($_POST['pass']);

		include("conexao.php");

		$sql = "SELECT * FROM login";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$t = 0;

		while($consulta = mysql_fetch_array($select)) {

			if ($consulta['usuario'] == $user and $consulta['senha'] == $pass) {

				session_start();

				$_SESSION['nome'] = $consulta['nome'];

				$_SESSION['nivel_acesso'] = $consulta['nivel_acesso'];

				$_SESSION['id'] = $consulta['id'];

				$_SESSION['usuario'] = $consulta['usuario'];

//------------------------ cria os menus -----------------------

				//pesquisa os menus raiz

				$sql = "SELECT * FROM menus WHERE categoria='raiz' ORDER BY id";

				$select = mysql_query($sql,$conexao) or die (mysql_error());

				$txt="";

				while ($consulta = mysql_fetch_array($select)) {

					//pesquisa as permissoes

					$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$_SESSION['nivel_acesso']."'",$conexao) or die (mysql_error());

					$a=0;

					//pesquisa e testa a permissão

					while ($consulta4 = mysql_fetch_array($select4)) {

						if ($consulta4['permissao'] == $consulta['menu']) {

							$a++;

						}

					}	

					if ($a==1) {

						$txt = $txt.'<li class="has-sub"><a><span>'.$consulta['menu'].'</span></a><ul>';					

						//------fim permissao ---------

						

						//pesquisa os submenus

						$sql2 = "SELECT * FROM menus WHERE categoria='submenu' and raiz='".$consulta['menu']."'";

						$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

						while ($consulta2 = mysql_fetch_array($select2)) {

							//escreve o submenu						

							if (empty($consulta2['submenu'])) {

								//pesquisa as permissoes

								$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$_SESSION['nivel_acesso']."'",$conexao) or die (mysql_error());

								$a=0;

								//pesquisa e testa a permissão

								while ($consulta4 = mysql_fetch_array($select4)) {

									if ($consulta4['permissao'] == $consulta2['menu']) {

										$a++;

									}

								}	

								if ($a==1) {

									$txt = $txt.'<li><a href="" style="cursor:cell;"><span><strong>+ </strong>'.$consulta2['menu'].'</span></a><ul>';				

									//------fim permissao ---------

									//pesquisa os menus

									$sql3 = "SELECT * FROM menus WHERE categoria='menu' and raiz='".$consulta['menu']."' and submenu='".$consulta2['menu']."' ORDER BY menu";

									$select3 = mysql_query($sql3,$conexao) or die (mysql_error());

									while ($consulta3 = mysql_fetch_array($select3)) {

										//pesquisa as permissoes

										$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$_SESSION['nivel_acesso']."'",$conexao) or die (mysql_error());

										$a=0;

										//pesquisa e testa a permissão

										while ($consulta4 = mysql_fetch_array($select4)) {

											if ($consulta4['permissao'] == $consulta3['menu']) {

												$a++;

											}

										}	

										if ($a==1) {

											$txt = $txt.'<li><a href="?raiz='.base64_encode($consulta3['raiz']).'&cat='.base64_encode($consulta3['submenu']).'&menu='.base64_encode($consulta3['menu']).'"><span>'.$consulta3['menu'].'</span></a></li>';

										}					

										//------fim permissao ---------

									}

									$txt = $txt.'</ul></li>';

								}

							} else {

								//pesquisa as permissoes

								$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$_SESSION['nivel_acesso']."'",$conexao) or die (mysql_error());

								$a=0;

								//pesquisa e testa a permissão

								while ($consulta4 = mysql_fetch_array($select4)) {

									if ($consulta4['permissao'] == $consulta2['menu']) {

										$a++;

									}

								}	

								if ($a==1) {

									$txt = $txt.'<li><a href="?raiz='.base64_encode($consulta2['raiz']).'&cat='.base64_encode($consulta2['submenu']).'&menu='.base64_encode($consulta2['menu']).'"><span>'.$consulta2['menu'].'</span></a></li>';

								}					

								//------fim permissao ---------

							}

						} // fecha o while submenu

					$txt = $txt.'</ul></li>';

					}

				} // fecha o while raiz

				//cria a pasta

				if (!file_exists('menus/')) {

					mkdir('menus/');	

				}

				include('../sistema/php/functionRemoveAcentos.php');

				$nomeArq = removeAcentos($_SESSION['usuario']);

				$nomeArq = str_replace(" ","_",$nomeArq);

				//cria o arquivo dos nenus

				$arquivo = fopen("menus/menu".$nomeArq.".txt","w");

				// grava o texto

				fwrite($arquivo,$txt);

				// fecha o arquivo

				fclose($arquivo);

//----------------------- fim menus ----------------------------

				$t++;

			}

		}

		if ($t <> 1) {

			echo '

				<script>

					alert("Usuário ou senha Incorretos!")

				</script>

				';

		}

		echo '

				<script>

					location.href=("../index.php")

				</script>	

				';

	}

?>

</body>

</html>