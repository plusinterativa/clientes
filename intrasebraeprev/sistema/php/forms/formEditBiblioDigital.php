<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM biblioDigital WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>

    <table class="formUpload">

        <form method="post" action="php/editBiblioDigital.php" enctype="multipart/form-data">

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

            	<td> Categoria </td>

                <td>

                	<input type="text" name="categoria" value="<?php echo $consulta['categoria']; ?>" />

                </td>

            </tr>

            <tr>

            	<td> Ano </td>

                <td> 

                	<select name="ano">

                    	<?php

							$aa = $consulta['ano'];

							$ano = date("Y")+1;

							$a10 = date("Y")-10;

							for($a=$a10;$a<=$ano;$a++) {

								if ($a == $aa) {

									echo '<option selected="selected">'.$a.'</option>';

								} else {

									echo "<option>$a</option>";	

								}

							}

						?>

                    </select>

                </td>

            </tr>

            <tr>

            	<td> Arquivo Atual: </td>

            	<td><a href="../../<?php echo $consulta['arquivo']; ?>" target="_blank"><?php echo $consulta['arquivo']; ?></a> </td>

            </tr>

            <tr>

            	<td> Alterar Arquivo: </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" value="<?php echo $_GET['cod']; ?>" name="cod" />

            <input type="hidden" value="<?php echo $consulta['arquivo']; ?>" name="caminho" />

        </form>

        </table>