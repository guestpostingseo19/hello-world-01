import { createFileRoute, Link, notFound } from "@tanstack/react-router";
import { getService, getSub, type Service, type SubService } from "@/data/services";
import { images } from "@/components/site/images";
import {
  Card,
  CtaBand,
  FaqList,
  PageHero,
  Section,
  SectionHeading,
  breadcrumbSchema,
  faqSchema,
} from "@/components/site/ui";

export const Route = createFileRoute("/services/$service/$sub")({
  loader: ({ params }): { service: Service; sub: SubService } => {
    const service = getService(params.service);
    const sub = getSub(service, params.sub);
    if (!service || !sub) throw notFound();
    return { service, sub };
  },
  head: ({ params, loaderData }) => {
    if (!loaderData) {
      return { meta: [{ title: "Service unavailable | PawlogicTech" }, { name: "robots", content: "noindex" }] };
    }
    const { service, sub } = loaderData;
    const url = `/services/${params.service}/${params.sub}`;
    return {
      meta: [
        { title: sub.title },
        { name: "description", content: sub.description },
        { property: "og:title", content: sub.title },
        { property: "og:description", content: sub.description },
        { property: "og:type", content: "website" },
        { property: "og:url", content: url },
        { name: "twitter:title", content: sub.title },
        { name: "twitter:description", content: sub.description },
      ],
      links: [{ rel: "canonical", href: url }],
      scripts: [
        {
          type: "application/ld+json",
          children: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Service",
            name: sub.name,
            serviceType: sub.keyword,
            description: sub.description,
            provider: { "@type": "Organization", name: "PawlogicTech", "@id": "/#organization" },
            isPartOf: { "@type": "Service", name: service.name, url: `/services/${service.slug}` },
          }),
        },
        { type: "application/ld+json", children: JSON.stringify(faqSchema(sub.faqs)) },
        {
          type: "application/ld+json",
          children: JSON.stringify(
            breadcrumbSchema([
              { name: "Home", item: "/" },
              { name: "Services", item: "/services" },
              { name: service.name, item: `/services/${service.slug}` },
              { name: sub.name, item: url },
            ]),
          ),
        },
      ],
    };
  },
  component: SubServicePage,
});

function SubServicePage() {
  const params = Route.useParams();
  const service = getService(params.service) as Service;
  const sub = getSub(service, params.sub) as SubService;
  const siblings = service.subs.filter((x) => x.slug !== sub.slug);

  return (
    <>
      <PageHero
        eyebrow={service.name}
        title={sub.name}
        lead={sub.tagline}
        trail={[
          { label: "Home", to: "/" },
          { label: "Services", to: "/services" },
          { label: service.name, to: "/services/$service", params: { service: service.slug } },
          { label: sub.name },
        ]}
      >
        <div className="mt-9">
          <Link
            to="/contact"
            className="inline-flex items-center rounded-full bg-accent px-6 py-3 text-sm font-semibold text-accent-foreground transition-transform duration-200 hover:-translate-y-0.5"
          >
            Talk to a specialist
          </Link>
        </div>
      </PageHero>

      <Section>
        <div className="grid gap-12 lg:grid-cols-[0.85fr_1.15fr]">
          <SectionHeading eyebrow="Overview" title={`Why ${sub.name.toLowerCase()} matters`} />
          <div className="space-y-5 text-lg leading-relaxed text-muted-foreground">
            {sub.intro.map((p) => (
              <p key={p.slice(0, 24)}>{p}</p>
            ))}
          </div>
        </div>
      </Section>

      <Section tone="card">
        <SectionHeading eyebrow="Capabilities" title="What this includes" />
        <ul className="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {sub.capabilities.map((c) => (
            <li key={c.name}>
              <Card className="h-full">
                <h3 className="text-lg">{c.name}</h3>
                <p className="mt-3 leading-relaxed text-muted-foreground">{c.text}</p>
              </Card>
            </li>
          ))}
        </ul>
      </Section>

      <Section tone="ink">
        <div className="grid gap-12 lg:grid-cols-2 lg:items-center">
          <div>
            <p className="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-accent">Outcomes</p>
            <h2 className="text-3xl leading-tight sm:text-4xl">What owners typically see</h2>
            <ul className="mt-8 space-y-4">
              {sub.outcomes.map((o) => (
                <li key={o} className="flex gap-3 text-lg leading-relaxed text-primary-foreground/85">
                  <span aria-hidden="true" className="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent" />
                  {o}
                </li>
              ))}
            </ul>
          </div>
          <img
            src={images.sensor.src}
            width={images.sensor.width}
            height={images.sensor.height}
            loading="lazy"
            decoding="async"
            alt={`PawlogicTech hardware used for ${sub.name.toLowerCase()}`}
            className="w-full rounded-3xl object-cover shadow-lift"
          />
        </div>
      </Section>

      <Section>
        <div className="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
          <SectionHeading eyebrow="FAQ" title={`${sub.name} questions`} />
          <FaqList faqs={sub.faqs} />
        </div>
      </Section>

      <Section tone="card">
        <SectionHeading
          eyebrow="Related"
          title={`More within ${service.name}`}
          lead="These capabilities share the same sensors and the same record."
        />
        <ul className="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          {siblings.map((x) => (
            <li key={x.slug}>
              <Link to="/services/$service/$sub" params={{ service: service.slug, sub: x.slug }}>
                <Card className="h-full">
                  <h3 className="text-lg">{x.name}</h3>
                  <p className="mt-2 text-sm leading-relaxed text-muted-foreground">{x.tagline}</p>
                </Card>
              </Link>
            </li>
          ))}
        </ul>
        <Link
          to="/services/$service"
          params={{ service: service.slug }}
          className="mt-10 inline-flex items-center gap-2 text-sm font-semibold text-accent"
        >
          Back to {service.name} <span aria-hidden="true">→</span>
        </Link>
      </Section>

      <CtaBand
        title={`Put ${sub.name} to work for your animal`}
        lead="Book a consultation and we will tell you honestly whether this is the right starting point for your household."
      />
    </>
  );
}
