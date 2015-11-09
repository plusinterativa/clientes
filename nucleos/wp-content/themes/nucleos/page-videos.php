<?php get_header(); ?>
<main class="main_wrap container">
    <div class="content">
        <?php 
            the_breadcrumb();
            $argumentos = array(
               'category_name'    => 'videos',
               'posts_per_page'   => 1,
               'order'            => 'DESC'
            );
            $query = new WP_Query( $argumentos );
            while ( $query->have_posts() ):
                $query->the_post();
                $upload = wp_upload_dir();
        ?>
        <article class="main_wleft main_publications_wleft">
            <header class="main_wleft_header">
                <h1 class="section_title">Vídeos</h1>
            </header>
            <div class="content">
                <h1 class="section_title"><?php the_title(); ?></h1>
                <div class="video video-full">
                    <video src="<?php echo $upload['baseurl'] . '/videos/' . get_field( 'video' ); ?>" controls="true" width="100%"></video>
                </div>
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; ?>
        <aside class="sidebar">
            <header class="title-section">
                <h2>Mais Vídeos</h2>
            </header>
            <?php 
                // Mais Recentes
                $argumentos = array(
                   'category_name'    => 'videos',
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
            </article>
            <?php endwhile; ?>
            <div class="paginator">
                <a href="<?php bloginfo('url'); ?>/index.php/category/videos/" class="paginator-box">+</a>
                <a href="<?php bloginfo('url'); ?>/index.php/category/videos/">Vídeos anteriores</a>
                <div class="clear"></div>
            </div>
        </aside>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer(); ?>