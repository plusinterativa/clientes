	<?php if(is_home()):else:?>
	<div class="footer">
		<img class="footerBg" src="<?php echo home_url();?>/assets/images/footer.png">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-1 col-sm-8 col-xs-12 ">
					<div class="plus">						
						<a target="_blank" href="http://plusinterativa.com">
							<div>Desenvolvido pela Plus Interativa</div>
							<img src="<?php echo home_url();?>/assets/images/plus.png"/>
						</a>
					</div>
				</div>				
				<div class="col-md-7 col-sm-6 col-xs-12 textRight">
					<strong>FASCEMAR</strong> - Relatório Anual 2014<br/>
					Fundação de Previdência Complementar

				</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<?php wp_footer(); ?>
	</body>
</html>
