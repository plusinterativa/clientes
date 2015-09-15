<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM treinamentos WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    
    <table class="table">

        <form method="post" action="php/editTreinamentos.php" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Editar ronaldo Registro</h3>

                </td>

            </tr>

        	<tr>

            	<td> Título </td>

                <td> <input type="text" name="titulo" value="<?php echo $consulta['titulo']; ?>" /></td>

            </tr>

            <td>Categoria</td>

                <td><input type="text" maxlength="100" name="cat" value="<?php echo $consulta['categoria']; ?>"  /></td>

            <tr>

            	<td> Descrição </td>

                <td> <textarea name="desc"><?php echo $consulta['descricao']; ?></textarea></td>

            </tr>

            <tr>

            	<td> Arquivo Atual </td>

                <td> <?php 

						if (empty($consulta['arquivo'])) {

							echo "Sem Arquivo.";

						} else {

							echo '<a href="'.$consulta['arquivo'].'" target="_blank">'.$consulta['arquivo'].'</a>'; 

						}

					?>

                </td>

            </tr>

            <tr>

            	<td> Arquivo </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td> Link </td>

                <td> <input type="text" name="link" value="<?php echo $consulta['link']; ?>" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

        </div>