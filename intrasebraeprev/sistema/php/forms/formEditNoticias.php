<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM noticias WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">

    <table class="table">

        <form method="post" action="php/editNoticias.php" enctype="multipart/form-data">

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

            	<td colspan="2"> Noticia </td>

            </tr>

                <td colspan="2"> <textarea name="noticia"> <?php echo $consulta['noticia']; ?></textarea></td>

            </tr>

            <tr>

            	<td> Fonte </td>

                <td> <input type="text" name="fonte" value="<?php echo $consulta['fonte']; ?>" /></td>

            </tr>

            <tr>

            	<td> Foto Atual </td>

                <td> <?php 

						if (empty($consulta['foto'])) {

							echo "Sem Foto";

						} else  {

							echo '<img src="../'.$consulta['foto'].'" width="250" height="100" />'; 

						}

					?>

                </td>

            </tr>

            <tr>

            	<td> Alterar Foto </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            

            <input type="hidden" value="<?php echo $_GET['cod']; ?>" name="cod" />

        </form>

        </table>

        </div>