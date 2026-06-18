<?php
/**
 * Title: Section Title 2
 * Slug: patterns-construction/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Our Services', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'We Help Build On Past &amp; Prepare For Your Future', 'patterns-construction' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->