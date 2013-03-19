<?php
/**
 * @package WordPress
 * @subpackage Clean Home
 */
?>
			<div id="footer">
				<div id="theme-credit">
					<a href="http://wordpress.org/" rel="generator">Proudly powered by WordPress</a>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'cleanhome' ), 'Clean Home', '<a href="http://midmodesign.com/" rel="designer">Mid Mo Design</a>' ); ?>
				</div>
				<div id="logos">
					<a href="http://mimas.ac.uk/"><img alt="Mimas - pioneering knowledge" src="<?php bloginfo('stylesheet_directory'); ?>/images/mimas.gif" /></a><a href="http://www.jisc.ac.uk/"><img alt="JISC" src="<?php bloginfo('stylesheet_directory'); ?>/images/JISC.gif" /></a><a href="http://www.rluk.ac.uk/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/RLUK Square.jpg" alt="RLUK" width="98" height="28" /></a>
				</div>
			</div>
			<!-- #footer -->
			<?php wp_footer(); ?>
		</div>
	</body>
</html>
