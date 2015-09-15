<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<div id="conteudoIndex">

		<?php



				$pesq = $_GET['pesq'];

            	echo '<div id="formArquivos"><h1 style="font-size:28px;width:920px;border-bottom:2px dotted #ddd;">Pesquisa de Tópicos <div style="float:right;font-size:14px;color:rgb(50,50,50)"><form method="get" action="index.php" id="formPesq">Procurar por Tópicos: <input type="text" name="pesq"><input type="hidden" name="topico"><input type="submit" value="Pesquisar" class="btnPesq"></form></div></h1>';

				echo '<div class="titleArq2" style="width:920px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#000;margin:10px 0 10px 0">Resultados ao Pesquisar por: <strong>"'.$pesq.'"</strong></div>';

				$itensPesq = array('titulo','nome','usuario','post');

				$i = 0;

				$r = 0;

				while ($i <= 3) {

					$sql = "SELECT * FROM topicos WHERE ".$itensPesq[$i]." LIKE '%".$pesq."%' ORDER BY ".$itensPesq[$i];

					$select= mysql_query($sql,$conexao) or die (mysql_error());

					$n = mysql_num_rows($select);

					$r = $r+$n;

					if ($n == 0) {

						echo '<div class="titleArq2" style="color:rgb(50,50,50)">Nenhum Tópico Encontrado ao Pesquisar: <strong>'.$itensPesq[$i].'</strong>.</div>';	

					} else {

						echo '<div class="anoArq" style="font-weight:100;">+ Listando <strong> ('.$n.')</strong> Registros Encontrados ao Pesquisar Tópicos por <strong>'.$itensPesq[$i].' </strong></div><div id="itenArq"><div class="listArq2"><table class="listaArq"><tr><td>Titulo</td><td>Criado Por</td><td>Resumo da Descrição</td><td>Post</td></tr>';

						while ($consulta = mysql_fetch_array($select)) {

							echo '

								<tr>

									<td><a href="?forum='.base64_encode('true').'&topic='.$consulta['id'].'">'.$consulta['titulo'].'</a></td>

									<td>'.$consulta['nome'].'</td>

									<td>'.substr($consulta['comentario'],0,200).'</td>

									<td>'.$consulta['post'].'</td>

								</tr>

								';

						} // fecha o while dos arquivos

						echo '</table></div></div>';

					} // fecha o else do $n

					$i++;

				} // fecha o while do $i

				echo '<div class="titleArq2" style="width:920px;border-top:2px dotted #ddd;border-bottom:2px dotted #ddd;font-size:16px;color:#000;margin:10px 0 10px 0">Foram Encontrados ('.$r.') Resultados para: <strong>"'.$pesq.'"</strong></div>';

			

		?>

		</div>

      </div>