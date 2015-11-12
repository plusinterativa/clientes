<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo home_url();?>/assets/css/base.css">

	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-ui.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/owl.carousel.min.js"></script>

	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/functions.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/mobile.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/main.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div class="site">
	<div class="container fundo1">
		<div class="row">
			<div class="col-md-12 hidden-xs hidden-sm">
				<div class="bgleft"></div>
				<div class="bgright"></div>
			</div>
		</div>
	</div>
	<div class="blank"></div>
	<?php if(is_home()): else:?>
	<div style="text-align:center;" class="hidden-xs">
		<img class="max-width" src="<?php echo home_url();?>/assets/images/header.png">
	</div>
	<div class="header hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li>
							<a class="<?php if(is_page('abertura')){ echo 'active';} ?>" href="<?php echo home_url();?>/abertura">
								Abertura
							</a>
						</li>
						<li>
							<a class="<?php if(is_page('institucional')){ echo 'active';} ?>" href="<?php echo home_url();?>/institucional">
								Institucional
							</a>
						</li>
						<li>
							<a class="<?php if(is_page('investimentos')){ echo 'active';} ?>" href="<?php echo home_url();?>/investimentos">
								Investimentos
							</a>
						</li>
						<li>
							<a class="<?php if(is_page('resultados')){ echo 'active';} ?>" href="<?php echo home_url();?>/resultados">
								Resultados
							</a>
						</li>
						<li>
							<a class="<?php if(is_page('pareceres')){ echo 'active';} ?>" href="<?php echo home_url();?>/pareceres">
								Pareceres
							</a>
						</li>
						<li>
							<a class="<?php if(is_page('encerramento')){ echo 'active';} ?>" href="<?php echo home_url();?>/encerramento">
								Encerramento
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>		
	</div>
	<div class="headermobile visible-xs">
		<img class="logo" src="<?php echo home_url();?>/assets/images/logomobile.png">
		<div class="btn-mobile">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<ul class="menumobile hidden-md hidden-lg hidden-sm">
		<li>
			<a href="#" class="closemobile">
			<img src="<?php echo home_url();?>/assets/images/xicon.png" alt="">
			</a>
		</li>
		<li>
			<a href="<?php echo home_url();?>/abertura">Abertura</a>
		</li>
		<li>
			<a  href="<?php echo home_url();?>/institucional">Institucional</a>
		</li>
		<li>
			<a href="<?php echo home_url();?>/investimentos">Investimentos</a>
		</li>
		<li>
			<a href="<?php echo home_url();?>/resultados">Resultados</a>
		</li>
		<li>
			<a  href="<?php echo home_url();?>/pareceres">Pareceres</a>
		</li>
		<li>
			<a  href="<?php echo home_url();?>/encerramento">Encerramento</a>
		</li>
	</ul>
	<?php endif;?>