<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Intranet - SEBRAE PREVIDÊNCIA</title>

</head>



<body>

	<?php

		if (isset($_POST['btn'])) {

			if(empty($_POST['newPass'])) {

				echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#333; background:#Fc0;margin:10px 0 0 0";>*Digite sua Senha!</div>';

			} elseif (empty($_POST['confirmPass'])) {

				echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#333; background:#Fc0;margin:10px 0 0 0";>*Digite a Senha Novamente (Confirmação de Senha)!</div>';

			} elseif ($_POST['newPass'] != $_POST['confirmPass']) {

				echo '<div style="font-size:12px;padding:8px 20px;width:575px;border-radius:5px; color:#333; background:#Fc0;margin:10px 0 0 0";>*A Senha e a Confirmação devem ser Identicas!</div>';

			} else {

				include("php/conexao.php");

				$sql = "UPDATE login SET senha='".$_POST['newPass']."' WHERE usuario='".base64_decode($_POST['nameUser'])."'";

				$update = mysql_query($sql,$conexao) or die (mysql_error());

				unlink($_GET['page'].'.php');

				echo '

					<script>

						alert("Sua Senha Foi Alterada Com Sucesso!")

						location.href=("index.php")

					</script>

					';

			}

		}

?>

</body>

</html>