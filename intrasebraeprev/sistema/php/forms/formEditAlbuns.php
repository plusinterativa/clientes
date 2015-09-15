<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM albumFoto WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">

    <table class="table" style="border-bottom:0;">

        <form method="post" action="php/editAlbum.php" enctype="multipart/form-data">

        	<tr class="bg-blue">

            	<th colspan="3">

                	<h3> Editar Registro</h3>

                </th>

            </tr>

            <tr>

            	<td colspan="3">

                	<h3> Informações sobre o Album</h3>

                </td>

            </tr>

        	<tr>

            	<td> Nome do Album </td>

                <td colspan="2"> <input type="text" name="album" value="<?php echo $consulta['album']; ?>" /></td>

            </tr>

            <tr>

            	<td> Titulo do Album </td>

                <td colspan="2"> <input type="text" name="titleAlbum" value="<?php echo $consulta['titulo']; ?>" /></td>

            </tr>

            <tr>

            	<td> Data do Album </td>

                <td colspan="2"> <input type="text" name="dataAlbum" value="<?php echo $consulta['data']; ?>" /></td>

            </tr>

            <tr>

            	<td> Miniatura </td>

                <td colspan="2"> <?php 

						if (empty($consulta['miniatura'])) {

							echo "Sem Foto";

						} else  {

							echo '<img src="../'.$consulta['miniatura'].'" width="250" height="150" />'; 

						}

					?>

                </td>

            </tr>

            <tr>

            	<td> Alterar Miniatura </td>

                <td colspan="2"> <input type="file" name="min" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" value="<?php echo $_GET['cod']; ?>" name="cod" />

        </form>

        </table>

          <?php

			$sql2 = "SELECT * FROM fotos WHERE album='".$consulta['album']."' ORDER BY id DESC";

			$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

			$n = mysql_num_rows($select2);

			echo '

			   <table class="table" style="margin-top:0;border-top:0;">

				<tr>

            		<td colspan="3">

                		<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:480px;"> Informações sobre as Fotos: ('.$n.')</h3>

                	</td>

            	</tr>

				<tr>

					<td>

						Foto

					</td>

					<td colspan="2">

						Titulo

					</td>

				</tr>

				';

			

			while ($consulta2 = mysql_fetch_array($select2)) {

				echo '

					<form method="post" action="php/editFotos.php" enctype="multipart/form-data">

						<tr>

							<td><img src="../'.$consulta2['foto'].'" width="80" height="60"/></td>

							<td colspan="3"><input type="text" maxlenght="100" name="titulo" value="'.$consulta2['titulo'].'" /></td>

                            <input type="hidden" name="cod" value="'.$consulta2['id'].'" />

                        </tr>

                        <tr>

							<td colspan="3"><input type="submit" value="Atualizar" name="edit" /></td>
                        
                        </tr>
					</form>					

					';	

			}

		  ?>  

         </table>

         </div>