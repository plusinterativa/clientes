<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div class="table-responsive">

    <table class="table">

            <form method="post" action="?menu=<?php echo base64_encode('Galeria de Fotos'); ?>=&acao=add" enctype="multipart/form-data">

        	<tr class="bg-blue">

            	<th colspan="2">

                	<h3> Novo Registro </h3>

                </th>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:480px;"> Cadastrar Novo Album </h3>

                </td>

            </tr>

            <tr>

            	<td>Nome do Album</td>

                <td> <input type="text" name="album" maxlength="100" value="<?php if (isset($_POST['album'])) { echo $_POST['album']; } ?>" /></td>

            </tr>

            <tr>

            	<td>Titulo do Album</td>                

                <td> 

                	<input type="text" name="titleAlbum" maxlength="100" value="<?php if (isset($_POST['titleAlbum'])) { echo $_POST['titleAlbum']; } ?>" />

                </td>

            </tr>

            <tr>

            	<td>Data</td>                

                <td> 

                	<input type="text" name="dataAlbum" maxlength="20" value="<?php if (isset($_POST['dataAlbum'])) { echo $_POST['dataAlbum']; } ?>" />

                </td>

            <tr>

            	<td>Miniatura do Album</td>

                <td> <input type="file" name="min" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Cadastrar" name="cad" /></td>

            </tr>

        </form>

        </table>

        </div>

        <?php include("php/cadAlbum.php"); ?>

        

        