	<?php if(is_home()):else:?>
	<div class="footer">

		<img class="bgfooter" src="<?php echo home_url();?>/assets/images/footer.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<img class="logo" src="<?php echo home_url();?>/assets/images/logo.png">
				<div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<?php wp_footer(); ?>
</html>
