<?php
/**
 * Search form.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;
?>
<form class="flex gap-3" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only" for="pwt-search-field"><?php esc_html_e( 'Search the site', 'pawlogictech' ); ?></label>
	<input class="pwt-search-field" id="pwt-search-field" type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search articles and services', 'pawlogictech' ); ?>" />
	<button class="pwt-search-submit" type="submit"><?php esc_html_e( 'Search', 'pawlogictech' ); ?></button>
</form>
