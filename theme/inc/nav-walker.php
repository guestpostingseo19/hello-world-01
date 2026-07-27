<?php
/**
 * Navigation walkers that reproduce the original markup exactly.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

/**
 * Desktop primary navigation: flat anchors, with the services mega dropdown.
 */
class PWT_Desktop_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * No sub level markup: the dropdown is rendered from theme data.
	 *
	 * @param string $output Output.
	 * @param int    $depth  Depth.
	 * @param array  $args   Args.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {}

	/**
	 * No sub level markup.
	 *
	 * @param string $output Output.
	 * @param int    $depth  Depth.
	 * @param array  $args   Args.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ) {}

	/**
	 * Render one top level item.
	 *
	 * @param string   $output Output.
	 * @param WP_Post  $item   Menu item.
	 * @param int      $depth  Depth.
	 * @param stdClass $args   Args.
	 * @param int      $id     Item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( $depth > 0 ) {
			return;
		}

		$active  = in_array( 'current-menu-item', (array) $item->classes, true ) || in_array( 'current-menu-ancestor', (array) $item->classes, true );
		$classes = 'rounded-md px-3 py-2 text-sm font-medium text-foreground/80 transition-colors hover:text-accent' . ( $active ? ' text-accent' : '' );
		$url     = $item->url ? $item->url : '#';
		$title   = apply_filters( 'the_title', $item->title, $item->ID );

		if ( pwt_is_services_url( $url ) ) {
			$output .= pwt_services_dropdown( $url, $classes, $title );
			return;
		}

		$output .= '<a class="' . esc_attr( $classes ) . '" href="' . esc_url( $url ) . '">' . esc_html( $title ) . '</a>';
	}

	/**
	 * No closing markup needed.
	 *
	 * @param string  $output Output.
	 * @param WP_Post $item   Item.
	 * @param int     $depth  Depth.
	 * @param array   $args   Args.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {}
}

/**
 * Mobile navigation list items.
 */
class PWT_Mobile_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * No sub levels on mobile: services are listed separately.
	 *
	 * @param string $output Output.
	 * @param int    $depth  Depth.
	 * @param array  $args   Args.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {}

	/**
	 * No sub levels.
	 *
	 * @param string $output Output.
	 * @param int    $depth  Depth.
	 * @param array  $args   Args.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ) {}

	/**
	 * Render one item.
	 *
	 * @param string   $output Output.
	 * @param WP_Post  $item   Menu item.
	 * @param int      $depth  Depth.
	 * @param stdClass $args   Args.
	 * @param int      $id     Item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		if ( $depth > 0 ) {
			return;
		}
		$url     = $item->url ? $item->url : '#';
		$title   = apply_filters( 'the_title', $item->title, $item->ID );
		$output .= '<li><a class="block border-b border-border/60 py-3 text-base font-medium" href="' . esc_url( $url ) . '">' . esc_html( $title ) . '</a></li>';
	}

	/**
	 * Items are self closing above.
	 *
	 * @param string  $output Output.
	 * @param WP_Post $item   Item.
	 * @param int     $depth  Depth.
	 * @param array   $args   Args.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {}
}

/**
 * Footer column links.
 */
class PWT_Footer_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Render one item.
	 *
	 * @param string   $output Output.
	 * @param WP_Post  $item   Menu item.
	 * @param int      $depth  Depth.
	 * @param stdClass $args   Args.
	 * @param int      $id     Item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$url     = $item->url ? $item->url : '#';
		$title   = apply_filters( 'the_title', $item->title, $item->ID );
		$output .= '<li><a class="transition-colors hover:text-accent" href="' . esc_url( $url ) . '">' . esc_html( $title ) . '</a></li>';
	}

	/**
	 * Items are self closing above.
	 *
	 * @param string  $output Output.
	 * @param WP_Post $item   Item.
	 * @param int     $depth  Depth.
	 * @param array   $args   Args.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ) {}
}

/**
 * Whether a URL points at the services hub.
 *
 * @param string $url URL.
 * @return bool
 */
function pwt_is_services_url( $url ) {
	$path = trim( (string) wp_parse_url( $url, PHP_URL_PATH ), '/' );
	$home = trim( (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH ), '/' );
	if ( '' !== $home && 0 === strpos( $path, $home ) ) {
		$path = trim( substr( $path, strlen( $home ) ), '/' );
	}
	return 'services' === $path;
}

/**
 * The services hover dropdown markup.
 *
 * @param string $url     Services URL.
 * @param string $classes Link classes.
 * @param string $title   Link label.
 * @return string
 */
function pwt_services_dropdown( $url, $classes, $title ) {
	$html  = '<div class="relative" data-pwt-services>';
	$html .= '<a class="' . esc_attr( $classes ) . '" href="' . esc_url( $url ) . '">' . esc_html( $title ) . '</a>';
	$html .= '<div class="absolute left-1/2 top-full w-[26rem] -translate-x-1/2 pt-3" data-pwt-services-panel hidden>';
	$html .= '<ul class="rounded-2xl border border-border bg-card p-2 shadow-lift">';
	foreach ( pwt_services() as $service ) {
		$html .= '<li><a class="block rounded-xl px-3 py-2.5 transition-colors hover:bg-secondary" href="' . esc_url( home_url( '/services/' . $service['slug'] . '/' ) ) . '">';
		$html .= '<span class="block text-sm font-semibold">' . esc_html( $service['name'] ) . '</span>';
		$html .= '<span class="block text-xs text-muted-foreground">' . esc_html( $service['short'] ) . '</span>';
		$html .= '</a></li>';
	}
	$html .= '</ul></div></div>';

	return $html;
}

/**
 * Fallback desktop navigation when no menu is assigned.
 */
function pwt_default_desktop_nav() {
	$current = untrailingslashit( wp_parse_url( home_url( add_query_arg( array() ) ), PHP_URL_PATH ) );
	foreach ( pwt_primary_nav() as $item ) {
		$url     = home_url( $item['path'] );
		$active  = untrailingslashit( wp_parse_url( $url, PHP_URL_PATH ) ) === $current;
		$classes = 'rounded-md px-3 py-2 text-sm font-medium text-foreground/80 transition-colors hover:text-accent' . ( $active ? ' text-accent' : '' );

		if ( '/services/' === $item['path'] ) {
			echo wp_kses_post( pwt_services_dropdown( $url, $classes, $item['label'] ) );
			continue;
		}

		printf( '<a class="%s" href="%s">%s</a>', esc_attr( $classes ), esc_url( $url ), esc_html( $item['label'] ) );
	}
}

/**
 * Fallback mobile navigation when no menu is assigned.
 */
function pwt_default_mobile_nav() {
	foreach ( pwt_primary_nav() as $item ) {
		printf(
			'<li><a class="block border-b border-border/60 py-3 text-base font-medium" href="%s">%s</a></li>',
			esc_url( home_url( $item['path'] ) ),
			esc_html( $item['label'] )
		);
	}
}
