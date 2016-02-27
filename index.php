<?php
/**
 * @package WordPress
 * @subpackage ParentTheme
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 **/
#################################################################################################### */

get_template_part( 'header' );
?>
<div id="section-main" class="outer-wrap">
	<div class="inner-wrap">
		<?php do_action('section-main-top'); ?>
		<div class="row-fluid">
			<div class="span8">
				<?php do_action( 'before-loop' ); ?>
				<?php if ( have_posts() ) { ?>
				<div id="section-content-archive" class="layout-archive">
					<?php while ( have_posts() ) { the_post();
						$featured_image = false;
						$post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
						if ( isset( $post_thumbnail[0] ) AND ! empty( $post_thumbnail[0] ) ) {
							$featured_image = $post_thumbnail[0];
						}
					?>
					<div <?php post_class(); ?>>
						<?php if ( $featured_image ) { ?><div class="featured-image" style="background-image:url('<?php echo $featured_image; ?>');"></div><?php } ?>
						<div class="post-wrap">
							<?php the__title( $post, array(
								'element' => 'h3'
								,'class' => 'h3'
								,'permalink' => true
							) ); ?>
							<div class="meta-data">
								<?php the__date( $post ); ?>
								<?php the__comments( $post ); ?>
								<?php the__category( $post ); ?>
							</div>
							<?php the__excerpt( $post, array(
								'count' => 55
								,'read_more' => 'Read More'
								,'strip_tags' => '<p>'
							) ); ?>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
				<?php do_action( 'after-loop' ); ?>
			</div>
			<div class="span4">
				<?php get__widget_area( 'Primary Sidebar' ); ?>
			</div>
		</div>
		<?php do_action('section-main-bottom'); ?>
	</div>
</div>
<?php
get_template_part( 'footer' );
