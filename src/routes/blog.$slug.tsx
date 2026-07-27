import { createFileRoute, Link, notFound } from "@tanstack/react-router";
import { getPost, posts, type Post } from "@/data/blog";
import { images } from "@/components/site/images";
import {
  Breadcrumbs,
  CtaBand,
  FaqList,
  Section,
  SectionHeading,
  breadcrumbSchema,
  faqSchema,
} from "@/components/site/ui";

export const Route = createFileRoute("/blog/$slug")({
  loader: ({ params }): { post: Post } => {
    const post = getPost(params.slug);
    if (!post) throw notFound();
    return { post };
  },
  head: ({ params, loaderData }) => {
    if (!loaderData) {
      return { meta: [{ title: "Article unavailable | PawlogicTech" }, { name: "robots", content: "noindex" }] };
    }
    const p = loaderData.post;
    const url = `/blog/${params.slug}`;
    return {
      meta: [
        { title: p.seoTitle },
        { name: "description", content: p.description },
        { property: "og:title", content: p.seoTitle },
        { property: "og:description", content: p.description },
        { property: "og:type", content: "article" },
        { property: "og:url", content: url },
        { property: "article:published_time", content: p.date },
        { property: "article:author", content: p.author },
        { name: "twitter:title", content: p.seoTitle },
        { name: "twitter:description", content: p.description },
      ],
      links: [{ rel: "canonical", href: url }],
      scripts: [
        {
          type: "application/ld+json",
          children: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Article",
            headline: p.title,
            description: p.description,
            datePublished: p.date,
            dateModified: p.date,
            wordCount: p.body.reduce((n, s) => n + s.p.join(" ").split(" ").length, 0),
            articleSection: p.category,
            author: { "@type": "Person", name: p.author, jobTitle: p.authorRole },
            publisher: { "@type": "Organization", name: "PawlogicTech", "@id": "/#organization" },
            mainEntityOfPage: { "@type": "WebPage", "@id": url },
          }),
        },
        { type: "application/ld+json", children: JSON.stringify(faqSchema(p.faqs)) },
        {
          type: "application/ld+json",
          children: JSON.stringify(
            breadcrumbSchema([
              { name: "Home", item: "/" },
              { name: "Blog", item: "/blog" },
              { name: p.title, item: url },
            ]),
          ),
        },
      ],
    };
  },
  component: BlogPost,
});

function BlogPost() {
  const { slug } = Route.useParams();
  const p = getPost(slug) as Post;
  const related = posts.filter((x) => x.slug !== p.slug).slice(0, 3);
  const formatted = new Date(p.date).toLocaleDateString("en-GB", {
    day: "numeric",
    month: "long",
    year: "numeric",
  });

  return (
    <>
      <article>
        <header className="border-b border-border bg-card">
          <div className="container-page py-14 sm:py-20">
            <Breadcrumbs
              trail={[{ label: "Home", to: "/" }, { label: "Blog", to: "/blog" }, { label: p.title }]}
            />
            <p className="mt-8 text-xs font-semibold uppercase tracking-[0.2em] text-accent">
              {p.category} · {p.readingTime} min read
            </p>
            <h1 className="mt-4 max-w-4xl text-4xl leading-[1.1] sm:text-5xl">{p.title}</h1>
            <p className="mt-6 max-w-2xl text-lg leading-relaxed text-muted-foreground">{p.excerpt}</p>
            <div className="mt-8 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-muted-foreground">
              <span className="font-semibold text-foreground">{p.author}</span>
              <span aria-hidden="true">·</span>
              <span>{p.authorRole}</span>
              <span aria-hidden="true">·</span>
              <time dateTime={p.date}>{formatted}</time>
            </div>
          </div>
        </header>

        <div className="container-page py-12">
          <img
            src={images[p.image].src}
            width={images[p.image].width}
            height={images[p.image].height}
            decoding="async"
            alt={p.imageAlt}
            className="aspect-[16/9] w-full rounded-3xl object-cover shadow-lift"
          />
        </div>

        <div className="container-page grid gap-12 pb-8 lg:grid-cols-[0.28fr_0.72fr]">
          <aside className="lg:sticky lg:top-28 lg:self-start">
            <h2 className="text-sm font-semibold uppercase tracking-widest text-muted-foreground">
              In this article
            </h2>
            <ul className="mt-4 space-y-2 text-sm">
              {p.body.map((s) => (
                <li key={s.h2}>
                  <a href={`#${slugify(s.h2)}`} className="text-muted-foreground hover:text-accent">
                    {s.h2}
                  </a>
                </li>
              ))}
            </ul>
          </aside>

          <div className="max-w-3xl">
            {p.body.map((s) => (
              <section key={s.h2} className="mb-12">
                <h2 id={slugify(s.h2)} className="text-2xl leading-snug sm:text-3xl">
                  {s.h2}
                </h2>
                {s.p.map((par) => (
                  <p key={par.slice(0, 24)} className="mt-4 text-lg leading-relaxed text-muted-foreground">
                    {par}
                  </p>
                ))}
                {s.list && (
                  <ul className="mt-6 space-y-3">
                    {s.list.map((li) => (
                      <li key={li} className="flex gap-3 text-lg leading-relaxed text-muted-foreground">
                        <span aria-hidden="true" className="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent" />
                        {li}
                      </li>
                    ))}
                  </ul>
                )}
              </section>
            ))}

            <div className="rounded-3xl bg-secondary p-8">
              <p className="text-xs font-semibold uppercase tracking-[0.2em] text-accent">About the author</p>
              <p className="mt-3 font-display text-xl">{p.author}</p>
              <p className="mt-1 text-sm text-muted-foreground">{p.authorRole}</p>
              <p className="mt-4 leading-relaxed text-muted-foreground">
                Part of the PawlogicTech veterinary and behavioural team, which reviews every clinical
                threshold and every article published here before release.
              </p>
            </div>
          </div>
        </div>
      </article>

      <Section>
        <div className="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
          <SectionHeading eyebrow="FAQ" title="Related questions" />
          <FaqList faqs={p.faqs} />
        </div>
      </Section>

      <Section tone="card">
        <SectionHeading eyebrow="Keep reading" title="Related articles" />
        <ul className="mt-12 grid gap-8 md:grid-cols-3">
          {related.map((r) => (
            <li key={r.slug}>
              <article className="group flex flex-col">
                <Link to="/blog/$slug" params={{ slug: r.slug }} className="overflow-hidden rounded-2xl">
                  <img
                    src={images[r.image].src}
                    width={images[r.image].width}
                    height={images[r.image].height}
                    loading="lazy"
                    decoding="async"
                    alt={r.imageAlt}
                    className="aspect-[16/10] w-full object-cover transition-transform duration-500 group-hover:scale-105"
                  />
                </Link>
                <p className="mt-5 text-xs font-semibold uppercase tracking-widest text-accent">
                  {r.category} · {r.readingTime} min read
                </p>
                <h3 className="mt-3 text-xl leading-snug">
                  <Link to="/blog/$slug" params={{ slug: r.slug }} className="hover:text-accent">
                    {r.title}
                  </Link>
                </h3>
              </article>
            </li>
          ))}
        </ul>
      </Section>

      <CtaBand
        title="Turn this into a plan for your own animal"
        lead="A consultation with our veterinary team translates general guidance into something specific to your household."
      />
    </>
  );
}

function slugify(s: string) {
  return s
    .toLowerCase()
    .replace(/[^a-z0-9]+/g, "-")
    .replace(/^-|-$/g, "");
}
