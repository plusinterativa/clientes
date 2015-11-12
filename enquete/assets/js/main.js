$(function(){
	$('.y').click(function(event) {
	    data = $(this).attr('alt');
	    $.ajax({
		    url: "data.php",
	        type: 'POST',
	        data: ({ message:'',data:data}),
	        success:function(data) {
	            $('.message').html(data);
	            $('.message').addClass('show');
	            setTimeout(function(){
	            	$('.message').removeClass('show');
	            },3000);
	        }
	    });
	});

	$('.x').click(function(event) {
		$('.imagemax').hide('fade');
	});

	$('.zoom').click(function(event) {
		image = $(this).parent().find('.thumb');
		fullImage = image.attr('alt');
		wImage = image.width();
		hImage = image.height();
		
		$('.imagemax img').attr('src', fullImage);

		if(wImage >= hImage){
			$('.imagemax img').css({width:'800px',height:'auto'});
		}
		else{
			$('.imagemax img').css({width:'auto',height:'100%'});
		}
		setTimeout(function(){
			$('.imagemax').show('fade');	
		},500);
	});

	$('.item').hover(function() {
		$(this).addClass('hover')
	}, function() {
		$(this).removeClass('hover')
	});

	$('.captcha').click(function(event) {
		$('.load').animate({
			width: '100%'
		}, 1500, function() {
			$('.captcha').hide('fade');
			setTimeout(function(){
				$('.captcha').remove();
				$('.gallery').show('fade');
			},500);
		});
	});
	$('.bar').hover(
		function() {
			$(this).css('background','#f6f6f6')
			var offset = $(this).find('.fill').offset();
			$('.tool').css({left:offset.left+25,top:offset.top-300});

			name = $(this).find('.fill').attr('data-name');
			file = $(this).find('.fill').attr('data-file');
			porc = $(this).find('.fill').attr('data-porc');
			voto = $(this).find('.fill').attr('data-voto');
			$('.dataFile,.dataName,.dataVoto,.dataPorc').html('');
			
			$('.dataName').html(name);
			$('.dataFile').html('<img src="'+file+'"/>');
			$('.dataPorc').html(porc+'%');

			if(voto==1){
				text='voto';
			}
			else{
				text='votos';
			}
			$('.dataVoto').html(voto+' '+text);
			$('.tool').show('fade');
		},
		function() {
			$(this).css('background','#eee');
			$('.tool').hide();
		}
	);

    $('.scroller').niceScroll({cursorcolor:"#999"});
});