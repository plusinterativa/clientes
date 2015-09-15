<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM arquivos WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/delArquivos.php" enctype="multipart/form-data">

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

            	<td> Mês </td>

                <td> <?php echo $consulta['mes']; ?></td>

            </tr>

            <tr>

            	<td> Ano </td>

                <td> <?php echo $consulta['ano']; ?></td>

            </tr>

            <tr>

            	<td> Categoria </td>

                <td style="background:#fff; color:#1e84ce; padding:5px;border-bottom:2px solid #eee;"> <?php echo $consulta['categoria']; ?></td>

            </tr>

            <tr>

            	<td> Arquivo: </td>

            	<td><a href="../../<?php echo $consulta['caminho']; ?>" target="_blank"><?php echo $consulta['caminho']; ?></a> </td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir" name="del" /></td>

            </tr>

            <input type="hidden" value="<?php echo $raiz; ?>" name="raiz" />

            <input type="hidden" value="<?php echo $sub; ?>" name="sub" />

            <input type="hidden" value="<?php echo base64_decode($_GET['link']); ?>" name="link" />

            <input type="hidden" value="<?php echo $consulta['categoria']; ?>" name="cat" />

            

            <input type="hidden" value="<?php echo $_GET['cod']; ?>" name="cod" />

            <input type="hidden" value="<?php echo $consulta['caminho']; ?>" name="caminho" />

        </form>

        </table>