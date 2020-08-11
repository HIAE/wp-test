<?php
/**
 * @author              Angelo Rocha
 * @author              Angelo Rocha <contato@angelorocha.com.br>
 * @link                https://angelorocha.com.br
 * @copyleft            2020
 * @license             GNU GPL 3 (https://www.gnu.org/licenses/gpl-3.0.html)
 * @package             WordPress
 * @subpackage          angelorocha
 * @since 1.0.0
 */

final class WPSSloadjs {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'wpss_enqueue_scripts' ) );
	}

	/**
	 * Load theme scripts
	 */
	public function wpss_enqueue_scripts() {
		self::wpss_load_scripts( 'popper_js', 'popper.min' );
		self::wpss_load_scripts( 'bootstrap_js', 'bootstrap.min' );
		self::wpss_load_scripts( 'js_js', 'js' );
	}

	/**
	 * @param $handle = File handler
	 * @param string $file = File name
	 * @param array $dep = Script deps
	 * @param bool $footer = In footer?
	 */
	public function wpss_load_scripts( $handle, $file, $dep = array( 'jquery' ), $footer = true ) {
		wp_enqueue_script( $handle, _WPSS_JS_DIR . $file . '.js', $dep, _WPSS_FILE_VERSION, $footer );
	}

}

new WPSSloadjs();