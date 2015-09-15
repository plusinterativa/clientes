<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM albumFoto WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">

    <table class="table">

        <form method="post" action="php/delAlbuns.php">

        	<tr class="bg-blue">

            	<th colspan="2">

                	<h3> Excluir Registro</h3>

                </th>

            </tr>

        	<tr>

            	<td width="150"> Nome do Album </td>

                <td> <?php echo $consulta['album']; ?></td>

            </tr>

            <tr>

            	<td width="150"> Titulo do Album </td>

                <td> <?php echo $consulta['titulo']; ?></td>

            </tr>

            <tr>

            	<td width="150"> Data do Album </td>

                <td> <?php echo $consulta['data']; ?></td>

            </tr>

            <tr>

            	<td> Miniatura </td>

                <td><img src="../<?php echo $consulta['miniatura']; ?>" width="220" height="160" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Excluir Album" name="del"  /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

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

                		<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:480px;"> Fotos Cadastradas em '.$consulta['album'].'('.$n.')</h3>

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

					<form method="post" action="php/delFotos.php" enctype="multipart/form-data">

						<tr>

							<td><img src="../'.$consulta2['foto'].'" width="80" height="60"/></td>

							<td colspan="2" style=" border-right: 1px solid #ddd;">'.$consulta2['titulo'].'</td>


                            <input type="hidden" name="cod" value="'.$consulta2['id'].'" />

                        </tr>
                        <tr>
							<td colspan="4"><input type="submit" value="Excluir" name="del" /></td>
					   </tr>
                    </form>					

					';	

			}

		  ?>  

         </table>

         </div>