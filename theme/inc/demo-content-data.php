<?php
/**
 * Demo content installed on theme activation so the theme matches the original site out of the box.
 *
 * @package PawlogicTech
 */

defined( 'ABSPATH' ) || exit;

function pwt_demo_posts() {
	return array(
		array(
			'slug' => 'early-signs-of-illness-in-dogs',
			'title' => 'The Early Signs of Illness in Dogs Most Owners Miss',
			'excerpt' => 'By the time a dog looks unwell, the condition has usually been developing for weeks. These are the eight signals that appear first, and why almost nobody notices them.',
			'date' => '2026-06-18',
			'category' => 'Pet Health',
			'content' => '<section class="mb-12">
<h2 id="why-dogs-hide-illness" class="text-2xl leading-snug sm:text-3xl">Why dogs hide illness</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Concealing weakness is an evolutionary advantage. A visibly compromised animal is a target, so dogs and cats developed a strong instinct to behave normally for as long as physically possible. Domestication has not removed that instinct.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">The practical consequence is that visible symptoms mark a late stage rather than an early one. What changes first is physiology and routine, and both are subtle enough to be absorbed into everyday life without comment.</p>
</section>
<section class="mb-12">
<h2 id="the-eight-signals-that-appear-first" class="text-2xl leading-snug sm:text-3xl">The eight signals that appear first</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">In our monitoring data, these are the changes that most reliably precede a clinical diagnosis. Individually, any one of them may be meaningless. Together, or sustained over more than a week, they matter.</p>
<ul class="mt-6 space-y-3"><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Resting heart rate creeping upward by five to ten beats per minute over several weeks.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Increased night-time repositioning, the earliest reliable orthopaedic pain marker.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>A gradual decline in voluntary activity, distinct from a single lazy day.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Water intake rising steadily, often the first sign of renal or endocrine disease.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Slightly slower eating, or leaving a small amount of food consistently.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Reduced enthusiasm for one specific activity, such as stairs or jumping into the car.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Subtle gait asymmetry, measurable long before a visible limp.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Changes in greeting behaviour, which often reflect discomfort rather than mood.</li></ul>
</section>
<section class="mb-12">
<h2 id="why-these-signals-get-missed" class="text-2xl leading-snug sm:text-3xl">Why these signals get missed</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Human memory is poor at gradual change. If your dog slows by one percent a week, you will never notice it, but over three months that is a substantial functional decline.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Veterinary consultations compound the problem. A clinic visit measures a stressed animal in an unfamiliar environment for fifteen minutes, once or twice a year, which is a very small sample of a life.</p>
</section>
<section class="mb-12">
<h2 id="what-to-do-with-the-information" class="text-2xl leading-snug sm:text-3xl">What to do with the information</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">A single flagged trend is not a diagnosis. The correct response is to document it and take it to your veterinarian, ideally with dated evidence rather than an impression.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Objective data changes the consultation entirely. A vet presented with ninety days of resting heart rate trend has a genuine starting point, and diagnostic testing can be targeted rather than exploratory.</p>
</section>
<section class="mb-12">
<h2 id="the-economics-of-early-detection" class="text-2xl leading-snug sm:text-3xl">The economics of early detection</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Early intervention is consistently cheaper. Chronic conditions caught in an initial stage are frequently managed with diet and monitoring, while the same condition found late often requires ongoing medication, repeated diagnostics or surgery.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">There is a welfare argument that matters more. Pain managed early is pain not experienced for months while everyone assumed the animal was simply slowing down with age.</p>
</section>',
			'faqs' => array(
				array(
					'q' => 'How often should a healthy adult dog see a vet?',
					'a' => 'Annually for adults, and every six months for animals over seven years old. Continuous monitoring supplements those visits rather than replacing them.'
				),
				array(
					'q' => 'Is a slight increase in drinking always serious?',
					'a' => 'Not always, since heat, exercise and diet change all affect intake. A sustained rise over more than a week, unexplained by those factors, warrants veterinary assessment.'
				)
			)
		),
		array(
			'slug' => 'how-ai-detects-pet-anxiety',
			'title' => 'How AI Detects Pet Anxiety Before You Do',
			'excerpt' => 'The behaviour you most need to understand happens when nobody is home. Measurement solves a problem that observation structurally cannot.',
			'date' => '2026-05-29',
			'category' => 'Behaviour',
			'content' => '<section class="mb-12">
<h2 id="the-observation-problem" class="text-2xl leading-snug sm:text-3xl">The observation problem</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Separation distress typically peaks within the first thirty minutes after departure and then partially subsides. That window is, by definition, unobservable by the owner.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Owners therefore reason backwards from evidence: a chewed door frame, a complaint from a neighbour, a puddle in the hallway. All of these are late-stage outcomes, and none of them tell you about severity or trajectory.</p>
</section>
<section class="mb-12">
<h2 id="what-anxiety-actually-looks-like-in-data" class="text-2xl leading-snug sm:text-3xl">What anxiety actually looks like in data</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Physiologically, anxiety is straightforward to measure. Heart rate rises, heart rate variability collapses, and neither recovers in the way they would after exercise.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Behaviourally, distress produces a recognisable signature: pacing along consistent routes, repeated door checking, displacement behaviours such as yawning and lip licking, and vocalisation with a distinct acoustic profile from an alert bark.</p>
</section>
<section class="mb-12">
<h2 id="building-a-severity-score" class="text-2xl leading-snug sm:text-3xl">Building a severity score</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">The clinically useful output is not a binary anxious or not anxious label. It is a graded score that combines peak arousal, time to settle, and total distress duration.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">That number is what makes treatment measurable. A dog whose settle time falls from forty minutes to twelve is improving, even if the owner still comes home to occasional evidence of distress.</p>
<ul class="mt-6 space-y-3"><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Peak physiological arousal in the first thirty minutes.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Time to settle, meaning return to baseline heart rate.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Total minutes of classified distress behaviour.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Recovery consistency across repeated departures.</li></ul>
</section>
<section class="mb-12">
<h2 id="privacy-is-not-optional-here" class="text-2xl leading-snug sm:text-3xl">Privacy is not optional here</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Detecting distress vocalisation requires listening, which raises an obvious concern about household audio. Our position is that audio should never leave the device.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Classification runs locally on the sensor. The audio stream is analysed and discarded in memory, and only an event label such as distress vocalisation, four minutes, leaves your home. Human speech is never stored or transmitted.</p>
</section>
<section class="mb-12">
<h2 id="turning-measurement-into-improvement" class="text-2xl leading-snug sm:text-3xl">Turning measurement into improvement</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Once severity is measurable, graduated departure protocols become straightforward to run properly. You extend absence duration only when the previous duration produces a settled response, which is the step most owners skip.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Where scores remain high after eight to twelve weeks of consistent work, that is the point to involve a veterinary behaviourist. Arriving with a measured history makes that appointment dramatically more productive.</p>
</section>',
			'faqs' => array(
				array(
					'q' => 'Can anxiety be cured?',
					'a' => 'Mild to moderate separation anxiety often resolves substantially with consistent graduated protocols. Severe cases usually improve markedly but may require ongoing management and, in some cases, veterinary-prescribed medication alongside behavioural work.'
				),
				array(
					'q' => 'Does getting a second pet help?',
					'a' => 'Rarely, if the distress is specifically about separation from a person. It can help with generalised boredom, but it also risks two anxious animals instead of one.'
				)
			)
		),
		array(
			'slug' => 'smart-feeding-and-pet-obesity',
			'title' => 'Smart Feeding and the Pet Obesity Problem',
			'excerpt' => 'Nobody intends to overfeed. Portion drift is a measurement failure, not a discipline failure, and measurement is the thing that fixes it.',
			'date' => '2026-05-11',
			'category' => 'Nutrition',
			'content' => '<section class="mb-12">
<h2 id="the-scale-of-the-problem" class="text-2xl leading-snug sm:text-3xl">The scale of the problem</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Veterinary bodies across Europe and North America consistently estimate that over half of dogs and cats are overweight or obese. Excess weight is associated with reduced lifespan, earlier onset osteoarthritis and increased anaesthetic risk.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Almost no owner is deliberately overfeeding. The gap between intention and outcome is a measurement problem.</p>
</section>
<section class="mb-12">
<h2 id="why-feeding-guides-do-not-work" class="text-2xl leading-snug sm:text-3xl">Why feeding guides do not work</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">The figures printed on a food bag describe an average animal: intact, moderately active, in a temperate climate. Neutering reduces energy requirements by roughly a quarter, and an indoor cat\'s expenditure bears no resemblance to the modelled average.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Guides also assume accurate portioning, which is where the second failure occurs.</p>
</section>
<section class="mb-12">
<h2 id="portion-drift" class="text-2xl leading-snug sm:text-3xl">Portion drift</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">A scoop is a volume, not a mass, and kibble density varies considerably between brands and even between the top and bottom of the same bag. The difference between a level and a generous scoop is easily fifteen to twenty percent.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Add treats, training rewards and food given by a second household member, and daily intake routinely exceeds the intended figure by a third without anyone noticing.</p>
<ul class="mt-6 space-y-3"><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Volumetric scooping instead of weighing.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Treats and chews excluded from the daily calorie count.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Multiple household members feeding without coordination.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>No adjustment after neutering or as activity declines with age.</li></ul>
</section>
<section class="mb-12">
<h2 id="what-measured-feeding-changes" class="text-2xl leading-snug sm:text-3xl">What measured feeding changes</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Weight-based dispensing removes portion drift entirely. Logging treats brings the true daily figure into view, and it is usually the moment the problem becomes obvious to the owner.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Coupling intake with measured energy expenditure closes the loop, so the target adjusts as the animal\'s real activity changes rather than staying fixed at an assumption made a year ago.</p>
</section>
<section class="mb-12">
<h2 id="a-safe-rate-of-loss" class="text-2xl leading-snug sm:text-3xl">A safe rate of loss</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Weight loss should be gradual: roughly one to two percent of bodyweight per week for dogs, and no more than half to one percent for cats, where rapid loss carries a serious risk of hepatic lipidosis.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Any structured weight loss plan for an animal with an existing medical condition should be agreed with your veterinarian before starting.</p>
</section>',
			'faqs' => array(
				array(
					'q' => 'How do I know if my pet is overweight?',
					'a' => 'Use the nine-point body condition score. You should be able to feel ribs easily under a thin fat layer, see a waist from above and a tucked abdomen from the side. Photo-assisted scoring in the app guides you through it.'
				),
				array(
					'q' => 'Do treats really matter that much?',
					'a' => 'Considerably. For a ten-kilogram dog, two dental chews can represent close to a quarter of daily energy requirements.'
				)
			)
		),
		array(
			'slug' => 'what-vets-want-from-pet-health-data',
			'title' => 'What Vets Actually Want From Your Pet Health Data',
			'excerpt' => 'A ten-minute consultation cannot absorb ten thousand data points. Here is what clinicians told us they need, and how we structured reporting around it.',
			'date' => '2026-04-22',
			'category' => 'Veterinary',
			'content' => '<section class="mb-12">
<h2 id="the-ten-minute-constraint" class="text-2xl leading-snug sm:text-3xl">The ten-minute constraint</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">A typical first-opinion consultation runs ten to fifteen minutes, including history taking, physical examination, discussion and notes. Any data presented must be absorbable within that.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Handing a clinician raw telemetry is worse than handing them nothing, because it consumes time without producing insight.</p>
</section>
<section class="mb-12">
<h2 id="what-clinicians-said-they-use" class="text-2xl leading-snug sm:text-3xl">What clinicians said they use</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">We interviewed veterinary professionals across first-opinion and referral practice while designing our reporting format. Their priorities were consistent and narrow.</p>
<ul class="mt-6 space-y-3"><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Trend direction over absolute values, with a clear baseline for comparison.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Dated onset of change, which frames the differential diagnosis.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Objective weight history rather than owner recollection.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Water intake and appetite, both notoriously unreliable when self-reported.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Night-time activity, which owners simply cannot report.</li></ul>
</section>
<section class="mb-12">
<h2 id="what-they-described-as-noise" class="text-2xl leading-snug sm:text-3xl">What they described as noise</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Step counts without context, sleep scores presented as a single unexplained number, and any metric with no defined baseline were all identified as unhelpful.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Wellness scores drew particular criticism. A composite number that cannot be decomposed into its inputs is not clinically actionable, however reassuring it looks in an app.</p>
</section>
<section class="mb-12">
<h2 id="how-we-structured-reports" class="text-2xl leading-snug sm:text-3xl">How we structured reports</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Our health reports lead with a one-page summary: baseline ranges, trend direction with dates, and any flagged anomalies with severity. Supporting charts follow for anything the clinician wants to interrogate.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Crucially, every conclusion links to the raw data behind it. Clinicians should not be asked to trust an algorithm they cannot inspect.</p>
</section>
<section class="mb-12">
<h2 id="the-professional-relationship" class="text-2xl leading-snug sm:text-3xl">The professional relationship</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Monitoring technology works best as a bridge to veterinary care, not a substitute for it. The goal is a better-informed consultation with a professional who can examine, diagnose and treat.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Owners who treat their data as a conversation starter rather than a diagnosis consistently get the most value from it.</p>
</section>',
			'faqs' => array(
				array(
					'q' => 'Will my vet accept data from a consumer device?',
					'a' => 'Increasingly yes, particularly for trend evidence such as weight, water intake and night-time activity. Presenting it as a structured summary rather than raw screenshots makes acceptance far more likely.'
				),
				array(
					'q' => 'Can monitoring data support an insurance claim?',
					'a' => 'It frequently helps, especially in establishing the date of onset in pre-existing condition disputes. Policies vary, so check the specific requirements with your insurer.'
				)
			)
		),
		array(
			'slug' => 'preparing-your-pet-for-fireworks-season',
			'title' => 'Preparing Your Pet for Fireworks Season, Properly',
			'excerpt' => 'Preparation starting the week before is preparation that fails. Desensitisation needs eight weeks, and the difference in outcome is dramatic.',
			'date' => '2026-03-30',
			'category' => 'Safety',
			'content' => '<section class="mb-12">
<h2 id="why-fireworks-are-the-highest-risk-night" class="text-2xl leading-snug sm:text-3xl">Why fireworks are the highest-risk night</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Shelters and recovery services consistently report their largest annual intake spike in the days following major firework events. Panic-driven escape is qualitatively different from ordinary wandering: animals run without navigation and can cover several kilometres.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">The combination of sudden unpredictable noise, pressure change and flashing light produces a full sympathetic response that training cannot override in the moment.</p>
</section>
<section class="mb-12">
<h2 id="start-eight-weeks-out" class="text-2xl leading-snug sm:text-3xl">Start eight weeks out</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Sound desensitisation works, but only at a pace that keeps the animal below its reaction threshold. Playing firework recordings loudly the week before is counterproductive and can sensitise rather than desensitise.</p>
<ul class="mt-6 space-y-3"><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Weeks one to two: recordings at a volume that produces no visible response at all.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Weeks three to five: gradual volume increase, always pairing sound with food or play.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Weeks six to seven: introduce unpredictability in timing and intensity.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Week eight: build and habituate the safe space you will actually use on the night.</li></ul>
</section>
<section class="mb-12">
<h2 id="building-the-safe-space" class="text-2xl leading-snug sm:text-3xl">Building the safe space</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">An interior room with minimal windows, heavy curtains and familiar bedding is ideal. It must be introduced positively over weeks so it is genuinely a refuge rather than a place the animal is confined on a frightening night.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Sound masking helps. Continuous broadband noise such as a fan or white noise is more effective than music, which has gaps that bangs cut through.</p>
</section>
<section class="mb-12">
<h2 id="on-the-night" class="text-2xl leading-snug sm:text-3xl">On the night</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Feed early, before displays begin, since a frightened animal will not eat. Ensure identification and microchip details are current and the tracker is fully charged.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Stay calm and available. Comforting a frightened dog does not reinforce fear, which is a persistent myth. Ignoring genuine distress simply leaves the animal to cope alone.</p>
</section>
<section class="mb-12">
<h2 id="when-to-involve-your-vet" class="text-2xl leading-snug sm:text-3xl">When to involve your vet</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">For animals with severe noise phobia, behavioural preparation alone is often insufficient. Prescription anxiolytics exist specifically for situational use and can be highly effective.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">That conversation needs to happen weeks in advance, not on the afternoon of the event, since some medications require trialling for effect and tolerance first.</p>
</section>',
			'faqs' => array(
				array(
					'q' => 'Do calming vests and pheromone diffusers work?',
					'a' => 'Evidence is mixed and effects tend to be modest. They are reasonable additions to a full preparation plan but poor substitutes for desensitisation, and they will not manage severe phobia alone.'
				),
				array(
					'q' => 'Should I take my dog out to see the fireworks?',
					'a' => 'No. Exposure at full intensity without preparation is flooding, which typically worsens the phobia rather than resolving it.'
				)
			)
		),
		array(
			'slug' => 'indoor-cat-enrichment-guide',
			'title' => 'The Indoor Cat Enrichment Guide That Actually Works',
			'excerpt' => 'Indoor living solves traffic and predation but replaces them with boredom and stress. Enrichment is not decoration, it is preventative medicine.',
			'date' => '2026-02-14',
			'category' => 'Behaviour',
			'content' => '<section class="mb-12">
<h2 id="the-indoor-trade-off" class="text-2xl leading-snug sm:text-3xl">The indoor trade-off</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Indoor cats live substantially longer on average, avoiding road traffic, predation and most infectious disease. That is a genuine welfare win and the reason indoor living is recommended in many contexts.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">The cost is behavioural. A cat\'s natural time budget involves dozens of short hunting sequences per day, and an indoor environment with a full food bowl removes all of them at once.</p>
</section>
<section class="mb-12">
<h2 id="hunting-simulation-is-the-priority" class="text-2xl leading-snug sm:text-3xl">Hunting simulation is the priority</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">The single highest-value intervention is replacing free feeding with food that has to be worked for. Puzzle feeders, scattered portions and food-dispensing toys reinstate the search-stalk-catch-eat sequence.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Wand play should follow the same structure and end with a catch and a food reward. Play that ends in frustration without a resolution raises arousal rather than satisfying it.</p>
</section>
<section class="mb-12">
<h2 id="vertical-space-is-not-optional" class="text-2xl leading-snug sm:text-3xl">Vertical space is not optional</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Cats assess territory by volume, not floor area. Height provides security, surveillance and a way to avoid conflict in multi-cat households.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">A small flat with good vertical routing can offer more usable territory than a large house with none.</p>
<ul class="mt-6 space-y-3"><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>At least one elevated resting spot per cat, positioned with a view of the room entrance.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>Routes that allow movement around a room without touching the floor.</li><li class="flex gap-3 text-lg leading-relaxed text-muted-foreground"><span aria-hidden="true" class="mt-3 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span>A high refuge that other animals and children cannot access.</li></ul>
</section>
<section class="mb-12">
<h2 id="resource-layout-in-multi-cat-homes" class="text-2xl leading-snug sm:text-3xl">Resource layout in multi-cat homes</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">The standard guidance is one of each key resource per cat plus one spare, distributed across the home rather than clustered together.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Clustering is the common mistake. Three litter trays in one room is functionally one resource, because a single cat can block access to all three.</p>
</section>
<section class="mb-12">
<h2 id="measuring-whether-it-is-working" class="text-2xl leading-snug sm:text-3xl">Measuring whether it is working</h2>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">Enrichment success is visible in the data: more distinct activity bouts through the day, less overnight pacing, reduced over-grooming and better-distributed resource use.</p>
<p class="mt-4 text-lg leading-relaxed text-muted-foreground">If those numbers do not move within three to four weeks, the enrichment is not matched to that individual cat, and the answer is usually more hunting simulation rather than more toys.</p>
</section>',
			'faqs' => array(
				array(
					'q' => 'How much play does an indoor cat need daily?',
					'a' => 'Aim for several short sessions totalling twenty to thirty minutes. Short and frequent matches natural hunting patterns far better than one long session.'
				),
				array(
					'q' => 'Do cats get bored of their toys?',
					'a' => 'Yes, habituation is rapid. Rotating a small selection weekly keeps novelty high without accumulating a cupboard full of ignored toys.'
				)
			)
		)
	);
}
