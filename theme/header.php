<?php
/**
 * Document head, header and site navigation.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

$pwt_services = pwt_services();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="flex min-h-screen flex-col">
	<header class="sticky top-0 z-50 border-b border-border/70 bg-background/85 backdrop-blur-md">
		<a class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-3 focus:z-50 focus:rounded-md focus:bg-primary focus:px-4 focus:py-2 focus:text-primary-foreground" href="#main"><?php esc_html_e( 'Skip to content', 'pawlogictech' ); ?></a>
		<div class="container-page flex h-18 items-center justify-between gap-6 py-3">
			<a aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> <?php esc_attr_e( 'home', 'pawlogictech' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php pwt_logo(); ?>
			</a>

			<nav aria-label="<?php esc_attr_e( 'Primary', 'pawlogictech' ); ?>" class="hidden items-center gap-1 lg:flex">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'depth'          => 1,
						'echo'           => true,
						'walker'         => new PWT_Desktop_Nav_Walker(),
						'fallback_cb'    => 'pwt_default_desktop_nav',
					)
				);
				?>
				<a class="ml-3 inline-flex items-center rounded-full bg-accent px-5 py-2.5 text-sm font-semibold text-accent-foreground shadow-soft transition-transform duration-200 hover:-translate-y-0.5" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Book a consultation', 'pawlogictech' ); ?></a>
			</nav>

			<button aria-controls="mobile-nav" aria-expanded="false" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-border lg:hidden" type="button" data-pwt-menu-toggle>
				<span class="sr-only" data-pwt-menu-label><?php esc_html_e( 'Open menu', 'pawlogictech' ); ?></span>
				<svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
					<path d="M4 7h16M4 12h16M4 17h16" data-pwt-menu-icon-closed></path>
					<path d="M6 6l12 12M18 6L6 18" data-pwt-menu-icon-open hidden></path>
				</svg>
			</button>
		</div>

		<nav id="mobile-nav" aria-label="<?php esc_attr_e( 'Mobile', 'pawlogictech' ); ?>" class="border-t border-border bg-card lg:hidden" hidden>
			<ul class="container-page flex flex-col py-3">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'depth'          => 1,
						'walker'         => new PWT_Mobile_Nav_Walker(),
						'fallback_cb'    => 'pwt_default_mobile_nav',
					)
				);
				?>
				<?php foreach ( $pwt_services as $pwt_service ) : ?>
					<li>
						<a class="block border-b border-border/40 py-2.5 pl-4 text-sm text-muted-foreground" href="<?php echo esc_url( home_url( '/services/' . $pwt_service['slug'] . '/' ) ); ?>"><?php echo esc_html( $pwt_service['name'] ); ?></a>
					</li>
				<?php endforeach; ?>
				<li class="pt-4">
					<a class="block rounded-full bg-accent px-5 py-3 text-center text-sm font-semibold text-accent-foreground" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Book a consultation', 'pawlogictech' ); ?></a>
				</li>
			</ul>
		</nav>
	</header>

	<main id="main" class="flex-1">
