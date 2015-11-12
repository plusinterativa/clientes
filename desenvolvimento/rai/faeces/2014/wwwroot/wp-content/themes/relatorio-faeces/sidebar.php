<?php
while ( have_posts() ) : the_post();
	if(is_page('abertura')):
		$num = '1';
		$class1 = 'open';
	elseif(is_page('acontecimentos-em-destaque')):
		$num = '2';
		$class2 = 'open';
	elseif(is_page('Informações Gerais')):
		$num = '8';
		$class8 = 'open';
	elseif(is_page('investimentos')):
		$num = '3';
		$class3 = 'open';
	elseif(is_page('plano-assistencial')):
		$num = '7';
		$class7 = 'open';
	elseif(is_page('demonstracoes-contabeis')):
		$num = '4';
		$class4 = 'open';
	elseif(is_page('pareceres')):
		$num = '5';
		$class5 = 'open';
	elseif(is_page('encerramento')):
		$num = '6';
		$class6 = 'open';
	else:
	endif;
endwhile;
?>
<div class="side-menu">
	<div class="pages">
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('abertura')):
			?>
			<div class="aberto pages-title">
				<span>Abertura</span>
			</div>
			<?php else:	?>
			<div class="pages-title">
				<a href="<?php echo home_url();?>/abertura">Abertura</a>
			</div>
		<?php endif;?>
		<?php endwhile;?>
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('acontecimentos-em-destaque')):
			?>
			<div class="aberto pages-title">
				<span>Acontecimentos em destaque</span>
			</div>
			<?php else:	?>
			<div class="pages-title">
				<a href="<?php echo home_url();?>/acontecimentos-em-destaque">Acontecimentos em destaque</a>
			</div>
		<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class2;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'acontecimentos-em-destaque', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('Informações Gerais')):
			?>
			<div class="aberto pages-title">
				<span>Informações Gerais</span>
			</div>
			<?php else:	?>
			<div class="pages-title">
				<a href="<?php echo home_url();?>/informacoes-gerais">Informações Gerais</a>
			</div>
		<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class8;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'informacoes-gerais', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('investimentos')):
			?>
				<div class="aberto pages-title">
					<span>Investimentos</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/investimentos">Investimentos</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class3;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'investimentos', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('plano-assistencial')):
			?>
				<div class="aberto pages-title">
					<span>Plano Assistencial</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/plano-assistencial">Plano Assistencial</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class7;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'plano-assistencial', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('demonstracoes-contabeis')):
			?>
				<div class="aberto pages-title">
					<span>Demonstrações contábeis</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/demonstracoes-contabeis">Demonstrações contábeis</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class4;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'demonstracoes-contabeis', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('pareceres')):
			?>
				<div class="aberto pages-title">
					<span>Pareceres</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/pareceres">Pareceres</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('encerramento')):
			?>
				<div class="aberto pages-title">
					<span>Encerramento</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/encerramento">Encerramento</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
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
<div class="side-menu fixed hidden-xs hidden-sm">
	<div class="pages">
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('abertura')):
			?>
			<div class="aberto pages-title">
				<span>Abertura</span>
			</div>
			<?php else:	?>
			<div class="pages-title">
				<a href="<?php echo home_url();?>/abertura">Abertura</a>
			</div>
		<?php endif;?>
		<?php endwhile;?>
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('acontecimentos-em-destaque')):
			?>
			<div class="aberto pages-title">
				<span>Acontecimentos em destaque</span>
			</div>
			<?php else:	?>
			<div class="pages-title">
				<a href="<?php echo home_url();?>/acontecimentos-em-destaque">Acontecimentos em destaque</a>
			</div>
		<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class2;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'acontecimentos-em-destaque', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('Informações Gerais')):
			?>
			<div class="aberto pages-title">
				<span>Informações Gerais</span>
			</div>
			<?php else:	?>
			<div class="pages-title">
				<a href="<?php echo home_url();?>/informacoes-gerais">Informações Gerais</a>
			</div>
		<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class8;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'informacoes-gerais', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('investimentos')):
			?>
				<div class="aberto pages-title">
					<span>Investimentos</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/investimentos">Investimentos</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class3;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'investimentos', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('plano-assistencial')):
			?>
				<div class="aberto pages-title">
					<span>Plano assistencial</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/plano-assistencial">Plano assistencial</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class7;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'plano-assistencial', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('demonstracoes-contabeis')):
			?>
				<div class="aberto pages-title">
					<span>Demonstrações contábeis</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/demonstracoes-contabeis">Demonstrações contábeis</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
		<div class="pages-content <?php echo $class4;?>">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'demonstracoes-contabeis', 'order' => 'ASC');
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('pareceres')):
			?>
				<div class="aberto pages-title">
					<span>Pareceres</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/pareceres">Pareceres</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
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
		<?php 
		while ( have_posts() ) : the_post();
			if(is_page('encerramento')):
			?>
				<div class="aberto pages-title">
					<span>Encerramento</span>
				</div>
			<?php else:	?>
				<div class="pages-title">
					<a href="<?php echo home_url();?>/encerramento">Encerramento</a>
				</div>
			<?php endif;?>
		<?php endwhile;?>
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