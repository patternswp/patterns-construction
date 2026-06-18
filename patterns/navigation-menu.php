<?php
/**
 * Title: Navigation Menu
 * Slug: patterns-construction/navigation-menu
 * Description: A pattern for displaying the site menu.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:navigation -->
	<!-- wp:home-link {"label":"<?php echo esc_html_x( 'Home', 'label', 'patterns-construction' ); ?>"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-construction' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'patterns-construction' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-construction' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-construction' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->
