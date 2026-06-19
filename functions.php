<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Construction functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Construction
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_CONSTRUCTION_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_CONSTRUCTION_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_CONSTRUCTION_VERSION', '2.0.0' );
define( 'PATTERNS_CONSTRUCTION_THEME_NAME', 'patterns-construction' );
define( 'PATTERNS_CONSTRUCTION_OPTION_NAME', 'patterns-construction' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_CONSTRUCTION_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_construction_run() {
	new Patterns_Construction();
}
patterns_construction_run();
