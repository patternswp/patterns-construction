<?php
/**
 * Title: Card 1
 * Slug: patterns-construction/card-1
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
    
<!-- wp:image {"width":"auto","height":"120px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:1;object-fit:cover;width:auto;height:120px" /></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":5,"align":"wide","textColor":"base","fontSize":"medium"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color has-medium-font-size"><?php esc_html_e( 'Construction Management', 'patterns-construction' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.8"}},"textColor":"tertiary","fontSize":"x-small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-x-small-font-size" style="line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
