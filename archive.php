<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Evoke_By_Ayush
 */

get_header();
?>

<div id="page" class="evk-site">
<div class="evk-container">
	<section class="evk-text-center" style="padding:100px 0;">
		<h1 style="font-size:5rem; margin-bottom:0; color:var(--evk-accent);">404</h1>
		<h2><?php esc_html_e( 'Page Not Found', 'evoke-by-ayush' ); ?></h2>
		<p><?php esc_html_e( 'Sorry, the page you are looking for doesn\'t exist or has been moved.', 'evoke-by-ayush' ); ?></p>
		<div style="max-width:500px; margin:24px auto;">
			<?php get_search_form(); ?>
		</div>
		<a class="evk-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'evoke-by-ayush' ); ?></a>
	</section>
</div>

<?php
get_footer();
