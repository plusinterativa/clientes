<?php get_header(); ?>
    <main class="main_wrap container">
        <div class="content">
            <?php the_breadcrumb(); ?>
            <section class="main_publications">
                <h1 class="section_title">Representantes Regionais</h1>
                <br/>
                <?php
                    
                    $args = array('category_name' => 'representantes-regionais',
                                    'posts_per_page' => '-1');
                ?>
                <?php
                     $loop = new WP_Query($args);
                     while ( $loop->have_posts() ) : $loop->the_post();

                ?>
                    <article class="repre main_article">
                        <?php if( has_post_thumbnail() ) the_post_thumbnail( 'tamanho-thumbnail-2' ); ?>
                        <h2><a><?php the_title(); ?></a></h2>
                        <p class="tagline"><a><?php echo get_the_content(); ?></a></p>
                    </article>
                <?php endwhile; ?>
                
                <br/>
            </section>
            <div class="clear"></div>
        </div>
    </main>
<?php get_footer(); ?>