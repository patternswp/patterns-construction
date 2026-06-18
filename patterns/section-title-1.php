<?php
/**
 * Title: Section Title 1
 * Slug: patterns-construction/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    
<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-left has-primary-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Start to new journey', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Experience a learning platform that take you next level', 'patterns-construction' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.8","fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:300;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->