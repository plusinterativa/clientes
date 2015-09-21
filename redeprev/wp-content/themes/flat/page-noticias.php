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
<div class="bar2-todas-noticias">    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Notícias</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array('posts_per_page' => 6, 'post_type' => 'post' ,'paged' => $paged );
                    query_posts($args);
                    if ( have_posts() ) : while (have_posts()) : the_post();        
                    ?>
                    <div class="col-md-4">
                    <a href="<?php the_permalink();?>">
                    <figure>   
                       <?php the_post_thumbnail('newsnoticias');?>
                        <img class="plus"src="<?php echo bloginfo('template_url');?>/assets/images/plus.png" alt="">
                        <figcaption></figcaption>
                     </figure>
                    <h2><?php the_title();?></h2>
                    </a>
                    </div> 
                    <?php endwhile;endif;?>
                    <div class="col-md-12 text-center paginator">
                    <?php
                    global $wp_query;
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'prev_text'    => '<span class="button">Anterior</span>',
                        'next_text'    => '<span class="button">Próximo</span>'                        
                    ));
                    ?>                                       
                    </div>
                <div class="row">
                    <?php
                    $args = array('post_type' => 'extras', 'order'=>'ASC', 'posts_per_page' => '-1', 'category__and' => array(catid('noticias'),catid('redenews')));
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    $class = get_post_meta($post->ID, 'class', true);
                    ?>
                    <div class="col-md-6 redenews">
                        <h1>
                            <img class="imgrede"src="<?php echo bloginfo('template_url');?>/assets/images/<?php echo $class;?>.png">
                            <?php the_title();?>
                        </h1>
                        <div class="text-news">
                            <?php the_content();?>
                        </div>
                    </div>
                <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>