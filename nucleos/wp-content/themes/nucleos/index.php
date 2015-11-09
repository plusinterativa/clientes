<?php get_header(); ?>
        <main class="main_wrap container">
            <div class="content">
                <!--
                <div id="slider">
                    <div class="main_slider">
                        <?php
                            /*
                            // Slider
                            $params = array(
                               'category_name'    => 'slider',
                               'posts_per_page'   => 4,
                               'order'            => 'DESC'
                            );
                            $query = new WP_Query( $params );
                            $i = 1;
                            while ( $query->have_posts() ):
                                $query->the_post();
                                echo '<a href="'. get_the_permalink() .'">';
                                the_post_thumbnail( 'tamanho-slider' );
                                echo '</a>';
                                $i++;
                            endwhile; 
                            wp_reset_query(); 
                            */
                        ?>
                    </div>
                </div>
                -->
                <!-- -->
                <div class="cellno" id="slider">
                <div class="owl-carousel">
                    <?php
                    $args = array(
                        'order'=>'DESC',
                        'posts_per_page' => '-1',
                        'category_name' => 'slider'
                    );                    
                    $query = new WP_Query( $args );
                    $i = 1;
                    while ( $query->have_posts() ):
                    $query->the_post();
                        if(in_category('slider')&&in_category('noticias')):
                            echo '<div style="cursor:pointer" class="item"><a href="'. get_the_permalink() .'">';
                            the_post_thumbnail( 'tamanho-slider' );
                            echo '</a></div>';
                        endif;
                        if(in_category('slider')&&!in_category('noticias')):
                            echo '<div class="item">';
                            the_post_thumbnail( 'tamanho-slider' );
                            echo '</a></div>';
                        endif;
                    $i++;
                    endwhile;                    
                    wp_reset_query();
                    ?>

                </div>
                </div>
                <div class="cellyes">
                    <img src="<?php bloginfo('template_url'); ?>/img/celular.jpg"/>
                </div>
                <!-- -->
                <section class="main_news">
                    <h1 class="fontzero">Últimas notícias</h1>
                    <?php
                        $ncount=1;
                        // Notícias
                        $params = array(
                           'category_name'  => 'noticias',
                           'category__not_in' => array( 14 ),
                           'posts_per_page' => 6,
                           'order'          => 'DESC'
                        );
                        $query = new WP_Query( $params );
                        while ( $query->have_posts() ):
                            $query->the_post();
                    ?>
                        <article class="box box-large-pd n<?php echo $ncount;?>">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <time datetime="<?php echo get_the_date('d.m.Y') ?>" pubdate><?php echo get_the_date('d.m.Y') ?></time>
                            <a href="<?php the_permalink(); ?>" title="" class="btn-more btn-blue ds-inblock">+</a>
                        </article>
                    <?php $ncount++;endwhile; ?>
                    <div class="clear"></div>
                </section>
                <div class="clear"></div>
                <section class="main_allnews al-center">
                    <h2 class="icon-left icon-more ds-inblock font-normal"><a href="<?php bloginfo('url'); ?>/index.php/noticias">Leia todas as notícias</a></h2>
                </section>
                <section class="main_categories">
                    <h1 class="fontzero">Nossos serviços</h1>
                    <?php
                        // Recadastramento
                        $params = array(
                           'page_id' => 39,
                           'order'   => 'DESC'
                        );
                        $query = new WP_Query( $params );
                        while ( $query->have_posts() ):
                            $query->the_post();
                    ?>
                        <article class="main_banner box box-large">
                            <h1 class="main_banner_title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h1>
                            <p class="tagline">
                                <a href="<?php the_permalink(); ?>"><?php the_field( 'subtitulo' ); ?></a>
                            </p>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/img/banner_direita.jpg" alt="" width="100%" />
                            </a>
                        </article>
                    <?php
                        endwhile;

                        // Saber e Poupar
                        $params = array(
                           'page_id' => 89,
                           'order'   => 'DESC'
                        );
                        $query = new WP_Query( $params );
                        while ( $query->have_posts() ):
                            $query->the_post();
                    ?>
                        <article class="main_banner box box-large">
                            <h1 class="main_banner_title">
                                <a href="<?php echo home_url(); ?>/emprestimos/clausulas-gerais/"><?php the_title();?></a>
                            </h1>
                            <p class="tagline">
                                <a href="<?php echo home_url(); ?>/emprestimos/clausulas-gerais/"><?php the_field( 'subtitulo' ); ?></a>
                            </p>
                            <a href="<?php echo home_url(); ?>/emprestimos/clausulas-gerais/">
                                <img src="<?php bloginfo('template_url'); ?>/img/banner_esquerda.jpg" alt="" width="100%" />
                            </a>
                        </article>
                    <?php endwhile; ?>
                    <div class="clear"></div>
                </section>
                <?php
                    // Vídeos
                    $params = array(
                        'category_name'  => 'videos',
                        'posts_per_page' => 1,
                        'order'          => 'DESC'
                    );
                    $query = new WP_Query( $params );
                    while ( $query->have_posts() ):
                        $query->the_post();
                        $upload = wp_upload_dir();
                ?>
                    <section class="main_videos container">
                        <video class="video video-large fl-left" src="<?php echo $upload['baseurl'] . '/videos/' . get_field( 'video' ); ?>" controls></video>
                        <article class="main_about box box-medium fl-right">
                            <h2 class="info_title"><a href="<?php the_permalink(); ?>">Nucleos - Fique com a gente</a></h2>
                            <p class="tagline">
                                <a href="<?php the_permalink(); ?>">O Nucleos oferece a opção de obter um empréstimo, caso você precise, a juros menores que os praticados no mercado. Veja o vídeo ao lado e entenda como solicitá-lo.</a>
                            </p>
                            <div class="main_gallery"><a class="icon-left icon-play" href="<?php bloginfo('url'); ?>/index.php/saber-e-poupar/videos/">acessar galeria de vídeos</a></div>
                        </article>
                    </section>
                <?php endwhile; ?>
                <div class="clear"></div>
                <section class="main_info">
                    <?php
                        // Calendário de Pagamentos
                        $params = array(
                           //'pagename'       => 'calendario-de-pagamentos',
                           'page_id'        => 37,
                           'posts_per_page' => 1,
                           'order'          => 'DESC'
                        );
                        $query = new WP_Query( $params );
                        while ( $query->have_posts() ):
                            $query->the_post();
                    ?>
                    <article class="box box-large-pd">
                        <?php
                            $params = array(
                                'class' => 'fl-left ds-inblock',
                                'alt'   => get_the_title(),
                                'title' => get_the_title()
                            );
                            the_post_thumbnail( 'full', $params );
                        ?>
                        <h2 class="info_title al-left">
                            <a href="<?php echo home_url();?>/previdencia/plano-basico-de-beneficios-pbb/calendario-de-pagamentos/"><?php the_title(); ?></a>
                        </h2>
                        <p class="tagline al-left">
                            <a class="info_sub" href="<?php echo home_url();?>/previdencia/plano-basico-de-beneficios-pbb/calendario-de-pagamentos/"><?php echo get_the_content(); ?></a>
                        </p>
                    </article>
                    <?php endwhile; ?>
                    <article class="box box-large-pd">
                        <img class="fl-left ds-inblock" src="<?php bloginfo('template_url'); ?>/img/img_book.jpg" alt="" />
                        <h2 class="info_title al-left"><a href="<?php echo home_url();?>/category/nuclin-express/">Nuclin Express</a></h2>
                        <p class="tagline al-left"><a class="info_sub" href="<?php echo home_url();?>/category/nuclin-express/">Confira aqui a mais recente edição do Nuclin Express, o boletim eletrônico do Nucleos. Aproveite para se cadastrar em nosso mailing!</a></p>
                    </article>
                    <div class="clear"></div>
                </section>
                <section class="main_empresas">
                    <?php
                        // Patrocinadoras
                        $params = array(
                            'order'         => 'DESC',
                            'category_name' => 'Links',
                            'orderby'       => 'rating',
                            'order'         => 'asc'
                        );
                        $links = get_bookmarks( $params );
                        foreach ( $links as $link ) :
                    ?>
                        <div class="box box4three"><a href="<?php echo $link->link_url; ?>" target="_blank"><img src="<?php echo $link->link_image; ?>" alt="<?php echo $link->link_name; ?>" title="<?php echo $link->link_name; ?>" /></a></div>
                    <?php endforeach; ?>
                </section>
                <div class="clear"></div>
            </div>
        </main>
<?php get_footer(); ?>
