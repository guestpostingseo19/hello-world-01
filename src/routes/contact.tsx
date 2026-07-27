import { createFileRoute } from "@tanstack/react-router";
import { useState } from "react";
import { company } from "@/data/site";
import { services } from "@/data/services";
import { PageHero, Section, SectionHeading, breadcrumbSchema } from "@/components/site/ui";

const title = "Contact PawlogicTech | Book a Pet AI Consultation";
const description =
  "Contact the PawlogicTech team to book a free consultation about pet health monitoring, behaviour analysis, training, smart care or safety. London-based, replies within one working day.";

export const Route = createFileRoute("/contact")({
  head: () => ({
    meta: [
      { title },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/contact" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/contact" }],
    scripts: [
      {
        type: "application/ld+json",
        children: JSON.stringify(
          breadcrumbSchema([
            { name: "Home", item: "/" },
            { name: "Contact", item: "/contact" },
          ]),
        ),
      },
      {
        type: "application/ld+json",
        children: JSON.stringify({
          "@context": "https://schema.org",
          "@type": "ContactPage",
          name: "Contact PawlogicTech",
          mainEntity: {
            "@type": "Organization",
            "@id": "/#organization",
            name: company.name,
            email: company.email,
            telephone: company.phone,
          },
        }),
      },
    ],
  }),
  component: Contact,
});

function Contact() {
  const [sent, setSent] = useState(false);

  return (
    <>
      <PageHero
        eyebrow="Contact"
        title="Book a consultation"
        lead="Tell us about your animals and what you are trying to solve. Consultations are free, last around thirty minutes, and frequently end with us recommending less than you expected to buy."
        trail={[{ label: "Home", to: "/" }, { label: "Contact" }]}
      />

      <Section>
        <div className="grid gap-14 lg:grid-cols-[1.15fr_0.85fr]">
          <div>
            <SectionHeading eyebrow="Enquiry" title="Send us the details" />
            {sent ? (
              <div role="status" className="mt-8 rounded-3xl border border-border bg-card p-8">
                <p className="font-display text-2xl">Thank you, your enquiry is with us.</p>
                <p className="mt-3 leading-relaxed text-muted-foreground">
                  A member of the team will reply within one working day. If your matter is urgent,
                  call {company.phone} during office hours.
                </p>
              </div>
            ) : (
              <form
                className="mt-8 grid gap-5 sm:grid-cols-2"
                onSubmit={(e) => {
                  e.preventDefault();
                  setSent(true);
                }}
              >
                <Field id="name" label="Full name" autoComplete="name" />
                <Field id="email" label="Email address" type="email" autoComplete="email" />
                <Field id="phone" label="Phone number (optional)" type="tel" required={false} autoComplete="tel" />
                <div>
                  <label htmlFor="service" className="block text-sm font-semibold">
                    Service of interest
                  </label>
                  <select
                    id="service"
                    name="service"
                    className="mt-2 w-full rounded-xl border border-border bg-card px-4 py-3 text-sm"
                    defaultValue={services[0].slug}
                  >
                    {services.map((s) => (
                      <option key={s.slug} value={s.slug}>
                        {s.name}
                      </option>
                    ))}
                    <option value="not-sure">Not sure yet</option>
                  </select>
                </div>
                <div className="sm:col-span-2">
                  <label htmlFor="message" className="block text-sm font-semibold">
                    How can we help?
                  </label>
                  <textarea
                    id="message"
                    name="message"
                    rows={6}
                    required
                    placeholder="Tell us about your animals, their ages, and what prompted you to get in touch."
                    className="mt-2 w-full rounded-xl border border-border bg-card px-4 py-3 text-sm"
                  />
                </div>
                <div className="sm:col-span-2">
                  <button
                    type="submit"
                    className="inline-flex items-center rounded-full bg-accent px-7 py-3.5 text-sm font-semibold text-accent-foreground transition-transform duration-200 hover:-translate-y-0.5"
                  >
                    Send enquiry
                  </button>
                  <p className="mt-4 text-xs leading-relaxed text-muted-foreground">
                    We use your details only to respond to this enquiry. See our privacy policy for how
                    we handle personal data.
                  </p>
                </div>
              </form>
            )}
          </div>

          <aside className="rounded-3xl border border-border bg-card p-8">
            <h2 className="text-2xl">Direct contact</h2>
            <dl className="mt-6 space-y-5 text-sm">
              <div>
                <dt className="font-semibold">Email</dt>
                <dd>
                  <a className="text-accent" href={`mailto:${company.email}`}>
                    {company.email}
                  </a>
                </dd>
              </div>
              <div>
                <dt className="font-semibold">Telephone</dt>
                <dd>
                  <a className="text-accent" href={`tel:${company.phone.replace(/\s/g, "")}`}>
                    {company.phone}
                  </a>
                </dd>
              </div>
              <div>
                <dt className="font-semibold">Office</dt>
                <dd className="text-muted-foreground">
                  {company.address.street}
                  <br />
                  {company.address.city} {company.address.postcode}
                  <br />
                  {company.address.country}
                </dd>
              </div>
              <div>
                <dt className="font-semibold">Hours</dt>
                <dd className="text-muted-foreground">{company.hours}</dd>
              </div>
            </dl>
            <p className="mt-8 rounded-2xl bg-secondary p-5 text-sm leading-relaxed">
              <strong>Veterinary emergencies:</strong> PawlogicTech cannot provide emergency care.
              Contact your veterinary practice or an out-of-hours emergency clinic immediately.
            </p>
          </aside>
        </div>
      </Section>
    </>
  );
}

function Field({
  id,
  label,
  type = "text",
  required = true,
  autoComplete,
}: {
  id: string;
  label: string;
  type?: string;
  required?: boolean;
  autoComplete?: string;
}) {
  return (
    <div>
      <label htmlFor={id} className="block text-sm font-semibold">
        {label}
      </label>
      <input
        id={id}
        name={id}
        type={type}
        required={required}
        autoComplete={autoComplete}
        className="mt-2 w-full rounded-xl border border-border bg-card px-4 py-3 text-sm"
      />
    </div>
  );
}
