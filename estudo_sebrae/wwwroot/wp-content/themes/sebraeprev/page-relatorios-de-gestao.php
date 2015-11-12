<?php get_header('single');?>

<div id="main" class="" style="overflow:hidden !important;">
	<div class="avada-row" style="">
		<div id="content" style="float:left;">
			<div id="post-1489" class="post-1489 page type-page status-private hentry">
				<div class="post-content">
					<p><a><img class="size-full wp-image-1079 alignleft" alt="seta-azul" src="http://sebraeprevidencia.com.br/wp-content/uploads/2013/07/seta-azul1.png" width="22" height="44"></a></p><div class="title"><h2>Relatórios de Gestão</h2><div class="title-sep-container"><div class="title-sep"></div></div></div>
					<div class="avada-container">
						<section class="columns columns-1" style="width:100%">
							<div class="holder">
								<div class="accordian">
									<?php while (have_posts()) : the_post();?>
										<?php the_content();?>
									<?php endwhile;?>
							
								</div>
								
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();?>