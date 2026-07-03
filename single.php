<?php
/**
 * The sidebar containing the widget area
 *
 * @package Evoke_By_Ayush
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="evk-sidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
