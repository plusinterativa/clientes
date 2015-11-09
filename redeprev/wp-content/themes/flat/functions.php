<?php
//custom excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt);
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

//custom content
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

//cat slug return id
	function catid($slug){
		$cat = get_category_by_slug($slug);
  		return $cat->term_id;
	}

// Configuro novo tamanho de imagem ( classes );
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'newssingle', 555, 396, true );
		add_image_size( 'newsmin', 109,  79, true );
		add_image_size( 'newsmax', 263, 185, true );
		add_image_size( 'newsnoticias', 286, 208, true );
		add_image_size( 'homebanner', 1024, 400, true );
	}

// Echo slug page
	function the_slug($echo=true){
		$slug = basename(get_permalink());
		do_action('before_slug', $slug);
		$slug = apply_filters('slug_filter', $slug);
		if( $echo ) echo $slug;
		do_action('after_slug', $slug);
		return $slug;
	}

// Excerpt limite
	function custom_excerpt_length( $length ) {
		return 25;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Remove post thumbnail class
	function the_post_thumbnail_remove_class($output) {
		$output = preg_replace('/class=".*?"/', '', $output);
		return $output;
	}
	add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');

// Enable Post Thumbnail
	add_theme_support( 'post-thumbnails' ); 

//Adiciona um tipo de Post específico
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		register_post_type( 'banners',
			array(
				'labels' => array(
					'name' => __( 'Banners' ),
					'singular_name' => __( 'banners' )
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag') 
			)
		);
		register_post_type( 'extras',
			array(
				'labels' => array(
					'name' => __( 'Extras' ),
					'singular_name' => __( 'extras' )
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag') 
			)
		);
	}

// Adiona thumbs nas "chamadas" 
	add_action('init', 'thumbs_chamadas');
	function thumbs_chamadas() {
		add_post_type_support( 'banners', 'custom-fields' );
		add_post_type_support( 'banners', 'thumbnail' );
		add_post_type_support( 'extras', 'custom-fields'  );
	}

// Desativa as Widgets padrão do wordpress
	function unregister_default_wp_widgets() {
	    unregister_widget('WP_Widget_Pages');
	    unregister_widget('WP_Widget_Calendar');
	    unregister_widget('WP_Widget_Archives');
	    unregister_widget('WP_Widget_Links');
	    unregister_widget('WP_Widget_Meta');
	    unregister_widget('WP_Widget_Search');
	    unregister_widget('WP_Widget_Text');
	    unregister_widget('WP_Widget_Categories');
	    unregister_widget('WP_Widget_Recent_Posts');
	    unregister_widget('WP_Widget_Recent_Comments');
	    unregister_widget('WP_Widget_RSS');
	    unregister_widget('WP_Widget_Tag_Cloud');
	}
	add_action('widgets_init', 'unregister_default_wp_widgets', 1);	

// Remove Wordpress Junk
	remove_action('wp_head', 'rsd_link'); // Removes the Really Simple Discovery link
	remove_action('wp_head', 'wlwmanifest_link'); // Removes the Windows Live Writer link
	remove_action('wp_head', 'wp_generator'); // Removes the WordPress version
	remove_action('wp_head', 'start_post_rel_link'); // Removes the random post link
	remove_action('wp_head', 'index_rel_link'); // Removes the index page link
	remove_action('wp_head', 'adjacent_posts_rel_link'); // Removes the next and previous post links

// Remove All classes
	add_filter('body_class','my_class_names');
	function my_class_names($classes) {
	    return array();
	}

// Login style
	function login_page_styles() {
	    wp_enqueue_style( 'login-page-styles', get_template_directory_uri() . '/css/login.css' ); 
	}
	add_action( 'login_enqueue_scripts', 'login_page_styles' );

// Admin style
	function main_dashbord() {
	    wp_enqueue_style( 'main_dashbord', get_template_directory_uri() . '/css/dashboard.css' ); 
	}
	add_action('admin_head', 'main_dashbord');
// Php Mailer
	/*function send_contact_form(){
	require(ABSPATH . WPINC . '/class-phpmailer.php');
    require(ABSPATH . WPINC . '/class-smtp.php');

 	$mail->SMTPDebug = 3; 
    date_default_timezone_set('America/Sao_Paulo');//corrige hora local
    $siteurl = trailingslashit( get_option('home') );
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet='UTF-8';

    $mail->From = get_option('smtp_user');
    $mail->FromName = get_option('blogname');
    $mail->Subject = '['. get_option('blogname') .'] nova mensagem';
    $mail->AddReplyTo = $_POST['contact_email'];
    $mail->Sender = get_option('smtp_user');
    //SMTP Config
    $mail->Host = get_option('smtp_host');
        //Descomente as opções abaixo se for usar SMTP autenticado. Lembre-se que isto requer que o e-mail seja do domínio do site.
    //$mail->SMTPAuth = true;
    //$mail->Username = get_option('smtp_user');
    //$mail->Password = get_option('smtp_pass');        
 
    $mail->AddAddress( get_option('mail_from') );
 
    $message  = 'Prezado Administrador,' . "\r\n\r\n";
    $message .= 'Uma nova mensagem foi enviada em ' .date("d/m/Y \à\s H:i:s"). "\r\n\r\n";
    $message .= 'MENSAGEM:' . "\r\n";
    $message .= '------------------------' . "\r\n";
 
             no array abaixo, coloque o nome dos campos que quer remover do corpo da mensagem
        
    $campos_excluidos = array('submit');
 
    while(list($campo, $valor) = each($_POST)){
        if( !in_array( $campo, $campos_excluidos ) ){
 
            $message.= ucfirst($campo) .":  ". $valor . "\r\n\r\n";
        } 
    }
    $message .= '-------------------------' . "\r\n\r\n";
    $message .= 'Atenciosamente,' . "\r\n";
    $message .= get_option('blogname') . "\r\n";
    $message .= $siteurl . "\r\n\r\n\r\n\r\n";
 
    $mail->Body = $message;
 
    // Send Email.
    if(!$mail->Send()){
    	header('location:http://www.google.com');
    } else {

    	header('location:http://www.facebook.com');
    } 
    $mail->ClearAllRecipients(); 
}*/
function send_mailer(){	
	$to      = 'nobody@example.com';
	$subject = 'the subject';
	$message = 'hello';
	$headers = 'From: webmaster@example.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}

function twentytwelve_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 );