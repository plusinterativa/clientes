<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="container bar-box">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<?php
				$sql = "SELECT * FROM noticias ORDER BY id DESC LIMIT 3";
				$select = mysql_query($sql,$conexao) or die (mysql_error());
				$n = mysql_num_rows($select);			
				while ($consulta=mysql_fetch_array($select)) {
				?>
				<div class="col-md-4">
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
						<p><?php echo substr($consulta['noticia'],0,400).'...'; ?></p>					
					</a>		
				</div>	
				<?php 	
				}			
				function gera_embreve($value){				
					while($value<3){
						$value++;				
					?>
						<div class="col-md-4">
							<figure>
							<img class="noticiaimg"src="imagens/embreve.jpg"
							/>
							<div class="plus">						
							<img class="plusimg"src="imagens/plus.png" alt=""><span>Em breve</span>
							</div>
							<div></div>
							</figure>
							<h1>Noticia em breve</h1>
							<p>Aguarde novidades...</p>
						</div>

			<?php	}
				}
				echo gera_embreve($n);
			?>
			</div>
		</div>
	</div>
</div>
<div class="container bar-videos-e-dicas">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-8">
					<?php
					$sql = "SELECT * FROM videos ORDER BY id DESC LIMIT 1";
					$select = mysql_query($sql,$conexao) or die (mysql_error());
					$consulta = mysql_fetch_array($select);
					$n = mysql_num_rows($select);
					if ($n <> 0) {
						?>
						<h1>Galeria de Vídeos</h1>
						<div id="video">
						<iframe width="592" height="315" src="<?php echo $consulta['url'];?>" frameborder="0" allowfullscreen></iframe>
						</div>							
						<a href="<?php echo '?menu='.base64_encode('Galeria de Vídeos');?>"><p><?php echo $consulta['descricao'];?></p></a>
						<?php
					} else {
						?>
						<h1>Galeria de Vídeos</h1>
						<div id="video">
						<iframe width="592" height="315" src="<?php echo $consulta['url'];?>" frameborder="0" allowfullscreen></iframe>
						</div>							
						<a href="<?php echo '?menu='.base64_encode('Galeria de Vídeos');?>"><p><?php echo $consulta['descricao'];?></p></a>
			<?php	} ?>				
				</div>
				<div class="col-md-4">
					<?php
						$sql = "SELECT * FROM dicasUteis ORDER BY id DESC LIMIT 6";
						$select = mysql_query($sql,$conexao) or die (mysql_error());
						$n = mysql_num_rows($select);
					?>
						<h1>Dicas</h1>
						<ul>
							<?php while ($consulta=mysql_fetch_array($select)) {?>		
							<a href="<?php echo '?menu='.base64_encode('Dicas Úteis').'&cod='.$consulta['id'];?>">
								<li>					
							<?php
								if (strlen($consulta['titulo']) > 20) {
									echo substr($consulta['titulo'],0,30).'...';
								} else {
									echo $consulta['titulo'];
								}
							?>
								</li>										
							</a>								
					<?php }?>
					<?php
						function embreve_dicas($value){
							while($value<6){
								$value++;								
							?>									
								<a href=""><li>Em Breve.</li></a>								
							<?php
							}
						}
					?>					
						<?php echo embreve_dicas($n);?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	