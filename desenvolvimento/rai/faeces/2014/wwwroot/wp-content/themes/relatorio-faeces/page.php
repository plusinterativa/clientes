<?php get_header();?>
	<?php
	while ( have_posts() ) : the_post();
	$slug = the_slug(false);
	endwhile;
	?>
<div id="main-content" class="blog-grid">
	<div class="page-wrapper single">
		<div class="page-main blog-list">
			<div class="banner-top-content">
				<a href="<?php echo home_url();?>">
					<img class="logo" src="<?php echo home_url();?>/assets/images/logonegativa.png" style="display: block;">
				</a>
				<div class="banner-top-content-in">
					<img style="top:0 !important;" src="<?php echo home_url();?>/assets/images/photos/<?php echo $slug;?>.jpg">
				</div>
			</div>
			<div class="grid-blog-list">
				<div class="container post-wrapper">
					<div class="row">
						<div class="col-md-3">
							<?php get_sidebar();?>
						</div>
						<div class="col-md-8 col-md-offset-1">
							<div class="post-title">
								<?php while ( have_posts() ) : the_post();?>
								<h3 class="post-header">
									<?php the_title();?>
								</h3>
								<?php endwhile;?>
							</div>
							<div class="post-content-wrapper">
								<div class="post-main-content singlepagelight">
									<?php
									$args = array( 'posts_per_page' => '-1', 'category_name' => $slug, 'order' => 'ASC');
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
						<div style="height:20px;clear:both;"></div>
					</div>
					<?php if(is_home()):else:?>
					<div class="footer row">
						<div class="col-md-3  col-xs-6">
							<div class="plus">
								<a target="_blank" href="http://plusinterativa.com">
									<div>Desenvolvido pela Plus Interativa</div>
									<img src="http://plusinterativa.com/desenvolvimento/rai/nucleos/2014/wwwroot/assets/images/plus.png">
								</a>
							</div>
							<div class="c"></div>
						</div>
						<div class="col-md-9  col-xs-6 textright">
							<img src="<?php echo home_url();?>/assets/images/footer.png">
						</div>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>