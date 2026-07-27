import { createFileRoute } from "@tanstack/react-router";
import { galleryItems } from "@/data/site";
import { images } from "@/components/site/images";
import { CtaBand, PageHero, Section, breadcrumbSchema } from "@/components/site/ui";

const title = "Gallery | PawlogicTech Devices, Homes & Clinics";
const description =
  "A look at PawlogicTech in daily use: collar modules, environmental sensors, monitored homes and health reports in veterinary review.";

export const Route = createFileRoute("/gallery")({
  head: () => ({
    meta: [
      { title },
      { name: "description", content: description },
      { property: "og:title", content: title },
      { property: "og:description", content: description },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/gallery" },
      { name: "twitter:title", content: title },
      { name: "twitter:description", content: description },
    ],
    links: [{ rel: "canonical", href: "/gallery" }],
    scripts: [
      {
        type: "application/ld+json",
        children: JSON.stringify(
          breadcrumbSchema([
            { name: "Home", item: "/" },
            { name: "Gallery", item: "/gallery" },
          ]),
        ),
      },
    ],
  }),
  component: Gallery,
});

function Gallery() {
  return (
    <>
      <PageHero
        eyebrow="Gallery"
        title="PawlogicTech, in the places it actually lives"
        lead="Hardware designed to disappear into a home, and reporting designed to hold up in a consulting room."
        trail={[{ label: "Home", to: "/" }, { label: "Gallery" }]}
      />

      <Section>
        <ul className="grid gap-8 sm:grid-cols-2">
          {galleryItems.map((item) => (
            <li key={item.caption}>
              <figure className="overflow-hidden rounded-3xl border border-border bg-card">
                <img
                  src={images[item.image].src}
                  width={images[item.image].width}
                  height={images[item.image].height}
                  loading="lazy"
                  decoding="async"
                  alt={item.alt}
                  className="aspect-[4/3] w-full object-cover"
                />
                <figcaption className="px-7 py-6">
                  <p className="text-xs font-semibold uppercase tracking-widest text-accent">
                    {item.category}
                  </p>
                  <p className="mt-2 font-display text-xl">{item.caption}</p>
                </figcaption>
              </figure>
            </li>
          ))}
        </ul>
      </Section>

      <CtaBand
        title="See the hardware in person"
        lead="We run demonstrations for veterinary practices, boarding facilities and breeders across the UK and Ireland."
      />
    </>
  );
}
