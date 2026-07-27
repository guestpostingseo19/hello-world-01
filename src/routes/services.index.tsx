import { createFileRoute, Link } from "@tanstack/react-router";
import { services } from "@/data/services";
import { images } from "@/components/site/images";
import {
  Card,
  CtaBand,
  PageHero,
  Section,
  SectionHeading,
  breadcrumbSchema,
} from "@/components/site/ui";

const title = "AI Pet Care Services | Health, Behaviour, Training & Safety";
const description =
  "Explore PawlogicTech services: AI pet health monitoring, behaviour analysis, adaptive training, smart pet care and AI pet safety, with 25 specialist sub-services.";

export const Route = createFileRoute("/services/")({
  head: () => ({
    meta: [
      { title: `${title} | PawlogicTech` },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/services" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/services" }],
    scripts: [
      {
        type: "application/ld+json",
        children: JSON.stringify(
          breadcrumbSchema([
            { name: "Home", item: "/" },
            { name: "Services", item: "/services" },
          ]),
        ),
      },
      {
        type: "application/ld+json",
        children: JSON.stringify({
          "@context": "https://schema.org",
          "@type": "ItemList",
          name: "PawlogicTech AI pet care services",
          itemListElement: services.map((s, i) => ({
            "@type": "ListItem",
            position: i + 1,
            name: s.name,
            url: `/services/${s.slug}`,
          })),
        }),
      },
    ],
  }),
  component: ServicesHub,
});

function ServicesHub() {
  return (
    <>
      <PageHero
        eyebrow="Services"
        title="Five AI services that turn pet care into something you can measure"
        lead="Health monitoring, behaviour analysis, training, smart daily care and safety. Each one is complete on its own, and every one writes to the same record."
        trail={[{ label: "Home", to: "/" }, { label: "Services" }]}
      />

      <Section>
        <div className="space-y-20">
          {services.map((s, i) => (
            <article key={s.slug} className="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
              <div className={i % 2 === 1 ? "lg:order-2" : ""}>
                <p className="font-display text-sm text-accent">Service 0{i + 1}</p>
                <h2 className="mt-3 text-3xl leading-tight sm:text-4xl">
                  <Link to="/services/$service" params={{ service: s.slug }} className="hover:text-accent">
                    {s.name}
                  </Link>
                </h2>
                <p className="mt-4 text-lg leading-relaxed text-muted-foreground">{s.intro[0]}</p>
                <Link
                  to="/services/$service"
                  params={{ service: s.slug }}
                  className="mt-7 inline-flex items-center rounded-full bg-primary px-6 py-3 text-sm font-semibold text-primary-foreground transition-transform duration-200 hover:-translate-y-0.5"
                >
                  Explore {s.name}
                </Link>
              </div>
              <ul className={`grid gap-4 sm:grid-cols-2 ${i % 2 === 1 ? "lg:order-1" : ""}`}>
                {s.subs.map((sub) => (
                  <li key={sub.slug}>
                    <Link to="/services/$service/$sub" params={{ service: s.slug, sub: sub.slug }}>
                      <Card className="h-full">
                        <h3 className="text-lg">{sub.name}</h3>
                        <p className="mt-2 text-sm leading-relaxed text-muted-foreground">
                          {sub.tagline}
                        </p>
                      </Card>
                    </Link>
                  </li>
                ))}
              </ul>
            </article>
          ))}
        </div>
      </Section>

      <Section tone="card">
        <div className="grid gap-12 lg:grid-cols-2 lg:items-center">
          <div>
            <SectionHeading
              eyebrow="Choosing a service"
              title="Not sure where to start? Most households begin in one of three places."
            />
            <dl className="mt-8 space-y-6">
              {[
                { h: "A senior animal", t: "Start with AI Pet Health Monitoring. Small physiological changes carry the most weight in animals over seven, and this is where early detection pays for itself fastest." },
                { h: "A behavioural problem", t: "Start with AI Behavior Analysis. Two to three weeks of observation will usually identify triggers that months of guesswork has not." },
                { h: "An escape risk", t: "Start with AI Pet Safety. If your animal has ever got out, the recovery clock is the only variable that genuinely matters." },
              ].map((x) => (
                <div key={x.h} className="rule-accent">
                  <dt className="font-display text-xl">{x.h}</dt>
                  <dd className="mt-1.5 leading-relaxed text-muted-foreground">{x.t}</dd>
                </div>
              ))}
            </dl>
          </div>
          <img
            src={images.cat.src}
            width={images.cat.width}
            height={images.cat.height}
            loading="lazy"
            decoding="async"
            alt="Indoor tabby cat resting beside a discreet PawlogicTech home sensor"
            className="w-full rounded-3xl object-cover shadow-lift"
          />
        </div>
      </Section>

      <CtaBand
        title="Tell us about your animal and we will tell you what you actually need"
        lead="Consultations are free, and we regularly recommend less hardware than people expect to buy."
      />
    </>
  );
}
