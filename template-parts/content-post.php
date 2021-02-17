<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iff_wp
 */

?>
<div class="iff_post_single">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="iff-back"><a href="/news">Back to All Articles</a></div>
			<?php the_title( '<h1 class="singlepost-title-single">', '</h1>' ); ?>
			<div class="iff_post_meta">
				<div class="frow justify-start">
					<div class="single_copy"><?php the_time('F jS, Y' ); ?></div> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
					<div class="single_copy"><?php the_category(); ?></div>
				</div>
			</div>
		</header><!-- .entry-header -->

		<?php iff_post_thumbnail(); ?>

		<div class="entry-content iff-entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'iff' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'iff' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>