<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package asauk_new
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'asauk' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'asauk' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'asauk' ), 'asauk', '<a href="http://underscores.me/">Basil</a>' );
				?>
		</div><!-- .site-info -->

		<footer class="footer-section" id="footer-section">
			<div class="first-footer">
				<div class="footer-wrapper">
					<div class="footer-container">
						<div class="our-mission">
							<h4>Our Mission</h4>
							<p><?php echo get_theme_mod('footer_mission'); ?></p>
						</div>
						<div class="contact-us">
							<h4>Contact Us</h4>
							<span>
								<h5>e-mail</h5>
								<p><?php echo get_theme_mod('footer_contact_email'); ?></p>
							</span>
							<br>
							<span>
								<h5>address</h5>
								<p><?php echo get_theme_mod('footer_address'); ?></p>
							</span>
						</div>
						<div class="quick-links">
							<h4>Quick Links</h4>
							<?php
							wp_nav_menu(
								array(
									'theme_location'	=>	'footer-menu',
									'container'			=>	'',
									'before'			=>	'<p>',
									'after'				=>	'</p>',
									'items_wrap'		=>	'<ul class="list-menu"%3$s</ul>'
								)
							);
							?>
						</div>
						<div class="follow-us">
							<h4>Follow Us</h4>
							<span>
								<img src="<?php echo get_template_directory_uri(); ?> /assets/icons/facebook.png" alt="facebook">
								<img src="<?php echo get_template_directory_uri(); ?> /assets/icons/instagram.png" alt="instagram">
								<img src="<?php echo get_template_directory_uri(); ?> /assets/icons/youtube.png" alt="youtube">
								<img src="<?php echo get_template_directory_uri(); ?> /assets/icons/twitter.png" alt="twitter">
								<img src="<?php echo get_template_directory_uri(); ?> /assets/icons/mixcloud.png" alt="mixcloud">
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="second-footer">
				<div class="second-footer-container">
					<span><p>© 2022 Royal African Society ltd - All rights reserved.</p></span>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</span>
				</div>
			</div>
		</footer>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
