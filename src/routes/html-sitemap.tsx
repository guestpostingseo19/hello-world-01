import { createFileRoute, Link } from "@tanstack/react-router";
import { services } from "@/data/services";
import { posts } from "@/data/blog";
import { PageHero, Section, SectionHeading } from "@/components/site/ui";

const title = "HTML Sitemap | Every PawlogicTech Page";
const description =
  "A complete index of PawlogicTech pages: services, sub-services, articles, company pages and legal documentation.";

export const Route = createFileRoute("/html-sitemap")({
  head: () => ({
    meta: [
      { title },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/html-sitemap" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/html-sitemap" }],
  }),
  component: HtmlSitemap,
});

function HtmlSitemap() {
  return (
    <>
      <PageHero
        eyebrow="Index"
        title="HTML sitemap"
        lead="Every page on this website, in one place."
        trail={[{ label: "Home", to: "/" }, { label: "HTML sitemap" }]}
      />

      <Section>
        <SectionHeading eyebrow="Company" title="Main pages" />
        <ul className="mt-8 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
          {[
            ["/", "Home"],
            ["/about", "About"],
            ["/services", "Services"],
            ["/blog", "Blog"],
            ["/faq", "FAQ"],
            ["/gallery", "Gallery"],
            ["/testimonials", "Testimonials"],
            ["/contact", "Contact"],
          ].map(([to, label]) => (
            <li key={to}>
              <Link to={to} className="text-accent hover:underline">
                {label}
              </Link>
            </li>
          ))}
        </ul>
      </Section>

      <Section tone="card">
        <SectionHeading eyebrow="Services" title="Services and sub-services" />
        <div className="mt-8 grid gap-10 md:grid-cols-2 lg:grid-cols-3">
          {services.map((s) => (
            <div key={s.slug}>
              <h3 className="text-lg">
                <Link
                  to="/services/$service"
                  params={{ service: s.slug }}
                  className="text-accent hover:underline"
                >
                  {s.name}
                </Link>
              </h3>
              <ul className="mt-3 space-y-2 text-sm text-muted-foreground">
                {s.subs.map((sub) => (
                  <li key={sub.slug}>
                    <Link
                      to="/services/$service/$sub"
                      params={{ service: s.slug, sub: sub.slug }}
                      className="hover:text-accent hover:underline"
                    >
                      {sub.name}
                    </Link>
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>
      </Section>

      <Section>
        <SectionHeading eyebrow="Insights" title="Articles" />
        <ul className="mt-8 grid gap-3 sm:grid-cols-2">
          {posts.map((p) => (
            <li key={p.slug}>
              <Link
                to="/blog/$slug"
                params={{ slug: p.slug }}
                className="text-accent hover:underline"
              >
                {p.title}
              </Link>
            </li>
          ))}
        </ul>
      </Section>

      <Section tone="card">
        <SectionHeading eyebrow="Legal" title="Policies" />
        <ul className="mt-8 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
          {[
            ["/privacy-policy", "Privacy Policy"],
            ["/terms-and-conditions", "Terms & Conditions"],
            ["/cookie-policy", "Cookie Policy"],
            ["/disclaimer", "Disclaimer"],
          ].map(([to, label]) => (
            <li key={to}>
              <Link to={to} className="text-accent hover:underline">
                {label}
              </Link>
            </li>
          ))}
        </ul>
      </Section>
    </>
  );
}
