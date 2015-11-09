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
        <?php
                endwhile;
            endif;
        ?>
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
            <article class="sidebar_downloads sidebar_widget">
                <ul>
                    <li><a class="linkto" href="">Regulamento</a></li>
                    <li><a class="linkto" href="">Nota Técnica Atuarial</a></li>
                </ul>
            </article>
            <article class="sidebar_list sidebar_widget">
                <ul>
                    <li><a class="active" href=""><?php echo $pagina->post_title; ?></a></li>
                    <li><a href="">Perguntas e Respostas</a></li>
                    <li><a href="">Formulários</a></li>
                    <li><a href="">Calendários de pagamentos</a></li>
                    <li><a href="">Tabelas (Reajuste/Cálculos)</a></li>
                    <li><a href="">Recadastramento</a></li>
                </ul>
            </article>
        </aside>
        <div class="clear"></div>
    </div>
</main>
<?php get_footer(); ?>