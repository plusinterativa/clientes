<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM links WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/editLinks.php">

        	<tr>

            	<td colspan="2">

                	<h3> Editar Registro</h3>

                </td>

            </tr>

        	<tr>

            	<td> Título </td>

                <td> <input type="text" name="titulo" value="<?php echo $consulta['titulo']; ?>" /></td>

            </tr>

            <tr>

            	<td> URL </td>

                <td> <input type="text" name="link" value="<?php echo $consulta['link']; ?>" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

        </div>