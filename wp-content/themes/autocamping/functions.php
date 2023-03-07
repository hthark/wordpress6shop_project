<?php
//require get_template_directory() . '/inc/menu_class.php';

function autocamping_load_style() {
		wp_enqueue_style('style-autocamping', get_stylesheet_uri());
		wp_enqueue_script('jquery214', get_template_directory_uri() . 
		'/js/jquery-2.1.4.js');
		wp_enqueue_script('autocamping', get_template_directory_uri() . 
		'js/menu.js');
}
add_action('wp_enqueue_scripts', 'autocamping_load_style');

function autocamping_support_thumbnail() {
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 160, 100);
	add_image_size('big-thumbnail', 500, 300);
}
add_action('after_setup_theme', 'autocamping_support_thumbnail');

function autocamping_excerpt_length() {
	return 20;
}
add_filter('excerpt_length', 'autocamping_excerpt_length');
/*
function autocamping_add_menus(){
	add_theme_support('menus');
	register_nav_menus(array(
		'first_nav' => __('First-menu', 'autocamping'),
		'second_nav' => __('Second-menu', 'autocamping'),
		'third_nav' => __('Third-menu', 'autocamping'),
		'forth_nav' => __('Forth-menu', 'autocamping')
	));
}
add_action('after_setup_theme', 'autocamping_add_menus');*/
/*
* Register Webcreative widget areas.
*/
function autocamping_widgets_init(){
	/*register_sidebar(array(
			'name' => __('Bottom_Sidebar', 'autocamping'), 
			'id' => 'bottom-sidebar', 
			'description' => __('Bottom Sidebar', 'autocamping')
	));*/

	register_sidebar(array(
			'name' => __('Bottom_Sidebar A', 'autocamping'), 
			'id' => 'bottom-sidebar-a', 
			'description' => __('Bottom Sidebar A', 'autocamping')
	));

	register_sidebar(array(
			'name' => __('Bottom_Sidebar B', 'autocamping'), 
			'id' => 'bottom-sidebar-b', 
			'description' => __('Bottom Sidebar B', 'autocamping')
	));

	register_sidebar(array(
			'name' => __('Bottom_Sidebar C', 'autocamping'), 
			'id' => 'bottom-sidebar-c', 
			'description' => __('Bottom Sidebar C', 'autocamping')
	));
}
add_action('widgets_init', 'autocamping_widgets_init');
?>