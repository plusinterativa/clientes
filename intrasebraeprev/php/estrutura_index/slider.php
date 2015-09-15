<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div id="owl-demo" class="owl-carousel">


    	<?php

			$sql = "SELECT * FROM slides WHERE status='Visível On-line'";

			$select = mysql_query($sql,$conexao) or die (mysql_error());

			while ($consulta = mysql_fetch_array($select)) {

				echo '<div><a href="'.$consulta['link'].'"><img src="'.$consulta['caminho'].'"></div>';

				if (!empty($consulta['texto'])) {

					echo '<span>'.$consulta['texto'].'</span></a>';

				} else {

					echo '</a>';	

				}

			}

		?>
</div>


