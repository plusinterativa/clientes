<?php get_header();?>
<?php
$args = array('post_type' => 'banners', 'posts_per_page' => '1', 'category_name' => 'educaprev');
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<div class="bar-educaprev bar-first">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-offset-1">
				<img class="smartman"src="<?php echo bloginfo('template_url');?>/assets/images/smartman.png" alt="">		
			</div>
			<div class="col-md-8">
				<h2><?php the_title();?></h2>
          		<p><?php the_content();?></p>
			</div>			
		</div>
	</div>
</div>
<?php endwhile;?>
<div class="bar2-educaprev  hidden-xs">
	<div class="line-time">
		<div class="ballmini">
			<ul class="age">
				<?php
		        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('educaprev'),catid('linha-do-tempo')));
		        $the_query = new WP_Query( $args );
		        while ( $the_query->have_posts() ) : $the_query->the_post();
		        ?>
				<li><div data="age" data-content-age="<?php the_content();?>"><?php the_title();?></div></li>
				<?php endwhile;?>
			</ul>
		</div>		
	</div>
</div>
<div class="agebox">
	<div></div>
	<span></span>
</div>
<div class="bounceInUp animated">
	<div class="bar3-educaprev">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<?php
			        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('educaprev'),catid('previdencia')));
			        $the_query = new WP_Query( $args );
			        while ( $the_query->have_posts() ) : $the_query->the_post();
			        ?>
					<div class="col-md-6"><h2 class="prevbutton"><?php the_title();?></h2></div>
					<?php endwhile;?>
				</div>						
			</div>			
		</div>
	</div>
	<div class="owl-carousel">
		<?php
        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('educaprev'),catid('previdencia')));
        $the_query = new WP_Query( $args );
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
		<div class="bar3-educaprev">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 educa-content">
						<p><?php the_content();?></p>
					</div>						
				</div>			
			</div>
		</div>
		<?php endwhile;?>
	</div>
</div>
<div class="bar4-educaprev container">
	<div class="row">		
		<div class="col-md-4 col-md-offset-1">
			<ul>
				<?php
		        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('educaprev'),catid('explicacoes')));
		        $the_query = new WP_Query( $args );
		        while ( $the_query->have_posts() ) : $the_query->the_post();
		        ?>
				<li><?php the_title();?></li>
				<?php endwhile;?>
			</ul>
			<div class="row">
				
			</div>
		</div>
		<div class="col-md-6">
			<?php
	        $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('educaprev'),catid('explicacoes')));
	        $the_query = new WP_Query( $args );
	        while ( $the_query->have_posts() ) : $the_query->the_post();
	        ?>
			<div class="bgcgraylight entidade-content">
				<img class="kitgray"src="<?php echo bloginfo('template_url');?>/assets/images/kitgray.png" alt="">
				<p><?php the_content();?></p>
			</div>
			<?php endwhile;?>
		</div>		
	</div>
</div>
<?php get_footer();?>