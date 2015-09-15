<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<div id="conteudoIndex">

		<?php

            	echo '<div id="formArquivos"><h1 style="font-size:28px;width:920px;border-bottom:2px dotted #ddd;">Categoria: <div style="float:right;font-size:14px;color:rgb(50,50,50)"><form method="get" action="index.php">Procurar por Arquivos: <input type="text" name="pesq"><input type="submit" value="Pesquisar" class="btnPesq"><input type="hidden" name="arq"/></form></div></h1><h1 style="font-size:20px;width:920px;"><span style="font-size:16px;color:#333;"> Conselhos > Biblioteca Digital > </span> Biblioteca Digital </h1>';

				$sql = "SELECT * FROM biblioDigital";

				$select= mysql_query($sql,$conexao) or die (mysql_error());	

				$n = mysql_num_rows($select);

				if ($n == 0) {

					echo '<div class="titleArq">Nenhum Arquivo Encontrado em: <strong>Biblioteca Digital</strong>.</div>';	

				} else {

					echo '<div class="titleArq">Listando ('.$n.') Arquivos Encontrados em <strong>Biblioteca Digital</strong>:</div>';

										

					//---------------------------------------------------------------------

//---------------------------------------------------------------------

					//seleciona todos os meses conforme o ano

						$sqlAno = "SELECT DISTINCT categoria FROM biblioDigital ORDER BY categoria";

						$selectAno= mysql_query($sqlAno,$conexao) or die (mysql_error());					

					$numAno = mysql_num_rows($selectAno);

					$i=0;

					//ano

					while ($consultaAno = mysql_fetch_array($selectAno)) {

						echo '<div class="anoArq"> + '.$consultaAno['categoria'].'</div><div class="itenArq">';

							$sqlMes = "SELECT DISTINCT ano FROM biblioDigital WHERE categoria='".$consultaAno['categoria']."' ORDER BY ano DESC";

							$selectMes = mysql_query($sqlMes,$conexao) or die (mysql_error());

						//mes

						while ($consultaMes = mysql_fetch_array($selectMes)) {

							echo '<div class="mesArq"> + '.$consultaMes['ano'].'</div>';

							$sqlArq = "SELECT titulo,arquivo FROM biblioDigital WHERE categoria='".$consultaAno['categoria']."' and ano='".$consultaMes['ano']."'";

							$selectArq = mysql_query($sqlArq,$conexao) or die (mysql_error());

						echo '<div class="listArq"><table class="listaArq"><tr>

										<td>Titulo</td>

										<td>Arquivo</td>

									</tr>';

						while ($consultaArq = mysql_fetch_array($selectArq)) {

							echo '

									<tr>

										<td>'.$consultaArq['titulo'].'</td>

										<td><a href="'.$consultaArq['arquivo'].'" target="_blank">Abrir Arquivo</a></td>

									</tr>								

								';

							} // fecha o while Arquivos

							echo '</table></div>';

						} //fecha o while mes

						echo '</div>';

					} // fecha o while ano

//---------------------------------------------------------------------

//---------------------------------------------------------------------	

				}

			

		?>

        </div>

	</div>