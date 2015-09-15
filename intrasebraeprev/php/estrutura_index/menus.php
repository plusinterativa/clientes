<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('sistema/php/functionRemoveAcentos.php'); ?>
<?php include "location.php";?>
<div id='cssmenu' class="hidden-xs hidden-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<a href="<?php echo $home_url;?>">
					<img class="logo"src="imagens/logo.png" alt="">
				</a>
				<ul>
				   <?php

				   		

						$nomeArq = removeAcentos($_SESSION['usuario']);

						$nomeArq = str_replace(" ","_",$nomeArq);

				   		include("php/menus/menu".$nomeArq.".txt");

				   ?>
				</ul>
			</div>
		</div>
	</div>



</div><!-- fecha cssmenu --> 

<ul class="mobile-menu hidden-md hidden-lg">
	<li> <img class="x-icon"src="<?php echo $home_url;?>/imagens/xicon.png" alt=""></li>
   <?php

		$nomeArq = removeAcentos($_SESSION['usuario']);

		$nomeArq = str_replace(" ","_",$nomeArq);

   		include("php/menus/menu".$nomeArq.".txt");

   ?>
</ul>			
	
<!-- fecha cssmenu --> 







