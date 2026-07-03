<?php
/**
 * The template for displaying search results
 *
 * @package Evoke_By_Ayush
 */

get_header();
?>

<div id="page" class="evk-site">
<div class="evk-container">
	<div class="evk-content-wrap">

		<main id="primary" class="evk-main-content">

			<?php if ( have_posts() ) : ?>

				<header class="evk-single-header">
					<h1>
						<?php
						printf(
							/* translators: %s: search query */
							esc_html__( 'Search Results for: %s', 'evoke-by-ayush' ),
							'<span>' . get_search_query() . '</span>'
						);
						?>
					</h1>
				</header>

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

	</div>
</div>

<?php
get_footer();
