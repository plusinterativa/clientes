<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

                $sql = "SELECT * FROM login WHERE id='".$_SESSION['id']."'";

                $select = mysql_query($sql,$conexao) or die (mysql_error());

                $consulta = mysql_fetch_array($select);		

            ?>

            <table class="formUpload" style="width:920px;border:0;background:0;">

                <form method="post" action="index.php?settings=dHJ1ZQ==" enctype="multipart/form-data">

                    <tr>

                        <td colspan="3">

                            <h3 style="background:#eee;color:#333;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;width:855px;"> Perfil Pessoal  <a href="?settings=dHJ1ZQ==" style="font-family:calibri;font-size:16px;">Editar</a></h3>

                        </td>

                    </tr>

                    <tr>

                        <td rowspan="7">

                            <?php 

                                if (!empty($consulta['foto'])) {

                                    echo '<img src="../'.$consulta['foto'].'" width="220" height="172" style="border:2px solid #ddd;border-radius:5px;" />'; 

                                } else {

                                    echo 'Sem Foto.';

                                }

                            ?>

                        </td>

                        <td width="150"> Nome </td>

                        <td width="500" style="border-bottom:1px solid #000;width:438px;"> <strong><?php echo $consulta['nome']; ?></strong></td>

                        <td style="width:50px;"></td>

                    </tr>

                    <tr>

                        <td> Contatos </td>

                        <td style="border-bottom:1px solid #000;width:438px;"><strong><?php echo $consulta['contato']; ?></strong></td>

                    </tr>

                    <tr>

                        <td> E-mail </td>

                        <td style="border-bottom:1px solid #000;width:438px;"><strong><?php echo $consulta['mail']; ?></strong></td>

                    </tr>

                    <tr>

                        <td> Nacionalidade </td>

                        <td style="border-bottom:1px solid #000;width:438px;"> <strong><?php echo $consulta['nacionalidade']; ?></strong></td>

                    </tr>

                    <tr>

                        <td> Naturalidade </td>

                        <td style="border-bottom:1px solid #000;width:438px;"> <strong><?php echo $consulta['naturalidade']; ?></strong></td>

                    </tr>

                    <tr>

                        <td width="150"> Gênero </td>

                        <td style="border-bottom:1px solid #000;width:438px;"><strong><?php echo $consulta['genero']; ?></strong></td>

                    </tr>

                </form>

                </table>