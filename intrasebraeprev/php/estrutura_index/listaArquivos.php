<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php
	$r = $_GET['raiz'];
	$c = $_GET['cat'];
	$m = $_GET['menu'];
	$raiz = base64_decode($r);
	$sub = base64_decode($c);
	$menu = base64_decode($m);  
	?>
	<div class="first-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h1><?php echo $menu;?></h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container bar-normas">
		<div class="row ">
			<div class="col-md-10 col-md-offset-1">	
				<div class="list-arq">
				<?php       
				$sql = "SELECT tipo FROM arquivos WHERE menu='".$menu."'";
				$select= mysql_query($sql,$conexao) or die (mysql_error());	
				$n = mysql_num_rows($select);
				if ($n == 0) {	?>					
						<div class="nullregister"><h1>Nenhum Arquivo Encontrado na Categoria:<strong> <?php echo $menu?></strong>.</h1></div>
				<?php
				} else {
					$sql = "SELECT id FROM arquivos WHERE menu='".$menu."' and tipo='ano'";
					$select= mysql_query($sql,$conexao) or die (mysql_error());	
					$n = mysql_num_rows($select);
					if ($n<>0) {								
					//---ANO---//
						//seleciona todos os anos
						$sqlAno = "SELECT DISTINCT ano FROM arquivos WHERE menu='".$menu."' and tipo='ano'";
						$selectAno= mysql_query($sqlAno,$conexao) or die (mysql_error());					
						$numAno = mysql_num_rows($selectAno);
						$i=0;
						//ano
						while ($consultaAno = mysql_fetch_array($selectAno)) { ?>
						
							<div class="year">
								<span><?php echo $consultaAno['ano'];?></span>
								<?php
								$sqlMes = "SELECT DISTINCT mes FROM arquivos WHERE tipo='ano' and menu='".$menu."' and ano='".$consultaAno['ano']."'";
								$selectMes = mysql_query($sqlMes,$conexao) or die (mysql_error());
							//mes
							while ($consultaMes = mysql_fetch_array($selectMes)) { ?>
									<div class="month">
										<span><?php echo $consultaMes['mes'];?></span>									
									<?php
									$sqlArq = "SELECT titulo,caminho FROM arquivos WHERE tipo='ano' and menu='".$menu."' and ano='".$consultaAno['ano']."' and mes='".$consultaMes['mes']."'";
									$selectArq = mysql_query($sqlArq,$conexao) or die (mysql_error());?>																				
									<?php 
									while ($consultaArq = mysql_fetch_array($selectArq)) { ?>						
										<div class="linked">
											<a href="<?php echo $consultaArq['caminho'];?>" target="_blank">
												<span><?php echo $consultaArq['titulo'];?></span>
											</a>
										</div>
									</div>
							</div>
													
								<?php } // fecha o while Arquivos?>	
							<?php } //fecha o while mes?>
						<?php } // fecha o while ano?>
						
					<?php }

//---------------------------------------------------------------------

//---------------------------------------------------------------------

							//--------------------------------------------------------------------- CATEGORIA

//---------------------------------------------------------------------					

						$sql = "SELECT id FROM arquivos WHERE menu='".$menu."' and tipo='cat'";
						$select= mysql_query($sql,$conexao) or die (mysql_error());	
						$n = mysql_num_rows($select);
						if ($n<>0) {?>
						<!--<div class="titleArq">Listando (<?php echo $n;?>) Arquivos Organizados por: <strong>Categoria</strong>:</div>-->
						<?php 
						//seleciona todas as Categorias						
						$sqlCat = "SELECT DISTINCT categoria FROM arquivos WHERE menu='".$menu."' and tipo='cat' ORDER BY categoria";
						$selectCat= mysql_query($sqlCat,$conexao) or die (mysql_error());					
						$numCat= mysql_num_rows($selectCat);
						$i=0;
						//ano
						while ($consultaCat = mysql_fetch_array($selectCat)) {?>
							<div class="year">
								<span><?php echo $consultaCat['categoria'];?></span>								
								<?php
								$sqlAno = "SELECT DISTINCT ano FROM arquivos WHERE menu='".$menu."' and categoria='".$consultaCat['categoria']."' and tipo='cat' ORDER BY ano DESC";
								$selectAno= mysql_query($sqlAno,$conexao) or die (mysql_error());
							//mes
							while ($consultaAno = mysql_fetch_array($selectAno)) {?>
								<div class="month">
								 	<span><?php echo $consultaAno['ano'];?></span>
								<?php 
								$sqlArq = "SELECT titulo,caminho FROM arquivos WHERE menu='".$menu."' and categoria='".$consultaCat['categoria']."' and ano='".$consultaAno['ano']."' and tipo='cat'";
								$selectArq = mysql_query($sqlArq,$conexao) or die (mysql_error());?>
																	
								<?php 
							while ($consultaArq = mysql_fetch_array($selectArq)) {?>									
									<div class="linked">
										<a href="<?php echo $consultaArq['caminho'];?>" target="_blank">
											<span><?php echo $consultaArq['titulo'];?></span>
										</a>	
									</div>																	
							<?php } // fecha o while Arquivos?>
								</div>								
						<?php } //fecha o while mes?>
							</div>
			<?php		} // fecha o while ano
					}
//---------------------------------------------------------------------

//---------------------------------------------------------------------				

				} // fecha o else
				?>
				</div> 
			</div>
		</div>
	</div>
</div>

	