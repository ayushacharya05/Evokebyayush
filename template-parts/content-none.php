<?php
/**
 * Template part for displaying a message when no posts are found
 *
 * @package Evoke_By_Ayush
 */
?>

<section class="evk-no-results evk-text-center" style="padding:60px 0;">
	<h2><?php esc_html_e( 'Nothing Found', 'evoke-by-ayush' ); ?></h2>

	<?php if ( is_search() ) : ?>
		<p><?php esc_html_e( 'Sorry, no results matched your search. Please try again with different keywords.', 'evoke-by-ayush' ); ?></p>
		<?php get_search_form(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'It looks like nothing was found here. Try browsing another category or search for a topic.', 'evoke-by-ayush' ); ?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</section>
