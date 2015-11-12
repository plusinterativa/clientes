
		<!-- imagesLoaded jquery plugin -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/imagesloaded.pkgd.min.js"></script>		
		<!-- jquery isotop plugin -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/isotope.pkgd.min.js"></script>
		<!-- jquery history neede for ajax pages -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/jquery.history.js"></script>
		<!-- owwwlab jquery kenburn slider plugin -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/jquery.owwwlab-kenburns.js"></script>
		<!-- owwwlab jquery double carousel plugin -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/jquery.owwwlab-DoubleCarousel.js"></script>
		<!-- owwwwlab jquery video background plugin -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/jquery.owwwlab-video.js"></script>
		<!-- tweenmax animation framework -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/TweenMax.min.js"></script>
		<!-- jquery nice scroll plugin needed for vertical portfolio page -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/jquery.nicescroll.min.js"></script>
		<!-- jquery magnific popup needed for ligh-boxes -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/jquery.magnific-popup.js"></script>
		<!-- html5 media player -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/mediaelement-and-player.min.js"></script>
		<!-- jquery inview plugin -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/jquery.inview.min.js"></script>
		<!-- smooth scroll -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/smoothscroll.js"></script>
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/masterslider.min.js"></script>
		<!-- owl carousel -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/owl.carousel.min.js"></script>
		<!-- fancybox -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/libs/jquery.fancybox.js"></script>

		<script type="text/javascript">
		$(function(){
			setTimeout(function(){
				var aaa = $('.lr_horizontal_share.lrshare_interfacehorizontal').html();
				$('.midias').append(aaa);
			},100);
		});
		</script>
		
		<!-- main js -->
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/functions.js"></script>
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/plugins.js"></script>
		<script type="text/javascript" src="<?php echo home_url();?>/assets/js/main.js"></script>
		
		<?php wp_footer(); ?>
    </body>
</html>