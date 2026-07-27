<?php
/**
 * Per-URL SEO metadata extracted from the original site.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

function pwt_seo_map() {
	return array(
	'/' => array(
	'title' => 'PawlogicTech | AI Pet Health Monitoring, Behaviour & Safety',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'PawlogicTech builds veterinary-governed AI pet care: continuous health monitoring, behaviour analysis, adaptive training, smart daily care and safety for dogs and cats.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'PawlogicTech | AI Pet Health Monitoring, Behaviour & Safety'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'PawlogicTech builds veterinary-governed AI pet care: continuous health monitoring, behaviour analysis, adaptive training, smart daily care and safety for dogs and cats.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'PawlogicTech | AI Pet Health Monitoring, Behaviour & Safety'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'PawlogicTech builds veterinary-governed AI pet care: continuous health monitoring, behaviour analysis, adaptive training, smart daily care and safety for dogs and cats.'
)
),
	'canonical' => '/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What exactly does PawlogicTech do?","acceptedAnswer":{"@type":"Answer","text":"We build AI-driven pet care systems across five areas: health monitoring, behaviour analysis, training, smart daily care and safety. Sensors gather objective data about your animal, our models compare it against that animal\'s own baseline, and you receive clear, graded guidance about what needs attention."}},{"@type":"Question","name":"Is this a replacement for veterinary care?","acceptedAnswer":{"@type":"Answer","text":"No. PawlogicTech is a monitoring, triage and management platform. It surfaces evidence earlier and structures it for clinical review, but diagnosis and treatment are always the responsibility of a qualified veterinary professional."}},{"@type":"Question","name":"Which animals are supported?","acceptedAnswer":{"@type":"Answer","text":"Dogs and cats from 2.5kg upwards are fully supported today. Support for rabbits and other small companion animals is in development with our veterinary advisory panel."}},{"@type":"Question","name":"How long before the system is useful?","acceptedAnswer":{"@type":"Answer","text":"Setup takes under thirty minutes. A fourteen-day baseline calibration follows, after which anomaly detection becomes accurate. Behavioural trigger correlation typically needs two to three weeks of observation."}},{"@type":"Question","name":"What happens to my data?","acceptedAnswer":{"@type":"Answer","text":"It is encrypted in transit and at rest, stored under your account, and fully exportable or deletable at any time. We do not sell data to insurers, advertisers or data brokers. Household audio is classified on-device and never transmitted."}},{"@type":"Question","name":"Do the devices work without internet?","acceptedAnswer":{"@type":"Answer","text":"Core functions continue offline. Feeding schedules, geofence alerts within range of your home hub and local data logging all operate normally, syncing once connectivity returns. Remote control and cellular tracking require a connection."}}]}'
)
),
	'/about/' => array(
	'title' => 'About PawlogicTech | Veterinary-Governed Pet AI Company',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'PawlogicTech was founded in 2019 by a veterinary surgeon and two signal-processing engineers. Meet the team, the principles and the clinical governance behind our pet AI.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'About PawlogicTech | Veterinary-Governed Pet AI Company'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'PawlogicTech was founded in 2019 by a veterinary surgeon and two signal-processing engineers. Meet the team, the principles and the clinical governance behind our pet AI.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/about/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'About PawlogicTech | Veterinary-Governed Pet AI Company'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'PawlogicTech was founded in 2019 by a veterinary surgeon and two signal-processing engineers. Meet the team, the principles and the clinical governance behind our pet AI.'
)
),
	'canonical' => '/about/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"About","item":"/about"}]}'
)
),
	'/services/' => array(
	'title' => 'AI Pet Care Services | Health, Behaviour, Training & Safety | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Explore PawlogicTech services: AI pet health monitoring, behaviour analysis, adaptive training, smart pet care and AI pet safety, with 25 specialist sub-services.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Pet Care Services | Health, Behaviour, Training & Safety'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Explore PawlogicTech services: AI pet health monitoring, behaviour analysis, adaptive training, smart pet care and AI pet safety, with 25 specialist sub-services.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Pet Care Services | Health, Behaviour, Training & Safety'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Explore PawlogicTech services: AI pet health monitoring, behaviour analysis, adaptive training, smart pet care and AI pet safety, with 25 specialist sub-services.'
)
),
	'canonical' => '/services/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"}]}',
	'{"@context":"https://schema.org","@type":"ItemList","name":"PawlogicTech AI pet care services","itemListElement":[{"@type":"ListItem","position":1,"name":"AI Pet Health Monitoring","url":"/services/ai-pet-health-monitoring"},{"@type":"ListItem","position":2,"name":"AI Behavior Analysis","url":"/services/ai-behavior-analysis"},{"@type":"ListItem","position":3,"name":"AI Pet Training","url":"/services/ai-pet-training"},{"@type":"ListItem","position":4,"name":"Smart Pet Care","url":"/services/smart-pet-care"},{"@type":"ListItem","position":5,"name":"AI Pet Safety","url":"/services/ai-pet-safety"}]}'
)
),
	'/services/ai-pet-health-monitoring/' => array(
	'title' => 'AI Pet Health Monitoring | 24/7 Vitals & Early Warning | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Continuous AI pet health monitoring that tracks resting heart rate, respiration, mobility and appetite, then flags meaningful change days before symptoms appear.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Pet Health Monitoring | 24/7 Vitals & Early Warning | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Continuous AI pet health monitoring that tracks resting heart rate, respiration, mobility and appetite, then flags meaningful change days before symptoms appear.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-health-monitoring/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Pet Health Monitoring | 24/7 Vitals & Early Warning | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Continuous AI pet health monitoring that tracks resting heart rate, respiration, mobility and appetite, then flags meaningful change days before symptoms appear.'
)
),
	'canonical' => '/services/ai-pet-health-monitoring/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"AI Pet Health Monitoring","serviceType":"AI pet health monitoring","description":"Continuous AI pet health monitoring that tracks resting heart rate, respiration, mobility and appetite, then flags meaningful change days before symptoms appear.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"areaServed":["United Kingdom","Ireland","European Union"],"hasOfferCatalog":{"@type":"OfferCatalog","name":"AI Pet Health Monitoring sub-services","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"Dog Health AI","url":"/services/ai-pet-health-monitoring/dog-health-ai"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Cat Health AI","url":"/services/ai-pet-health-monitoring/cat-health-ai"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Nutrition Intelligence","url":"/services/ai-pet-health-monitoring/nutrition-intelligence"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Activity Monitoring","url":"/services/ai-pet-health-monitoring/activity-monitoring"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Health Reports","url":"/services/ai-pet-health-monitoring/health-reports"}}]}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Does AI pet health monitoring replace my veterinarian?","acceptedAnswer":{"@type":"Answer","text":"No, and it is not designed to. PawlogicTech is a monitoring and triage tool. It surfaces objective evidence earlier so that your veterinarian can diagnose and treat sooner. Every alert directs you to professional care when clinically appropriate."}},{"@type":"Question","name":"How accurate are the alerts?","acceptedAnswer":{"@type":"Answer","text":"Accuracy depends on baseline quality. After a complete 14-day calibration our resting heart rate and respiration readings track clinical measurements closely, and severity grading is tuned to minimise false alarms rather than maximise alert volume."}},{"@type":"Question","name":"Will my pet tolerate wearing the device?","acceptedAnswer":{"@type":"Answer","text":"The collar module weighs less than a standard ID tag and is rated for dogs and cats above 2.5kg. Most animals stop noticing it within a day."}},{"@type":"Question","name":"What happens to my data?","acceptedAnswer":{"@type":"Answer","text":"It is encrypted, stored under your account, and exportable or deletable at any time. We do not sell data to insurers, advertisers or brokers."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Health Monitoring","item":"/services/ai-pet-health-monitoring"}]}'
)
),
	'/services/ai-behavior-analysis/' => array(
	'title' => 'AI Pet Behavior Analysis | Anxiety & Stress Detection | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI behavior analysis for dogs and cats that quantifies anxiety, separation distress, reactivity and stress triggers, turning guesswork into an evidence-based plan.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Pet Behavior Analysis | Anxiety & Stress Detection | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI behavior analysis for dogs and cats that quantifies anxiety, separation distress, reactivity and stress triggers, turning guesswork into an evidence-based plan.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-behavior-analysis/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Pet Behavior Analysis | Anxiety & Stress Detection | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI behavior analysis for dogs and cats that quantifies anxiety, separation distress, reactivity and stress triggers, turning guesswork into an evidence-based plan.'
)
),
	'canonical' => '/services/ai-behavior-analysis/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"AI Behavior Analysis","serviceType":"AI pet behavior analysis","description":"AI behavior analysis for dogs and cats that quantifies anxiety, separation distress, reactivity and stress triggers, turning guesswork into an evidence-based plan.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"areaServed":["United Kingdom","Ireland","European Union"],"hasOfferCatalog":{"@type":"OfferCatalog","name":"AI Behavior Analysis sub-services","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"Anxiety Detection","url":"/services/ai-behavior-analysis/anxiety-detection"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Aggression Prevention","url":"/services/ai-behavior-analysis/aggression-prevention"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Sleep Pattern Analysis","url":"/services/ai-behavior-analysis/sleep-pattern-analysis"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Social Behavior Insights","url":"/services/ai-behavior-analysis/social-behavior-insights"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Behavior Reports","url":"/services/ai-behavior-analysis/behavior-reports"}}]}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Is my home audio being recorded and stored?","acceptedAnswer":{"@type":"Answer","text":"No. Audio is processed on the device itself and discarded immediately. Only classified event labels, such as \'distress vocalisation, 4 minutes\', are transmitted. Human speech is never stored or transmitted."}},{"@type":"Question","name":"Can this replace a qualified behaviourist?","acceptedAnswer":{"@type":"Answer","text":"For mild cases it is often sufficient on its own. For aggression, severe anxiety or bite history you need a certified behaviourist, and our data makes their work substantially more effective."}},{"@type":"Question","name":"How quickly will I see change?","acceptedAnswer":{"@type":"Answer","text":"Trigger identification usually takes two to three weeks. Meaningful behavioural change from a well-targeted programme typically appears between weeks four and twelve."}},{"@type":"Question","name":"Does it distinguish pain from misbehaviour?","acceptedAnswer":{"@type":"Answer","text":"It screens for it. Sudden reactivity, night restlessness and posture change are classic pain presentations, and when that pattern appears we recommend veterinary assessment before any training programme."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Behavior Analysis","item":"/services/ai-behavior-analysis"}]}'
)
),
	'/services/ai-pet-training/' => array(
	'title' => 'AI Pet Training | Adaptive Reward-Based Programmes | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI pet training that adapts each session to your animal\'s learning rate, reinforces positive methods and measures reliability instead of relying on impressions.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Pet Training | Adaptive Reward-Based Programmes | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI pet training that adapts each session to your animal\'s learning rate, reinforces positive methods and measures reliability instead of relying on impressions.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-training/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Pet Training | Adaptive Reward-Based Programmes | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI pet training that adapts each session to your animal\'s learning rate, reinforces positive methods and measures reliability instead of relying on impressions.'
)
),
	'canonical' => '/services/ai-pet-training/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"AI Pet Training","serviceType":"AI pet training","description":"AI pet training that adapts each session to your animal\'s learning rate, reinforces positive methods and measures reliability instead of relying on impressions.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"areaServed":["United Kingdom","Ireland","European Union"],"hasOfferCatalog":{"@type":"OfferCatalog","name":"AI Pet Training sub-services","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"Puppy Training AI","url":"/services/ai-pet-training/puppy-training-ai"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Behavior Correction","url":"/services/ai-pet-training/behavior-correction"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Obedience Programs","url":"/services/ai-pet-training/obedience-programs"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Smart Training Devices","url":"/services/ai-pet-training/smart-training-devices"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Training Analytics","url":"/services/ai-pet-training/training-analytics"}}]}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Does PawlogicTech use any aversive methods?","acceptedAnswer":{"@type":"Answer","text":"No. The platform is exclusively reward-based. We do not support or integrate with shock, prong, spray or vibration correction devices, and we will not generate programmes that rely on aversive techniques."}},{"@type":"Question","name":"How much time does it take each day?","acceptedAnswer":{"@type":"Answer","text":"Three to five sessions of two to five minutes each. Short and frequent consistently outperforms one long daily session, and the scheduler is built around that finding."}},{"@type":"Question","name":"Can it train a cat?","acceptedAnswer":{"@type":"Answer","text":"Yes. Cats train well with reward-based shaping. The feline curriculum focuses on carrier acceptance, cooperative care, recall and enrichment."}},{"@type":"Question","name":"What if progress stalls?","acceptedAnswer":{"@type":"Answer","text":"The system detects plateaus automatically and lowers criteria to rebuild success rate before progressing again, which is exactly the correction most owners miss."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Training","item":"/services/ai-pet-training"}]}'
)
),
	'/services/smart-pet-care/' => array(
	'title' => 'Smart Pet Care | Automated Feeding & Home Systems | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Smart pet care systems that automate feeding, hydration, climate and daily routines with measured intake and intelligent scheduling around your household.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Smart Pet Care | Automated Feeding & Home Systems | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Smart pet care systems that automate feeding, hydration, climate and daily routines with measured intake and intelligent scheduling around your household.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/smart-pet-care/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Smart Pet Care | Automated Feeding & Home Systems | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Smart pet care systems that automate feeding, hydration, climate and daily routines with measured intake and intelligent scheduling around your household.'
)
),
	'canonical' => '/services/smart-pet-care/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Smart Pet Care","serviceType":"smart pet care","description":"Smart pet care systems that automate feeding, hydration, climate and daily routines with measured intake and intelligent scheduling around your household.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"areaServed":["United Kingdom","Ireland","European Union"],"hasOfferCatalog":{"@type":"OfferCatalog","name":"Smart Pet Care sub-services","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"Smart Feeding Systems","url":"/services/smart-pet-care/smart-feeding-systems"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Hydration Monitoring","url":"/services/smart-pet-care/hydration-monitoring"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Automated Care","url":"/services/smart-pet-care/automated-care"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Care Scheduling","url":"/services/smart-pet-care/care-scheduling"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Smart Devices","url":"/services/smart-pet-care/smart-devices"}}]}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What happens during a power cut?","acceptedAnswer":{"@type":"Answer","text":"Feeders hold a battery reserve sufficient for at least two scheduled meals and retain their schedule. You receive an immediate outage notification, and dispensing resumes automatically on restoration."}},{"@type":"Question","name":"Can it stop one pet eating another\'s food?","acceptedAnswer":{"@type":"Answer","text":"Yes. Per-pet identification using RFID tags and weight signature means a bowl only opens for the animal it belongs to."}},{"@type":"Question","name":"Does it work with wet food?","acceptedAnswer":{"@type":"Answer","text":"Our chilled feeder handles wet and raw portions for up to 48 hours. The standard dispenser is dry-food only."}},{"@type":"Question","name":"Is an internet connection required?","acceptedAnswer":{"@type":"Answer","text":"Schedules run locally and continue during an outage. Connectivity is needed for remote control, alerts and data sync."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"Smart Pet Care","item":"/services/smart-pet-care"}]}'
)
),
	'/services/ai-pet-safety/' => array(
	'title' => 'AI Pet Safety | GPS Tracking & Emergency Alerts | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI pet safety with live location intelligence, escape prediction, geofencing and emergency response so a missing animal is found in minutes, not days.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Pet Safety | GPS Tracking & Emergency Alerts | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI pet safety with live location intelligence, escape prediction, geofencing and emergency response so a missing animal is found in minutes, not days.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-safety/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Pet Safety | GPS Tracking & Emergency Alerts | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI pet safety with live location intelligence, escape prediction, geofencing and emergency response so a missing animal is found in minutes, not days.'
)
),
	'canonical' => '/services/ai-pet-safety/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"AI Pet Safety","serviceType":"AI pet safety","description":"AI pet safety with live location intelligence, escape prediction, geofencing and emergency response so a missing animal is found in minutes, not days.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"areaServed":["United Kingdom","Ireland","European Union"],"hasOfferCatalog":{"@type":"OfferCatalog","name":"AI Pet Safety sub-services","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"GPS Tracking","url":"/services/ai-pet-safety/gps-tracking"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Escape Prevention","url":"/services/ai-pet-safety/escape-prevention"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Emergency Alerts","url":"/services/ai-pet-safety/emergency-alerts"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Geofencing","url":"/services/ai-pet-safety/geofencing"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Safety Monitoring","url":"/services/ai-pet-safety/safety-monitoring"}}]}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How accurate is the location tracking?","acceptedAnswer":{"@type":"Answer","text":"Typically three to five metres outdoors with clear sky. In dense urban environments or indoors, accuracy is maintained to roughly ten to fifteen metres using assisted positioning."}},{"@type":"Question","name":"What is the battery life?","acceptedAnswer":{"@type":"Answer","text":"Around fourteen days in standard monitoring. In active tracking mode during a recovery, expect approximately eighteen hours of continuous high-frequency reporting."}},{"@type":"Question","name":"Does it work abroad?","acceptedAnswer":{"@type":"Answer","text":"Yes. Multi-network roaming is included across most of Europe and North America with no additional configuration."}},{"@type":"Question","name":"Is a subscription required?","acceptedAnswer":{"@type":"Answer","text":"Location services require a connectivity plan because the device uses cellular networks. Local features such as geofence alerts within range of your home hub continue regardless."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Safety","item":"/services/ai-pet-safety"}]}'
)
),
	'/services/ai-pet-health-monitoring/dog-health-ai/' => array(
	'title' => 'Dog Health AI | Canine Vitals & Early Warning | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Canine-specific health AI that tracks resting heart rate, gait, sleep and appetite to flag orthopaedic, cardiac and metabolic change early.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Dog Health AI | Canine Vitals & Early Warning | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Canine-specific health AI that tracks resting heart rate, gait, sleep and appetite to flag orthopaedic, cardiac and metabolic change early.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-health-monitoring/dog-health-ai/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Dog Health AI | Canine Vitals & Early Warning | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Canine-specific health AI that tracks resting heart rate, gait, sleep and appetite to flag orthopaedic, cardiac and metabolic change early.'
)
),
	'canonical' => '/services/ai-pet-health-monitoring/dog-health-ai/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Dog Health AI","serviceType":"dog health AI","description":"Canine-specific health AI that tracks resting heart rate, gait, sleep and appetite to flag orthopaedic, cardiac and metabolic change early.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Health Monitoring","url":"/services/ai-pet-health-monitoring"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Which dog sizes are supported?","acceptedAnswer":{"@type":"Answer","text":"Dogs from 2.5kg upwards. Collar modules ship in three sizes, and the underlying models adjust for toy through giant breed groups."}},{"@type":"Question","name":"Does gait analysis need a treadmill or clinic visit?","acceptedAnswer":{"@type":"Answer","text":"No. It is derived passively from everyday walks, which is exactly why it catches change that a single clinic assessment misses."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Health Monitoring","item":"/services/ai-pet-health-monitoring"},{"@type":"ListItem","position":4,"name":"Dog Health AI","item":"/services/ai-pet-health-monitoring/dog-health-ai"}]}'
)
),
	'/services/ai-pet-health-monitoring/cat-health-ai/' => array(
	'title' => 'Cat Health AI | Feline Health Monitoring | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Feline health AI built for a species that hides illness, tracking litter box behaviour, hydration, grooming and weight for early renal and thyroid signals.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Cat Health AI | Feline Health Monitoring | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Feline health AI built for a species that hides illness, tracking litter box behaviour, hydration, grooming and weight for early renal and thyroid signals.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-health-monitoring/cat-health-ai/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Cat Health AI | Feline Health Monitoring | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Feline health AI built for a species that hides illness, tracking litter box behaviour, hydration, grooming and weight for early renal and thyroid signals.'
)
),
	'canonical' => '/services/ai-pet-health-monitoring/cat-health-ai/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Cat Health AI","serviceType":"cat health AI","description":"Feline health AI built for a species that hides illness, tracking litter box behaviour, hydration, grooming and weight for early renal and thyroid signals.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Health Monitoring","url":"/services/ai-pet-health-monitoring"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"My cat will not wear a collar. Is it still useful?","acceptedAnswer":{"@type":"Answer","text":"Yes. Litter box, hydration and weight analytics come from environmental sensors, so a substantial portion of the platform works with no wearable at all."}},{"@type":"Question","name":"Can it tell my two cats apart?","acceptedAnswer":{"@type":"Answer","text":"Yes. Weight signature and movement patterns are combined to identify individuals at the shared resources, with collar tags improving confidence further."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Health Monitoring","item":"/services/ai-pet-health-monitoring"},{"@type":"ListItem","position":4,"name":"Cat Health AI","item":"/services/ai-pet-health-monitoring/cat-health-ai"}]}'
)
),
	'/services/ai-pet-health-monitoring/nutrition-intelligence/' => array(
	'title' => 'Pet Nutrition Intelligence | AI Feeding Plans | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI nutrition intelligence that converts measured intake, body condition and activity load into precise, veterinarian-reviewable feeding guidance.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Nutrition Intelligence | AI Feeding Plans | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI nutrition intelligence that converts measured intake, body condition and activity load into precise, veterinarian-reviewable feeding guidance.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-health-monitoring/nutrition-intelligence/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Nutrition Intelligence | AI Feeding Plans | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI nutrition intelligence that converts measured intake, body condition and activity load into precise, veterinarian-reviewable feeding guidance.'
)
),
	'canonical' => '/services/ai-pet-health-monitoring/nutrition-intelligence/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Nutrition Intelligence","serviceType":"pet nutrition intelligence","description":"AI nutrition intelligence that converts measured intake, body condition and activity load into precise, veterinarian-reviewable feeding guidance.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Health Monitoring","url":"/services/ai-pet-health-monitoring"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Do I have to buy a specific food brand?","acceptedAnswer":{"@type":"Answer","text":"No. PawlogicTech is brand-independent. We work from the nutritional panel of whatever food you use, including raw and home-prepared diets."}},{"@type":"Question","name":"Is this safe for a pet with a medical condition?","acceptedAnswer":{"@type":"Answer","text":"Prescription and therapeutic diets should always be directed by your veterinarian. Nutrition Intelligence supports adherence and tracks outcomes rather than overriding clinical instruction."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Health Monitoring","item":"/services/ai-pet-health-monitoring"},{"@type":"ListItem","position":4,"name":"Nutrition Intelligence","item":"/services/ai-pet-health-monitoring/nutrition-intelligence"}]}'
)
),
	'/services/ai-pet-health-monitoring/activity-monitoring/' => array(
	'title' => 'Pet Activity Monitoring | AI Exercise & Sleep Tracking | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI activity monitoring for pets that measures exercise load, intensity, rest quality and recovery so you can train and rehabilitate with evidence.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Activity Monitoring | AI Exercise & Sleep Tracking | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI activity monitoring for pets that measures exercise load, intensity, rest quality and recovery so you can train and rehabilitate with evidence.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-health-monitoring/activity-monitoring/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Activity Monitoring | AI Exercise & Sleep Tracking | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI activity monitoring for pets that measures exercise load, intensity, rest quality and recovery so you can train and rehabilitate with evidence.'
)
),
	'canonical' => '/services/ai-pet-health-monitoring/activity-monitoring/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Activity Monitoring","serviceType":"pet activity monitoring","description":"AI activity monitoring for pets that measures exercise load, intensity, rest quality and recovery so you can train and rehabilitate with evidence.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Health Monitoring","url":"/services/ai-pet-health-monitoring"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Does it work indoors and off-grid?","acceptedAnswer":{"@type":"Answer","text":"Yes. Activity classification is inertial rather than GPS-dependent, so indoor cats and rural dogs are measured accurately with no signal."}},{"@type":"Question","name":"How long does the battery last?","acceptedAnswer":{"@type":"Answer","text":"Typically twelve to fourteen days of continuous monitoring per charge, depending on alert frequency."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Health Monitoring","item":"/services/ai-pet-health-monitoring"},{"@type":"ListItem","position":4,"name":"Activity Monitoring","item":"/services/ai-pet-health-monitoring/activity-monitoring"}]}'
)
),
	'/services/ai-pet-health-monitoring/health-reports/' => array(
	'title' => 'AI Pet Health Reports | Vet-Ready Summaries | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Vet-ready AI pet health reports that turn months of continuous monitoring into a clear clinical summary with trends, anomalies and shareable records.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Pet Health Reports | Vet-Ready Summaries | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Vet-ready AI pet health reports that turn months of continuous monitoring into a clear clinical summary with trends, anomalies and shareable records.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-health-monitoring/health-reports/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Pet Health Reports | Vet-Ready Summaries | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Vet-ready AI pet health reports that turn months of continuous monitoring into a clear clinical summary with trends, anomalies and shareable records.'
)
),
	'canonical' => '/services/ai-pet-health-monitoring/health-reports/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Health Reports","serviceType":"pet health reports","description":"Vet-ready AI pet health reports that turn months of continuous monitoring into a clear clinical summary with trends, anomalies and shareable records.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Health Monitoring","url":"/services/ai-pet-health-monitoring"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Can my vet access reports directly?","acceptedAnswer":{"@type":"Answer","text":"Yes. You can issue a time-limited secure link, or export a PDF and email it. No account is required on the clinic side."}},{"@type":"Question","name":"How far back does history go?","acceptedAnswer":{"@type":"Answer","text":"For as long as your account is active. Historical records are retained in full and remain exportable if you close the account."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Health Monitoring","item":"/services/ai-pet-health-monitoring"},{"@type":"ListItem","position":4,"name":"Health Reports","item":"/services/ai-pet-health-monitoring/health-reports"}]}'
)
),
	'/services/ai-behavior-analysis/anxiety-detection/' => array(
	'title' => 'Pet Anxiety Detection AI | Separation Distress | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI anxiety detection for dogs and cats that quantifies distress vocalisation, pacing and physiological arousal to measure severity objectively.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Anxiety Detection AI | Separation Distress | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI anxiety detection for dogs and cats that quantifies distress vocalisation, pacing and physiological arousal to measure severity objectively.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-behavior-analysis/anxiety-detection/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Anxiety Detection AI | Separation Distress | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI anxiety detection for dogs and cats that quantifies distress vocalisation, pacing and physiological arousal to measure severity objectively.'
)
),
	'canonical' => '/services/ai-behavior-analysis/anxiety-detection/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Anxiety Detection","serviceType":"pet anxiety detection","description":"AI anxiety detection for dogs and cats that quantifies distress vocalisation, pacing and physiological arousal to measure severity objectively.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Behavior Analysis","url":"/services/ai-behavior-analysis"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Can it tell anxiety from excitement?","acceptedAnswer":{"@type":"Answer","text":"Yes. Both raise heart rate, but heart rate variability, recovery speed and the accompanying behavioural signature differ clearly between the two states."}},{"@type":"Question","name":"Does it work for cats?","acceptedAnswer":{"@type":"Answer","text":"Yes. Feline anxiety presents differently, mainly through hiding, litter avoidance and over-grooming, and the feline model is trained on those markers."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Behavior Analysis","item":"/services/ai-behavior-analysis"},{"@type":"ListItem","position":4,"name":"Anxiety Detection","item":"/services/ai-behavior-analysis/anxiety-detection"}]}'
)
),
	'/services/ai-behavior-analysis/aggression-prevention/' => array(
	'title' => 'AI Aggression Prevention for Dogs | Early Warning | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI aggression prevention that detects pre-escalation warning signals and maps triggers so incidents are intercepted before a bite occurs.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Aggression Prevention for Dogs | Early Warning | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI aggression prevention that detects pre-escalation warning signals and maps triggers so incidents are intercepted before a bite occurs.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-behavior-analysis/aggression-prevention/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Aggression Prevention for Dogs | Early Warning | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI aggression prevention that detects pre-escalation warning signals and maps triggers so incidents are intercepted before a bite occurs.'
)
),
	'canonical' => '/services/ai-behavior-analysis/aggression-prevention/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Aggression Prevention","serviceType":"dog aggression prevention","description":"AI aggression prevention that detects pre-escalation warning signals and maps triggers so incidents are intercepted before a bite occurs.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Behavior Analysis","url":"/services/ai-behavior-analysis"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Is this safe to rely on with a dog that has bitten?","acceptedAnswer":{"@type":"Answer","text":"It is a management aid, never a substitute for physical safety measures. Any dog with a bite history requires professional behaviourist supervision alongside muzzle training and environmental control."}},{"@type":"Question","name":"What is trigger stacking?","acceptedAnswer":{"@type":"Answer","text":"Multiple minor stressors accumulating within a short window until the threshold for reaction drops. It explains why a dog tolerates something on Tuesday and reacts to it on Saturday, and our stress load index makes it visible."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Behavior Analysis","item":"/services/ai-behavior-analysis"},{"@type":"ListItem","position":4,"name":"Aggression Prevention","item":"/services/ai-behavior-analysis/aggression-prevention"}]}'
)
),
	'/services/ai-behavior-analysis/sleep-pattern-analysis/' => array(
	'title' => 'Pet Sleep Pattern Analysis | AI Rest Quality | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI sleep pattern analysis for pets that measures duration, fragmentation and night-time restlessness, one of the earliest indicators of pain and stress.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Sleep Pattern Analysis | AI Rest Quality | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI sleep pattern analysis for pets that measures duration, fragmentation and night-time restlessness, one of the earliest indicators of pain and stress.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-behavior-analysis/sleep-pattern-analysis/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Sleep Pattern Analysis | AI Rest Quality | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI sleep pattern analysis for pets that measures duration, fragmentation and night-time restlessness, one of the earliest indicators of pain and stress.'
)
),
	'canonical' => '/services/ai-behavior-analysis/sleep-pattern-analysis/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Sleep Pattern Analysis","serviceType":"pet sleep analysis","description":"AI sleep pattern analysis for pets that measures duration, fragmentation and night-time restlessness, one of the earliest indicators of pain and stress.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Behavior Analysis","url":"/services/ai-behavior-analysis"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How much sleep is normal?","acceptedAnswer":{"@type":"Answer","text":"Adult dogs typically rest 12 to 14 hours a day, puppies and seniors considerably more, and cats 13 to 16 hours. The absolute figure matters far less than change against your own animal\'s established baseline."}},{"@type":"Question","name":"My pet sleeps in my bed. Does that interfere?","acceptedAnswer":{"@type":"Answer","text":"No. Movement signatures are separated by source, so your own movement does not contaminate your pet\'s record."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Behavior Analysis","item":"/services/ai-behavior-analysis"},{"@type":"ListItem","position":4,"name":"Sleep Pattern Analysis","item":"/services/ai-behavior-analysis/sleep-pattern-analysis"}]}'
)
),
	'/services/ai-behavior-analysis/social-behavior-insights/' => array(
	'title' => 'Pet Social Behavior Insights | Multi-Pet Harmony | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI social behavior insights that map interaction quality, resource guarding and avoidance between animals in multi-pet households.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Social Behavior Insights | Multi-Pet Harmony | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI social behavior insights that map interaction quality, resource guarding and avoidance between animals in multi-pet households.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-behavior-analysis/social-behavior-insights/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Social Behavior Insights | Multi-Pet Harmony | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI social behavior insights that map interaction quality, resource guarding and avoidance between animals in multi-pet households.'
)
),
	'canonical' => '/services/ai-behavior-analysis/social-behavior-insights/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Social Behavior Insights","serviceType":"multi-pet behaviour","description":"AI social behavior insights that map interaction quality, resource guarding and avoidance between animals in multi-pet households.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Behavior Analysis","url":"/services/ai-behavior-analysis"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How many animals can be tracked?","acceptedAnswer":{"@type":"Answer","text":"Up to eight individually identified animals in a single household, with unlimited environmental sensors."}},{"@type":"Question","name":"Do all my pets need a wearable?","acceptedAnswer":{"@type":"Answer","text":"For full interaction mapping, yes. Environmental sensors alone still capture resource access and avoidance patterns."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Behavior Analysis","item":"/services/ai-behavior-analysis"},{"@type":"ListItem","position":4,"name":"Social Behavior Insights","item":"/services/ai-behavior-analysis/social-behavior-insights"}]}'
)
),
	'/services/ai-behavior-analysis/behavior-reports/' => array(
	'title' => 'AI Pet Behavior Reports | Behaviourist-Ready | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Structured AI behavior reports that summarise triggers, event frequency and programme progress for owners, trainers and veterinary behaviourists.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Pet Behavior Reports | Behaviourist-Ready | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Structured AI behavior reports that summarise triggers, event frequency and programme progress for owners, trainers and veterinary behaviourists.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-behavior-analysis/behavior-reports/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Pet Behavior Reports | Behaviourist-Ready | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Structured AI behavior reports that summarise triggers, event frequency and programme progress for owners, trainers and veterinary behaviourists.'
)
),
	'canonical' => '/services/ai-behavior-analysis/behavior-reports/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Behavior Reports","serviceType":"pet behaviour reports","description":"Structured AI behavior reports that summarise triggers, event frequency and programme progress for owners, trainers and veterinary behaviourists.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Behavior Analysis","url":"/services/ai-behavior-analysis"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What format are reports in?","acceptedAnswer":{"@type":"Answer","text":"A structured PDF plus an interactive web view with a secure expiring link. Both include the raw charts behind every conclusion."}},{"@type":"Question","name":"Can a trainer be given ongoing access?","acceptedAnswer":{"@type":"Answer","text":"Yes. You can grant read-only access for a defined period and revoke it at any time."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Behavior Analysis","item":"/services/ai-behavior-analysis"},{"@type":"ListItem","position":4,"name":"Behavior Reports","item":"/services/ai-behavior-analysis/behavior-reports"}]}'
)
),
	'/services/ai-pet-training/puppy-training-ai/' => array(
	'title' => 'Puppy Training AI | Socialisation & Foundations | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Puppy training AI covering the critical socialisation window, house training, bite inhibition and foundation cues with measured progress tracking.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Puppy Training AI | Socialisation & Foundations | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Puppy training AI covering the critical socialisation window, house training, bite inhibition and foundation cues with measured progress tracking.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-training/puppy-training-ai/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Puppy Training AI | Socialisation & Foundations | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Puppy training AI covering the critical socialisation window, house training, bite inhibition and foundation cues with measured progress tracking.'
)
),
	'canonical' => '/services/ai-pet-training/puppy-training-ai/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Puppy Training AI","serviceType":"puppy training AI","description":"Puppy training AI covering the critical socialisation window, house training, bite inhibition and foundation cues with measured progress tracking.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Training","url":"/services/ai-pet-training"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"When should I start?","acceptedAnswer":{"@type":"Answer","text":"The day your puppy comes home, usually at eight weeks. Safe socialisation can begin before the vaccination course is complete by carrying your puppy and using controlled environments, and the programme accounts for that."}},{"@type":"Question","name":"Is it suitable for an older rescue puppy?","acceptedAnswer":{"@type":"Answer","text":"Yes. If the socialisation window was partly missed, the programme shifts to remedial habituation at a pace set by the animal\'s confidence data."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Training","item":"/services/ai-pet-training"},{"@type":"ListItem","position":4,"name":"Puppy Training AI","item":"/services/ai-pet-training/puppy-training-ai"}]}'
)
),
	'/services/ai-pet-training/behavior-correction/' => array(
	'title' => 'AI Behavior Correction for Pets | Reward-Based | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Reward-based AI behavior correction that replaces unwanted behaviours with trained alternatives and measures the change objectively.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Behavior Correction for Pets | Reward-Based | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Reward-based AI behavior correction that replaces unwanted behaviours with trained alternatives and measures the change objectively.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-training/behavior-correction/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Behavior Correction for Pets | Reward-Based | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Reward-based AI behavior correction that replaces unwanted behaviours with trained alternatives and measures the change objectively.'
)
),
	'canonical' => '/services/ai-pet-training/behavior-correction/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Behavior Correction","serviceType":"pet behaviour correction","description":"Reward-based AI behavior correction that replaces unwanted behaviours with trained alternatives and measures the change objectively.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Training","url":"/services/ai-pet-training"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How long does correction take?","acceptedAnswer":{"@type":"Answer","text":"Well-rehearsed behaviours take longer. Typically two to four weeks for recent habits and eight to twelve for behaviours practised over years."}},{"@type":"Question","name":"What if the behaviour is medical?","acceptedAnswer":{"@type":"Answer","text":"Sudden onset, especially in an adult animal, warrants veterinary assessment first. The system flags patterns consistent with pain or illness rather than training them away."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Training","item":"/services/ai-pet-training"},{"@type":"ListItem","position":4,"name":"Behavior Correction","item":"/services/ai-pet-training/behavior-correction"}]}'
)
),
	'/services/ai-pet-training/obedience-programs/' => array(
	'title' => 'AI Obedience Programs for Dogs | Reliable Cues | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Structured AI obedience programs that build reliable recall, loose-lead walking, stays and settles with per-environment reliability scoring.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'AI Obedience Programs for Dogs | Reliable Cues | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Structured AI obedience programs that build reliable recall, loose-lead walking, stays and settles with per-environment reliability scoring.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-training/obedience-programs/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'AI Obedience Programs for Dogs | Reliable Cues | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Structured AI obedience programs that build reliable recall, loose-lead walking, stays and settles with per-environment reliability scoring.'
)
),
	'canonical' => '/services/ai-pet-training/obedience-programs/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Obedience Programs","serviceType":"dog obedience program","description":"Structured AI obedience programs that build reliable recall, loose-lead walking, stays and settles with per-environment reliability scoring.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Training","url":"/services/ai-pet-training"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What reliability is good enough for off-lead walking?","acceptedAnswer":{"@type":"Answer","text":"We recommend a sustained 90% or better in a comparable distraction environment across at least thirty logged repetitions before considering off-lead access, alongside local legal requirements."}},{"@type":"Question","name":"Can multiple family members train the same dog?","acceptedAnswer":{"@type":"Answer","text":"Yes, and the platform tracks per-handler reliability, which frequently reveals that inconsistency between handlers is the real obstacle."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Training","item":"/services/ai-pet-training"},{"@type":"ListItem","position":4,"name":"Obedience Programs","item":"/services/ai-pet-training/obedience-programs"}]}'
)
),
	'/services/ai-pet-training/smart-training-devices/' => array(
	'title' => 'Smart Pet Training Devices | Treat Dispensers & Markers | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Smart training devices including remote treat dispensers, audio markers and interactive feeders, all reward-based and integrated with your programme.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Smart Pet Training Devices | Treat Dispensers & Markers | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Smart training devices including remote treat dispensers, audio markers and interactive feeders, all reward-based and integrated with your programme.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-training/smart-training-devices/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Smart Pet Training Devices | Treat Dispensers & Markers | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Smart training devices including remote treat dispensers, audio markers and interactive feeders, all reward-based and integrated with your programme.'
)
),
	'canonical' => '/services/ai-pet-training/smart-training-devices/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Smart Training Devices","serviceType":"smart pet training devices","description":"Smart training devices including remote treat dispensers, audio markers and interactive feeders, all reward-based and integrated with your programme.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Training","url":"/services/ai-pet-training"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Do you sell correction collars?","acceptedAnswer":{"@type":"Answer","text":"No. We do not manufacture, sell or integrate with shock, prong, spray or vibration correction devices under any circumstances."}},{"@type":"Question","name":"Can devices be used without the training programme?","acceptedAnswer":{"@type":"Answer","text":"Yes, they work standalone, though logging and adaptive pacing only function when linked to a programme."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Training","item":"/services/ai-pet-training"},{"@type":"ListItem","position":4,"name":"Smart Training Devices","item":"/services/ai-pet-training/smart-training-devices"}]}'
)
),
	'/services/ai-pet-training/training-analytics/' => array(
	'title' => 'Pet Training Analytics | Progress & Reliability Data | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Training analytics that measure learning rate, cue reliability, plateau detection and handler consistency across every session.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Training Analytics | Progress & Reliability Data | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Training analytics that measure learning rate, cue reliability, plateau detection and handler consistency across every session.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-training/training-analytics/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Training Analytics | Progress & Reliability Data | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Training analytics that measure learning rate, cue reliability, plateau detection and handler consistency across every session.'
)
),
	'canonical' => '/services/ai-pet-training/training-analytics/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Training Analytics","serviceType":"pet training analytics","description":"Training analytics that measure learning rate, cue reliability, plateau detection and handler consistency across every session.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Training","url":"/services/ai-pet-training"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Do I have to log every repetition manually?","acceptedAnswer":{"@type":"Answer","text":"No. Sessions run through the app or a smart device are logged automatically. Manual entry is available but rarely needed."}},{"@type":"Question","name":"Can I export training data?","acceptedAnswer":{"@type":"Answer","text":"Yes, as CSV or PDF, which is useful for trainers, competition records and boarding requirements."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Training","item":"/services/ai-pet-training"},{"@type":"ListItem","position":4,"name":"Training Analytics","item":"/services/ai-pet-training/training-analytics"}]}'
)
),
	'/services/smart-pet-care/smart-feeding-systems/' => array(
	'title' => 'Smart Pet Feeding Systems | Portion Control AI | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Smart feeding systems with gram-accurate portioning, per-pet identification and schedules that adapt to measured activity and body condition.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Smart Pet Feeding Systems | Portion Control AI | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Smart feeding systems with gram-accurate portioning, per-pet identification and schedules that adapt to measured activity and body condition.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/smart-pet-care/smart-feeding-systems/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Smart Pet Feeding Systems | Portion Control AI | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Smart feeding systems with gram-accurate portioning, per-pet identification and schedules that adapt to measured activity and body condition.'
)
),
	'canonical' => '/services/smart-pet-care/smart-feeding-systems/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Smart Feeding Systems","serviceType":"smart pet feeding system","description":"Smart feeding systems with gram-accurate portioning, per-pet identification and schedules that adapt to measured activity and body condition.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"Smart Pet Care","url":"/services/smart-pet-care"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How much food does the hopper hold?","acceptedAnswer":{"@type":"Answer","text":"The standard hopper holds 4.5kg of dry food, roughly two weeks for a medium dog, with a low-level alert well before it empties."}},{"@type":"Question","name":"Can I still hand feed?","acceptedAnswer":{"@type":"Answer","text":"Yes. Manual feeds can be logged in two taps so the intake record stays complete."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"Smart Pet Care","item":"/services/smart-pet-care"},{"@type":"ListItem","position":4,"name":"Smart Feeding Systems","item":"/services/smart-pet-care/smart-feeding-systems"}]}'
)
),
	'/services/smart-pet-care/hydration-monitoring/' => array(
	'title' => 'Pet Hydration Monitoring | Water Intake Tracking | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Pet hydration monitoring that measures water intake per animal and flags the polydipsia and dehydration patterns linked to renal and endocrine disease.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Hydration Monitoring | Water Intake Tracking | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Pet hydration monitoring that measures water intake per animal and flags the polydipsia and dehydration patterns linked to renal and endocrine disease.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/smart-pet-care/hydration-monitoring/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Hydration Monitoring | Water Intake Tracking | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Pet hydration monitoring that measures water intake per animal and flags the polydipsia and dehydration patterns linked to renal and endocrine disease.'
)
),
	'canonical' => '/services/smart-pet-care/hydration-monitoring/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Hydration Monitoring","serviceType":"pet hydration monitoring","description":"Pet hydration monitoring that measures water intake per animal and flags the polydipsia and dehydration patterns linked to renal and endocrine disease.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"Smart Pet Care","url":"/services/smart-pet-care"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What counts as excessive drinking?","acceptedAnswer":{"@type":"Answer","text":"Broadly, sustained intake above roughly 100ml per kilogram of bodyweight per day warrants veterinary investigation, though the alert threshold is tuned to your animal\'s own established baseline."}},{"@type":"Question","name":"Does evaporation distort the readings?","acceptedAnswer":{"@type":"Answer","text":"No. Evaporation is modelled from ambient temperature and humidity and subtracted from the intake figure."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"Smart Pet Care","item":"/services/smart-pet-care"},{"@type":"ListItem","position":4,"name":"Hydration Monitoring","item":"/services/smart-pet-care/hydration-monitoring"}]}'
)
),
	'/services/smart-pet-care/automated-care/' => array(
	'title' => 'Automated Pet Care | Smart Home Routines | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Automated pet care that coordinates feeding, lighting, climate, door access and enrichment into one reliable daily routine.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Automated Pet Care | Smart Home Routines | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Automated pet care that coordinates feeding, lighting, climate, door access and enrichment into one reliable daily routine.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/smart-pet-care/automated-care/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Automated Pet Care | Smart Home Routines | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Automated pet care that coordinates feeding, lighting, climate, door access and enrichment into one reliable daily routine.'
)
),
	'canonical' => '/services/smart-pet-care/automated-care/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Automated Care","serviceType":"automated pet care","description":"Automated pet care that coordinates feeding, lighting, climate, door access and enrichment into one reliable daily routine.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"Smart Pet Care","url":"/services/smart-pet-care"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Does it work with other smart home platforms?","acceptedAnswer":{"@type":"Answer","text":"Yes. Integrations are available for the major ecosystems, and a local API is provided for advanced setups."}},{"@type":"Question","name":"What if I want to override the routine?","acceptedAnswer":{"@type":"Answer","text":"Any routine can be paused or overridden instantly from the app, and the override is logged."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"Smart Pet Care","item":"/services/smart-pet-care"},{"@type":"ListItem","position":4,"name":"Automated Care","item":"/services/smart-pet-care/automated-care"}]}'
)
),
	'/services/smart-pet-care/care-scheduling/' => array(
	'title' => 'Pet Care Scheduling | Medication & Appointment Reminders | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Pet care scheduling for medication, parasite prevention, vaccinations, grooming and vet appointments with adherence tracking and shared household visibility.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Care Scheduling | Medication & Appointment Reminders | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Pet care scheduling for medication, parasite prevention, vaccinations, grooming and vet appointments with adherence tracking and shared household visibility.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/smart-pet-care/care-scheduling/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Care Scheduling | Medication & Appointment Reminders | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Pet care scheduling for medication, parasite prevention, vaccinations, grooming and vet appointments with adherence tracking and shared household visibility.'
)
),
	'canonical' => '/services/smart-pet-care/care-scheduling/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Care Scheduling","serviceType":"pet care scheduling","description":"Pet care scheduling for medication, parasite prevention, vaccinations, grooming and vet appointments with adherence tracking and shared household visibility.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"Smart Pet Care","url":"/services/smart-pet-care"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Can it handle complex medication schedules?","acceptedAnswer":{"@type":"Answer","text":"Yes, including tapering doses, alternating days, multiple daily doses and with-food requirements."}},{"@type":"Question","name":"Does it sync with my calendar?","acceptedAnswer":{"@type":"Answer","text":"Yes, appointments export to any calendar supporting standard subscription feeds."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"Smart Pet Care","item":"/services/smart-pet-care"},{"@type":"ListItem","position":4,"name":"Care Scheduling","item":"/services/smart-pet-care/care-scheduling"}]}'
)
),
	'/services/smart-pet-care/smart-devices/' => array(
	'title' => 'Smart Pet Devices | Sensors, Feeders & Cameras | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'The PawlogicTech smart device range: collar modules, environmental sensors, feeders, fountains and cameras, all built on one privacy-first platform.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Smart Pet Devices | Sensors, Feeders & Cameras | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'The PawlogicTech smart device range: collar modules, environmental sensors, feeders, fountains and cameras, all built on one privacy-first platform.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/smart-pet-care/smart-devices/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Smart Pet Devices | Sensors, Feeders & Cameras | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'The PawlogicTech smart device range: collar modules, environmental sensors, feeders, fountains and cameras, all built on one privacy-first platform.'
)
),
	'canonical' => '/services/smart-pet-care/smart-devices/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Smart Devices","serviceType":"smart pet devices","description":"The PawlogicTech smart device range: collar modules, environmental sensors, feeders, fountains and cameras, all built on one privacy-first platform.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"Smart Pet Care","url":"/services/smart-pet-care"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Are the devices waterproof?","acceptedAnswer":{"@type":"Answer","text":"The collar module is IP68 rated for swimming and bathing. Room sensors and feeders are indoor-rated only."}},{"@type":"Question","name":"Can I start with one device?","acceptedAnswer":{"@type":"Answer","text":"Yes. Most households begin with the collar module and add environmental hardware as they see value."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"Smart Pet Care","item":"/services/smart-pet-care"},{"@type":"ListItem","position":4,"name":"Smart Devices","item":"/services/smart-pet-care/smart-devices"}]}'
)
),
	'/services/ai-pet-safety/gps-tracking/' => array(
	'title' => 'Pet GPS Tracking | Live Location & History | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Live pet GPS tracking with three-metre outdoor accuracy, route history, indoor fallback positioning and intelligent battery management.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet GPS Tracking | Live Location & History | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Live pet GPS tracking with three-metre outdoor accuracy, route history, indoor fallback positioning and intelligent battery management.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-safety/gps-tracking/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet GPS Tracking | Live Location & History | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Live pet GPS tracking with three-metre outdoor accuracy, route history, indoor fallback positioning and intelligent battery management.'
)
),
	'canonical' => '/services/ai-pet-safety/gps-tracking/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"GPS Tracking","serviceType":"pet GPS tracking","description":"Live pet GPS tracking with three-metre outdoor accuracy, route history, indoor fallback positioning and intelligent battery management.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Safety","url":"/services/ai-pet-safety"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How heavy is the tracker?","acceptedAnswer":{"@type":"Answer","text":"The collar module is 24 grams, suitable for cats and dogs from 2.5kg upwards."}},{"@type":"Question","name":"Can I share live location with someone else?","acceptedAnswer":{"@type":"Answer","text":"Yes. Temporary live-location links can be issued to sitters, walkers or search volunteers and revoked at any time."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Safety","item":"/services/ai-pet-safety"},{"@type":"ListItem","position":4,"name":"GPS Tracking","item":"/services/ai-pet-safety/gps-tracking"}]}'
)
),
	'/services/ai-pet-safety/escape-prevention/' => array(
	'title' => 'Pet Escape Prevention AI | Risk Forecasting | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'AI escape prevention that forecasts risk from weather, fireworks and behavioural arousal, and detects boundary testing before an escape occurs.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Escape Prevention AI | Risk Forecasting | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'AI escape prevention that forecasts risk from weather, fireworks and behavioural arousal, and detects boundary testing before an escape occurs.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-safety/escape-prevention/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Escape Prevention AI | Risk Forecasting | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'AI escape prevention that forecasts risk from weather, fireworks and behavioural arousal, and detects boundary testing before an escape occurs.'
)
),
	'canonical' => '/services/ai-pet-safety/escape-prevention/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Escape Prevention","serviceType":"pet escape prevention","description":"AI escape prevention that forecasts risk from weather, fireworks and behavioural arousal, and detects boundary testing before an escape occurs.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Safety","url":"/services/ai-pet-safety"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Does this replace a secure fence?","acceptedAnswer":{"@type":"Answer","text":"No. It is an early warning layer on top of proper physical containment, never a substitute for it."}},{"@type":"Question","name":"How far ahead is risk forecast?","acceptedAnswer":{"@type":"Answer","text":"Up to seven days for weather-driven risk and further ahead for scheduled events such as public firework displays."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Safety","item":"/services/ai-pet-safety"},{"@type":"ListItem","position":4,"name":"Escape Prevention","item":"/services/ai-pet-safety/escape-prevention"}]}'
)
),
	'/services/ai-pet-safety/emergency-alerts/' => array(
	'title' => 'Pet Emergency Alerts | Instant Escalation | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Pet emergency alerts with instant escalation for escapes, heat stress, collisions and collapse, including a defined contact cascade.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Emergency Alerts | Instant Escalation | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Pet emergency alerts with instant escalation for escapes, heat stress, collisions and collapse, including a defined contact cascade.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-safety/emergency-alerts/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Emergency Alerts | Instant Escalation | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Pet emergency alerts with instant escalation for escapes, heat stress, collisions and collapse, including a defined contact cascade.'
)
),
	'canonical' => '/services/ai-pet-safety/emergency-alerts/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Emergency Alerts","serviceType":"pet emergency alerts","description":"Pet emergency alerts with instant escalation for escapes, heat stress, collisions and collapse, including a defined contact cascade.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Safety","url":"/services/ai-pet-safety"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What if I miss the alert?","acceptedAnswer":{"@type":"Answer","text":"Unacknowledged critical alerts escalate automatically to the next contact in your cascade after a delay you configure."}},{"@type":"Question","name":"Are false alarms common?","acceptedAnswer":{"@type":"Answer","text":"Critical thresholds are deliberately conservative. Vigorous play can occasionally trigger an impact alert, which is dismissed in one tap."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Safety","item":"/services/ai-pet-safety"},{"@type":"ListItem","position":4,"name":"Emergency Alerts","item":"/services/ai-pet-safety/emergency-alerts"}]}'
)
),
	'/services/ai-pet-safety/geofencing/' => array(
	'title' => 'Pet Geofencing | Safe Zones & Boundary Alerts | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Intelligent pet geofencing with multiple safe zones, hazard zones, time-based rules and instant boundary breach notifications.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Geofencing | Safe Zones & Boundary Alerts | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Intelligent pet geofencing with multiple safe zones, hazard zones, time-based rules and instant boundary breach notifications.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-safety/geofencing/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Geofencing | Safe Zones & Boundary Alerts | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Intelligent pet geofencing with multiple safe zones, hazard zones, time-based rules and instant boundary breach notifications.'
)
),
	'canonical' => '/services/ai-pet-safety/geofencing/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Geofencing","serviceType":"pet geofencing","description":"Intelligent pet geofencing with multiple safe zones, hazard zones, time-based rules and instant boundary breach notifications.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Safety","url":"/services/ai-pet-safety"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How many zones can I create?","acceptedAnswer":{"@type":"Answer","text":"Up to twenty zones per animal, each with independent rules and notification settings."}},{"@type":"Question","name":"Will it alert every time my cat crosses the garden line?","acceptedAnswer":{"@type":"Answer","text":"Only if you want it to. Dwell thresholds and quiet hours let you suppress routine crossings while keeping hazard alerts fully active."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Safety","item":"/services/ai-pet-safety"},{"@type":"ListItem","position":4,"name":"Geofencing","item":"/services/ai-pet-safety/geofencing"}]}'
)
),
	'/services/ai-pet-safety/safety-monitoring/' => array(
	'title' => 'Pet Safety Monitoring | Continuous Hazard Detection | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Continuous pet safety monitoring covering heat and cold exposure, hazard zones, prolonged inactivity and environmental risk in the home.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet Safety Monitoring | Continuous Hazard Detection | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Continuous pet safety monitoring covering heat and cold exposure, hazard zones, prolonged inactivity and environmental risk in the home.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/services/ai-pet-safety/safety-monitoring/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet Safety Monitoring | Continuous Hazard Detection | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Continuous pet safety monitoring covering heat and cold exposure, hazard zones, prolonged inactivity and environmental risk in the home.'
)
),
	'canonical' => '/services/ai-pet-safety/safety-monitoring/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Service","name":"Safety Monitoring","serviceType":"pet safety monitoring","description":"Continuous pet safety monitoring covering heat and cold exposure, hazard zones, prolonged inactivity and environmental risk in the home.","provider":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"isPartOf":{"@type":"Service","name":"AI Pet Safety","url":"/services/ai-pet-safety"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How many rooms should I cover?","acceptedAnswer":{"@type":"Answer","text":"Most households start with two sensors covering the main resting area and the highest thermal risk room, typically a conservatory or south-facing space."}},{"@type":"Question","name":"Does it work while I am on holiday?","acceptedAnswer":{"@type":"Answer","text":"Yes, and sitter mode gives your carer time-limited access with a full audit trail of visits."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Services","item":"/services"},{"@type":"ListItem","position":3,"name":"AI Pet Safety","item":"/services/ai-pet-safety"},{"@type":"ListItem","position":4,"name":"Safety Monitoring","item":"/services/ai-pet-safety/safety-monitoring"}]}'
)
),
	'/blog/' => array(
	'title' => 'Blog | Evidence-Led Pet Health, Behaviour & Safety Writing | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'The PawlogicTech blog: practical, evidence-led articles on pet health monitoring, behaviour, nutrition and safety, written by our veterinary and behavioural team.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Blog | Evidence-Led Pet Health, Behaviour & Safety Writing'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'The PawlogicTech blog: practical, evidence-led articles on pet health monitoring, behaviour, nutrition and safety, written by our veterinary and behavioural team.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/blog/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Blog | Evidence-Led Pet Health, Behaviour & Safety Writing'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'The PawlogicTech blog: practical, evidence-led articles on pet health monitoring, behaviour, nutrition and safety, written by our veterinary and behavioural team.'
)
),
	'canonical' => '/blog/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Blog","item":"/blog"}]}',
	'{"@context":"https://schema.org","@type":"Blog","name":"PawlogicTech Blog","description":"The PawlogicTech blog: practical, evidence-led articles on pet health monitoring, behaviour, nutrition and safety, written by our veterinary and behavioural team.","blogPost":[{"@type":"BlogPosting","headline":"The Early Signs of Illness in Dogs Most Owners Miss","datePublished":"2026-06-18","author":{"@type":"Person","name":"Dr. Amelia Hart BVSc MRCVS"},"url":"/blog/early-signs-of-illness-in-dogs"},{"@type":"BlogPosting","headline":"How AI Detects Pet Anxiety Before You Do","datePublished":"2026-05-29","author":{"@type":"Person","name":"Marcus Feld CCAB"},"url":"/blog/how-ai-detects-pet-anxiety"},{"@type":"BlogPosting","headline":"Smart Feeding and the Pet Obesity Problem","datePublished":"2026-05-11","author":{"@type":"Person","name":"Dr. Amelia Hart BVSc MRCVS"},"url":"/blog/smart-feeding-and-pet-obesity"},{"@type":"BlogPosting","headline":"What Vets Actually Want From Your Pet Health Data","datePublished":"2026-04-22","author":{"@type":"Person","name":"Dr. Amelia Hart BVSc MRCVS"},"url":"/blog/what-vets-want-from-pet-health-data"},{"@type":"BlogPosting","headline":"Preparing Your Pet for Fireworks Season, Properly","datePublished":"2026-03-30","author":{"@type":"Person","name":"Marcus Feld CCAB"},"url":"/blog/preparing-your-pet-for-fireworks-season"},{"@type":"BlogPosting","headline":"The Indoor Cat Enrichment Guide That Actually Works","datePublished":"2026-02-14","author":{"@type":"Person","name":"Marcus Feld CCAB"},"url":"/blog/indoor-cat-enrichment-guide"}]}'
)
),
	'/blog/early-signs-of-illness-in-dogs/' => array(
	'title' => 'Early Signs of Illness in Dogs | What Owners Miss | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Dogs hide illness by instinct. Learn the eight measurable early signs of illness in dogs, why they are missed, and how continuous monitoring surfaces them sooner.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Early Signs of Illness in Dogs | What Owners Miss | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Dogs hide illness by instinct. Learn the eight measurable early signs of illness in dogs, why they are missed, and how continuous monitoring surfaces them sooner.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'article'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/blog/early-signs-of-illness-in-dogs/'
),
	array(
	'key' => 'article:published_time',
	'attr' => 'property',
	'content' => '2026-06-18'
),
	array(
	'key' => 'article:author',
	'attr' => 'property',
	'content' => 'Dr. Amelia Hart BVSc MRCVS'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Early Signs of Illness in Dogs | What Owners Miss | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Dogs hide illness by instinct. Learn the eight measurable early signs of illness in dogs, why they are missed, and how continuous monitoring surfaces them sooner.'
)
),
	'canonical' => '/blog/early-signs-of-illness-in-dogs/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Article","headline":"The Early Signs of Illness in Dogs Most Owners Miss","description":"Dogs hide illness by instinct. Learn the eight measurable early signs of illness in dogs, why they are missed, and how continuous monitoring surfaces them sooner.","datePublished":"2026-06-18","dateModified":"2026-06-18","wordCount":290,"articleSection":"Pet Health","author":{"@type":"Person","name":"Dr. Amelia Hart BVSc MRCVS","jobTitle":"Veterinary Lead, PawlogicTech"},"publisher":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"mainEntityOfPage":{"@type":"WebPage","@id":"/blog/early-signs-of-illness-in-dogs"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How often should a healthy adult dog see a vet?","acceptedAnswer":{"@type":"Answer","text":"Annually for adults, and every six months for animals over seven years old. Continuous monitoring supplements those visits rather than replacing them."}},{"@type":"Question","name":"Is a slight increase in drinking always serious?","acceptedAnswer":{"@type":"Answer","text":"Not always, since heat, exercise and diet change all affect intake. A sustained rise over more than a week, unexplained by those factors, warrants veterinary assessment."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Blog","item":"/blog"},{"@type":"ListItem","position":3,"name":"The Early Signs of Illness in Dogs Most Owners Miss","item":"/blog/early-signs-of-illness-in-dogs"}]}'
)
),
	'/blog/how-ai-detects-pet-anxiety/' => array(
	'title' => 'How AI Detects Pet Anxiety | Separation Distress | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Separation anxiety peaks minutes after you leave, which is exactly when you cannot observe it. Here is how AI measures pet anxiety objectively and what to do with the data.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'How AI Detects Pet Anxiety | Separation Distress | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Separation anxiety peaks minutes after you leave, which is exactly when you cannot observe it. Here is how AI measures pet anxiety objectively and what to do with the data.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'article'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/blog/how-ai-detects-pet-anxiety/'
),
	array(
	'key' => 'article:published_time',
	'attr' => 'property',
	'content' => '2026-05-29'
),
	array(
	'key' => 'article:author',
	'attr' => 'property',
	'content' => 'Marcus Feld CCAB'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'How AI Detects Pet Anxiety | Separation Distress | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Separation anxiety peaks minutes after you leave, which is exactly when you cannot observe it. Here is how AI measures pet anxiety objectively and what to do with the data.'
)
),
	'canonical' => '/blog/how-ai-detects-pet-anxiety/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Article","headline":"How AI Detects Pet Anxiety Before You Do","description":"Separation anxiety peaks minutes after you leave, which is exactly when you cannot observe it. Here is how AI measures pet anxiety objectively and what to do with the data.","datePublished":"2026-05-29","dateModified":"2026-05-29","wordCount":299,"articleSection":"Behaviour","author":{"@type":"Person","name":"Marcus Feld CCAB","jobTitle":"Head of Behavioural Science, PawlogicTech"},"publisher":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"mainEntityOfPage":{"@type":"WebPage","@id":"/blog/how-ai-detects-pet-anxiety"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Can anxiety be cured?","acceptedAnswer":{"@type":"Answer","text":"Mild to moderate separation anxiety often resolves substantially with consistent graduated protocols. Severe cases usually improve markedly but may require ongoing management and, in some cases, veterinary-prescribed medication alongside behavioural work."}},{"@type":"Question","name":"Does getting a second pet help?","acceptedAnswer":{"@type":"Answer","text":"Rarely, if the distress is specifically about separation from a person. It can help with generalised boredom, but it also risks two anxious animals instead of one."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Blog","item":"/blog"},{"@type":"ListItem","position":3,"name":"How AI Detects Pet Anxiety Before You Do","item":"/blog/how-ai-detects-pet-anxiety"}]}'
)
),
	'/blog/smart-feeding-and-pet-obesity/' => array(
	'title' => 'Smart Feeding & Pet Obesity | Portion Control Data | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'More than half of companion animals are overweight. Learn why feeding guides fail, how portion drift happens, and what measured feeding changes in practice.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Smart Feeding & Pet Obesity | Portion Control Data | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'More than half of companion animals are overweight. Learn why feeding guides fail, how portion drift happens, and what measured feeding changes in practice.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'article'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/blog/smart-feeding-and-pet-obesity/'
),
	array(
	'key' => 'article:published_time',
	'attr' => 'property',
	'content' => '2026-05-11'
),
	array(
	'key' => 'article:author',
	'attr' => 'property',
	'content' => 'Dr. Amelia Hart BVSc MRCVS'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Smart Feeding & Pet Obesity | Portion Control Data | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'More than half of companion animals are overweight. Learn why feeding guides fail, how portion drift happens, and what measured feeding changes in practice.'
)
),
	'canonical' => '/blog/smart-feeding-and-pet-obesity/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Article","headline":"Smart Feeding and the Pet Obesity Problem","description":"More than half of companion animals are overweight. Learn why feeding guides fail, how portion drift happens, and what measured feeding changes in practice.","datePublished":"2026-05-11","dateModified":"2026-05-11","wordCount":282,"articleSection":"Nutrition","author":{"@type":"Person","name":"Dr. Amelia Hart BVSc MRCVS","jobTitle":"Veterinary Lead, PawlogicTech"},"publisher":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"mainEntityOfPage":{"@type":"WebPage","@id":"/blog/smart-feeding-and-pet-obesity"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How do I know if my pet is overweight?","acceptedAnswer":{"@type":"Answer","text":"Use the nine-point body condition score. You should be able to feel ribs easily under a thin fat layer, see a waist from above and a tucked abdomen from the side. Photo-assisted scoring in the app guides you through it."}},{"@type":"Question","name":"Do treats really matter that much?","acceptedAnswer":{"@type":"Answer","text":"Considerably. For a ten-kilogram dog, two dental chews can represent close to a quarter of daily energy requirements."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Blog","item":"/blog"},{"@type":"ListItem","position":3,"name":"Smart Feeding and the Pet Obesity Problem","item":"/blog/smart-feeding-and-pet-obesity"}]}'
)
),
	'/blog/what-vets-want-from-pet-health-data/' => array(
	'title' => 'What Vets Want From Pet Health Data | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Continuous monitoring only helps if the clinic can use it. Veterinary professionals explain which data changes decisions and which is simply noise.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'What Vets Want From Pet Health Data | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Continuous monitoring only helps if the clinic can use it. Veterinary professionals explain which data changes decisions and which is simply noise.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'article'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/blog/what-vets-want-from-pet-health-data/'
),
	array(
	'key' => 'article:published_time',
	'attr' => 'property',
	'content' => '2026-04-22'
),
	array(
	'key' => 'article:author',
	'attr' => 'property',
	'content' => 'Dr. Amelia Hart BVSc MRCVS'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'What Vets Want From Pet Health Data | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Continuous monitoring only helps if the clinic can use it. Veterinary professionals explain which data changes decisions and which is simply noise.'
)
),
	'canonical' => '/blog/what-vets-want-from-pet-health-data/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Article","headline":"What Vets Actually Want From Your Pet Health Data","description":"Continuous monitoring only helps if the clinic can use it. Veterinary professionals explain which data changes decisions and which is simply noise.","datePublished":"2026-04-22","dateModified":"2026-04-22","wordCount":215,"articleSection":"Veterinary","author":{"@type":"Person","name":"Dr. Amelia Hart BVSc MRCVS","jobTitle":"Veterinary Lead, PawlogicTech"},"publisher":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"mainEntityOfPage":{"@type":"WebPage","@id":"/blog/what-vets-want-from-pet-health-data"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Will my vet accept data from a consumer device?","acceptedAnswer":{"@type":"Answer","text":"Increasingly yes, particularly for trend evidence such as weight, water intake and night-time activity. Presenting it as a structured summary rather than raw screenshots makes acceptance far more likely."}},{"@type":"Question","name":"Can monitoring data support an insurance claim?","acceptedAnswer":{"@type":"Answer","text":"It frequently helps, especially in establishing the date of onset in pre-existing condition disputes. Policies vary, so check the specific requirements with your insurer."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Blog","item":"/blog"},{"@type":"ListItem","position":3,"name":"What Vets Actually Want From Your Pet Health Data","item":"/blog/what-vets-want-from-pet-health-data"}]}'
)
),
	'/blog/preparing-your-pet-for-fireworks-season/' => array(
	'title' => 'Fireworks Anxiety in Pets | Preparation Guide | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Fireworks cause the highest annual spike in pet escapes. A practical, evidence-led preparation plan starting eight weeks out, plus what to do on the night.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Fireworks Anxiety in Pets | Preparation Guide | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Fireworks cause the highest annual spike in pet escapes. A practical, evidence-led preparation plan starting eight weeks out, plus what to do on the night.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'article'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/blog/preparing-your-pet-for-fireworks-season/'
),
	array(
	'key' => 'article:published_time',
	'attr' => 'property',
	'content' => '2026-03-30'
),
	array(
	'key' => 'article:author',
	'attr' => 'property',
	'content' => 'Marcus Feld CCAB'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Fireworks Anxiety in Pets | Preparation Guide | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Fireworks cause the highest annual spike in pet escapes. A practical, evidence-led preparation plan starting eight weeks out, plus what to do on the night.'
)
),
	'canonical' => '/blog/preparing-your-pet-for-fireworks-season/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Article","headline":"Preparing Your Pet for Fireworks Season, Properly","description":"Fireworks cause the highest annual spike in pet escapes. A practical, evidence-led preparation plan starting eight weeks out, plus what to do on the night.","datePublished":"2026-03-30","dateModified":"2026-03-30","wordCount":253,"articleSection":"Safety","author":{"@type":"Person","name":"Marcus Feld CCAB","jobTitle":"Head of Behavioural Science, PawlogicTech"},"publisher":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"mainEntityOfPage":{"@type":"WebPage","@id":"/blog/preparing-your-pet-for-fireworks-season"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Do calming vests and pheromone diffusers work?","acceptedAnswer":{"@type":"Answer","text":"Evidence is mixed and effects tend to be modest. They are reasonable additions to a full preparation plan but poor substitutes for desensitisation, and they will not manage severe phobia alone."}},{"@type":"Question","name":"Should I take my dog out to see the fireworks?","acceptedAnswer":{"@type":"Answer","text":"No. Exposure at full intensity without preparation is flooding, which typically worsens the phobia rather than resolving it."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Blog","item":"/blog"},{"@type":"ListItem","position":3,"name":"Preparing Your Pet for Fireworks Season, Properly","item":"/blog/preparing-your-pet-for-fireworks-season"}]}'
)
),
	'/blog/indoor-cat-enrichment-guide/' => array(
	'title' => 'Indoor Cat Enrichment Guide | Evidence-Led | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Indoor cats live longer but face boredom, stress and obesity. An evidence-led enrichment plan covering vertical space, hunting simulation and resource layout.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Indoor Cat Enrichment Guide | Evidence-Led | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Indoor cats live longer but face boredom, stress and obesity. An evidence-led enrichment plan covering vertical space, hunting simulation and resource layout.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'article'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/blog/indoor-cat-enrichment-guide/'
),
	array(
	'key' => 'article:published_time',
	'attr' => 'property',
	'content' => '2026-02-14'
),
	array(
	'key' => 'article:author',
	'attr' => 'property',
	'content' => 'Marcus Feld CCAB'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Indoor Cat Enrichment Guide | Evidence-Led | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Indoor cats live longer but face boredom, stress and obesity. An evidence-led enrichment plan covering vertical space, hunting simulation and resource layout.'
)
),
	'canonical' => '/blog/indoor-cat-enrichment-guide/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"Article","headline":"The Indoor Cat Enrichment Guide That Actually Works","description":"Indoor cats live longer but face boredom, stress and obesity. An evidence-led enrichment plan covering vertical space, hunting simulation and resource layout.","datePublished":"2026-02-14","dateModified":"2026-02-14","wordCount":261,"articleSection":"Behaviour","author":{"@type":"Person","name":"Marcus Feld CCAB","jobTitle":"Head of Behavioural Science, PawlogicTech"},"publisher":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"},"mainEntityOfPage":{"@type":"WebPage","@id":"/blog/indoor-cat-enrichment-guide"}}',
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How much play does an indoor cat need daily?","acceptedAnswer":{"@type":"Answer","text":"Aim for several short sessions totalling twenty to thirty minutes. Short and frequent matches natural hunting patterns far better than one long session."}},{"@type":"Question","name":"Do cats get bored of their toys?","acceptedAnswer":{"@type":"Answer","text":"Yes, habituation is rapid. Rotating a small selection weekly keeps novelty high without accumulating a cupboard full of ignored toys."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Blog","item":"/blog"},{"@type":"ListItem","position":3,"name":"The Indoor Cat Enrichment Guide That Actually Works","item":"/blog/indoor-cat-enrichment-guide"}]}'
)
),
	'/faq/' => array(
	'title' => 'Pet AI FAQ | Monitoring, Privacy, Devices & Setup | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Answers to the questions we are asked most: what PawlogicTech measures, how accurate it is, what happens to your data, device compatibility and getting started.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Pet AI FAQ | Monitoring, Privacy, Devices & Setup'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Answers to the questions we are asked most: what PawlogicTech measures, how accurate it is, what happens to your data, device compatibility and getting started.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/faq/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Pet AI FAQ | Monitoring, Privacy, Devices & Setup'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Answers to the questions we are asked most: what PawlogicTech measures, how accurate it is, what happens to your data, device compatibility and getting started.'
)
),
	'canonical' => '/faq/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What exactly does PawlogicTech do?","acceptedAnswer":{"@type":"Answer","text":"We build AI-driven pet care systems across five areas: health monitoring, behaviour analysis, training, smart daily care and safety. Sensors gather objective data about your animal, our models compare it against that animal\'s own baseline, and you receive clear, graded guidance about what needs attention."}},{"@type":"Question","name":"Is this a replacement for veterinary care?","acceptedAnswer":{"@type":"Answer","text":"No. PawlogicTech is a monitoring, triage and management platform. It surfaces evidence earlier and structures it for clinical review, but diagnosis and treatment are always the responsibility of a qualified veterinary professional."}},{"@type":"Question","name":"Which animals are supported?","acceptedAnswer":{"@type":"Answer","text":"Dogs and cats from 2.5kg upwards are fully supported today. Support for rabbits and other small companion animals is in development with our veterinary advisory panel."}},{"@type":"Question","name":"How long before the system is useful?","acceptedAnswer":{"@type":"Answer","text":"Setup takes under thirty minutes. A fourteen-day baseline calibration follows, after which anomaly detection becomes accurate. Behavioural trigger correlation typically needs two to three weeks of observation."}},{"@type":"Question","name":"What happens to my data?","acceptedAnswer":{"@type":"Answer","text":"It is encrypted in transit and at rest, stored under your account, and fully exportable or deletable at any time. We do not sell data to insurers, advertisers or data brokers. Household audio is classified on-device and never transmitted."}},{"@type":"Question","name":"Do the devices work without internet?","acceptedAnswer":{"@type":"Answer","text":"Core functions continue offline. Feeding schedules, geofence alerts within range of your home hub and local data logging all operate normally, syncing once connectivity returns. Remote control and cellular tracking require a connection."}},{"@type":"Question","name":"Do you use aversive training methods or hardware?","acceptedAnswer":{"@type":"Answer","text":"Never. We do not manufacture, sell or integrate with shock, prong, spray or vibration correction devices, and our training programmes are exclusively reward-based."}},{"@type":"Question","name":"How do I get started?","acceptedAnswer":{"@type":"Answer","text":"Book a consultation through our contact page. We will discuss your animals, your household and your goals, then recommend the smallest configuration that actually solves your problem rather than the largest one we can sell."}},{"@type":"Question","name":"Does AI pet health monitoring replace my veterinarian?","acceptedAnswer":{"@type":"Answer","text":"No, and it is not designed to. PawlogicTech is a monitoring and triage tool. It surfaces objective evidence earlier so that your veterinarian can diagnose and treat sooner. Every alert directs you to professional care when clinically appropriate."}},{"@type":"Question","name":"How accurate are the alerts?","acceptedAnswer":{"@type":"Answer","text":"Accuracy depends on baseline quality. After a complete 14-day calibration our resting heart rate and respiration readings track clinical measurements closely, and severity grading is tuned to minimise false alarms rather than maximise alert volume."}},{"@type":"Question","name":"Is my home audio being recorded and stored?","acceptedAnswer":{"@type":"Answer","text":"No. Audio is processed on the device itself and discarded immediately. Only classified event labels, such as \'distress vocalisation, 4 minutes\', are transmitted. Human speech is never stored or transmitted."}},{"@type":"Question","name":"Can this replace a qualified behaviourist?","acceptedAnswer":{"@type":"Answer","text":"For mild cases it is often sufficient on its own. For aggression, severe anxiety or bite history you need a certified behaviourist, and our data makes their work substantially more effective."}},{"@type":"Question","name":"Does PawlogicTech use any aversive methods?","acceptedAnswer":{"@type":"Answer","text":"No. The platform is exclusively reward-based. We do not support or integrate with shock, prong, spray or vibration correction devices, and we will not generate programmes that rely on aversive techniques."}},{"@type":"Question","name":"How much time does it take each day?","acceptedAnswer":{"@type":"Answer","text":"Three to five sessions of two to five minutes each. Short and frequent consistently outperforms one long daily session, and the scheduler is built around that finding."}},{"@type":"Question","name":"What happens during a power cut?","acceptedAnswer":{"@type":"Answer","text":"Feeders hold a battery reserve sufficient for at least two scheduled meals and retain their schedule. You receive an immediate outage notification, and dispensing resumes automatically on restoration."}},{"@type":"Question","name":"Can it stop one pet eating another\'s food?","acceptedAnswer":{"@type":"Answer","text":"Yes. Per-pet identification using RFID tags and weight signature means a bowl only opens for the animal it belongs to."}},{"@type":"Question","name":"How accurate is the location tracking?","acceptedAnswer":{"@type":"Answer","text":"Typically three to five metres outdoors with clear sky. In dense urban environments or indoors, accuracy is maintained to roughly ten to fifteen metres using assisted positioning."}},{"@type":"Question","name":"What is the battery life?","acceptedAnswer":{"@type":"Answer","text":"Around fourteen days in standard monitoring. In active tracking mode during a recovery, expect approximately eighteen hours of continuous high-frequency reporting."}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"FAQ","item":"/faq"}]}'
)
),
	'/gallery/' => array(
	'title' => 'Gallery | PawlogicTech Devices, Homes & Clinics',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'A look at PawlogicTech in daily use: collar modules, environmental sensors, monitored homes and health reports in veterinary review.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Gallery | PawlogicTech Devices, Homes & Clinics'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'A look at PawlogicTech in daily use: collar modules, environmental sensors, monitored homes and health reports in veterinary review.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/gallery/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Gallery | PawlogicTech Devices, Homes & Clinics'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'A look at PawlogicTech in daily use: collar modules, environmental sensors, monitored homes and health reports in veterinary review.'
)
),
	'canonical' => '/gallery/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Gallery","item":"/gallery"}]}'
)
),
	'/testimonials/' => array(
	'title' => 'Testimonials | What Owners, Vets & Facilities Say | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Real accounts from pet owners, veterinary surgeons and boarding facilities using PawlogicTech health monitoring, behaviour analysis and safety systems.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Testimonials | What Owners, Vets & Facilities Say'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Real accounts from pet owners, veterinary surgeons and boarding facilities using PawlogicTech health monitoring, behaviour analysis and safety systems.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/testimonials/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Testimonials | What Owners, Vets & Facilities Say'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Real accounts from pet owners, veterinary surgeons and boarding facilities using PawlogicTech health monitoring, behaviour analysis and safety systems.'
)
),
	'canonical' => '/testimonials/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"ItemList","name":"PawlogicTech client testimonials","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"Review","reviewBody":"The resting heart rate trend flagged a change three weeks before Bruno showed any symptom. Our vet found early mitral valve disease. Three weeks earlier means a completely different management plan.","author":{"@type":"Person","name":"Helena Marsh"},"itemReviewed":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"}}},{"@type":"ListItem","position":2,"item":{"@type":"Review","reviewBody":"We fit the monitoring platform across our boarding kennels last year. Being able to show an owner objective evidence that their dog slept well and ate normally has removed almost every difficult conversation we used to have.","author":{"@type":"Person","name":"Daniel Okonjo"},"itemReviewed":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"}}},{"@type":"ListItem","position":3,"item":{"@type":"Review","reviewBody":"I was sceptical about behavioural AI. What convinced me was the trigger correlation. It identified that my dog\'s reactivity clustered around bin collection days, which I would never have connected on my own.","author":{"@type":"Person","name":"Priya Raman"},"itemReviewed":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"}}},{"@type":"ListItem","position":4,"item":{"@type":"Review","reviewBody":"As a first-opinion vet I see a lot of consumer pet tech, most of it unusable in a consult. PawlogicTech reports are the first ones structured the way I actually think. Trend, onset date, raw data underneath.","author":{"@type":"Person","name":"Dr. Sinead Carroll MRCVS"},"itemReviewed":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"}}},{"@type":"ListItem","position":5,"item":{"@type":"Review","reviewBody":"Nutrition Intelligence took our cat from 6.4kg to a healthy 4.9kg over eight months. Slow, safe and measured, and the vet was happy with every step of it.","author":{"@type":"Person","name":"Tom Iversen"},"itemReviewed":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"}}},{"@type":"ListItem","position":6,"item":{"@type":"Review","reviewBody":"The geofence alert reached me forty seconds after Willow got through a gap in the fence. We found her two streets away. Forty seconds against the twenty minutes it would have taken me to notice.","author":{"@type":"Person","name":"Grace Whitfield"},"itemReviewed":{"@type":"Organization","name":"PawlogicTech","@id":"/#organization"}}}]}',
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Testimonials","item":"/testimonials"}]}'
)
),
	'/contact/' => array(
	'title' => 'Contact PawlogicTech | Book a Pet AI Consultation',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Contact the PawlogicTech team to book a free consultation about pet health monitoring, behaviour analysis, training, smart care or safety. London-based, replies within one working day.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Contact PawlogicTech | Book a Pet AI Consultation'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Contact the PawlogicTech team to book a free consultation about pet health monitoring, behaviour analysis, training, smart care or safety. London-based, replies within one working day.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/contact/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Contact PawlogicTech | Book a Pet AI Consultation'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Contact the PawlogicTech team to book a free consultation about pet health monitoring, behaviour analysis, training, smart care or safety. London-based, replies within one working day.'
)
),
	'canonical' => '/contact/',
	'jsonld' => array(
	'{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Contact","item":"/contact"}]}',
	'{"@context":"https://schema.org","@type":"ContactPage","name":"Contact PawlogicTech","mainEntity":{"@type":"Organization","@id":"/#organization","name":"PawlogicTech","email":"hello@pawlogictech.com","telephone":"+44 20 4526 8810"}}'
)
),
	'/html-sitemap/' => array(
	'title' => 'HTML Sitemap | Every PawlogicTech Page',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'A complete index of PawlogicTech pages: services, sub-services, articles, company pages and legal documentation.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'HTML Sitemap | Every PawlogicTech Page'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'A complete index of PawlogicTech pages: services, sub-services, articles, company pages and legal documentation.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/html-sitemap/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'HTML Sitemap | Every PawlogicTech Page'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'A complete index of PawlogicTech pages: services, sub-services, articles, company pages and legal documentation.'
)
),
	'canonical' => '/html-sitemap/',
	'jsonld' => array(

)
),
	'/privacy-policy/' => array(
	'title' => 'Privacy Policy | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'How PawlogicTech collects, processes, stores and protects personal and pet data, including on-device audio classification and your rights under UK GDPR.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Privacy Policy | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'How PawlogicTech collects, processes, stores and protects personal and pet data, including on-device audio classification and your rights under UK GDPR.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/privacy-policy/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Privacy Policy | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'How PawlogicTech collects, processes, stores and protects personal and pet data, including on-device audio classification and your rights under UK GDPR.'
)
),
	'canonical' => '/privacy-policy/',
	'jsonld' => array(

)
),
	'/terms-and-conditions/' => array(
	'title' => 'Terms & Conditions | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'The terms governing use of the PawlogicTech website, platform and devices, including service scope, subscriptions, warranties and limitations of liability.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Terms & Conditions | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'The terms governing use of the PawlogicTech website, platform and devices, including service scope, subscriptions, warranties and limitations of liability.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/terms-and-conditions/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Terms & Conditions | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'The terms governing use of the PawlogicTech website, platform and devices, including service scope, subscriptions, warranties and limitations of liability.'
)
),
	'canonical' => '/terms-and-conditions/',
	'jsonld' => array(

)
),
	'/cookie-policy/' => array(
	'title' => 'Cookie Policy | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Which cookies PawlogicTech uses, what each category does, how long they last and how to control them in your browser.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Cookie Policy | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Which cookies PawlogicTech uses, what each category does, how long they last and how to control them in your browser.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/cookie-policy/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Cookie Policy | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Which cookies PawlogicTech uses, what each category does, how long they last and how to control them in your browser.'
)
),
	'canonical' => '/cookie-policy/',
	'jsonld' => array(

)
),
	'/disclaimer/' => array(
	'title' => 'Disclaimer | PawlogicTech',
	'meta' => array(
	array(
	'key' => 'description',
	'attr' => 'name',
	'content' => 'Important limitations on PawlogicTech guidance: our platform supports veterinary care and does not diagnose, treat or replace professional clinical judgement.'
),
	array(
	'key' => 'og:title',
	'attr' => 'property',
	'content' => 'Disclaimer | PawlogicTech'
),
	array(
	'key' => 'og:description',
	'attr' => 'property',
	'content' => 'Important limitations on PawlogicTech guidance: our platform supports veterinary care and does not diagnose, treat or replace professional clinical judgement.'
),
	array(
	'key' => 'og:type',
	'attr' => 'property',
	'content' => 'website'
),
	array(
	'key' => 'og:url',
	'attr' => 'property',
	'content' => '/disclaimer/'
),
	array(
	'key' => 'twitter:title',
	'attr' => 'name',
	'content' => 'Disclaimer | PawlogicTech'
),
	array(
	'key' => 'twitter:description',
	'attr' => 'name',
	'content' => 'Important limitations on PawlogicTech guidance: our platform supports veterinary care and does not diagnose, treat or replace professional clinical judgement.'
)
),
	'canonical' => '/disclaimer/',
	'jsonld' => array(

)
)
);
}
