<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Nu Themes
 */
?>
			</div>
		<!-- #main --></div>

		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with up to four columns of widgets.
			 */
			get_sidebar( 'footer' );
		?>

		<footer id="footer" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 site-info">
						&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. <?php printf( __( 'Proudly powered by %s', 'nuthemes' ), 'WordPress' ); ?>.
					<!-- .site-info --></div>

					<div class="col-sm-6 site-credit">
						<a href="http://csthemes.com/theme/morphic">Morphic</a> by csThemes
					<!-- .site-credit --></div>
				</div>
			</div>
		<!-- #footer --></footer>

		<?php wp_footer(); ?>
	</body>
</html>
