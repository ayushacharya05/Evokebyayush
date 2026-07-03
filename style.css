<?php
/**
 * The template for displaying single posts
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
						<?php
						$evk_categories = get_the_category();
						if ( ! empty( $evk_categories ) ) {
							echo '<a class="evk-card-cat" href="' . esc_url( get_category_link( $evk_categories[0]->term_id ) ) . '">' . esc_html( $evk_categories[0]->name ) . '</a>';
						}
						?>
						<h1><?php the_title(); ?></h1>
						<div class="evk-meta">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
							<span><?php the_author(); ?></span>
							<span>&middot;</span>
							<span><?php echo esc_html( get_the_date() ); ?></span>
							<span>&middot;</span>
							<span><?php echo esc_html( evoke_reading_time() ); ?></span>
						</div>
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
					$evk_tags = get_the_tag_list( '', ' ' );
					if ( $evk_tags ) :
						?>
						<div class="evk-tags"><?php echo wp_kses_post( str_replace( '<a', '<a class="evk-tag"', $evk_tags ) ); ?></div>
					<?php endif; ?>

					<div class="evk-author-box">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
						<div>
							<h4><?php the_author(); ?></h4>
							<p><?php the_author_meta( 'description' ); ?></p>
						</div>
					</div>

					<div class="evk-post-nav">
						<?php
						$evk_prev = get_previous_post();
						$evk_next = get_next_post();
						if ( ! empty( $evk_prev ) ) :
							?>
							<a href="<?php echo esc_url( get_permalink( $evk_prev ) ); ?>">
								<span>&larr; <?php esc_html_e( 'Previous', 'evoke-by-ayush' ); ?></span>
								<?php echo esc_html( get_the_title( $evk_prev ) ); ?>
							</a>
						<?php else : ?>
							<span></span>
						<?php endif; ?>

						<?php if ( ! empty( $evk_next ) ) : ?>
							<a href="<?php echo esc_url( get_permalink( $evk_next ) ); ?>" style="text-align:right;">
								<span><?php esc_html_e( 'Next', 'evoke-by-ayush' ); ?> &rarr;</span>
								<?php echo esc_html( get_the_title( $evk_next ) ); ?>
							</a>
						<?php endif; ?>
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

	</div><!-- .evk-content-wrap -->
</div><!-- .evk-container -->

<?php
get_footer();
