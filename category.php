<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package iff_wp
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div class="singleblog_hero" style="background-image:url(<?php echo esc_url(the_field('iffblog_hero_img_single', 'option')['url']); ?>);"><span class="iff_cat">Category: <?php the_category(); ?></span></div>
		<div class="wrapper">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'category' );

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>

	</main><!-- #main -->

<?php

get_footer();
