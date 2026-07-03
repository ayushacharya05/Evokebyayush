<?php
/**
 * The template for displaying comments
 *
 * @package Evoke_By_Ayush
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="evk-comments">

	<?php if ( have_comments() ) : ?>
		<h3 class="evk-comments-title">
			<?php
			$evk_comment_count = get_comments_number();
			if ( '1' === $evk_comment_count ) {
				esc_html_e( 'One Comment', 'evoke-by-ayush' );
			} else {
				printf(
					/* translators: %s: comment count */
					esc_html( _n( '%s Comment', '%s Comments', $evk_comment_count, 'evoke-by-ayush' ) ),
					esc_html( number_format_i18n( $evk_comment_count ) )
				);
			}
			?>
		</h3>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 44,
				)
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => __( '&larr; Older Comments', 'evoke-by-ayush' ),
				'next_text' => __( 'Newer Comments &rarr;', 'evoke-by-ayush' ),
			)
		);
		?>

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'evoke-by-ayush' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_submit' => 'evk-btn',
			'title_reply'  => esc_html__( 'Leave a Reply', 'evoke-by-ayush' ),
		)
	);
	?>

</div><!-- #comments -->
