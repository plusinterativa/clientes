<?php

// Inserindo o suporte a MENUS
register_nav_menus(
    array(
        'menu_principal' => 'Menu Principal'
    )
);

// Inserindo o suporte a SIDEBAR
register_sidebars( 1, array(
    'name'          => 'Endereço',
    'before_widget' => '',
    'after_widget'  => '')
);
register_sidebars( 1, array(
    'name'          => 'Telefones',
    'before_widget' => '',
    'after_widget'  => '')
);
register_sidebars( 1, array(
    'name'          => 'E-mail',
    'before_widget' => '',
    'after_widget'  => '')
);
register_sidebars( 1, array(
    'name'          => 'Horário',
    'before_widget' => '',
    'after_widget'  => '')
);
register_sidebars( 1, array(
    'name'          => 'Mapa',
    'before_widget' => '',
    'after_widget'  => '')
);


// Inserindo o suporte e THUMBNAILS
add_theme_support('post-thumbnails');
add_image_size('tamanho-noticias', 615, 244, true); // Tamanho notícias
add_image_size('tamanho-page', 911, 396, true); // Tamanho page
add_image_size('tamanho-sidebar', 260, 260, true); // Tamanho sidebar
add_image_size('tamanho-slider', 1000, 415, true); // Tamanho slider
add_image_size('tamanho-thumbnail', 80, 79, true); // Tamanho thumbnail
add_image_size('tamanho-thumbnail-2', 110, 110, true); // Tamanho thumbnail
add_image_size('tamanho-nuclin', 168, 200, true); // Tamanho nuclin

/*
 * Função de criação de breadcrumb
 * @author Vlamir Santo em 26/12/2014
 */
function the_breadcrumb()
{
    global $post;
    if (!is_home()) {
        echo '<div class="main_breadcrum"><p><a href="'. get_option('home') .'"> Home </a> > ';
        if ( is_category() || is_single() ) {
            foreach( ( get_the_category() ) as $category ) {
                if ( $category->cat_name != 'Slider' ) {
                    echo '<a href="'. get_category_link( $category->term_id ) .'" title="'. $category->name .'" ' . '>'. $category->name .'</a> ';
                }
            }
            echo '</p></div>'; 
        } elseif ( is_page() ) {
            if( $post->post_parent ){
                $result = get_post_ancestors( $post->ID );
                $title = get_the_title();
                $output = '';
                $anc = array_reverse( $result );
                foreach ( $anc as $ancestor ) {
                    $output .= '<a href="'. get_permalink( $ancestor ) .'" title="'. get_the_title( $ancestor ) .'">'.get_the_title( $ancestor ) .'</a> > ';
                }
                echo $output;
                echo '<strong title="'. $title .'"> '. $title .'</strong></p></div>';
            } else {
                echo '<strong> '. get_the_title() .'</strong></p></div>';
            }
        }
    }
}

/*
*  Função de retorno do nome da categoria
*  @params $echo boolean para imprimir na tela ou retornar
*  @author Vlamir Santo em 26/12/2014
*/
function the_categoria( $echo = true )
{
    global $post;
    $categoria = get_the_category( $post->ID );
    if( $echo == true ){
        echo $categoria[0]->cat_name;
    } else {
        return $categoria[0]->cat_name;
    }
}

/*
 * Função de retorno contagem de palavras
 * @params $texto conteudo a ter as palavras contadas
 * @params $quantidade quantidade de palavras a serem retornadas
 * @params $echo se imprime na tela ou retorna
 * @author Vlamir Santo em 21/02/2015
 */
function the_resumo( $texto, $quantidade, $echo = true )
{
    $texto = strip_tags( $texto );
    $resumo = explode( " ", $texto );
    $frase = "";
    $cont = 0;
    while( $cont <= ( $quantidade - 1 ) ){
        $frase .= $resumo[$cont] . " ";
        $cont++;
    }
    if( count( $resumo ) > $quantidade ){
        $frase = strip_tags( $frase . "..." );
    } else {
        $frase = strip_tags( $frase );
    }
    if( $echo == false ){
        return $frase;
    } else {
        echo $frase;
    }
}
//cat slug return id
    function catid($slug){
        $cat = get_category_by_slug($slug);
        return $cat->term_id;
    }


