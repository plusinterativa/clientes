	<?php if(is_home()):else:?>
	<div class="footer">
		<img class="footerBg" src="<?php echo home_url();?>/assets/images/footer.png">
		<div class="container">
			<div class="marcamin">
				<img src="<?php echo home_url();?>/assets/images/photos/marcamin.png">
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 textCenter hidden-xs">
					<img src="<?php echo home_url();?>/assets/images/photos/logomin.png">
				</div>
				<div class="col-md-2 col-xs-12">
					<div class="plus">
						<a target="_blank" href="http://plusinterativa.com">
							<div>Desenvolvido pela Plus Interativa</div>
							<img src="<?php echo home_url();?>/assets/images/plus.png"/>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<?php wp_footer(); ?>
	</body>
</html>
