<?php
/**
 * Title: Page Header With Post Title
 * Slug: patterns-construction/single-header
 * Block Types: core/template-part/single-header
 * Description: Page header that displays the post, page or post type title.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":40,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:40vh"><span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"base"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:post-title {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"base","fontSize":"xx-large"} /-->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
