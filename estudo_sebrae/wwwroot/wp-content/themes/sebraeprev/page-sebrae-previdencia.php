<?php get_header('single');?>
            	
	<div id="main" class="" style="overflow:hidden !important;">
		<div class="avada-row" style="">
		<div id="content" style="width:100%">
				<div id="post-785" class="post-785 page type-page status-publish hentry">
						<div class="post-content">

				<!-- START REVOLUTION SLIDER 2.3.91 -->
				
								
								<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:220px;">
					<div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;max-height:220px;height:220;">						
										<ul>
								<li data-transition="random" data-slotamount="7" >
						<img src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/10/sbprev3.png"  alt="sbprev3 SEBRAE PREVIDÊNCIA"  title="SEBRAE PREVIDÊNCIA" />
											</li>
									<li data-transition="random" data-slotamount="7" >
						<img src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/10/sbprev1.png"  alt="sbprev1 SEBRAE PREVIDÊNCIA"  title="SEBRAE PREVIDÊNCIA" />
											</li>
									<li data-transition="random" data-slotamount="7" >
						<img src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/10/sbprev2.png"  alt="sbprev2 SEBRAE PREVIDÊNCIA"  title="SEBRAE PREVIDÊNCIA" />
											</li>
								</ul>
														</div>
				</div>				
							
			<script type="text/javascript">

				var tpj=jQuery;
				
									tpj.noConflict();
								
				var revapi3;
				
				tpj(document).ready(function() {
				
				if (tpj.fn.cssOriginal != undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
				
				if(tpj('#rev_slider_3_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_3_1');
				else
				   revapi3 = tpj('#rev_slider_3_1').show().revolution(
					{
						delay:9000,
						startwidth:960,
						startheight:220,
						hideThumbs:0,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"square-old",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
								
						shadow:3,
						fullWidth:"on",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0	
					});
				
				});	//ready
				
			</script>
			
							<!-- END REVOLUTION SLIDER -->

				<div class="demo-sep sep-none" style="margin-top:60px;"></div>
<style type='text/css'>
	#tabs-1,#tabs-1.tabs-vertical .tabs,#tabs-1.tabs-vertical .tab_content{border-color:#ebeaea !important;}
	
        #main #tabs-1.tabs-horizontal,#tabs-1.tabs-vertical .tab_content,.pyre_tabs .tabs-container{background-color:#ffffff;}
        /*#main #tabs-1.tabs-horizontal,#tabs-1.tabs-vertical .tab_content,.pyre_tabs .tabs-container{background-color:#ffffff !important;}*/

	body.dark #tabs-1.shortcode-tabs .tab-hold .tabs li,body.dark #sidebar .tab-hold .tabs li{border-right:1px solid #ffffff !important;}
	body.dark #tabs-1.shortcode-tabs .tab-hold .tabs li:last-child{border-right:0 !important;}
	body.dark #main #tabs-1 .tab-hold .tabs li a{background:#ebeaea !important;border-bottom:0 !important;color:#747474 !important;}
	body.dark #main #tabs-1 .tab-hold .tabs li a:hover{background:#ffffff !important;border-bottom:0 !important;}
	body #main #tabs-1 .tab-hold .tabs li.active a,body #main #tabs-1 .tab-hold .tabs li.active{background:#ffffff !important;border-bottom:0 !important;}
	#sidebar .tab-hold .tabs li.active a{border-top-color:#53aedb !important;}
	</style><div id="tabs-1" class="tab-holder shortcode-tabs clearfix tabs-horizontal"><div class="tab-hold tabs-wrapper"><ul id="tabs" class="tabset tabs"><li><a href="#tab1">QUEM SOMOS</a></li><li><a href="#tab2">NOSSA HISTÓRIA</a></li><li><a href="#tab3">ESTRUTURA DE GOVERNANÇA</a></li><li><a href="#tab4">NOSSA EQUIPE</a></li><li><a href="#tab5">DOCUMENTOS INSTITUCIONAIS</a></li></ul><div class="tab-box tabs-container">
<div id="tab1" class="tab tab_content">
<img alt="seta azul SEBRAE PREVIDÊNCIA" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="SEBRAE PREVIDÊNCIA" /> <div class="title"><h2>Quem Somos</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
	<?php
	//quem somos
	$args = array('page_id' => '111');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>
</div>
<div id="tab2" class="tab tab_content">
<img alt="seta azul SEBRAE PREVIDÊNCIA" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="SEBRAE PREVIDÊNCIA" /> <div class="title"><h2>Nossa História</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
<p>&nbsp;</p>
<div class="accordian">
		<?php
		$args = array( 'posts_per_page' => '-1', 'post_type' => 'nossahistoria');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		?>
		<h5 class="toggle">
			<a href="#">
				<span class="arrow"></span>
				<?php the_title();?>
			</a>
		</h5>
		<div class="toggle-content" style="display: block;">
			<?php the_content();?>
		</div>
		<?php endwhile;?>
	</div>
<p>&nbsp;</p>
	<?php
	//nossa historia
	$args = array('page_id' => '113');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>
</div>
<div id="tab3" class="tab tab_content">
<img alt="seta azul SEBRAE PREVIDÊNCIA" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="SEBRAE PREVIDÊNCIA" /> <div class="title"><h2>Estrutura de Governança</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
	<?php
	//estrutura de governança
	$args = array('page_id' => '117');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>	
</div>
</div>
<div id="tab4" class="tab tab_content">
	<img alt="seta azul SEBRAE PREVIDÊNCIA" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="SEBRAE PREVIDÊNCIA" /> <div class="title"><h2>Nossa Equipe</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
	<p>&nbsp;</p>
	<?php
	//nossa equipe
	$args = array('page_id' => '121');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>	
<div class="accordian">
	<h5 class="toggle active"><a href="#"><span class="arrow"></span>Conselho Deliberativo</a></h5>
	<div class="toggle-content default-open" style="display: block;">
		<?php
		$count = 1;
		$args = array( 'posts_per_page' => '-1', 'post_type' => 'equipe', 'category_name' => 'equipe_conselho_deliberativo');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0'];
		?>
		<div class="<?php if($count==4){echo 'last'; $count=0;} ?> one_fourth">
			<div class="person">
				<img src="<?php echo $url;?>" class="person-img">
				<div class="person-desc">
					<div class="person-author clearfix">
						<div class="person-author-wrapper">
							<span class="person-name"><?php the_title();?></span>
							<span class="person-title"><?php the_content();?></span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="person-content"></div>
				</div>
			</div>
		</div>
		<?php 
		$count++;
		endwhile;
		?>
		<div class="clear"></div>
	</div>
	<h5 class="toggle "><a href="#"><span class="arrow"></span>Conselho Fiscal</a></h5>
	<div class="toggle-content " style="">
		<?php
		$count = 1;
		$args = array( 'posts_per_page' => '-1', 'post_type' => 'equipe', 'category_name' => 'equipe_conselho_fiscal');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0'];
		?>
		<div class="<?php if($count==4){ echo 'last'; $count=0;}?> one_fourth">
			<div class="person">
				<img src="<?php echo $url;?>" class="person-img">
				<div class="person-desc">
					<div class="person-author clearfix">
						<div class="person-author-wrapper">
							<span class="person-name"><?php the_title();?></span>
							<span class="person-title"><?php the_content();?></span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="person-content"></div>
				</div>
			</div>
		</div>
		<?php 
		$count++;
		endwhile;
		?>
		<div class="clear"></div>
	</div>
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<h5 class="toggle "><a href="#"><span class="arrow"></span>Diretoria Executiva</a></h5>
	<div class="toggle-content " style="">
		<?php
		$count = 1;
		$args = array( 'posts_per_page' => '-1', 'post_type' => 'equipe', 'category_name' => 'equipe_diretoria_executiva');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0'];
		?>
		<div class="<?php if($count==4){ echo 'last'; $count=0;}?> one_fourth">
			<div class="person">
				<img src="<?php echo $url;?>" class="person-img">
				<div class="person-desc">
					<div class="person-author clearfix">
						<div class="person-author-wrapper">
							<span class="person-name"><?php the_title();?></span>
							<span class="person-title"><?php the_content();?></span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="person-content"></div>
				</div>
			</div>
		</div>
		<?php 
		$count++;
		endwhile;
		?>
		<div class="clear"></div>		
	</div>
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<h5 class="toggle "><a href="#"><span class="arrow"></span>Equipe Técnica</a></h5>
	<div class="toggle-content " style="">
		<?php
		$count = 1;
		$args = array( 'posts_per_page' => '-1', 'post_type' => 'equipe', 'category_name' => 'equipe_equipe_tecnica');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0'];
		?>
		<div class="<?php if($count==4){ echo 'last'; $count=0;}?> one_fourth">
			<div class="person">
				<img src="<?php echo $url;?>" class="person-img">
				<div class="person-desc">
					<div class="person-author clearfix">
						<div class="person-author-wrapper">
							<span class="person-name"><?php the_title();?></span>
							<span class="person-title"><?php the_content();?></span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="person-content"></div>
				</div>
			</div>
		</div>
		<?php 
		$count++;
		endwhile;
		?>
		<div class="clear"></div>
	</div>
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<h5 class="toggle "><a href="#"><span class="arrow"></span>Gestores do Plano</a></h5>
	<div class="toggle-content " style="">
		<?php
		$count = 1;
		$args = array( 'posts_per_page' => '-1', 'post_type' => 'equipe', 'category_name' => 'equipe_gestores_do_plano');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0'];
		?>
		<div class="<?php if($count==4){ echo 'last'; $count=0;}?> one_fourth">
			<div class="person">
				<img src="<?php echo $url;?>" class="person-img">
				<div class="person-desc">
					<div class="person-author clearfix">
						<div class="person-author-wrapper">
							<span class="person-name"><?php the_title();?></span>
							<span class="person-title"><?php the_content();?></span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="person-content"></div>
				</div>
			</div>
		</div>
		<?php 
		$count++;
		endwhile;
		?>
		<div class="clear"></div>
	</div>
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
	<!---------------------------------------------------------------->
</div>
</div>
<div id="tab5" class="tab tab_content">
<img alt="seta azul SEBRAE PREVIDÊNCIA" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="SEBRAE PREVIDÊNCIA" /> <div class="title"><h2>Documentos Institucionais</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
<p>&nbsp;</p>
	<?php
	//documentos institucionais
	$args = array('page_id' => '119');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>

</div>
</div></div></div>
							</div>
					</div>
			</div>
	<div id="sidebar" style="display:none">		<div id="recent-posts-2" class="widget widget_recent_entries">		<div class="heading"><h3>Outras Notícias</h3></div>		<ul>
					<li>
				<a href="http://sebraeprevidencia.com.br/comissoes-tematicas-sao-definidas-pelo-conselho-deliberativo/" title="Comissões Temáticas são definidas pelo Conselho Deliberativo">Comissões Temáticas são definidas pelo Conselho Deliberativo</a>
							<span class="post-date">14 de maio de 2015</span>
						</li>
					<li>
				<a href="http://sebraeprevidencia.com.br/iv-forum-sebraeprev-de-economia/" title="IV Fórum SEBRAEPREV de economia">IV Fórum SEBRAEPREV de economia</a>
							<span class="post-date">14 de maio de 2015</span>
						</li>
					<li>
				<a href="http://sebraeprevidencia.com.br/informe-sebraeprev-de-abril-confira/" title="Informe SEBRAEPREV de Abril: confira!">Informe SEBRAEPREV de Abril: confira!</a>
							<span class="post-date">12 de maio de 2015</span>
						</li>
					<li>
				<a href="http://sebraeprevidencia.com.br/perfil-de-investimento-e-do-percentual-de-contribuicao-alteracao-de-junho-ate-3107/" title="Período para alterar o perfil de investimento e o percentual de contribuição começa em junho e vai até o dia 31 de julho">Período para alterar o perfil de investimento e o percentual de contribuição começa em junho e vai até o dia 31 de julho</a>
							<span class="post-date">11 de maio de 2015</span>
						</li>
					<li>
				<a href="http://sebraeprevidencia.com.br/conselhos-promovem-reunioes/" title="Conselhos promovem reuniões">Conselhos promovem reuniões</a>
							<span class="post-date">4 de maio de 2015</span>
						</li>
				</ul>
		</div></div>
		</div>
          
	</div>
<?php get_footer();?>