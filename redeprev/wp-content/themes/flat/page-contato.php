<?php 
get_header();
while ( have_posts() ) : the_post();
?>
<div class="bar-first bar-contatos">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo bloginfo('template_url');?>/assets/images/contatosimg.png" alt="" class="imgresultados">
            </div>
            <div class="col-md-7 col-md-offset-1">
                <h2>Fale Conosco</h2>
                <p>Este é o canal direto de comunicação com a RedePrev. Aqui, você pode enviar
                    suas críticas, sugestões ou dúvidas sobre seu plano de benefícios, empréstimos,
                     contribuições e demais assuntos sobre a Fundação.</p>
                <p>Basta preencher o formulário abaixo e em breve entraremos em contato. Caso não receba retorno dentro de 24h, por favor, avise-nos através do e-mail <span>faleconosco@redeprev.com.br</span>.</p>

            </div>
        </div>
    </div>
</div>

<div class="bar2-contato">
    <div class="container">
        <div class="row">
            <form method="post" action="<?php echo home_url();?>/mail/send.php">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-12">
                        <div>
                            <?php if(isset($_GET['sucesso'])){?>
                            sucesso
                            <?php } if(isset($_GET['erro'])){?>
                            Escolha um assunto para sua mensagem ser enviada
                            <?php } ?>
                        </div>
                        <div class="bg-point">
                            <span><img src="<?php echo bloginfo('template_url');?>/assets/images/message.png" alt=""/>Envie-nos uma mensagem</span>
                        </div>
                        <p class="info-envio">Preencha os campos abaixo e clique no botão "Enviar".</p>
                        <input name="name" type="text" id="name" placeholder="Nome Completo" />
                        <input name="email" type="text" id="email" placeholder="E-mail" />
                        <!-- <input name="assunto" type="text" id="subject" placeholder="Assunto" /> -->
                        <select name="assunto">
                            <option value="">Assunto</option>
                            
                            <option value="seguridade@fundacaoredeprev.com.br">Seguridade (Cadastro, Simulação de Benefícios, Contribuição etc.)</option>
                            <option value="empréstimos@fundacaoredeprev.com.br">Empréstimos (Simulação, Solicitação, Ficha Financeira etc.)</option>
                            <option value="pagamentos@fundacaoredeprev.com.br">Pagamentos (Folha de Benefícios)</option>
                        </select>
                        <textarea name="textarea" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>
                        <input name="url" value="<?php echo home_url();?>/contato" hidden/>
                        <input type="submit" placeholder="Enviar" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
endwhile;
get_footer();
?>