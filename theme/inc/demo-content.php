<?php
/**
 * One-time demo content installer.
 *
 * On first activation the theme creates the page tree, the blog posts and the
 * reading settings that the original site had, so a fresh install matches it
 * exactly with no manual setup.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

/**
 * Run the installer after the theme is switched on.
 */
function pwt_after_switch_theme() {
	pwt_install_pages();
	pwt_install_posts();
	pwt_install_menus();
	pwt_install_reading_settings();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'pwt_after_switch_theme' );

/**
 * Find an existing page by slug and parent.
 *
 * @param string $slug   Slug.
 * @param int    $parent Parent ID.
 * @return int
 */
function pwt_find_page( $slug, $parent = 0 ) {
	$found = get_posts(
		array(
			'post_type'        => 'page',
			'name'             => $slug,
			'post_parent'      => $parent,
			'post_status'      => array( 'publish', 'draft', 'pending', 'private' ),
			'posts_per_page'   => 1,
			'fields'           => 'ids',
			'suppress_filters' => false,
		)
	);
	return $found ? (int) $found[0] : 0;
}

/**
 * Create the page tree used by the converted templates.
 */
function pwt_install_pages() {
	$ids = array();

	foreach ( pwt_page_blueprint() as $page ) {
		$parent_id = '' === $page['parent'] ? 0 : ( isset( $ids[ $page['parent'] ] ) ? $ids[ $page['parent'] ] : 0 );
		$existing  = pwt_find_page( $page['slug'], $parent_id );

		if ( $existing ) {
			$ids[ $page['slug'] ] = $existing;
			continue;
		}

		$id = wp_insert_post(
			array(
				'post_title'   => $page['title'],
				'post_name'    => $page['slug'],
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_parent'  => $parent_id,
				'post_content' => '',
				'comment_status' => 'closed',
			)
		);

		if ( ! is_wp_error( $id ) ) {
			$ids[ $page['slug'] ] = (int) $id;
		}
	}

	// Home page.
	$home = pwt_find_page( 'home' );
	if ( ! $home ) {
		$home = wp_insert_post(
			array(
				'post_title'  => __( 'Home', 'pawlogictech' ),
				'post_name'   => 'home',
				'post_type'   => 'page',
				'post_status' => 'publish',
				'comment_status' => 'closed',
			)
		);
	}

	if ( $home && ! is_wp_error( $home ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', (int) $home );
	}

	if ( isset( $ids['blog'] ) ) {
		update_option( 'page_for_posts', $ids['blog'] );
	}

	update_option( 'pwt_page_ids', $ids );
}

/**
 * Create the original blog posts with their metadata.
 */
function pwt_install_posts() {
	foreach ( pwt_demo_posts() as $post ) {
		$existing = get_posts(
			array(
				'post_type'      => 'post',
				'name'           => $post['slug'],
				'post_status'    => array( 'publish', 'draft', 'pending', 'private' ),
				'posts_per_page' => 1,
				'fields'         => 'ids',
			)
		);

		if ( $existing ) {
			continue;
		}

		$category_id = 0;
		$term        = term_exists( $post['category'], 'category' );
		if ( ! $term ) {
			$term = wp_insert_term( $post['category'], 'category' );
		}
		if ( ! is_wp_error( $term ) ) {
			$category_id = (int) ( is_array( $term ) ? $term['term_id'] : $term );
		}

		$meta = array();
		foreach ( pwt_posts_meta() as $record ) {
			if ( $record['slug'] === $post['slug'] ) {
				$meta = $record;
				break;
			}
		}

		$post_id = wp_insert_post(
			array(
				'post_title'    => $post['title'],
				'post_name'     => $post['slug'],
				'post_type'     => 'post',
				'post_status'   => 'publish',
				'post_content'  => $post['content'],
				'post_excerpt'  => $post['excerpt'],
				'post_date'     => gmdate( 'Y-m-d H:i:s', strtotime( $post['date'] ) ),
				'post_category' => $category_id ? array( $category_id ) : array(),
			)
		);

		if ( is_wp_error( $post_id ) ) {
			continue;
		}

		update_post_meta( $post_id, '_pwt_category', $post['category'] );
		update_post_meta( $post_id, '_pwt_faqs', $post['faqs'] );

		if ( $meta ) {
			update_post_meta( $post_id, '_pwt_author', $meta['author'] );
			update_post_meta( $post_id, '_pwt_author_role', $meta['authorRole'] );
			update_post_meta( $post_id, '_pwt_reading_time', (int) $meta['readingTime'] );
			update_post_meta( $post_id, '_pwt_image', $meta['image'] );
			update_post_meta( $post_id, '_pwt_image_alt', $meta['imageAlt'] );
		}
	}
}

/**
 * Build the primary and footer menus from the original navigation.
 */
function pwt_install_menus() {
	$locations = get_theme_mod( 'nav_menu_locations', array() );
	$ids       = get_option( 'pwt_page_ids', array() );

	$menus = array(
		'primary'         => array( __( 'Primary Navigation', 'pawlogictech' ), pwt_primary_nav() ),
		'footer_explore'  => array( __( 'Footer Explore', 'pawlogictech' ), pwt_explore_links() ),
		'footer_legal'    => array( __( 'Footer Legal', 'pawlogictech' ), pwt_legal_links() ),
	);

	foreach ( $menus as $location => $config ) {
		if ( ! empty( $locations[ $location ] ) && is_nav_menu( $locations[ $location ] ) ) {
			continue;
		}

		$menu_id = wp_create_nav_menu( $config[0] );
		if ( is_wp_error( $menu_id ) ) {
			continue;
		}

		foreach ( $config[1] as $item ) {
			$slug = trim( $item['path'], '/' );
			$args = array(
				'menu-item-title'  => $item['label'],
				'menu-item-status' => 'publish',
			);

			if ( isset( $ids[ $slug ] ) ) {
				$args['menu-item-object']    = 'page';
				$args['menu-item-object-id'] = $ids[ $slug ];
				$args['menu-item-type']      = 'post_type';
			} else {
				$args['menu-item-url']  = home_url( $item['path'] );
				$args['menu-item-type'] = 'custom';
			}

			wp_update_nav_menu_item( $menu_id, 0, $args );
		}

		$locations[ $location ] = $menu_id;
	}

	// Footer services menu points at the five service pages.
	if ( empty( $locations['footer_services'] ) || ! is_nav_menu( $locations['footer_services'] ) ) {
		$menu_id = wp_create_nav_menu( __( 'Footer Services', 'pawlogictech' ) );
		if ( ! is_wp_error( $menu_id ) ) {
			foreach ( pwt_services() as $service ) {
				$args = array(
					'menu-item-title'  => $service['name'],
					'menu-item-status' => 'publish',
				);
				if ( isset( $ids[ $service['slug'] ] ) ) {
					$args['menu-item-object']    = 'page';
					$args['menu-item-object-id'] = $ids[ $service['slug'] ];
					$args['menu-item-type']      = 'post_type';
				} else {
					$args['menu-item-url']  = home_url( '/services/' . $service['slug'] . '/' );
					$args['menu-item-type'] = 'custom';
				}
				wp_update_nav_menu_item( $menu_id, 0, $args );
			}
			$locations['footer_services'] = $menu_id;
		}
	}

	set_theme_mod( 'nav_menu_locations', $locations );
}

/**
 * Reading and permalink defaults that match the original URLs.
 */
function pwt_install_reading_settings() {
	update_option( 'posts_per_page', 12 );

	$structure = get_option( 'permalink_structure' );
	if ( empty( $structure ) ) {
		update_option( 'permalink_structure', '/blog/%postname%/' );
	}

	if ( 'PawlogicTech' !== get_bloginfo( 'name' ) && 'My Site' === get_bloginfo( 'name' ) ) {
		update_option( 'blogname', 'PawlogicTech' );
	}
}
