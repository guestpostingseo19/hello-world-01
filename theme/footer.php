<?php
/**
 * Site footer.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

$pwt_company  = pwt_company();
$pwt_services = pwt_services();
$pwt_explore  = pwt_explore_links();
$pwt_legal    = pwt_legal_links();
?>
	</main>

	<footer class="mt-24 border-t border-border bg-card">
		<div class="container-page grid gap-12 py-16 md:grid-cols-2 lg:grid-cols-4">
			<div>
				<?php pwt_logo(); ?>
				<p class="mt-4 max-w-xs text-sm leading-relaxed text-muted-foreground"><?php echo esc_html( $pwt_company['tagline'] ); ?> <?php esc_html_e( 'Veterinary-governed AI for health monitoring, behaviour, training, daily care and safety.', 'pawlogictech' ); ?></p>
				<address class="mt-6 space-y-1 text-sm not-italic text-muted-foreground">
					<p><?php echo esc_html( $pwt_company['address']['street'] ); ?></p>
					<p><?php echo esc_html( $pwt_company['address']['city'] . ' ' . $pwt_company['address']['postcode'] . ', ' . $pwt_company['address']['country'] ); ?></p>
					<p><a class="hover:text-accent" href="<?php echo esc_url( 'mailto:' . $pwt_company['email'] ); ?>"><?php echo esc_html( $pwt_company['email'] ); ?></a></p>
					<p><a class="hover:text-accent" href="<?php echo esc_url( 'tel:' . preg_replace( '/\s/', '', $pwt_company['phone'] ) ); ?>"><?php echo esc_html( $pwt_company['phone'] ); ?></a></p>
				</address>
			</div>

			<nav aria-label="<?php esc_attr_e( 'Services', 'pawlogictech' ); ?>">
				<h2 class="text-sm font-semibold uppercase tracking-widest text-muted-foreground"><?php esc_html_e( 'Services', 'pawlogictech' ); ?></h2>
				<?php
				if ( has_nav_menu( 'footer_services' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer_services',
							'container'      => false,
							'depth'          => 1,
							'menu_class'     => 'mt-4 space-y-2.5 text-sm',
							'walker'         => new PWT_Footer_Nav_Walker(),
						)
					);
				} else {
					?>
					<ul class="mt-4 space-y-2.5 text-sm">
						<?php foreach ( $pwt_services as $pwt_service ) : ?>
							<li><a class="transition-colors hover:text-accent" href="<?php echo esc_url( home_url( '/services/' . $pwt_service['slug'] . '/' ) ); ?>"><?php echo esc_html( $pwt_service['name'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
					<?php
				}
				?>
			</nav>

			<nav aria-label="<?php esc_attr_e( 'Explore', 'pawlogictech' ); ?>">
				<h2 class="text-sm font-semibold uppercase tracking-widest text-muted-foreground"><?php esc_html_e( 'Explore', 'pawlogictech' ); ?></h2>
				<?php
				if ( has_nav_menu( 'footer_explore' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer_explore',
							'container'      => false,
							'depth'          => 1,
							'menu_class'     => 'mt-4 space-y-2.5 text-sm',
							'walker'         => new PWT_Footer_Nav_Walker(),
						)
					);
				} else {
					?>
					<ul class="mt-4 space-y-2.5 text-sm">
						<?php foreach ( $pwt_explore as $pwt_link ) : ?>
							<li><a class="transition-colors hover:text-accent" href="<?php echo esc_url( home_url( $pwt_link['path'] ) ); ?>"><?php echo esc_html( $pwt_link['label'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
					<?php
				}
				?>
			</nav>

			<nav aria-label="<?php esc_attr_e( 'Legal', 'pawlogictech' ); ?>">
				<h2 class="text-sm font-semibold uppercase tracking-widest text-muted-foreground"><?php esc_html_e( 'Legal', 'pawlogictech' ); ?></h2>
				<?php
				if ( has_nav_menu( 'footer_legal' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer_legal',
							'container'      => false,
							'depth'          => 1,
							'menu_class'     => 'mt-4 space-y-2.5 text-sm',
							'walker'         => new PWT_Footer_Nav_Walker(),
						)
					);
				} else {
					?>
					<ul class="mt-4 space-y-2.5 text-sm">
						<?php foreach ( $pwt_legal as $pwt_link ) : ?>
							<li><a class="transition-colors hover:text-accent" href="<?php echo esc_url( home_url( $pwt_link['path'] ) ); ?>"><?php echo esc_html( $pwt_link['label'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
					<?php
				}
				?>
				<p class="mt-6 text-sm text-muted-foreground"><?php echo esc_html( $pwt_company['hours'] ); ?></p>
			</nav>
		</div>

		<div class="border-t border-border">
			<div class="container-page flex flex-col gap-2 py-6 text-xs text-muted-foreground sm:flex-row sm:items-center sm:justify-between">
				<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( $pwt_company['legal'] ); ?>. <?php esc_html_e( 'All rights reserved.', 'pawlogictech' ); ?></p>
				<p><?php esc_html_e( 'PawlogicTech supports veterinary care. It does not replace professional diagnosis or treatment.', 'pawlogictech' ); ?></p>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
