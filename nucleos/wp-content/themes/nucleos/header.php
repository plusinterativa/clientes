<?php wp_head(); ?>
<!DOCTYPE html>
<html>
    <head>

	<meta name="globalsign-domain-verification" content="5o9c0E3ZELQgGOPiIkv9UwU7yA-oSKUpo_PUyE6RLL" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0, user-scalable=no" />
        <title><?php bloginfo(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/boot.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
        <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo.css" /> -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" />
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
        <script type='text/javascript' src='<?php bloginfo('template_url') ?>/js/nivo.min.js'></script>
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/maskedinput.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/validate.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
            <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
        <![endif]-->
        <!--[if (gte IE 6)&(lte IE 8)]>
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/selectivizr-min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main_search container">
            <div class="content">
                <div class="form-group fl-right">
                    <?php get_search_form(); ?>
                    <!--
                    <form action="" name="search" method="post">
                        <span>BUSCA</span>
                        <input type="text" name="s" size="20" />
                        <input type="submit" value="OK" />
                        <a class="main_auto" href="#">AUTOATENDIMENTO</a>
                    </form>
                    -->
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <header class="main_header container">
            <div class="content">
                <a title="Home" href="<?php bloginfo('url'); ?>" class="radius">
                    <h1 class="main_logo fl-left fontzero">
                        <?php bloginfo(); ?>
                    </h1>
                </a>
                <a class="mobmenu fl-right" href="#" title="Menu mobile">MENU</a>
                <div class="main_nav fl-right">
                    <ul>
                        <li class="icon icon-nucleos"><a title="O Nucleos" target="_blank">O Nucleos <span class="mobile-hover">+</span></a>
                            <div class="content-sub">
                                <ul class="sub-menu">
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/o-nucleos/nossa-historia/">Nossa História</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/o-nucleos/estrutura-organizacional/">Estrutura Organizacional</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/o-nucleos/diretoria-e-conselhos-2/">Diretoria e Conselhos</a></li>                                    <li><a href="<?php bloginfo('url'); ?>/index.php/o-nucleos/equipe-gerencial/">Equipe Gerencial</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/o-nucleos/patrocinadoras/">Patrocinadoras</a></li>
                                    <li class="fundonav"><a href="<?php bloginfo('url'); ?>\wp-content\uploads\2015\10\2015.03.18-Estatuto-2015.pdf" target="_blank">Estatuto Social</a></li>
                                    <li class="fundonav"><a href="<?php bloginfo('url'); ?>\wp-content\uploads\2014\12\Codigo_De_Etica.pdf" target="_blank">Código de Ética</a></li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="icon icon-previdencia"><a title="O Nucleos" target="_blank">Previdência<span class="mobile-hover">+</span></a>
                            <div class="content-sub">
                                <ul class="sub-menu">
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/previdencia/plano-basico-de-beneficios-pbb/apresentacao/">Plano Básico de Benefícios - PBB</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="icon icon-publicacoes"><a title="O Nucleos" target="_blank">Publicações<span class="mobile-hover">+</span></a>
                            <div class="content-sub">
                                <ul class="sub-menu">
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/noticias/">Notícias</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/category/comunicados">Comunicados</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/category/nuclin-express/">Nuclin Express</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/category/nuclin/">Nuclin</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/category/relatorio-anual/">Relatório Anual</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="icon icon-gestao"><a title="O Nucleos" target="_blank">Gestão dos Recursos<span class="mobile-hover">+</span></a>
                            <div class="content-sub">
                                <ul class="sub-menu">
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/gestao-dos-recursos/investimentos/politica-de-investimentos/">Investimentos</a></li>
                                    <!-- <li><a href="<?php bloginfo('url'); ?>/index.php/gestao-dos-recursos/dividas-contratadas/">Dívidas Contratadas</a></li> -->
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/gestao-dos-recursos/relatorios/demonstracoes-contabeis">Relatórios</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="icon icon-emprestimos"><a title="O Nucleos" target="_blank">Empréstimos<span class="mobile-hover">+</span></a>
                            <div class="content-sub">
                                <ul class="sub-menu">
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/emprestimos/clausulas-gerais/">Cláusulas Gerais</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/emprestimos/passo-a-passo/">Passo a Passo</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/emprestimos/formularios-de-solicitacao/">Formulários de Solicitação</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/emprestimos/calendario-de-disponibilizacao-de-credito/">Calendário de Disponibilização de Crédito</a></li>
                                </ul>
                            </div>
                        </li>
                        <!--
                        <li class="icon icon-saber"><a title="O Nucleos" target="_blank">Saber e Poupar<span class="mobile-hover">+</span></a>
                            <div class="content-sub">
                                <ul class="sub-menu">
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/saber-e-poupar/o-programa">O Programa</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/saber-e-poupar/financas-e-previdencia/">Finanças e Previdência</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/saber-e-poupar/videos/">Vídeos</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/category/links/">Links</a></li>
                                </ul>
                            </div>
                        </li>
                        -->
                        <li class="icon icon-relacionamento"><a title="O Nucleos" target="_blank">Relacionamento com o Participante<span class="mobile-hover">+</span></a>
                            <div class="content-sub">
                                <ul class="sub-menu">
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/category/equipe-de-relacionamento/">Equipe de Relacionamento</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/category/representantes-regionais/">Representantes Regionais</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/relacionamento-com-o-participante/estatisticas-de-atendimento/">Estatísticas de Atendimento</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/index.php/relacionamento-com-o-participante/fale-conosco/">Fale Conosco</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </header>