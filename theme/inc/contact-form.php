<?php
/**
 * Contact enquiry form handling.
 *
 * If Contact Form 7, WPForms or Gravity Forms is active the site owner can drop a
 * shortcode into the Contact page and it renders instead. Otherwise the theme keeps
 * the original markup working with a native, nonce-protected handler.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

/**
 * Handle a submitted enquiry.
 */
function pwt_handle_contact_submission() {
	$redirect = wp_get_referer() ? wp_get_referer() : home_url( '/contact/' );

	if ( ! isset( $_POST['pwt_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['pwt_contact_nonce'] ) ), 'pwt_contact' ) ) {
		wp_safe_redirect( add_query_arg( 'enquiry', 'error', $redirect ) );
		exit;
	}

	// Honeypot: silently accept and discard obvious bot submissions.
	if ( ! empty( $_POST['pwt_website'] ) ) {
		wp_safe_redirect( add_query_arg( 'enquiry', 'sent', $redirect ) );
		exit;
	}

	$name    = isset( $_POST['pwt_name'] ) ? sanitize_text_field( wp_unslash( $_POST['pwt_name'] ) ) : '';
	$email   = isset( $_POST['pwt_email'] ) ? sanitize_email( wp_unslash( $_POST['pwt_email'] ) ) : '';
	$phone   = isset( $_POST['pwt_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['pwt_phone'] ) ) : '';
	$subject = isset( $_POST['pwt_subject'] ) ? sanitize_text_field( wp_unslash( $_POST['pwt_subject'] ) ) : '';
	$message = isset( $_POST['pwt_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['pwt_message'] ) ) : '';

	if ( '' === $name || ! is_email( $email ) || '' === $message ) {
		wp_safe_redirect( add_query_arg( 'enquiry', 'invalid', $redirect ) );
		exit;
	}

	$company   = pwt_company_settings();
	$recipient = get_theme_mod( 'pwt_contact_recipient', $company['email'] );
	$body      = sprintf(
		"Name: %s\nEmail: %s\nPhone: %s\nInterest: %s\n\n%s",
		$name,
		$email,
		$phone,
		$subject,
		$message
	);

	wp_mail(
		$recipient,
		sprintf( '[%s] New consultation enquiry', get_bloginfo( 'name' ) ),
		$body,
		array( 'Reply-To: ' . $name . ' <' . $email . '>' )
	);

	wp_safe_redirect( add_query_arg( 'enquiry', 'sent', $redirect ) );
	exit;
}
add_action( 'admin_post_nopriv_pwt_contact', 'pwt_handle_contact_submission' );
add_action( 'admin_post_pwt_contact', 'pwt_handle_contact_submission' );

/**
 * Status message shown above the form after a submission.
 */
function pwt_contact_notice() {
	$status = isset( $_GET['enquiry'] ) ? sanitize_key( wp_unslash( $_GET['enquiry'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

	if ( ! $status ) {
		return;
	}

	$messages = array(
		'sent'    => __( 'Thank you. Your enquiry has been sent and our veterinary team will reply within one working day.', 'pawlogictech' ),
		'invalid' => __( 'Please add your name, a valid email address and a short message so we can reply.', 'pawlogictech' ),
		'error'   => __( 'Your enquiry could not be sent. Please refresh the page and try again.', 'pawlogictech' ),
	);

	if ( ! isset( $messages[ $status ] ) ) {
		return;
	}
	?>
	<p class="mb-6 rounded-2xl border border-border bg-secondary px-5 py-4 text-sm leading-relaxed" role="status">
		<?php echo esc_html( $messages[ $status ] ); ?>
	</p>
	<?php
}
