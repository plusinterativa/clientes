<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <table class="formUpload">

        <form method="post" action="?forum=dHJ1ZQ==&acao=add" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Novo Tópico </h3>

                </td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Informações sobre o Tópico </h3>

                </td>

            </tr>

        	<tr>

            	<td width="150"> Titulo do Tópico </td>

                <td> <input type="text" name="titulo" maxlength="100" value="<?php if(isset($_POST['titulo'])) { echo $_POST['titulo']; } ?>" /></td>

            </tr>

            <tr>

            	<td> Permissões: </td>

                <td> 

                	<select name="permissoes">

                    	<?php

							$sql2 = "SELECT categoria FROM login WHERE id='".$_SESSION['id']."'";

							$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

							$consulta2 = mysql_fetch_array($select2);

							$sql = "SELECT * FROM permissoesForum";

							$select = mysql_query($sql,$conexao) or die (mysql_error());

							while($consulta=mysql_fetch_array($select)) {

								if ($consulta['permissao'] == $consulta2['categoria']) {

									echo '<option selected="selected">'.$consulta['permissao'].'</option>';

								} else {

									echo '<option>'.$consulta['permissao'].'</option>';

								}

							}

						?>

                    </select>

                </td>

            </tr>

            <tr>

            	<td colspan="2"> Descrição do Tópico </td>

            </tr>

            <tr>

                <td colspan="2">

                	<textarea name="comentario" style="width:450px;"><?php if(isset($_POST['comentario'])) { echo $_POST['comentario']; } ?></textarea>

                </td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Links </h3>

                </td>

            </tr>

            <tr>

            	<td>Link 1</td>

                <td> 

                	<input type="text" name="link1" value="<?php if(isset($_POST['link1'])) { echo $_POST['link1']; } ?>" />

                	<a href="2" class="otherLink" id="otherLink2">Outro Link</a>

                </td>

            </tr>

            <tr id="link2">

            	<td>Link 2</td>

                <td> 

                	<input type="text" name="link2" value="<?php if(isset($_POST['link2'])) { echo $_POST['link2']; } ?>" />

                	<a href="3" class="otherLink" id="otherLink3">Outro Link</a>

                </td>

            </tr>

            <tr id="link3">

            	<td>Link 3</td>

                <td> 

                	<input type="text" name="link3" value="<?php if(isset($_POST['link3'])) { echo $_POST['link3']; } ?>" />

                	<a href="4" class="otherLink" id="otherLink4">Outro Link</a>

                </td>

            </tr>

            <tr id="link4">

            	<td>Link 4</td>

                <td> 

                	<input type="text" name="link4" value="<?php if(isset($_POST['link4'])) { echo $_POST['link4']; } ?>" />

                	<a href="5" class="otherLink" id="otherLink5">Outro Link</a>

                </td>

            </tr>

            <tr id="link5">

            	<td>Link 5</td>

                <td> 

                	<input type="text" name="link5" value="<?php if(isset($_POST['link5'])) { echo $_POST['link5']; } ?>" />

                </td>

            </tr>

            <tr class="textoLink">

            	<td colspan="2" align="center"></td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Arquivos </h3>

                </td>

            </tr>

            <tr>

            	<td>Arquivo 1</td>

                <td> 

                	<input type="file" name="Arquivo1" />

                	<a href="2" class="otherArquivo" id="otherArquivo2">Outro Arquivo</a>

                </td>

            </tr>

            <tr id="Arquivo2">

            	<td>Arquivo 2</td>

                <td> 

                	<input type="file" name="Arquivo2" />

                	<a href="3" class="otherArquivo" id="otherArquivo3">Outro Arquivo</a>

                </td>

            </tr>

            <tr id="Arquivo3">

            	<td>Arquivo 3</td>

                <td> 

                	<input type="file" name="Arquivo3" />

                	<a href="4" class="otherArquivo" id="otherArquivo4">Outro Arquivo</a>

                </td>

            </tr>

            <tr id="Arquivo4">

            	<td>Arquivo 4</td>

                <td> 

                	<input type="file" name="Arquivo4" />

                	<a href="5" class="otherArquivo" id="otherArquivo5">Outro Arquivo</a>

                </td>

            </tr>

            <tr id="Arquivo5">

            	<td>Arquivo 5</td>

                <td> 

                	<input type="file" name="Arquivo5" />

                </td>

            </tr>

            <tr class="textoArquivo">

            	<td colspan="2" align="center"></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Cadastrar" name="cad" /></td>

            </tr>

        </form>

        </table>

        <?php include("php/cadTopicos.php"); ?>