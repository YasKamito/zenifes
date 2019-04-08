<?php
/**
 * The template for displaying the footer
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php //get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="ZENIBAKO FES"/></a>,
			<?php endif; ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" rel="contact">お問い合わせ</a>
			
			<div class="privacy-policy">
				<p>&copy; Copyright ZENIBAKOFES All Rights Reserved.</p>
				<p>※当サイトに掲載された文章や画像等の著作物を無断で転用・掲載することを禁止いたします。</p>
			</div>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
