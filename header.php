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

	<meta name="author" content="SVNCRWNS" />
  	<meta name="description" content="Ingram Family Foundation is a non-profit organization whose goal is to support initiatives that increase sustainability for black communities" />
	<meta name="keywords" content="education, financial literacy, fresh start programs, jobs, employment, agriculture, food, healthcare, baltimore, maryland, black businesses, black organizations" />
	<!-- Meta OG Tags -->
	<meta name="og:title" content="Ingram Family Foundation" />
	<meta name="og:title" content="Non-profit organization supporting initiatives and investing in community" />
	<meta property="og:url" content="http://www.ingramfamilyfoundation.org" />
	<meta property="og:image" content="" />

  <link rel="shortcut icon" href="http://www.bhmhs.org/wp-content/uploads/2020/07/favicon.jpg" type="image/png" /> 

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
					<img src="http://localhost:8888/wp-content/uploads/2020/07/iff_logo_short.png" class="logo" />
					<img src="http://localhost:8888/wp-content/uploads/2020/07/iff_logo_long.png" class="logo_mobile" />
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
							<img src="http://localhost:8888/wp-content/uploads/2020/07/iff_logo_short.png" class="logo" />
							<img src="http://localhost:8888/wp-content/uploads/2020/07/iff_logo_long.png" class="logo_mobile" />
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
							<div class="menu_quote">“Deep Roots, Strong Branches, Solid Fruits”
							<div class="menu_quote_author">- The Ingram Family Foundation</div>
							</div>
							<div class="menu_logo"><img src="http://localhost:8888/wp-content/uploads/2020/07/tree_logo.png" width="30" /></div>
						</div>
					</div><!-- .frow -->

				</div><!-- .overlay_container -->  
			</div><!-- .overlay -->
		</nav><!-- #site-navigation -->

		
	</header><!-- #masthead -->
