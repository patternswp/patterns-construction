<?php
/**
 * Title: Secondary Sidebar
 * Slug: patterns-construction/secondary-sidebar
 * Categories: posts
 * Block Types: core/template-part/secondary-sidebar
 * Description: Display a collection of blocks for secondary sidebar template part.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:pattern {"slug":"patterns-construction/calendar"} /-->
    <!-- wp:pattern {"slug":"patterns-construction/archives"} /-->
</div>
<!-- /wp:group -->