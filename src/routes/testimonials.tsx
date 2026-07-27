import { createFileRoute } from "@tanstack/react-router";
import { testimonials, stats } from "@/data/site";
import { CtaBand, PageHero, Section, SectionHeading, breadcrumbSchema } from "@/components/site/ui";

const title = "Testimonials | What Owners, Vets & Facilities Say";
const description =
  "Real accounts from pet owners, veterinary surgeons and boarding facilities using PawlogicTech health monitoring, behaviour analysis and safety systems.";

export const Route = createFileRoute("/testimonials")({
  head: () => ({
    meta: [
      { title: `${title} | PawlogicTech` },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/testimonials" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/testimonials" }],
    scripts: [
      {
        type: "application/ld+json",
        children: JSON.stringify({
          "@context": "https://schema.org",
          "@type": "ItemList",
          name: "PawlogicTech client testimonials",
          itemListElement: testimonials.map((t, i) => ({
            "@type": "ListItem",
            position: i + 1,
            item: {
              "@type": "Review",
              reviewBody: t.quote,
              author: { "@type": "Person", name: t.name },
              itemReviewed: { "@type": "Organization", name: "PawlogicTech", "@id": "/#organization" },
            },
          })),
        }),
      },
      {
        type: "application/ld+json",
        children: JSON.stringify(
          breadcrumbSchema([
            { name: "Home", item: "/" },
            { name: "Testimonials", item: "/testimonials" },
          ]),
        ),
      },
    ],
  }),
  component: Testimonials,
});

function Testimonials() {
  return (
    <>
      <PageHero
        eyebrow="Client stories"
        title="Testimonials"
        lead="Accounts from the households, clinics and facilities that use the platform daily. Published with permission, and edited only for length."
        trail={[{ label: "Home", to: "/" }, { label: "Testimonials" }]}
      />

      <Section>
        <ul className="grid gap-6 md:grid-cols-2">
          {testimonials.map((t) => (
            <li key={t.name}>
              <figure className="flex h-full flex-col rounded-3xl border border-border bg-card p-8">
                <blockquote className="flex-1 text-lg leading-relaxed">“{t.quote}”</blockquote>
                <figcaption className="mt-6 border-t border-border pt-5 text-sm">
                  <span className="block font-semibold">{t.name}</span>
                  <span className="block text-muted-foreground">{t.role}</span>
                  <span className="block text-muted-foreground">{t.location}</span>
                </figcaption>
              </figure>
            </li>
          ))}
        </ul>
      </Section>

      <Section tone="ink">
        <SectionHeading eyebrow="By the numbers" title="The platform behind the stories" />
        <div className="mt-12 grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
          {stats.map((s) => (
            <div key={s.label}>
              <p className="font-display text-4xl text-accent">{s.value}</p>
              <p className="mt-3 text-sm leading-relaxed text-primary-foreground/70">{s.label}</p>
            </div>
          ))}
        </div>
      </Section>

      <CtaBand />
    </>
  );
}
