<?php get_header(); ?>
	<?php
	while ( have_posts() ) : the_post();
	$title = get_the_title();
	$slug = the_slug(false);
	?>
	<?php endwhile;?>
	<div class="title-page">
		<div class="page-line"></div>
		<div class="page-name"><?php echo $title;?></div>
	</div>
	<div class="body">
		<div class="container hidden-sm hidden-xs">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<?php get_sidebar();?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="content">
						<?php
						$args = array( 'posts_per_page' => '-1', 'category_name' => $slug);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();	
						?>
						<div class="box" name="<?php echo get_the_ID();?>" id="id<?php echo get_the_ID();?>">
							<?php the_content();?>
						</div>
						<?php
						endwhile;
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="container visible-xs visible-sm">
			<div class="row">
				<div class="col-xs-12">
					<div class="content"> 
						<div id="owl-demo" class="owl-carousel owl-theme"> 
							<?php
							$args = array( 'posts_per_page' => '-1', 'category_name' => $slug,'order' => 'ASC');
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();	
							?>
						  	<div class="item">
								<h5><?php the_title();?></h3>
								<div class="textitem">
								<?php the_content();?>
								</div>
							</div>
							<?php
							endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>