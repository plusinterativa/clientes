<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript">

		$(document).ready(function() {

			$('.legendRaiz').click(function() {

				$(this).next().slideToggle();

			});

		});

	</script>

    <?php

		$sqlN = "SELECT * FROM nivelAcesso WHERE id='".$_GET['cod']."'";

		$selectN = mysql_query($sqlN,$conexao) or die (mysql_error());

		$consultaN = mysql_fetch_array($selectN);

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="php/editNivelAcesso.php" enctype="multipart/form-data">

        	<tr>

            	<td colspan="3">

                	<h3> Editar Registro </h3>

                </td>

            </tr>

            <tr>

            	<td colspan="3">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Nível de Acesso </h3>

                </td>

            </tr>

        	<tr>

            	<td style="padding-left:20px;"> Nivel de Acesso </td>

                <td colspan="2"> <input type="text" name="nivel_acesso" style="width:500px" maxlength="100" value="<?php echo $consultaN['nivel_acesso']; ?>" /></td>

            </tr>

            <tr>

            	<td colspan="3">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Selecione as Permissões </h3>

                </td>

            </tr>

            <tr>

            	<td style="padding-left:20px" colspan="3"> 

                <?php

                	$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$consultaN['nivel_acesso']."'",$conexao) or die (mysql_error());

					$t=0;

					while ($consulta4 = mysql_fetch_array($select4)) {

						if ($consulta4['permissao'] == 'forum') {

							$t++;	

						} 

					}

					if ($t==1) {

							echo '<input type="checkbox" name="forum" value="forum" checked="checked" />Acesso ao Fórum';	

					} else {

							echo '<input type="checkbox" name="forum" value="forum" />Acesso ao Fórum';

					}

				?>

				</td>

            </tr>

            <tr>

            	<td style="padding-left:20px" colspan="3">

                <?php

                	$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$consultaN['nivel_acesso']."'",$conexao) or die (mysql_error());

					$t=0;

					while ($consulta4 = mysql_fetch_array($select4)) {

						if ($consulta4['permissao'] == 'sistema') {

							$t++;	

						} 

					}

					if ($t==1) {

						echo '<input type="checkbox" name="sistema" value="sistema" checked="checked" />Acesso ao Gerenciador de Conteúdo';	

					} else {

						echo '<input type="checkbox" name="sistema" value="sistema" />Acesso ao Gerenciador de Conteúdo';

					}

				?>               	

                </td>

            </tr>

            <tr>

            	<td></td>

            </tr>

            <script type="text/javascript">

				$(document).ready(function() {

					//------------- raiz --------------

					$('.raiz').change(function() {

						var id = $(this).val();

						if(this.checked) {

							$('#'+id+' input[type=checkbox]').removeAttr('disabled');

							$('#'+id+' input[type=checkbox]').attr('checked','checked');

							$('#'+id).css('color','#000');

							$('#'+id+' .legendSub').css('color','#000');

							$('#'+id+' .fieldSub').css('color','#000');							

						} else {

							$('#'+id+' input[type=checkbox]').removeAttr('checked');

							$('#'+id+' input[type=checkbox]').attr('disabled','disabled');

							$(this).removeAttr('disabled');

							$('#'+id).css('color','#ddd');

							$('#'+id+' .legendSub').css('color','#ddd');

							$('#'+id+' .fieldSub').css('color','#ddd');	

						}

					});

					//------------- submenu --------------

					$('.sub').change(function() {

						var id = $(this).val();

						if(this.checked) {

							$('#'+id+' input[type=checkbox]').removeAttr('disabled');

							$('#'+id+' input[type=checkbox]').attr('checked','checked');

							$('#'+id).css('color','#000');

						} else {

							$('#'+id+' input[type=checkbox]').removeAttr('checked');

							$('#'+id+' input[type=checkbox]').attr('disabled','disabled');

							$(this).removeAttr('disabled');

							$('.raiz').removeAttr('disabled');

							$('#'+id).css('color','#ddd');

						}

					});

				});

			</script>

            <tr>

            	<td colspan="3">

            	<?php

					//pesquisa a raiz

					$sql = "SELECT * FROM menus WHERE categoria='raiz'";

					$select = mysql_query($sql,$conexao) or die (mysql_error());

					$i=0;

					$ii=0;

					$iii=0;

					//lista a raiz

					while($consulta = mysql_fetch_array($select)) {

						echo '<fieldset class="fieldRaiz" id="'.str_replace(" ","_",$consulta['menu']).'"><legend class="legendRaiz">';

						//----- checkbox raiz -------

						$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$consultaN['nivel_acesso']."'",$conexao) or die (mysql_error());

						$t=0;

						while ($consulta4 = mysql_fetch_array($select4)) {

							if ($consulta4['permissao'] == $consulta['menu']) {

								$t++;

							}

						}	

						if ($t==1) {

							echo '<input type="checkbox" name="raiz'.$i.'" value="'.str_replace(" ","_",$consulta['menu']).'" class="raiz" checked="checked" />';

						} else {

							echo '<input type="checkbox" name="raiz'.$i.'" value="'.str_replace(" ","_",$consulta['menu']).'" class="raiz" />';

						}					

						//------fim ---------

						echo $consulta['menu'].' (+) </legend><div class="containerRaiz" style="display:none">';

						//pesquisa os submenus

						$sql2 = "SELECT * FROM menus WHERE categoria='submenu' and raiz='".$consulta['menu']."'";

						$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

						//lista os submenus

						while($consulta2 = mysql_fetch_array($select2)) {

							echo '<fieldset class="fieldSub" id="'.str_replace(" ","_",$consulta2['menu']).'"><legend class="legendSub">';

							//----- checkbox sub -------

							$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$consultaN['nivel_acesso']."'",$conexao) or die (mysql_error());

							$t=0;

							while ($consulta4 = mysql_fetch_array($select4)) {

								if ($consulta4['permissao'] == $consulta2['menu']) {

									$t++;

								}

							}

							if ($t==1) {

								echo '<input type="checkbox" name="sub'.$ii.'" value="'.str_replace(" ","_",$consulta2['menu']).'" class="sub" checked="checked" />';

							} else {

								echo '<input type="checkbox" name="sub'.$ii.'" value="'.str_replace(" ","_",$consulta2['menu']).'" class="sub" />';

							}						

							//------fim ---------							

							echo $consulta2['menu'].'</legend>';

							//pesquisa os menus

							$sql3 = "SELECT * FROM menus WHERE categoria='menu' and raiz='".$consulta['menu']."' and submenu='".$consulta2['menu']."'";

							$select3 = mysql_query($sql3,$conexao) or die (mysql_error());

							//lista os menus

							while($consulta3 = mysql_fetch_array($select3)) {

								echo '<div class="checkNiveis">';

								//----- checkbox sub -------

								$select4 = mysql_query("SELECT permissao FROM permissoesNivelAcesso WHERE nivel_acesso='".$consultaN['nivel_acesso']."'",$conexao) or die (mysql_error());

								$t=0;

								while ($consulta4 = mysql_fetch_array($select4)) {

									if ($consulta4['permissao'] == $consulta3['menu']) {

										$t++;

									}

								}

								if ($t==1) {

									echo '<input type="checkbox" name="menu'.$iii.'" value="'.$consulta3['menu'].'" checked="checked" />';

								} else {

									echo '<input type="checkbox" name="menu'.$iii.'" value="'.$consulta3['menu'].'" />';

								}						

								//------fim ---------

								echo $consulta3['menu'].'</div>';

								$iii++;

							} // fecha o while dos menus

							echo '</fieldset>';

							$ii++;

						} // fecha o while do submenu

						echo '</div></fieldset>';

						$i++;	

					} // fecha o while da raiz

					

				?>

                </td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" /></td>

            </tr>

            <input type="hidden" name="cod" value="<?php echo $_GET['cod']; ?>" />

        </form>

        </table>

        </div>
    </div>