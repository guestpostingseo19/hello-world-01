<?php
/**
 * Static content data mirrored from the original PawlogicTech site.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

function pwt_company() {
	return array(
		'name' => 'PawlogicTech',
		'legal' => 'PawlogicTech Ltd.',
		'tagline' => 'Intelligent pet care, engineered with care.',
		'email' => 'hello@pawlogictech.com',
		'phone' => '+44 20 4526 8810',
		'address' => array(
			'street' => 'Union House, 14 Bourne Terrace',
			'city' => 'London',
			'region' => 'England',
			'postcode' => 'W2 5TH',
			'country' => 'United Kingdom'
		),
		'hours' => 'Monday to Friday, 09:00–18:00 GMT',
		'founded' => '2019'
	);
}

function pwt_primary_nav() {
	return array(
		array(
			'path' => '/about/',
			'label' => 'About'
		),
		array(
			'path' => '/services/',
			'label' => 'Services'
		),
		array(
			'path' => '/blog/',
			'label' => 'Blog'
		),
		array(
			'path' => '/gallery/',
			'label' => 'Gallery'
		),
		array(
			'path' => '/testimonials/',
			'label' => 'Testimonials'
		),
		array(
			'path' => '/faq/',
			'label' => 'FAQ'
		)
	);
}

function pwt_services() {
	return array(
		array(
			'slug' => 'ai-pet-health-monitoring',
			'name' => 'AI Pet Health Monitoring',
			'short' => 'Continuous vitals, early-warning alerts and vet-ready health records.'
		),
		array(
			'slug' => 'ai-behavior-analysis',
			'name' => 'AI Behavior Analysis',
			'short' => 'Understand anxiety, aggression and stress through measured behaviour.'
		),
		array(
			'slug' => 'ai-pet-training',
			'name' => 'AI Pet Training',
			'short' => 'Adaptive, reward-based training programmes that measure real progress.'
		),
		array(
			'slug' => 'smart-pet-care',
			'name' => 'Smart Pet Care',
			'short' => 'Connected feeding, hydration, climate and daily-care automation.'
		),
		array(
			'slug' => 'ai-pet-safety',
			'name' => 'AI Pet Safety',
			'short' => 'Location intelligence, escape prevention and emergency response.'
		)
	);
}

function pwt_legal_links() {
	return array(
		array(
			'path' => '/privacy-policy/',
			'label' => 'Privacy Policy'
		),
		array(
			'path' => '/terms-and-conditions/',
			'label' => 'Terms & Conditions'
		),
		array(
			'path' => '/cookie-policy/',
			'label' => 'Cookie Policy'
		),
		array(
			'path' => '/disclaimer/',
			'label' => 'Disclaimer'
		)
	);
}

function pwt_explore_links() {
	return array(
		array(
			'path' => '/about/',
			'label' => 'About PawlogicTech'
		),
		array(
			'path' => '/blog/',
			'label' => 'Blog'
		),
		array(
			'path' => '/faq/',
			'label' => 'FAQ'
		),
		array(
			'path' => '/gallery/',
			'label' => 'Gallery'
		),
		array(
			'path' => '/testimonials/',
			'label' => 'Testimonials'
		),
		array(
			'path' => '/contact/',
			'label' => 'Contact'
		),
		array(
			'path' => '/html-sitemap/',
			'label' => 'Sitemap'
		)
	);
}

function pwt_posts_meta() {
	return array(
		array(
			'slug' => 'early-signs-of-illness-in-dogs',
			'title' => 'The Early Signs of Illness in Dogs Most Owners Miss',
			'category' => 'Pet Health',
			'author' => 'Dr. Amelia Hart BVSc MRCVS',
			'authorRole' => 'Veterinary Lead, PawlogicTech',
			'date' => '2026-06-18',
			'readingTime' => 8,
			'excerpt' => 'By the time a dog looks unwell, the condition has usually been developing for weeks. These are the eight signals that appear first, and why almost nobody notices them.',
			'image' => 'hero-dog.webp',
			'imageAlt' => 'Golden retriever wearing a smart health monitoring collar at home',
			'seoTitle' => 'Early Signs of Illness in Dogs | What Owners Miss | PawlogicTech',
			'description' => 'Dogs hide illness by instinct. Learn the eight measurable early signs of illness in dogs, why they are missed, and how continuous monitoring surfaces them sooner.'
		),
		array(
			'slug' => 'how-ai-detects-pet-anxiety',
			'title' => 'How AI Detects Pet Anxiety Before You Do',
			'category' => 'Behaviour',
			'author' => 'Marcus Feld CCAB',
			'authorRole' => 'Head of Behavioural Science, PawlogicTech',
			'date' => '2026-05-29',
			'readingTime' => 7,
			'excerpt' => 'The behaviour you most need to understand happens when nobody is home. Measurement solves a problem that observation structurally cannot.',
			'image' => 'cat-monitoring.webp',
			'imageAlt' => 'Tabby cat resting beside a discreet smart home sensor',
			'seoTitle' => 'How AI Detects Pet Anxiety | Separation Distress | PawlogicTech',
			'description' => 'Separation anxiety peaks minutes after you leave, which is exactly when you cannot observe it. Here is how AI measures pet anxiety objectively and what to do with the data.'
		),
		array(
			'slug' => 'smart-feeding-and-pet-obesity',
			'title' => 'Smart Feeding and the Pet Obesity Problem',
			'category' => 'Nutrition',
			'author' => 'Dr. Amelia Hart BVSc MRCVS',
			'authorRole' => 'Veterinary Lead, PawlogicTech',
			'date' => '2026-05-11',
			'readingTime' => 6,
			'excerpt' => 'Nobody intends to overfeed. Portion drift is a measurement failure, not a discipline failure, and measurement is the thing that fixes it.',
			'image' => 'tech-sensor.webp',
			'imageAlt' => 'Minimalist smart pet sensor device on a pale sage textile surface',
			'seoTitle' => 'Smart Feeding & Pet Obesity | Portion Control Data | PawlogicTech',
			'description' => 'More than half of companion animals are overweight. Learn why feeding guides fail, how portion drift happens, and what measured feeding changes in practice.'
		),
		array(
			'slug' => 'what-vets-want-from-pet-health-data',
			'title' => 'What Vets Actually Want From Your Pet Health Data',
			'category' => 'Veterinary',
			'author' => 'Dr. Amelia Hart BVSc MRCVS',
			'authorRole' => 'Veterinary Lead, PawlogicTech',
			'date' => '2026-04-22',
			'readingTime' => 7,
			'excerpt' => 'A ten-minute consultation cannot absorb ten thousand data points. Here is what clinicians told us they need, and how we structured reporting around it.',
			'image' => 'vet-review.webp',
			'imageAlt' => 'Veterinarian reviewing pet health data on a tablet in a modern clinic',
			'seoTitle' => 'What Vets Want From Pet Health Data | PawlogicTech',
			'description' => 'Continuous monitoring only helps if the clinic can use it. Veterinary professionals explain which data changes decisions and which is simply noise.'
		),
		array(
			'slug' => 'preparing-your-pet-for-fireworks-season',
			'title' => 'Preparing Your Pet for Fireworks Season, Properly',
			'category' => 'Safety',
			'author' => 'Marcus Feld CCAB',
			'authorRole' => 'Head of Behavioural Science, PawlogicTech',
			'date' => '2026-03-30',
			'readingTime' => 6,
			'excerpt' => 'Preparation starting the week before is preparation that fails. Desensitisation needs eight weeks, and the difference in outcome is dramatic.',
			'image' => 'hero-dog.webp',
			'imageAlt' => 'Calm dog resting indoors in a bright, quiet home environment',
			'seoTitle' => 'Fireworks Anxiety in Pets | Preparation Guide | PawlogicTech',
			'description' => 'Fireworks cause the highest annual spike in pet escapes. A practical, evidence-led preparation plan starting eight weeks out, plus what to do on the night.'
		),
		array(
			'slug' => 'indoor-cat-enrichment-guide',
			'title' => 'The Indoor Cat Enrichment Guide That Actually Works',
			'category' => 'Behaviour',
			'author' => 'Marcus Feld CCAB',
			'authorRole' => 'Head of Behavioural Science, PawlogicTech',
			'date' => '2026-02-14',
			'readingTime' => 7,
			'excerpt' => 'Indoor living solves traffic and predation but replaces them with boredom and stress. Enrichment is not decoration, it is preventative medicine.',
			'image' => 'cat-monitoring.webp',
			'imageAlt' => 'Content indoor tabby cat resting on a linen sofa in natural light',
			'seoTitle' => 'Indoor Cat Enrichment Guide | Evidence-Led | PawlogicTech',
			'description' => 'Indoor cats live longer but face boredom, stress and obesity. An evidence-led enrichment plan covering vertical space, hunting simulation and resource layout.'
		)
	);
}

function pwt_page_blueprint() {
	return array(
		array(
			'title' => 'About',
			'slug' => 'about',
			'parent' => ''
		),
		array(
			'title' => 'Services',
			'slug' => 'services',
			'parent' => ''
		),
		array(
			'title' => 'Blog',
			'slug' => 'blog',
			'parent' => ''
		),
		array(
			'title' => 'FAQ',
			'slug' => 'faq',
			'parent' => ''
		),
		array(
			'title' => 'Gallery',
			'slug' => 'gallery',
			'parent' => ''
		),
		array(
			'title' => 'Testimonials',
			'slug' => 'testimonials',
			'parent' => ''
		),
		array(
			'title' => 'Contact',
			'slug' => 'contact',
			'parent' => ''
		),
		array(
			'title' => 'Sitemap',
			'slug' => 'html-sitemap',
			'parent' => ''
		),
		array(
			'title' => 'Privacy Policy',
			'slug' => 'privacy-policy',
			'parent' => ''
		),
		array(
			'title' => 'Terms & Conditions',
			'slug' => 'terms-and-conditions',
			'parent' => ''
		),
		array(
			'title' => 'Cookie Policy',
			'slug' => 'cookie-policy',
			'parent' => ''
		),
		array(
			'title' => 'Disclaimer',
			'slug' => 'disclaimer',
			'parent' => ''
		),
		array(
			'title' => 'AI Pet Health Monitoring',
			'slug' => 'ai-pet-health-monitoring',
			'parent' => 'services'
		),
		array(
			'title' => 'Dog Health AI',
			'slug' => 'dog-health-ai',
			'parent' => 'ai-pet-health-monitoring'
		),
		array(
			'title' => 'Cat Health AI',
			'slug' => 'cat-health-ai',
			'parent' => 'ai-pet-health-monitoring'
		),
		array(
			'title' => 'Nutrition Intelligence',
			'slug' => 'nutrition-intelligence',
			'parent' => 'ai-pet-health-monitoring'
		),
		array(
			'title' => 'Activity Monitoring',
			'slug' => 'activity-monitoring',
			'parent' => 'ai-pet-health-monitoring'
		),
		array(
			'title' => 'Health Reports',
			'slug' => 'health-reports',
			'parent' => 'ai-pet-health-monitoring'
		),
		array(
			'title' => 'AI Behavior Analysis',
			'slug' => 'ai-behavior-analysis',
			'parent' => 'services'
		),
		array(
			'title' => 'Anxiety Detection',
			'slug' => 'anxiety-detection',
			'parent' => 'ai-behavior-analysis'
		),
		array(
			'title' => 'Aggression Prevention',
			'slug' => 'aggression-prevention',
			'parent' => 'ai-behavior-analysis'
		),
		array(
			'title' => 'Sleep Pattern Analysis',
			'slug' => 'sleep-pattern-analysis',
			'parent' => 'ai-behavior-analysis'
		),
		array(
			'title' => 'Social Behavior Insights',
			'slug' => 'social-behavior-insights',
			'parent' => 'ai-behavior-analysis'
		),
		array(
			'title' => 'Behavior Reports',
			'slug' => 'behavior-reports',
			'parent' => 'ai-behavior-analysis'
		),
		array(
			'title' => 'AI Pet Training',
			'slug' => 'ai-pet-training',
			'parent' => 'services'
		),
		array(
			'title' => 'Puppy Training AI',
			'slug' => 'puppy-training-ai',
			'parent' => 'ai-pet-training'
		),
		array(
			'title' => 'Behavior Correction',
			'slug' => 'behavior-correction',
			'parent' => 'ai-pet-training'
		),
		array(
			'title' => 'Obedience Programs',
			'slug' => 'obedience-programs',
			'parent' => 'ai-pet-training'
		),
		array(
			'title' => 'Smart Training Devices',
			'slug' => 'smart-training-devices',
			'parent' => 'ai-pet-training'
		),
		array(
			'title' => 'Training Analytics',
			'slug' => 'training-analytics',
			'parent' => 'ai-pet-training'
		),
		array(
			'title' => 'Smart Pet Care',
			'slug' => 'smart-pet-care',
			'parent' => 'services'
		),
		array(
			'title' => 'Smart Feeding Systems',
			'slug' => 'smart-feeding-systems',
			'parent' => 'smart-pet-care'
		),
		array(
			'title' => 'Hydration Monitoring',
			'slug' => 'hydration-monitoring',
			'parent' => 'smart-pet-care'
		),
		array(
			'title' => 'Automated Care',
			'slug' => 'automated-care',
			'parent' => 'smart-pet-care'
		),
		array(
			'title' => 'Care Scheduling',
			'slug' => 'care-scheduling',
			'parent' => 'smart-pet-care'
		),
		array(
			'title' => 'Smart Devices',
			'slug' => 'smart-devices',
			'parent' => 'smart-pet-care'
		),
		array(
			'title' => 'AI Pet Safety',
			'slug' => 'ai-pet-safety',
			'parent' => 'services'
		),
		array(
			'title' => 'GPS Tracking',
			'slug' => 'gps-tracking',
			'parent' => 'ai-pet-safety'
		),
		array(
			'title' => 'Escape Prevention',
			'slug' => 'escape-prevention',
			'parent' => 'ai-pet-safety'
		),
		array(
			'title' => 'Emergency Alerts',
			'slug' => 'emergency-alerts',
			'parent' => 'ai-pet-safety'
		),
		array(
			'title' => 'Geofencing',
			'slug' => 'geofencing',
			'parent' => 'ai-pet-safety'
		),
		array(
			'title' => 'Safety Monitoring',
			'slug' => 'safety-monitoring',
			'parent' => 'ai-pet-safety'
		)
	);
}

