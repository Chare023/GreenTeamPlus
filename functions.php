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
?>
