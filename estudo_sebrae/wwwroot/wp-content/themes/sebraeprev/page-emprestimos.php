<?php get_header('single');?>
<div id="sliders-container">
						</div>
						 

            	
	<div id="main" class="" style="overflow:hidden !important;">
		<div class="avada-row" style="">
		<div id="content" style="width:100%">
				<div id="post-789" class="post-789 page type-page status-publish hentry">
						<div class="post-content">

				<!-- START REVOLUTION SLIDER 2.3.91 -->
				
								
								<div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:220px;">
					<div id="rev_slider_5_1" class="rev_slider fullwidthabanner" style="display:none;max-height:220px;height:220;">						
										<ul>
								<li data-transition="random" data-slotamount="7" >
						<img src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/10/emprest.png"  alt="Empréstimos"  title="Empréstimos" />
											</li>
								</ul>
														</div>
				</div>				
							
			<script type="text/javascript">

				var tpj=jQuery;
				
									tpj.noConflict();
								
				var revapi5;
				
				tpj(document).ready(function() {
				
				if (tpj.fn.cssOriginal != undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
				
				if(tpj('#rev_slider_5_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_5_1');
				else
				   revapi5 = tpj('#rev_slider_5_1').show().revolution(
					{
						delay:9000,
						startwidth:960,
						startheight:220,
						hideThumbs:0,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:1,
						
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
	</style>
	<div id="tabs-1" class="tab-holder shortcode-tabs clearfix tabs-horizontal">
		<div class="tab-hold tabs-wrapper">
			<ul id="tabs" class="tabset tabs">
				<li><a href="#tab1">MODALIDADE PÓS-FIXADA</a></li>
				<li><a href="#tab2">MODALIDADE PRÉ-FIXADA</a></li>
				<li><a href="#tab3">MODALIDADE ESPECIAL</a></li>
				<li><a href="#tab4">DIFERENÇAS ENTRE AS MODALIDADES</a></li>
				<li><a href="#tab5">NORMAS PARA CONCESSÃO</a></li>
				<li><a href="#tab6">VÍDEO EXPLICATIVO</a></li>
			</ul>
			<div class="tab-box tabs-container">
				<div id="tab1" class="tab tab_content">
					<img class="alignleft" alt="seta azul Empréstimos" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Empréstimos" /> <div class="title"><h2>Modalidade Pós-Fixada</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
					<?php
					//modalidade pós-fixada
					$args = array('page_id' => '129');
					query_posts( $args );
					while ( have_posts() ) : the_post();
					    the_content();
					endwhile;
					wp_reset_query();
					?>
				</div>
				<div id="tab2" class="tab tab_content">
					<img class="alignleft" alt="seta azul Empréstimos" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Empréstimos" /> <div class="title"><h2>Modalidade Pré-Fixada</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
					<?php
					//modalidade pre-fixada
					$args = array('page_id' => '131');
					query_posts( $args );
					while ( have_posts() ) : the_post();
					    the_content();
					endwhile;
					wp_reset_query();
					?>
				</div>
				<div id="tab3" class="tab tab_content">
					<img class="alignleft" alt="seta azul Empréstimos" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Empréstimos" /> <div class="title"><h2>Modalidade Especial</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
					<?php
					//modalidade especial
					$args = array('page_id' => '133');
					query_posts( $args );
					while ( have_posts() ) : the_post();
					    the_content();
					endwhile;
					wp_reset_query();
					?>
				</div>
				<div id="tab4" class="tab tab_content">
					<img class="alignleft" alt="seta azul Empréstimos" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Empréstimos" /> <div class="title"><h2>Diferenças entre as Modalidades</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
					<?php
					//diferenças entre as modalidades
					$args = array('page_id' => '135');
					query_posts( $args );
					while ( have_posts() ) : the_post();
					    the_content();
					endwhile;
					wp_reset_query();
					?>
				</div>
				<div id="tab5" class="tab tab_content">
					<img class="alignleft" alt="seta azul Empréstimos" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Empréstimos" /> <div class="title"><h2>Normas para Concessão</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
					<?php
					//normas para concessao
					$args = array('page_id' => '138');
					query_posts( $args );
					while ( have_posts() ) : the_post();
					    the_content();
					endwhile;
					wp_reset_query();
					?>
				</div>
				<div id="tab6" class="tab tab_content">
					<img class="alignleft" alt="seta azul Empréstimos" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Empréstimos" /> <div class="title"><h2>Vídeo Explicativo</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
					<?php
					//video explicativo
					$args = array('page_id' => '140');
					query_posts( $args );
					while ( have_posts() ) : the_post();
					    the_content();
					endwhile;
					wp_reset_query();
					?>
				</div>
				<div id="tab7" class="tab tab_content">
					<img class="alignleft" alt="seta azul Empréstimos" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Empréstimos" /> <div class="title"><h2>Contrate Aqui</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
					<p style="text-align: center;"><span style="color: #4a7ebb;"><b>Siga o passo a passo para fazer a solicitação:</b></span></p>
					<p><img class="aligncenter" style="float: none!important;" alt="contrate aqui Empréstimos" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/contrate_aqui.jpg" width="500" height="270" title="Empréstimos" /></p>
					<p>Após finalizar este processo, os participantes ativos devem procurar o Gestor da sua Patrocinadora para liberação da proposta e impressão do contrato. O crédito estará disponível em até 2 dias úteis após liberação da Patrocinadora.</p>
					<p>Já os assistidos devem entrar em contato com o SEBRAE PREVIDÊNCIA por meio do número <b>(61) 3327-1226</b> para análise e finalização do processo. O contrato de empréstimo será enviado após o deferimento do SEBRAE PREVIDÊNCIA.</p>
				</div>
<p></div></div></div>
							</div>
					</div>
			</div>
	<div id="sidebar" style="display:none">		<div id="recent-posts-2" class="widget widget_recent_entries">		<div class="heading"><h3>Outras Notícias</h3></div>		<ul>
					<li>
				<a href="http://sebraeprevidencia.com.br/periodo-para-alterar-o-perfil-de-investimento-e-o-percentual-de-contribuicao-comeca-em-junho-e-vai-ate-o-dia-31-de-julho/" title="Período para alterar o perfil de investimento e o percentual de contribuição começa em junho e vai até o dia 31 de julho">Período para alterar o perfil de investimento e o percentual de contribuição começa em junho e vai até o dia 31 de julho</a>
							<span class="post-date">27 de maio de 2015</span>
						</li>
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
				</ul>
		</div></div>
		</div>
          
	</div>

      <?php get_footer();?>