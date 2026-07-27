import heroDog from "@/assets/hero-dog.webp";
import techSensor from "@/assets/tech-sensor.webp";
import catMonitoring from "@/assets/cat-monitoring.webp";
import vetReview from "@/assets/vet-review.webp";

export const images = {
  hero: { src: heroDog, width: 1280, height: 1600 },
  sensor: { src: techSensor, width: 1200, height: 900 },
  cat: { src: catMonitoring, width: 1200, height: 900 },
  vet: { src: vetReview, width: 1200, height: 900 },
} as const;

export type ImageKey = keyof typeof images;
