import { Link } from "@tanstack/react-router";
import { useState } from "react";
import { services } from "@/data/services";

const nav = [
  { to: "/about", label: "About" },
  { to: "/services", label: "Services" },
  { to: "/blog", label: "Blog" },
  { to: "/gallery", label: "Gallery" },
  { to: "/testimonials", label: "Testimonials" },
  { to: "/faq", label: "FAQ" },
];

export function Logo({ className = "" }: { className?: string }) {
  return (
    <span className={`inline-flex items-center gap-2.5 ${className}`}>
      <span
        aria-hidden="true"
        className="grid h-9 w-9 place-items-center rounded-xl bg-primary text-primary-foreground"
      >
        <svg viewBox="0 0 24 24" className="h-5 w-5" fill="none" stroke="currentColor" strokeWidth="1.6">
          <circle cx="7" cy="8" r="2" fill="currentColor" stroke="none" />
          <circle cx="12" cy="6" r="2" fill="currentColor" stroke="none" />
          <circle cx="17" cy="8" r="2" fill="currentColor" stroke="none" />
          <path d="M12 11c3 0 5 2.2 5 4.6 0 1.9-1.4 3-3.2 3-.9 0-1.3-.4-1.8-.4s-.9.4-1.8.4c-1.8 0-3.2-1.1-3.2-3C7 13.2 9 11 12 11Z" fill="currentColor" stroke="none" />
        </svg>
      </span>
      <span className="font-display text-lg font-semibold tracking-tight">
        Pawlogic<span className="text-accent">Tech</span>
      </span>
    </span>
  );
}

export function Header() {
  const [open, setOpen] = useState(false);
  const [servicesOpen, setServicesOpen] = useState(false);

  return (
    <header className="sticky top-0 z-50 border-b border-border/70 bg-background/85 backdrop-blur-md">
      <a
        href="#main"
        className="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-3 focus:z-50 focus:rounded-md focus:bg-primary focus:px-4 focus:py-2 focus:text-primary-foreground"
      >
        Skip to content
      </a>
      <div className="container-page flex h-18 items-center justify-between gap-6 py-3">
        <Link to="/" aria-label="PawlogicTech home">
          <Logo />
        </Link>

        <nav aria-label="Primary" className="hidden items-center gap-1 lg:flex">
          {nav.map((item) =>
            item.label === "Services" ? (
              <div
                key={item.to}
                className="relative"
                onMouseEnter={() => setServicesOpen(true)}
                onMouseLeave={() => setServicesOpen(false)}
              >
                <Link
                  to="/services"
                  className="rounded-md px-3 py-2 text-sm font-medium text-foreground/80 transition-colors hover:text-accent"
                  activeProps={{ className: "text-accent" }}
                >
                  Services
                </Link>
                {servicesOpen && (
                  <div className="absolute left-1/2 top-full w-[26rem] -translate-x-1/2 pt-3">
                    <ul className="rounded-2xl border border-border bg-card p-2 shadow-lift">
                      {services.map((s) => (
                        <li key={s.slug}>
                          <Link
                            to="/services/$service"
                            params={{ service: s.slug }}
                            className="block rounded-xl px-3 py-2.5 transition-colors hover:bg-secondary"
                          >
                            <span className="block text-sm font-semibold">{s.name}</span>
                            <span className="block text-xs text-muted-foreground">{s.short}</span>
                          </Link>
                        </li>
                      ))}
                    </ul>
                  </div>
                )}
              </div>
            ) : (
              <Link
                key={item.to}
                to={item.to}
                className="rounded-md px-3 py-2 text-sm font-medium text-foreground/80 transition-colors hover:text-accent"
                activeProps={{ className: "text-accent" }}
              >
                {item.label}
              </Link>
            ),
          )}
          <Link
            to="/contact"
            className="ml-3 inline-flex items-center rounded-full bg-accent px-5 py-2.5 text-sm font-semibold text-accent-foreground shadow-soft transition-transform duration-200 hover:-translate-y-0.5"
          >
            Book a consultation
          </Link>
        </nav>

        <button
          type="button"
          onClick={() => setOpen((v) => !v)}
          aria-expanded={open}
          aria-controls="mobile-nav"
          className="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-border lg:hidden"
        >
          <span className="sr-only">{open ? "Close menu" : "Open menu"}</span>
          <svg viewBox="0 0 24 24" className="h-5 w-5" fill="none" stroke="currentColor" strokeWidth="1.8">
            {open ? <path d="M6 6l12 12M18 6L6 18" /> : <path d="M4 7h16M4 12h16M4 17h16" />}
          </svg>
        </button>
      </div>

      {open && (
        <nav id="mobile-nav" aria-label="Mobile" className="border-t border-border bg-card lg:hidden">
          <ul className="container-page flex flex-col py-3">
            {nav.map((item) => (
              <li key={item.to}>
                <Link
                  to={item.to}
                  onClick={() => setOpen(false)}
                  className="block border-b border-border/60 py-3 text-base font-medium"
                >
                  {item.label}
                </Link>
              </li>
            ))}
            {services.map((s) => (
              <li key={s.slug}>
                <Link
                  to="/services/$service"
                  params={{ service: s.slug }}
                  onClick={() => setOpen(false)}
                  className="block border-b border-border/40 py-2.5 pl-4 text-sm text-muted-foreground"
                >
                  {s.name}
                </Link>
              </li>
            ))}
            <li className="pt-4">
              <Link
                to="/contact"
                onClick={() => setOpen(false)}
                className="block rounded-full bg-accent px-5 py-3 text-center text-sm font-semibold text-accent-foreground"
              >
                Book a consultation
              </Link>
            </li>
          </ul>
        </nav>
      )}
    </header>
  );
}
