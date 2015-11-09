<?php get_header(); ?>
<main class="main_wrap container">
    <div class="content">
        <?php the_breadcrumb(); ?>
        <section class="main_publications">
            <h1 class="section_title">Nuclin</h1>
            <?php
                if ( have_posts() ):
                    while ( have_posts() ):
                        the_post();
            ?>
            <article class="main_nuclin">
                <a href="<?php the_field('links'); ?>" title="Download do arquivo">
                    <?php 
                        $params = array(
                            'alt'   => get_the_title(),
                            'title' => get_the_title()
                        );
                        the_post_thumbnail( 'tamanho-nuclin', $params );
                    ?>
                </a>
                <h2><a href="<?php the_field('links'); ?>" title="Download do arquivo" alt="Ícone para download do arquivo"><?php echo get_the_date('d.m.Y') . ' - ' . get_the_content(); ?></a></h2>
                <p class="tagline">
                    <a href="<?php the_field('links'); ?>" title="Download do arquivo" title="Download do arquivo"><?php the_title(); ?></a>
                </p>
                
                <div class="clear"></div>
            </article>
            <?php 
                    endwhile;
                endif;

                if ( function_exists( 'wp_simple_pagination' ) ):
                    wp_simple_pagination();
                endif;
            ?>
        </section>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer(); ?>