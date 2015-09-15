<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM links WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
	
    <table class="table">

        <form method="post" action="php/delLinks.php">

        	<tr>

            	<td colspan="2">

                	<h3> Excluir Registro</h3>

                </td>

            </tr>

        	<tr>

            	<td> Título </td>

                <td style="border-bottom:2px solid #eee;background:#fff; color:#1e84ce; padding:5px;"> <?php echo $consulta['titulo']; ?></td>

            </tr>

            <tr>

            	<td> Mês </td>

                <td style="border-bottom:2px solid #eee;background:#fff; color:#1e84ce; padding:5px;"> <?php echo $consulta['link']; ?></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir" name="del"  /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

        </div>