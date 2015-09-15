<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM treinamentos WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">

    <table class="table">

        <form method="post" action="php/delTreinamentos.php">

        	<tr>

            	<td colspan="2">

                	<h3> Excluir Registro</h3>

                </td>

            </tr>

        	<tr>

            	<td width="150"> Título </td>

                <td width="550"> <?php echo $consulta['titulo']; ?></td>

            </tr>

            <tr>

            	<td> Categoria </td>

                <td> <?php echo $consulta['categoria']; ?></td>

            </tr>

            <tr>

            	<td> Resumo da Descrição </td>

                <td> <?php echo substr($consulta['descricao'],0,100); ?>...</td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir" name="del"  /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

        </div>