<?php
/**
 * Fallback template.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

pwt_page_hero(
	__( 'PawlogicTech', 'pawlogictech' ),
	single_post_title( '', false ) ? single_post_title( '', false ) : get_bloginfo( 'name' ),
	get_bloginfo( 'description' ),
	array(
		array(
			'label' => __( 'Home', 'pawlogictech' ),
			'url'   => home_url( '/' ),
		),
	)
);
?>

<section class="py-20 sm:py-24">
	<div class="container-page">
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
		<?php else : ?>
			<p class="text-lg leading-relaxed text-muted-foreground"><?php esc_html_e( 'Nothing found.', 'pawlogictech' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
pwt_cta_band();
get_footer();
