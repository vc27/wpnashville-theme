<?php
/**
 * @package WordPress
 * @subpackage ParentTheme
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 **/
#################################################################################################### */

$header_images = get_field('header_images','option');
$k = rand( 0, ( count( $header_images ) - 1 ) );
if ( isset( $header_images[$k] ) AND ! empty( $header_images[$k] ) ) {
	$header_image = ACFWP::return_image( $header_images[$k], 'large-ex' );
} else {
	$header_image = get_stylesheet_directory_uri() . '/images/tpl-header-image.jpg';
}

?>
<div id="section-header" class="outer-wrap">
	<div class="inner-wrap">
		<?php
		wp_nav_menu( array(
			'fallback_cb' => '',
			'theme_location' => 'primary-navigation',
			'container' => 'div',
			'container_id' => 'primary-navigation',
			'menu_class' => ''
		) );
		?>
	</div>
</div>

<div id="section-header-images">
	<div class="background" style="background-image:url('<?php echo $header_image; ?>');"></div>
	<div class="gradient"></div>
	<div class="inner-wrap">
		<a class="img-title" href="<?php echo home_url(); ?>" title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-title.png" alt="" /></a>
		<p><?php the_field('_header_description','option'); ?></p>
	</div>
</div>
