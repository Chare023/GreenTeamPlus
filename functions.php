<?php

function gtp_files() {
  wp_enqueue_style('gtp_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'gtp_files');


function theme_scripts() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function load_scripts() {
  wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/index.js');
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function wpb_custom_new_menu() {
  register_nav_menu('header-navigation',__( 'Header Navigation' ));
  register_nav_menu('header-navigation-right',__( 'Header Navigation Right' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
	$menu_name = 'header-navigation'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<nav class="l-nav">' ."\n";
		$menu_list .= "\t\t\t\t". '<ul class="l-nav__list">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li class="l-nav__list-item"><a class="c-link c-link--nav u-mr-25" href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

function my_theme_setup(){
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

?>
