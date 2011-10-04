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
	if (   ! is_active_sidebar( 'tertiary-sidebar-1'  )
		&& ! is_active_sidebar( 'tertiary-sidebar-2' )
		&& ! is_active_sidebar( 'tertiary-sidebar-3'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="tertiary">

	<?php if ( is_active_sidebar( 'tertiary-sidebar-1' ) ) : ?>
	<div id="tertiary-sidebar-1" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'tertiary-sidebar-1' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'tertiary-sidebar-2' ) ) : ?>
	<div id="tertiary-sidebar-2" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'tertiary-sidebar-2' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'tertiary-sidebar-3' ) ) : ?>
	<div id="tertiary-sidebar-3" class="widget-area wrapper" role="complementary">
		<?php dynamic_sidebar( 'tertiary-sidebar-3' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>

</div><!-- #tertiary -->