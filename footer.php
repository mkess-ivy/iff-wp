<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iff_wp
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="logo_wrapper footer">
			<a href="/">
				<img src="<?php echo get_field('footer_img', 'option')['url'] ?>" class="logo_footer" />
			</a>
		</div>
		
		<div class="frow wrapper footer_wrapper">
			<div class="col-sm-2-5 list_wrapper">
				<!-- Navigation Menu -->
				 <ul class="list"> 
					<div class="menu_header"><?php the_field('footer_col1_title','option');?></div>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu',
						) );
					?>
				</ul>
			</div>
			<div class="separator"></div>
			<div class="col-sm-2-5 list_wrapper">
				<!-- Connect Menu -->
				<ul class="list">
					<div class="menu_header"><?php the_field('footer_col2_title','option');?></div>
					<li><a href="mailto:<?php the_field('footer_email_address','option');?>" class="footer_email"><?php the_field('footer_email_address','option');?></a></li>
					<li><a href="tel:<?php the_field('footer_phone_number','option');?>"><?php the_field('footer_phone_number','option');?></a></li>
					<br/>
					<li class="menu_small_text"><?php the_field('footer_address','option');?></li>
				</ul>
			</div>
			<div class="copyright">&copy; <?php the_field('footer_copyright', 'option');?></div>
		</div>
	</footer><!-- #colophon -->

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	
	<script type="text/javascript" src="https://downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us16.list-manage.com","uuid":"eaf0fcf4438b529a92608d5bc","lid":"3e08bfb85f","uniqueMethods":true}) })</script>
	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-104893901-1', 'auto');
	ga('send', 'pageview');

	</script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
