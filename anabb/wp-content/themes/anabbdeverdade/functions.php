<?php
// Configuro novo tamanho de imagem ( classes );
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'min', 258, 276, true );
		add_image_size( 'max', 856,  330, true );
		add_image_size( 'quemsomos', 160, 198, true );
	}
	// Enable Post Thumbnail
	add_theme_support( 'post-thumbnails' ); 
?>