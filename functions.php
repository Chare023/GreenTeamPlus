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

add_filter( 'use_default_gallery_style', '__return_false' );

function disable_wp_responsive_images() {
	return 1;
}
add_filter('max_srcset_image_width', 'disable_wp_responsive_images');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// Custom fields



// add_action( 'admin_menu', 'gtp_menu_page' );

// function gtp_menu_page() {

// 	add_menu_page(
// 		'My Page Title', // page <title>Title</title>
// 		'My Page', // menu link text
// 		'manage_options', // capability to access the page
// 		'gtp-slug', // page URL slug
// 		'gtp_page_content', // callback function /w content
// 		'dashicons-star-half', // menu icon
// 		5 // priority
// 	);

// }

// add_action( 'admin_menu', 'gtp_options_page' );

// function gtp_options_page() {

// 	add_options_page(
// 		'My Page Title', // page <title>Title</title>
// 		'My Page', // menu link text
// 		'manage_options', // capability to access the page
// 		'gtp-slug', // page URL slug
// 		'gtp_page_content', // callback function with content
// 		2 // priority
// 	);

// }


// function gtp_page_content(){

// 	echo '<div class="wrap">
// 	<h1>My Page Settings</h1>
// 	<form method="post" action="options.php">';
			
// 		settings_fields( 'gtp_settings' ); // settings group name
// 		do_settings_sections( 'gtp-slug' ); // just a page slug
// 		submit_button();

// 	echo '</form></div>';

// }

// add_action( 'admin_init',  'gtp_register_setting' );

// function gtp_register_setting(){

// 	register_setting(
// 		'gtp_settings', // settings group name
// 		'phone_number', // option name
// 		'sanitize_text_field' // sanitization function
// 	);

// 	add_settings_section(
// 		'some_settings_section_id', // section ID
// 		'', // title (if needed)
// 		'', // callback function (if needed)
// 		'gtp-slug' // page slug
// 	);

// 	add_settings_field(
// 		'phone_number',
// 		'Phone number',
// 		'gtp_text_field_html', // function which prints the field
// 		'gtp-slug', // page slug
// 		'some_settings_section_id', // section ID
// 		array( 
// 			'label_for' => 'phone_number',
// 			'class' => 'gtp-class', // for <tr> element
// 		)
// 	);

// }

// function gtp_text_field_html(){

// 	$phoneNum = get_option( 'phone_number' );

// 	printf(
// 		'<input type="text" id="phone_number" name="phone_number" value="%s" />',
// 		esc_attr( $phoneNum )
// 	);

// }

// add_filter( 'simple_register_option_pages', 'gtp_option_page' );

// function gtp_option_page( $option_pages ) {

// 	$option_pages[] = array(
// 		'id'	=> 'gtp_slug',
// 		'title' => 'My Page Settings',
// 		'menu_name' => 'My page',
// 		'fields' => array(
// 			array(
// 				'id' => 'phone_number',
// 				'label' => 'Phone number',
// 				'type' => 'text',
// 			),
//  		),
// 	);

// 	return $option_pages;

// }


?>
