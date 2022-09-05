<?php

function files() {
	#wp_enqueue_style('main_styles', get_stylesheet_uri());
	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=yourkeygoeshere', NULL, '1.0', true);

  wp_enqueue_script('main-lepsfield-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('our-main-styles-vendor', get_theme_file_uri('index.css'));
  wp_enqueue_style('our-main-styles', get_theme_file_uri('style.css'));

  wp_localize_script('main-lepsfield-js', 'lepsfieldData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));
}

add_action('wp_enqueue_scripts', 'files');

function features() {
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'features');

function remove_admin_login_header() {
	if (!is_user_logged_in()) {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}
}

add_action('get_header', 'remove_admin_login_header');

?>
