<?php get_header(); ?>
<main class="main_wrap container">
    <div class="content">
        <?php 
            the_breadcrumb();
            if ( have_posts() ):
                while ( have_posts() ):
                    the_post();
        ?>
        <article class="main_publications_wleft simple-layout">
            <h1 class="section_title"><?php the_title(); ?></h1>
            <p class="time"><time datetime="<?php echo get_the_date('d.m.Y'); ?>" pubdate><?php echo get_the_date('d.m.Y'); ?></time></p>
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="full-image">
                <?php 
                    $params = array(
                        'alt'   => get_the_title(),
                        'title' => get_the_title()
                    );
                    the_post_thumbnail( 'tamanho-noticias', $params );
                ?>
            </div>
            <?php 
                endif; 
                the_content(); 
            ?>
            <div class="compartilhe">
                <script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
                <script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                <script charset="utf-8" type="text/javascript">stLight.options({"publisher":"wp.1a8cd5dd-8cb3-4e29-8ef6-0f98318a1996"});var st_type="wordpress3.8.3";</script>
                <span>Compartilhe: </span>
                <span st_url='<?php the_permalink(); ?>' st_title='<?php the_title(); ?>' class='st_fblike'></span>
                <span st_url='<?php the_permalink(); ?>' st_title='<?php the_title(); ?>' class='st_facebook'></span>
                <span st_via='PreviLivre' st_url='<?php the_permalink(); ?>' st_title='<?php the_title(); ?>' class='st_twitter'></span>
                <span st_url='<?php the_permalink(); ?>' st_title='<?php the_title(); ?>' class='st_plusone'></span>
                <span st_url='<?php the_permalink(); ?>' st_title='<?php the_title(); ?>' class='st_blogger'></span>
                <span st_url='<?php the_permalink(); ?>' st_title='<?php the_title(); ?>' class='st_email'></span>
            </div>
        </article>
        <?php
                endwhile;
            endif;
        ?>
        <aside class="sidebar">
            <header class="title-section">
                <h1>Mais notícias</h1>
            </header>
            <?php 
                // Mais Recentes
                $argumentos = array(
                   'category_name'    => 'noticias',
                   'posts_per_page'   => get_option( 'posts_per_page' ),
                   'post__not_in'     => array( $post->ID ),
                   'order'            => 'DESC'
                );
                $query = new WP_Query( $argumentos );
                while ( $query->have_posts() ):
                    $query->the_post();
            ?>
            <article class="sidebar_widget">
                <h2><a class="widget_pub" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <time datetime="<?php echo get_the_date('d.m.Y'); ?>" pubdate><?php echo get_the_date('d.m.Y'); ?></time>
            </article>
            <?php endwhile; ?>
            <div class="paginator">
                <a href="<?php bloginfo('url'); ?>/index.php/category/noticias" class="paginator-box">+</a>
                <a href="<?php bloginfo('url'); ?>/index.php/category/noticias">Notícias anteriores</a>
                <div class="clear"></div>
            </div>
        </aside>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer(); ?>