<?php



// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// Habilitar Menus
add_theme_support('menus');

// Registrar menu:
function register_my_menu() {
	register_nav_menu('menu-principal',__( 'Menu Principal' ));
  }
  add_action( 'init', 'register_my_menu' );

  







// Início Função para CUSTOM POST TYPE de filmes
function custom_post_type_filmes() {
	register_post_type('filmes', array(
		'label' => 'Filmes',
		'description' => 'Filmes',
		'public' => true,
		'menu_icon' => 'dashicons-video-alt',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'filmes', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Filmes',
			'singular_name' => 'Filme',
			'menu_name' => 'Filmes Ualzem',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Filme',
			'edit' => 'Editar',
			'edit_item' => 'Editar Filme',
			'new_item' => 'Novo Filme',
			'view' => 'Ver Filme',
			'view_item' => 'Ver Filme',
			'search_items' => 'Procurar Filme',
			'not_found' => 'Nenhum Filme Encontrado',
			'not_found_in_trash' => 'Nenhum Filme Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_filmes');
// Fim Função para CUSTOM POST TYPE 


?>