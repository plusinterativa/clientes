<?php get_header(); ?>
    <main class="main_wrap container">
        <div class="content">
            <?php the_breadcrumb(); ?>
            <section class="main_publications">
                <h1 class="section_title">Links Úteis</h1>
                <?php
                    while ( have_posts() ):
                        the_post();
                ?>
                    <div class="main_links main_article">
                        <a href="<?php the_field('links'); ?>" rel="nofollow" title="Visitar o site" target="_blank">
                            <?php the_post_thumbnail( 'tamanho-thumbnail' ); ?>
                        </a>
                        <p class="main_link_site">
                            <a href="<?php the_field('links'); ?>" rel="nofollow" title="" title=""><?php the_field('links'); ?></a>
                        </p>
                        <p><?php the_title(); ?></p>
                        <div class="clear"></div>
                    </div>
                <?php endwhile; ?>
                <?php
                    if ( function_exists( 'wp_simple_pagination' ) ):
                        wp_simple_pagination();
                    endif;
                ?>
            </section>
            <div class="clear"></div>
        </div>
    </main>
<?php get_footer(); ?>