<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mxpone
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>
<br>
<br>
<aside id="footer-widget-area" class="widget-area footer-widgets">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</aside><!-- #secondary -->




