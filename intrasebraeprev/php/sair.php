<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Intranet Sebrae Previdência</title>

</head>



<body>

	<?php

		session_start();

		$_SESSION['nome'] = "";

		$_SESSION['nivel_acesso'] = "";

		unset($_SESSION['nome']);

		unset($_SESSION['nivel_acesso']);

		session_destroy();

		echo '

			<script>

				location.href=("../index.php")

			</script>

			';

	?>

</body>

</html>