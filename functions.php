<?php

function gtp_files() {
  wp_enqueue_style('gtp_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'gtp_files');
?>
