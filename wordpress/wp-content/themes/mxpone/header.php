<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mxpone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


	<link rel="stylesheet" href="style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mxpone' ); ?></a>

	<header id="masthead" class="site-header">

	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mxpone' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
        
		</nav>
		<!-- #site-navigation -->
		
		<div class="site-branding">
		
			<div class="site-branding">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->
		
		
		<div class="yellowHr"><span>	<nav class="social-menu">
       <?php
			wp_nav_menu( array(
				'theme_location' => 'social',
			) );
			?>
        
            </nav></span></div>
            
<hr>
               
 <div class="heroImage">
        <?php the_header_image_tag(); ?>
        <div class="heroText">
            <h2> Light Up your Corner</h2>
            <p>Lifestyle </p>
        </div>
        </div>
	</header><!-- #masthead -->

 

	<div class="site-content-contain">
	<div id="content" class="site-content">
	
      
        </div>
