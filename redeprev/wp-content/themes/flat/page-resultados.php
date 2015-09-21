<?php get_header();?>
<?php
$args = array('post_type' => 'banners', 'posts_per_page' => '1', 'category_name' => 'resultados');
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<div class="bar-first bar-resultados">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo bloginfo('template_url');?>/assets/images/resultados.png" alt="" class="imgresultados">
			</div>
			<div class="col-md-6 col-md-offset-1">
				<h2><?php the_title();?></h2>
          		<p><?php the_content();?></p>
			</div>
		</div>
	</div>
</div>
<?php endwhile;?>
<div class="rent-content">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<img class="x" src="<?php echo bloginfo('template_url');?>/assets/images/x.png">
					<div class="col-md-12">	
					<?php
				        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '1', 'category__and' => array(catid('resultados'),catid('rentabilidade')));
				        $the_query = new WP_Query( $args );
				        while ( $the_query->have_posts() ) : $the_query->the_post();
				    ?>
				    	<h1><?php echo the_title();?></h1>
				    	<?php  echo the_content();?>
				    <?php endwhile;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bar2-resultados">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-7">
						<?php
				        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '1', 'category__and' => array(catid('resultados'),catid('investimentos')));
				        $the_query = new WP_Query( $args );
				        while ( $the_query->have_posts() ) : $the_query->the_post();
				        ?>
						<h2 class="title-resultados margin-top-none"><?php the_title();?></h2>
						<p><?php the_content();?></p>
						<?php endwhile;?>
						<?php
				        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '1', 'category__and' => array(catid('resultados'),catid('caixa')));
				        $the_query = new WP_Query( $args );
				        while ( $the_query->have_posts() ) : $the_query->the_post();
				        ?>
						<div class="pol-inves">
							<h2><?php the_title();?></h2>
							<div>
								<p><?php the_content();?></p>
							</div>
						</div>
						<?php endwhile;?>
					</div>
					<div class="col-md-5 side-graficos">
						<img src="<?php echo bloginfo('template_url');?>/assets/images/grafico.png" alt="">				
						<?php
				        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '1', 'category__and' => array(catid('resultados'),catid('balancos')));
				        $the_query = new WP_Query( $args );
				        while ( $the_query->have_posts() ) : $the_query->the_post();
				        $ano1 = get_post_meta($post->ID, 'ano1', true);
				        $ano2 = get_post_meta($post->ID, 'ano2', true);
				        $ano3 = get_post_meta($post->ID, 'ano3', true);
				        $download1 = get_post_meta($post->ID, 'download1', true);
				        $download2 = get_post_meta($post->ID, 'download2', true);
				        $download3 = get_post_meta($post->ID, 'download3', true);
				        ?>					
						<h2 class="title-resultados"><?php the_title();?></h2>
						<p><?php the_content();?></p>
						<ul class="list-balanco">
							<div class="col-md-4">
								<li>
									<a href="<?php echo $download1;?>" target="_blank"><span><?php echo $ano1;?></span></a>
								</li>
							</div>
							<div class="col-md-4">
								<li>
									<a href="<?php echo $download2?>" target="_blank"><span><?php echo $ano2;?></span></a>
								</li>
							</div>
							<div class="col-md-4">
								<li>
									<a href="<?php echo $download3;?>" target="_blank"><span><?php echo $ano3;?></span></a>
								</li>
							</div>
						</ul>				
						<?php endwhile;?>
					</div>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1 ava-rel">
				<div class="row">
					<div class="col-md-7 ava">
						<?php
				        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '1', 'category__and' => array(catid('resultados'),catid('avaliacao')));
				        $the_query = new WP_Query( $args );
				        while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
						<h2 class="title-resultados"><?php the_title();?></h2>
						<p><?php the_content();?></p>
						<?php endwhile;?>
						<ul>
							<div class="row">
								<?php
								$count=1;
						        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('resultados'),catid('pareceres')));
						        $the_query = new WP_Query( $args );
						        while ( $the_query->have_posts() ) : $the_query->the_post();
								if($count==3) $count=1;
								?>
									<?php if($count==1){?>
									<div class="col-md-12 margin-bottom-20">
										<div class="row">
											<div class="col-md-6">
												<div class="element">
													<li><?php the_title();?></li>
													<div class="ava-box">
														<?php the_content();?>
													</div>
												</div>
											</div>
									<?php } elseif ($count==2) { ?>
											<div class="col-md-6">
												<div class="element">
													<li><?php the_title();?></li>
													<div class="ava-box">
														<?php the_content();?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php } else{} ?>							
								<?php 
								$count++;
								endwhile;
								?>				
							</div>
						</ul>
						<div class="col-md-12 rentabilidade">
							<div class="btn-rent">
							<div>Rentabilidade Quotas</div>
							</div>
						</div>						
					</div>
					<div class="col-md-5 rel">
						<img src="<?php echo bloginfo('template_url');?>/assets/images/relatorios.png" alt="">
						<ul>
							<div class="row">
								<div class="col-md-12">
									<?php
							        $args = array('post_type' => 'extras', 'order'=>'DSC', 'posts_per_page' => '-1', 'category__and' => array(catid('resultados'),catid('relatorios')));
							        $the_query = new WP_Query( $args );
							        while ( $the_query->have_posts() ) : $the_query->the_post();
									?>
									<div class="col-md-6">
										<div class="element">
											<li><?php the_title();?></li>
											<div class="ava-box">
												<?php the_content();?>
											</div>
										</div>
									</div>
									<?php endwhile;?>
								</div>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>