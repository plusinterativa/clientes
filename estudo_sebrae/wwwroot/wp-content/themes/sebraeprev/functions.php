<?php
// Configuro novo tamanho de imagem ( classes );
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'noticia', 500, 340, true );
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

add_action( 'admin_bar_menu', 'toolbar_link_to_mypage', 999 );

// Insert page in admin top bar
function toolbar_link_to_mypage( $wp_admin_bar ) {
	$args = array(
		'id'    => 'exit',
		'title' => 'Sair',
		'href'  => 'http://localhost/estudo_sebrae/wwwroot/wwwroot/wp-login.php?action=logout&_wpnonce=b7932b04a0',
		'meta'  => array( 'style'=>'float:right !important;' )
	);
	$wp_admin_bar->add_node( $args );
}




// Adiciona tipos de Posts
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		//faça sua adesão
		register_post_type( 'faca_sua_adesao',
			array(
				'labels' => array(
					'name' => 'Faça sua Adesão',
					'singular_name' => 'faca_sua_adesao'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		//home
		register_post_type( 'home',
			array(
				'labels' => array(
					'name' => 'Home',
					'singular_name' => 'home'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		//notícias
		register_post_type( 'noticias',
			array(
				'labels' => array(
					'name' => __( 'Notícia' ),
					'singular_name' => __( 'noticias' )
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		//notas quinzenais
		register_post_type( 'notas',
			array(
				'labels' => array(
					'name' => __( 'Notas' ),
					'singular_name' => __( 'notas' )
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		//formulários
		register_post_type( 'formularios',
			array(
				'labels' => array(
					'name' => __( 'Formulários' ),
					'singular_name' => __( 'formularios' )
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		//fotos
		register_post_type( 'fotos',
			array(
				'labels' => array(
					'name' => __( 'Fotos' ),
					'singular_name' => __( 'fotos' )
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'videos',
			array(
				'labels' => array(
					'name' => __( 'Vídeos' ),
					'singular_name' => __( 'videos' )
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'relatoriosgerenciais',
			array(
				'labels' => array(
					'name' => 'Relatórios Gerenciais',
					'singular_name' => 'relatoriosgerenciais'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'informesebraeprev',
			array(
				'labels' => array(
					'name' => 'Informe',
					'singular_name' => 'informesebraeprev'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'sebraeprevnoticias',
			array(
				'labels' => array(
					'name' => 'SEBRAEPREV notícias',
					'singular_name' => 'sebraeprevnoticias'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'relatoriosanuais',
			array(
				'labels' => array(
					'name' => 'Relatórios Anuais',
					'singular_name' => 'relatoriosanuais'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'fasciculos',
			array(
				'labels' => array(
					'name' => 'Fascículos',
					'singular_name' => 'fasciculos'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'sobreoplano',
			array(
				'labels' => array(
					'name' => 'Sobre o plano',
					'singular_name' => 'sobreoplano'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'tributacaotype',
			array(
				'labels' => array(
					'name' => 'Tributação',
					'singular_name' => 'tributacaotype'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'queroserparticipante',
			array(
				'labels' => array(
					'name' => 'Quero ser Participante',
					'singular_name' => 'queroserparticipante'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		register_post_type( 'nossahistoria',
			array(
				'labels' => array(
					'name' => 'Nossa História',
					'singular_name' => 'nossahistoria'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		/**


		**/
		register_post_type( 'equipe',
			array(
				'labels' => array(
					'name' => 'Equipe',
					'singular_name' => 'equipe'
				),
			'public' => true,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag')
			)
		);
		/**


		**/
	}


// Adiona thumbs nos tipos de Posts
	add_action('init', 'thumbs_chamadas');
	function thumbs_chamadas() {
		add_post_type_support( 'faca_sua_adesao', 'thumbnail' );
		add_post_type_support( 'faca_sua_adesao', 'custom-fields'  );
		add_post_type_support( 'home', 'thumbnail' );
		add_post_type_support( 'home', 'custom-fields'  );
		add_post_type_support( 'noticias', 'thumbnail' );
		add_post_type_support( 'noticias', 'custom-fields'  );
		add_post_type_support( 'notas', 'thumbnail' );
		add_post_type_support( 'notas', 'custom-fields'  );
		add_post_type_support( 'formularios', 'thumbnail' );
		add_post_type_support( 'formularios', 'custom-fields'  );
		add_post_type_support( 'fotos', 'thumbnail' );
		add_post_type_support( 'fotos', 'custom-fields'  );
		add_post_type_support( 'videos', 'thumbnail'  );
		add_post_type_support( 'videos', 'custom-fields'  );
		add_post_type_support( 'relatoriosgerenciais', 'thumbnail'  );
		add_post_type_support( 'relatoriosgerenciais', 'custom-fields'  );
		add_post_type_support( 'informesebraeprev', 'thumbnail'  );
		add_post_type_support( 'informesebraeprev', 'custom-fields'  );
		add_post_type_support( 'sebraeprevnoticias', 'thumbnail'  );
		add_post_type_support( 'sebraeprevnoticias', 'custom-fields'  );
		add_post_type_support( 'relatoriosanuais', 'thumbnail'  );
		add_post_type_support( 'relatoriosanuais', 'custom-fields'  );
		add_post_type_support( 'fasciculos', 'thumbnail'  );
		add_post_type_support( 'fasciculos', 'custom-fields'  );
		add_post_type_support( 'sobreoplano', 'thumbnail'  );
		add_post_type_support( 'sobreoplano', 'custom-fields'  );
		add_post_type_support( 'queroserparticipante', 'thumbnail'  );
		add_post_type_support( 'queroserparticipante', 'custom-fields'  );
		add_post_type_support( 'nossahistoria', 'thumbnail'  );
		add_post_type_support( 'nossahistoria', 'custom-fields'  );

		add_post_type_support( 'equipe', 'thumbnail'  );
		add_post_type_support( 'equipe', 'custom-fields'  );
	}
	//
	add_action( 'restrict_manage_posts', 'my_restrict_manage_posts' );
function my_restrict_manage_posts() {
	global $typenow;
	$taxonomy = $typenow.'_type';
	if( $typenow != "page" && $typenow != "post" ){
		$filters = array($taxonomy);
		foreach ($filters as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
			echo "<option value=''>Show All $tax_name</option>";
			foreach ($terms as $term) { echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; }
			echo "</select>";
		}
	}
}
function get_the_category_by_posttype($post_type){?>
	<div class="accordian">
		<?php
		$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
		foreach( $taxonomies as $taxonomy ) :
		    $terms = get_terms( $taxonomy);
		    foreach( $terms as $term ) :
				$cat = $term->name;
				$cat = explode('_',$cat);				
				if( $cat[0] == $post_type and $cat[1] != NULL):
		?>

					<h5 class="toggle">
						<a href="#">
							<span class="arrow"></span>
							<?php echo $cat[1];?>
						</a>
					</h5>
			        <div class="toggle-content" >
				        <?php
	        			$args = array('post_type' => $post_type,'posts_per_page' => -1, 'tax_query' =>  array( array('taxonomy' => $taxonomy,'field' => 'slug','terms' => array($term->slug),)));
				        $posts = new WP_Query($args);
				        if( $posts->have_posts() ):
				        	while( $posts->have_posts() ) : $posts->the_post();
				        ?>
					        	<div class="one_half">
							        <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail('medium');?></a>
							        <p>
							        	<a href="<?php the_permalink();?>"><?php echo get_the_title();?></a>
							        </p>
					            </div>
				        <?php
			       			endwhile;
			       		endif;
			       		?>
				    	<div style="clear:both"></div>
				    </div>
		<?php
		    	endif;
		    endforeach;
		endforeach;
		?>
	</div>
<?php
}