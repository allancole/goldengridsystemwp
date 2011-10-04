<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>
			<div id="primary" class="widget-area wrapper" role="complementary">
				<?php if ( ! dynamic_sidebar( 'primary-sidebar-1' ) ) : ?>
	
					<aside id="archives" class="widget">
						<h3 class="widget-title"><?php _e( 'Archives', 'ggswp' ); ?></h3>
						<ul>
							<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
						</ul>
					</aside>
	
					<aside id="meta" class="widget">
						<h3 class="widget-title"><?php _e( 'Meta', 'ggswp' ); ?></h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</aside>
	
				<?php endif; // end sidebar widget area ?>
			</div><!-- #primary .widget-area -->
