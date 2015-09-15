<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM menus WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/delMenusIntra.php">

        	<tr>

            	<td colspan="2">

                	<h3> Excluir Registro</h3>

                </td>

            </tr>

        	<tr>

            	<td> Nome do Menu </td>

                <td> <?php echo $consulta['menu']; ?></td>

            </tr>

            <tr>

            	<td> Categoria </td>

                <td> <?php echo $consulta['categoria']; ?></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir" name="del"  /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

        </div>