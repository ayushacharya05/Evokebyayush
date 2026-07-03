<?php
/**
 * The header for our theme
 *
 * @package Evoke_By_Ayush
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'evoke-by-ayush' ); ?></a>

<header id="masthead" class="evk-site-header">
	<div class="evk-header-inner">
		<div class="evk-site-branding">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<p class="evk-site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</p>
				<?php
				$evk_desc = get_bloginfo( 'description', 'display' );
				if ( $evk_desc || is_customize_preview() ) {
					?>
					<p class="evk-site-description"><?php echo $evk_desc; ?></p>
					<?php
				}
			}
			?>
		</div><!-- .evk-site-branding -->

		<button class="evk-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<span></span><span></span><span></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'evoke-by-ayush' ); ?></span>
		</button>

		<nav id="site-navigation" class="evk-main-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
