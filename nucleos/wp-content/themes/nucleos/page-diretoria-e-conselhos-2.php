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
                <?php if( get_field( 'diretoria_executiva' ) ) :?>
                <li>
                    <p class="question">Diretoria Executiva</p>
                    <div class="answer"><?php echo get_field( 'diretoria_executiva' ); ?></div>
                </li>
                <?php endif; ?>

                <?php if( get_field( 'conselho_deliberativo' ) ) :?>
                <li>
                    <p class="question">Conselho Deliberativo</p>
                    <div class="answer"><?php echo get_field( 'conselho_deliberativo' ); ?></div>
                </li>
                <?php endif; ?>

                <?php if( get_field( 'conselho_fiscal' ) ) :?>
                <li style="clear: both;">
                    <p class="question">Conselho Fiscal</p>
                    <div class="answer"><?php echo get_field( 'conselho_fiscal' ); ?></div>
                </li>
                <?php endif; ?>

                <?php if( get_field( 'comite_consultivo_de_investimentos' ) ) :?>
                <li style="clear: both;">
                    <p class="question">Comitê Consultivo de Investimentos</p>
                    <div class="answer"><?php echo get_field( 'comite_consultivo_de_investimentos' ); ?></div>
                </li>
                <?php endif; ?>

                <?php if( get_field( 'historico_da_administração' ) ) :?>
                <li style="clear: both;">
                    <p class="question">Histórico dos Órgãos Colegiados</p>
                    <div class="answer"><?php echo get_field( 'historico_da_administração' ); ?></div>
                </li>
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