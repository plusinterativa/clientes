<?php get_header(); ?>
<main class="main_wrap container">
    <div class="content">
        <?php 
            the_breadcrumb();
            if ( have_posts() ):
                while ( have_posts() ):
                    the_post();
                    $pagePost = $post->ID;
        ?>
            <article class="main_publications_wleft">
                <h1 class="section_title"><?php the_title(); ?></h1>
                <?php
                    the_content();
                    if(get_field( 'imagem' ))
                        echo '<p class="aligncenter"><img src="'. get_field( 'imagem' ) .'" /></p>';
                ?>
            </article>
        <?php 
                endwhile;
            endif;
            wp_reset_query(); 
        ?>
        <aside class="sidebar">
            <article class="sidebar_widget">
            <?php
                $params = array(
                    'page_id' => '13'
                );
                $query = new WP_Query( $params );
                while ( $query->have_posts() ):
                    $query->the_post();
                    the_post_thumbnail( 'tamanho-sidebar' );

            ?>
            </article>
            <article class="sidebar_downloads sidebar_widget">
                <ul>
                    <?php if( get_field( 'regulamento' ) ) : ?>
                    <li><a class="linkto" href="<?php the_field( 'regulamento' ); ?>">Regulamento</a></li>
                    <?php
                        endif;
                        if( get_field( 'nota_tecnica_atuarial' ) ) :
                     ?>
                    <li><a class="linkto" href="<?php the_field( 'nota_tecnica_atuarial' ); ?>">Nota Técnica Atuarial</a></li>
                    <?php endif; ?>
                </ul>
            </article>
            <?php 
                endwhile;
                wp_reset_query();
            ?>
            <article class="sidebar_list sidebar_widget">
                <ul>
                    <?php
                        $params = array(
                            'post_type'       => 'page',
                            'post_parent__in' => array( 13 ),
                            'orderby'         => 'title',
                            'order'           => 'asc'
                        );
                        $query = new WP_Query( $params );
                        while ( $query->have_posts() ):
                            $query->the_post();
                            if( $post->ID == $pagePost ) {
                                echo '<li><a class="active" href="'. get_the_permalink() .'">';
                            } else {
                                echo '<li><a href="'. get_the_permalink() .'">';
                            }
                            echo get_the_title();
                            echo '</a></li>';
                        endwhile;
                    ?>
                </ul>
            </article>
        </aside>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer(); ?>