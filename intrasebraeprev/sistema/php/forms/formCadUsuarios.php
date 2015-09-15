<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<div class="table-responsive">

    <table class="table">

        <form method="post" action="sistema.php?menu=dXN1YXJpb3M=&acao=add" enctype="multipart/form-data">

        	<tr>

            	<td colspan="2">

                	<h3> Novo Usuário </h3>

                </td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Informações Pessoais </h3>

                </td>

            </tr>

        	<tr>

            	<td width="150"> Nome </td>

                <td> <input type="text" name="nome" maxlength="35" value="<?php if (isset($_POST['nome'])) { echo $_POST['nome']; } ?>" /></td>

            </tr>

            <tr>

            	<td> Contatos </td>

                <td><input type="text" name="contato" maxlength="100" value="<?php if (isset($_POST['contato'])) { echo $_POST['contato']; } ?>" /></td>

            </tr>

            <tr>

            	<td> E-mail </td>

                <td> <input type="text" name="mail" value="<?php if (isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /></td>

            </tr>

            <tr>

            	<td> Nacionalidade </td>

                <td> <input type="text" name="nacional" maxlength="100" value="<?php if (isset($_POST['nacional'])) { echo $_POST['nacional']; } ?>" /></td>

            </tr>

            <tr>

            	<td> Naturalidade </td>

                <td> <input type="text" name="natural" value="<?php if (isset($_POST['natural'])) { echo $_POST['natural']; } ?>" /></td>

            </tr>

            <tr>

            	<td> Gênero </td>

                <td>

                	<?php

                    	if(isset($_POST['gen'])) {

							if ($_POST['gen'] == "Masculino") {

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

						} else {

							echo '

								<label for="male">Masculino</br>
									<input id="male" type="radio" name="gen" value="Masculino"  />
									</label>
                    				
									<label for="female">Feminino</br>
									<input id="female" type="radio" name="gen" value="Feminino"/>
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

							if (isset($_POST['diaDtN'])) {

								if ($i == $_POST['diaDtN']) {

									echo '<option selected="selected">'.$i.'</option>';

								} else {

									echo '<option>'.$i.'</option>';	

								}

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

							if (isset($_POST['mesDtN'])) {

								if ($i == $_POST['mesDtN']) {

									echo '<option selected="selected">'.$i.'</option>';

								} else {

									echo '<option>'.$i.'</option>';	

								}

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

							if (isset($_POST['anoDtN'])) {

								if ($ai == $_POST['anoDtN']) {

									echo '<option selected="selected">'.$ai.'</option>';

								} else {

									echo '<option>'.$ai.'</option>';	

								}

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

            	<td>Foto</td>

                <td><input type="file" name="foto" /></td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Informações Profissionais </h3>

                </td>

            </tr>

            <tr>

            	<td> Cargo </td>

                <td> <input type="text" maxlength="100" name="cargo" value="<?php if (isset($_POST['cargo'])) { echo $_POST['cargo']; } ?>" /></td>

            </tr>

            <tr>

            	<td>Curriculo</td>

                <td><input type="file" name="curriculo" /></td>

            </tr>

            <tr>

            	<td> Categoria </td>

                <td>

                	<select name="cat">

						<?php

                            if (isset($_POST['cat'])) {

                                switch($_POST['cat']) {

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

                            } else {

								echo '

									<option selected="selected">Empregados</option>

                        			<option>Gestores</option>

                        			<option>Conselheiros</option>

									';	

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

									$('option.sub:nth-child(1)').text('Deliberativo');

									$('option.sub:nth-child(2)').text('Fiscal');

								} else {

									if ($('select[name=cat]').val() == 'Gestores') {

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

            <tr class="unidade" style="display:none;">

            	<td>Unidade</td>

                <td>

                	<select name="unidade">

						<?php

                            $sql4 = "SELECT abreviatura,unidade FROM unidades ORDER BY unidade";

                            $select4 = mysql_query($sql4,$conexao) or die (mysql_error());

                            while($consulta4=mysql_fetch_array($select4)) {

								if ($consulta4['unidade'] == 'Abase' or $consulta4['unidade']== 'Sebrae Previdencia') {

									echo '<option>'.$consulta4['abreviatura'].'</option>';	

								} else {

									echo '<option>'.$consulta4['unidade'].' ('.$consulta4['abreviatura'].')'.'</option>';

								}

                            }

                        ?>

                    </select>

                </td>

            </tr>

            <tr class="subcategoria" style="display:none;">

            	<td>Subcategoria</td>

                <td>

                	<select name="subcategoria">

                    	<option selected="selected" class="sub"></option>

                        <option class="sub"></option>

                    </select>

                </td>

            </tr>

            <tr class="obs" style="display:none;">

            	<td>Observações</td>

                <td>

                	<input type="text" name="obs" maxlenght="100" />

               	</td>

            </tr>

            <tr>

            	<td colspan="2">

                	<h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:620px;"> Informações de Acesso </h3>

                </td>

            </tr>

            <tr>

            	<td> Usuário </td>

                <td> <input type="text" name="user" maxlength="50" value="<?php if (isset($_POST['user'])) { echo $_POST['user']; } ?>" /> </td>

            </tr>

			<tr>

            	<td> Senha Padrão </td>

                <td> <label>prev123</label>

                <input type="hidden" name="pass" value="prev123" />

                </td>

            </tr>

            <tr>

            	<td> Nivel de Acesso </td>

                <td>

                	<select name="nivel_acesso">

                    	<?php

                            $sql = "SELECT nivel_acesso FROM nivelAcesso ORDER BY nivel_acesso";

							$select = mysql_query($sql,$conexao) or die (mysql_error());

							while ($consulta = mysql_fetch_array($select)) {

								if(isset($_POST['nivel_acesso'])) {

									if($_POST['nivel_acesso'] == $consulta['nivel_acesso']) {

										echo '<option selected="selected">'.$consulta['nivel_acesso'].'</option>';

									} else {

										echo '<option>'.$consulta['nivel_acesso'].'</option>';	

									}

								} else {

									echo '<option>'.$consulta['nivel_acesso'].'</option>';

								}

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
      </div>  

        <?php include("php/cadUser.php"); ?>