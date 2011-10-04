<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'ggswp' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == $post->post_type ) : ?>
		<div class="entry-meta">
			<?php
				printf( __( '<span class="sep">Posted on </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span>', 'ggswp' ),
					get_permalink(),
					get_the_date( 'c' ),
					get_the_date(),
					get_author_posts_url( get_the_author_meta( 'ID' ) ),
					sprintf( esc_attr__( 'View all posts by %s', 'ggswp' ), get_the_author() ),
					get_the_author()
				);
			?>
			<?php edit_post_link( __( 'Edit', 'ggswp' ), '<span class="sep">|</span> <span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ggswp' ) ); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ggswp' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'ggswp' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'ggswp' ); ?></span><?php the_category( ', ' ); ?></span>
		<span class="sep"> | </span>
		<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'ggswp' ) . '</span>', ', ', '<span class="sep"> | </span>' ); ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'ggswp' ), __( '1 Comment', 'ggswp' ), __( '% Comments', 'ggswp' ) ); ?></span>
		<?php edit_post_link( __( 'Edit', 'ggswp' ), '<span class="sep">|</span> <span class="edit-link">', '</span>' ); ?>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
