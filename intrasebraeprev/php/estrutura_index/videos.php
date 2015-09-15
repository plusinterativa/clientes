<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<div class="first-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Vídeos</h1>
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
						$sql = "SELECT * FROM videos WHERE id='".$_GET['cod']."'";
						$select= mysql_query($sql,$conexao) or die (mysql_error());
						$consulta = mysql_fetch_array($select);

					?>
					<h4><?php echo $consulta['titulo'];?></h4>					
				</div>
				<div class="col-md-12">
					
					<iframe class="videoprincipal"width="100%" height="450" src="<?php echo $consulta['url'];?>" frameborder="0" allowfullscreen></iframe>
											
					<p><?php echo $consulta['descricao'];?></p>	
				</div>				
				<div class="col-md-12 last-news-noticias">
					<h1>Últimos Vídeos</h1>
				</div>
				<div class="col-md-12 bar-box">
				<?php
				$sql = "SELECT * FROM videos ORDER BY id DESC LIMIT 3";
				$select= mysql_query($sql,$conexao) or die (mysql_error());
				$n = mysql_num_rows($select);
							while ($consulta = mysql_fetch_array($select)) {
								if ($consulta['id'] <> $_GET['cod']) {	?>
									<div class="col-md-4 tam-box">
										<a href="<?php echo '?menu='.base64_encode('Galeria de Vídeos').'&cod='.$consulta['id'];?>">
											<figure>
											<iframe width="100%" height="100%" src="<?php echo $consulta['url'];?>" frameborder="0" allowfullscreen></iframe>
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
							<?php
							$sql = "SELECT * FROM videos ORDER BY id DESC";
							$select= mysql_query($sql,$conexao) or die (mysql_error());
							$n = mysql_num_rows($select);
							while ($consulta = mysql_fetch_array($select)) {?>
									<div class="col-md-4 tam-box">
										<a href="<?php echo '?menu='.base64_encode('Galeria de Vídeos').'&cod='.$consulta['id'];?>">
											<figure>
											<iframe width="100%" height="100%" src="<?php echo $consulta['url'];?>" frameborder="0" allowfullscreen></iframe>
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

					<?php	}
						}
					?>
						</div>
					</div>
				</div>
    		</div>
    	</div>
    </div>
</div>