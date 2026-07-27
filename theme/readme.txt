=== PawlogicTech ===

Contributors: pawlogictech
Requires at least: 6.2
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Premium WordPress theme for PawlogicTech, an AI-powered pet technology company.
A faithful conversion of the PawlogicTech corporate website.

== Description ==

PawlogicTech ships every page of the original site as a WordPress template:

* Homepage with hero, brand introduction, featured services, AI technology,
  how it works, why PawlogicTech, benefits, industries served, statistics,
  testimonials, featured articles, FAQ, newsletter and closing CTA
* Services hub, 5 service pages and 25 sub-service pages
* Blog index, single post template, category/tag archives and search
* About, FAQ, Gallery, Testimonials, Contact and HTML sitemap
* Privacy Policy, Terms & Conditions, Cookie Policy and Disclaimer
* 404 page

Styling comes from the original compiled stylesheet (assets/css/theme.css) so the
WordPress site is visually identical to the source website. Interactivity (mobile
menu, services dropdown) is plain vanilla JavaScript in assets/js/main.js.

== Installation ==

1. Upload the `theme` folder to `wp-content/themes/pawlogictech` (rename it to
   `pawlogictech`), or upload a ZIP of it via Appearance > Themes > Add New.
2. Activate the theme. On activation it automatically:
   * creates the full page tree (services, sub-services, legal, utility pages),
   * publishes the six original blog posts with their metadata and FAQs,
   * builds the primary and footer menus,
   * sets the static front page and the Blog posts page,
   * sets permalinks to /blog/%postname%/ if no structure is set yet.
3. Visit Settings > Permalinks once and click Save to flush rewrite rules.

Nothing is overwritten: existing pages, posts and menus with the same slugs are
left untouched.

== Theme features ==

* Template hierarchy: front-page.php, page-{slug}.php for every converted page,
  home.php, single.php, archive.php, search.php, 404.php, comments.php.
* Menus: Primary, Footer Services, Footer Explore, Footer Legal.
* Widget area: Blog Sidebar.
* Custom logo support, editor styles, wide/full alignments, HTML5 markup.
* Custom image sizes: pwt-card, pwt-wide, pwt-portrait.
* Customizer: contact email, phone, opening hours and enquiry recipient under
  "PawlogicTech Contact Details".
* Contact page: nonce-protected native form with honeypot spam trap, sending via
  wp_mail(). Set a shortcode in the Customizer (pwt_contact_shortcode) to use
  Contact Form 7, WPForms or Gravity Forms instead.
* SEO: original titles, meta descriptions, Open Graph, Twitter cards, canonical
  URLs and JSON-LD (Organization, WebSite, breadcrumbs, FAQ, service and article
  schema) are reproduced per URL. If Yoast, Rank Math, AIOSEO or SEOPress is
  active, the theme defers to the plugin.
* Accessibility: skip link, landmarks, aria-expanded menus, visible focus rings,
  reduced-motion support.
* Performance: lazy loading and async decoding on images, WebP artwork, a single
  stylesheet and a single small script.

== Changelog ==

= 1.0.0 =
* Initial release: complete conversion of the PawlogicTech website.

== Copyright ==

Fonts: Fraunces and Manrope, SIL Open Font License 1.1.
Photography in assets/images is licensed for use with this theme.
