<?php
/**
 * Title: Primary Header
 * Slug: patterns-construction/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"className":"patterns-construction-header ","layout":{"type":"constrained"}} -->
<div class="wp-block-group patterns-construction-header"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:navigation {"textColor":"default","overlayMenu":"never","style":{"spacing":{"blockGap":"15px"},"typography":{"letterSpacing":"0px","fontSize":"14px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'patterns-construction' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Policy', 'patterns-construction' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'patterns-construction' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"13px"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"default"} -->
<p class="has-default-color has-text-color has-link-color" style="margin-bottom:0px;font-size:13px;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'follow Us :', 'patterns-construction' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->



<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"
	style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:pattern {"slug":"patterns-construction/site-identity"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">

	<!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
	<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:50px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"tertiary"} -->
	<p class="has-tertiary-color has-text-color" style="font-size:13px;font-style:normal;font-weight:500"><?php esc_html_e( 'Call Us Any Time:', 'patterns-construction' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
	<p class="has-base-color has-text-color has-small-font-size"><?php esc_html_e( '(808) 555-0111', 'patterns-construction' ); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">

	<!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
	<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-3.png" style="width:50px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"tertiary"} -->
	<p class="has-tertiary-color has-text-color" style="font-size:13px;font-style:normal;font-weight:500"><?php esc_html_e( 'Email Us At:', 'patterns-construction' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
	<p class="has-base-color has-text-color has-small-font-size"><?php esc_html_e( 'info@example.com', 'patterns-construction' ); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">

	<!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|base"}}} -->
	<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="width:50px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"tertiary"} -->
	<p class="has-tertiary-color has-text-color" style="font-size:13px;font-style:normal;font-weight:500"><?php esc_html_e( 'Location', 'patterns-construction' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
	<p class="has-base-color has-text-color has-small-font-size"><?php esc_html_e( '6391 Elgin St. Celina, 10299', 'patterns-construction' ); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
	
<!-- wp:pattern {"slug":"patterns-construction/navigation-menu"} /-->
<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search here...","width":300,"widthUnit":"px","buttonText":"Search","buttonPosition":"no-button","buttonUseIcon":true} /-->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
