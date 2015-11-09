<?php get_header(); ?>
    <main class="main_wrap container">
        <div class="content">
            <?php the_breadcrumb(); ?>
            <section class="main_publications">
                <h1 class="section_title">Equipe de Relacionamento</h1>
                <?php
                    while ( have_posts() ):
                        the_post();
                ?>
                    <article class="repre main_article">
                        <?php if( has_post_thumbnail() ) the_post_thumbnail( 'tamanho-thumbnail-2' ); ?>
                        <h2><a><?php the_title(); ?></a></h2>
                        <p class="tagline"><a><?php echo get_the_content(); ?></a></p>
                    </article>
                <?php endwhile; ?>
                <?php
                    //if ( function_exists( 'wp_simple_pagination' ) ):
                      //  wp_simple_pagination();
                   // endif;
                ?>
            </section>
            <div class="clear"></div>
        </div>
    </main>
<?php get_footer(); ?>