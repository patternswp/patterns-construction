<?php
/**
 * Title: Section Title 3
 * Slug: patterns-construction/section-title-3
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":"","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-left has-primary-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Construction Projects!', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Construction and manage places infrastructures!', 'patterns-construction' ); ?></h3>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->
