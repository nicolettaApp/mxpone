<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mxpone
 */

?>

	</div><!-- #content -->
	
      <?php get_sidebar('footer'); ?>

      <div class="footerImg">
      <img src="http://localhost/wordpress-4.9.7/wordpress/wp-content/uploads/2018/08/footerImg-e1535053892334.png" width="1100" height="95">
      <div class="footerImgBorder">
      <div class="footerImgContent">
          <p>FOLLOW ME</p>
          </div>
    </div>
      </div>
      
</div>

	<footer id="colophon" class="site-footer">
	
      
		<div class="site-footer-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mxpone' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '2015 &copy; %s', 'mxpone' ), ' ' );
				?>
			</a>
			
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s by %2$s.', 'mxpone' ), 'mxpone', 'Themes. All Right Reserved' );
            ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
