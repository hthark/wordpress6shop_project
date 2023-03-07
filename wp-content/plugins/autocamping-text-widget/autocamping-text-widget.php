 <?php
/*
* Plugin Name:	AutoCamping Text Widget
* Plugin URI:	http://localhost/wordpress6shop
* Description:	워드프레스 오토캠핑 테마 만들기
* Version:		0.1
* Author:		AutoCamping
* Author URI:	http://localhost/wordpress6shop
* License :		GPLv2
*/

require_once 'autocamping-text-widget-class.php';

function register_autocamping_text_widget() {
		register_widget( 'autocamping_Text_Widget' );
}
add_action('widgets_init', 'register_autocamping_text_widget');
