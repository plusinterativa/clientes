<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM biblioDigital WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>

    <table class="formUpload">

        <form method="post" action="php/delBiblioDigital.php" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Excluir Registro</h3>

                </td>

            </tr>

        	<tr>

            	<td> Título </td>

                <td width="500" style="border-bottom:2px solid #eee;background:#fff; color:#1e84ce; padding:5px;"> <?php echo $consulta['titulo']; ?></td>

            </tr>

            <tr>

            	<td> Categoria </td>

                <td style="border-bottom:2px solid #eee;background:#fff; color:#1e84ce; padding:5px;"> <?php echo $consulta['categoria']; ?></td>

            </tr>

            <tr>

            	<td> Ano </td>

                <td style="border-bottom:2px solid #eee;background:#fff; color:#1e84ce; padding:5px;"> <?php echo $consulta['ano']; ?></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir" name="del" /></td>

            </tr>        

            <input type="hidden" value="<?php echo $_GET['cod']; ?>" name="cod" />

            <input type="hidden" value="<?php echo $consulta['arquivo']; ?>" name="caminho" />

        </form>

        </table>