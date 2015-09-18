<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ANABB de verdade</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/default.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/component.css" />
    <script src="<?php bloginfo('template_url');?>/assets/js/modernizr.custom.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/css/smartphone.css">

  <?php wp_head(); ?>
</head>
<body>
  <?php if(is_home()):  ?>
    <div id="inicio" class="bg-topo hidden-xs">
    <div class="container">
      <img class="" src="<?php bloginfo('template_url');?>/assets/images/logo-anabb-med.png"/>
      <div class="col-md-10 col-md-offset-1">
        <div class="menu-list">
          <ul>
            <li><a href="#quemSomos">Quem somos</a></li>
            <li><a href="#nossasProp">O que queremos</a></li>
            <li><a href="#noticias">Notícias</a></li>
            <li><a href="#fale">Fale Conosco</a></li>
          </ul>
        </div>
      </div>
      <div class="demo">
        <?php
        $args = array('posts_per_page' => '1', 'category_name' => 'noticias');
        $the_query = new WP_Query( $args );
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>"><h3 class="info-more">Leia Mais</h3></a>
        <?php endwhile;?>
      </div>
    </div>
  </div>
<!-- DISPLAY MOBILE -->
<div class="hidden-sm hidden-md hidden-lg">
  <img class="img-responsive margin-zero" src="<?php bloginfo('template_url');?>/assets/images/logo-anabb-med.png"/>
  <div class="menu-list">
      <ul class="col-xs-12 col-sm-12">
        <li><a href="#quemSomos">Quem somos</a></li>
        <li><a href="#nossasProp">Nossas Propostas</a></li>
        <li><a href="#noticias">Notícias</a></li>
        <li><a href="#fale">Fale Conosco</a></li>
      </ul>
    </div>
</div>
<!-- DISPLAY MOBILE -->
    <div class="roll hidden-xs hidden-sm">
      <a href="#inicio"><div class="circle  circle-current"></div></a>
      <a href="#quemSomos"><div class="circle"></div></a>
      <a href="#nossasProp"><div class="circle"></div></a>
      <a href="#noticias"><div class="circle"></div></a>
      <a href="#fale"><div class="circle"></div></a>
    </div>
  <div class="container">
    <div class="row">
      <img class="seta" src="<?php bloginfo('template_url');?>/assets/images/seta.png"/>
    </div>
  </div>
  <?php  endif; ?>
  