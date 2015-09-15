<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript">

		$(document).ready(function() {

				var txt = $('input[name=tipo]').val();

				if (txt == 'cat') {

					$('.mesArq1').hide();

					$('.inputCat').show();

				} else {

					$('.mesArq1').show();

					$('.inputCat').hide();	

				}

			$('input[name=tipo]').change(function() {

				var txt = $(this).val();

				if (txt == 'cat') {

					$('.mesArq1').hide();

					$('.inputCat').show();

				} else {

					$('.mesArq1').show();

					$('.inputCat').hide();	

				}

			});

		});

	</script>

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM arquivos WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/editArquivos.php" enctype="multipart/form-data">

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

            	<td>Organizar aquivos por:</td>

                <td>

                	<?php

						if ($consulta['tipo'] =='ano') {

							echo '

                	<input type="radio" name="tipo" value="ano" checked="checked" />Ano

                    <input type="radio" name="tipo" value="cat" />Categoria

							';

						} else {

							echo '

					<input type="radio" name="tipo" value="cat" checked="checked" />Categoria

                	<input type="radio" name="tipo" value="ano"/>Ano

							';

						}

					?>

                </td>

            </tr>

            <tr class="inputCat">

            	<td> Categoria </td>

                <td>

                	<input type="text" name="cat" value="<?php echo $consulta['categoria']; ?>" />

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

            <tr class="mesArq1">

            	<td> Mês </td>

                <td>

                	<?php

						$mes = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');

						$m = $consulta['mes'];

						$c = "";

						foreach($mes as $t) {

							$c++;

							if ($t == $m) {

								break;	

							}

						}

							$t = 0;

							echo '<select name="mes">';

							foreach($mes as $m) {

								$t++;

								if ($t == $c) {

									echo '<option selected="selected">'.$m.'</option>';

								} else {

									echo '<option>'.$m.'</option>';	

								}

							}

						?>

                </td>

            </tr>            

            <tr>

            	<td> Arquivo Atual: </td>

            	<td><a href="../../<?php echo $consulta['caminho']; ?>" target="_blank"><?php echo $consulta['caminho']; ?></a> </td>

            </tr>

            <tr>

            	<td> Alterar Arquivo: </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" value="<?php echo base64_decode($_GET['raiz']); ?>" name="raiz" />

            <input type="hidden" value="<?php echo base64_decode($_GET['sub']); ?>" name="sub" />

            <input type="hidden" value="<?php echo base64_decode($_GET['menu']); ?>" name="menu" />

            <input type="hidden" value="<?php echo base64_decode($_GET['link']); ?>" name="link" />

            <input type="hidden" value="<?php echo $_GET['cod']; ?>" name="cod" />

            <input type="hidden" value="<?php echo $consulta['caminho']; ?>" name="caminho" />

        </form>

        </table>