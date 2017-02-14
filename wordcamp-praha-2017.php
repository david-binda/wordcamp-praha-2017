<?php
/*
Plugin Name: WordCamp Praha 2017 Plugin
Plugin URI:  https://https://github.com/david-binda/wordcamp-praha-2017
Description: Example plugin with PHPUnit tests
Version:     0.1
Author:      David Binovec
Author URI:  https://https://github.com/david-binda
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wcpraha2017
Domain Path: /languages
*/

class WordCamp_Praha_2017_Widget extends WP_Widget {
	
	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'wordcamp_praha_2017_widget',
			'description' => 'WordCamp Praha 2017 Widget',
		);
		parent::__construct( 'wordcamp_praha_2017_widget', 'WordCamp Praha 2017', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

add_action( 'widgets_init', function() {
	register_widget( 'WordCamp_Praha_2017_Widget' );
}, 10, 0 );
