<?php
/**
 * Generic page template. Static pages converted from the original site use
 * their own page-{slug}.php wrapper; anything else falls back to here.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();

	$pwt_trail   = array(
		array(
			'label' => __( 'Home', 'pawlogictech' ),
			'url'   => home_url( '/' ),
		),
	);
	$pwt_parents = array_reverse( get_post_ancestors( get_the_ID() ) );
	foreach ( $pwt_parents as $pwt_parent ) {
		$pwt_trail[] = array(
			'label' => get_the_title( $pwt_parent ),
			'url'   => get_permalink( $pwt_parent ),
		);
	}
	$pwt_trail[] = array( 'label' => get_the_title() );

	pwt_page_hero( __( 'PawlogicTech', 'pawlogictech' ), get_the_title(), wp_strip_all_tags( get_the_excerpt() ), $pwt_trail );
	?>

	<section class="py-20 sm:py-24">
		<div class="container-page">
			<div class="max-w-3xl leading-relaxed text-muted-foreground">
				<?php the_content(); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<div class="mt-8 flex gap-2 text-sm">',
						'after'  => '</div>',
					)
				);
				?>
			</div>
		</div>
	</section>

	<?php
	if ( comments_open() || get_comments_number() ) {
		echo '<div class="container-page max-w-3xl pb-12">';
		comments_template();
		echo '</div>';
	}

	pwt_cta_band();

endwhile;

get_footer();
