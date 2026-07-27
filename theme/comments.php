<?php
/**
 * Comments template.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="pwt-comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="text-2xl leading-snug">
			<?php
			$pwt_count = get_comments_number();
			printf(
				/* translators: %s: comment count */
				esc_html( _n( '%s comment', '%s comments', $pwt_count, 'pawlogictech' ) ),
				esc_html( number_format_i18n( $pwt_count ) )
			);
			?>
		</h2>

		<ol class="pwt-comment-list mt-8">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 48,
				)
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => __( 'Previous', 'pawlogictech' ),
				'next_text' => __( 'Next', 'pawlogictech' ),
			)
		);
		?>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="mt-8 text-sm text-muted-foreground"><?php esc_html_e( 'Comments are closed.', 'pawlogictech' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_form'         => 'mt-10 space-y-4',
			'title_reply_before' => '<h2 class="text-2xl leading-snug">',
			'title_reply_after'  => '</h2>',
			'title_reply'        => __( 'Leave a comment', 'pawlogictech' ),
			'comment_notes_before' => '<p class="text-sm text-muted-foreground">' . esc_html__( 'Your email address will not be published. Required fields are marked with an asterisk.', 'pawlogictech' ) . '</p>',
		)
	);
	?>
</section>
