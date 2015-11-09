        <footer class="main_footer container">
            <div class="content">
                <h4>NUCLEOS - Instituto de Seguridade Social | CPNJ: 30.022.727/0001-30</h4>
                <div class="main_footer_info">
                    <div class="main_footer_title icon-footer icon-home"></div>
                    <div class="main_footer_content">
                        <?php dynamic_sidebar('Endereço'); ?>
                    </div>
                    <div class="main_footer_title icon-footer icon-time"></div>
                    <div class="main_footer_content">
                        <?php dynamic_sidebar('Horário'); ?>
                    </div>
                    <a href="http://www.previc.gov.br/" target="blank">
                        <img src="<?php bloginfo('template_url'); ?>/img/banner_previc.jpg" alt="" />
                    </a>
                </div>
                <div class="main_footer_info">
                    <div class="main_footer_title icon-footer icon-phone"></div>
                    <div class="main_footer_content">
                        <p>
                            0800-024-1997 | 21 2173-1410 <br />
                            21 2173-1492 | 21 2173-1493 <br />
                           
                        </p>
                    </div>
                    <div class="main_footer_title icon-footer icon-email"></div>
                    <div class="main_footer_content">
                        <?php dynamic_sidebar('E-mail'); ?>
                    </div>
                    <a href="http://plusinterativa.com/desenvolvimento/nucleos/o-nucleos/certificacao-de-qualidade/" >
                        <img src="<?php bloginfo('template_url'); ?>/img/banner_bureau.png" alt="" />
                    </a>
                </div>
                <div class="main_footer_info">
                    <div class="info-maps">
                        <?php dynamic_sidebar('Mapa'); ?>
                    </div>
                    <p class="copy icon-right icon-author fl-right">Desenvolvido pela <strong><a class="font-bold" href="http://www.plusinterativa.com" target="_blank">Plus Interativa</a></strong></p>
                </div>
                <div class="clear"></div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>