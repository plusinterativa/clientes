<?php 
    if( is_page( array('politica-de-investimentos') ) ):
        get_template_part( 'page-investimentos' );
    elseif( is_page( array('dividas-contratadas') ) ):
        get_template_part( 'page-demonstrativo' );
    elseif( is_page( array(
        'plano-basico-de-beneficios-pbb', 
        'apresentacao', 
        'calendario-de-pagamentos',
        'formularios',
        'recadastramento',
        'tabelas-reajustecalculos'
    ) ) ):
        get_template_part( 'page-plano-basico-de-beneficios-pbb' );
    elseif( is_page ( array( 'perguntas-e-respostas' ) ):
        get_template_part( 'page-perguntas-e-respostas' );
    else:
    get_header(); 
?>
<main class="main_wrap container">
    <div class="content">
        <?php 
            the_breadcrumb();
            if ( have_posts() ):
                while ( have_posts() ):
                    the_post();
        ?>
        <article class="main_page">
            <h1 class="section_title"><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="full-image">
                <?php 
                    $params = array(
                        'alt'   => get_the_title(),
                        'title' => get_the_title()
                    );
                    the_post_thumbnail( 'tamanho-page', $params );
                ?>
            </div>
            <?php 
                endif;
                the_content(); 
            ?>
        </article>
        <?php 
                endwhile;
            endif;
        ?>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer(); endif; ?>