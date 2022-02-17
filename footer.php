<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eternal
 */

?>

	<footer id="colophon" class="site-footer mt-auto">
		<div class="site-info container mx-auto text-center py-5 text-gray-500 text-sm">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'eternal' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'eternal' ), 'WordPress' );
				?>
			</a>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'eternal' ), 'Eternal', '<a href="https://www.ferdisahin.com.tr">Ferdi Sahin</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
