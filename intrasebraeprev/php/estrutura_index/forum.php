<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<div class="barra">FÓRUM INTRANET SEBRAE PREVIDÊNCIA</div>

	<?php

			if (isset($_GET['topic'])) {

				include('menusForum.php');

				include('mostraTopicoForum.php');

				include('formCadComentarios.php');

			} else {

			

	?>

            </div>

            <div style="position:relative;float:left; padding:20px;width:920px;margin-top:-50px;">

            <?php include("perfilForum.php"); ?>

                <div style="width:888px;padding:5px 22px 5px 10px;background:#1e84ce;border-radius:2px;text-align:right;font-family:calibri;color:#fff;font-size:14px;">

                    <?php echo 'Usuário: <strong>'.$consulta['usuario'].'</strong> - Nivel de Acesso: <strong>'.$consulta['nivel_acesso'].'</strong> - Categoria: <strong>'.$consulta['categoria'].'</strong>';?>

                </div>        

                <?php

					include('menusForum.php');

				?>

                <div class="topicos">

                    <?php 

                        echo '<div id="formArquivos"><h1 style="font-size:28px;width:710px;border-bottom:2px dotted #ddd;">Tópicos do Fórum <div style="float:right;font-size:14px;color:rgb(50,50,50)"><form method="get" action="index.php" id="formPesq">Procurar por Tópicos: <input type="text" name="pesq"><input type="hidden" name="topico"><input type="submit" value="Pesquisar" class="btnPesq"></form></div></h1></div>';

                        if(isset($_GET['acao']) and $_GET['acao'] == 'add') {

							echo '<div style="display:none;" class="validaModalForum">true</div><div class="modalForum"><a href="index.php?forum='.base64_encode('true').'" class="close">Fechar <span> [X] </span></a>  ';

                            include('formCadTopicos.php');

							echo '</div><div id="maskForum"></div>';

                        }elseif (isset($_GET['acao']) and 		$_GET['acao']== 'edit') {

							echo '<div style="display:none;" class="validaModalForum">true</div><div class="modalForum"><a href="index.php?forum='.base64_encode('true').'" class="close">Fechar <span> [X] </span></a>  ';

                            include('formEditTopicos.php');

							echo '</div><div id="maskForum"></div>';

                        } else {

                            include('testaPermissoesForum.php');

							$n = mysql_num_rows($selectPerm);

                            if ($n == 0) {					

                                echo '<div class="titleArq2" style="width:710px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#000;margin:45px 0 10px 0">Nenhum Tópico Disponível.</div>';

                            } else {

                                echo '<div class="titleArq2" style="width:710px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#000;margin:40px 0 10px 0">Listando ('.$n.') Tópicos Encontrados.</div></div>';

                                echo '<div class="listForum">

                                     <table class="listaArq" style="float:left;font-size:14px;">

                                        <tr>

                                            <td> Tópico </td>

                                            <td> Resumo da Descrição </td>

                                            <td> Data de Postagem </td>

                                        </tr>

                                    ';

                                while($consulta = mysql_fetch_array($selectPerm)) {

                                    echo '

                                        <tr>

                                            <td><a href="index.php?forum='.base64_encode('true').'&topic='.$consulta['id'].'">'.$consulta['titulo'].'</a> </td>

                                            <td>'.substr($consulta['comentario'],0,50).'...</td>

                                            <td>'.$consulta['post'].'</td>

                                        </tr>								

                                        ';								

                                }

                                echo '</table>';

                            }

                        }

                echo '</div>';

		}

	?>

        

     </div>