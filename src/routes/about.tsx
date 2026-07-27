import { createFileRoute, Link } from "@tanstack/react-router";
import { company, timeline, team, differentiators, stats } from "@/data/site";
import { images } from "@/components/site/images";
import { Card, CtaBand, PageHero, Section, SectionHeading, breadcrumbSchema } from "@/components/site/ui";

const title = "About PawlogicTech | Veterinary-Governed Pet AI Company";
const description =
  "PawlogicTech was founded in 2019 by a veterinary surgeon and two signal-processing engineers. Meet the team, the principles and the clinical governance behind our pet AI.";

export const Route = createFileRoute("/about")({
  head: () => ({
    meta: [
      { title },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/about" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/about" }],
    scripts: [
      {
        type: "application/ld+json",
        children: JSON.stringify(
          breadcrumbSchema([
            { name: "Home", item: "/" },
            { name: "About", item: "/about" },
          ]),
        ),
      },
    ],
  }),
  component: About,
});

function About() {
  return (
    <>
      <PageHero
        eyebrow="About us"
        title="We built the measurement layer that pet care was missing"
        lead="PawlogicTech is an engineering company with a veterinary conscience. Every model we ship is governed by clinicians, and every threshold is tuned for usefulness rather than engagement."
        trail={[{ label: "Home", to: "/" }, { label: "About" }]}
      />

      <Section>
        <div className="grid gap-12 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
          <div className="space-y-5 text-lg leading-relaxed text-muted-foreground">
            <SectionHeading eyebrow="Our story" title="It started with a diagnosis that came too late" />
            <p>
              In {company.founded}, a nine-year-old spaniel was diagnosed with advanced mitral valve
              disease. Reviewing the case afterwards, the clinical picture was unambiguous: the animal's
              resting heart rate had almost certainly been rising for months, and their exercise
              tolerance had been quietly declining for longer than that. Nobody had been measuring
              either.
            </p>
            <p>
              That case brought together a veterinary surgeon frustrated by the limits of annual
              consultations and two engineers who had spent their careers extracting weak signals from
              noisy biomedical data. The premise was simple. If we could measure continuously and
              compare against an individual baseline, we could move detection forward by weeks.
            </p>
            <p>
              Seven years later that premise has held. Across {stats[0].value} monitored animals, our
              trend alerts typically precede owner-reported symptoms by nine to twenty-one days.
            </p>
          </div>
          <img
            src={images.cat.src}
            width={images.cat.width}
            height={images.cat.height}
            loading="lazy"
            decoding="async"
            alt="Cat resting at home beside a PawlogicTech monitoring sensor"
            className="w-full rounded-3xl object-cover shadow-lift"
          />
        </div>
      </Section>

      <Section tone="card">
        <SectionHeading eyebrow="Milestones" title="How the company developed" />
        <ol className="mt-12 grid gap-px overflow-hidden rounded-3xl border border-border bg-border md:grid-cols-5">
          {timeline.map((t) => (
            <li key={t.year} className="bg-card p-7">
              <p className="font-display text-3xl text-accent">{t.year}</p>
              <p className="mt-3 leading-relaxed text-muted-foreground">{t.text}</p>
            </li>
          ))}
        </ol>
      </Section>

      <Section>
        <SectionHeading
          eyebrow="Principles"
          title="The commitments that shape every product decision"
          lead="These frequently make the product harder to build. We keep them anyway."
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
        <SectionHeading eyebrow="The team" title="Clinicians and engineers, in equal measure" />
        <ul className="mt-12 grid gap-8 sm:grid-cols-2">
          {team.map((m) => (
            <li key={m.name} className="rounded-3xl border border-sage-foreground/10 bg-card p-8">
              <h3 className="text-xl">{m.name}</h3>
              <p className="mt-1 text-sm font-semibold uppercase tracking-widest text-accent">{m.role}</p>
              <p className="mt-4 leading-relaxed text-muted-foreground">{m.bio}</p>
            </li>
          ))}
        </ul>
      </Section>

      <Section tone="ink">
        <div className="grid gap-12 lg:grid-cols-2">
          <div>
            <p className="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-accent">Governance</p>
            <h2 className="text-3xl leading-tight sm:text-4xl">How clinical oversight actually works here</h2>
          </div>
          <div className="space-y-5 text-lg leading-relaxed text-primary-foreground/75">
            <p>
              Our veterinary advisory panel includes first-opinion practitioners, a cardiology
              specialist and a certified clinical animal behaviourist. No alert threshold reaches
              production without panel sign-off, and any threshold change is re-reviewed.
            </p>
            <p>
              We publish the reasoning behind every alert type in our product documentation, including
              what triggers it and what it explicitly does not mean. Clinicians should never be asked
              to trust a number they cannot interrogate.
            </p>
            <p>
              We also maintain a firm boundary. PawlogicTech monitors, measures and triages. Diagnosis
              and treatment belong to a qualified veterinary professional, and our alerts direct owners
              towards that care rather than away from it.
            </p>
          </div>
        </div>
      </Section>

      <Section>
        <div className="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
          {stats.map((s) => (
            <div key={s.label} className="border-t-2 border-accent pt-5">
              <p className="font-display text-4xl">{s.value}</p>
              <p className="mt-2 text-sm leading-relaxed text-muted-foreground">{s.label}</p>
            </div>
          ))}
        </div>
        <p className="mt-10 max-w-2xl leading-relaxed text-muted-foreground">
          Interested in the clinical validation work behind these figures?{" "}
          <Link to="/contact" className="font-semibold text-accent">
            Contact our veterinary team
          </Link>{" "}
          and we will share the methodology.
        </p>
      </Section>

      <CtaBand
        title="Work with a company that will tell you when you do not need us"
        lead="We would rather have a smaller customer who trusts the product than a larger one who ignores the alerts."
      />
    </>
  );
}
