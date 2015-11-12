<?php get_header(); ?>
	<?php
	while ( have_posts() ) : the_post();
	$slug = the_slug(false);
	?>
	<?php endwhile;?>
	<div class="body">
		<div class="container hidden-xs">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<?php get_sidebar();?>

				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="content">						
						<?php
						$args = array( 'posts_per_page' => '-1', 'category_name' => $slug, 'orderby' => 'ASC');
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
		<div class="container visible-xs">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title-sidebar"><?php echo $slug;?></h2>							
						</div>
						<div class="col-md-8 col-md-offset-2">
							<div id="owl-demo" class="owl-carousel">
								<?php
									$args = array( 'posts_per_page' => '-1', 'category_name' => $slug, 'orderby' => 'ASC');
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post();										
								?>
									<div class="box" name="<?php echo get_the_ID();?>" id="id<?php echo get_the_ID();?>">
									<h3><?php the_title();?></h3>
									<?php the_content();?>
									</div>
								<?php
								endwhile;
								?>
							</div>
						</div>
					</div>
				</div>		
	</div>
<?php get_footer(); ?>