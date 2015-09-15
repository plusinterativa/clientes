$(function(){
	//Owl-carousel
	$("#owl-demo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay : 3000,
       transitionStyle:"fade"
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

	//config drop
	$('.cog').toggle(function() {
		$('.drop-cog ul').slideDown();
	}, function() {
		$('.drop-cog ul').slideUp();
	});
	//search box
	$('.lupa').toggle(function() {
		$('.search').animate({"width":"200px"});	
	}, function() {		
		$('.search').animate({"width":"0px"});
	});
	//cpanel 
	function height_scroll(){
		alt = $(window).height();
	  	altBarTopo = $('.bar-topo').height();
	  	var1 = parseInt(alt) - parseInt(altBarTopo); 	  	
	  	$(".bar-lateral").niceScroll();
	  	$('.nicescroll-rails').css('top',altBarTopo);		
	  	$('.bar-lateral').height(var1);
	}
	$(".sub-paginas span").click(function() {			
		$(this).parent().find('.list1').toggle('fast');
		height_scroll();
	}).stop();
	$(".sub-down").click(function() {			
		$(this).find('.list2').toggle('fast');
		height_scroll();
	}).stop();
	$('.teste-mobile').click(function(){
		$('.mobile-ul').slideToggle('slow');
	});
	$('.x-mobile-menu').click(function(){
		$('.mobile-ul').slideToggle('slow');
	});
		$(".mobile-ul li").click(function() {
			$(this).find('.sub-down').slideToggle('slow');
			height_scroll();
		});
	//Drop interno
	$('.year span').click(function() {
		$(this).parent().find('.month').stop().slideToggle('slow');
	});
	$('.month span').click(function() {
		$(this).parent().find('.linked').stop().slideToggle('slow');
	});
	//bar-mobile//
		//menu-cpanel
		$('.li-first span').click(function() {			
			$(this).parent().find('.ul-one').stop().slideToggle();
		});
		$('.li-first ul li span').click(function() {
			$(this).parent().find('.ul-two').stop().slideToggle();
		});
		//menu-home
		$('.btn-mobile').click(function(){
			$('.mobile-menu').show('fade');
			$('.menu-cpanel').show('fade');
		});			
			//ajustes
			$('.has-sub ul li a').addClass('get');
			$('.has-sub ul li ul li a').removeClass('get').addClass('checked');
			$('.has-sub ul').addClass('first-ul');
			$('.has-sub ul li ul').parent().find('.get').attr("href","#");			
			$('.has-sub ul li ul').removeClass('first-ul').addClass('second-ul');
			$('.has-sub a').click(function() {
			//Drop Mobile
			$(this).parent().find('.first-ul').stop().slideToggle();
			});
			$('.has-sub ul li a').click(function() {
				$(this).parent().find('.second-ul').stop().slideToggle();
			});
		//conf
		$('.conf').click(function(){
			$('.conf-menu').show('fade');
		});
		//hidden
		$('.x-icon').click(function() {
			$('.mobile-menu').hide('fade');
			$('.conf-menu').hide('fade');
			$('.menu-cpanel').hide('fade');
		});
	//pesquisa tr
	$('.pesquisa tr:last-child').insertBefore('.pesquisa tr:first-child');
});
