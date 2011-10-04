<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>

		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with three columns of widgets.
			 */
			get_sidebar( 'secondary' );
		?>

		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with three columns of widgets.
			 */
			get_sidebar( 'tertiary' );
		?>

		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with three columns of widgets.
			 */
			get_sidebar( 'quarternary' );
		?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator" class="wrapper">
			<p><?php printf( __( 'Powered by: %1$s.', 'ggswp' ), '<a href="http://wordpress.org/" rel="generator">WordPress</a>' ); ?> <span class="sep"> | </span><?php printf( __( 'Original Concept: %1$s by %2$s.', 'ggswp' ), '<a href="http://goldengridsystem.com/" rel="concept">Golden Grid System</a>', '<a href="http://jonikorpi.com/" rel="designer">Joni Korpi</a>' ); ?> <span class="sep"> | </span><?php printf( __( 'Theme: %1$s by %2$s.', 'ggswp' ), '<a href="http://fthrwght.com/ggs" rel="developer">The GGS Starter Theme</a>', '<a href="http://fthrwght.com/" rel="developer">Allan Cole</a>' ); ?></p>
		</div>
		<div id="copyright" class="wrapper">
			<p><?php printf( __( 'This theme, its code and design, are licensed under %1$s. The Golden Grid System is licensed under %2$s', 'ggswp' ), '<a href="http://www.opensource.org/licenses/gpl-3.0.html" rel="license">GPL (v3)</a>', '<a href="http://opensource.org/licenses/mit-license.php" rel="license">MIT</a>.' ); ?></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>