<?php get_header(); ?>
	<div class="bg">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					
					<div class="detail1 visible-xs">
						<img src="<?php echo home_url();?>/assets/images/detail1.png">
					</div>
					<div class="hidden-xs">
					<br/>					
					<br/>					
					<br/>					
					<br/>					
					<br/>					
					</div>
					<?php
					if(preg_match('/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT'])){
					?>
						<object style="width:100%;" type="video/mp4" data="<?php echo home_url();?>/assets/video/video.mp4" width="340" height="280">
						  	<param name="src" value="<?php echo home_url();?>/assets/video/video.mp4" />
						  	<param name="controller" value="true" />
						  	<param name="autostart" value="true" />
						</object>
					<?php
					}
					else{
					?>
						<video style="width:100%;" autoplay controls>
						    <source src="<?php echo home_url();?>/assets/video/video.mp4" type="video/mp4">
						</video>
					<?php
					}
					?>
					<div class="detail2 visible-xs">
						<img src="<?php echo home_url();?>/assets/images/detail2.png">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	/*
	$args = array( 'posts_per_page' => '5', 'orderby' => 'ASC');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();	
		the_post_thumbnail();
		the_title();
		the_content();
	endwhile;
	*/
	?>
<?php get_footer(); ?>
