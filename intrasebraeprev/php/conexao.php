<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



	<?php

		$hostConnect = "179.188.16.46";

		$usuarioConnect = "intrasebraepre5";

		$senhaConnect = "vagalume9";

		$dbConnect = "intrasebraepre5";

		$conexao = mysql_connect($hostConnect,$usuarioConnect,$senhaConnect) or die (mysql_error());

		$banco = mysql_select_db($dbConnect,$conexao) or die (mysql_error());

	?>

