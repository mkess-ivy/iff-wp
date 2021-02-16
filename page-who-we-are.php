<?php
/**
 * Template Name: Who We Are
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
    <div class="section_title_header"><?php the_field('wwa_page_title');?></div>
    <div class="masthead_hero" style="background-image:url(<?php echo esc_url(get_field('wwa_hero_img')['url']); ?>);"></div>

    <div class="frow wrapper">

        <div class="frow family_wrapper">
            <div class="col-sm-1-2 family_col">
                <div class="icon">
                    <img src="<?php echo get_field('wwa_icon')['url'] ?>" />
                </div>
                
                <div class="section_header">
                    <?php the_field('section1_title');?><span><?php the_field('section1_span_title'); ?></span>
                </div>
                
                <p><?php the_field('section1_description'); ?></p>
            </div>
            <div class="col-sm-1-2 family_col">
                <div class="icon">
                    <img src="<?php echo get_field('wwa_icon')['url'] ?>" />
                </div>
                
                <div class="section_header">
                <?php the_field('section2_title');?><span><?php the_field('section2_span_title');?></span>
                </div>
                
                <p><?php the_field('section2_description'); ?></p>
            </div>
        </div>

    </div>

</main><!-- #main -->

<?php
get_footer();