<?php
/**
 * Reusable presentation helpers matching the original components.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

/**
 * Brand logo, using the custom logo when one is set.
 */
function pwt_logo() {
	if ( has_custom_logo() ) {
		$logo_id = get_theme_mod( 'custom_logo' );
		$logo    = wp_get_attachment_image( $logo_id, 'full', false, array( 'class' => 'h-9 w-9 rounded-xl object-cover' ) );
		echo '<span class="inline-flex items-center gap-2.5">' . wp_kses_post( $logo ) . '<span class="font-display text-lg font-semibold tracking-tight">' . wp_kses_post( pwt_logo_wordmark() ) . '</span></span>';
		return;
	}
	?>
	<span class="inline-flex items-center gap-2.5">
		<span aria-hidden="true" class="grid h-9 w-9 place-items-center rounded-xl bg-primary text-primary-foreground">
			<svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
				<circle cx="7" cy="8" fill="currentColor" r="2" stroke="none"></circle>
				<circle cx="12" cy="6" fill="currentColor" r="2" stroke="none"></circle>
				<circle cx="17" cy="8" fill="currentColor" r="2" stroke="none"></circle>
				<path d="M12 11c3 0 5 2.2 5 4.6 0 1.9-1.4 3-3.2 3-.9 0-1.3-.4-1.8-.4s-.9.4-1.8.4c-1.8 0-3.2-1.1-3.2-3C7 13.2 9 11 12 11Z" fill="currentColor" stroke="none"></path>
			</svg>
		</span>
		<span class="font-display text-lg font-semibold tracking-tight"><?php echo wp_kses_post( pwt_logo_wordmark() ); ?></span>
	</span>
	<?php
}

/**
 * Wordmark with the accented second half of the site name.
 *
 * @return string
 */
function pwt_logo_wordmark() {
	$name = get_bloginfo( 'name' );
	if ( 'PawlogicTech' === $name || '' === $name ) {
		return 'Pawlogic<span class="text-accent">Tech</span>';
	}
	return esc_html( $name );
}

/**
 * Breadcrumb trail.
 *
 * @param array $trail List of array( 'label' => string, 'url' => string|null ).
 */
function pwt_breadcrumbs( $trail ) {
	?>
	<nav aria-label="<?php esc_attr_e( 'Breadcrumb', 'pawlogictech' ); ?>" class="text-sm">
		<ol class="flex flex-wrap items-center gap-x-2 gap-y-1 text-muted-foreground">
			<?php
			$last = count( $trail ) - 1;
			foreach ( $trail as $index => $crumb ) :
				?>
				<li class="flex items-center gap-2">
					<?php if ( $index !== $last && ! empty( $crumb['url'] ) ) : ?>
						<a class="hover:text-accent" href="<?php echo esc_url( $crumb['url'] ); ?>"><?php echo esc_html( $crumb['label'] ); ?></a>
						<span aria-hidden="true">/</span>
					<?php else : ?>
						<span aria-current="page" class="text-foreground"><?php echo esc_html( $crumb['label'] ); ?></span>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ol>
	</nav>
	<?php
}

/**
 * Page hero used by archives, search and 404.
 *
 * @param string $eyebrow Eyebrow label.
 * @param string $title   Heading.
 * @param string $lead    Lead paragraph.
 * @param array  $trail   Breadcrumb trail.
 */
function pwt_page_hero( $eyebrow, $title, $lead = '', $trail = array() ) {
	?>
	<section class="border-b border-border bg-card">
		<div class="container-page py-14 sm:py-20">
			<?php if ( $trail ) : ?>
				<div class="mb-8"><?php pwt_breadcrumbs( $trail ); ?></div>
			<?php endif; ?>
			<p class="mb-4 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.2em] text-accent">
				<span aria-hidden="true" class="h-px w-6 bg-accent"></span><?php echo esc_html( $eyebrow ); ?>
			</p>
			<h1 class="max-w-4xl text-4xl leading-[1.08] sm:text-5xl lg:text-6xl"><?php echo esc_html( $title ); ?></h1>
			<?php if ( $lead ) : ?>
				<p class="mt-6 max-w-2xl text-lg leading-relaxed text-muted-foreground"><?php echo esc_html( $lead ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<?php
}

/**
 * Section heading block.
 *
 * @param string $eyebrow Eyebrow.
 * @param string $title   Title.
 * @param string $lead    Lead copy.
 */
function pwt_section_heading( $eyebrow, $title, $lead = '' ) {
	?>
	<div class="max-w-2xl">
		<?php if ( $eyebrow ) : ?>
			<p class="mb-4 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.2em] text-accent">
				<span aria-hidden="true" class="h-px w-6 bg-accent"></span><?php echo esc_html( $eyebrow ); ?>
			</p>
		<?php endif; ?>
		<h2 class="text-3xl leading-tight sm:text-4xl"><?php echo esc_html( $title ); ?></h2>
		<?php if ( $lead ) : ?>
			<p class="mt-5 text-lg leading-relaxed text-muted-foreground"><?php echo esc_html( $lead ); ?></p>
		<?php endif; ?>
	</div>
	<?php
}

/**
 * Accordion FAQ list.
 *
 * @param array $faqs List of array( 'q' => string, 'a' => string ).
 */
function pwt_faq_list( $faqs ) {
	if ( empty( $faqs ) ) {
		return;
	}
	?>
	<div class="divide-y divide-border rounded-3xl border border-border bg-card">
		<?php foreach ( $faqs as $faq ) : ?>
			<details class="group px-6 py-5">
				<summary class="flex cursor-pointer list-none items-start justify-between gap-6 text-left font-display text-lg">
					<?php echo esc_html( $faq['q'] ); ?>
					<span aria-hidden="true" class="mt-1 shrink-0 text-accent transition-transform duration-200 group-open:rotate-45">
						<svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"></path></svg>
					</span>
				</summary>
				<p class="mt-3 max-w-3xl leading-relaxed text-muted-foreground"><?php echo esc_html( $faq['a'] ); ?></p>
			</details>
		<?php endforeach; ?>
	</div>
	<?php
}

/**
 * Closing call to action band.
 *
 * @param string $title Heading.
 * @param string $lead  Lead copy.
 */
function pwt_cta_band( $title = '', $lead = '' ) {
	$title = $title ? $title : __( 'Ready to see what your animal is telling you?', 'pawlogictech' );
	$lead  = $lead ? $lead : __( 'Book a consultation with our veterinary and behavioural team. We will tell you honestly whether monitoring is the right answer for your household.', 'pawlogictech' );
	?>
	<section class="py-20 sm:py-24">
		<div class="container-page">
			<div class="relative overflow-hidden rounded-3xl bg-primary px-8 py-16 text-primary-foreground sm:px-14">
				<span aria-hidden="true" class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-accent/25 blur-3xl"></span>
				<div class="relative max-w-2xl">
					<h2 class="text-3xl leading-tight sm:text-4xl"><?php echo esc_html( $title ); ?></h2>
					<p class="mt-4 text-lg leading-relaxed text-primary-foreground/75"><?php echo esc_html( $lead ); ?></p>
					<div class="mt-8 flex flex-wrap gap-3">
						<a class="inline-flex items-center rounded-full bg-accent px-6 py-3 text-sm font-semibold text-accent-foreground transition-transform duration-200 hover:-translate-y-0.5" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Book a consultation', 'pawlogictech' ); ?></a>
						<a class="inline-flex items-center rounded-full border border-primary-foreground/30 px-6 py-3 text-sm font-semibold transition-colors hover:border-primary-foreground" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore services', 'pawlogictech' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Stored post meta with a sensible default.
 *
 * @param string $key     Meta key without prefix.
 * @param mixed  $default Default value.
 * @param int    $post_id Post ID.
 * @return mixed
 */
function pwt_post_meta( $key, $default = '', $post_id = 0 ) {
	$post_id = $post_id ? $post_id : get_the_ID();
	$value   = get_post_meta( $post_id, '_pwt_' . $key, true );
	return ( '' === $value || null === $value ) ? $default : $value;
}

/**
 * Category label for a post, preferring the stored original label.
 *
 * @param int $post_id Post ID.
 * @return string
 */
function pwt_post_category( $post_id = 0 ) {
	$post_id = $post_id ? $post_id : get_the_ID();
	$stored  = pwt_post_meta( 'category', '', $post_id );
	if ( $stored ) {
		return $stored;
	}
	$terms = get_the_terms( $post_id, 'category' );
	if ( $terms && ! is_wp_error( $terms ) ) {
		return $terms[0]->name;
	}
	return __( 'Journal', 'pawlogictech' );
}

/**
 * Reading time in whole minutes.
 *
 * @param int $post_id Post ID.
 * @return int
 */
function pwt_reading_time( $post_id = 0 ) {
	$post_id = $post_id ? $post_id : get_the_ID();
	$stored  = (int) pwt_post_meta( 'reading_time', 0, $post_id );
	if ( $stored ) {
		return $stored;
	}
	$words = str_word_count( wp_strip_all_tags( get_post_field( 'post_content', $post_id ) ) );
	return max( 1, (int) ceil( $words / 200 ) );
}

/**
 * Post author display name, preferring the stored original byline.
 *
 * @param int $post_id Post ID.
 * @return string
 */
function pwt_post_author( $post_id = 0 ) {
	$post_id = $post_id ? $post_id : get_the_ID();
	$stored  = pwt_post_meta( 'author', '', $post_id );
	return $stored ? $stored : get_the_author_meta( 'display_name', (int) get_post_field( 'post_author', $post_id ) );
}

/**
 * Post author role line.
 *
 * @param int $post_id Post ID.
 * @return string
 */
function pwt_post_author_role( $post_id = 0 ) {
	return pwt_post_meta( 'author_role', __( 'PawlogicTech editorial team', 'pawlogictech' ), $post_id );
}

/**
 * Featured image markup for cards and heroes, falling back to bundled artwork.
 *
 * @param int    $post_id Post ID.
 * @param string $size    Image size.
 * @param string $class   Image classes.
 * @param bool   $lazy    Whether to lazy load.
 */
function pwt_post_image( $post_id, $size, $class, $lazy = true ) {
	$alt = pwt_post_meta( 'image_alt', get_the_title( $post_id ), $post_id );

	if ( has_post_thumbnail( $post_id ) ) {
		echo wp_kses_post(
			get_the_post_thumbnail(
				$post_id,
				$size,
				array(
					'class'    => $class,
					'alt'      => $alt,
					'loading'  => $lazy ? 'lazy' : 'eager',
					'decoding' => 'async',
				)
			)
		);
		return;
	}

	$file = pwt_post_meta( 'image', 'hero-dog.webp', $post_id );
	printf(
		'<img alt="%1$s" class="%2$s" decoding="async" %3$s src="%4$s" width="1200" height="750" />',
		esc_attr( $alt ),
		esc_attr( $class ),
		$lazy ? 'loading="lazy"' : '',
		esc_url( get_template_directory_uri() . '/assets/images/' . $file )
	);
}

/**
 * Absolute URL of a post image, used for social tags and schema.
 *
 * @param int $post_id Post ID.
 * @return string
 */
function pwt_post_image_url( $post_id ) {
	if ( has_post_thumbnail( $post_id ) ) {
		return (string) get_the_post_thumbnail_url( $post_id, 'full' );
	}
	return get_template_directory_uri() . '/assets/images/' . pwt_post_meta( 'image', 'hero-dog.webp', $post_id );
}

/**
 * FAQs saved with a post.
 *
 * @param int $post_id Post ID.
 * @return array
 */
function pwt_post_faqs( $post_id = 0 ) {
	$faqs = pwt_post_meta( 'faqs', array(), $post_id );
	return is_array( $faqs ) ? $faqs : array();
}

/**
 * Table of contents built from the h2 headings in the content.
 *
 * @param string $content Post content.
 * @return array
 */
function pwt_content_toc( $content ) {
	$toc = array();
	if ( preg_match_all( '/<h2[^>]*id="([^"]+)"[^>]*>(.*?)<\/h2>/is', $content, $matches, PREG_SET_ORDER ) ) {
		foreach ( $matches as $match ) {
			$toc[] = array(
				'id'    => $match[1],
				'label' => wp_strip_all_tags( $match[2] ),
			);
		}
	}
	return $toc;
}

/**
 * Blog card, shared by the blog index, archives, search and related posts.
 *
 * @param int    $post_id Post ID.
 * @param string $variant 'default' or 'compact'.
 */
function pwt_post_card( $post_id, $variant = 'default' ) {
	$compact = 'compact' === $variant;
	?>
	<article class="group flex <?php echo $compact ? 'flex-col' : 'h-full flex-col'; ?>">
		<a class="overflow-hidden rounded-2xl" href="<?php echo esc_url( get_permalink( $post_id ) ); ?>">
			<?php pwt_post_image( $post_id, 'pwt-card', 'aspect-[16/10] w-full object-cover transition-transform duration-500 group-hover:scale-105' ); ?>
		</a>
		<p class="mt-5 text-xs font-semibold uppercase tracking-widest text-accent">
			<?php
			printf(
				/* translators: 1: category, 2: reading time in minutes */
				esc_html__( '%1$s · %2$s min read', 'pawlogictech' ),
				esc_html( pwt_post_category( $post_id ) ),
				esc_html( pwt_reading_time( $post_id ) )
			);
			?>
		</p>
		<h3 class="mt-3 <?php echo $compact ? 'text-xl' : 'text-2xl'; ?> leading-snug">
			<a class="hover:text-accent" href="<?php echo esc_url( get_permalink( $post_id ) ); ?>"><?php echo esc_html( get_the_title( $post_id ) ); ?></a>
		</h3>
		<?php if ( ! $compact ) : ?>
			<p class="mt-3 flex-1 leading-relaxed text-muted-foreground"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt( $post_id ) ) ); ?></p>
			<p class="mt-5 text-sm text-muted-foreground">
				<?php echo esc_html( pwt_post_author( $post_id ) ); ?> ·
				<time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d', $post_id ) ); ?>"><?php echo esc_html( get_the_date( 'j F Y', $post_id ) ); ?></time>
			</p>
		<?php endif; ?>
	</article>
	<?php
}

/**
 * Archive pagination styled with the site tokens.
 */
function pwt_pagination() {
	$links = paginate_links(
		array(
			'type'      => 'array',
			'prev_text' => __( 'Previous', 'pawlogictech' ),
			'next_text' => __( 'Next', 'pawlogictech' ),
		)
	);

	if ( empty( $links ) ) {
		return;
	}
	?>
	<nav aria-label="<?php esc_attr_e( 'Posts pagination', 'pawlogictech' ); ?>" class="mt-16 flex flex-wrap items-center gap-2 text-sm">
		<?php foreach ( $links as $link ) : ?>
			<span class="inline-flex"><?php echo wp_kses_post( str_replace( 'page-numbers', 'page-numbers inline-flex items-center rounded-full border border-border px-4 py-2 transition-colors hover:border-accent hover:text-accent', $link ) ); ?></span>
		<?php endforeach; ?>
	</nav>
	<?php
}
