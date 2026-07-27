import { createFileRoute } from "@tanstack/react-router";
import { LegalPage, legalHead } from "@/components/site/LegalPage";
import { company } from "@/data/site";

export const Route = createFileRoute("/privacy-policy")({
  head: () =>
    legalHead(
      "Privacy Policy",
      "How PawlogicTech collects, processes, stores and protects personal and pet data, including on-device audio classification and your rights under UK GDPR.",
      "/privacy-policy",
    ),
  component: () => (
    <LegalPage
      eyebrow="Legal"
      title="Privacy Policy"
      lead="What we collect, why we collect it, how long we keep it, and the controls you have over all of it."
      updated="1 July 2026"
      sections={[
        {
          h2: "Who we are",
          p: [
            `${company.legal} is the data controller for personal data processed through this website and the PawlogicTech platform. Our registered office is ${company.address.street}, ${company.address.city} ${company.address.postcode}, ${company.address.country}. Data protection enquiries can be sent to ${company.email}.`,
          ],
        },
        {
          h2: "Data we collect",
          p: ["We collect only what the service requires to function."],
          list: [
            "Account data: name, email address, telephone number and billing details.",
            "Pet profile data: species, breed, age, weight, neuter status and relevant medical history you choose to provide.",
            "Sensor data: physiological measurements, activity, environmental readings, intake and location where those services are enabled.",
            "Behavioural event labels derived from on-device audio classification. Raw audio is never transmitted or stored.",
            "Technical data: device identifiers, IP address and diagnostic logs required for security and support.",
          ],
        },
        {
          h2: "How audio is handled",
          p: [
            "Acoustic classification runs entirely on the sensor hardware. The audio stream is analysed in memory and immediately discarded. Only a classified event label, such as 'distress vocalisation, four minutes', is transmitted to our servers. Human speech is never recorded, stored or transmitted.",
          ],
        },
        {
          h2: "Lawful bases for processing",
          p: [
            "We process account and sensor data to perform our contract with you. We process technical and security data on the basis of our legitimate interest in keeping the platform secure and functional. Marketing communications are sent only with your consent, which you can withdraw at any time.",
          ],
        },
        {
          h2: "Data sharing",
          p: [
            "We do not sell personal or pet data, and we do not share it with insurers, advertisers or data brokers under any circumstances. Data is shared only with sub-processors who provide infrastructure to us under contract, and with any veterinary professional or third party you explicitly choose to share a report with.",
          ],
        },
        {
          h2: "Retention",
          p: [
            "Monitoring data is retained for as long as your account is active because longitudinal history is the basis of the service. On account closure, data is deleted within 90 days unless you request an export first, or unless we are required to retain records for legal or accounting purposes.",
          ],
        },
        {
          h2: "Security",
          p: [
            "Data is encrypted in transit using TLS and at rest using industry-standard encryption. Access within our organisation is role-restricted and logged. We conduct regular security reviews and maintain an incident response process.",
          ],
        },
        {
          h2: "Your rights",
          p: ["Under UK GDPR and equivalent legislation you have the following rights."],
          list: [
            "Access a copy of the personal data we hold about you.",
            "Request correction of inaccurate data.",
            "Request erasure of your data, subject to legal retention requirements.",
            "Request portability of your data in a machine-readable format.",
            "Object to or restrict certain processing.",
            "Withdraw consent for marketing communications at any time.",
          ],
        },
        {
          h2: "Complaints",
          p: [
            `Please contact us first at ${company.email} so we can resolve the matter. If you remain dissatisfied, you have the right to complain to the Information Commissioner's Office in the United Kingdom, or your local supervisory authority.`,
          ],
        },
      ]}
    />
  ),
});
