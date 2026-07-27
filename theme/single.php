<?php
/**
 * Single blog post.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();

	$pwt_content = apply_filters( 'the_content', get_the_content() );
	$pwt_toc     = pwt_content_toc( $pwt_content );
	$pwt_faqs    = pwt_post_faqs();
	$pwt_blog_id = (int) get_option( 'page_for_posts' );
	$pwt_blog    = $pwt_blog_id ? get_permalink( $pwt_blog_id ) : home_url( '/blog/' );
	?>
	<article>
		<header class="border-b border-border bg-card">
			<div class="container-page py-14 sm:py-20">
				<?php
				pwt_breadcrumbs(
					array(
						array(
							'label' => __( 'Home', 'pawlogictech' ),
							'url'   => home_url( '/' ),
						),
						array(
							'label' => __( 'Blog', 'pawlogictech' ),
							'url'   => $pwt_blog,
						),
						array( 'label' => get_the_title() ),
					)
				);
				?>
				<p class="mt-8 text-xs font-semibold uppercase tracking-[0.2em] text-accent">
					<?php
					printf(
						/* translators: 1: category, 2: reading time in minutes */
						esc_html__( '%1$s · %2$s min read', 'pawlogictech' ),
						esc_html( pwt_post_category() ),
						esc_html( pwt_reading_time() )
					);
					?>
				</p>
				<h1 class="mt-4 max-w-4xl text-4xl leading-[1.1] sm:text-5xl"><?php the_title(); ?></h1>
				<p class="mt-6 max-w-2xl text-lg leading-relaxed text-muted-foreground"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
				<div class="mt-8 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-muted-foreground">
					<span class="font-semibold text-foreground"><?php echo esc_html( pwt_post_author() ); ?></span>
					<span aria-hidden="true">·</span>
					<span><?php echo esc_html( pwt_post_author_role() ); ?></span>
					<span aria-hidden="true">·</span>
					<time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></time>
				</div>
			</div>
		</header>

		<div class="container-page py-12">
			<?php pwt_post_image( get_the_ID(), 'pwt-wide', 'aspect-[16/9] w-full rounded-3xl object-cover shadow-lift', false ); ?>
		</div>

		<div class="container-page grid gap-12 pb-8 <?php echo $pwt_toc ? 'lg:grid-cols-[0.28fr_0.72fr]' : ''; ?>">
			<?php if ( $pwt_toc ) : ?>
				<aside class="lg:sticky lg:top-28 lg:self-start">
					<h2 class="text-sm font-semibold uppercase tracking-widest text-muted-foreground"><?php esc_html_e( 'In this article', 'pawlogictech' ); ?></h2>
					<ul class="mt-4 space-y-2 text-sm">
						<?php foreach ( $pwt_toc as $pwt_item ) : ?>
							<li><a class="text-muted-foreground hover:text-accent" href="#<?php echo esc_attr( $pwt_item['id'] ); ?>"><?php echo esc_html( $pwt_item['label'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</aside>
			<?php endif; ?>

			<div class="max-w-3xl">
				<?php echo wp_kses_post( $pwt_content ); ?>

				<div class="rounded-3xl bg-secondary p-8">
					<p class="text-xs font-semibold uppercase tracking-[0.2em] text-accent"><?php esc_html_e( 'About the author', 'pawlogictech' ); ?></p>
					<p class="mt-3 font-display text-xl"><?php echo esc_html( pwt_post_author() ); ?></p>
					<p class="mt-1 text-sm text-muted-foreground"><?php echo esc_html( pwt_post_author_role() ); ?></p>
					<p class="mt-4 leading-relaxed text-muted-foreground"><?php esc_html_e( 'Part of the PawlogicTech veterinary and behavioural team, which reviews every clinical threshold and every article published here before release.', 'pawlogictech' ); ?></p>
				</div>

				<?php
				if ( comments_open() || get_comments_number() ) {
					echo '<div class="mt-16">';
					comments_template();
					echo '</div>';
				}
				?>
			</div>
		</div>
	</article>

	<?php if ( $pwt_faqs ) : ?>
		<section class="py-20 sm:py-24">
			<div class="container-page">
				<div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
					<?php pwt_section_heading( __( 'FAQ', 'pawlogictech' ), __( 'Related questions', 'pawlogictech' ) ); ?>
					<?php pwt_faq_list( $pwt_faqs ); ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php
	$pwt_related = get_posts(
		array(
			'post__not_in'        => array( get_the_ID() ),
			'posts_per_page'      => 3,
			'ignore_sticky_posts' => true,
			'no_found_rows'       => true,
		)
	);

	if ( $pwt_related ) :
		?>
		<section class="py-20 sm:py-24 bg-card">
			<div class="container-page">
				<?php pwt_section_heading( __( 'Keep reading', 'pawlogictech' ), __( 'Related articles', 'pawlogictech' ) ); ?>
				<ul class="mt-12 grid gap-8 md:grid-cols-3">
					<?php foreach ( $pwt_related as $pwt_post ) : ?>
						<li><?php pwt_post_card( $pwt_post->ID, 'compact' ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
		<?php
	endif;

	pwt_cta_band(
		__( 'Turn this into a plan for your own animal', 'pawlogictech' ),
		__( 'A consultation with our veterinary team translates general guidance into something specific to your household.', 'pawlogictech' )
	);

endwhile;

get_footer();
