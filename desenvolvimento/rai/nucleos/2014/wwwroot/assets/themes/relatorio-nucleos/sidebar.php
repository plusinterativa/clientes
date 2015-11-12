<?php
while ( have_posts() ) : the_post();
	if(is_page('abertura')):
		$num = '1';
		$class1 = 'open';
		$class21 = 'bgm1';
	elseif(is_page('institucional')):
		$num = '2';
		$class2 = 'open';
		$class22 = 'bgm2';
	elseif(is_page('gestao-de-investimentos')):
		$num = '3';
		$class3 = 'open';
		$class23 = 'bgm3';
	elseif(is_page('resultados')):
		$num = '4';
		$class4 = 'open';
		$class24 = 'bgm4';
	elseif(is_page('pareceres')):
		$num = '5';
		$class5 = 'open';
		$class25 = 'bgm5';
	elseif(is_page('encerramento')):
		$num = '6';
		$class6 = 'open';
		$class26 = 'bgm6';
	else:
	endif;
endwhile;
?>
<div class="side-menu hidden-xs hidden-sm">
	<div class="pages">
		<div class="pages-title">
			<?php 
			while ( have_posts() ) : the_post();
			if(is_page('abertura')):
			?>
			<span>Abertura</span>
			<?php else:	?>
			<a href="<?php echo home_url();?>/abertura">Abertura</a>
			<?php endif;?>
			<?php endwhile;?>
		</div>
		<div class="pages-content <?php echo $class1;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'abertura', 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<div class="pages">
		<div class="pages-title">
			<?php 
			while ( have_posts() ) : the_post();
			if(is_page('institucional')):
			?>
			<span>Institucional</span>
			<?php else:	?>
			<a href="<?php echo home_url();?>/institucional">Institucional</a>
			<?php endif;?>
			<?php endwhile;?>
		</div>
		<div class="pages-content <?php echo $class2;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'institucional', 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<div class="pages">
		<div class="pages-title">
			<?php 
			while ( have_posts() ) : the_post();
			if(is_page('gestao-de-investimentos')):
			?>
			<span>Gestão de Investimentos</span>
			<?php else:	?>
			<a href="<?php echo home_url();?>/gestao-de-investimentos">Gestão de Investimentos</a>
			<?php endif;?>
			<?php endwhile;?>
		</div>
		<div class="pages-content <?php echo $class3;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'gestao-de-investimentos', 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<div class="pages">
		<div class="pages-title">
			<?php 
			while ( have_posts() ) : the_post();
			if(is_page('resultados')):
			?>
			<span>Resultados</span>
			<?php else:	?>
			<a href="<?php echo home_url();?>/resultados">Resultados</a>
			<?php endif;?>
			<?php endwhile;?>
		</div>
		<div class="pages-content <?php echo $class4;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Resultados', 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<div class="pages">
		<div class="pages-title">
			<?php 
			while ( have_posts() ) : the_post();
			if(is_page('pareceres')):
			?>
			<span>Pareceres</span>
			<?php else:	?>
			<a href="<?php echo home_url();?>/pareceres">Pareceres</a>
			<?php endif;?>
			<?php endwhile;?>
		</div>
		<div class="pages-content <?php echo $class5;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Pareceres', 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<div class="pages">
		<div class="pages-title">
			<?php 
			while ( have_posts() ) : the_post();
			if(is_page('encerramento')):
			?>
			<span>Encerramento</span>
			<?php else:	?>
			<a href="<?php echo home_url();?>/encerramento">Encerramento</a>
			<?php endif;?>
			<?php endwhile;?>
		</div>
		<div class="pages-content <?php echo $class6;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Encerramento', 'order' => 'ASC');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
</div>
<div class="side-menu visible-xs visible-sm">
	<?php 
	while ( have_posts() ) : the_post();
	if(is_page('abertura')):
	?>
		<div class="pages">
			<div class="pages-title <?php echo $class21;?>">
				<span>Abertura</span>
			</div>
			<div class="pages-content <?php echo $class1;?>">
				<?php
				$args = array( 'posts_per_page' => '-1', 'category_name' => 'abertura', 'order' => 'ASC');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();	
				?>	
					<div>
						<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
					</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
	<?php endif;?>
	<?php endwhile;?>
	<?php 
	while ( have_posts() ) : the_post();
	if(is_page('institucional')):
	?>
		<div class="pages">
			<div class="pages-title <?php echo $class22;?>">
				<span>Institucional</span>
			</div>
			<div class="pages-content <?php echo $class2;?>">
				<?php
				$args = array( 'posts_per_page' => '-1', 'category_name' => 'institucional', 'order' => 'ASC');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();	
				?>	
					<div>
						<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
					</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
	<?php endif;?>
	<?php endwhile;?>
	<?php 
	while ( have_posts() ) : the_post();
	if(is_page('gestao-de-investimentos')):
	?>
		<div class="pages">
			<div class="pages-title <?php echo $class23;?>">
				<span>Gestão de Investimentos</span>
			</div>
			<div class="pages-content <?php echo $class3;?>">
				<?php
				$args = array( 'posts_per_page' => '-1', 'category_name' => 'gestao-de-investimentos', 'order' => 'ASC');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();	
				?>	
					<div>
						<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
					</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
	<?php endif;?>
	<?php endwhile;?>
	<?php 
	while ( have_posts() ) : the_post();
	if(is_page('resultados')):
	?>
		<div class="pages">
			<div class="pages-title <?php echo $class24;?>">
				<span>Resultados</span>
			</div>
			<div class="pages-content <?php echo $class4;?>">
				<?php
				$args = array( 'posts_per_page' => '-1', 'category_name' => 'Resultados', 'order' => 'ASC');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();	
				?>	
					<div>
						<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
					</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
	<?php endif;?>
	<?php endwhile;?>
	<?php 
	while ( have_posts() ) : the_post();
	if(is_page('pareceres')):
	?>
		<div class="pages">
			<div class="pages-title  <?php echo $class25;?>">
				<span>Pareceres</span>
			</div>
			<div class="pages-content <?php echo $class5;?>">
				<?php
				$args = array( 'posts_per_page' => '-1', 'category_name' => 'Pareceres', 'order' => 'ASC');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();	
				?>	
					<div>
						<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
					</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
	<?php endif;?>
	<?php endwhile;?>
	<?php 
	while ( have_posts() ) : the_post();
	if(is_page('encerramento')):
	?>
		<div class="pages">
			<div class="pages-title <?php echo $class26;?>">
				<span>Encerramento</span>
			</div>
			<div class="pages-content <?php echo $class6;?>">
				<?php
				$args = array( 'posts_per_page' => '-1', 'category_name' => 'Encerramento', 'order' => 'ASC');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();	
				?>	
					<div>
						<span class="b2color<?php echo $num;?>" name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
					</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
	<?php endif;?>
	<?php endwhile;?>
</div>