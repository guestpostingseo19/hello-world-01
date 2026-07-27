<?php
/**
 * Contact enquiry form. Renders a page shortcode (Contact Form 7, WPForms, Gravity
 * Forms) when one is configured, otherwise the original form wired to WordPress.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

$pwt_shortcode = get_theme_mod( 'pwt_contact_shortcode', '' );

if ( $pwt_shortcode ) {
	echo '<div class="mt-8">' . do_shortcode( wp_kses_post( $pwt_shortcode ) ) . '</div>';
	return;
}

pwt_contact_notice();
?>
<form class="mt-8 grid gap-5 sm:grid-cols-2" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" data-pwt-contact-form>
	<input type="hidden" name="action" value="pwt_contact" />
	<?php wp_nonce_field( 'pwt_contact', 'pwt_contact_nonce' ); ?>
	<p class="hidden" aria-hidden="true">
		<label for="pwt_website"><?php esc_html_e( 'Leave this field empty', 'pawlogictech' ); ?></label>
		<input id="pwt_website" name="pwt_website" type="text" tabindex="-1" autocomplete="off" value="" />
	</p>
	<div>
		<label class="block text-sm font-semibold" for="name"><?php esc_html_e( 'Full name', 'pawlogictech' ); ?></label>
		<input autocomplete="name" class="mt-2 w-full rounded-xl border border-border bg-card px-4 py-3 text-sm" id="name" name="pwt_name" required type="text" />
	</div>
	<div>
		<label class="block text-sm font-semibold" for="email"><?php esc_html_e( 'Email address', 'pawlogictech' ); ?></label>
		<input autocomplete="email" class="mt-2 w-full rounded-xl border border-border bg-card px-4 py-3 text-sm" id="email" name="pwt_email" required type="email" />
	</div>
	<div>
		<label class="block text-sm font-semibold" for="phone"><?php esc_html_e( 'Phone number (optional)', 'pawlogictech' ); ?></label>
		<input autocomplete="tel" class="mt-2 w-full rounded-xl border border-border bg-card px-4 py-3 text-sm" id="phone" name="pwt_phone" type="tel" />
	</div>
	<div>
		<label class="block text-sm font-semibold" for="service"><?php esc_html_e( 'Service of interest', 'pawlogictech' ); ?></label>
		<select class="mt-2 w-full rounded-xl border border-border bg-card px-4 py-3 text-sm" id="service" name="pwt_subject">
			<?php foreach ( pwt_services() as $pwt_index => $pwt_service ) : ?>
				<option <?php selected( 0, $pwt_index ); ?> value="<?php echo esc_attr( $pwt_service['slug'] ); ?>"><?php echo esc_html( $pwt_service['name'] ); ?></option>
			<?php endforeach; ?>
			<option value="not-sure"><?php esc_html_e( 'Not sure yet', 'pawlogictech' ); ?></option>
		</select>
	</div>
	<div class="sm:col-span-2">
		<label class="block text-sm font-semibold" for="message"><?php esc_html_e( 'How can we help?', 'pawlogictech' ); ?></label>
		<textarea class="mt-2 w-full rounded-xl border border-border bg-card px-4 py-3 text-sm" id="message" name="pwt_message" placeholder="<?php esc_attr_e( 'Tell us about your animals, their ages, and what prompted you to get in touch.', 'pawlogictech' ); ?>" required rows="6"></textarea>
	</div>
	<div class="sm:col-span-2">
		<button class="inline-flex items-center rounded-full bg-accent px-7 py-3.5 text-sm font-semibold text-accent-foreground transition-transform duration-200 hover:-translate-y-0.5" type="submit"><?php esc_html_e( 'Send enquiry', 'pawlogictech' ); ?></button>
		<p class="mt-4 text-xs leading-relaxed text-muted-foreground"><?php esc_html_e( 'We use your details only to respond to this enquiry. See our privacy policy for how we handle personal data.', 'pawlogictech' ); ?></p>
	</div>
</form>
