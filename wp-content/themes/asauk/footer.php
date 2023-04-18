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
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'asauk' ), 'asauk', '<a href="http://underscores.me/">Basil</a>' );
				?>
		</div><!-- .site-info -->

		<footer class="footer-section" id="footer-section">
			<div class="first-footer">
				<div class="footer-wrapper">
					<div class="footer-container">
						<div class="our-mission"></div>
						<div class="contact-us"></div>
						<div class="quick-links"></div>
						<div class="follow-us"></div>
					</div>
				</div>
			</div>
			<div class="second-footer">
				
			</div>
		</footer>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
