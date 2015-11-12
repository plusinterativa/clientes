<?php while ( have_posts() ) : the_post();?>
<div class="side-menu">
	<?php if(is_page('institucional')):?>
	<div class="pages">
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'institucional');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<?php 
	endif;
	if(is_page('Demonstrações Consolidadas')):
	?>
	<div class="pages">
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'demonstracoes-consolidadas');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<?php 
	endif;
	if(is_page('Demonstrações do Plano Plenus')):
	?>
	<div class="pages">
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'demonstracoes-do-plano-plenus');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<?php 
	endif;
	if(is_page('Demonstrações do Plano Fugro')):
	?>
	<div class="pages">
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'demonstracoes-do-plano-fugro');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<?php 
	endif;
	if(is_page('Notas Explicativas')):
	?>
	<div class="pages">
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'notas-explicativas');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<?php 
	endif;
	if(is_page('pareceres')):
	?>
	<div class="pages">
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'pareceres');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();	
			?>	
				<div>
					<span name="<?php echo get_the_ID();?>"><?php the_title();?></span><br/>
				</div>
			<?php
			endwhile;
			?>
		</div>
	</div>
	<?php endif;?>
</div>
<?php endwhile;?>