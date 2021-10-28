<?php
/**
 * Theme - Global Functions
 *
 * @package   Ecclesiastical
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2016-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/ecclesiastical
 */

/**
 * Backward compatibility for wp_body_open
 */
if ( ! function_exists('wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}