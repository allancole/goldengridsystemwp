<?php
/**
 * @package WordPress
 * @subpackage The GGS Theme
 */

get_header(); ?>

		<div id="container" class="wrapper">
			<div id="content" role="main">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<nav id="nav-above">
					<h1 class="section-heading"><?php _e( 'Post navigation', 'ggstheme' ); ?></h1>
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'ggstheme' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'ggstheme' ) . '</span>' ); ?></div>
				</nav><!-- #nav-above -->

				<?php get_template_part( 'content', 'single' ); ?>

				<nav id="nav-below">
					<h1 class="section-heading"><?php _e( 'Post navigation', 'ggstheme' ); ?></h1>
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'ggstheme' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'ggstheme' ) . '</span>' ); ?></div>
				</nav><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>