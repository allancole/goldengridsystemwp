<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'quarternary-sidebar-1' )
		&& ! is_active_sidebar( 'quarternary-sidebar-2' )
		&& ! is_active_sidebar( 'quarternary-sidebar-3' )
		&& ! is_active_sidebar( 'quarternary-sidebar-4' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="quarternary">

	<?php if ( is_active_sidebar( 'quarternary-sidebar-1' ) ) : ?>
	<div id="quarternary-sidebar-1" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'quarternary-sidebar-1' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'quarternary-sidebar-2' ) ) : ?>
	<div id="quarternary-sidebar-2" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'quarternary-sidebar-2' ); ?>
	</div><!-- #first .widget-arquarternary-ea -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'quarternary-sidebar-3' ) ) : ?>
	<div id="quarternary-sidebar-3" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'quarternary-sidebar-3' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'quarternary-sidebar-4' ) ) : ?>
	<div id="quarternary-sidebar-4" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'quarternary-sidebar-4' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>

</div><!-- #quarternary -->