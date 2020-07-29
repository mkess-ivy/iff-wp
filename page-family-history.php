<?php
/**
 * Template Name: Family History
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

<div class="blue_layout">
    <div class="frow blue_wrapper">
        <div class="page_title">{{ page.title }}</div>

        <div class="frow family_wrapper">
            <div class="col-sm-1-2 family_col">
                <p>{{ page.family_paragraph_1 }}</p>

                <p>{{ page.family_paragraph_2 }}</p>
            </div>
            <div class="col-sm-1-2 family_col">
                <p>{{ page.family_paragraph_3 }}</p>

                <p class="family_image">
                    <img src="{{ page.caption_img }}" />
                    <div class="caption">{{ page.caption_name }}<br/>
                    {{ page.caption_smalltext }}</div>
                </p>
            </div>
        </div>

    </div>
</div>
</main><!-- #main -->

<?php
get_footer();