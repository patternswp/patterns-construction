<?php
/**
 * Title:404
 * Slug: patterns-construction/hidden-404
 * Inserter: no
 *
 * @package    Patterns_Construction
 * @subpackage Patterns_Construction/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg","dimRatio":90,"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(159deg,rgba(7,146,227,0) 6%,rgb(241,244,251) 86%)","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"textColor":"base"} -->
<div class="wp-block-cover alignfull has-base-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(159deg,rgba(7,146,227,0) 6%,rgb(241,244,251) 86%)"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"8rem"}}} -->
	<h1 class="wp-block-heading alignwide has-text-align-left" style="font-size:8rem"><?php echo esc_html__( 'Ooops!', 'patterns-construction' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'This page could not be found.', 'patterns-construction' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'We can\'t find the page you\'re looking for. Check out our Help Center or head back to home', 'patterns-construction' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
	<div style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10)"
		aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"textColor":"default","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}}} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-default-color has-text-color has-link-color wp-element-button" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html__( 'Back To Home', 'patterns-construction' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->

</main>
<!-- /wp:group -->
