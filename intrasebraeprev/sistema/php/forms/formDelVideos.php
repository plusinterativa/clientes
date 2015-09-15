<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM videos WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">

    <table class="table">

        <form method="post" action="php/delVideos.php">

        	<tr class="bg-blue">

            	<th colspan="2">

                	<h3> Excluir Registro</h3>

                </th>

            </tr>

        	<tr>

            	<td> Título </td>

                <td> <?php echo $consulta['titulo']; ?></td>

            </tr>

            <tr>

            	<td> Descrição </td>

                <td> <?php echo substr($consulta['descricao'],0,100)."..."; ?></td>

            </tr>

            <tr>

            	<td> URL </td>

                <td> <?php echo $consulta['url']; ?></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir" name="del"  /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

        </div>