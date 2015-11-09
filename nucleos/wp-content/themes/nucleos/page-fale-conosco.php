<?php 
    get_header();

   // require_once "recaptcha/recaptchalib.php";

    // Register API keys at https://www.google.com/recaptcha/admin
    $publickey = "6LevDfwSAAAAAASVDBwkxR99fprhjxkzhz37xoq0";
    $privatekey = "6LevDfwSAAAAAMM2EEc_OJTD2Air6ZKnjV5y57YY";
    $resp = null;
    $error = null;
?>
<main class="main_wrap container">
    <div class="content">
        <?php the_breadcrumb(); ?>
        <article class="main_publications_wleft noborder">
            <h1 class="section_title"><?php the_title(); ?></h1>
            <div class="main_form form-control">
                <?php
                
                   // if ($_POST["recaptcha_response_field"]) {
                       // $resp = recaptcha_check_answer( $privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
                        if($_POST){

                            //if ( $resp->is_valid ) {
                                //echo "<p><strong>Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.</strong></p>";
                                
                                include 'envia.php';

                            //} else {
                               // echo "<p><strong>Sua mensagem não pôde ser enviada. Tente novamente mais tarde.</strong></p>";
                            //}
                        }
                  //  }
                
                ?>
                <form class="validate-form" action="" method="post">
                    <div class="formcontrol-full">
                        <label for="nome"><span>Nome (obrigatório)</span></label>
                        <input type="text" class="validate" id="nome" name="nome" data-required="true" />
                    </div>
                    <div class="formcontrol-small">
                        <label for="telefone"><span>Telefone (obrigatório)</span></label>
                        <input class="phone_mask validate" type="text" id="telefone" name="telefone" data-required="true" />
                    </div>
                    <div class="formcontrol-small last">
                        <label for="celular"><span>Celular</span></label>
                        <input class="phone_mask" type="text" id="celular" name="celular" />
                    </div>
                    <div class="formcontrol-small">
                        <label for="matricula"><span class='spacing' style='display:block width:100% !important'>Matrícula (obrigatório)</span></label>
                        <input class="validate spacing" type="text"  id="matricula" name="matricula" data-required="true" />
                    </div>
                    <div class="formcontrol-medium last">
                        <label for="email"><span>E-mail (obrigatório)</span></label>
                        <input class="validate" type="email" id="email" name="email" data-required="true" data-pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                    </div>
                    <div class="formcontrol-full">
                        <label for="assunto"><span>Assunto</span></label>
                        <input class="validate" type="text" id="assunto" name="assunto" data-required="true" />
                    </div>
                    <div class="formcontrol-full">
                        <label for="mensagem"><span>Sua mensagem</span></label>
                        <textarea class="validate" type="text" rows="8" id="mensagem" name="mensagem" data-required="true"></textarea>
                    </div>
                    <!--
                    <div class="formcontrol-full">
                        <?php// echo recaptcha_get_html($publickey, $error); ?>
                    </div>
                -->
                    <div class="formcontrol-full">
                        <input class="btn btn-blue" type="submit" value="Enviar" />
                    </div>
                </form>
            </div>
        </article>
        <aside class="sidebar bd-left">
            <?php 
   
                if ( have_posts() ):
                    while ( have_posts() ):
                        the_post();
                        $params = array(
                            'alt'   => get_the_title(),
                            'title' => get_the_title()
                        );
                        the_post_thumbnail( 'full', $params );
                    endwhile;
                endif;
     
            ?>
            <div class="widget_header">Endereço</div>
            <article class="sidebar_widget">
                <?php dynamic_sidebar('Endereço'); ?>
            </article>
            <div class="widget_header">Telefones</div>
            <article class="sidebar_widget">
                <?php dynamic_sidebar('Telefones'); ?>
            </article>
            <div class="widget_header">E-mail</div>
            <article class="sidebar_widget">
                <?php dynamic_sidebar('E-mail'); ?>
            </article>
            <div class="widget_header">Horário</div>
            <article class="sidebar_widget">
                <?php dynamic_sidebar('Horário'); ?>
            </article>
        </aside>
        <div class="clear"></div>

    </div>
</main>
<?php get_footer(); ?>