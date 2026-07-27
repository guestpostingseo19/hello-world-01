import { Link } from "@tanstack/react-router";
import type { ReactNode } from "react";

export function Eyebrow({ children }: { children: ReactNode }) {
  return (
    <p className="mb-4 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.2em] text-accent">
      <span aria-hidden="true" className="h-px w-6 bg-accent" />
      {children}
    </p>
  );
}

export function Section({
  children,
  className = "",
  tone = "default",
  id,
  label,
}: {
  children: ReactNode;
  className?: string;
  tone?: "default" | "card" | "ink" | "sage";
  id?: string;
  label?: string;
}) {
  const tones = {
    default: "",
    card: "bg-card",
    ink: "bg-primary text-primary-foreground",
    sage: "bg-secondary",
  } as const;
  return (
    <section id={id} aria-label={label} className={`py-20 sm:py-24 ${tones[tone]} ${className}`}>
      <div className="container-page">{children}</div>
    </section>
  );
}

export function SectionHeading({
  eyebrow,
  title,
  lead,
  align = "left",
  as: As = "h2",
}: {
  eyebrow?: string;
  title: string;
  lead?: string;
  align?: "left" | "center";
  as?: "h2" | "h3";
}) {
  return (
    <div className={`max-w-2xl ${align === "center" ? "mx-auto text-center" : ""}`}>
      {eyebrow && <Eyebrow>{eyebrow}</Eyebrow>}
      <As className="text-3xl leading-tight sm:text-4xl">{title}</As>
      {lead && <p className="mt-4 text-lg leading-relaxed text-muted-foreground">{lead}</p>}
    </div>
  );
}

export function Breadcrumbs({ trail }: { trail: { label: string; to?: string; params?: Record<string, string> }[] }) {
  return (
    <nav aria-label="Breadcrumb" className="text-sm">
      <ol className="flex flex-wrap items-center gap-x-2 gap-y-1 text-muted-foreground">
        {trail.map((item, i) => (
          <li key={item.label} className="flex items-center gap-2">
            {item.to ? (
              <Link to={item.to} params={item.params as never} className="hover:text-accent">
                {item.label}
              </Link>
            ) : (
              <span aria-current="page" className="text-foreground">
                {item.label}
              </span>
            )}
            {i < trail.length - 1 && <span aria-hidden="true">/</span>}
          </li>
        ))}
      </ol>
    </nav>
  );
}

export function FaqList({ faqs, id }: { faqs: { q: string; a: string }[]; id?: string }) {
  return (
    <div id={id} className="divide-y divide-border rounded-3xl border border-border bg-card">
      {faqs.map((f) => (
        <details key={f.q} className="group px-6 py-5">
          <summary className="flex cursor-pointer list-none items-start justify-between gap-6 text-left font-display text-lg">
            {f.q}
            <span
              aria-hidden="true"
              className="mt-1 shrink-0 text-accent transition-transform duration-200 group-open:rotate-45"
            >
              <svg viewBox="0 0 24 24" className="h-5 w-5" fill="none" stroke="currentColor" strokeWidth="1.8">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </span>
          </summary>
          <p className="mt-3 max-w-3xl leading-relaxed text-muted-foreground">{f.a}</p>
        </details>
      ))}
    </div>
  );
}

export function CtaBand({
  title = "Start with a conversation, not a shopping cart",
  lead = "Tell us about your animals and your household. We will recommend the smallest configuration that genuinely solves your problem.",
  primary = { label: "Book a consultation", to: "/contact" },
  secondary = { label: "Explore services", to: "/services" },
}: {
  title?: string;
  lead?: string;
  primary?: { label: string; to: string };
  secondary?: { label: string; to: string };
}) {
  return (
    <section className="py-20 sm:py-24">
      <div className="container-page">
        <div className="relative overflow-hidden rounded-3xl bg-primary px-8 py-16 text-primary-foreground sm:px-14">
          <span
            aria-hidden="true"
            className="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-accent/25 blur-3xl"
          />
          <div className="relative max-w-2xl">
            <h2 className="text-3xl leading-tight sm:text-4xl">{title}</h2>
            <p className="mt-4 text-lg leading-relaxed text-primary-foreground/75">{lead}</p>
            <div className="mt-8 flex flex-wrap gap-3">
              <Link
                to={primary.to}
                className="inline-flex items-center rounded-full bg-accent px-6 py-3 text-sm font-semibold text-accent-foreground transition-transform duration-200 hover:-translate-y-0.5"
              >
                {primary.label}
              </Link>
              <Link
                to={secondary.to}
                className="inline-flex items-center rounded-full border border-primary-foreground/30 px-6 py-3 text-sm font-semibold transition-colors hover:border-primary-foreground"
              >
                {secondary.label}
              </Link>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}

export function PageHero({
  eyebrow,
  title,
  lead,
  trail,
  children,
}: {
  eyebrow: string;
  title: string;
  lead: string;
  trail?: { label: string; to?: string; params?: Record<string, string> }[];
  children?: ReactNode;
}) {
  return (
    <section className="border-b border-border bg-card">
      <div className="container-page py-14 sm:py-20">
        {trail && (
          <div className="mb-8">
            <Breadcrumbs trail={trail} />
          </div>
        )}
        <Eyebrow>{eyebrow}</Eyebrow>
        <h1 className="max-w-4xl text-4xl leading-[1.08] sm:text-5xl lg:text-6xl">{title}</h1>
        <p className="mt-6 max-w-2xl text-lg leading-relaxed text-muted-foreground">{lead}</p>
        {children}
      </div>
    </section>
  );
}

export function Card({ children, className = "" }: { children: ReactNode; className?: string }) {
  return (
    <div
      className={`rounded-3xl border border-border bg-card p-7 shadow-soft transition-all duration-300 hover:-translate-y-1 hover:shadow-lift ${className}`}
    >
      {children}
    </div>
  );
}

export function jsonLd(data: Record<string, unknown>) {
  return { type: "application/ld+json", children: JSON.stringify(data) };
}

export function faqSchema(faqs: { q: string; a: string }[]) {
  return {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    mainEntity: faqs.map((f) => ({
      "@type": "Question",
      name: f.q,
      acceptedAnswer: { "@type": "Answer", text: f.a },
    })),
  };
}

export function breadcrumbSchema(items: { name: string; item: string }[]) {
  return {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    itemListElement: items.map((it, i) => ({
      "@type": "ListItem",
      position: i + 1,
      name: it.name,
      item: it.item,
    })),
  };
}
