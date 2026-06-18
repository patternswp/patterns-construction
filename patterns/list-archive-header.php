<?php
/**
 * Title: Archive Page Header
 * Slug: patterns-construction/list-archive-header
 * Categories: header
 * Block Types: core/template-part/list-archive-header
 * Description: Layout template for displaying the header of an archive page.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":40,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:40vh"><span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"base"}} -->
<div class="wp-block-group alignwide">
    	<!-- wp:heading {"metadata":{"bindings":{"content":{"source":"patterns-construction/archive-title","args":{"key":"archive-title"}}}}, "textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"base","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-text-align-left has-base-color has-text-color has-xx-large-font-size" style="text-transform:capitalize"></h1>
			<!-- /wp:heading -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->