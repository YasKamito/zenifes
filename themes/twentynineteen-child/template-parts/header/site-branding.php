<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<?php $description = get_bloginfo( 'description', 'display' ); ?>

<div class="site-branding">

	<div class="site-title-header -bg--blue-grade -flexbox">
		<div class="left-area -flexbox -flex--rowwrap -flex--vcenter">
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-kamome.png" alt="ZENIBAKO FES"/></a></p>
			<?php if ( $description ) :?>
				<p class="site-description -text--white">
					<?php echo $description; ?>
				</p>
			<?php endif; ?>
		</div>

		<div class="social-area -flexbox">
			<a href="https://www.facebook.com/zenibakofes" rel="Facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-logo.png" alt="Facebook"/></a>
			<!--<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/twitter-logo.png" alt="Twitter"/></a> -->
			<!--<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/instagram-logo.png" alt="Instagram"/></a> -->
		</div>
	</div><!-- /-flexbox-->

	<?php if ( is_front_page() ) : ?>
		<?php
		echo do_shortcode('[smartslider3 slider=2]');
		?>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		<nav id="site-navigation" class="main-navigation-custom" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
</div><!-- .site-branding -->
