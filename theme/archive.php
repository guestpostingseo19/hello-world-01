<?php
/**
 * Category, tag, author and date archives.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

get_header();

$pwt_blog_id = (int) get_option( 'page_for_posts' );
$pwt_blog    = $pwt_blog_id ? get_permalink( $pwt_blog_id ) : home_url( '/blog/' );

pwt_page_hero(
	__( 'Journal', 'pawlogictech' ),
	wp_strip_all_tags( get_the_archive_title() ),
	wp_strip_all_tags( get_the_archive_description() ),
	array(
		array(
			'label' => __( 'Home', 'pawlogictech' ),
			'url'   => home_url( '/' ),
		),
		array(
			'label' => __( 'Blog', 'pawlogictech' ),
			'url'   => $pwt_blog,
		),
		array( 'label' => wp_strip_all_tags( get_the_archive_title() ) ),
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
			<p class="text-lg leading-relaxed text-muted-foreground"><?php esc_html_e( 'Nothing has been published in this archive yet.', 'pawlogictech' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
pwt_cta_band();
get_footer();
