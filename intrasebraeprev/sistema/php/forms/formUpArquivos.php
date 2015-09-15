<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript">

		$(document).ready(function() {

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
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/uploadArquivos.php" enctype="multipart/form-data">

        	<tr class="bg-blue">

            	<th colspan="2">

                	<h3> Novo Registro </h3>

                </th>

            </tr>

        	<tr>

            	<td> Título </td>

                <td> <input type="text" name="titulo" /></td>

            </tr>

            <tr>

            	<td>Organizar aquivos por:</td>

                <td>
					<label for="ano">
                	<input id="ano"type="radio" name="tipo" value="ano" checked="checked" />
                	<p>Ano</p>
                	</label>                
					<label for="cat">
                    <input id="cat"type="radio" name="tipo" value="cat" />
                    <p>Categoria</p>
					</label>
				</td>
            </tr>

            <tr class="inputCat" style="display:none;">

            	<td> Categoria </td>

                <td>

                	<input type="text" name="cat" />

                </td>

            </tr>

            <tr>

            	<td> Ano </td>

                <td> 

                	<select name="ano">

                    	<?php

							$aa = date("Y");

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

						$mes = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');

						$m = date("M");

						$c = "";

						foreach($mes as $t) {

							$c++;

							if ($t == $m) {

								break;	

							}

						}

							$t = 0;

							$mes = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');

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

                    </select>

                </td>

            </tr>            

            <tr>

            	<td> Arquivo </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Cadastrar" name="cad" /></td>

            </tr>

            <input type="hidden" value="<?php echo base64_decode($_GET['raiz']); ?>" name="raiz" />

            <input type="hidden" value="<?php echo base64_decode($_GET['cat']); ?>" name="sub" />

            <input type="hidden" value="<?php echo base64_decode($_GET['menu']); ?>" name="menu" />

            <input type="hidden" value="<?php echo base64_decode($_GET['link']); ?>" name="link" />

        </form>

        </table>
    </div>