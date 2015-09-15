<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		if (!isset($_GET['cod'])) {

			echo '<h3 style="text-align:left;width:780px;padding:10px;color:#fff;font-size:20px;font-family:handel,arial;background:#333;border-radius:5px;"> Selecione o Tópico que você deseja Editar: </h3>';

			$sql = "SELECT * FROM topicos WHERE usuario='".$_SESSION['usuario']."' ORDER BY id DESC";

			$select = mysql_query($sql,$conexao) or die (mysql_error());

			$n = mysql_num_rows($select);

			if ($n==0) {

				echo '<div class="titleArq2" style="width:800px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#fff;margin:10px 0 10px 0;text-align:left;">Nenhum Tópico de <strong>'.$_SESSION['usuario'].'</strong> Encontrado.</div>';

			} else {

				echo '<div class="titleArq2" style="width:800px;border-top:2px dotted #999;border-bottom:2px dotted #999;font-size:16px;color:#999;margin:10px 0 10px 0;text-align:left;">Listando ('.$n.') Tópicos de <strong>'.$_SESSION['usuario'].'</strong> Encontrados.</div>';

				echo '

				 <table class="listaArq" style="float:left;font-size:14px;width:800px;background:#fff;">

					<tr>

						<td> Tópico </td>

						<td> Resumo da Descrição </td>

						<td> Data de Postagem </td>

					</tr>

				';

				while($consulta = mysql_fetch_array($select)) {

					echo '

						<tr>

							<td><a href="index.php?forum='.base64_encode('true').'&acao=edit&cod='.$consulta['id'].'">'.$consulta['titulo'].'</a> </td>

							<td>'.substr($consulta['comentario'],0,50).'...</td>

							<td>'.$consulta['post'].'</td>

						</tr>								

						';								

				}

				echo '</table>';

			}

		} else {

			$sql = "SELECT * FROM topicos WHERE id='".$_GET['cod']."'";

			$select = mysql_query($sql,$conexao) or die (mysql_error());

			$consulta = mysql_fetch_array($select);

	?>

    <table class="formUpload">

        <form method="post" action="?forum=dHJ1ZQ==&acao=edit&cod=<?php echo $_GET['cod']; ?>" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Editar Tópico  |  <a class="voltar" href="?forum=<?php echo base64_encode('true'); ?>&acao=edit">< Voltar</a> </h3>

                </td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Informações sobre o Tópico </h3>

                </td>

            </tr>

        	<tr>

            	<td width="150"> Titulo do Tópico </td>

                <td> <input type="text" name="titulo" maxlength="100" value="<?php echo $consulta['titulo']; ?>" /></td>

            </tr>

            <tr>

            	<td> Permissões: </td>

                <td> 

                	<select name="permissoes">

                    	<?php

							$sql2 = "SELECT * FROM permissoesForum";

							$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

							while($consulta2=mysql_fetch_array($select2)) {

								if ($consulta2['permissao'] == $consulta['permissoes']) {

									echo '<option selected="selected">'.$consulta2['permissao'].'</option>';

								} else {

									echo '<option>'.$consulta2['permissao'].'</option>';

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

                	<textarea name="comentario" style="width:450px;"><?php echo $consulta['comentario']; ?></textarea>

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

                	<input type="text" name="link1" value="<?php echo $consulta['Link1']; ?>" />

                	<a href="2" class="otherLink" id="otherLink2">Outro Link</a>

                </td>

            </tr>

            <tr id="link2">

            	<td>Link 2</td>

                <td> 

                	<input type="text" name="link2" value="<?php echo $consulta['Link2']; ?>" />

                	<a href="3" class="otherLink" id="otherLink3">Outro Link</a>

                </td>

            </tr>

            <tr id="link3">

            	<td>Link 3</td>

                <td> 

                	<input type="text" name="link3" value="<?php echo $consulta['Link3']; ?>" />

                	<a href="4" class="otherLink" id="otherLink4">Outro Link</a>

                </td>

            </tr>

            <tr id="link4">

            	<td>Link 4</td>

                <td> 

                	<input type="text" name="link4" value="<?php echo $consulta['Link4']; ?>" />

                	<a href="5" class="otherLink" id="otherLink5">Outro Link</a>

                </td>

            </tr>

            <tr id="link5">

            	<td>Link 5</td>

                <td> 

                	<input type="text" name="link5" value="<?php echo $consulta['Link5']; ?>" />

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

                <td>Arquivo 1:</td>

                <td class="linkarq1"> <?php if(empty($consulta['Arquivo1'])) { echo "Sem Arquivo."; } else { echo '<a href="'.$consulta['Arquivo1'].'" target="_blank">Abrir Arquivo</a>'; }; ?> </td>

            </tr>

            <tr>

                <td>Alterar Arquivo 1:</td>

                <td> 

                    <input type="file" name="Arquivo1" />

                    <a href="2" class="otherArquivo" id="otherArquivo2">Outro Arquivo</a>

                </td>

            </tr>

            <tr class="Arquivo2">

                <td>Arquivo 2:</td>

                <td class="linkarq2"> <?php if(empty($consulta['Arquivo2'])) { echo "Sem Arquivo."; } else { echo '<a href="'.$consulta['Arquivo2'].'" target="_blank">Abrir Arquivo</a>'; }; ?> </td>

            </tr>

            <tr class="Arquivo2">

                <td>Alterar Arquivo 2:</td>

                <td> 

                    <input type="file" name="Arquivo2" />

                    <a href="3" class="otherArquivo" id="otherArquivo3">Outro Arquivo</a>

                </td>

            </tr>

            <tr class="Arquivo3">

                <td>Arquivo 3:</td>

                <td class="linkarq3"> <?php if(empty($consulta['Arquivo3'])) { echo "Sem Arquivo."; } else { echo '<a href="'.$consulta['Arquivo3'].'" target="_blank">Abrir Arquivo</a>'; }; ?> </td>

            </tr>

            <tr class="Arquivo3">

                <td>Alterar Arquivo 3:</td>

                <td> 

                    <input type="file" name="Arquivo3" />

                    <a href="4" class="otherArquivo" id="otherArquivo4">Outro Arquivo</a>

                </td>

            </tr>

            <tr class="Arquivo4">

                <td>Arquivo 4:</td>

                <td class="linkarq4"> <?php if(empty($consulta['Arquivo4'])) { echo "Sem Arquivo."; } else { echo '<a href="'.$consulta['Arquivo4'].'" target="_blank">Abrir Arquivo</a>'; }; ?> </td>

            </tr>

            <tr class="Arquivo4">

                <td>Alterar Arquivo 4:</td>

                <td> 

                    <input type="file" name="Arquivo4" />

                    <a href="5" class="otherArquivo" id="otherArquivo5">Outro Arquivo</a>

                </td>

            </tr>

            <tr class="Arquivo5">

                <td>Arquivo 5:</td>

                <td class="linkarq5"> <?php if(empty($consulta['Arquivo5'])) { echo "Sem Arquivo."; } else { echo '<a href="'.$consulta['Arquivo5'].'" target="_blank">Abrir Arquivo</a>'; }; ?> </td>

            </tr>

            <tr class="Arquivo5">

                <td>Alterar Arquivo 5:</td>

                <td> 

                    <input type="file" name="Arquivo5" />

                </td>

            </tr>

            <tr class="textoArquivo">

            	<td colspan="2" align="center"></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

    <?php 

		}

		include("php/editTopicos.php");

	?>