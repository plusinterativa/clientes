<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript">

		$(document).ready(function() {

			$('.legendRaiz').click(function() {

				$(this).next().slideToggle();

			});

		});

	</script>

    <?php

			include("php/cadNivelAcesso.php");

	?>
<div class="table-responsive">
    <table class="table">

        <form method="post" action="?menu=bml2ZWxfYWNlc3Nv&acao=add" enctype="multipart/form-data">

        	<tr>

            	<td colspan="3">

                	<h3> Novo Registro </h3>

                </td>

            </tr>

            <tr>

            	<td colspan="3">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Digite o Nível de Acesso </h3>

                </td>

            </tr>

        	<tr>

            	<td style="padding-left:20px;"> Nivel de Acesso </td>

                <td colspan="2"> <input type="text" name="nivel_acesso" style="width:500px" maxlength="100" value="<?php if(isset($_POST['nivel_acesso'])) { echo $_POST['nivel_acesso']; } ?>" /></td>

            </tr>

            <tr>

            	<td colspan="3">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Selecione as Permissões </h3>

                </td>

            </tr>

            <tr>

            	<td style="padding-left:20px" colspan="3"> <input type="checkbox" name="forum" value="forum" checked="checked" />Acesso ao Fórum </td>

            </tr>

            <tr>

            	<td style="padding-left:20px" colspan="3"><input type="checkbox" name="sistema" value="sistema" checked="checked" /> Acesso ao Gerenciador de Conteúdo               	</td>

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

						echo '<fieldset class="fieldRaiz" id="'.str_replace(" ","_",$consulta['menu']).'"><legend class="legendRaiz"><input type="checkbox" name="raiz'.$i.'" value="'.str_replace(" ","_",$consulta['menu']).'" class="raiz" checked="checked" />'.$consulta['menu'].' (+) </legend><div class="containerRaiz" style="display:none">';

						//pesquisa os submenus

						$sql2 = "SELECT * FROM menus WHERE categoria='submenu' and raiz='".$consulta['menu']."'";

						$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

						//lista os submenus

						while($consulta2 = mysql_fetch_array($select2)) {

							echo '<fieldset class="fieldSub" id="'.str_replace(" ","_",$consulta2['menu']).'"><legend class="legendSub"><input type="checkbox" name="sub'.$ii.'" value="'.str_replace(" ","_",$consulta2['menu']).'" class="sub" checked="checked" />'.$consulta2['menu'].'</legend>';

							//pesquisa os menus

							$sql3 = "SELECT * FROM menus WHERE categoria='menu' and raiz='".$consulta['menu']."' and submenu='".$consulta2['menu']."'";

							$select3 = mysql_query($sql3,$conexao) or die (mysql_error());

							//lista os menus

							while($consulta3 = mysql_fetch_array($select3)) {

								echo '<div class="checkNiveis"><input type="checkbox" name="menu'.$iii.'" value="'.$consulta3['menu'].'" checked="checked" />'.$consulta3['menu'].'</div>';

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

            	<td colspan="2"><input type="submit" value="Cadastrar" /></td>

            </tr>

        </form>

        </table>

        </div>

        