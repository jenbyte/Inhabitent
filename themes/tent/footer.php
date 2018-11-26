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
				<div class="contact">
					<h3>contact</h3>
					<p><a href="mailto: info@inhabitent.com"><i class="fa fa-envelope"></i> info@inhabitent.com</a></p>
					<p><a href="tel:5553434567891"><i class="fa fa-mobile-alt"></i> 778-456-7891</a></p>
				<p>
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
				</p>
				</div>
			</div>
			<div class="footer-block-item">
				<div class="hours">
					<h3>business hours</h3>
				<p><span class="days-of-week">Monday-Friday:</span> 9am to 5pm</p>
				<p><span class="days-of-week">Saturday:</span> 10am to 2pm</p>
				<p><span class="days-of-week">Sunday:</span> Closed</p>
				</div>
			</div>
			<div class="footer-block-item">
				<div class="text-logo">
					<a href="<?php echo home_url(); ?>">
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
