import { createFileRoute } from "@tanstack/react-router";
import { generalFaqs, company } from "@/data/site";
import { services } from "@/data/services";
import { CtaBand, FaqList, PageHero, Section, SectionHeading, breadcrumbSchema, faqSchema } from "@/components/site/ui";

const title = "Pet AI FAQ | Monitoring, Privacy, Devices & Setup";
const description =
  "Answers to the questions we are asked most: what PawlogicTech measures, how accurate it is, what happens to your data, device compatibility and getting started.";

const allFaqs = [...generalFaqs, ...services.flatMap((s) => s.faqs.slice(0, 2))];

export const Route = createFileRoute("/faq")({
  head: () => ({
    meta: [
      { title: `${title} | PawlogicTech` },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/faq" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/faq" }],
    scripts: [
      { type: "application/ld+json", children: JSON.stringify(faqSchema(allFaqs)) },
      {
        type: "application/ld+json",
        children: JSON.stringify(
          breadcrumbSchema([
            { name: "Home", item: "/" },
            { name: "FAQ", item: "/faq" },
          ]),
        ),
      },
    ],
  }),
  component: FaqPage,
});

function FaqPage() {
  return (
    <>
      <PageHero
        eyebrow="Support"
        title="Frequently asked questions"
        lead="Everything owners, clinicians and facilities ask us before getting started. If your question is not answered here, our team replies to enquiries within one working day."
        trail={[{ label: "Home", to: "/" }, { label: "FAQ" }]}
      />

      <Section>
        <div className="grid gap-12 lg:grid-cols-[0.7fr_1.3fr]">
          <SectionHeading eyebrow="General" title="About the platform" />
          <FaqList faqs={generalFaqs} />
        </div>
      </Section>

      {services.map((s, i) => (
        <Section key={s.slug} tone={i % 2 === 0 ? "card" : "default"}>
          <div className="grid gap-12 lg:grid-cols-[0.7fr_1.3fr]">
            <SectionHeading eyebrow="Service" title={s.name} />
            <FaqList faqs={s.faqs} />
          </div>
        </Section>
      ))}

      <Section tone="sage">
        <SectionHeading
          eyebrow="Still stuck"
          title="Ask us directly"
          lead={`Email ${company.email} or call ${company.phone}. ${company.hours}.`}
        />
      </Section>

      <CtaBand />
    </>
  );
}
