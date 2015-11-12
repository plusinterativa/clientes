<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="<?php echo home_url();?>/assets/css/base.css">

	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/jquery-ui.min.js"></script>	
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/vendor/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/functions.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/main.js"></script>
	<script type="text/javascript" src="<?php echo home_url();?>/assets/js/toggle.js"></script>


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<!--menu large desktop-->
	<div class="header fixed hidden-xs hidden-sm">
		<ul>	
			<li>
				<a href="<?php echo home_url();?>">
					<img class="logo" src="<?php echo home_url();?>/assets/images/logo.png"/>
				</a>
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

	<!--Menu para Mobile-->
	<div class="visible-xs visible-sm">
		<div class="headermobile">
			<a href="<?php echo home_url();?>">
						<img class="logo" src="<?php echo home_url();?>/assets/images/logo.png"/>
					</a>
			<div class="btn-menu"><div class="menu"></div><div class="menu"><br/></div><div class="menu"></div></div>		
		</div>	
		
		<ul class="mobile">
					<li>
						<a href="#"><img class="closemobile" src="<?php echo home_url();?>/assets/images/x2.png"></a>
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
