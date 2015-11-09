<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo bloginfo('template_url');?>/assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url');?>/assets/css/vendor/animate.css" rel="stylesheet"> 
    <link href="<?php echo bloginfo('template_url');?>/assets/css/vendor/owl.carousel.css" rel="stylesheet"> 
    <link href="<?php echo bloginfo('template_url');?>/assets/css/vendor/owl.transitions.css" rel="stylesheet"> 
    <link href="<?php echo bloginfo('template_url');?>/assets/css/vendor/owl.theme.css" rel="stylesheet">     
    <link href="<?php echo bloginfo('template_url');?>/assets/css/style.css" rel="stylesheet"> 
    <link href="<?php echo bloginfo('template_url');?>/assets/css//media/smartphones.css" rel="stylesheet"> 
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/jquery.nicescroll.js"></script>
    <script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/owl.carousel.js"></script>
    <script src="<?php echo bloginfo('template_url');?>/assets/js/vendor/countUp.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <?php wp_head();?>
  </head>
  <body>
    <div class="visible-xs visible-sm"> 
      <div class="menumobile">
        <a href="<?php echo $url;?>"><img class="logo"src="<?php echo bloginfo('template_url');?>/assets/images/redeprevlogobranco.png" alt=""></a>
        <div class="menutouch"><div></div><div></div><div></div></div>
      </div>
      <ul class="menu-show">          
        <li><a href="#" class="closemobile">
          <img src="<?php echo bloginfo('template_url');?>/assets/images/xicon.png"></a></li>
        <li>
          <a  href="<?php echo home_url();?>/sobre-nos">
            SOBRE NÓS
          </a>
        </li>
        <li><a href="<?php echo home_url();?>/planos">PLANOS</a></li>
        <li><a href="<?php echo home_url();?>/resultados">RESULTADOS</a></li>
        <li><a href="<?php echo home_url();?>/educaprev">EDUCAPREV</a></li>
        <li><a href="<?php echo home_url();?>/noticias">PUBLICAÇÕES</a></li>
        <li><a href="<?php echo home_url();?>/contato">CONTATO</a></li>
        <li><a href="http://cpro4237.publiccloud.com.br/hmp/hmpfrmlogin.aspx/" target="_blank"><span class="lock"></span><p>HomePrev</p></a></li>
        
      </ul>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">          
            <ul class="menu hidden-xs hidden-sm">
              <li>
                <a class="logo"href="<?php echo home_url();?>"><img src="<?php echo bloginfo('template_url');?>/assets/images/logo.png" alt=""></a>
              </li>
              <li>
                <a class="<?php if(is_page('sobre-nos')){ echo 'active-menu';} ?>" href="<?php echo home_url();?>/sobre-nos">
                SOBRE NÓS
              </a>
            </li>
              <li>
                <a class="<?php if(is_page('planos')){ echo 'active-menu';} ?>"href="<?php echo home_url();?>/planos">
                  PLANOS
                </a>
                </li>
              <li>
                <a class="<?php if(is_page('resultados')){ echo 'active-menu';} ?>"href="<?php echo home_url();?>/resultados">
                RESULTADOS
                </a>
            </li>
              <li>
                <a class="<?php if(is_page('educaprev')){ echo 'active-menu';} ?>"href="<?php echo home_url();?>/educaprev">
                EDUCAPREV
                </a>
              </li>
              <li>
                <a class="<?php if(is_page('noticias')){ echo 'active-menu';} ?>"href="<?php echo home_url();?>/noticias">
                PUBLICAÇÕES
                </a>
              </li>
              <li>
                <a class="<?php if(is_page('contato')){ echo 'active-menu';} ?>"href="<?php echo home_url();?>/contato">
                CONTATO
                </a>
              </li>
              <li>
                <a href="http://cpro4237.publiccloud.com.br/hmp/hmpfrmlogin.aspx/" target="_blank"><span class="lock"></span><p>HomePrev</p></a></li>
            </ul>          
        </div>
      </div>
    </div>