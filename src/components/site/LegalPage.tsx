import { PageHero, Section } from "@/components/site/ui";

export type LegalSection = { h2: string; p: string[]; list?: string[] };

export function LegalPage({
  eyebrow,
  title,
  lead,
  updated,
  sections,
}: {
  eyebrow: string;
  title: string;
  lead: string;
  updated: string;
  sections: LegalSection[];
}) {
  return (
    <>
      <PageHero
        eyebrow={eyebrow}
        title={title}
        lead={lead}
        trail={[{ label: "Home", to: "/" }, { label: title }]}
      />
      <Section>
        <div className="max-w-3xl">
          <p className="text-sm text-muted-foreground">Last updated: {updated}</p>
          {sections.map((s) => (
            <section key={s.h2} className="mt-10">
              <h2 className="text-2xl leading-snug">{s.h2}</h2>
              {s.p.map((par) => (
                <p key={par.slice(0, 24)} className="mt-4 leading-relaxed text-muted-foreground">
                  {par}
                </p>
              ))}
              {s.list && (
                <ul className="mt-5 space-y-2.5">
                  {s.list.map((li) => (
                    <li key={li} className="flex gap-3 leading-relaxed text-muted-foreground">
                      <span aria-hidden="true" className="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent" />
                      {li}
                    </li>
                  ))}
                </ul>
              )}
            </section>
          ))}
        </div>
      </Section>
    </>
  );
}

export function legalHead(title: string, description: string, path: string) {
  return {
    meta: [
      { title: `${title} | PawlogicTech` },
      { name: "description", content: description },
      { property: "og:title", content: `${title} | PawlogicTech` },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: path },
      { name: "twitter:title", content: `${title} | PawlogicTech` },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: path }],
  };
}
