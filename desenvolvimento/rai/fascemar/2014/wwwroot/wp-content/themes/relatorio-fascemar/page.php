<?php get_header(); ?>
	<?php
	while ( have_posts() ) : the_post();
	$slug = the_slug(false);
	?>
		<div class="banner white hidden-xs">
			<img src="<?php echo home_url();?>/assets/images/photos/<?php echo $slug;?>.jpg"/>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 textRight">
						<div class="arrow"></div>
						<a href="<?php echo home_url();?>">
							<img class="logo" src="<?php echo home_url();?>/assets/images/logo2.png">
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile;?>
	<div class="body">
		<div class="container hidden-xs">
			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<?php get_sidebar();?>
				</div>
				<div class="col-md-7">
					<div class="content">
						<?php
						$args = array( 'posts_per_page' => '-1', 'category_name' => $slug,'order' => 'ASC');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();	
						?>
						<div class="box" name="<?php echo get_the_ID();?>" id="id<?php echo get_the_ID();?>">
							<h5><?php the_title();?></h3>
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