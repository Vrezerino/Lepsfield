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

///////////////// Online Store functions

class Product {
	public string $name;
	public float $price;

	public function __construct($name, $price) {
		$this->name = $name;
		$this->price = $price;
	}
}

$arr = [];

function getProducts() {
	if (is_page(16)) {
		global $arr;
		$mysqli = new mysqli("localhost", "root", "", "wp");
		if ($mysqli->connect_error) die("DB connection failed:" . $mysqli->connect_error);

		$sql = "SELECT * FROM products";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				array_push($arr, new Product($row["name"], $row["price"]));
			}
		}
		$mysqli->close();
	}
}

add_action('the_content', 'getProducts');
