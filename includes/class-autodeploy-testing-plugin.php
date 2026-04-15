<?php
/**
 * Core plugin class.
 *
 * @since 0.1
 * @package AutoDeployTesting
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main plugin bootstrapper.
 *
 * @since 0.1
 */
final class AutoDeploy_Testing_Plugin {
	/**
	 * Plugin version.
	 *
	 * @since 0.1
	 * @var string
	 */
	private $version = '0.1';

	/**
	 * Initialize plugin hooks.
	 *
	 * @since 0.1
	 * @return void
	 */
	public function init() {
		add_action( 'init', array( $this, 'register' ) );
	}

	/**
	 * Register runtime behavior.
	 *
	 * @since 0.1
	 * @return void
	 */
	public function register() {
		add_shortcode( 'autodeploy_testing', array( $this, 'render_shortcode' ) );
	}

	/**
	 * Render the `[autodeploy_testing]` shortcode output.
	 *
	 * @since 0.1
	 * @param array<string, mixed> $atts Shortcode attributes.
	 * @return string Shortcode HTML output.
	 */
	public function render_shortcode( $atts ) {
		$atts = shortcode_atts(
			array(
				'version' => $this->version,
			),
			(array) $atts,
			'autodeploy_testing'
		);

		echo "<h2 id='testing_h2.'".$atts['version'].">".$atts['version']."</h2>";
		echo "<p id='testing_id.'".$atts['version'].">".$atts['version']."</p>";

		$text = sprintf(
			/* translators: %s: plugin version */
			esc_html__( 'Hello World %s', 'autodeploy-testing' ),
			(string) $atts['version']
		);

		return '<span class="autodeploy-testing">' . esc_html( $text ) . '</span>';
	}
}
