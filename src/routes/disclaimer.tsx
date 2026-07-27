import { createFileRoute } from "@tanstack/react-router";
import { LegalPage, legalHead } from "@/components/site/LegalPage";

export const Route = createFileRoute("/disclaimer")({
  head: () =>
    legalHead(
      "Disclaimer",
      "Important limitations on PawlogicTech guidance: our platform supports veterinary care and does not diagnose, treat or replace professional clinical judgement.",
      "/disclaimer",
    ),
  component: () => (
    <LegalPage
      eyebrow="Legal"
      title="Disclaimer"
      lead="What our platform is for, and just as importantly, what it must never be used for."
      updated="1 July 2026"
      sections={[
        {
          h2: "Not veterinary advice",
          p: [
            "All content on this website and all output from the PawlogicTech platform is provided for general information and decision support. It does not constitute veterinary advice, diagnosis or treatment, and it is not a substitute for consultation with a qualified veterinary professional who has examined your animal.",
          ],
        },
        {
          h2: "Emergencies",
          p: [
            "If you believe your animal is unwell or injured, contact your veterinary practice or an out-of-hours emergency clinic immediately. Do not wait for a platform alert, and do not delay care because no alert has been raised.",
          ],
        },
        {
          h2: "Limits of monitoring",
          p: [
            "No monitoring system detects every condition. Absence of an alert is not evidence of health. Sensor accuracy depends on correct fitting, an adequate baseline period, connectivity and device maintenance, and readings may be affected by all of these.",
          ],
        },
        {
          h2: "Safety systems are not guarantees",
          p: [
            "Location tracking, geofencing and escape prevention are supplementary safety layers. They do not replace secure physical containment, supervision, current identification tags or an up-to-date microchip registration.",
          ],
        },
        {
          h2: "Statistics and outcomes",
          p: [
            "Figures cited on this website reflect aggregate observations across our monitored population. Individual results vary with species, breed, age, health status, environment and how consistently the system is used. Nothing on this site should be read as a promise of a specific outcome.",
          ],
        },
        {
          h2: "External links",
          p: [
            "Where we link to third-party resources such as veterinary bodies or published research, we do so for reference. We are not responsible for the content, accuracy or availability of external sites.",
          ],
        },
      ]}
    />
  ),
});
