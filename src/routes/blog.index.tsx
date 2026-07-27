import { createFileRoute, Link } from "@tanstack/react-router";
import { posts } from "@/data/blog";
import { images } from "@/components/site/images";
import { CtaBand, PageHero, Section, breadcrumbSchema } from "@/components/site/ui";

const title = "Blog | Evidence-Led Pet Health, Behaviour & Safety Writing";
const description =
  "The PawlogicTech blog: practical, evidence-led articles on pet health monitoring, behaviour, nutrition and safety, written by our veterinary and behavioural team.";

export const Route = createFileRoute("/blog/")({
  head: () => ({
    meta: [
      { title: `${title} | PawlogicTech` },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/blog" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/blog" }],
    scripts: [
      {
        type: "application/ld+json",
        children: JSON.stringify(
          breadcrumbSchema([
            { name: "Home", item: "/" },
            { name: "Blog", item: "/blog" },
          ]),
        ),
      },
      {
        type: "application/ld+json",
        children: JSON.stringify({
          "@context": "https://schema.org",
          "@type": "Blog",
          name: "PawlogicTech Blog",
          description,
          blogPost: posts.map((p) => ({
            "@type": "BlogPosting",
            headline: p.title,
            datePublished: p.date,
            author: { "@type": "Person", name: p.author },
            url: `/blog/${p.slug}`,
          })),
        }),
      },
    ],
  }),
  component: BlogIndex,
});

function BlogIndex() {
  const [lead, ...rest] = posts;
  return (
    <>
      <PageHero
        eyebrow="Journal"
        title="Blog"
        lead="Writing from our veterinary surgeons, behaviourists and engineers. Long enough to be useful, specific enough to act on, and never written to sell you hardware."
        trail={[{ label: "Home", to: "/" }, { label: "Blog" }]}
      />

      <Section>
        <article className="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
          <Link to="/blog/$slug" params={{ slug: lead.slug }} className="group overflow-hidden rounded-3xl">
            <img
              src={images[lead.image].src}
              width={images[lead.image].width}
              height={images[lead.image].height}
              decoding="async"
              alt={lead.imageAlt}
              className="aspect-[16/10] w-full object-cover transition-transform duration-500 group-hover:scale-105"
            />
          </Link>
          <div>
            <p className="text-xs font-semibold uppercase tracking-widest text-accent">
              Featured · {lead.category} · {lead.readingTime} min read
            </p>
            <h2 className="mt-4 text-3xl leading-tight sm:text-4xl">
              <Link to="/blog/$slug" params={{ slug: lead.slug }} className="hover:text-accent">
                {lead.title}
              </Link>
            </h2>
            <p className="mt-4 text-lg leading-relaxed text-muted-foreground">{lead.excerpt}</p>
            <p className="mt-6 text-sm text-muted-foreground">
              {lead.author} ·{" "}
              <time dateTime={lead.date}>
                {new Date(lead.date).toLocaleDateString("en-GB", { day: "numeric", month: "long", year: "numeric" })}
              </time>
            </p>
          </div>
        </article>
      </Section>

      <Section tone="card">
        <h2 className="sr-only">All articles</h2>
        <ul className="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
          {rest.map((p) => (
            <li key={p.slug}>
              <article className="group flex h-full flex-col">
                <Link to="/blog/$slug" params={{ slug: p.slug }} className="overflow-hidden rounded-2xl">
                  <img
                    src={images[p.image].src}
                    width={images[p.image].width}
                    height={images[p.image].height}
                    loading="lazy"
                    decoding="async"
                    alt={p.imageAlt}
                    className="aspect-[16/10] w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  />
                </Link>
                <p className="mt-5 text-xs font-semibold uppercase tracking-widest text-accent">
                  {p.category} · {p.readingTime} min read
                </p>
                <h3 className="mt-3 text-2xl leading-snug">
                  <Link to="/blog/$slug" params={{ slug: p.slug }} className="hover:text-accent">
                    {p.title}
                  </Link>
                </h3>
                <p className="mt-3 flex-1 leading-relaxed text-muted-foreground">{p.excerpt}</p>
                <p className="mt-5 text-sm text-muted-foreground">
                  {p.author} ·{" "}
                  <time dateTime={p.date}>
                    {new Date(p.date).toLocaleDateString("en-GB", { day: "numeric", month: "long", year: "numeric" })}
                  </time>
                </p>
              </article>
            </li>
          ))}
        </ul>
      </Section>

      <CtaBand
        title="Questions the blog did not answer?"
        lead="Our veterinary and behavioural team answer consultation enquiries directly. No sales script."
      />
    </>
  );
}
