<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM login WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/delUsuarios.php">

        	<tr>

            	<td colspan="2">

                	<h3> Excluir Usuario </h3>

                </td>

            </tr>

        	<tr>

            	<td> Nome </td>

                <td> <?php echo $consulta['nome']; ?></td>

            </tr>

            <tr>

            	<td> Usuario </td>

                <td> <?php echo $consulta['usuario']; ?></td>

            </tr>

            <tr>

            	<td> E-mail </td>

                <td> <?php echo $consulta['mail']; ?></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir" name="del"  /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>


        </div>
        </div>