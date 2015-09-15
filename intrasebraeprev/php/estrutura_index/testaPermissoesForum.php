<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include('php/conexao.php');

		$sqlUser = "SELECT categoria FROM login WHERE id='".$_SESSION['id']."'";

		$selectUser = mysql_query($sqlUser,$conexao);

		$consultaUser = mysql_fetch_array($selectUser);

		$sqlPerm = "SELECT * FROM topicos WHERE ";

		switch ($consultaUser['categoria']) {

			case 'Conselheiros':

				$sqlPerm = $sqlPerm."permissoes='Conselheiros' or permissoes='Conselheiros e Empregados' or permissoes='Conselheiros e Gestores' or permissoes='Todos' ORDER BY id DESC";

				break;

			case 'Empregados':

				$sqlPerm = $sqlPerm."permissoes='Empregados' or permissoes='Conselheiros e Empregados' or permissoes='Empregados e Gestores' or permissoes='Todos' ORDER BY id DESC";

				break;

			case 'Gestores':

				$sqlPerm = $sqlPerm."permissoes='Gestores' or permissoes='Conselheiros e Gestores' or permissoes='Empregados e Gestores' or permissoes='Todos' ORDER BY id DESC";

				break;

		}

		$selectPerm = mysql_query($sqlPerm,$conexao) or die (mysql_error());

	?>