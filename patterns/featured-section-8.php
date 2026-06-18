<?php
/**
 * Title: Featured Section 8
 * Slug: patterns-construction/featured-section-8
 * Categories: featured, call-to-action, contact
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">
	
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	
<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-left has-primary-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'And we will get back to you.', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"base","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Get in Touch with Our Company', 'patterns-construction' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.8","fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.8"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->


<!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-construction' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%">
	

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"top"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.png"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"base","fontSize":"small"} -->
<h5 class="wp-block-heading has-text-align-left has-base-color has-text-color has-small-font-size"><?php esc_html_e( 'John Doe', 'patterns-construction' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"base"} -->
<p class="has-text-align-left has-base-color has-text-color"><?php esc_html_e( 'Director of Company', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"15px"},"margin":{"bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|quaternary","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--quaternary);border-bottom-style:solid;border-bottom-width:1px;margin-bottom:15px;padding-bottom:15px"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Email :', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default"} -->
<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-construction' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default"} -->
<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-construction' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"15px"},"margin":{"bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|quaternary","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--quaternary);border-bottom-style:solid;border-bottom-width:1px;margin-bottom:15px;padding-bottom:15px"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Telephone :', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color has-link-color"><?php esc_html_e( 'Tel: (+380) 50 318 47 07', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color has-link-color"><?php esc_html_e( 'Fax: (+182) 50 318 47 07', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"15px"},"margin":{"bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|quaternary","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--quaternary);border-bottom-style:solid;border-bottom-width:1px;margin-bottom:15px;padding-bottom:15px"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|default"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-4.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"x-small"} -->
<p class="has-default-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Address:', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}}},"textColor":"quaternary"} -->
<p class="has-quaternary-color has-text-color has-link-color"><?php esc_html_e( '6391 Elgin St. Celina, 10299', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
