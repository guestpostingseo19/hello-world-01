import { createFileRoute } from "@tanstack/react-router";
import { LegalPage, legalHead } from "@/components/site/LegalPage";
import { company } from "@/data/site";

export const Route = createFileRoute("/terms-and-conditions")({
  head: () =>
    legalHead(
      "Terms & Conditions",
      "The terms governing use of the PawlogicTech website, platform and devices, including service scope, subscriptions, warranties and limitations of liability.",
      "/terms-and-conditions",
    ),
  component: () => (
    <LegalPage
      eyebrow="Legal"
      title="Terms & Conditions"
      lead="The agreement between you and PawlogicTech covering the website, the platform and our hardware."
      updated="1 July 2026"
      sections={[
        {
          h2: "Agreement",
          p: [
            `These terms govern your use of the ${company.name} website, applications, hardware and services. By creating an account or using our devices you accept these terms. If you do not accept them, please do not use the service.`,
          ],
        },
        {
          h2: "Scope of the service",
          p: [
            "PawlogicTech provides monitoring, measurement and triage tools. The service is not a veterinary practice and does not provide diagnosis, prognosis or treatment. Alerts, scores and reports are decision-support information intended to be interpreted alongside qualified veterinary advice.",
          ],
        },
        {
          h2: "Your responsibilities",
          p: ["To use the service safely and effectively you agree to the following."],
          list: [
            "Provide accurate pet profile information and keep it current.",
            "Fit and maintain devices according to the supplied instructions.",
            "Seek veterinary advice for any clinical concern, whether or not the platform has raised an alert.",
            "Not rely on the service as the sole safety measure for containment, supervision or emergency response.",
            "Keep account credentials confidential and notify us of any unauthorised access.",
          ],
        },
        {
          h2: "Subscriptions and billing",
          p: [
            "Connectivity and platform subscriptions are billed monthly or annually in advance. You may cancel at any time, taking effect at the end of the current billing period. Hardware is sold separately and remains your property.",
          ],
        },
        {
          h2: "Hardware warranty",
          p: [
            "Devices carry a 24-month warranty against manufacturing defects from the date of delivery. The warranty does not cover damage from misuse, unauthorised modification, or wear consistent with normal use such as strap abrasion or battery capacity decline.",
          ],
        },
        {
          h2: "Availability",
          p: [
            "We target high availability but do not guarantee uninterrupted service. Connectivity, GPS coverage, power supply and third-party networks are outside our control. Core local functions continue during connectivity outages where technically possible.",
          ],
        },
        {
          h2: "Limitation of liability",
          p: [
            "To the maximum extent permitted by law, our aggregate liability arising from the service is limited to the amount you paid us in the twelve months preceding the claim. We do not exclude liability for death or personal injury caused by negligence, for fraud, or for any liability that cannot lawfully be excluded.",
            "We are not liable for veterinary outcomes, for loss of or injury to an animal, or for decisions taken in reliance on platform output without professional veterinary advice.",
          ],
        },
        {
          h2: "Intellectual property",
          p: [
            "All software, models, documentation, branding and site content remain the property of PawlogicTech. Your pet and account data remain yours, and you may export it at any time.",
          ],
        },
        {
          h2: "Governing law",
          p: [
            "These terms are governed by the laws of England and Wales, and the courts of England and Wales have exclusive jurisdiction over any dispute arising from them.",
          ],
        },
      ]}
    />
  ),
});
