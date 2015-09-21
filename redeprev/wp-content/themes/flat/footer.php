<div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-12">
                <?php
                $args = array('post_type' => 'extras', 'order'=>'DSC', 'posts_per_page' => '3', 'category__and' => array(catid('rodape'),catid('campos')));
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <div class="col-md-3">
                  <h2><?php the_title();?></h2>
                  <p><?php the_content();?></p>
                </div>
                <?php endwhile;?>
                <div class="col-md-3">
                  <h2>CONTATOS</h2>
                  <ul>
                    <li><span class="tel"></span>(11) 4481-9600</li>
                    <li><span class="msg"></span>faleconosco@redeprev.com.br</li>
                    <li><span class="loc"></span>Rua Teixeira, 467 – Taboão - Bragança Paulista - SP </br>CEP: 12916-360
                    </li>
                  </ul>
                  <a href="<?php echo home_url();?>/contato"><span class="contato"><h2>Fale Conosco</h2></span></a>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>      
    </div>
    <div class="energisa"><img src="<?php echo bloginfo('template_url');?>/assets/images/energisa.png" alt=""></div>      
    <script src="<?php echo bloginfo('template_url');?>/assets/js/main.js"></script>
    <?php wp_footer();?>
  </body>
</html>