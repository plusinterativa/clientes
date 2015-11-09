<?php 
    if( is_page( array( 
        'investimentos',
        'acompanhamento-da-politica-de-investimentos',
        'demonstrativo-de-investimentos',
        'manual-de-investimentos',
        'participacao-em-assembleias',
        'politica-de-investimentos',
        'rentabilidade'
    ) ) ):
        get_template_part( 'page-investimentos' );

    elseif( is_page( array( 'dividas-contratadas' ) ) ):
        get_template_part( 'page-demonstrativo' );

    elseif( is_page( array( 'calendario-de-pagamentos' ) ) ):
        get_template_part( 'calendario-de-pagamentos' );

    elseif( is_page( array( 'perguntas-e-respostas' ) ) ):
        get_template_part( 'perguntas-e-respostas' );

    elseif( is_page( array( 'relatorios' ) ) ):
        get_template_part( 'demonstracoes-contabeis' );

    elseif( is_page( array( 'diretoria-e-conselhos-2' ) ) ):
        get_template_part( 'diretoria-e-conselhos-2' );

    elseif( is_page( array(
        'plano-basico-de-beneficios-pbb', 
        'apresentacao', 
        'formularios',
        'recadastramento',
        'tabelas-reajustecalculos'
    ) ) ):
        get_template_part( 'page-plano-basico-de-beneficios-pbb' );

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
        <article class="main_page simple-layout">
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