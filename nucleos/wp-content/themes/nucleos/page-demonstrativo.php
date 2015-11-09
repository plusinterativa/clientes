<?php get_header(); ?>
    <main class="main_wrap container">
        <div class="content">
             <?php 
                the_breadcrumb();
                if ( have_posts() ):
                    while ( have_posts() ):
                        the_post();
            ?>
            <article class="main_publications_wleft">
                <h1 class="section_title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
            <aside class="sidebar">
                <?php 
                    $params = array(
                        'alt'   => get_the_title(),
                        'title' => get_the_title()
                    );
                    if ( has_post_thumbnail() ) :
                ?>
                <article class="sidebar_widget">
                    <?php the_post_thumbnail( 'tamanho-sidebar', $params ); ?>
                </article>
                <?php endif; ?>
            </aside>
            <?php 
                    endwhile;
                endif;
            ?>
            <div class="clear"></div>
        </div>
    </main>
<?php get_footer(); ?>