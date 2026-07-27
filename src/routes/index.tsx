import { createFileRoute, Link } from "@tanstack/react-router";
import { services } from "@/data/services";
import { posts } from "@/data/blog";
import { stats, industries, differentiators, testimonials, generalFaqs, company } from "@/data/site";
import { images } from "@/components/site/images";
import {
  Card,
  CtaBand,
  Eyebrow,
  FaqList,
  Section,
  SectionHeading,
  faqSchema,
} from "@/components/site/ui";

const title = "PawlogicTech | AI Pet Health Monitoring, Behaviour & Safety";
const description =
  "PawlogicTech builds veterinary-governed AI pet care: continuous health monitoring, behaviour analysis, adaptive training, smart daily care and safety for dogs and cats.";

export const Route = createFileRoute("/")({
  head: () => ({
    meta: [
      { title },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/" }],
    scripts: [{ type: "application/ld+json", children: JSON.stringify(faqSchema(generalFaqs.slice(0, 6))) }],
  }),
  component: Home,
});

const aiPillars = [
  {
    name: "Sensor fusion",
    text: "Cardiac, respiratory, inertial, acoustic and environmental streams are read together. A single elevated heart rate means little; the same reading alongside disturbed sleep and reduced appetite means a great deal.",
  },
  {
    name: "Per-animal baselines",
    text: "Fourteen days of ordinary life build a physiological fingerprint unique to your animal. Every subsequent reading is scored against that, never against a breed average.",
  },
  {
    name: "Anomaly modelling",
    text: "Statistical deviation detection tuned for sensitivity to sustained trends rather than momentary spikes. Fewer alerts, and the ones you get are worth reading.",
  },
  {
    name: "On-device intelligence",
    text: "Acoustic classification runs on the sensor itself. Audio never leaves your home, which is an architectural decision, not a settings toggle.",
  },
];

function Home() {
  return (
    <>
      {/* Hero */}
      <section className="relative overflow-hidden border-b border-border bg-card">
        <div className="container-page grid gap-14 py-16 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:py-24">
          <div>
            <Eyebrow>Veterinary-governed pet intelligence</Eyebrow>
            <h1 className="text-4xl leading-[1.05] sm:text-5xl lg:text-[3.85rem]">
              Your pet cannot describe the symptom.{" "}
              <span className="text-accent">The data can.</span>
            </h1>
            <p className="mt-6 max-w-xl text-lg leading-relaxed text-muted-foreground">
              PawlogicTech measures the physiology and behaviour that animals instinctively hide, then
              tells you what actually deserves attention. Continuous health monitoring, behaviour
              analysis, adaptive training, smart daily care and safety, in one connected record.
            </p>
            <div className="mt-9 flex flex-wrap gap-3">
              <Link
                to="/contact"
                className="inline-flex items-center rounded-full bg-accent px-7 py-3.5 text-sm font-semibold text-accent-foreground shadow-soft transition-transform duration-200 hover:-translate-y-0.5"
              >
                Book a consultation
              </Link>
              <Link
                to="/services"
                className="inline-flex items-center rounded-full border border-border bg-background px-7 py-3.5 text-sm font-semibold transition-colors hover:border-accent hover:text-accent"
              >
                See how it works
              </Link>
            </div>
            <dl className="mt-12 grid max-w-lg grid-cols-2 gap-x-8 gap-y-6 border-t border-border pt-8">
              {stats.slice(0, 2).map((s) => (
                <div key={s.label}>
                  <dt className="sr-only">{s.label}</dt>
                  <dd>
                    <span className="block font-display text-3xl">{s.value}</span>
                    <span className="mt-1 block text-sm text-muted-foreground">{s.label}</span>
                  </dd>
                </div>
              ))}
            </dl>
          </div>
          <div className="relative">
            <span
              aria-hidden="true"
              className="absolute -left-8 -top-8 h-40 w-40 rounded-full bg-sage/50 blur-2xl"
            />
            <img
              src={images.hero.src}
              width={images.hero.width}
              height={images.hero.height}
              alt="Golden retriever wearing a PawlogicTech smart health collar in a bright modern home"
              fetchPriority="high"
              decoding="async"
              className="relative aspect-[4/5] w-full rounded-3xl object-cover shadow-lift"
            />
            <div className="relative z-10 -mt-12 ml-4 w-fit max-w-xs rounded-2xl border border-border bg-background/95 p-5 shadow-lift backdrop-blur sm:ml-8">
              <p className="text-xs font-semibold uppercase tracking-widest text-accent">Trend alert</p>
              <p className="mt-2 text-sm leading-relaxed">
                Resting heart rate up 8 bpm across 17 days. Sustained deviation from baseline.
                Veterinary review recommended.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Brand introduction */}
      <Section>
        <div className="grid gap-12 lg:grid-cols-[0.9fr_1.1fr]">
          <SectionHeading
            eyebrow="Who we are"
            title="An engineering company with a veterinary conscience"
          />
          <div className="space-y-5 text-lg leading-relaxed text-muted-foreground">
            <p>
              PawlogicTech was founded in {company.founded} by a veterinary surgeon and two
              signal-processing engineers, after a case where a cardiac condition was diagnosed months
              later than it needed to be. The physiological evidence had been there the whole time.
              Nobody was measuring it.
            </p>
            <p>
              We build the measurement layer. Our systems watch the signals that change first, compare
              them against your individual animal rather than a population average, and escalate only
              what a clinician would consider meaningful. Every threshold we ship is reviewed and
              signed off by our veterinary advisory panel.
            </p>
            <p className="rule-accent text-foreground">
              We are deliberately quiet technology. If you hear from us, something genuinely deserves
              your attention.
            </p>
          </div>
        </div>
      </Section>

      {/* Featured services */}
      <Section tone="card" id="services">
        <SectionHeading
          eyebrow="What we do"
          title="Five connected services, one record for your animal"
          lead="Each service stands on its own. Together they correlate, which is where the genuinely useful insight lives."
        />
        <div className="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          {services.map((s, i) => (
            <Card key={s.slug} className={i === 0 ? "md:col-span-2 lg:col-span-1" : ""}>
              <p className="font-display text-sm text-accent">0{i + 1}</p>
              <h3 className="mt-3 text-2xl">
                <Link to="/services/$service" params={{ service: s.slug }} className="hover:text-accent">
                  {s.name}
                </Link>
              </h3>
              <p className="mt-3 leading-relaxed text-muted-foreground">{s.short}</p>
              <ul className="mt-5 space-y-1.5 text-sm text-muted-foreground">
                {s.subs.slice(0, 3).map((sub) => (
                  <li key={sub.slug}>
                    <Link
                      to="/services/$service/$sub"
                      params={{ service: s.slug, sub: sub.slug }}
                      className="hover:text-accent"
                    >
                      {sub.name}
                    </Link>
                  </li>
                ))}
              </ul>
              <Link
                to="/services/$service"
                params={{ service: s.slug }}
                className="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-accent"
              >
                Explore {s.name}
                <span aria-hidden="true">→</span>
              </Link>
            </Card>
          ))}
        </div>
      </Section>

      {/* AI technology */}
      <Section tone="ink">
        <div className="grid gap-14 lg:grid-cols-2 lg:items-center">
          <div>
            <p className="mb-4 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.2em] text-accent">
              <span aria-hidden="true" className="h-px w-6 bg-accent" />
              The technology
            </p>
            <h2 className="text-3xl leading-tight sm:text-4xl">
              Intelligence that earns the right to interrupt you
            </h2>
            <p className="mt-5 text-lg leading-relaxed text-primary-foreground/75">
              Most pet technology optimises for engagement: notifications, scores, streaks. We optimise
              for clinical usefulness, which usually means saying nothing at all.
            </p>
            <dl className="mt-10 space-y-7">
              {aiPillars.map((p) => (
                <div key={p.name} className="border-l-2 border-accent/60 pl-5">
                  <dt className="font-display text-xl">{p.name}</dt>
                  <dd className="mt-2 leading-relaxed text-primary-foreground/70">{p.text}</dd>
                </div>
              ))}
            </dl>
          </div>
          <img
            src={images.sensor.src}
            width={images.sensor.width}
            height={images.sensor.height}
            loading="lazy"
            decoding="async"
            alt="PawlogicTech environmental room sensor resting on pale sage textile"
            className="w-full rounded-3xl object-cover shadow-lift"
          />
        </div>
      </Section>

      {/* How it works */}
      <Section>
        <SectionHeading
          eyebrow="How it works"
          title="From unboxing to a vet-ready record in four steps"
          lead="Setup takes under thirty minutes. Everything after that happens without you thinking about it."
        />
        <ol className="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
          {[
            { n: "01", h: "Fit and pair", t: "Attach the collar module and place your room sensors. Pairing is guided and takes minutes." },
            { n: "02", h: "Learn the baseline", t: "Fourteen days of ordinary life build your animal's individual physiological fingerprint." },
            { n: "03", h: "Monitor continuously", t: "Health, behaviour, intake and location stream into one record and are scored against baseline." },
            { n: "04", h: "Act with evidence", t: "Graded alerts arrive with a recommended action and a report your veterinarian can use." },
          ].map((s) => (
            <li key={s.n} className="rounded-3xl border border-border bg-card p-7">
              <span className="font-display text-3xl text-sage">{s.n}</span>
              <h3 className="mt-4 text-xl">{s.h}</h3>
              <p className="mt-2 leading-relaxed text-muted-foreground">{s.t}</p>
            </li>
          ))}
        </ol>
      </Section>

      {/* Why PawlogicTech + benefits */}
      <Section tone="card">
        <SectionHeading
          eyebrow="Why PawlogicTech"
          title="Six commitments we will not trade away"
          lead="These are the decisions that make the product harder to build and better to live with."
        />
        <div className="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          {differentiators.map((d) => (
            <Card key={d.name}>
              <h3 className="text-xl">{d.name}</h3>
              <p className="mt-3 leading-relaxed text-muted-foreground">{d.text}</p>
            </Card>
          ))}
        </div>
      </Section>

      <Section tone="sage">
        <div className="grid gap-12 lg:grid-cols-[1fr_1fr] lg:items-center">
          <img
            src={images.vet.src}
            width={images.vet.width}
            height={images.vet.height}
            loading="lazy"
            decoding="async"
            alt="Veterinarian reviewing a PawlogicTech pet health report on a tablet in a clinic"
            className="w-full rounded-3xl object-cover shadow-lift"
          />
          <div>
            <SectionHeading
              eyebrow="The benefits"
              title="What changes when care becomes measurable"
            />
            <dl className="mt-8 space-y-6">
              {[
                { h: "Earlier intervention", t: "Trend alerts typically surface change nine to twenty-one days before an owner reports a visible symptom." },
                { h: "Lower lifetime cost", t: "Conditions caught early are cheaper to manage and far less likely to become chronic emergencies." },
                { h: "Shorter, sharper consults", t: "Your vet starts from ninety days of objective evidence instead of a recollection of last Tuesday." },
                { h: "Genuine peace of mind", t: "Not because nothing can go wrong, but because you will know about it while it still matters." },
              ].map((b) => (
                <div key={b.h}>
                  <dt className="font-display text-xl">{b.h}</dt>
                  <dd className="mt-1.5 leading-relaxed text-sage-foreground/80">{b.t}</dd>
                </div>
              ))}
            </dl>
          </div>
        </div>
      </Section>

      {/* Industries */}
      <Section>
        <SectionHeading
          eyebrow="Who we serve"
          title="Built for households, trusted by professionals"
          lead="The same platform, configured very differently depending on who is reading the data."
        />
        <div className="mt-12 grid gap-px overflow-hidden rounded-3xl border border-border bg-border sm:grid-cols-2 lg:grid-cols-3">
          {industries.map((i) => (
            <div key={i.name} className="bg-card p-8">
              <h3 className="text-xl">{i.name}</h3>
              <p className="mt-2.5 leading-relaxed text-muted-foreground">{i.text}</p>
            </div>
          ))}
        </div>
      </Section>

      {/* Statistics */}
      <Section tone="ink">
        <div className="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
          {stats.map((s) => (
            <div key={s.label}>
              <p className="font-display text-4xl text-accent sm:text-5xl">{s.value}</p>
              <p className="mt-3 text-sm leading-relaxed text-primary-foreground/70">{s.label}</p>
            </div>
          ))}
        </div>
      </Section>

      {/* Testimonials */}
      <Section tone="card">
        <SectionHeading
          eyebrow="Client stories"
          title="Owners, clinicians and facilities using the platform daily"
        />
        <div className="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          {testimonials.slice(0, 3).map((t) => (
            <figure key={t.name} className="flex h-full flex-col rounded-3xl border border-border bg-background p-7">
              <blockquote className="flex-1 text-lg leading-relaxed">“{t.quote}”</blockquote>
              <figcaption className="mt-6 border-t border-border pt-5 text-sm">
                <span className="block font-semibold">{t.name}</span>
                <span className="block text-muted-foreground">{t.role}</span>
                <span className="block text-muted-foreground">{t.location}</span>
              </figcaption>
            </figure>
          ))}
        </div>
        <Link
          to="/testimonials"
          className="mt-10 inline-flex items-center gap-2 text-sm font-semibold text-accent"
        >
          Read every client story <span aria-hidden="true">→</span>
        </Link>
      </Section>

      {/* Featured blogs */}
      <Section>
        <SectionHeading
          eyebrow="From the journal"
          title="Practical, evidence-led writing on pet care"
          lead="Written by our veterinary and behavioural team. No affiliate links, no filler."
        />
        <div className="mt-12 grid gap-8 md:grid-cols-3">
          {posts.slice(0, 3).map((p) => (
            <article key={p.slug} className="group flex flex-col">
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
              <p className="mt-3 leading-relaxed text-muted-foreground">{p.excerpt}</p>
            </article>
          ))}
        </div>
      </Section>

      {/* FAQ */}
      <Section tone="card">
        <div className="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
          <SectionHeading
            eyebrow="Questions"
            title="The things people ask us first"
            lead="If your question is not here, our full FAQ goes considerably deeper."
          />
          <div>
            <FaqList faqs={generalFaqs.slice(0, 6)} />
            <Link to="/faq" className="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-accent">
              Read the full FAQ <span aria-hidden="true">→</span>
            </Link>
          </div>
        </div>
      </Section>

      {/* Newsletter */}
      <Section tone="sage">
        <div className="grid gap-10 lg:grid-cols-2 lg:items-center">
          <div>
            <h2 className="text-3xl leading-tight sm:text-4xl">The Pawlogic Brief</h2>
            <p className="mt-4 text-lg leading-relaxed text-sage-foreground/80">
              One email a month. A summary of what our monitoring data showed, one practical piece of
              care guidance, and nothing else. Unsubscribe in a single click.
            </p>
          </div>
          <form
            className="flex flex-col gap-3 sm:flex-row"
            onSubmit={(e) => {
              e.preventDefault();
              const form = e.currentTarget;
              form.reset();
              form.querySelector<HTMLParagraphElement>("[data-status]")?.removeAttribute("hidden");
            }}
          >
            <label htmlFor="newsletter-email" className="sr-only">
              Email address
            </label>
            <input
              id="newsletter-email"
              type="email"
              name="email"
              required
              autoComplete="email"
              placeholder="you@example.com"
              className="w-full rounded-full border border-border bg-background px-6 py-3.5 text-sm outline-none placeholder:text-muted-foreground"
            />
            <button
              type="submit"
              className="shrink-0 rounded-full bg-primary px-7 py-3.5 text-sm font-semibold text-primary-foreground transition-transform duration-200 hover:-translate-y-0.5"
            >
              Subscribe
            </button>
            <p data-status hidden className="text-sm text-sage-foreground">
              Thank you. Please check your inbox to confirm.
            </p>
          </form>
        </div>
      </Section>

      <CtaBand />
    </>
  );
}
