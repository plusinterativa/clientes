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
        <article class="main_page">
            <h1 class="section_title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <ul class="nomargin question_answer">
                <?php if( get_field( 'eletronuclear_nucleos' ) ) :?>
                <li>
                    <p class="question">Participantes ativos - Eletronuclear e Nucleos - e participantes assistidos de qualquer patrocinadora</p>
                    <div class="answer"><?php echo get_field( 'eletronuclear_nucleos' ); ?></div>
                </li>
                <?php endif; ?>
<br />
                <?php if( get_field( 'inb_e_nuclep' ) ) :?>
                <li>
                    <p class="question">Participantes ativos - INB e Nuclep</p>
                    <div class="answer"><?php echo get_field( 'inb_e_nuclep' ); ?></div>
                <?php endif; ?>
            </ul>
        </article>
        <?php 
                endwhile;
            endif;
            wp_reset_query(); 
        ?>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer(); ?>