<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM videos WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/editVideos.php" enctype="multipart/form-data">

        	<tr class="bg-blue">

            	<th colspan="2">

                	<h3> Editar Registro</h3>

                </th>

            </tr>

        	<tr>

            	<td> Título </td>

                <td> <input type="text" name="titulo" value="<?php echo $consulta['titulo']; ?>" /></td>

            </tr>

            <tr>

            	<td colspan="2"> Descrição </td>

            </tr>

                <td colspan="2" > <textarea name="desc"> <?php echo $consulta['descricao']; ?></textarea></td>

            </tr>

            <tr>

            	<td> Miniatura Atual</td>

                <td>

                	<?php 

						if (empty($consulta['miniatura'])) {

							echo "Sem Foto";

						} else  {

							echo '<img src="../'.$consulta['miniatura'].'" width="250" height="100" />'; 

						}

					?>

                </td>

            </tr>

            	<td> Alterar Miniatura </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td> URL </td>

                <td> <input type="text" name="url" value="<?php echo $consulta['url']; ?>" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            

            <input type="hidden" value="<?php echo $_GET['cod']; ?>" name="cod" />

        </form>

        </table>

        </div>