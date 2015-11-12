<?php
// Configuro novo tamanho de imagem ( classes );
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'modelo1', 78, 78, true ); 
		add_image_size( 'modelo2', 48, 48, true ); 
		add_image_size( 'modelo3', 213, 200, true );
		add_image_size( 'modelo4', 200, 200, true );
		add_image_size( 'modelo5', 200, 200, true );
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

// Excerpt custom
	function new_excerpt_more($more) {
      	global $post;
		return '... </br><a href="'. get_permalink($post->ID) . '">Conheça mais</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

// Remove post thumbnail class
	function the_post_thumbnail_remove_class($output) {
		$output = preg_replace('/class=".*?"/', '', $output);
		return $output;
	}
	add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');

// Enable Post Thumbnail
	add_theme_support( 'post-thumbnails' ); 

// Adiciona um tipo de Post específico para as Chamadas no Site
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		register_post_type( 'Chamadas',
			array(
				'labels' => array(
					'name' => __( 'Chamadas' ),
					'singular_name' => __( 'Chamadas' )
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
		add_post_type_support( 'chamadas', 'thumbnail' );
		add_post_type_support( 'chamadas', 'custom-fields'  );
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

/*
	add_filter( ‘parent_post_rel_link’, ‘remove_code’ );
	add_filter( ‘start_post_rel_link’, ‘remove_code’ );
	add_filter( ‘previous_post_rel_link’, ‘remove_code’ );
	add_filter( ‘next_post_rel_link’, ‘remove_code’ );
	add_filter(‘post_comments_feed_link’,’remove_code’); 
	function remove_code( $data ) {
		return false;
	}
*/

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

