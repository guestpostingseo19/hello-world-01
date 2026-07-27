<?php
/**
 * Search results.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

$pwt_query = get_search_query();

pwt_page_hero(
	__( 'Search', 'pawlogictech' ),
	/* translators: %s: search term */
	sprintf( __( 'Results for “%s”', 'pawlogictech' ), $pwt_query ),
	__( 'Articles, services and pages matching your search.', 'pawlogictech' ),
	array(
		array(
			'label' => __( 'Home', 'pawlogictech' ),
			'url'   => home_url( '/' ),
		),
		array( 'label' => __( 'Search', 'pawlogictech' ) ),
	)
);
?>

<section class="py-20 sm:py-24">
	<div class="container-page">
		<div class="mb-12 max-w-xl"><?php get_search_form(); ?></div>

		<?php if ( have_posts() ) : ?>
			<ul class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<li>
						<?php if ( 'post' === get_post_type() ) : ?>
							<?php pwt_post_card( get_the_ID() ); ?>
						<?php else : ?>
							<article class="flex h-full flex-col rounded-3xl border border-border bg-card p-7">
								<h2 class="text-2xl leading-snug"><a class="hover:text-accent" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p class="mt-3 flex-1 leading-relaxed text-muted-foreground"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
							</article>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php pwt_pagination(); ?>
		<?php else : ?>
			<p class="text-lg leading-relaxed text-muted-foreground"><?php esc_html_e( 'No results matched that search. Try a broader term such as “health monitoring”, “anxiety” or “training”.', 'pawlogictech' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
pwt_cta_band();
get_footer();
