<?php
/**
 * Template Name: Home
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

        <!-- MastHead -->
        <div class="masthead_hero" style="background-image:url({{ page.masthead_bg }});">

            <div class="quote">
                "{{ page.masthead_quote }}"
            </div>

        </div>

        <div class="section_title">{{ page.section-title }}</div>

        <div class="frow wrapper">
            {% for nav in site.data.navigation %}
            <div class="col-sm-1-3 home_nav">
                
                <div class="section_header">{{ nav.header }}<span>{{ nav.subheader }}</span></div>
                <div class="copy copy_height">
                    {{ nav.copy }}
                </div>
                
                <a class="cta" href="{{ nav.cta-url }}">
                    <div>Learn More</div>
                </a>
            </div>
            {% endfor %}
        </div>

        <div class="newsletter">
            <!-- Begin Mailchimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
            
            <style type="text/css">
                #mc_embed_signup{clear:left; font:14px 'Libre Baskerville',Arial,sans-serif; }
                #mc_embed_signup h2 {
                    color: #fff;
                    text-align: center;
                    font-size: 1.5em;
                }
                #mc_embed_signup .mc-field-group label {
                    color: #fff;
                }
                #mc_embed_signup input {
                    border: 1px solid #fff;
                }
                #mc_embed_signup form {
                    padding: 10px 0 10px 7%;
                }
                #mc_embed_signup .button {
                    background-color: #fff !important;
                    color: #000 !important;
                    padding: 3px 8px !important;
                }
                #mc_embed_signup p {
                    color: #fff !important;
                    margin-bottom: 20px !important;
                    text-align: center;
                    font-size: 18px;
                }
                #mc_embed_signup .mc-field-group input {
                    color: #fff !important;
                }
                
                @media screen and (min-width: 750px) {
                    #mc_embed_signup form {
                        width: 65%;
                        padding: 20px 0;
                        margin: auto;
                    }

                }
                @media screen and (min-width: 1024px) {
                    #mc_embed_signup form {
                        width: 40%;
                    }
                }
                /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>

            <div id="mc_embed_signup">
                <form action="https://ingramfamilyfoundation.us16.list-manage.com/subscribe/post?u=eaf0fcf4438b529a92608d5bc&amp;id=3e08bfb85f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                    <div id="mc_embed_signup_scroll">
                        <h2>Subscribe.</h2>
                        <p>Sign up to receive emails from our team regarding news, partnerships and follow our work in the community.</p>

                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-FNAME">First Name </label>
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-LNAME">Last Name </label>
                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eaf0fcf4438b529a92608d5bc_3e08bfb85f" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>

            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
            </div>

            <div class="pop-up-wrapper">
                <div class="mask active" role="dialog"></div>
                <div class="modal" role="alert">
                    <button class="popup-close" role="button">X</button>
                    <div class="popup-bg" style="background-image:url('{{ page.popup_bg }}');"></div>
                    
                    <div class="popup-msg">{{ page.popup_msg_1 }}<a href="{{ page.popup_link }}">{{ page.popup_link_text }}</a>{{ page.popup_msg_2 }}</div>
                    
                    <a class="popup-cta" href="{{ site.donate_link }}" target="_blank"><div>{{ page.donate_link_text }}</div></a>
                </div>
            </div>

	</main><!-- #main -->

<?php
get_footer();