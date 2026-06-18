<?php
/**
 * Title: Hero Banner
 * Slug: patterns-construction/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","dimRatio":70,"customOverlayColor":"#060606","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull"
    style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#060606"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">


<!-- wp:pattern {"slug":"patterns-construction/hero-banner-content"} /-->

</div></div>
<!-- /wp:cover -->