<?php get_header();?>
<?php
$args = array('post_type' => 'banners', 'posts_per_page' => '1', 'category_name' => 'notícias');
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();?>
<div class="bar-first bar-topo-noticia">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-5"><img src="<?php echo bloginfo('template_url');?>/assets/images/noticiaimg.png"></div>
                    <div class="col-md-7">
                        <h2><?php the_title();?></h2>
                        <p><?php the_content();?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>
	<div class="bar-noticias">
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<h1>Notícias</h1>
				</div>
			</div>
			<div class="row">
				<?php 
				while ( have_posts() ) : the_post();
				$cNews_ID = get_the_ID();
				?>
				<div class="col-md-7 col-md-offset-1 noticia-principal">
					
					<h2><?php the_title();?></h2>
					<p><?php the_content();?></p>
				</div>
				<?php endwhile;?>
				<div class="col-md-3">
		            <?php
		            $args = array('post_type' => 'post', 'order'=>'DSC', 'posts_per_page' => '6', 'post__not_in' => array($cNews_ID));
		            $the_query = new WP_Query( $args );
		            while ( $the_query->have_posts() ) : $the_query->the_post();
		            ?> 					
					<div class="sub-noticias">     
	                    <a href="<?php the_permalink();?>">
							<?php the_post_thumbnail('newsmin');?>
	                      	<h2><?php the_title();?></h2>
	                      	<p><?php echo excerpt(10);?></p>
	                    </a>
	                    <div class="clear"></div>
              		</div>
              		<?php endwhile;?>
              		<a href="<?php echo home_url();?>/noticias">
              			<span class="button">Ver Todas</span>
              		</a>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>