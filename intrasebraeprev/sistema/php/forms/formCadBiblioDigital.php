<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	

    <table class="formUpload">

        <form method="post" action="php/cadBiblioDigital.php" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Novo Registro </h3>

                </td>

            </tr>

        	<tr>

            	<td> Título </td>

                <td> <input type="text" name="titulo" maxlength="100" /></td>

            </tr>

            <tr>

           		<td> Categoria </td>

                <td> <input type="text" name="categoria" maxlength="100" /> </td>

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

            <tr>

            	<td> Arquivo </td>

                <td> <input type="file" name="arq" /></td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Cadastrar" name="cad" /></td>

            </tr>

        </form>

        </table>