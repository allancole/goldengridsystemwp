<?php
/**
 * @package WordPress
 * @subpackage The GGS Theme
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'secondary-sidebar-1' )
		&& ! is_active_sidebar( 'secondary-sidebar-2' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="secondary">

	<?php if ( is_active_sidebar( 'secondary-sidebar-1' ) ) : ?>
	<div id="secondary-sidebar-1" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'secondary-sidebar-1' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'secondary-sidebar-2' ) ) : ?>
	<div id="secondary-sidebar-2" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'secondary-sidebar-2' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

</div><!-- #secondary -->