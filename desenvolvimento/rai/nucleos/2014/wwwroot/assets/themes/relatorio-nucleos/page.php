<?php get_header(); ?>
	<?php
	while ( have_posts() ) : the_post();
		if(is_page('abertura')):
			$num = '1';
		elseif(is_page('institucional')):
			$num = '2';
		elseif(is_page('gestao-de-investimentos')):
			$num = '3';
		elseif(is_page('resultados')):
			$num = '4';
		elseif(is_page('pareceres')):
			$num = '5';
		elseif(is_page('encerramento')):
			$num = '6';
		else:
		endif;

		$slug = the_slug(false);
		echo '
		<div class="banner hidden-xs">
			<img class="imgt" src="' . home_url() . '/assets/images/photos/' . $slug . '.jpg"/>
			<img class="imgf" src="' . home_url() . '/assets/images/photos/' . $slug . '.jpg"/>
		</div>
		<div class="white hidden-xs">
			<img class="title-image" src="' . home_url() . '/assets/images/photos/' . $slug . '-title.png"/>
			<img class="title-image-fixed" src="' . home_url() . '/assets/images/photos/' . $slug . '-title.png"/>
		</div>
		';
	endwhile;
	?>
	<div class="body bcolor<?php echo $num;?>">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<?php get_sidebar();?>
				</div>
				<div class="col-md-7">
					<div class="content">
						<?php
						$args = array( 'posts_per_page' => '-1', 'category_name' => $slug, 'order' => 'ASC');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();	
						?>
						<div class="box" name="<?php echo get_the_ID();?>">
							<h5 class="color<?php echo $num;?>"><?php the_title();?></h3>
							<?php
							the_content();
							?>
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