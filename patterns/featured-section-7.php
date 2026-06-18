<?php
/**
 * Title: Featured Section 7
 * Slug: patterns-construction/featured-section-7
 * Categories: posts, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"default","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Our Blog', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Get from our news &amp; article', 'patterns-construction' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->


<!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:post-featured-image {"style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":{"bottomLeft":"5px","bottomRight":"5px"},"left":{"color":"var:preset|color|quaternary","style":"solid","width":"1px"},"top":{},"right":{"color":"var:preset|color|quaternary","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|quaternary","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-right-color:var(--wp--preset--color--quaternary);border-right-style:solid;border-right-width:1px;border-bottom-color:var(--wp--preset--color--quaternary);border-bottom-style:solid;border-bottom-width:1px;border-left-color:var(--wp--preset--color--quaternary);border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"13px"}},"textColor":"primary"} /-->
    
    <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->
    
    <!-- wp:post-excerpt {"excerptLength":15,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"lineHeight":"1.7"},"spacing":{"margin":{"top":"var:preset|spacing|15"}}},"textColor":"tertiary"} /--></div>
    <!-- /wp:group -->


</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
</div>
<!-- /wp:query --></div>
<!-- /wp:group -->