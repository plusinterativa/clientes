<?php get_header(); ?>
<div class="agebox">
					<div></div>
					<span></span>
				</div>
<div class="container">
	<!-- QUEM SOMOS NÓS -->
		<div id="quemSomos" class="col-md-12">
			<div class="row">
				<img class=" divisoria img-responsive" src="<?php bloginfo('template_url');?>/assets/images/quem-somos-divisoria.png">
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="title">Quem Somos</h3>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="main">
					<div class="row">
					<ul id="og-grid" class="og-grid">
						<?php
						$args = array('posts_per_page' => '-1', 'category_name' => 'quemsomos');
						$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li class="integrantes ">
							<a href="" data-title="<?php the_title();?>" data-description="<?php the_content();?>">
								<?php the_post_thumbnail('quemsomos'); ?><!--<img src="<?php bloginfo('template_url');?>/assets/images/foto-colorida.jpg" alt="img01"/>-->
							</a>
						</li>
						<?php endwhile;?>
					</ul>
					<div class="col-md-12">
						<img class="seta-azul" src="<?php bloginfo('template_url');?>/assets/images/seta-azul.png"/>
					</div>
					</div>
				</div>
			</div>
		</div>
<!-- NOSSAS PROPOSTAS -->
	<div id="nossasProp" class="col-md-12">
			<div class="row">
				<img class=" divisoria img-responsive" src="<?php bloginfo('template_url');?>/assets/images/quem-somos-divisoria.png">
			</div>
			<div class="col-md-12">
				<div class="row">
					<h3 class="title">Nossas Propostas</h3>
				</div>
			</div>
			<div class="prop-content">
				<?php
			$args = array('posts_per_page' => '-1', 'category_name' => 'propostas');
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="img circle-unchecked"></div>
						<span class="hov"><?php the_content(); ?></span>
					</div>
				</div>
				<?php endwhile;?>
				<div class="col-md-12">
					<img class="seta-laranja" src="<?php bloginfo('template_url');?>/assets/images/seta-laranja.png"/>
				</div>
			</div>
	</div>
<!-- NOTICIAS -->
	<div id="noticias" class="col-md-12">
		<div class="row">
			<img class=" divisoria img-responsive" src="<?php bloginfo('template_url');?>/assets/images/noticias-divisoria.png">
		</div>
		<h3 class="title">Notícias</h3>
		<div class="row margin-control all-news">
			<?php
			$args = array('posts_per_page' => '6', 'category_name' => 'noticias');
			$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-md-4">
				 
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('min', array('class'=>'img-noticia img-responsive')); ?></a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p> <?php the_excerpt(); ?> </p>
				<a class="more" href="<?php the_permalink(); ?>">Leia Mais</a>
			</div>
			<?php endwhile;?>


		</div>
		<div class="col-md-12">
			<img class="seta-verde" src="<?php bloginfo('template_url');?>/assets/images/seta-verde.png"/>
		</div>
	</div>
<!--FALE CONOSCO-->
	<div id="fale" class="col-md-12">
		<div class="row">
			<img class=" divisoria img-responsive" src="<?php bloginfo('template_url');?>/assets/images/fale-conosco-divisoria.png">
		</div>
		<div class="col-md-12">
			<div class="row">
				<h2 class="title">Fale Conosco</h2>
			</div>
			<div class="row contact">
				<p> Pellentesque vulputate nisl neque, vel vulputate nunc auctor id. Integer sem nunc, hendrerit quis ultrices a, faucibus a lacus.</p>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<form method="post" action="<?php echo home_url();?>/mail/send.php" class="formulario">
					<div class="col-md-12">
						<div class="row">

							<?php if(isset($_GET['sucesso'])){?>
                            sucesso
                            <?php } if(isset($_GET['erro'])){?>
                            Escolha um assunto para sua mensagem ser enviada
                            <?php } ?>
							<p>Nome</p>
							<input name="name" type="text" id="name" placeholder="Nome Completo">
							<p>Email</p>
							<input name="email" type="text" id="email" placeholder="Email">
							<p>Telefone</p>
							<input name="telefone" type="text" id="telefone" placeholder="(xx) xxxx-xxxx">
							<p>Mensagem</p>
							<textarea name="textarea" placeholder="Digite sua mensagem"></textarea>
							<button type="submit" class="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>