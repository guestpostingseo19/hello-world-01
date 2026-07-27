<?php
/**
 * SEO output: titles, meta, canonicals, Open Graph, Twitter cards and JSON-LD.
 *
 * The per-URL data extracted from the original site lives in inc/seo-data.php and is
 * used verbatim so the WordPress site emits the same metadata. If a well known SEO
 * plugin is active, the theme steps aside and lets the plugin own the document head.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

/**
 * Whether an SEO plugin is handling meta output.
 *
 * @return bool
 */
function pwt_seo_plugin_active() {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || defined( 'AIOSEO_VERSION' ) || class_exists( 'SEOPress' );
}

/**
 * Resolve the original site path for the current request.
 *
 * @return string
 */
function pwt_current_path() {
	if ( is_front_page() ) {
		return '/';
	}

	if ( is_home() ) {
		return '/blog';
	}

	if ( is_singular( 'post' ) ) {
		return '/blog/' . get_post_field( 'post_name', get_the_ID() );
	}

	if ( is_page() ) {
		$post   = get_post();
		$slug   = $post->post_name;
		$parent = $post->post_parent ? get_post_field( 'post_name', $post->post_parent ) : '';

		if ( 'html-sitemap' === $slug ) {
			return '/html-sitemap';
		}

		if ( 'services' === $slug ) {
			return '/services';
		}

		foreach ( pwt_services() as $service ) {
			if ( $service['slug'] === $slug ) {
				return '/services/' . $slug;
			}
			if ( $service['slug'] === $parent ) {
				return '/services/' . $parent . '/' . $slug;
			}
		}

		return '/' . $slug;
	}

	return '';
}

/**
 * Metadata for the current request, if the original site had it.
 *
 * @return array
 */
function pwt_current_seo() {
	$map  = pwt_seo_map();
	$path = pwt_current_path();

	if ( $path && isset( $map[ $path ] ) ) {
		return $map[ $path ];
	}

	return array();
}

/**
 * Use the original document title where one exists.
 *
 * @param string $title Title.
 * @return string
 */
function pwt_pre_document_title( $title ) {
	if ( pwt_seo_plugin_active() ) {
		return $title;
	}

	$seo = pwt_current_seo();
	if ( ! empty( $seo['title'] ) ) {
		return $seo['title'];
	}

	if ( is_singular( 'post' ) ) {
		return get_the_title() . ' | ' . get_bloginfo( 'name' );
	}

	return $title;
}
add_filter( 'pre_get_document_title', 'pwt_pre_document_title' );

/**
 * Print meta tags, canonical link and JSON-LD.
 */
function pwt_head_meta() {
	if ( pwt_seo_plugin_active() ) {
		return;
	}

	$seo       = pwt_current_seo();
	$printed   = array();
	$canonical = '';

	if ( ! empty( $seo['meta'] ) ) {
		foreach ( $seo['meta'] as $tag ) {
			$content = $tag['content'];
			if ( in_array( $tag['key'], array( 'og:url', 'twitter:url' ), true ) && 0 === strpos( $content, '/' ) ) {
				$content = home_url( trailingslashit( $content ) );
			}
			printf(
				"<meta %s=\"%s\" content=\"%s\" />\n",
				esc_attr( $tag['attr'] ),
				esc_attr( $tag['key'] ),
				esc_attr( $content )
			);
			$printed[] = $tag['key'];
		}
	}

	if ( ! empty( $seo['canonical'] ) ) {
		$canonical = 0 === strpos( $seo['canonical'], '/' ) ? home_url( trailingslashit( $seo['canonical'] ) ) : $seo['canonical'];
	}

	// Posts and any page without recorded metadata still get a full set of tags.
	if ( empty( $seo ) ) {
		$title       = is_singular() ? get_the_title() : wp_get_document_title();
		$description = '';

		if ( is_singular() ) {
			$description = wp_strip_all_tags( get_the_excerpt() );
			$canonical   = get_permalink();
		} elseif ( is_home() ) {
			$description = get_bloginfo( 'description' );
			$canonical   = get_permalink( (int) get_option( 'page_for_posts' ) );
		} else {
			$description = get_bloginfo( 'description' );
		}

		$tags = array(
			array( 'name', 'description', $description ),
			array( 'property', 'og:title', $title ),
			array( 'property', 'og:description', $description ),
			array( 'property', 'og:type', is_singular( 'post' ) ? 'article' : 'website' ),
			array( 'name', 'twitter:title', $title ),
			array( 'name', 'twitter:description', $description ),
		);

		foreach ( $tags as $tag ) {
			printf( "<meta %s=\"%s\" content=\"%s\" />\n", esc_attr( $tag[0] ), esc_attr( $tag[1] ), esc_attr( $tag[2] ) );
			$printed[] = $tag[1];
		}
	}

	if ( ! in_array( 'og:site_name', $printed, true ) ) {
		printf( "<meta property=\"og:site_name\" content=\"%s\" />\n", esc_attr( get_bloginfo( 'name' ) ) );
	}

	if ( ! in_array( 'twitter:card', $printed, true ) ) {
		echo "<meta name=\"twitter:card\" content=\"summary_large_image\" />\n";
	}

	if ( is_singular( 'post' ) ) {
		$image = pwt_post_image_url( get_the_ID() );
		if ( $image ) {
			printf( "<meta property=\"og:image\" content=\"%s\" />\n", esc_url( $image ) );
			printf( "<meta name=\"twitter:image\" content=\"%s\" />\n", esc_url( $image ) );
		}
		printf( "<meta property=\"article:published_time\" content=\"%s\" />\n", esc_attr( get_the_date( 'c' ) ) );
		printf( "<meta property=\"article:modified_time\" content=\"%s\" />\n", esc_attr( get_the_modified_date( 'c' ) ) );
		printf( "<meta property=\"article:author\" content=\"%s\" />\n", esc_attr( pwt_post_author() ) );
	}

	if ( $canonical ) {
		printf( "<link rel=\"canonical\" href=\"%s\" />\n", esc_url( $canonical ) );
	}

	pwt_head_schema( $seo );
}
add_action( 'wp_head', 'pwt_head_meta', 2 );

/**
 * JSON-LD structured data.
 *
 * @param array $seo Current SEO record.
 */
function pwt_head_schema( $seo ) {
	$company = pwt_company();

	$graph = array(
		array(
			'@context' => 'https://schema.org',
			'@type'    => 'Organization',
			'name'     => get_bloginfo( 'name' ),
			'url'      => home_url( '/' ),
			'email'    => $company['email'],
			'telephone' => $company['phone'],
			'address'  => array(
				'@type'           => 'PostalAddress',
				'streetAddress'   => $company['address']['street'],
				'addressLocality' => $company['address']['city'],
				'postalCode'      => $company['address']['postcode'],
				'addressCountry'  => $company['address']['country'],
			),
		),
		array(
			'@context'        => 'https://schema.org',
			'@type'           => 'WebSite',
			'name'            => get_bloginfo( 'name' ),
			'url'             => home_url( '/' ),
			'potentialAction' => array(
				'@type'       => 'SearchAction',
				'target'      => home_url( '/?s={search_term_string}' ),
				'query-input' => 'required name=search_term_string',
			),
		),
	);

	if ( ! empty( $seo['jsonld'] ) && is_array( $seo['jsonld'] ) ) {
		foreach ( $seo['jsonld'] as $block ) {
			$decoded = is_string( $block ) ? json_decode( $block, true ) : $block;
			if ( $decoded ) {
				$graph[] = $decoded;
			}
		}
	}

	if ( is_singular( 'post' ) ) {
		$graph[] = array(
			'@context'      => 'https://schema.org',
			'@type'         => 'BlogPosting',
			'headline'      => get_the_title(),
			'description'   => wp_strip_all_tags( get_the_excerpt() ),
			'image'         => pwt_post_image_url( get_the_ID() ),
			'datePublished' => get_the_date( 'c' ),
			'dateModified'  => get_the_modified_date( 'c' ),
			'author'        => array(
				'@type' => 'Person',
				'name'  => pwt_post_author(),
			),
			'publisher'     => array(
				'@type' => 'Organization',
				'name'  => get_bloginfo( 'name' ),
			),
			'mainEntityOfPage' => get_permalink(),
		);

		$faqs = pwt_post_faqs();
		if ( $faqs ) {
			$entities = array();
			foreach ( $faqs as $faq ) {
				$entities[] = array(
					'@type'          => 'Question',
					'name'           => $faq['q'],
					'acceptedAnswer' => array(
						'@type' => 'Answer',
						'text'  => $faq['a'],
					),
				);
			}
			$graph[] = array(
				'@context'   => 'https://schema.org',
				'@type'      => 'FAQPage',
				'mainEntity' => $entities,
			);
		}
	}

	foreach ( $graph as $block ) {
		echo '<script type="application/ld+json">' . wp_json_encode( $block ) . "</script>\n";
	}
}
