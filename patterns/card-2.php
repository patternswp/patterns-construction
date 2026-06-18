<?php
/**
 * Title: Card 2
 * Slug: patterns-construction/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg","dimRatio":90,"minHeight":360,"customGradient":"linear-gradient(179deg,rgba(7,146,227,0) 38%,rgb(12,45,98) 76%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(179deg,rgba(7,146,227,0) 38%,rgb(12,45,98) 76%)"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
    
<!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"letterSpacing":"1px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"backgroundColor":"primary","textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-primary-background-color has-text-color has-background has-link-color has-x-small-font-size" style="padding-top:5px;padding-right:var(--wp--preset--spacing--10);padding-bottom:5px;padding-left:var(--wp--preset--spacing--10);letter-spacing:1px"><?php esc_html_e( 'Construction', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":5,"fontSize":"medium"} -->
<h5 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'World Trade Center', 'patterns-construction' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->