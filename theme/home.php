<?php
/**
 * Blog index template (posts page).
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

$pwt_blog_page = (int) get_option( 'page_for_posts' );
$pwt_title     = $pwt_blog_page ? get_the_title( $pwt_blog_page ) : __( 'Blog', 'pawlogictech' );
$pwt_lead      = __( 'Writing from our veterinary surgeons, behaviourists and engineers. Long enough to be useful, specific enough to act on, and never written to sell you hardware.', 'pawlogictech' );

pwt_page_hero(
	__( 'Journal', 'pawlogictech' ),
	$pwt_title,
	$pwt_lead,
	array(
		array(
			'label' => __( 'Home', 'pawlogictech' ),
			'url'   => home_url( '/' ),
		),
		array( 'label' => $pwt_title ),
	)
);

$pwt_paged    = max( 1, (int) get_query_var( 'paged' ) );
$pwt_featured = null;

if ( 1 === $pwt_paged && have_posts() ) {
	the_post();
	$pwt_featured = get_post();
	?>
	<section class="py-20 sm:py-24">
		<div class="container-page">
			<article class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
				<a class="group overflow-hidden rounded-3xl" href="<?php the_permalink(); ?>">
					<?php pwt_post_image( get_the_ID(), 'pwt-wide', 'aspect-[16/10] w-full object-cover transition-transform duration-500 group-hover:scale-105', false ); ?>
				</a>
				<div>
					<p class="text-xs font-semibold uppercase tracking-widest text-accent">
						<?php
						printf(
							/* translators: 1: category, 2: reading time in minutes */
							esc_html__( 'Featured · %1$s · %2$s min read', 'pawlogictech' ),
							esc_html( pwt_post_category() ),
							esc_html( pwt_reading_time() )
						);
						?>
					</p>
					<h2 class="mt-4 text-3xl leading-tight sm:text-4xl">
						<a class="hover:text-accent" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<p class="mt-4 text-lg leading-relaxed text-muted-foreground"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
					<p class="mt-6 text-sm text-muted-foreground">
						<?php echo esc_html( pwt_post_author() ); ?> ·
						<time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></time>
					</p>
				</div>
			</article>
		</div>
	</section>
	<?php
}
?>

<section class="py-20 sm:py-24 bg-card">
	<div class="container-page">
		<h2 class="sr-only"><?php esc_html_e( 'All articles', 'pawlogictech' ); ?></h2>
		<?php if ( have_posts() ) : ?>
			<ul class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<li><?php pwt_post_card( get_the_ID() ); ?></li>
				<?php endwhile; ?>
			</ul>
			<?php pwt_pagination(); ?>
		<?php elseif ( ! $pwt_featured ) : ?>
			<p class="text-lg leading-relaxed text-muted-foreground"><?php esc_html_e( 'No articles have been published yet. Please check back soon.', 'pawlogictech' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
pwt_cta_band(
	__( 'Questions the blog did not answer?', 'pawlogictech' ),
	__( 'Our veterinary and behavioural team answer consultation enquiries directly. No sales script.', 'pawlogictech' )
);

get_footer();
