<?php
/**
 * The template for displaying all static pages
 *
 * @package Evoke_By_Ayush
 */

get_header();
?>

<div id="page" class="evk-site">
<div class="evk-container">
	<div class="evk-content-wrap">

		<main id="primary" class="evk-main-content">

			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="evk-single-header">
						<h1><?php the_title(); ?></h1>
					</header>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="evk-featured-image">
							<?php the_post_thumbnail( 'large' ); ?>
						</div>
					<?php endif; ?>

					<div class="evk-entry-content">
						<?php
						the_content();
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'evoke-by-ayush' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>

					<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
				</article>
				<?php
			endwhile;
			?>

		</main><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div>

<?php
get_footer();
