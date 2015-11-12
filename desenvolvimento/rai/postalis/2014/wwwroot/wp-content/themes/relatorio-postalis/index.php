<?php get_header(); ?>
	<div class="bg">
		<div class="container home hidden-xs">
			<div class="row">
				<div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-0 col-lg-5 col-lg-offset-0">
					<img class="logo" src="<?php echo home_url();?>/assets/images/logo.png">
				</div>
				<div class="col-md-7 col-sm-7 col-sm-offset-1 col-md-offset-0 col-lg-6">
					<ul class="menuhome">
						<li>
							<a style="margin-left:122px;" href="<?php echo home_url();?>/abertura">Abertura</a>
						</li>
						<li>
							<a style="margin-left:115px;" href="<?php echo home_url();?>/institucional">Institucional</a>
						</li>
						<li>
							<a style="margin-left:106px;" href="<?php echo home_url();?>/investimentos">Investimentos</a>
						</li>
						<li>
							<a style="margin-left:98px;" href="<?php echo home_url();?>/resultados">Resultados</a>
						</li>
						<li>
							<a style="margin-left:90px;" href="<?php echo home_url();?>/pareceres">Pareceres</a>
						</li>
						<li>
							<a style="margin-left:82px;" href="<?php echo home_url();?>/encerramento">Encerramento</a>
						</li>
					</ul>
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
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-home visible-xs">
				<div class="rel">Relatório Anual 2014</div>
			</div>
		</div>
	</div>
</div>
	
<?php get_footer(); ?>
