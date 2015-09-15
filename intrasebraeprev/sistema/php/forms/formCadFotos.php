<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	
<div class="table-responsive">

    <table class="table">

            <form method="post" action="?menu=<?php echo base64_encode('Galeria de Fotos'); ?>=&acao=up" enctype="multipart/form-data">

        	<tr>

            	<?php

					include("../php/conexao.php");

					$sql = "SELECT album FROM albumFoto WHERE id='".$_GET['album']."'";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$consulta = mysql_fetch_array($select);

				?>

            	<td colspan="2">

                	<h3> Cadastrar Foto no Album <?php echo $consulta['album']; ?> </h3>

                </td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 > Cadastrar Nova Foto </h3>

                </td>

            </tr>

            <tr>

            	<td> Titulo </td>

                <td> <input tabindex="1" type="text" name="titulo" maxlength="100" value="<?php if (isset($_POST['titulo'])) { echo $_POST['titulo']; } elseif (isset($_GET['titulo'])) { echo $_GET['titulo']; } ?>" /></td>

            </tr>

            <tr>

            	<td> Foto </td>

                <td><input type="file" name="foto" /></td>

            </tr>

            <tr>

            	<td>Album</td>

                <td> 

                	<select name="album">

                	<?php

							echo '<option>'.$consulta['album'].'</option>';	

					?>

                    </select>

                	<a href="?menu=<?php echo base64_encode('Galeria de Fotos'); ?>&acao=add"><button>Novo Album</button></a>

                </td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Cadastrar" name="cad" /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php if (isset($_GET['album'])) { echo $_GET['album']; } ?>" />

        </form>

        </table>

        </div>

        <?php include("php/cadFotos.php"); ?>

        

        