<?php
/**
 * Template Name: What We Do
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
    <div class="section_title_header"><?php the_field('wwd_page_title');?></div>
    <div class="masthead_hero" style="background-image:url(<?php echo esc_url(get_field('wwd_hero_img')['url']); ?>);"></div>
    <div class="frow wrapper">
        <div class="separator_noline">&nbsp;</div>
     

        <div class="icon"><img src="<?php echo get_field('wwd_icon')['url'] ?>" /></div>

        <div class="frow">

            <div class="col-sm-3-5 copy">
                <p><span class="blue"><?php the_field('wwd_section1_span'); ?></span><?php the_field('wwd_section1');?></p>

                <p><span class="blue"><?php the_field('wwd_section2_span'); ?></span><?php the_field('wwd_section2');?></p>

                <p><?php the_field('wwd_section3');?></p>
            </div>
        </div>

        <div class="separator_noline">&nbsp;</div>

        <div class="icon"><img src="<?php echo get_field('wwd_icon')['url'] ?>" /></div>

        <div class="separator_noline">&nbsp;</div>	

        <div class="frow centered">
            <div class="col-sm-1-2">
                <div class="group_header"><?php the_field('section2_bigtext');?></div>
            </div>
            <div class="col-sm-1-2 group_copy_wrapper">
                <div class="group">
                    <span class="group_number">1</span>
                    <?php the_field('question1');?>
                </div>
                <div class="group">
                    <span class="group_number">2</span>
                    <?php the_field('question2');?>
                </div>
                <div class="group">
                    <span class="group_number">3</span>
                    <?php the_field('question3');?>
                </div>
            </div>
        </div>
    </div>


</main><!-- #main -->

<?php
get_footer();