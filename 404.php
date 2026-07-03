<?php
/**
 * Template part for displaying posts in the card/grid layout
 *
 * @package Evoke_By_Ayush
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'evk-card' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" class="evk-card-thumb" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'medium_large' ); ?>
		</a>
	<?php endif; ?>

	<div class="evk-card-body">
		<?php
		$evk_categories = get_the_category();
		if ( ! empty( $evk_categories ) ) {
			echo '<a class="evk-card-cat" href="' . esc_url( get_category_link( $evk_categories[0]->term_id ) ) . '">' . esc_html( $evk_categories[0]->name ) . '</a>';
		}
		?>

		<h2 class="evk-card-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>

		<div class="evk-card-excerpt">
			<?php the_excerpt(); ?>
		</div>

		<div class="evk-meta">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 26 ); ?>
			<span><?php the_author(); ?></span>
			<span>&middot;</span>
			<span><?php echo esc_html( get_the_date() ); ?></span>
			<span>&middot;</span>
			<span><?php echo esc_html( evoke_reading_time() ); ?></span>
		</div>

		<a class="evk-read-more" href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Read More', 'evoke-by-ayush' ); ?> &rarr;
		</a>
	</div>
</article>
