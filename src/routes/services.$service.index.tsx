import { createFileRoute, Link, notFound } from "@tanstack/react-router";
import { getService, services, type Service } from "@/data/services";
import { posts } from "@/data/blog";
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

export const Route = createFileRoute("/services/$service/")({
  loader: ({ params }): { service: Service } => {
    const service = getService(params.service);
    if (!service) throw notFound();
    return { service };
  },
  head: ({ params, loaderData }) => {
    if (!loaderData) {
      return { meta: [{ title: "Service unavailable | PawlogicTech" }, { name: "robots", content: "noindex" }] };
    }
    const s = loaderData.service;
    const url = `/services/${params.service}`;
    return {
      meta: [
        { title: s.title },
        { name: "description", content: s.description },
        { property: "og:title", content: s.title },
        { property: "og:description", content: s.description },
        { property: "og:type", content: "website" },
        { property: "og:url", content: url },
        { name: "twitter:title", content: s.title },
        { name: "twitter:description", content: s.description },
      ],
      links: [{ rel: "canonical", href: url }],
      scripts: [
        {
          type: "application/ld+json",
          children: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Service",
            name: s.name,
            serviceType: s.keyword,
            description: s.description,
            provider: { "@type": "Organization", name: "PawlogicTech", "@id": "/#organization" },
            areaServed: ["United Kingdom", "Ireland", "European Union"],
            hasOfferCatalog: {
              "@type": "OfferCatalog",
              name: `${s.name} sub-services`,
              itemListElement: s.subs.map((sub) => ({
                "@type": "Offer",
                itemOffered: { "@type": "Service", name: sub.name, url: `${url}/${sub.slug}` },
              })),
            },
          }),
        },
        { type: "application/ld+json", children: JSON.stringify(faqSchema(s.faqs)) },
        {
          type: "application/ld+json",
          children: JSON.stringify(
            breadcrumbSchema([
              { name: "Home", item: "/" },
              { name: "Services", item: "/services" },
              { name: s.name, item: url },
            ]),
          ),
        },
      ],
    };
  },
  component: ServicePage,
});

function ServicePage() {
  const { service: s } = Route.useLoaderData();
  const related = services.filter((x) => x.slug !== s.slug).slice(0, 3);
  const relatedPosts = posts.slice(0, 3);

  return (
    <>
      <PageHero
        eyebrow={s.name}
        title={s.hero}
        lead={s.short}
        trail={[
          { label: "Home", to: "/" },
          { label: "Services", to: "/services" },
          { label: s.name },
        ]}
      >
        <div className="mt-9 flex flex-wrap gap-3">
          <Link
            to="/contact"
            className="inline-flex items-center rounded-full bg-accent px-6 py-3 text-sm font-semibold text-accent-foreground transition-transform duration-200 hover:-translate-y-0.5"
          >
            Book a consultation
          </Link>
          <a
            href="#faq"
            className="inline-flex items-center rounded-full border border-border px-6 py-3 text-sm font-semibold transition-colors hover:border-accent hover:text-accent"
          >
            Read the FAQ
          </a>
        </div>
      </PageHero>

      {/* Introduction */}
      <Section>
        <div className="grid gap-12 lg:grid-cols-[0.85fr_1.15fr]">
          <SectionHeading eyebrow="Introduction" title={`Understanding ${s.name.toLowerCase()}`} />
          <div className="space-y-5 text-lg leading-relaxed text-muted-foreground">
            {s.intro.map((p) => (
              <p key={p.slice(0, 24)}>{p}</p>
            ))}
          </div>
        </div>
      </Section>

      {/* Problem / solution */}
      <Section tone="card">
        <div className="grid gap-10 lg:grid-cols-2">
          <div className="rounded-3xl border border-border bg-background p-8 sm:p-10">
            <p className="text-xs font-semibold uppercase tracking-[0.2em] text-muted-foreground">
              The problem
            </p>
            <h2 className="mt-4 text-2xl leading-snug sm:text-3xl">{s.problem.heading}</h2>
            <p className="mt-4 leading-relaxed text-muted-foreground">{s.problem.body}</p>
            <ul className="mt-6 space-y-3">
              {s.problem.points.map((p) => (
                <li key={p} className="flex gap-3 leading-relaxed text-muted-foreground">
                  <span aria-hidden="true" className="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-muted-foreground" />
                  {p}
                </li>
              ))}
            </ul>
          </div>
          <div className="rounded-3xl bg-primary p-8 text-primary-foreground sm:p-10">
            <p className="text-xs font-semibold uppercase tracking-[0.2em] text-accent">Our solution</p>
            <h2 className="mt-4 text-2xl leading-snug sm:text-3xl">{s.solution.heading}</h2>
            <p className="mt-4 leading-relaxed text-primary-foreground/75">{s.solution.body}</p>
            <ul className="mt-6 space-y-3">
              {s.solution.points.map((p) => (
                <li key={p} className="flex gap-3 leading-relaxed text-primary-foreground/85">
                  <span aria-hidden="true" className="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent" />
                  {p}
                </li>
              ))}
            </ul>
          </div>
        </div>
      </Section>

      {/* Benefits */}
      <Section>
        <SectionHeading eyebrow="Benefits" title="What you get out of it" />
        <div className="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          {s.benefits.map((b) => (
            <Card key={b.name}>
              <h3 className="text-xl">{b.name}</h3>
              <p className="mt-3 leading-relaxed text-muted-foreground">{b.text}</p>
            </Card>
          ))}
        </div>
      </Section>

      {/* Features */}
      <Section tone="sage">
        <div className="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
          <SectionHeading eyebrow="Features" title="Everything included as standard" />
          <dl className="grid gap-x-10 gap-y-8 sm:grid-cols-2">
            {s.features.map((f) => (
              <div key={f.name}>
                <dt className="font-display text-lg">{f.name}</dt>
                <dd className="mt-2 leading-relaxed text-sage-foreground/80">{f.text}</dd>
              </div>
            ))}
          </dl>
        </div>
      </Section>

      {/* How it works */}
      <Section>
        <SectionHeading eyebrow="How it works" title="Four steps from setup to insight" />
        <ol className="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
          {s.steps.map((st, i) => (
            <li key={st.name} className="rounded-3xl border border-border bg-card p-7">
              <span className="font-display text-3xl text-sage">0{i + 1}</span>
              <h3 className="mt-4 text-xl">{st.name}</h3>
              <p className="mt-2 leading-relaxed text-muted-foreground">{st.text}</p>
            </li>
          ))}
        </ol>
      </Section>

      {/* Sub-services */}
      <Section tone="card">
        <SectionHeading
          eyebrow="Specialisms"
          title={`Inside ${s.name}`}
          lead="Five focused capabilities. Explore whichever matches the problem you are trying to solve."
        />
        <ul className="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {s.subs.map((sub) => (
            <li key={sub.slug}>
              <Link to="/services/$service/$sub" params={{ service: s.slug, sub: sub.slug }}>
                <Card className="h-full">
                  <h3 className="text-xl">{sub.name}</h3>
                  <p className="mt-3 leading-relaxed text-muted-foreground">{sub.tagline}</p>
                  <span className="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-accent">
                    Learn more <span aria-hidden="true">→</span>
                  </span>
                </Card>
              </Link>
            </li>
          ))}
        </ul>
      </Section>

      {/* Who needs this */}
      <Section>
        <div className="grid gap-12 lg:grid-cols-2 lg:items-center">
          <div>
            <SectionHeading eyebrow="Who needs this" title="Households and organisations this is built for" />
            <dl className="mt-8 space-y-6">
              {s.audience.map((a) => (
                <div key={a.name} className="rule-accent">
                  <dt className="font-display text-xl">{a.name}</dt>
                  <dd className="mt-1.5 leading-relaxed text-muted-foreground">{a.text}</dd>
                </div>
              ))}
            </dl>
          </div>
          <img
            src={images.vet.src}
            width={images.vet.width}
            height={images.vet.height}
            loading="lazy"
            decoding="async"
            alt={`Veterinary professional reviewing ${s.name.toLowerCase()} data for a patient`}
            className="w-full rounded-3xl object-cover shadow-lift"
          />
        </div>
      </Section>

      {/* Why choose us */}
      <Section tone="ink">
        <div className="max-w-3xl">
          <p className="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-accent">
            Why PawlogicTech
          </p>
          <h2 className="text-3xl leading-tight sm:text-4xl">
            Clinically governed, privacy-first, and deliberately quiet
          </h2>
          <p className="mt-5 text-lg leading-relaxed text-primary-foreground/75">
            Every threshold in {s.name} is reviewed by our veterinary advisory panel before release. We
            tune for clinical usefulness rather than notification volume, we compare your animal only
            against itself, and we never sell your data. Everything exports, because the record belongs
            to you and should follow your animal wherever it goes.
          </p>
        </div>
      </Section>

      {/* FAQ */}
      <Section id="faq">
        <div className="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
          <SectionHeading eyebrow="FAQ" title={`${s.name} questions, answered`} />
          <FaqList faqs={s.faqs} />
        </div>
      </Section>

      {/* Related services */}
      <Section tone="card">
        <SectionHeading eyebrow="Related services" title="Services that pair well with this one" />
        <ul className="mt-12 grid gap-6 md:grid-cols-3">
          {related.map((r) => (
            <li key={r.slug}>
              <Link to="/services/$service" params={{ service: r.slug }}>
                <Card className="h-full">
                  <h3 className="text-xl">{r.name}</h3>
                  <p className="mt-3 leading-relaxed text-muted-foreground">{r.short}</p>
                </Card>
              </Link>
            </li>
          ))}
        </ul>
      </Section>

      {/* Related articles */}
      <Section>
        <SectionHeading eyebrow="Further reading" title="Articles from our veterinary and behavioural team" />
        <ul className="mt-12 grid gap-8 md:grid-cols-3">
          {relatedPosts.map((p) => (
            <li key={p.slug}>
              <article>
                <p className="text-xs font-semibold uppercase tracking-widest text-accent">
                  {p.category} · {p.readingTime} min read
                </p>
                <h3 className="mt-3 text-xl leading-snug">
                  <Link to="/blog/$slug" params={{ slug: p.slug }} className="hover:text-accent">
                    {p.title}
                  </Link>
                </h3>
                <p className="mt-2 leading-relaxed text-muted-foreground">{p.excerpt}</p>
              </article>
            </li>
          ))}
        </ul>
      </Section>

      <CtaBand
        title={`Ready to put ${s.name} to work?`}
        lead="A short consultation tells us your animal, your household and your goal. We will recommend the smallest configuration that solves it."
      />
    </>
  );
}
