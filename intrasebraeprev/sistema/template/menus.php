<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include "../location.php";?>
<div class="bar-lateral hidden-sm hidden-xs">
	<img class="logo-cp" src="<?php echo $home_url;?>/imagens/logo-cpainel.png" alt="">
	<div class="bar-menu-cp">
		<a href="">Intranet SebraePrev</a>
	</div>
	<div>
	<!--------------------- Slideshow ---------------->
	     <ul class="scroll">
			<li class="user">
				<span class="current-option usuario-sprite">
			      <a href="#">Usu&aacute;rios</a>			     
				</span>
   				<ul class="darken-gray">
					<li class="sub-down"><span><a href="?menu=<?php echo base64_encode('usuarios'); ?>">Contas de usu&aacute;rios</a></li>				 	
					<li class="sub-down"><span><a href="?menu=<?php echo base64_encode('nivel_acesso'); ?>"> Niveis de Acesso </a></span></li>
				</ul>
			</li>
			<li>
				<span class="gray-option menu-sprite">
					<a href="#">Menus</a>
				</span>
				<ul class="darken-gray">
					<li class="sub-down">
						<span>
							<a href="?menu=<?php echo base64_encode('menusIntra'); ?>" class="subtitulo2"> Menus da Intranet </a>
						</span>
					</li>
				</ul>
			</li>
			<li>
				<span class="gray-option paginas-sprite"><a href="#">P&aacute;ginas</a></span>
			</li>
			<li class="gray-option sub-paginas inicio">
				<span><a href="#">In&iacute;cio</a></span>
				<ul class="darken-gray">
					<li class="sub-down"><span><a href="?menu=<?php echo base64_encode('pop-up'); ?>" class="subtitulo2"> Pop-Up </a></span></li>
					<li class="sub-down"><span><a href="?menu=<?php echo base64_encode('slide'); ?>" class="subtitulo2"> Slide Show </a></span></li>
					<li class="sub-down"><span><a href="?menu=<?php echo base64_encode('links'); ?>" class="subtitulo2"> Links </a></span></li>
					<li class="sub-down"><span><a href="?menu=<?php echo base64_encode('endRodape'); ?>" class="subtitulo2">Endere&ccedil;o Rodape </a></span></li>
				</ul>
			</li>
<!--------------------------------------------------------------------
--------------------------- FIM Inicio --------------------------
##################################################################-->
	<?php
   		include("../php/conexao.php");
   		//pesquisa os menus raiz
   		$sql = "SELECT * FROM menus WHERE categoria='raiz' ORDER BY id";
		$select = mysql_query($sql,$conexao) or die (mysql_error());
		while ($consulta = mysql_fetch_array($select)) : ?>
			<!-- //escreve o menu raiz -->
			<li class="gray-option sub-paginas inicio">
				<span><?php echo $consulta['menu'];?></span>
				<ul class="darken-gray list1">
				<?php 
				$sql2 = "SELECT * FROM menus WHERE categoria='submenu' and raiz='".$consulta['menu']."'";
				$select2 = mysql_query($sql2,$conexao) or die (mysql_error());
				while ($consulta2 = mysql_fetch_array($select2)):
				//escreve o submenu
					if (empty($consulta2['submenu'])):?>
							<li class="sub-down">
								<span class="sub-span">
								+<?php echo $consulta2['menu'];?>
								</span>
							<ul class="darken-gray list2">
							<?php 
							//pesquisa os menus
								$sql3 = "SELECT * FROM menus WHERE categoria='menu' and raiz='".$consulta['menu']."' and submenu='".$consulta2['menu']."' ORDER BY menu";
								$select3 = mysql_query($sql3,$conexao) or die (mysql_error());
								while ($consulta3 = mysql_fetch_array($select3)):
									if ($consulta3['menu'] <> "Equipe SEBRAE PREVIDENCIA"):?>
										<li class="sub-sub-down">
											<span>
												<a href="?raiz=<?php echo base64_encode($consulta3['raiz']);?>&cat=<?php echo base64_encode($consulta3['submenu']);?>&menu=<?php echo base64_encode($consulta3['menu']);?>&link=<?php echo base64_encode($consulta3['sigla']);?>'">
												<?php echo $consulta3['menu'];?>												
												</a>
											</span>
										</li>
								<?php
									endif;
								endwhile;
								?> 
							</ul>
							</li>				
				<?php  else :
							if ($consulta2['menu'] <> "Gestores" and $consulta2['menu'] <> "Membros do Conselho") {?>
								<li class="sub-down">
									<span>
										<a href="?raiz=<?php echo base64_encode($consulta2['raiz']);?>&cat=<?php echo base64_encode($consulta2['submenu']);?>&menu=<?php echo base64_encode($consulta2['menu']);?>&link=<?php echo base64_encode($consulta2['sigla']);?>" class="subtitulo2">
											<?php echo $consulta2['menu'];?>										
										</a>
									</span>
								</li>
							<?php 
							}			
					endif;		
							
				endwhile;
				?>
				</ul>
		<?php endwhile; ?>
			</li>			
		</ul>
	</div>
</div>
<ul class="menu-cpanel hidden-md hidden-lg">
			<li> <img class="x-icon"src="<?php echo $home_url;?>/imagens/xicon.png" alt=""></li>
   			<li class="li-first">
				<span>
			      <a href="#">Usu&aacute;rios</a>			     
				</span>
   				<ul class="ul-one">
					<li><span><a href="?menu=<?php echo base64_encode('usuarios'); ?>">Contas de usu&aacute;rios</a></li>				 	
					<li><span><a href="?menu=<?php echo base64_encode('nivel_acesso'); ?>"> Niveis de Acesso </a></span></li>
				</ul>
			</li>
			<li class="li-first">
				<span>
					<a href="#">Menus</a>
				</span>
				<ul class="ul-one">
					<li>
						<span>
							<a href="?menu=<?php echo base64_encode('menusIntra'); ?>" class="subtitulo2"> Menus da Intranet </a>
						</span>
					</li>
				</ul>
			</li>			
			<li class="li-first">
				<span><a href="#">P&aacute;ginas In&iacute;cio</a></span>
				<ul class="ul-one">
					<li><span><a href="?menu=<?php echo base64_encode('pop-up'); ?>" class="subtitulo2"> Pop-Up </a></span></li>
					<li><span><a href="?menu=<?php echo base64_encode('slide'); ?>" class="subtitulo2"> Slide Show </a></span></li>
					<li><span><a href="?menu=<?php echo base64_encode('links'); ?>" class="subtitulo2"> Links </a></span></li>
					<li><span><a href="?menu=<?php echo base64_encode('endRodape'); ?>" class="subtitulo2">Endere&ccedil;o Rodape </a></span></li>
				</ul>
			</li>
<!--------------------------------------------------------------------
--------------------------- FIM Inicio --------------------------
##################################################################-->

	
	<?php
   		include("../php/conexao.php");
   		//pesquisa os menus raiz
   		$sql = "SELECT * FROM menus WHERE categoria='raiz' ORDER BY id";
		$select = mysql_query($sql,$conexao) or die (mysql_error());
		while ($consulta = mysql_fetch_array($select)) : ?>
			<!-- //escreve o menu raiz -->
			<li class="li-first">
				<span><?php echo $consulta['menu'];?></span>
				<ul class="ul-one">
				<?php 
				$sql2 = "SELECT * FROM menus WHERE categoria='submenu' and raiz='".$consulta['menu']."'";
				$select2 = mysql_query($sql2,$conexao) or die (mysql_error());
				while ($consulta2 = mysql_fetch_array($select2)):
				//escreve o submenu
					if (empty($consulta2['submenu'])):?>
							<li>
								<span>
								+<?php echo $consulta2['menu'];?>
								</span>
							<ul class="ul-two">
							<?php 
							//pesquisa os menus
								$sql3 = "SELECT * FROM menus WHERE categoria='menu' and raiz='".$consulta['menu']."' and submenu='".$consulta2['menu']."' ORDER BY menu";
								$select3 = mysql_query($sql3,$conexao) or die (mysql_error());
								while ($consulta3 = mysql_fetch_array($select3)):
									if ($consulta3['menu'] <> "Equipe SEBRAE PREVIDENCIA"):?>
										<li>
											<span>
												<a href="?raiz=<?php echo base64_encode($consulta3['raiz']);?>&cat=<?php echo base64_encode($consulta3['submenu']);?>&menu=<?php echo base64_encode($consulta3['menu']);?>&link=<?php echo base64_encode($consulta3['sigla']);?>'">
												<?php echo $consulta3['menu'];?>
												</a>
											</span>
										</li>
								<?php
									endif;
								endwhile;
								?> 
							</ul>
							</li>				
				<?php  else :
							if ($consulta2['menu'] <> "Gestores" and $consulta2['menu'] <> "Membros do Conselho") {?>
								<li>
									<span>
										<a href="?raiz=<?php echo base64_encode($consulta2['raiz']);?>&cat=<?php echo base64_encode($consulta2['submenu']);?>&menu=<?php echo base64_encode($consulta2['menu']);?>&link=<?php echo base64_encode($consulta2['sigla']);?>" class="subtitulo2">
											<?php echo $consulta2['menu'];?>
										</a>
									</span>
								</li>
							<?php 
							}			
					endif;		
							
				endwhile;
				?>
				</ul>
		<?php endwhile; ?>
			</li>			
</ul>
