<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */

get_header(); ?>

		<div id="container" class="wrapper">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>