<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$m = $_GET['menu'];
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
<div class="container page">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-12">
		<?php
            	//echo '<div id="formArquivos"><h1 style="font-size:28px;width:920px;border-bottom:2px dotted #ddd;">Categoria: <div style="float:right;font-size:14px;color:rgb(50,50,50)"><form method="get" action="index.php">Procurar por Dicas: <input type="text" name="pesq"><input type="submit" value="Pesquisar" class="btnPesq"><input type="hidden" name="dica"/></form></div></h1><h1 style="font-size:20px;width:920px;"><span style="font-size:16px;color:#333;">Interatividade > Dicas Úteis > </span>Dicas Úteis</h1>';
				if (isset($_GET['cod'])) {
					$sql = "SELECT * FROM dicasUteis WHERE id='".$_GET['cod']."'";
					$select= mysql_query($sql,$conexao) or die (mysql_error());
					$consulta = mysql_fetch_array($select);?>					
						<h4><?php echo $consulta['titulo'];?></h4>					
					</div>
					<div class="col-md-12">
						<?php
						if (!empty($consulta['foto'])) {?>
							<img class="imgprincipal"src="<?php echo $consulta['foto'];?>" >	
						<?php }	echo $consulta['dica'];?>
					</div>
					<?php 
					$sql = "SELECT * FROM dicasUteis ORDER BY id DESC LIMIT 10";
					$select= mysql_query($sql,$conexao) or die (mysql_error());?>
					<div class="col-md-12 last-news-noticias">
						<h1>Outras Dicas</h1>
					</div>

					<div class="col-md-12 bar-box">
						<div class="row">
					
				<?php
				$sql = "SELECT * FROM dicasUteis ORDER BY id DESC LIMIT 3";
				$select= mysql_query($sql,$conexao) or die (mysql_error());
				$n = mysql_num_rows($select);
							while ($consulta = mysql_fetch_array($select)) {
								if ($consulta['id'] <> $_GET['cod']) {	?>
									<div class="col-md-4 tam-box">
										<a href="<?php echo '?menu='.base64_encode('Dicas Úteis').'&cod='.$consulta['id'];?>">
											<figure>
											<img class="noticiaimg"src="<?php 
															if (!empty($consulta['foto'])) {
																echo $consulta['foto'];
															}
														?>"
											/>
											<div class="plus">						
											<img class="plusimg"src="imagens/plus.png" alt=""><span>Leia Mais</span>
											</div>
											<div></div>
											</figure>
											<h1>				
											<?php
												if (strlen($consulta['titulo']) > 20) {
													echo substr($consulta['titulo'],0,50).'...';
												} else {
													echo $consulta['titulo'];
												}
											?>				
											</h1>
										</a>
									</div>
								<?php
								}
							}
						echo gera_embreve($n,4);
						}
						else{ ?>
							<div class="col-md-12 bar-box">
								<div class="row">
							<?php
							$sql = "SELECT * FROM dicasUteis ORDER BY id DESC";
							$select= mysql_query($sql,$conexao) or die (mysql_error());
							$n = mysql_num_rows($select);
							while ($consulta = mysql_fetch_array($select)) {?>
									<div class="col-md-4 tam-box">
										<a href="<?php echo '?menu='.base64_encode('Dicas Úteis').'&cod='.$consulta['id'];?>">
											<figure>
											<img class="noticiaimg"src="<?php 
															if (!empty($consulta['foto'])) {
																echo $consulta['foto'];
															}
														?>"
											/>
											<div class="plus">						
											<img class="plusimg"src="imagens/plus.png" alt=""><span>Leia Mais</span>
											</div>
											<div></div>
											</figure>
											<h1>				
											<?php
												if (strlen($consulta['titulo']) > 20) {
													echo substr($consulta['titulo'],0,50).'...';
												} else {
													echo $consulta['titulo'];
												}
											?>				
											</h1>
										</a>
									</div>
								<?php								
							}
							echo gera_embreve($n,6);
						}			
						function gera_embreve($value,$valuemax){				
							while($value<$valuemax){
								$value++;				
							?>
								<div class="col-md-4 tam-box">
									<figure>
									<img class="noticiaimg"src="imagens/embreve.jpg"
									/>
									<div class="plus">						
									<img class="plusimg"src="imagens/plus.png" alt=""><span>Em breve</span>
									</div>
									<div></div>
									</figure>
									<h1>Aguarde novidades...</h1>
									
								</div>

					<?php	} ?>
							</div>
						</div>

			<?php	} ?>						
					</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>