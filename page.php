<?php
/**
 * The main template file
 *
 * @package Evoke_By_Ayush
 */

get_header();
?>

<div id="page" class="evk-site">

<?php if ( is_home() && is_front_page() ) : ?>
	<section class="evk-hero">
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p><?php echo esc_html( get_bloginfo( 'description', 'display' ) ? get_bloginfo( 'description', 'display' ) : __( 'Fresh stories, honest opinions and useful ideas — updated regularly.', 'evoke-by-ayush' ) ); ?></p>
	</section>
<?php endif; ?>

<div class="evk-container">
	<div class="evk-content-wrap">

		<main id="primary" class="evk-main-content">

			<?php if ( have_posts() ) : ?>

				<div class="evk-post-grid">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					?>
				</div>

				<?php evoke_pagination(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .evk-content-wrap -->
</div><!-- .evk-container -->

<?php
get_footer();
