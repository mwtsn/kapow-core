<?php
/**
 * Trait convert_hashtags_to_twitter_urls
 *
 * @since	0.1.0
 *
 * @package kapow\kapow_core
 */

namespace kapow\kapow_core;

/**
 * Convert all mentioned into Twitter URLs
 */
trait Trait_Mentions_To_Twitter_URLs {

	/**
	 * Convert metions to Twitter URLs
	 *
	 * @param string $content    The content to be replaced.
	 * @param bool   $new_window Should the link open in a new window.
	 * @return $content          The content with the replacements made
	 */
	public static function convert_mentions_to_twitter_urls( $content, $new_window = true ) {

		$pattern 		= '/@([A-Za-z0-9\/\.]*)/';
		$replacement 	= '<a target="_blank" href="http://www.twitter.com/$1">@$1</a>';

		if ( ! $new_window ) {
			$replacement = '<a href="http://www.twitter.com/$1">@$1</a>';
		}

		return preg_replace( $pattern, $replacement, $content );
	}
}
