<?php
/**
 * Title: Featured Section 5
 * Slug: patterns-construction/featured-section-5
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Top Popular Courses', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"base","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'We collaborate with 200+ Leading Corporate Partners', 'patterns-construction' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-1.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-2.png"  style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-3.png"  style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-4.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-5.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
