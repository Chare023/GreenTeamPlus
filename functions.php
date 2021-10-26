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



add_action( 'admin_menu', 'gtp_menu_page' );

function gtp_menu_page() {

	add_menu_page(
		'Details Settings', // page <title>Title</title>
		'Details Settings', // menu link text
		'manage_options', // capability to access the page
		'gtp-slug', // page URL slug
		'gtp_page_content', // callback function /w content
		'dashicons-star-half', // menu icon
		5 // priority
	);

}

function gtp_page_content(){

	echo '<div class="wrap">
	<h1>Details settings</h1>
	<form method="post" action="options.php">';
			
		settings_fields( 'gtp_settings' ); // settings group name
		do_settings_sections( 'gtp-slug' ); // just a page slug
		submit_button();

	echo '</form></div>';

}

add_action( 'admin_init',  'gtp_register_setting' );

function gtp_register_setting(){

	register_setting(
		'gtp_settings', // settings group name
		'phone_number', // option name
		'sanitize_text_field' // sanitization function
	);

	add_settings_section(
		'some_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'gtp-slug' // page slug
	);

	add_settings_field(
		'phone_number',
		'Phone number',
		'gtp_phone_number', // function which prints the field
		'gtp-slug', // page slug
		'some_settings_section_id', // section ID
		array( 
			'label_for' => 'phone_number',
			'class' => 'gtp-class', // for <tr> element
		)
	);

	register_setting(
		'gtp_settings', // settings group name
		'working_hours', // option name
		'sanitize_text_field' // sanitization function
	);

	add_settings_section(
		'some_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'gtp-slug' // page slug
	);

	add_settings_field(
		'working_hours',
		'Working hours',
		'gtp_working_hours', // function which prints the field
		'gtp-slug', // page slug
		'some_settings_section_id', // section ID
		array( 
			'label_for' => 'working_hours',
			'class' => 'gtp-class', // for <tr> element
		)
	);

	register_setting(
		'gtp_settings', // settings group name
		'email', // option name
		'sanitize_text_field' // sanitization function
	);

	add_settings_section(
		'some_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'gtp-slug' // page slug
	);

	add_settings_field(
		'email',
		'Email',
		'gtp_email', // function which prints the field
		'gtp-slug', // page slug
		'some_settings_section_id', // section ID
		array( 
			'label_for' => 'email',
			'class' => 'gtp-class', // for <tr> element
		)
	);

	register_setting(
		'gtp_settings', // settings group name
		'instagram', // option name
		'sanitize_text_field' // sanitization function
	);

	add_settings_section(
		'some_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'gtp-slug' // page slug
	);

	add_settings_field(
		'instagram',
		'Instagram',
		'gtp_instagram', // function which prints the field
		'gtp-slug', // page slug
		'some_settings_section_id', // section ID
		array( 
			'label_for' => 'instagram',
			'class' => 'gtp-class', // for <tr> element
		)
	);

	// facebook label
	register_setting(
		'gtp_settings', // settings group name
		'facebook', // option name
		'sanitize_text_field' // sanitization function
	);

	add_settings_section(
		'some_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'gtp-slug' // page slug
	);

	add_settings_field(
		'facebook',
		'Facebook',
		'gtp_facebook', // function which prints the field
		'gtp-slug', // page slug
		'some_settings_section_id', // section ID
		array( 
			'label_for' => 'facebook',
			'class' => 'gtp-class', // for <tr> element
		)
	);

	// facebook url
	register_setting(
		'gtp_settings', // settings group name
		'facebook_url', // option name
		'sanitize_text_field' // sanitization function
	);

	add_settings_section(
		'some_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'gtp-slug' // page slug
	);

	add_settings_field(
		'facebook_url',
		'Facebook url',
		'gtp_facebook_url', // function which prints the field
		'gtp-slug', // page slug
		'some_settings_section_id', // section ID
		array( 
			'label_for' => 'facebook_url',
			'class' => 'gtp-class', // for <tr> element
		)
	);

	// instagram url
	register_setting(
		'gtp_settings', // settings group name
		'instagram_url', // option name
		'sanitize_text_field' // sanitization function
	);

	add_settings_section(
		'some_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'gtp-slug' // page slug
	);

	add_settings_field(
		'instagram_url',
		'instagram url',
		'gtp_instagram_url', // function which prints the field
		'gtp-slug', // page slug
		'some_settings_section_id', // section ID
		array( 
			'label_for' => 'instagram_url',
			'class' => 'gtp-class', // for <tr> element
		)
	);

	// services settings
	register_setting(
		'gtp_settings', // settings group name
		'service_item', // option name
		'sanitize_text_field' // sanitization function
	);

	add_settings_section(
		'some_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'gtp-slug' // page slug
	);

	add_settings_field(
		'service_item',
		'Service Item',
		'gtp_service_list', // function which prints the field
		'gtp-slug', // page slug
		'some_settings_section_id', // section ID
		array( 
			'label_for' => 'service_item',
			'class' => 'gtp-class', // for <tr> element
		)
	);
}

function gtp_phone_number (){
	
	$phoneNumber = get_option( 'phone_number' );
	printf(
		'<input type="text" id="phone_number" name="phone_number" value="%s" />',
		esc_attr( $phoneNumber )
	);

}

function gtp_working_hours (){
	
	$workingHours = get_option( 'working_hours' );
	printf(
		'<input type="text" id="working_hours" name="working_hours" value="%s" />',
		esc_attr( $workingHours )
	);

}

function gtp_email() {
	
	$email = get_option( 'email' );
	printf(
		'<input type="text" id="email" name="email" value="%s" />',
		esc_attr( $email )
	);

}

function gtp_instagram() {
	
	$instagram = get_option( 'instagram' );
	printf(
		'<input type="text" id="instagram" name="instagram" value="%s" />',
		esc_attr( $instagram )
	);

}

function gtp_facebook() {
	
	$facebook = get_option( 'facebook' );
	printf(
		'<input type="text" id="facebook" name="facebook" value="%s" />',
		esc_attr( $facebook )
	);

}

function gtp_facebook_url() {
	
	$facebookUrl = get_option( 'facebook_url' );
	printf(
		'<input type="text" id="facebook_url" name="facebook_url" value="%s" />',
		esc_attr( $facebookUrl )
	);

}

function gtp_instagram_url() {
	
	$instagramUrl = get_option( 'instagram_url' );
	printf(
		'<input type="text" id="instagram_url" name="instagram_url" value="%s" />',
		esc_attr( $instagramUrl )
	);

}

function gtp_service_list (){
	
	$serviceItem = get_option( 'service_item' );
	printf(
		'<input type="text" id="service_item" name="service_item" value="%s" />',
		esc_attr( $serviceItem )
	);

}

add_filter( 'simple_register_option_pages', 'gtp_option_page' );

function gtp_option_page( $option_pages ) {

	$option_pages[] = array(
		'id'	=> 'gtp_slug',
		'title' => 'Details Settings',
		'menu_name' => 'Details Settings',
		'fields' => array(
			array(
				'id' => 'phone_number',
				'label' => 'Phone number',
				'type' => 'text',

 			),
 		),
	);

	return $option_pages;

}


?>
