<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mxpone
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="post__content">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				the_category();
				?>
				<span class="rombSign"></span>
				<?php
				mxpone_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php mxpone_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'CONTINUE READING <span class="screen-reader-text"> "%s"</span>', 'mxpone' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mxpone' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
<hr>
	<footer class="entry-footer">
	<div class="continueReading">
        <a href="<?php echo get_permalink(); ?>"> <?php _e( 'CONTINUE READING', 'mxpone' );?></a> </div>  <div class="authorReading"><?php echo get_the_author (); ?> | <?php echo get_comments_number_text(); ?>
        </div>|<div class="entry-social-menu">
       <?php
			wp_nav_menu( array(
				'theme_location' => 'social',
			) );
			?>
        
            </div>
	</footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
<hr>