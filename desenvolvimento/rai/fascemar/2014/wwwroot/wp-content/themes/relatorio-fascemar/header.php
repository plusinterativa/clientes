<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="<?php echo home_url();?>/assets/css/vendor/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo home_url();?>/assets/css/base.css">

	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-ui.min.js"></script>
	
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/owl.carousel.min.js"></script>

	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/functions.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/main.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div class="blank"></div>
	<div class="header fixed">
		<div class="visible-xs">
			<a href="<?php echo home_url();?>">
				<img src="<?php echo home_url();?>/assets/images/logomobile.png" class="logomobile">
			</a>
			<div class="menumobile">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>		
					<ul><br/>
						<li class="visible-xs">
							<img class="closemobile" src="<?php echo home_url();?>/assets/images/close.png">
							<br/>
							<br/>
						</li>
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
							<a class="<?php if(is_page('previdencia-e-investimentos')){ echo 'active';} ?>" href="<?php echo home_url();?>/previdencia-e-investimentos">
								Previdência e Investimentos
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