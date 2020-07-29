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

    <div class="frow wrapper">

        <div class="frow family_wrapper">
            <div class="col-sm-1-2 family_col">
                <div class="icon">
                    <img src="http://localhost:8888/wp-content/uploads/2020/07/icon-tree.png" />
                </div>
                
                <div class="section_header">
                    Our<span>{{ page.vision_title }}</span>
                </div>
                
                <p>{{ page.vision_paragraph_1 }}</p>

                <p>{{ page.vision_paragraph_2 }}</p>

                <p>{{ page.vision_paragraph_3 }}</p>

                <p>{{ page.vision_paragraph_4 }}</p>
            </div>
            <div class="col-sm-1-2 family_col">
                <div class="icon">
                    <img src="http://localhost:8888/wp-content/uploads/2020/07/icon-tree.png" />
                </div>
                
                <div class="section_header">
                    Our<span>{{ page.mission_title }}</span>
                </div>
                
                <p>{{ page.mission_paragraph_1 }}</p>

                <p>{{ page.mission_paragraph_2 }}</p>

                <p>{{ page.mission_paragraph_3 }}</p>

                <p>{{ page.mission_paragraph_4 }}</p>
            </div>
        </div>

    </div>

</main><!-- #main -->

<?php
get_footer();