<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/cadMenusIntra.php" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Novo Registro </h3>

                </td>

            </tr>

        	<tr>

            	<td> Titulo do Menu </td>

                <td> <input type="text" name="menu" /></td>

            </tr>

            <tr>

            	<td> Categoria </td>

                <td> 

                	<select name="cat" />

                    	<option selected="selected">menu</option>

                        <option>submenu</option>

                        <option>raiz</option>

                    </select>

                </td>

            </tr>

            <script type="text/javascript">

				$(document).ready(function() {

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

                	<input type="checkbox" name="validaMenu" value="true" /> Este Submenu terá menus ligados a ele.

                </td>

            </tr>

            <tr class="raiz">

            	<td> Raiz </td>

                <td>

                	<select name="raiz" />

                	<?php

						$select = mysql_query("SELECT menu FROM menus WHERE categoria='raiz' ORDER BY menu",$conexao) or die (mysql_error());

						while($consulta=mysql_fetch_array($select)) {

							echo '<option>'.$consulta['menu'].'</option>';				

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

						$select = mysql_query("SELECT menu,submenu FROM menus WHERE categoria='submenu' ORDER BY menu",$conexao) or die (mysql_error());

						while($consulta=mysql_fetch_array($select)) {

							if (empty($consulta['submenu'])) {

								echo '<option>'.$consulta['menu'].'</option>';				}

						}

						

					?>

                    </select>

                </td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Cadastrar" name="cad" /></td>

            </tr>

        </form>

        </table>

        </div>