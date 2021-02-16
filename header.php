<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iff_wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Meta Info -->
	<meta name="owner" content="Rufus Ingram">
  <meta name="name" content="The Ingram Family Foundation">
  <meta name="description" content="Ingram Family Foundation is a non-profit organization with a mission to promote thoughtful analysis, discussions and actions that will help to create a prosperous and equitable future for Black communities.">
  <meta name="developer" content="SVNCRWNS">
  <meta name="keywords" content="baltimore sponsorship, baltimore nonprofit, sponsorship, youth organizations, black community, black sustainability">

  <!-- OG Tags -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="The Ingram Family Foundation">
  <meta property="og:description" content="Ingram Family Foundation is a non-profit organization with a mission to promote thoughtful analysis, discussions and actions that will help to create a prosperous and equitable future for Black communities.">
  <meta property="og:url" content="http://www.theingramfamilyfoundation.org">
  <meta property="og:image" content="/img/hero_whoweare.jpg">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="The Ingram Family Foundation">
  <meta name="twitter:description" content="Ingram Family Foundation is a non-profit organization with a mission to promote thoughtful analysis, discussions and actions that will help to create a prosperous and equitable future for Black communities.">
  <meta name="twitter:image" content="/img/hero_whoweare.jpg">
  <meta name="twitter:url" content="http://www.theingramfamilyfoundation.org">
  <link rel="shortcut icon" href="/favicon.ico" />

  <title>The Ingram Family Foundation</title> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'iff' ); ?></a>

	<header id="masthead" class="site-header main_header">
		<div class="site-branding">
			<div class="logo_wrapper">
				<a href="/">
					<img src="<?php echo get_field('header_logo', 'option')['url']?>" class="logo" />
					<img src="<?php echo get_field('header_logo_mobile', 'option')['url']?>" class="logo_mobile" />
				</a>
			</div>

			<div id="menu-container">
				<button class="hamburger hamburger--squeeze" type="button">
					<span class="hamburger-box">
					<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="overlay overlay-data" id="js-overlay">
				<div class="overlay_logo">
					<div class="logo_wrapper">
						<a href="/">
							<img src="<?php echo get_field('header_logo','option')['url']?>" class="logo" />
							<img src="<?php echo get_field('header_logo_mobile','option')['url']?>" class="logo_mobile" />
						</a>
					</div>
				</div>

				<div class="overlay_container clear">
					<div class="frow centered">
					<div class="menu_list_container">
						<nav>
						
							<?php 
							wp_nav_menu( array(
								'theme_location' 	=> 'menu-1',
								'menu_id'			=> 'primary-menu',
								'fallback_cb'		=> '__return_false',
							));
							?>
						
						</nav>
					</div>
					</div><!-- .frow -->

					<div class="frow">
						<div class="bottom_menu_content">
							<div class="menu_quote"><?php the_field('menu_quote','option')?>
							<div class="menu_quote_author"><?php the_field('menu_quote_author','option')?></div>
							</div>
							<div class="menu_logo"><img src="<?php echo get_field('menu_hover_icon','option')['url']?>" width="30" /></div>
						</div>
					</div><!-- .frow -->

				</div><!-- .overlay_container -->  
			</div><!-- .overlay -->
		</nav><!-- #site-navigation -->

		
	</header><!-- #masthead -->
