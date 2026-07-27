<?php
/**
 * 404 page, matching the original not-found screen.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

pwt_page_hero(
	__( 'Error 404', 'pawlogictech' ),
	__( 'That page has wandered off', 'pawlogictech' ),
	__( 'The link may be out of date, or the page may have moved. The sections below cover everything on the site.', 'pawlogictech' ),
	array(
		array(
			'label' => __( 'Home', 'pawlogictech' ),
			'url'   => home_url( '/' ),
		),
		array( 'label' => __( 'Page not found', 'pawlogictech' ) ),
	)
);
?>

<section class="py-20 sm:py-24">
	<div class="container-page grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
		<?php pwt_section_heading( __( 'Find your way', 'pawlogictech' ), __( 'Popular destinations', 'pawlogictech' ), __( 'Start from one of these, or search for what you were looking for.', 'pawlogictech' ) ); ?>
		<div>
			<ul class="grid gap-4 sm:grid-cols-2">
				<?php foreach ( pwt_services() as $pwt_service ) : ?>
					<li>
						<a class="block h-full rounded-2xl border border-border bg-card p-6 transition-transform duration-200 hover:-translate-y-0.5" href="<?php echo esc_url( home_url( '/services/' . $pwt_service['slug'] . '/' ) ); ?>">
							<span class="block font-display text-lg"><?php echo esc_html( $pwt_service['name'] ); ?></span>
							<span class="mt-2 block text-sm leading-relaxed text-muted-foreground"><?php echo esc_html( $pwt_service['short'] ); ?></span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="mt-8 max-w-md"><?php get_search_form(); ?></div>
			<div class="mt-8 flex flex-wrap gap-3">
				<a class="inline-flex items-center rounded-full bg-accent px-6 py-3 text-sm font-semibold text-accent-foreground transition-transform duration-200 hover:-translate-y-0.5" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to homepage', 'pawlogictech' ); ?></a>
				<a class="inline-flex items-center rounded-full border border-border px-6 py-3 text-sm font-semibold transition-colors hover:border-accent hover:text-accent" href="<?php echo esc_url( home_url( '/html-sitemap/' ) ); ?>"><?php esc_html_e( 'View sitemap', 'pawlogictech' ); ?></a>
			</div>
		</div>
	</div>
</section>

<?php
pwt_cta_band();
get_footer();
