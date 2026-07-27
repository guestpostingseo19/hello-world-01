import { Link } from "@tanstack/react-router";
import { Logo } from "./Header";
import { services } from "@/data/services";
import { company } from "@/data/site";

const legal = [
  { to: "/privacy-policy", label: "Privacy Policy" },
  { to: "/terms-and-conditions", label: "Terms & Conditions" },
  { to: "/cookie-policy", label: "Cookie Policy" },
  { to: "/disclaimer", label: "Disclaimer" },
];

const explore = [
  { to: "/about", label: "About PawlogicTech" },
  { to: "/blog", label: "Blog" },
  { to: "/faq", label: "FAQ" },
  { to: "/gallery", label: "Gallery" },
  { to: "/testimonials", label: "Testimonials" },
  { to: "/contact", label: "Contact" },
  { to: "/html-sitemap", label: "Sitemap" },
];

export function Footer() {
  return (
    <footer className="mt-24 border-t border-border bg-card">
      <div className="container-page grid gap-12 py-16 md:grid-cols-2 lg:grid-cols-4">
        <div>
          <Logo />
          <p className="mt-4 max-w-xs text-sm leading-relaxed text-muted-foreground">
            {company.tagline} Veterinary-governed AI for health monitoring, behaviour, training,
            daily care and safety.
          </p>
          <address className="mt-6 space-y-1 text-sm not-italic text-muted-foreground">
            <p>{company.address.street}</p>
            <p>
              {company.address.city} {company.address.postcode}, {company.address.country}
            </p>
            <p>
              <a className="hover:text-accent" href={`mailto:${company.email}`}>
                {company.email}
              </a>
            </p>
            <p>
              <a className="hover:text-accent" href={`tel:${company.phone.replace(/\s/g, "")}`}>
                {company.phone}
              </a>
            </p>
          </address>
        </div>

        <nav aria-label="Services">
          <h2 className="text-sm font-semibold uppercase tracking-widest text-muted-foreground">Services</h2>
          <ul className="mt-4 space-y-2.5 text-sm">
            {services.map((s) => (
              <li key={s.slug}>
                <Link
                  to="/services/$service"
                  params={{ service: s.slug }}
                  className="transition-colors hover:text-accent"
                >
                  {s.name}
                </Link>
              </li>
            ))}
          </ul>
        </nav>

        <nav aria-label="Explore">
          <h2 className="text-sm font-semibold uppercase tracking-widest text-muted-foreground">Explore</h2>
          <ul className="mt-4 space-y-2.5 text-sm">
            {explore.map((l) => (
              <li key={l.to}>
                <Link to={l.to} className="transition-colors hover:text-accent">
                  {l.label}
                </Link>
              </li>
            ))}
          </ul>
        </nav>

        <nav aria-label="Legal">
          <h2 className="text-sm font-semibold uppercase tracking-widest text-muted-foreground">Legal</h2>
          <ul className="mt-4 space-y-2.5 text-sm">
            {legal.map((l) => (
              <li key={l.to}>
                <Link to={l.to} className="transition-colors hover:text-accent">
                  {l.label}
                </Link>
              </li>
            ))}
          </ul>
          <p className="mt-6 text-sm text-muted-foreground">{company.hours}</p>
        </nav>
      </div>

      <div className="border-t border-border">
        <div className="container-page flex flex-col gap-2 py-6 text-xs text-muted-foreground sm:flex-row sm:items-center sm:justify-between">
          <p>
            © {new Date().getFullYear()} {company.legal}. All rights reserved.
          </p>
          <p>
            PawlogicTech supports veterinary care. It does not replace professional diagnosis or
            treatment.
          </p>
        </div>
      </div>
    </footer>
  );
}
