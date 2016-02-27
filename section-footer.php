<?php
/**
 * @package WordPress
 * @subpackage ParentTheme
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 **/
#################################################################################################### */

?>
<div id="section-footer" class="outer-wrap">
	<div class="inner-wrap">
		<?php
		wp_nav_menu( array(
			'depth' => 1,
			'fallback_cb' => '',
			'theme_location' => 'footer-navigation',
			'container' => 'div',
			'container_id' => 'footer-navigation'
		) );
		?>

		<div class="entry">
			<?php the_field( 'footer_text', 'option' ); ?>
		</div>

	</div>
</div>
