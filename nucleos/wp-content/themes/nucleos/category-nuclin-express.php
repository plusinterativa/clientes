<?php get_header(); ?>
    <main class="main_wrap container">
        <div class="content">
            <?php the_breadcrumb(); ?>
            <section class="main_publications">
                <h1 class="section_title">Nuclin Express</h1>
                <?php
                    while ( have_posts() ):
                        the_post();
                ?>
                    <article class="main_article">
                        <a href="<?php the_field('links'); ?>" class="icon-inblock icon-file fl-left" alt="Download do arquivo" title="Download do arquivo" target="_blank"></a>
                        <h2><a href="<?php the_field('links'); ?>" alt="Download do arquivo" title="Download do arquivo" target="_blank"><?php the_title(); ?></a></h2>
                        <p class="tagline"><a href="<?php the_field('links'); ?>" alt="Download do arquivo" title="Download do arquivo" target="_blank"><?php echo get_the_content(); ?></a></p>
                    </article>
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