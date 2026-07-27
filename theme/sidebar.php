<?php
/**
 * Blog sidebar.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside class="space-y-8" aria-label="<?php esc_attr_e( 'Blog sidebar', 'pawlogictech' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
