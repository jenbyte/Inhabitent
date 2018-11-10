<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<div class="site-info">
			<div class="footer-block-item">
				<h3>contact</h3>
				<p>info@inhabitent.com</p>
				<p>778-456-7891</p>
				<p>
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
				</p>
			</div>
			<div class="footer-block-item">
				<h3>business hours</h3>
				<p>Monday-Friday: 9am to 5pm</p>
				<p>Saturday: 10am to 2pm</p>
				<p>Sunday: Closed</p>
			</div>
			<div class="footer-block-item">
				<div class="text-logo">
					<a href="<?php echo get_bloginfo( 'url' ); ?>">
					<img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-text.svg" alt='Inhabitent Logo'></a>
				</div>
			</div>
		</div><!-- .site-info -->

		<div class="copyright">copyright &copy; 2018 inhabitent</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
