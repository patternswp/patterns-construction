<?php
/**
 * Title: Featured Section 6
 * Slug: patterns-construction/featured-section-6
 * Categories: call-to-action, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","dimRatio":90,"overlayColor":"secondary","isUserOverlayColor":true,"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Why choose us ?', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-default-color has-text-color has-link-color has-x-large-font-size"><?php esc_html_e( 'Make The World Better Place With Construction Quality', 'patterns-construction' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Us', 'patterns-construction' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">    

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg","dimRatio":90,"overlayColor":"primary","isUserOverlayColor":true,"isDark":false,"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Why choose us ?', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color has-x-large-font-size"><?php esc_html_e( 'Make The World Better Place With Construction Quality', 'patterns-construction' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Us', 'patterns-construction' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --> 