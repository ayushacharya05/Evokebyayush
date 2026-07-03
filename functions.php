<?php
/**
 * The footer for our theme
 *
 * @package Evoke_By_Ayush
 */
?>

	<footer id="colophon" class="evk-site-footer">
		<div class="evk-container">
			<div class="evk-footer-grid">
				<div class="evk-footer-col">
					<h4><?php bloginfo( 'name' ); ?></h4>
					<p><?php echo esc_html( get_bloginfo( 'description', 'display' ) ? get_bloginfo( 'description', 'display' ) : __( 'A clean, modern space for stories, ideas and insights.', 'evoke-by-ayush' ) ); ?></p>
					<div class="evk-social-links">
						<?php if ( has_nav_menu( 'footer' ) ) : ?>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'container'      => false,
									'menu_class'      => 'evk-footer-menu',
									'depth'          => 1,
									'fallback_cb'    => false,
								)
							);
							?>
						<?php endif; ?>
					</div>
				</div><!-- .evk-footer-col -->

				<div class="evk-footer-col">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php else : ?>
						<h4><?php esc_html_e( 'Explore', 'evoke-by-ayush' ); ?></h4>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'evoke-by-ayush' ); ?></a></li>
							<li><a href="<?php echo esc_url( get_privacy_policy_url() ); ?>"><?php esc_html_e( 'Privacy Policy', 'evoke-by-ayush' ); ?></a></li>
						</ul>
					<?php endif; ?>
				</div><!-- .evk-footer-col -->

				<div class="evk-footer-col">
					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-2' ); ?>
					<?php else : ?>
						<h4><?php esc_html_e( 'Support', 'evoke-by-ayush' ); ?></h4>
						<ul>
							<li>
								<?php esc_html_e( 'Email:', 'evoke-by-ayush' ); ?>
								<a href="mailto:<?php echo esc_attr( EVOKE_SUPPORT_EMAIL ); ?>"><?php echo esc_html( EVOKE_SUPPORT_EMAIL ); ?></a>
							</li>
							<li>
								<?php esc_html_e( 'Website:', 'evoke-by-ayush' ); ?>
								<a href="<?php echo esc_url( EVOKE_THEME_WEBSITE ); ?>" target="_blank" rel="noopener noreferrer">ayushacharya5.com.np</a>
							</li>
						</ul>
					<?php endif; ?>
				</div><!-- .evk-footer-col -->
			</div><!-- .evk-footer-grid -->

			<div class="evk-footer-bottom">
				<div class="evk-footer-copy">
					<?php
					$evk_footer_text = get_theme_mod(
						'evoke_footer_text',
						sprintf(
							/* translators: %d = current year */
							__( '&copy; %d Evoke by Ayush. All rights reserved.', 'evoke-by-ayush' ),
							date( 'Y' )
						)
					);
					echo wp_kses_post( $evk_footer_text );
					?>
				</div>
				<div class="evk-footer-credit">
					<?php esc_html_e( 'Theme by', 'evoke-by-ayush' ); ?>
					<a href="<?php echo esc_url( EVOKE_THEME_WEBSITE ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( EVOKE_THEME_AUTHOR ); ?></a>
					&mdash;
					<a href="mailto:<?php echo esc_attr( EVOKE_SUPPORT_EMAIL ); ?>"><?php esc_html_e( 'Get Support', 'evoke-by-ayush' ); ?></a>
				</div>
			</div><!-- .evk-footer-bottom -->
		</div><!-- .evk-container -->
	</footer><!-- #colophon -->

</div><!-- #page (opened in index/single/page templates via wrapper, see template files) -->

<?php wp_footer(); ?>

</body>
</html>
