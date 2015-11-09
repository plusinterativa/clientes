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
        <article class="main_publications_wleft simple-layout">
            <h1 class="section_title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
        <?php 
                endwhile;
            endif; 
        ?>
        <aside class="sidebar">
            <article class="sidebar_widget">
                <?php
                    $params = array(
                        'page_id' => '51',
                        'alt'   => get_the_title(),
                        'title' => get_the_title()
                    );
                    $query = new WP_Query( $params );
                    while ( $query->have_posts() ):
                        $query->the_post();
                        the_post_thumbnail( 'tamanho-sidebar', $params );
                    endwhile;
                ?>
            </article>
            <article class="sidebar_downloads sidebar_widget">
                <ul>
                    <?php if( get_field( 'manual_de_investimentos' ) ) : ?>
                    <li><a class="linkto" href="<?php the_field( 'manual_de_investimentos' ); ?>" TARGET="_blank">Manual de Investimentos</a></li>
                    <?php endif; ?>
                </ul>
            </article>
            <article class="sidebar_list sidebar_widget">
                <ul>
                    <?php
                        // Submenu Gestão de Recursos
                        $params = array(
                            'post_type'       => 'page',
                            'post_parent__in' => array( 51 ),
                            //'orderby'         => 'title',
                            //'order'           => 'asc'
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
                        wp_reset_query(); 
                    ?> 
                    <!--<li><a class="active" href="">Política de Investimentos</a></li>
                    <li><a href="">Acompanhamento</a></li>
                    <li><a href="">Demonstrativo</a></li>
                    <li><a href="">Manual</a></li>
                    <li><a href="">Participação em Assembléias</a></li>
                    <li><a href="">Rentabilidade</a></li>-->
                </ul>
            </article>
        </aside>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer(); ?>