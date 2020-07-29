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
				<img src="/img/iff_logo_short.png" class="logo_footer" />
			</a>
		</div>
		
		<div class="frow wrapper footer_wrapper">
			<div class="col-sm-2-5 list_wrapper">
				<!-- Navigation Menu -->
				<!-- <ul class="list"> -->
					<div class="menu_header">navigation</div>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu',
						) );
					?>
				<!-- </ul> -->
			</div>
			<div class="separator"></div>
			<div class="col-sm-2-5 list_wrapper">
				<!-- Connect Menu -->
				<ul class="list">
					<div class="menu_header">connect</div>
					<li><a href="mailto:info@ingramfamilyfoundation.org">info@<span>ingramfamilyfoundation.org</span></a></li>
					<li><a href="tel:4103583538">410.358.4613</a></li>
					<br/>
					<li class="menu_small_text">P.O. Box 5780</li>
					<li class="menu_small_text">Pikesville, MD 21282</li>
				</ul>
			</div>
			<div class="copyright">&copy; 2017-2020. All Rights Reserved.</div>
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
