<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    	<?php ini_set( "display_errors", 0); ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(' '); if(wp_title(' ', false)) { echo ' | '; } bloginfo('name'); ?></title>
        <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo home_url();?>/assets/css/libs/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo home_url();?>/assets/css/base.css">
       
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-ui.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
		<div class="visible-xs">
			<ul id="navigationmobile">
				<li class="closemenumobile">
					<a href="#">
						<img src="<?php echo home_url();?>/assets/images/x.png" style="display: inline;width: 20px;">
					</a>
				</li>
				<li>
					<a href="<?php echo home_url();?>/abertura">
						<span>ABERTURA</span>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url();?>/acontecimentos-em-destaque">
						<span>ACONTECIMENTOS EM DESTAQUE</span>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url();?>/informacoes-gerais">
						<span>INFORMAÇÕES GERAIS</span>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url();?>/investimentos">
						<span>INVESTIMENTOS</span>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url();?>/plano-assistencial">
						<span>PLANO ASSISTENCIAL</span>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url();?>/demonstracoes-contabeis">
						<span>DEMONSTRAÇÕES CONTÁBEIS</span>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url();?>/pareceres">
						<span>PARECERES</span>
					</a>
				</li>
				<li>
					<a href="<?php echo home_url();?>/encerramento">
						<span>ENCERRAMENTO</span>
					</a>
				</li>
			</ul>
			<div class="menu-mobile">
				<a href="<?php echo home_url();?>">
					<img class="logo2" src="<?php echo home_url();?>/assets/images/mobile_logo.png">
				</a>
				<a href="#" id="menu-toggle-wrapper-2">
					<div id="menu-toggle-2"></div>	
				</a>
				<div class="c"></div>
			</div>
		</div>
    	<div class="fadebg"></div>
    	<a href="#" id="menu-toggle-wrapper" class="<?php if(is_home()){echo 'home';} else{echo 'outhome';}?>" style="<?php if(is_home()){echo 'display:none !important';}?>">
			<div id="menu-toggle"></div>	
		</a>
		<div id="side-bar" class="<?php if(is_home()){echo 'open';}else{echo 'close';}?>">
			<div class="inner-wrapper">	
				<div id="side-inner">
					<div id="side-contents">
						<ul id="navigation">
							<li class="menu-item-has-children logoa">
								<div id="logo-wrapper" class="textcenter">
									<a href="<?php echo home_url();?>">
										<img src="<?php echo home_url();?>/assets/images/logo2.png" class="logo2">
									</a>
								</div>
							</li>
							<li class="menu-item-has-children">
								<a href="<?php echo home_url();?>/abertura">
									<span>ABERTURA</span>
								</a>
							</li>
							<li class="menu-item-has-children current-menu-parent">
								<a href="<?php echo home_url();?>/acontecimentos-em-destaque">
									<span>ACONTECIMENTOS EM DESTAQUE</span>
								</a>
							</li>
							<li class="menu-item-has-children current-menu-parent">
								<a href="<?php echo home_url();?>/informacoes-gerais">
									<span>INFORMAÇÕES GERAIS</span>
								</a>
							</li>
							<li class="menu-item-has-children">
								<a href="<?php echo home_url();?>/investimentos">
									<span>INVESTIMENTOS</span>
								</a>
							</li>
							<li class="menu-item-has-children">
								<a href="<?php echo home_url();?>/plano-assistencial">
									<span>PLANO ASSISTENCIAL</span>
								</a>
							</li>
							<li class="menu-item-has-children">
								<a href="<?php echo home_url();?>/demonstracoes-contabeis">
									<span>DEMONSTRAÇÕES CONTÁBEIS</span>
								</a>
							</li>
							<li class="menu-item-has-children">
								<a href="<?php echo home_url();?>/pareceres">
									<span>PARECERES</span>
								</a>
							</li>
							<li class="menu-item-has-children">
								<a href="<?php echo home_url();?>/encerramento">
									<span>ENCERRAMENTO</span>
								</a>
							</li>	
						</ul>
					</div>		
				</div>
			</div>				
		</div>