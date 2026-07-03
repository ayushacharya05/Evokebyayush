<?php
/**
 * Custom search form
 *
 * @package Evoke_By_Ayush
 */
?>
<form role="search" method="get" class="evk-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="evk-search-field"><?php esc_html_e( 'Search for:', 'evoke-by-ayush' ); ?></label>
	<input type="search" id="evk-search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search articles &hellip;', 'placeholder', 'evoke-by-ayush' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="evk-btn search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'evoke-by-ayush' ); ?></button>
</form>
