<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Erik_Portfolio_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<nav id="social-navigation" class="social-navigation">
    			<?php wp_nav_menu( array( 'theme_location' => 'footer-socials') ); ?>
			</nav>

			
				<?php
				
				printf( esc_html__( 'Erik Larsen' ) );
				?>
			
			
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
