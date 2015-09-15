<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<?php

		include("../php/conexao.php");

		$sql = "SELECT * FROM login WHERE id='".$_GET['cod']."'";

		$select = mysql_query($sql,$conexao) or die (mysql_error());

		$consulta = mysql_fetch_array($select);		

	?>
<div class="table-responsive">
    <table class="table">
        <form method="post" action="php/editUser.php" enctype="multipart/form-data">
        	<tr>
            	<td colspan="2">
                	<h3> Editar Usuário </h3>
                </td>
            </tr>

            <tr>

            	<td colspan="2">

            <h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Informações Pessoais </h3>

            	</td>

        	<tr>

            	<td width="150"> Nome </td>

                <td> <input type="text" maxlength="35" name="nome" value="<?php echo $consulta['nome']; ?>" /></td>

            </tr>

            <tr>

            	<td> Contatos </td>

                <td><input type="text" maxlength="100" name="contato" value="<?php echo $consulta['contato']; ?>" /></td>

            </tr>

            <tr>

            	<td> E-mail </td>

                <td> <input type="text" name="mail" value="<?php echo $consulta['mail']; ?>" /></td>

            </tr>

            <tr>

            	<td> Nacionalidade </td>

                <td> <input type="text" maxlength="100" name="nacional" value="<?php echo $consulta['nacionalidade']; ?>" /></td>

            </tr>

            <tr>

            	<td> Naturalidade </td>

                <td> <input type="text" name="natural" value="<?php echo $consulta['naturalidade']; ?>" /></td>

            </tr>

            <tr>

            	<td> Gênero </td>

                <td>

                	<?php

							if ($consulta['genero'] == "Masculino") {

								echo '
									
									<label for="male">Masculino</br>
									<input id="male" type="radio" name="gen" value="Masculino" checked="checked" />
									</label>
                    				
									<label for="female">Feminino</br>
									<input id="female" type="radio" name="gen" value="Feminino" />
									</label>

								';

							} else {

								echo '

									<label for="male">Masculino</br>
									<input id="male" type="radio" name="gen" value="Masculino"  />
									</label>
                    				
									<label for="female">Feminino</br>
									<input id="female" type="radio" name="gen" value="Feminino" checked="checked"/>
									</label>

								';

							}

					?>

                </td>

            </tr>

            <tr>

            	<td> Data de Nascimento </td>

                <td> 

                	<select name="diaDtN">

                	<?php

						for($i=1;$i<=31;$i++) {

							if ($i == $consulta['diaDtN']) {

								echo '<option selected="selected">'.$i.'</option>';

							} else {

								echo '<option>'.$i.'</option>';	

							}

						}

					?>

                    </select>

                    /

                    <select name="mesDtN">

                	<?php

						for($i=1;$i<=12;$i++) {

							if ($i<10) {

								$i = "0".$i;	

							}

							if ($i == $consulta['mesDtN']) {

								echo '<option selected="selected">'.$i.'</option>';

							} else {

								echo '<option>'.$i.'</option>';	

							}

						}

					?>

                    </select>

                    /

                    <select name="anoDtN">

                	<?php

						$aa = date("Y");

						echo $aa;

						$ai = $aa-80;

						$af = $aa-16;

						while($ai <= $af) {

							if ($ai == $consulta['anoDtN']) {

								echo '<option selected="selected">'.$ai.'</option>';

							} else {

								echo '<option>'.$ai.'</option>';	

							}

							$ai++;

						}

					?>

                    </select>

                </td>

            </tr>

            <tr>

            	<td>Foto Atual</td>

                <td>

					<?php 

						if (!empty($consulta['foto'])) {

							echo '<img src="../'.$consulta['foto'].'" width="270" height="200" />'; 

						} else {

							echo 'Sem Foto.';

						}

					?>

                </td>

            </tr>

            <tr>

            	<td>Alterar Foto</td>

                <td><input type="file" name="foto" /></td>

            </tr>

            <tr>

            	<td colspan="2">

            <h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Informações Profissionais </h3>

            	</td>

            <tr>

            	<td> Cargo </td>

                <td> <input type="text" name="cargo" maxlength="100" value="<?php echo $consulta['cargo']; ?>" /></td>

            </tr>

            <tr>

            	<td> Curriculo</td>

                <td>

                	<?php

						if (!empty($consulta['curriculo'])) {

                			echo '<a href="../'.$consulta['curriculo'].'" target="_blank">'.$consulta['curriculo'].'</a>';

						} else {

							echo 'Sem Curriculo.';	

						}

					?>

                </td>

            </tr>

            <tr>

            	<td> Alterar Curriculo</td>

                <td><input type="file" name="curriculo" /></td>

            </tr>

            <tr>

            	<td> Categoria </td>

                <td>

                	<select name="cat">

						<?php

							switch($consulta['categoria']) {

								case "Empregados":

									echo '

										<option selected="selected">Empregados</option>

										<option>Gestores</option>

										<option>Conselheiros</option>

										';

									break;

								case "Gestores":

									echo '

										<option>Empregados</option>

										<option  selected="selected">Gestores</option>

										<option>Conselheiros</option>

										';

									break;

								case "Conselheiros":

									echo '

										<option>Empregados</option>

										<option>Gestores</option>

										<option selected="selected">Conselheiros</option>

										';

									break;

							}

                        ?>                	

                    </select>

                </td>

            </tr>

            <script type="text/javascript">

						$(document).ready(function() {

							if ($('select[name=cat]').val() == 'Conselheiros') {

									$('.unidade').show();

									$('.subcategoria').show();	

									$('.obs').show();

									if ($('select[name=subcategoria]').val() == "") {

										$('option.sub:nth-child(1)').text('Deliberativo');

										$('option.sub:nth-child(2)').text('Fiscal');

									}

								} else {

									if ($('select[name=cat]').val() == 'Gestores') {

										if ($('select[name=subcategoria]').val() == '') {

											$('option.sub:nth-child(1)').text('Cadastro e Arrecadação');

											$('option.sub:nth-child(2)').text('Empréstimos');

									}

										$('.unidade').show();

										$('.subcategoria').show();

										$('.obs').hide();

									} else {

										$('.unidade').hide();

										$('.subcategoria').hide();	

										$('.obs').hide();

									}

								}

							$('select[name=cat]').change(function() {

								if ($(this).val() == 'Conselheiros') {

									$('.unidade').show();

									$('.subcategoria').show();	

									$('.obs').show();

									$('option.sub:nth-child(1)').text('Deliberativo');

									$('option.sub:nth-child(2)').text('Fiscal');

								} else {

									if ($(this).val() == 'Gestores') {

										$('.unidade').show();

										$('.subcategoria').show();

										$('.obs').hide();

										$('option.sub:nth-child(1)').text('Cadastro e Arrecadação');

										$('option.sub:nth-child(2)').text('Empréstimos');	

									} else {

										$('.unidade').hide();

										$('.subcategoria').hide();	

										$('.obs').hide();

									}

								}

							})

						});

					</script>

            <tr class="unidade">

            	<td>Unidade</td>

                <td>

                	<select name="unidade">

						<?php

                            $sql4 = "SELECT * FROM unidades ORDER BY unidade";

                            $select4 = mysql_query($sql4,$conexao) or die (mysql_error());

                            while($consulta4=mysql_fetch_array($select4)) {

								if ($consulta4['unidade'] == 'Abase' or $consulta4['unidade']== 'Sebrae Previdencia') {

									if ($consulta4['unidade'] == $consulta['unidade']) {

										echo '<option selected="selected">'.$consulta4['abreviatura'].'</option>';	

									} else {

										echo '<option>'.$consulta4['abreviatura'].'</option>';

									}

								} else {

									if ($consulta4['unidade'].' ('.$consulta4['abreviatura'].')' == $consulta['unidade']) {

										echo '<option selected="selected">'.$consulta4['unidade'].' ('.$consulta4['abreviatura'].')'.'</option>';	

									} else {

										echo '<option>'.$consulta4['unidade'].' ('.$consulta4['abreviatura'].')'.'</option>';

									}

								}

                            }

                        ?>

                    </select>

                </td>

            </tr>

            <tr class="subcategoria">

            	<td>Subcategoria</td>

                <td>

                	<select name="subcategoria">

                    <?php

						if ($consulta['categoria'] == 'Conselheiros') {

							if (empty($consulta['subcategoria'])) {

								echo '

									<option selected="selected" class="sub">Deliberativo</option>

                        			<option class="sub">Fiscal</option>

									';

							} elseif ($consulta['subcategoria'] == 'Fiscal') {

								echo '

									<option selected="selected" class="sub">Fiscal</option>

                        			<option class="sub">Deliberativo</option>

									';

							} else {

								echo '

									<option selected="selected" class="sub">Deliberativo</option>

                        			<option class="sub">Fiscal</option>

									';

								

							}

						} elseif ($consulta['categoria'] == 'Gestores') {

							if (empty($consulta['subcategoria'])) {

								echo '

									<option selected="selected" class="sub">Cadastro e Arrecadação</option>

									<option class="sub">Empréstimos</option>

									';

							} elseif ($consulta['subcategoria'] == 'Empréstimos') {

								echo '

									<option selected="selected" class="sub">Empréstimos</option>

                        			<option class="sub">Cadastro e Arrecadação</option>

									';

							} else {

								echo '

									<option selected="selected" class="sub">Cadastro e Arrecadação</option>

									<option class="sub">Empréstimos</option>

									';

								

							}

						} else {

								echo '

									<option selected="selected" class="sub"></option>

									<option class="sub"></option>

									';	

						}

                    	

					?>

                    </select>

                </td>

            </tr>

            <tr class="obs">

            	<td>Observações</td>

                <td>

                	<input type="text" name="obs" maxlenght="100"  value="<?php echo $consulta['obs']; ?>"/>

               	</td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Informações de Acesso </h3>

                </td>

            </tr>

            <tr>

            	<td> Usuário </td>

                <td> <input type="text" maxlength="50" name="user" value="<?php echo $consulta['usuario']; ?>" /> </td>

            </tr>

            <tr>

            	<td> Nivel de Acesso </td>

                <td>

                	<select name="nivel_acesso">

                    	<?php

                            $sql2 = "SELECT nivel_acesso FROM nivelAcesso ORDER BY nivel_acesso";

							$select2 = mysql_query($sql2,$conexao) or die (mysql_error());

							while ($consulta2 = mysql_fetch_array($select2)) {

								if($consulta['nivel_acesso'] == $consulta2['nivel_acesso']) {

										echo '<option selected="selected">'.$consulta2['nivel_acesso'].'</option>';

								} else {

									echo '<option>'.$consulta2['nivel_acesso'].'</option>';

								}

							}

                        ?>

                    </select>

                </td>

            </tr>

            <tr>

            	<td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" value="<?php echo $_GET['cod']; ?>" name="cod" />

        </form>

        </table>

        </div>