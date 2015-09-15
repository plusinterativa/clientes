<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		$select = mysql_query("SELECT * FROM menus WHERE id='".$_GET['cod']."'",$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/editMenusIntra.php" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Editar Registro </h3>

                </td>

            </tr>

        	<tr>

            	<td> Titulo do Menu </td>

                <td> <input type="text" name="menu" value="<?php echo $consulta['menu']; ?>"/></td>

            </tr>

            <tr>

            	<td> Categoria </td>

                <td> 

                	<select name="cat" />

                    	<?php

                        	switch ($consulta['categoria']) {

								case "menu":

									echo '<option selected="selected">menu</option>

                        				  <option>submenu</option>

                        				  <option>raiz</option>

										  ';

									break;

								case "submenu":

									echo '<option>menu</option>

                        				  <option selected="selected">submenu</option>

                        				  <option>raiz</option>

										  ';

									break;

								case "raiz":

									echo '<option>menu</option>

                        				  <option>submenu</option>

                        				  <option selected="selected">raiz</option>

										  ';

									break;

							}

						?>

                    </select>

                </td>

            </tr>

            <script type="text/javascript">

				$(document).ready(function() {

					var cat = $('select[name=cat]').val();

					if(cat=='menu') {

						$('.validaMenu').hide();

						$('.raiz').show();

						$('.sub').show();	

					}

					if(cat=='submenu') {

						$('.validaMenu').show();

						$('.raiz').show();

						$('.sub').hide();	

					}

					if(cat=='raiz') {

						$('.validaMenu').hide();

						$('.raiz').hide();

						$('.sub').hide();	

					}

					$('select[name=cat]').change(function() {

						var cat = $(this).val();

						if(cat=='menu') {

							$('.validaMenu').hide();

							$('.raiz').show();

							$('.sub').show();	

						}

						if(cat=='submenu') {

							$('.validaMenu').show();

							$('.raiz').show();

							$('.sub').hide();	

						}

						if(cat=='raiz') {

							$('.validaMenu').hide();

							$('.raiz').hide();

							$('.sub').hide();	

						}

					});

				});

			</script>

            <tr class="validaMenu" style="display:none;">

            	<td colspan="2">

                	<?php

						if (empty($consulta['submenu'])) {

							echo '<input type="checkbox" name="validaMenu" value="true" checked="checked" /> Este Submenu terá menus ligados a ele.';	

						} else {

							echo '<input type="checkbox" name="validaMenu" value="true" /> Este Submenu terá menus ligados a ele.';

						}

                	?>

                </td>

            </tr>

            <tr class="raiz">

            	<td> Raiz </td>

                <td>

                	<select name="raiz" />

                	<?php

						$selectM = mysql_query("SELECT menu FROM menus WHERE categoria='raiz' ORDER BY menu",$conexao) or die (mysql_error());

						while($consultaM=mysql_fetch_array($selectM)) {

							if ($consulta['raiz'] == $consultaM['menu']) {

							echo '<option selected="selected">'.$consultaM['menu'].'</option>';

							} else {

								echo '<option>'.$consultaM['menu'].'</option>';	

							}

						}

						

					?>

                    </select>

                </td>

            </tr>

            <tr class="sub">

            	<td> Submenu </td>

                <td>

                	<select name="sub" />

                	<?php

						$selectS = mysql_query("SELECT menu,submenu FROM menus WHERE categoria='submenu' ORDER BY menu",$conexao) or die (mysql_error());

						while($consultaS=mysql_fetch_array($selectS)) {

							if ($consulta['submenu'] == $consultaS['menu']) {

								echo '<option selected="selected">'.$consultaS['menu'].'</option>';

							} else {

								echo '<option>'.$consultaS['menu'].'</option>';	

							}

						}

					?>

                    </select>

                </td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $consulta['id']; ?>" />

        </form>

        </table>

        </div>