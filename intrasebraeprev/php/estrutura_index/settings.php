<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<div class="first-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h1>Configurações</h1>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

	<?php

        $sql = "SELECT * FROM login WHERE id='".$_SESSION['id']."'";

        $select = mysql_query($sql,$conexao) or die (mysql_error());

        $consulta = mysql_fetch_array($select);     

    ?>
<div class="table-responsive">
    <table class="table">

       <form method="post" action="index.php?settings=dHJ1ZQ==" enctype="multipart/form-data">

            <tr>

                <td colspan="3">

                    <h3> Informações de sua Conta de Usuário </h3>

                </td>

            </tr>

            <tr>

                <td colspan="3">

                    <h3> Informações Pessoais </h3>

                </td>

            </tr>

            <tr>

                <td rowspan="6">

                    <?php 

                        if (!empty($consulta['foto'])) {

                            echo '<img src="../'.$consulta['foto'].'" width="270" height="200" style="border:2px solid #ddd;border-radius:5px;" />'; 

                        } else {

                            echo 'Sem Foto.';

                        }

                    ?>

                </td>

                <td > Nome </td>

                <td > <input type="text" maxlength="35" name="nome" value="<?php echo $consulta['nome']; ?>" style="width:240px;" /></td>

            </tr>

            <tr>

                <td> Contatos </td>

                <td><input type="text" maxlength="100" style="width:240px;" name="contato" value="<?php echo md5($consulta['contato']); ?>" /></td>

            </tr>

            <tr>

                <td> E-mail </td>

                <td> <input type="text" name="mail" style="width:240px;" value="<?php echo $consulta['mail']; ?>" /></td>

            </tr>

            <tr>

                <td> Nacionalidade </td>

                <td> <input type="text" maxlength="100" style="width:240px;" name="nacional" value="<?php echo $consulta['nacionalidade']; ?>" /></td>

            </tr>

            <tr>

                <td> Naturalidade </td>

                <td> <input type="text" name="natural" style="width:240px;" value="<?php echo $consulta['naturalidade']; ?>" /></td>

            </tr>

            <tr>

                <td > Gênero </td>

                <td>

                    <?php

                            if ($consulta['genero'] == "Masculino") {

                                echo '

                                    <input type="radio" name="gen" value="Masculino" checked="checked" />Masculino

                                    <input type="radio" name="gen" value="Feminino" />Feminino

                                ';

                            } else {

                                echo '

                                    <input type="radio" name="gen" value="Masculino" />Masculino

                                    <input type="radio" name="gen" value="Feminino" checked="checked" />Feminino

                                ';

                            }

                    ?>

                </td>

            </tr>

            <tr>

                <td><input type="file" name="foto" /></td>

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

        </table>

        <table class="table">

            

            <tr>

                <td colspan="2">

                <h3> Informações Profissionais </h3>

                </td>

            </tr>

            <tr>

                <td> Cargo </td>

                <td> <input type="text" name="cargo" maxlength="100" value="<?php echo $consulta['cargo']; ?>"  /></td>

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

                <td colspan="2">

                    <h3> Informações de Acesso </h3>

                </td>

            </tr>

            <tr>

                <td> Usuário </td>

                <td> <input type="text"  maxlength="50" name="user" value="<?php echo $consulta['usuario']; ?>" /> </td>

            </tr>

            <tr>

                <td> Senha Atual </td>

                <td> <div class="mostrarSenha" style="cursor:pointer;color:#1e84ce;">Visualizar</div><div style="display:none;"><?php echo $consulta['senha']; ?></div> </td>

            </tr>

            <tr>

                <td> Alterar Senha </td>

                <td><input type="password"  name="pass" maxlength="50"  /></td>

            </tr>

            <tr>

                <td> Confirmar Senha </td>

                <td><input type="password"  name="confirm_pass" maxlength="50" /></td>

            </tr>

            <tr>

                <td colspan="2"><input type="submit" value="Atualizar" name="edit" /></td>

            </tr>

            <input type="hidden" value="<?php echo $_SESSION['id']; ?>" name="cod" />

        </form>


        </table>

        </div>
		</div>
	</div>
</div>
        <?php

			include("php/editSettings.php");

		?>