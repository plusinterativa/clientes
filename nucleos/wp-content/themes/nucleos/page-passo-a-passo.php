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
                <?php 
                    $argumentos = array(
                       'category_name'    => 'passo-a-passo',
                       'posts_per_page'   => 10,
                       'order'            => 'ASC'
                    );
                    $query = new WP_Query( $argumentos );
                    while ( $query->have_posts() ):
                        $query->the_post();
                ?>
                <li>
                    <p class="question"><?php echo get_the_title(); ?></p>
                    <p class="answer"><?php echo get_the_content(); ?></p>
                </li>
                <?php
                    endwhile;
                    wp_reset_query(); 
                ?>
            </br></br>
                <p>Se você é <strong>participante ativo do INB ou da Nuclep</strong>, leia o passo a passo abaixo:</p>
                <?php 
                    $argumentos = array(
                       'category_name'    => 'passo-a-passo-nuclep',
                       'posts_per_page'   => 10,
                       'order'            => 'ASC'
                    );
                    $query = new WP_Query( $argumentos );
                    while ( $query->have_posts() ):
                        $query->the_post();
                ?>
                <li>
                    <p class="question"><?php echo get_the_title(); ?></p>
                    <p class="answer"><?php echo get_the_content(); ?></p>
                </li>
                <?php
                    endwhile;
                    wp_reset_query(); 
                ?>
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