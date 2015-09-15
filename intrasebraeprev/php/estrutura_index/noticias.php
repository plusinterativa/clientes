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
					if (isset($_GET['cod'])) {
						$sql = "SELECT * FROM noticias WHERE id='".$_GET['cod']."'";
						$select= mysql_query($sql,$conexao) or die (mysql_error());
						$consulta = mysql_fetch_array($select);

					?>
					<h4><?php echo $consulta['titulo'];?></h4>
					<h5>Postado em <?php echo $consulta['post'];?> FONTE: 
						<strong><?php echo $consulta['fonte'];?></strong>
					</h5>
					
				</div>
				<div class="col-md-12">
					<?php if (!empty($consulta['foto'])){ ?>
					<img class="imgprincipal"src="<?php echo $consulta['foto'];?>"/>
					<p><?php }	echo $consulta['noticia'];?></p>	
				</div>				
				<div class="col-md-12 last-news-noticias">
					<h1>Últimas Notícias</h1>
				</div>
				<div class="col-md-12 bar-box">
				<?php
				$sql = "SELECT * FROM noticias ORDER BY id DESC LIMIT 3";
				$select= mysql_query($sql,$conexao) or die (mysql_error());
				$n = mysql_num_rows($select);
							while ($consulta = mysql_fetch_array($select)) {
								if ($consulta['id'] <> $_GET['cod']) {	?>
									<div class="col-md-4 tam-box">
										<a href="<?php echo '?menu='.base64_encode('Notícias').'&cod='.$consulta['id'];?>">
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
							$sql = "SELECT * FROM noticias ORDER BY id DESC";
							$select= mysql_query($sql,$conexao) or die (mysql_error());
							$n = mysql_num_rows($select);
							while ($consulta = mysql_fetch_array($select)) {?>
									<div class="col-md-4 tam-box">
										<a href="<?php echo '?menu='.base64_encode('Notícias').'&cod='.$consulta['id'];?>">
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