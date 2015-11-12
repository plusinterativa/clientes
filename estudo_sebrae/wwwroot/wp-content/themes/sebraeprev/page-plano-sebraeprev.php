<?php get_header('single');?>
	<div id="sliders-container">
						</div>
						 

            	
	<div id="main" class="" style="overflow:hidden !important;">
		<div class="avada-row" style="">
		<div id="content" style="width:100%">
				<div id="post-787" class="post-787 page type-page status-publish hentry">
						<div class="post-content">

				<!-- START REVOLUTION SLIDER 2.3.91 -->
				
								
								<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:220px;">
					<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;max-height:220px;height:220;">						
										<ul>
								<li data-transition="random" data-slotamount="7" >
						<img src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/10/plan3.png"  alt="plan3 Plano SEBRAEPREV"  title="Plano SEBRAEPREV" />
											</li>
									<li data-transition="random" data-slotamount="7" data-masterspeed="300" >
						<img src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/10/plan1.png"  alt="plan1 Plano SEBRAEPREV"  title="Plano SEBRAEPREV" />
											</li>
									<li data-transition="random" data-slotamount="7" >
						<img src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/10/plan4.png"  alt="plan4 Plano SEBRAEPREV"  title="Plano SEBRAEPREV" />
											</li>
								</ul>
														</div>
				</div>				
							
			<script type="text/javascript">

				var tpj=jQuery;
				
									tpj.noConflict();
								
				var revapi2;
				
				tpj(document).ready(function() {
				
				if (tpj.fn.cssOriginal != undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
				
				if(tpj('#rev_slider_2_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_2_1');
				else
				   revapi2 = tpj('#rev_slider_2_1').show().revolution(
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
	</style><div id="tabs-1" class="tab-holder shortcode-tabs clearfix tabs-horizontal"><div class="tab-hold tabs-wrapper"><ul id="tabs" class="tabset tabs"><li><a href="#tab1">SOBRE O PLANO</a></li><li><a href="#tab2">REGULAMENTO</a></li><li><a href="#tab3">CARTILHA DO PARTICIPANTE</a></li><li><a href="#tab4">PERFIS DE INVESTIMENTOS</a></li><li><a href="#tab5">TRIBUTAÇÃO</a></li><li><a href="#tab6">PASSO A PASSO</a></li><li><a href="#tab7">QUERO SER PARTICIPANTE</a></li></ul><div class="tab-box tabs-container">
<div id="tab1" class="tab tab_content">
	<img class="size-full wp-image-1079 alignleft" alt="seta azul1 Plano SEBRAEPREV" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul1.png" width="22" height="44" title="Plano SEBRAEPREV" /><div class="title"><h2>Sobre o Plano</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
	<?php
	//sobre o plano
	$args = array('page_id' => '89');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>
	<div class="accordian">
		<?php
		$args = array( 'posts_per_page' => '-1', 'post_type' => 'sobreoplano');
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
</div>
<div id="tab2" class="tab tab_content">
	<img class="alignleft" alt="seta azul Plano SEBRAEPREV" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Plano SEBRAEPREV" /> <div class="title"><h2>Regulamento</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
	<?php
	//regulamento
	$args = array('page_id' => '93');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>
	<div class="clearboth"></div>
</div>
<div id="tab3" class="tab tab_content">
	<img class="alignleft" alt="seta azul Plano SEBRAEPREV" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Plano SEBRAEPREV" /> <div class="title"><h2>Cartilha do Participante</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
	<?php
	//cartilha do participante
	$args = array('page_id' => '96');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>
	<div class="clearboth"></div>
</div>
<div id="tab4" class="tab tab_content">
	<img class="alignleft" alt="seta azul Plano SEBRAEPREV" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Plano SEBRAEPREV" /> <div class="title"><h2>Perfis de Investimentos</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
	<?php
	//perfis de investimentos
	$args = array('page_id' => '98');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>

	<div class="clearboth"></div>
</div>
<div id="tab5" class="tab tab_content">
	<div class="two_third">
		<img class="alignleft" alt="seta azul Plano SEBRAEPREV" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Plano SEBRAEPREV" /> <div class="title"><h2>Tributação</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
		<?php
		//tributação
		$args = array('page_id' => '100');
		query_posts( $args );
		while ( have_posts() ) : the_post();
		    the_content();
		endwhile;
		wp_reset_query();
		?>
	<div class="accordian">
		<?php
		$args = array( 'posts_per_page' => '-1', 'post_type' => 'tributacaotype');
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
</div>
<div class="one_third last">
<p>&nbsp;</p>
<div style="max-width:300px;max-height:175px;"><div class="video-shortcode"><iframe title="YouTube video player" width="300" height="175" src="http://www.youtube.com/embed/t4uxTML99j8" frameborder="0" allowfullscreen></iframe></div></div>
<p>&nbsp;</p>
<div style="max-width:300px;max-height:175px;"><div class="video-shortcode"><iframe title="YouTube video player" width="300" height="175" src="http://www.youtube.com/embed/xh1JzWEd0tc" frameborder="0" allowfullscreen></iframe></div></div></div><div class="clearboth"></div>
</div>
<div id="tab6" class="tab tab_content">
<img class="alignleft" alt="seta azul Plano SEBRAEPREV" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Plano SEBRAEPREV" /> <div class="title"><h2>Passo a Passo</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
<p><!-- top flash embed swf tag start-->
	<?php
	//passo-a-passo
	$args = array('page_id' => '104');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>

<!-- top flash embed swf tag end-->
            </p>
</div>
<div id="tab7" class="tab tab_content">
<img class="alignleft" alt="seta azul Plano SEBRAEPREV" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Plano SEBRAEPREV" /> <div class="title"><h2>Quero ser Participante</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
	<?php
	//quero ser particpante
	$args = array('page_id' => '107');
	query_posts( $args );
	while ( have_posts() ) : the_post();
	    the_content();
	endwhile;
	wp_reset_query();
	?>
	<?php
	$args = array( 'posts_per_page' => '-1', 'post_type' => 'queroserparticipante');
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
<div id="tab8" class="tab tab_content">
<img class="alignleft" alt="seta azul Plano SEBRAEPREV" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul.png" width="22" height="44" title="Plano SEBRAEPREV" /> <div class="title"><h2>Dúvidas Frequentes</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
<p>&nbsp;</p>
<p><p><form class="search" action="http://sebraeprevidencia.com.br/" method="get">
	<fieldset>
		<span class="text"><input name="s" id="s" type="text" value="" placeholder="Buscar..." /></span>
	</fieldset>
</form></p><br />
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre ABC</a></h5><div class="toggle-content " style="">
<p><b style="color: #4a7ebb;">1. O Participante Assistido poderá realizar contribuições esporádicas para o Plano SEBRAEPREV?</b></p>
<p>Resposta: O Assistido, a seu critério, também poderá efetuar Contribuição Voluntária esporádica. Caso o Assistido faça, a qualquer tempo, Contribuição Voluntária esporádica, o seu Benefício será recalculado no mês de junho posterior à data do aporte, de acordo com a alternativa de pagamento prevista no Regulamento, que tenha sido escolhida quando da concessão do Benefício. (§ 9º Art. 42 e § 4º Art.63)</p>
<p><span style="color: #4a7ebb;"><b>2. O que acontecerá com os recursos de um Participante que falecer enquanto estiver com o contrato de trabalho suspenso? </b></span></p>
<p>Resposta: A morte do Participante com Direitos Suspensos resultará na devolução, em parcela única, aos seus Herdeiros Legais, dos valores que seriam devidos ao Participante em caso de Resgate, bem como dos eventuais Recursos Portados existentes em seu nome. (§ 5ºArt. 19)</p>
<p><span style="color: #4a7ebb;"><b>3. Quais são os pré-requisitos para eleger-se ao Benefício de Aposentadoria Normal? </b></span></p>
<p>Resposta: Para eleger-se ao benefício de Aposentadoria Normal é necessário o atendimento simultaneamente das seguintes condições: a) ter completado sessenta (60) anos de idade; b) ter, pelo menos, dez (10) anos de Tempo de Serviço Contínuo; e c) ter, pelo menos, 3 (três) anos de filiação ao Plano SEBRAEPREV. (Art. 77)</p>
<p>Lembramos que para solicitação do benefício, é necessário ter cessado seu vínculo empregatício ou mandatário com o Patrocinador, conforme o caso.</p>
<p><span style="color: #4a7ebb;"><b>4. Quais são os pré-requisitos para eleger-se ao Benefício de Aposentadoria Antecipada?</b></span></p>
<p>Resposta: Para eleger-se ao benefício de Aposentadoria Antecipada é necessário o atendimento simultaneamente das seguintes condições: a) ter completado cinqüenta e três (53) anos de idade; b) ter, pelo menos, dez (10) anos de Tempo de Serviço Contínuo; e c) ter, pelo menos, 3 (três) anos de filiação ao Plano SEBRAEPREV. (Art. 71)</p>
<p>Lembramos que para solicitação do benefício, é necessário ter cessado seu vínculo empregatício ou mandatário com o Patrocinador, conforme o caso.</p>
<p><span style="color: #4a7ebb;"><b>5. Os Participantes que na data de ingresso no Plano, não tenham efetuado a opção por contribuir para o custeio do seu serviço passado, e fizeram a opção posteriormente, terão 100% da contrapartida da Patrocinadora? </b></span></p>
<p>Resposta: Para Participantes Fundadores ou não, bem como para Empregados que ainda não sejam Participantes do Plano SEBRAEPREV ou que sejam ex-Participantes em virtude do requerimento do cancelamento de sua inscrição, o Patrocinador Fundador efetuará o Aporte Inicial de Serviço Passado, na proporção de 90% (noventa por cento) do valor do Serviço Passado Máximo do Participante. (§ 2º Art. 136)</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre DCE</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>6. O Participante que se tornou elegível ao benefício de Aposentadoria Normal, poderá continuar a contribuir para Serviço Passado? </b></span></p>
<p>Resposta: Sim. De acordo com o artigo 138 do Regulamento do Plano, todos os Participantes que sejam Fundadores e que, na data de aprovação da presente alteração regulamentar pelos órgãos governamentais competentes, não sejam Assistidos e tenham optado por contribuir para o custeio do seu serviço passado quando de sua inscrição no Plano SEBRAEPREV, bem como os Participantes e Empregados que venham a efetuar a referida opção em virtude do disposto no caput e no § 1º do artigo 136, terão garantido o maior prazo, dentre os seguintes, para a quitação dos respectivos valores de Serviço Passado Máximo: I – o período que lhe resta para o cumprimento das exigências mínimas de elegibilidade ao Benefício de Aposentadoria Normal; e II – o período que lhe resta para que sejam completados 10 (dez) anos contados a partir da Data Efetiva do Plano ou da data de aprovação do Convênio de Adesão do respectivo Patrocinador, o que tiver ocorrido por último.</p>
<p><span style="color: #4a7ebb;"><b>7. Por quanto tempo irei pagar o &#8220;tempo de serviço passado&#8221;? </b></span></p>
<p>Resposta: Ao escolher o percentual Maximo do Tempo de Serviço Passado, a contribuição será vertida mensalmente até se atingir a elegibilidade para adquirir os benefícios. Para terminar antes o tempo de serviço passado, poderá ser feito um pagamento adicional, conforme dispõe o parágrafo 3° do Art. 43 do Regulamento do Plano.</p>
<p><span style="color: #4a7ebb;"><b>8. Por que quando a bolsa varia, a nossa rentabilidade varia quase que automaticamente, embora só tenhamos cerca de 17% do total de investimentos aplicados em renda variável? </b></span></p>
<p>Resposta: Enquanto o Mercado de Renda Fixa, devido a estabilidade econômica, vem apresentando rendimentos mensais em torno de 0,7% ao mês, o Mercado de Renda Variável apresenta grandes variações de rentabilidade (volatilidade), impactando nossa carteira.</p>
<p>Exemplo:<br />
Renda Fixa &#8211; 80% das aplicações &#8211; rentabilidade de 0,70% no mês<br />
Renda Variável &#8211; 20% das aplicações &#8211; rentabilidade de 8,00% no mês<br />
Rentabilidade Total = (0,8 x 0,7%) + (0,2 x 8%) = 2,16% no mês</p>
<p><span style="color: #4a7ebb;"><b>9. Quem é o SEBRAE PREVIDÊNCIA? </b></span></p>
<p>Resposta: É uma entidade fechada de previdência complementar que tem dentre outros objetivos administrar o Plano de benefícios previdenciários dos empregados do SEBRAE.</p>
<p><span style="color: #4a7ebb;"><b>10. Quais as grandes vantagens do Plano SEBRAEPREV? </b></span></p>
<p>Resposta: A contribuição do SEBRAE na mesma proporção da contribuição do empregado, a compra do tempo de serviço passado a ser dividida com o empregado que tenha direito, além do benefício fiscal e da rentabilidade alcançada pelo Plano.</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre FGH</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>11. Qual o benefício fiscal oferecido pelo SEBRAEPREV? </b></span></p>
<p>Resposta: A possibilidade de deduzir na base de cálculo do IR as contribuições realizadas pelos Participantes até 12% da renda bruta anual.</p>
<p><span style="color: #4a7ebb;"><b>12. Existe garantia de rentabilidade mínima no SEBRAEPREV? </b></span></p>
<p>Resposta: Não. A rentabilidade será alcançada de acordo com a política e diretrizes de investimentos aprovada pelo Conselho Deliberativo do SEBRAE PREVIDÊNCIA.</p>
<p><span style="color: #4a7ebb;"><b>13. Quem pode participar do SEBRAEPREV? </b></span></p>
<p>Resposta: Os empregados, os gerentes e os dirigentes do Sistema Sebrae.</p>
<p><span style="color: #4a7ebb;"><b>14. Quem pode ser beneficiário dependente do Plano SEBRAEPREV?</b></span></p>
<p>Resposta: I &#8211; O cônjuge ou o companheiro (a); II &#8211; Os filhos, os enteados ou os adotados legalmente, sem limite de idade.</p>
<p><span style="color: #4a7ebb;"><b>15. A adesão ao SEBRAEPREV é obrigatória? </b></span></p>
<p>Resposta: Não. A adesão é facultativa e deve ser feita por intermédio da assinatura do termo de adesão disponível na Internet: www.sebraeprev.org.br .</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre IJL</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>16. Qual o percentual máximo que o SEBRAE PREVIDÊNCIA poderá cobrar para administrar o Plano?</b></span></p>
<p>Resposta: 15% do total das contribuições básicas.</p>
<p><span style="color: #4a7ebb;"><b>17. O Participante que cancelar sua inscrição no Plano poderá se reinscrever novamente? </b></span></p>
<p>Resposta: Sim. Poderá se inscrever novamente a qualquer tempo.</p>
<p><span style="color: #4a7ebb;"><b>18. O Participante poderá realizar contribuições voluntárias ao Plano? </b></span></p>
<p>Resposta: Sim. O Participante poderá escolher um percentual do salário de contribuição a ser utilizado na Contribuição Voluntária mensal de Participante, que deverá ser efetuada no ato do requerimento da inscrição no Plano, e, posteriormente, no período de junho/julho de cada exercício.</p>
<p><span style="color: #4a7ebb;"><b>19. Como o Participante ficará sabendo com quanto ele deve contribuir para o plano? </b></span></p>
<p>Resposta: Por intermédio do simulador no endereço www.sebraeprev.org.br</p>
<p><span style="color: #4a7ebb;"><b>20. Qual será a contribuição do SEBRAE para o SEBRAEPREV? </b></span></p>
<p>Resposta: A contribuição do SEBRAE para o Plano corresponderá a cem por cento (100%) da contribuição básica efetuada pelo Participante. Em relação ao serviço passado os valores vertidos também serão de cem por cento (100%) da contribuição de serviço passado escolhida e de acordo com os percentuais escolhidos pelos Participantes, salvo os casos previstos no artigo 136 do Regulamento do Plano.</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre IJL</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>21. O Serviço Passado poderá ser pago de uma única vez? </b></span></p>
<p>Resposta: Sim. O Participante efetuará a solicitação e o SEBRAE PREVIDÊNCIA emitirá boleto bancário para pagamento.</p>
<p><span style="color: #4a7ebb;"><b>22. Será devida contribuição para o Participante que estiver com o contrato de trabalho suspenso? </b></span></p>
<p>Resposta: Se a interrupção ou suspensão do contrato de trabalho não resultar na perda da remuneração, o Participante permanecerá com suas contribuições ao Plano SEBRAEPREV, mantendo sua condição de Participante Patrocinado ou Mandatário, conforme o caso, como se não estivesse com o seu contrato de trabalho suspenso ou interrompido. Quando a interrupção ou suspensão do contrato de trabalho resultar na perda da remuneração, o Participante poderá:</p>
<p>a) optar pela suspensão de suas contribuições ao Plano SEBRAEPREV, situação em que ficará com seus direitos e obrigações frente ao Plano suspensos, pelo período de vigência da suspensão ou interrupção do contrato de trabalho, assumindo a condição de Participante com Direitos Suspensos; ou</p>
<p>b) manter seus direitos e obrigações frente ao Plano, mediante a opção pelo instituto do Autopatrocínio, assumindo a condição de Participante Sem Remuneração em Autopatrocínio.</p>
<p><span style="color: #4a7ebb;"><b>23. Quais os benefícios que o SEBRAEPREV oferece a quem se inscrever no plano? </b></span></p>
<p>Resposta: Aposentadoria antecipada aos 53 anos de idade Aposentadoria normal aos 60 anos de idade Aposentadoria em caso de invalidez e Benefício de pensão por morte.</p>
<p><span style="color: #4a7ebb;"><b>24. Existe carência para a concessão do benefício de pensão por morte? </b></span></p>
<p>Resposta: Sim. O benefício será concedido desde que o tempo de serviço contínuo seja de pelo menos um (1) ano. Ressalvado o falecimento motivado por acidente de trabalho.</p>
<p><span style="color: #4a7ebb;"><b>25. Qual a periodicidade para recebimento de extrato com os valores depositados no SEBRAEPREV? </b></span></p>
<p>Resposta: O extrato está disponível no site do SEBRAEPREV, mediante utilização de senha pessoal e intransferível.</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre MNO</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>26. O que acontece com o dinheiro depositado no SEBRAEPREV caso o Participante tenha falecido e não possua beneficiário dependente? </b></span></p>
<p>Resposta: Os valores serão pagos aos seus sucessores, mediante a apresentação de alvará judicial especifico.</p>
<p><span style="color: #4a7ebb;"><b>27. O Participante poderá resgatar a reserva individual de Participante a qualquer tempo? </b></span></p>
<p>Resposta: Sim. Desde que ele rescinda o vinculo empregatício com o SEBRAE e que não esteja em gozo de benefício.</p>
<p><span style="color: #4a7ebb;"><b>28. O que é Portabilidade? </b></span></p>
<p>Resposta: É o instituto legal que permite ao Participante transferir os valores depositados no SEBRAEPREV para outras entidades de previdência sejam elas abertas ou fechadas.</p>
<p><span style="color: #4a7ebb;"><b>29. Existe carência para o exercício da Portabilidade no SEBRAEPREV? </b></span></p>
<p>Resposta: Sim. O participante terá que ter no mínimo 60 dias de inscrição no plano.</p>
<p><span style="color: #4a7ebb;"><b>30. Como funciona o Beneficio Proporcional Diferido? </b></span></p>
<p>Resposta: O Participante e o SEBRAE param de contribuir, e no futuro será devida uma renda de Aposentadoria Normal proporcional ao saldo acumulado até a data de elegibilidade de benefícios.</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre PQR</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>31. O Participante que deixar de ser empregado do SEBRAE poderá continuar no plano de previdência? </b></span></p>
<p>Resposta: Sim. Desde que ele pague o correspondente a suas contribuições e a do SEBRAE, ele poderá ficar como Participante autopatrocinado.</p>
<p><span style="color: #4a7ebb;"><b>32. Incide IR ao se portar os recursos de outro Plano fechado ou aberto de previdência para o SEBRAEPREV?</b></span></p>
<p>Resposta: Não. Na portabilidade os recursos não transitam pelas mãos dos Participantes, deste modo inexiste IR.</p>
<p><span style="color: #4a7ebb;"><b>33. O Participante poderá resgatar integralmente os valores depositados pelo SEBRAE em seu nome no SEBRAEPREV? </b></span></p>
<p>Resposta: Depende. Os valores de resgate variam em função do tempo de filiação ao SEBRAEPREV, conforme a seguir:</p>
<p>I &#8211; Até 05 anos de filiação 1/5 por ano do somatório dos valores depositados pelo SEBRAE a título de contribuição básica e serviço passado;</p>
<p>II &#8211; Acima de 05 anos os valores integralizados pelo SEBRAE até a data do resgate.</p>
<p><span style="color: #4a7ebb;"><b>34. Poderá ocorrer parcelamento do resgate no SEBRAEPREV? </b></span></p>
<p>Resposta: Sim. Em até 60 parcelas mensais, iguais e consecutivas</p>
<p><span style="color: #4a7ebb;"><b>35. O que acontecerá caso um dia o SEBRAE resolva retirar o Patrocínio do Plano? </b></span></p>
<p>Resposta: Os direitos dos Participantes deverão ser preservados e todos os compromissos assumidos pelo SEBRAE terão que ser cumpridos integralmente, inclusive o pagamento do tempo de serviço passado.</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre STU</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>36. Como fazer para incorporar no SEBRAEPREV planos anteriores dos empregados? </b></span></p>
<p>Resposta: De acordo com artigo 116 do regulamento, entende-se por Portabilidade o instituto que faculta ao Participante ativo transferir para o plano receptor (no caso o SEBRAEPREV), os recursos correspondentes ao seu saldo de conta total existente na data da opção pela Portabilidade. Portanto para transferir para o SEBRAEPREV direito acumulado de planos anteriores é necessário que o Participante faça a portabilidade desses planos para o plano SEBRAEPREV.</p>
<p><span style="color: #4a7ebb;"><b>37. Existe prazo para aderir ao plano? </b></span></p>
<p>Resposta: O empregado poderá ingressar no plano a qualquer tempo, lembrando que a condição de Participante Fundador refere-se àquele empregado que ingressou no plano em até 90(noventa) dias da data efetiva do plano ou da data de início de vigência do convênio de adesão de seu patrocinador.</p>
<p><span style="color: #4a7ebb;"><b>38. Qual a vantagem de ser Participante fundador? </b></span></p>
<p>Resposta: Somente ao participante fundador é assegurado o direito ao aporte inicial de serviço passado nos termos do regulamento do plano.</p>
<p><span style="color: #4a7ebb;"><b>39. Como poderá ser feita a contribuição Voluntária? </b></span></p>
<p>Resposta: A contribuição voluntária de Participante, se periódica, deverá corresponder a um percentual inteiro, livremente escolhido pelo Participante e se esporádica não está sujeita a limite máximo, observado em ambos os casos o limite mínimo de 10% de 1 (um) VRP. A contribuição voluntária periódica de Participante, assim como a própria periodicidade, deverá ser efetuada no ato do requerimento da inscrição no Plano, e, posteriormente, no período de junho/julho de cada exercício. O Participante poderá a qualquer tempo, solicitar por escrito a suspensão de sua contribuição voluntária periódica, sem prejuízo de exercer nova opção na próxima data estabelecida.</p>
<p><span style="color: #4a7ebb;"><b>40. O pagamento do Serviço Passado poderá ser a vista? </b></span></p>
<p>Resposta: A contribuição de serviço passado de Participante deverá ocorrer mensalmente desde que este possua, na Data Efetiva do Plano ou na data de início da vigência do Convênio de Adesão do respectivo Patrocinador algum tempo de serviço passado e haja assinalado a opção por essa contribuição quando do preenchimento da ficha de inscrição. O Regulamento possibilita também uma das seguintes situações: a) efetuar contribuição de serviço passado adicional, a qualquer tempo e em valor mínimo de 1 VRP por meio de pagamento efetuado por ele diretamente ao plano.</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre VXZ</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>41. No salário de contribuição poderá ser incluída a gratificação? </b></span></p>
<p>Resposta: O salário de contribuição corresponde a remuneração total paga pelo Patrocinador ao Participante.</p>
<p><span style="color: #4a7ebb;"><b>42. O que acontece com o empregado que tinha o contrato de trabalho suspenso ou interrompido antes da implantação do plano e com previsão de voltar após a data de efetivação do plano? </b></span></p>
<p>Resposta: O empregado poderá inscrever-se no SEBRAEPREV assim que cessar a suspensão ou a interrupção, sendo-lhe, assim, garantidos todos os direitos regulamentares.</p>
<p><span style="color: #4a7ebb;"><b>43. Os recursos financeiros portados ao plano SEBRAEPREV serão incorporados a conta individual de Participante? </b></span></p>
<p>Resposta: Serão mantidos em separado e contabilizados em rubrica própria, porém em conta individual do Participante e serão utilizados quando o Participante tiver atendido as condições de elegibilidade dos benefícios do plano. Por outro lado, os recursos portados poderão ser utilizados, quando for o caso, para custear o serviço passado do Participante na forma do regulamento.</p>
<p><span style="color: #4a7ebb;"><b>44. Em relação à contribuição voluntária, tem um prazo para isso, mensal, como acontece? </b></span></p>
<p>Resposta: A Contribuição Voluntária de Participante, se esporádica, não estará sujeita a limite máximo, e se mensal, deverá corresponder a um percentual inteiro, escolhido pelo Participante, a ser aplicado sobre o seu respectivo Salário-de-Contribuição. A escolha do percentual a ser utilizado na Contribuição Voluntária mensal de Participante deverá ser efetuada no ato do requerimento da inscrição no Plano, e, posteriormente, no período de junho/julho de cada exercício.</p>
<p><span style="color: #4a7ebb;"><b>45. Quando se iniciará o desconto da minha contribuição, ainda nesse mês ou no próximo? </b></span></p>
<p>Resposta: Quando não for possível, pela exigüidade do tempo, que o desconto da primeira contribuição previdenciária ao Plano SEBRAEPREV, referente ao novo Participante vinculado ao respectivo Patrocinador, seja lançado na folha de pagamentos de salários do mesmo mês do ingresso do referido Participante, o mencionado desconto será lançado na folha de pagamentos de salários do mês subseqüente e, assim, sucessivamente.</p>
<p></div></div>
<div class="accordian"><h5 class="toggle "><a href="#"><span class="arrow"></span>Sobre 123</a></h5><div class="toggle-content " style="">
<p><span style="color: #4a7ebb;"><b>46. Quais os procedimentos para se fazer uma portabilidade? Existe algum formulário específico e onde podemos adquiri-lo? </b></span></p>
<p>Resposta: A opção pela portabilidade deverá ser formalizada junto ao Plano de benefícios originário, o Participante assinará em conjunto com as entidades de origem e destino um termo (ou contrato) de portabilidade. OBS: Algumas entidades têm modelos próprios e não aceitam quaisquer outros, enquanto outras orientam o Participante a solicitarem esse termo junto a entidade de destino.</p>
<p><span style="color: #4a7ebb;"><b>47. A que tempo e como pode ser alterado o percentual de contribuição do Serviço Passado? </b></span></p>
<p>Resposta: De acordo com o Regulamento, a escolha do percentual a ser utilizado na Contribuição de Serviço Passado de Participante, deverá ser efetuada no ato do requerimento da inscrição no Plano, e posteriormente, no período de junho/julho de cada exercício. Não havendo manifestação do Participante nas épocas estabelecidas, será mantido, para o período seguinte, o mesmo percentual anterior.</p>
<p><span style="color: #4a7ebb;"><b>48. Com o reajuste salarial e consequente aumento das contribuições realizadas pelos funcionários, que influência isso trará aos valores do serviço passado? </b></span></p>
<p>Resposta: O valor máximo do serviço passado não será recalculado em função de alterações salariais, entretanto, o percentual apurado, será aplicado sobre a remuneração atualizada.</p>
<p><span style="color: #4a7ebb;"><b>49. Pode-se deixar de contribuir em algum mês e depois voltar a fazê-lo? </b></span></p>
<p>Resposta: A contribuição é debitada no contracheque. De acordo com o artigo 14, inciso IV, terá a sua inscrição no Plano SEBRAEPREV cancelada, perdendo, portanto, a qualidade de Participante, aquele que: atrasar, por mais de 90 (noventa) dias, o pagamento de qualquer contribuição devida ao Plano.</p>
<p><span style="color: #4a7ebb;"><b>50. Existe diferença entre ser demitido ou pedir demissão, nos casos de elegibilidade para o resgate do SEBRAEPREV? </b></span></p>
<p>Resposta: Não. O pagamento do resgate está condicionado à cessação do vínculo empregatício, não importando a forma de desligamento.</p>
<p><span style="color: #4a7ebb;"><b>51. Pretendo utilizar a Aposentadoria Antecipada aos 53 anos. Tenho que sinalizar isto no momento da adesão? </b></span></p>
<p>Resposta: Não, se deverá informar no momento em que atingir as condições para a aposentadoria antecipada.</p>
<p></div></div>
</div>
<p></div></div></div>
							</div>
					</div>
			</div>
	<div id="sidebar" style="display:none">		<div id="recent-posts-2" class="widget widget_recent_entries">		<div class="heading"><h3>Outras Notícias</h3></div>		<ul>
					<li>
				<a href="http://sebraeprevidencia.com.br/ja-comecou-o-periodo-para-alterar-os-perfis-de-investimentos-e-o-percentual-de-contribuicao/" title="Já começou o período para alterar os perfis de investimentos e o percentual de contribuição">Já começou o período para alterar os perfis de investimentos e o percentual de contribuição</a>
							<span class="post-date">8 de junho de 2015</span>
						</li>
					<li>
				<a href="http://sebraeprevidencia.com.br/comunicacao-foi-tema-da-x-oficina-de-gestores/" title="Comunicação foi tema da X Oficina de Gestores">Comunicação foi tema da X Oficina de Gestores</a>
							<span class="post-date">2 de junho de 2015</span>
						</li>
					<li>
				<a href="http://sebraeprevidencia.com.br/iv-forum-fala-de-economia-e-qualidade-de-vida/" title="IV Fórum fala de economia e qualidade de vida">IV Fórum fala de economia e qualidade de vida</a>
							<span class="post-date">1 de junho de 2015</span>
						</li>
					<li>
				<a href="http://sebraeprevidencia.com.br/periodo-para-alterar-o-perfil-de-investimento-e-o-percentual-de-contribuicao-comeca-em-junho-e-vai-ate-o-dia-31-de-julho/" title="Período para alterar o perfil de investimento e o percentual de contribuição começa em junho e vai até o dia 31 de julho">Período para alterar o perfil de investimento e o percentual de contribuição começa em junho e vai até o dia 31 de julho</a>
							<span class="post-date">27 de maio de 2015</span>
						</li>
					<li>
				<a href="http://sebraeprevidencia.com.br/comissoes-tematicas-sao-definidas-pelo-conselho-deliberativo/" title="Comissões Temáticas são definidas pelo Conselho Deliberativo">Comissões Temáticas são definidas pelo Conselho Deliberativo</a>
							<span class="post-date">14 de maio de 2015</span>
						</li>
				</ul>
		</div></div>
		</div>
          
	</div>

        	    
	<?php get_footer();?>