<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-theme
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'my-theme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'my-theme' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					@KIR-Development
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
