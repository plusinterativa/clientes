<?php get_header();?>

<main class="main_wrap container">
    <div class="content">
		<article class="main_page simple-layout">
            <h1 class="section_title">Encontramos <?php echo $wp_query->found_posts; ?> referencias a palavra "<?php the_search_query(); ?>"</h1>
            <h1 class="section_title"></h1>    	
			<?php while (have_posts()) : the_post(); ?>
			<h2 style="  margin-bottom: 10px;"><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		    
		    <?php the_excerpt(); ?>
		    <a style="  margin-top: -6px;display: block;" href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>">Veja mais</a>
		    <br/>
		    <br/>
		    <br/>
		    <br/>
		    <?php endwhile; ?>
	        <?php
	        if ( function_exists( 'wp_simple_pagination' ) ):
	        wp_simple_pagination();
	        endif;
	        ?>
        </article>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer();?>