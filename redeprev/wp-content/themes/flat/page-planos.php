<?php get_header();?>
<?php
$args = array('post_type' => 'banners', 'posts_per_page' => '1', 'category_name' => 'planos');
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();?>
<div class="bar-planos bar-first">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img class="bigpig"src="<?php echo bloginfo('template_url');?>/assets/images/pigbig.png" alt="">
			</div>
			<div class="col-md-7 col-md-offset-1">
				<h2><?php the_title();?></h2>
          		<p><?php the_content();?></p>
			</div>
		</div>
	</div>
</div>
<?php endwhile;?>
<div class="bg-bar-2">
	<div class="adesao-content">
		<img class="x" src="<?php echo bloginfo('template_url');?>/assets/images/x.png">
		<div class="container">
			<div class="row">
				<?php
				$args = array('post_type' => 'extras', 'posts_per_page' => '1',  'category__and' => array(catid('planos'),catid('adesao')));
				$the_query = new WP_Query( $args );
				while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-12">	
							<h1><?php the_title();?></h1>
							<?php the_content();?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<div class="formulario-content">
		<img class="x" src="<?php echo bloginfo('template_url');?>/assets/images/x.png">
		<div class="container">
			<div class="row">
				<?php
				$args = array('post_type' => 'extras', 'posts_per_page' => '1',  'category__and' => array(catid('planos'),catid('formulario')));
				$the_query = new WP_Query( $args );
				while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-12">	
							<h1><?php the_title();?></h1>
							<?php the_content();?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<div class="bar2-planos container animated bounceInUp">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
				<?php
		        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '2', 'category__and' => array(catid('planos'),catid('destaques')));
		        $the_query = new WP_Query( $args );
		        while ( $the_query->have_posts() ) : $the_query->the_post();
		        $class = get_post_meta($post->ID, 'class', true);
		        $ben = get_post_meta($post->ID, 'benefícios', true);
		        ?>
				<div class="col-md-6 text-center animated text<?php echo $class;?>">
					<div class="ball inline-block">
						<div class="circle <?php echo $class;?>circle">
						<div class="circle <?php echo $class;?>"><?php the_title();?></div>
						</div>
					</div>				
				</div>			
				<div class="col-md-10 col-md-offset-1 content content<?php echo $class;?> animated">
					<div class="content-text">
						<p><?php the_content();?></p>
					</div>
					<div class="content-footer"><h2 class="benef"><?php echo $ben;?></h2></div>
				</div>	
				<?php endwhile;?>
				</div>						
			</div>		
			<div class="col-md-12 col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="conteudo visible-xs visible-sm">
					<div class="owl-carousel">
						<?php
						$args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('planos'),catid('lista')));
						$the_query = new WP_Query( $args );
						while ( $the_query->have_posts() ) : $the_query->the_post();
						$download = get_post_meta($post->ID, 'download', true);
						?>		
							<div class="conteudo">
								<h1><?php the_title();?></h1>
								<div class="text-content"><?php the_content();?></div>
								<a class="link" target="_blank" href="<?php echo $download;?>">
									Faça o download do Regulamento do Plano
								</a>
							</div>
						<?php endwhile;?>

					</div>
					</div>
					<div class="col-md-12">
						<ul class="planos-list hidden-sm hidden-xs">
							<?php
							$args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('planos'),catid('lista')));
							$the_query = new WP_Query( $args );
							while ( $the_query->have_posts() ) : $the_query->the_post();
							$download = get_post_meta($post->ID, 'download', true);
							?>				
							<li><?php the_title();?>
								<span>
									<div class="conteudo">
										<p><?php the_content();?></p>
									</div>
									<a class="link" target="_blank" href="<?php echo $download;?>">
										Faça o download do Regulamento do Plano
									</a>
								</span>					
							</li>
							<?php endwhile;?>				
						</ul>
					</div>
					<div class="col-md-6">
						<div class="btn-plano btn-adesao">Faça a sua Adesão!</div>
					</div>					
					<div class="col-md-6">						
						<div class="btn-plano btn-form">Formulários</div>
					</div>	
					<div class="col-md-6">
						<?php 
							$args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('botoes'),catid('planos')));
							$the_query = new WP_Query( $args );
							while ( $the_query->have_posts() ) : $the_query->the_post();						
							$link = get_post_meta($post->ID, 'link', true);
						?>
							<a href="<?php echo $link;?>" target="_blank"><div class="btn-plano"><?php the_title();?></div></a>
							<?php endwhile;?>
					</div>							
				</div>							
			</div>
		</div>
	</div>
</div>
<?php 
if(isset($_GET['planos'])):
    if($_GET['planos']=="open"):
?>
		<script>
		setTimeout(function(){
			$('.btn-adesao').trigger("click");
		},500);
		</script>               	
<?php		
	endif;		
endif;?>

<?php 
if(isset($_GET['planos'])):
    if($_GET['planos']=="formularios"):
?>
    <script>
    setTimeout(function(){
      $('.btn-form').trigger("click");
    },1000);
    </script>                 
<?php   
  endif;    
endif;?>
<?php get_footer();?>