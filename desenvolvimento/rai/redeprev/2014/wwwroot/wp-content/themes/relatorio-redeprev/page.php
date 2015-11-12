<?php get_header(); ?>
	<?php
	while ( have_posts() ) : the_post();
	$slug = the_slug(false);
	endwhile;
	?>
	<div class="banner">
		<img src="<?php echo home_url();?>/assets/images/photos/banner.png"/>
	</div>
	<div class="banner fixed visible-md visible-lg">
		<img src="<?php echo home_url();?>/assets/images/photos/banner.png"/>
	</div>
	<div class="body">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php get_sidebar();?>
				</div>				
				<div class="col-md-7 col-md-offset-1">
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
	</div>
<?php get_footer(); ?>