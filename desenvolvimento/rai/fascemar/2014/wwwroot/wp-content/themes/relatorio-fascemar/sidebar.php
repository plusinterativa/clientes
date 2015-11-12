<?php while ( have_posts() ) : the_post();?>
<div class="side-menu hidden-xs">
	<?php if(is_page('abertura')):?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Abertura</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'abertura','order' => 'ASC');
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
	if(is_page('institucional')):
	?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Institucional</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Institucional','order' => 'ASC');
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
	if(is_page('previdencia-e-investimentos')):
	?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Previdência e Investimentos</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'previdencia-e-investimentos','order' => 'ASC');
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
	if(is_page('resultados')):
	?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Resultados</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Resultados','order' => 'ASC');
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
		<div class="pages-title">
			
			<span>Pareceres</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Pareceres','order' => 'ASC');
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
	if(is_page('encerramento')):
	?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Encerramento</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Encerramento','order' => 'ASC');
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
<div class="side-menu fixed hidden-xs">
	<div class="logohide">
		<a href="<?php echo home_url();?>"><img class="logo" src="<?php echo home_url();?>/assets/images/logo2.png" style=" width: 172px;"></a>
	</div>
	<?php if(is_page('abertura')):?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Abertura</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'abertura','order' => 'ASC');
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
	if(is_page('institucional')):
	?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Institucional</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Institucional','order' => 'ASC');
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
	if(is_page('previdencia-e-investimentos')):
	?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Previdência e Investimentos</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'previdencia-e-investimentos','order' => 'ASC');
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
	if(is_page('resultados')):
	?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Resultados</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Resultados','order' => 'ASC');
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
		<div class="pages-title">
			
			<span>Pareceres</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Pareceres','order' => 'ASC');
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
	if(is_page('encerramento')):
	?>
	<div class="pages">
		<div class="pages-title">
			
			<span>Encerramento</span>
		</div>
		<div class="pages-content">
			<?php
			$args = array( 'posts_per_page' => '-1', 'category_name' => 'Encerramento','order' => 'ASC');
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