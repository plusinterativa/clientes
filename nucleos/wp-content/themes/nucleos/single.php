<?php 
	if( in_category( array( 'noticias' ) ) )
        get_template_part( 'single-noticias' );
    if( in_category( array( 'videos' ) ) )
        get_template_part( 'single-videos' );
?>