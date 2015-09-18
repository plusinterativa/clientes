<?php get_header(); while ( have_posts() ) : the_post(); $currentId = get_the_id(); ?>
	<div class="container">
		<div class="header">
			<div class="row">
				<div class="col-md-12">
					<a class="back-home" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url');?>/assets/images/seta-dupla.png"/>
					<span>Página Inicial</span></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="border">
						<div class="logo">
							<img class="img-responsive hidden-xs hidden-sm" src="<?php bloginfo('template_url');?>/assets/images/logo-anabb-med.png">
							<img class="img-responsive hidden-md hidden-lg" src="<?php bloginfo('template_url');?>/assets/images/logo-anabb-small.png">
						</div>
						<h1>Notícias</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-9">
							<h2><?php the_title(); ?></h2>
							<div class="border-orange"></div>
							 <?php the_post_thumbnail('max', array('class' => 'thumbnail-mobile')); ?>
							<p class="date"> <span class="capitalize"><?php echo get_the_date('l'); ?>, <?php echo get_the_date('d'); ?></span> de <span class="capitalize"> <?php echo get_the_date('F'); ?></span>  de <?php echo get_the_date('Y'); ?></p>

							<p class="news-content"><?php the_content(); ?></p>

							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<p class="posted">Postado às <?php the_time('G:i'); ?>.</p>
									</div>
									<!--<div class="col-md-2">
										<a href="" class="footer-links">Permalink</a>
									</div>
									<div class="col-md-2">
										<a href="" class="footer-links">Compartilhar</a>
									</div> -->
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					<div class="col-md-3">
						<h2 class="others">Outras Notícias</h2>
						<div class="border-purple"></div>
						<ul>
							<?php
							$args = array('posts_per_page' => '-1', 'category_name' => 'noticias', 'post__not_in' => array($currentId));
							$the_query = new WP_Query( $args );
							while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							

							<?php endwhile; ?>
						</ul>
						<div class="other-contact">
							<img src="<?php bloginfo('template_url');?>/assets/images/footer-mail-small.png">
							<p>contato@anabbdeverdade.com.br</p>
							<img src="<?php bloginfo('template_url');?>/assets/images/logo-anabb-x-small.png">
							<img src="<?php bloginfo('template_url');?>/assets/images/original-logo-small.png">
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			
		</div>
	</div>


<?php get_footer(); ?>