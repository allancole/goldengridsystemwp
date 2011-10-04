<?php
/**
 * Template Name: Full-width Page
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage GGS WP
 */

get_header(); ?>

		<div id="container" class="wrapper full-width">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>