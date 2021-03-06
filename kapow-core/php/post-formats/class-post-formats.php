<?php
/**
 * Post Formats
 *
 * Functions relating to Post Formats
 *
 * @since	0.1.0
 *
 * @package kapow\kapow_core
 */

namespace kapow\kapow_core;

/**
 * Functions relating to Post Formats
 */
class Post_Formats {

	/**
	 * Go.
	 *
	 * @since		0.1.0
	 */
	public function run() {

		// Settings check.
		$do_run = apply_filters( KAPOW_CORE_PREFIX . '_remove_post_formats', true );
		if ( ! $do_run ) {
			return;
		}

		add_action( 'after_setup_theme', array( $this, 'kapow_core_remove_post_formats' ), 100 );
	}

	/**
	 * Remove Post Formats
	 */
	function kapow_core_remove_post_formats() {
		remove_theme_support( 'post-formats' );
	}
}
