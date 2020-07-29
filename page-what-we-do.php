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

    <div class="frow wrapper">
        <div class="separator_noline">&nbsp;</div>

        <div class="icon"><img src="http://localhost:8888/wp-content/uploads/2020/07/icon-tree.png" /></div>

        <div class="frow">

            <div class="col-sm-3-5 copy">
                <p><span class="blue">{{ page.span_desc_1 }}</span>{{ page.desc_1 }}</p>

                <p><span class="blue">{{ page.span_desc_2 }}</span>{{ page.desc_2 }}</p>

                <p>{{ page.desc_3 }}</p>
            </div>
        </div>

        <div class="separator_noline">&nbsp;</div>

        <div class="icon"><img src="http://localhost:8888/wp-content/uploads/2020/07/icon-tree.png" /></div>

        <div class="separator_noline">&nbsp;</div>	

        <div class="frow centered">
            <div class="col-sm-1-2">
                <div class="group_header">{{ page.questions_headline }}</div>
            </div>
            <div class="col-sm-1-2 group_copy_wrapper">
                <div class="group">
                    <span class="group_number">1</span>
                    {{ page.question_1 }}
                </div>
                <div class="group">
                    <span class="group_number">2</span>
                    {{ page.question_2 }}
                </div>
                <div class="group">
                    <span class="group_number">3</span>
                    {{ page.question_3 }}
                </div>
            </div>
        </div>
    </div>


</main><!-- #main -->

<?php
get_footer();