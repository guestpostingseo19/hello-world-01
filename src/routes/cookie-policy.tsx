import { createFileRoute } from "@tanstack/react-router";
import { LegalPage, legalHead } from "@/components/site/LegalPage";
import { company } from "@/data/site";

export const Route = createFileRoute("/cookie-policy")({
  head: () =>
    legalHead(
      "Cookie Policy",
      "Which cookies PawlogicTech uses, what each category does, how long they last and how to control them in your browser.",
      "/cookie-policy",
    ),
  component: () => (
    <LegalPage
      eyebrow="Legal"
      title="Cookie Policy"
      lead="We keep cookie use minimal. This page explains exactly what is set and why."
      updated="1 July 2026"
      sections={[
        {
          h2: "What cookies are",
          p: [
            "Cookies are small text files placed on your device by a website. They are widely used to make sites function, to remember preferences, and to understand how a site is used.",
          ],
        },
        {
          h2: "Categories we use",
          p: ["We group cookies into three categories."],
          list: [
            "Strictly necessary: session management, authentication and security. These cannot be disabled because the site cannot function without them.",
            "Preference: remembering settings such as display preferences. Set only after you accept them.",
            "Analytics: aggregated, privacy-respecting measurement of page performance and navigation. Set only with your consent.",
          ],
        },
        {
          h2: "What we do not do",
          p: [
            "We do not use advertising cookies, cross-site tracking pixels or third-party marketing tags. We do not build advertising profiles, and we do not share cookie-derived data with advertising networks.",
          ],
        },
        {
          h2: "Retention",
          p: [
            "Session cookies expire when you close your browser. Preference cookies persist for up to twelve months. Analytics cookies persist for up to thirteen months and are then deleted or renewed with fresh consent.",
          ],
        },
        {
          h2: "Managing cookies",
          p: [
            "You can withdraw or change consent at any time through the cookie settings link in the site footer of the application, or by clearing cookies in your browser. All major browsers allow you to block or delete cookies, though blocking strictly necessary cookies will prevent parts of the service from working.",
            `If you have questions about our use of cookies, contact ${company.email}.`,
          ],
        },
      ]}
    />
  ),
});
