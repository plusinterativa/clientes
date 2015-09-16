
  <?php if(is_home()):  ?>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<img class="img-responsive" src="<?php bloginfo('template_url');?>/assets/images/footer-divisoria.png">
				<div class="row">
					<div class="blank-space">
					<div class="col-md-3">
						<img class="img-responsive anabb-logo-footer" src="<?php bloginfo('template_url');?>/assets/images/logo-anabb-small.png">
					</div>
					<div class="col-md-4 col-md-offset-1">
						 <p class="chapa-basic-info">
				            Chapa para as eleições de Conselheiros,
				            Diretores e Representantes Regionais da
				            ANABB - Associação Nacional dos 
				            funcionários do Banco do Brasil.
	          			</p>
					</div>
					<div class="col-md-3 col-md-offset-1">
						<img class="img-responsive img-mail" src="<?php bloginfo('template_url');?>/assets/images/footer-mail.png">
						<p class="anabb-mail">contato@anabbdeverdade.com.br</p>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif;  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/grid.js"></script>
<script>
	$(function() {
		Grid.init();
	});
</script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>