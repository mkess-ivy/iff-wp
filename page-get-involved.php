<?php
/**
 * Template Name: Get Involved
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iff_wp
 */

get_header();
?>

    <main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
        ?>
        <div class="section_title_header"><?php the_field('gi_page_title');?></div>
        <div class="masthead_hero" style="background-image:url(<?php echo esc_url(get_field('gi_hero_img')['url']); ?>);"></div>
        <div class="blue_layout">
            <div class="frow wrapper">
                <div class="frow">
                    <div class="col-sm-3-5 copy">
                        <p><?php the_field('gi_section_desc'); ?></p>
                    </div>
                </div>
                <div class="section_title title_get_involved"><?php the_field('gi_section_title'); ?></div>
                <div class="frow wrapper">
                    <div class="col-sm-2-5 donate_wrapper">
                        <div class="donate_title"><?php the_field('gi_online');?></div>
                        <a class="cta donate" href="<?php the_field('gi_donate_link');?>" target="_blank">
                            <div><?php the_field('gi_donate_link_text');?></div>
                        </a>
                    </div>
                    <div class="separator"></div>
                    <div class="col-sm-2-5 donate_wrapper">
                        <div class="donate_title"><?php the_field('gi_donate_title2');?></div>
                        <p><?php the_field('gi_donate_link_text2');?></p>
                    </div>
                </div>
            </div>
        </div>

</main><!-- #main -->

<?php
get_footer();