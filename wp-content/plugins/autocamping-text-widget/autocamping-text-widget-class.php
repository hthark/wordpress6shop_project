<?php

if ( !class_exists('Autocamping_Text_Widget') ) {

	class autocamping_Text_Widget extends WP_Widget {

		function __construct() {

				$widget_ops = array(
					'classname' => 'autocamping_css_classname',		// 위젯 CSS 클래스 이름
					'description' => __('autocamping Text Widget.') // 위젯 설명
				);

				$control_ops = array(
					'width' => 300,
					'height' => 150,
					'id_base' => 'autocamping_text_widget'
				);

				$this->WP_Widget(
					'autocamping_text_widget',		//$id_base 위젯의 베이스 ID
					__('autocamping Text'),			// 위젯 제목
					$widget_ops,
					$control_ops
				);
		}

		function widget($args, $instance) { // 프론트엔드 페이지에서 위젯 출력부

	        if (!isset($args['widget_id'])) { $args['widget_id'] = null;    }
			extract($args);

			$title			= apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance);
			$text			= apply_filters('widget_enhanced_text', $instance['text'], $instance);


			echo $before_widget;//---------<<<

			if (!empty( $title )) { // 타이틀 보여주기
				echo $before_title . $title . $after_title;
			};

			// 텍스트 입력 필드 내용을 보여주기
			ob_start();
			eval('?>' . $text);
			$text = ob_get_contents();
			ob_end_clean();
			echo wpautop($text);

			echo $after_widget;//----------->>>

		}


		function update( $new_instance, $old_instance ) { // 어드민 페이지 위젯 저장시 데이터 업데이트


			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['text'] = wp_filter_post_kses($new_instance['text']);

			return $instance;
		}

		function form( $instance ) { // 어드민 페이지 위젯 출력 포맷

	        $instance = wp_parse_args( (array) $instance, array(
            'title' => '',
            'text' => ''
			));

			$title = $instance['title'];
			$text = format_to_edit($instance['text']);
			?>

			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'autocamping'); ?>:</label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Content', 'autocamping'); ?>:</label>
				<textarea class="widefat monospace" rows="16" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>
			</p>
			<?php
		}

	}//End of class
}//End of if
