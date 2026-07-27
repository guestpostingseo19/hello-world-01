export type Faq = { q: string; a: string };

export type SubService = {
  slug: string;
  name: string;
  title: string;
  description: string;
  keyword: string;
  tagline: string;
  intro: string[];
  capabilities: { name: string; text: string }[];
  outcomes: string[];
  faqs: Faq[];
};

export type Service = {
  slug: string;
  name: string;
  short: string;
  title: string;
  description: string;
  keyword: string;
  hero: string;
  intro: string[];
  problem: { heading: string; body: string; points: string[] };
  solution: { heading: string; body: string; points: string[] };
  benefits: { name: string; text: string }[];
  features: { name: string; text: string }[];
  steps: { name: string; text: string }[];
  audience: { name: string; text: string }[];
  faqs: Faq[];
  subs: SubService[];
};

export const services: Service[] = [
  {
    slug: "ai-pet-health-monitoring",
    name: "AI Pet Health Monitoring",
    short: "Continuous vitals, early-warning alerts and vet-ready health records.",
    title: "AI Pet Health Monitoring | 24/7 Vitals & Early Warning | PawlogicTech",
    description:
      "Continuous AI pet health monitoring that tracks resting heart rate, respiration, mobility and appetite, then flags meaningful change days before symptoms appear.",
    keyword: "AI pet health monitoring",
    hero: "Health signals your pet cannot tell you about",
    intro: [
      "Animals are evolutionarily wired to mask illness. By the time a limp, a cough or a skipped meal is obvious to an owner, a condition has often been developing quietly for weeks. PawlogicTech closes that gap by measuring the physiology that never lies.",
      "Our monitoring platform reads resting heart rate, respiratory rate, activity load, sleep architecture, scratching and drinking behaviour, then compares each value against your individual animal's own baseline rather than a generic breed average.",
    ],
    problem: {
      heading: "Why illness is usually found late",
      body: "Most pet health decisions are made from a snapshot: one weight, one temperature, one fifteen-minute consult, once or twice a year. Between those visits, owners rely on memory and intuition, and subtle deterioration is invisible.",
      points: [
        "Resting heart rate can rise for weeks before cardiac disease is diagnosed.",
        "Gradual weight change of 6–8% is almost impossible to notice by eye.",
        "Night-time restlessness is one of the earliest osteoarthritis signals and is routinely missed.",
        "Owners under-report symptoms simply because they did not witness them.",
      ],
    },
    solution: {
      heading: "A continuous, individualised health baseline",
      body: "PawlogicTech builds a personal physiological fingerprint for every animal during a 14-day learning period, then watches for statistically meaningful deviation. You are alerted about change that matters, not about every normal fluctuation.",
      points: [
        "Sensor fusion across collar, environment and feeding data.",
        "Per-animal anomaly models tuned to breed, age, weight and climate.",
        "Alert thresholds reviewed by our veterinary advisory panel.",
        "Exportable, timestamped records your own vet can act on.",
      ],
    },
    benefits: [
      { name: "Earlier intervention", text: "Trend alerts typically surface change 9–21 days before an owner reports a visible symptom." },
      { name: "Lower lifetime cost", text: "Conditions caught in an early stage are cheaper to treat and far less likely to become chronic emergencies." },
      { name: "Better vet consults", text: "Arrive with 90 days of objective data instead of a description of last Tuesday." },
      { name: "Peace of mind", text: "Quiet by design. You hear from us when something genuinely deserves attention." },
    ],
    features: [
      { name: "Baseline learning", text: "A two-week calibration establishes normal ranges unique to your animal." },
      { name: "Multi-signal fusion", text: "Heart rate, respiration, movement, sleep, hydration and feeding are read together, not in isolation." },
      { name: "Severity grading", text: "Every alert carries a confidence score and a plain-language recommended action." },
      { name: "Vet-ready reporting", text: "One-tap PDF summaries formatted for clinical review, including raw trend charts." },
      { name: "Multi-pet households", text: "Signal separation keeps records accurate when several animals share a space." },
      { name: "Private by default", text: "Data is encrypted in transit and at rest, and is never sold to third parties." },
    ],
    steps: [
      { name: "Fit and pair", text: "Attach the collar module and place the room sensor. Pairing takes under five minutes." },
      { name: "Learn the baseline", text: "Two weeks of ordinary life gives the model everything it needs." },
      { name: "Monitor continuously", text: "Readings stream around the clock and are scored against the baseline." },
      { name: "Act on alerts", text: "You receive a graded notification with a clear next step and a shareable report." },
    ],
    audience: [
      { name: "Senior pets", text: "Animals over seven, where small changes carry disproportionate clinical weight." },
      { name: "Chronic conditions", text: "Cardiac, renal, endocrine and orthopaedic cases needing between-visit visibility." },
      { name: "Post-operative recovery", text: "Objective evidence that healing is on track once your pet leaves the clinic." },
      { name: "Breeders and catteries", text: "Population-level oversight with individual-level accuracy." },
    ],
    faqs: [
      { q: "Does AI pet health monitoring replace my veterinarian?", a: "No, and it is not designed to. PawlogicTech is a monitoring and triage tool. It surfaces objective evidence earlier so that your veterinarian can diagnose and treat sooner. Every alert directs you to professional care when clinically appropriate." },
      { q: "How accurate are the alerts?", a: "Accuracy depends on baseline quality. After a complete 14-day calibration our resting heart rate and respiration readings track clinical measurements closely, and severity grading is tuned to minimise false alarms rather than maximise alert volume." },
      { q: "Will my pet tolerate wearing the device?", a: "The collar module weighs less than a standard ID tag and is rated for dogs and cats above 2.5kg. Most animals stop noticing it within a day." },
      { q: "What happens to my data?", a: "It is encrypted, stored under your account, and exportable or deletable at any time. We do not sell data to insurers, advertisers or brokers." },
    ],
    subs: [
      {
        slug: "dog-health-ai",
        name: "Dog Health AI",
        title: "Dog Health AI | Canine Vitals & Early Warning | PawlogicTech",
        description: "Canine-specific health AI that tracks resting heart rate, gait, sleep and appetite to flag orthopaedic, cardiac and metabolic change early.",
        keyword: "dog health AI",
        tagline: "Canine monitoring tuned to breed, size and life stage",
        intro: [
          "A Great Dane and a Jack Russell share almost nothing physiologically. Dog Health AI applies breed-group models so that a resting heart rate of 70bpm is read correctly as unremarkable in one animal and worth investigating in another.",
          "Gait analysis is the differentiator for dogs. Subtle asymmetry in stride cadence is the earliest reliable indicator of joint disease, and it is measurable long before a visible limp develops.",
        ],
        capabilities: [
          { name: "Gait symmetry analysis", text: "Stride cadence and weight-shift patterns compared against your dog's own walking signature." },
          { name: "Cardiac trend tracking", text: "Resting and sleeping heart rate trends, the most sensitive early cardiac marker in dogs." },
          { name: "Breed-group baselines", text: "Separate models for toy, working, brachycephalic and giant breeds." },
          { name: "Heat and exertion safety", text: "Exertion warnings weighted for brachycephalic risk and local temperature." },
          { name: "Appetite and hydration", text: "Bowl-level intake tracking that separates a fussy day from a downward trend." },
        ],
        outcomes: [
          "Orthopaedic change detected before visible lameness in the majority of monitored cases.",
          "Objective evidence for weight-management and mobility plans.",
          "Fewer emergency visits caused by heat stress in high-risk breeds.",
        ],
        faqs: [
          { q: "Which dog sizes are supported?", a: "Dogs from 2.5kg upwards. Collar modules ship in three sizes, and the underlying models adjust for toy through giant breed groups." },
          { q: "Does gait analysis need a treadmill or clinic visit?", a: "No. It is derived passively from everyday walks, which is exactly why it catches change that a single clinic assessment misses." },
        ],
      },
      {
        slug: "cat-health-ai",
        name: "Cat Health AI",
        title: "Cat Health AI | Feline Health Monitoring | PawlogicTech",
        description: "Feline health AI built for a species that hides illness, tracking litter box behaviour, hydration, grooming and weight for early renal and thyroid signals.",
        keyword: "cat health AI",
        tagline: "Built for the species that hides illness best",
        intro: [
          "Cats conceal pain and disease exceptionally well. The two conditions that dominate feline geriatric medicine, chronic kidney disease and hyperthyroidism, both announce themselves through behaviour long before bloodwork is ordered.",
          "Cat Health AI therefore weights behavioural telemetry heavily: litter box frequency and duration, drinking events, grooming bouts and sleep fragmentation.",
        ],
        capabilities: [
          { name: "Litter box analytics", text: "Visit frequency, duration and time-of-day patterns, the strongest early renal and urinary signal." },
          { name: "Hydration tracking", text: "Drinking event counts that detect the polydipsia associated with renal and endocrine disease." },
          { name: "Grooming behaviour", text: "Over-grooming and under-grooming are both meaningful, and both are quantified." },
          { name: "Silent weight trends", text: "Weight change of a few percent per month flagged long before it is visible." },
          { name: "Multi-cat separation", text: "Individual identification so shared resources do not blur the data." },
        ],
        outcomes: [
          "Urinary blockage risk in male cats escalated as an urgent alert.",
          "Renal and thyroid trends surfaced months before routine annual bloods.",
          "Accurate per-cat records in multi-cat homes.",
        ],
        faqs: [
          { q: "My cat will not wear a collar. Is it still useful?", a: "Yes. Litter box, hydration and weight analytics come from environmental sensors, so a substantial portion of the platform works with no wearable at all." },
          { q: "Can it tell my two cats apart?", a: "Yes. Weight signature and movement patterns are combined to identify individuals at the shared resources, with collar tags improving confidence further." },
        ],
      },
      {
        slug: "nutrition-intelligence",
        name: "Nutrition Intelligence",
        title: "Pet Nutrition Intelligence | AI Feeding Plans | PawlogicTech",
        description: "AI nutrition intelligence that converts measured intake, body condition and activity load into precise, veterinarian-reviewable feeding guidance.",
        keyword: "pet nutrition intelligence",
        tagline: "Feeding guidance based on measurement, not guesswork",
        intro: [
          "Feeding guides printed on a bag are population averages for a hypothetical animal. They ignore neuter status, indoor living, actual daily activity and individual metabolic efficiency, which is a large part of why more than half of companion animals in developed markets are overweight.",
          "Nutrition Intelligence closes the loop: measured intake in, measured energy expenditure and body condition out, with portion guidance adjusted weekly.",
        ],
        capabilities: [
          { name: "Measured intake logging", text: "Portion-level accuracy from smart bowls or quick manual entry." },
          { name: "Energy expenditure modelling", text: "Daily calorie burn estimated from real activity, not a static multiplier." },
          { name: "Body condition scoring", text: "Photo-assisted BCS assessment on the standard nine-point scale." },
          { name: "Life-stage transitions", text: "Automatic recalibration through puppy, adult, senior and post-neuter phases." },
          { name: "Allergen and elimination support", text: "Structured ingredient tracking during exclusion diets." },
        ],
        outcomes: [
          "Steady, safe weight loss at a clinically recommended pace.",
          "Clear evidence of which ingredient change relieved a skin or gut issue.",
          "Feeding plans your veterinarian can review and sign off.",
        ],
        faqs: [
          { q: "Do I have to buy a specific food brand?", a: "No. PawlogicTech is brand-independent. We work from the nutritional panel of whatever food you use, including raw and home-prepared diets." },
          { q: "Is this safe for a pet with a medical condition?", a: "Prescription and therapeutic diets should always be directed by your veterinarian. Nutrition Intelligence supports adherence and tracks outcomes rather than overriding clinical instruction." },
        ],
      },
      {
        slug: "activity-monitoring",
        name: "Activity Monitoring",
        title: "Pet Activity Monitoring | AI Exercise & Sleep Tracking | PawlogicTech",
        description: "AI activity monitoring for pets that measures exercise load, intensity, rest quality and recovery so you can train and rehabilitate with evidence.",
        keyword: "pet activity monitoring",
        tagline: "Know the difference between busy and genuinely well exercised",
        intro: [
          "Step counts alone are a poor proxy for canine and feline wellbeing. Ten thousand steps of anxious pacing is not equivalent to forty minutes of purposeful play, and the two have opposite health implications.",
          "Activity Monitoring classifies movement by intensity and type, then pairs it with recovery quality so you can see whether a routine is building fitness or accumulating strain.",
        ],
        capabilities: [
          { name: "Intensity zones", text: "Time split across rest, light, moderate and vigorous bands." },
          { name: "Movement classification", text: "Walking, running, play, pacing, scratching and shaking distinguished from one another." },
          { name: "Sleep architecture", text: "Total sleep, fragmentation and night-time restlessness, a key pain indicator." },
          { name: "Recovery scoring", text: "Post-exertion heart rate recovery as a fitness and overexertion measure." },
          { name: "Rehabilitation programmes", text: "Controlled exercise targets for post-surgical recovery, with adherence tracking." },
        ],
        outcomes: [
          "Anxiety-driven pacing separated from healthy activity.",
          "Safe, measurable progression through post-operative rehabilitation.",
          "Evidence-based exercise targets by breed, age and body condition.",
        ],
        faqs: [
          { q: "Does it work indoors and off-grid?", a: "Yes. Activity classification is inertial rather than GPS-dependent, so indoor cats and rural dogs are measured accurately with no signal." },
          { q: "How long does the battery last?", a: "Typically twelve to fourteen days of continuous monitoring per charge, depending on alert frequency." },
        ],
      },
      {
        slug: "health-reports",
        name: "Health Reports",
        title: "AI Pet Health Reports | Vet-Ready Summaries | PawlogicTech",
        description: "Vet-ready AI pet health reports that turn months of continuous monitoring into a clear clinical summary with trends, anomalies and shareable records.",
        keyword: "pet health reports",
        tagline: "Months of data, distilled into one page a vet can use",
        intro: [
          "Raw telemetry is not clinically useful on its own. A veterinarian has ten minutes, not ten hours, so the value of continuous monitoring is only realised when it is summarised properly.",
          "Health Reports compress the monitoring record into a structured document: baseline ranges, trend direction, flagged anomalies with dates, and the raw charts behind each conclusion.",
        ],
        capabilities: [
          { name: "Clinical summary format", text: "Structured to match how veterinary consultations actually run." },
          { name: "Trend visualisation", text: "30, 90 and 365-day views with annotated deviation windows." },
          { name: "Anomaly timeline", text: "Every alert, its severity, and what happened next." },
          { name: "Secure sharing", text: "Expiring links or PDF export for your clinic, insurer or pet sitter." },
          { name: "Longitudinal history", text: "A permanent record that follows your pet across clinics and house moves." },
        ],
        outcomes: [
          "Shorter, more productive consultations.",
          "Stronger evidence for insurance claims and pre-existing condition disputes.",
          "Continuity of care when you change veterinary practice.",
        ],
        faqs: [
          { q: "Can my vet access reports directly?", a: "Yes. You can issue a time-limited secure link, or export a PDF and email it. No account is required on the clinic side." },
          { q: "How far back does history go?", a: "For as long as your account is active. Historical records are retained in full and remain exportable if you close the account." },
        ],
      },
    ],
  },
  {
    slug: "ai-behavior-analysis",
    name: "AI Behavior Analysis",
    short: "Understand anxiety, aggression and stress through measured behaviour.",
    title: "AI Pet Behavior Analysis | Anxiety & Stress Detection | PawlogicTech",
    description:
      "AI behavior analysis for dogs and cats that quantifies anxiety, separation distress, reactivity and stress triggers, turning guesswork into an evidence-based plan.",
    keyword: "AI pet behavior analysis",
    hero: "Behaviour is data, once you know how to read it",
    intro: [
      "Behavioural problems are the leading non-medical reason animals are surrendered to shelters. They are also the area where owners get the least reliable information, because behaviour happens when nobody is watching.",
      "PawlogicTech records what actually occurs: vocalisation patterns, pacing, destructive episodes, posture, and the environmental conditions surrounding each event.",
    ],
    problem: {
      heading: "You cannot fix what you never observe",
      body: "Separation anxiety peaks in the first thirty minutes after you leave. Reactivity spikes on specific routes at specific times. Owners are structurally unable to witness the behaviour they most need to understand.",
      points: [
        "Advice is usually based on an owner's recollection rather than observation.",
        "Trigger identification by trial and error takes months and often fails.",
        "Progress is judged by feel, so effective interventions get abandoned early.",
        "Medical pain is frequently misread as a behavioural problem.",
      ],
    },
    solution: {
      heading: "Continuous behavioural evidence with trigger correlation",
      body: "We log behavioural events with timestamps and context, then correlate them against departures, arrivals, weather, noise, visitors and routine changes to isolate what actually drives the behaviour.",
      points: [
        "Audio-event classification that recognises distress vocalisation without recording conversations.",
        "Trigger correlation across environmental and schedule variables.",
        "Objective progress scoring across a training programme.",
        "Pain-versus-behaviour screening that flags likely medical causes.",
      ],
    },
    benefits: [
      { name: "Real triggers, found fast", text: "Weeks of guesswork replaced by a ranked list of correlated triggers." },
      { name: "Measurable progress", text: "See whether an intervention is working within days, not months." },
      { name: "Fewer surrenders", text: "Behaviour that is understood is behaviour that can be managed." },
      { name: "Better professional referrals", text: "Behaviourists start with evidence instead of an intake questionnaire." },
    ],
    features: [
      { name: "Distress vocalisation detection", text: "On-device classification of barking, howling and yowling by emotional signature." },
      { name: "Departure protocols", text: "Structured separation-anxiety programmes with automatically measured outcomes." },
      { name: "Reactivity mapping", text: "Where and when reactive episodes occur, mapped against route and time." },
      { name: "Stress load index", text: "A daily composite of physiological and behavioural stress markers." },
      { name: "Household context", text: "Correlation with visitors, deliveries, storms, fireworks and schedule change." },
      { name: "Privacy-first audio", text: "Audio is classified on-device; only event labels leave your home." },
    ],
    steps: [
      { name: "Observe", text: "Two weeks of passive recording establishes the actual behavioural pattern." },
      { name: "Correlate", text: "Events are matched against environmental and schedule variables." },
      { name: "Intervene", text: "A structured programme targets the highest-ranked triggers first." },
      { name: "Measure", text: "Frequency, duration and intensity are re-scored weekly against the starting point." },
    ],
    audience: [
      { name: "Separation anxiety", text: "Dogs that struggle when left alone, especially post-pandemic adopted animals." },
      { name: "Reactive dogs", text: "Lunging and barking at dogs, people, traffic or wildlife." },
      { name: "Rescue and rehoming", text: "Animals with unknown history where baseline behaviour must be established." },
      { name: "Multi-pet tension", text: "Households where inter-animal conflict is escalating." },
    ],
    faqs: [
      { q: "Is my home audio being recorded and stored?", a: "No. Audio is processed on the device itself and discarded immediately. Only classified event labels, such as 'distress vocalisation, 4 minutes', are transmitted. Human speech is never stored or transmitted." },
      { q: "Can this replace a qualified behaviourist?", a: "For mild cases it is often sufficient on its own. For aggression, severe anxiety or bite history you need a certified behaviourist, and our data makes their work substantially more effective." },
      { q: "How quickly will I see change?", a: "Trigger identification usually takes two to three weeks. Meaningful behavioural change from a well-targeted programme typically appears between weeks four and twelve." },
      { q: "Does it distinguish pain from misbehaviour?", a: "It screens for it. Sudden reactivity, night restlessness and posture change are classic pain presentations, and when that pattern appears we recommend veterinary assessment before any training programme." },
    ],
    subs: [
      {
        slug: "anxiety-detection",
        name: "Anxiety Detection",
        title: "Pet Anxiety Detection AI | Separation Distress | PawlogicTech",
        description: "AI anxiety detection for dogs and cats that quantifies distress vocalisation, pacing and physiological arousal to measure severity objectively.",
        keyword: "pet anxiety detection",
        tagline: "Measure distress instead of guessing at it",
        intro: [
          "Anxiety in animals presents physiologically before it presents destructively. Elevated heart rate, panting without heat load, trembling and displacement behaviours all precede the chewed door frame.",
          "Anxiety Detection combines those physiological markers with behavioural events to produce a severity score you can actually track over time.",
        ],
        capabilities: [
          { name: "Arousal tracking", text: "Heart rate elevation and variability collapse as objective distress markers." },
          { name: "Departure curve", text: "The distress profile of the first sixty minutes alone, minute by minute." },
          { name: "Displacement behaviour", text: "Yawning, lip licking, pacing and shaking detected and counted." },
          { name: "Noise phobia logging", text: "Storm and firework responses captured with intensity scoring." },
          { name: "Severity index", text: "A single comparable number so you can prove a programme is working." },
        ],
        outcomes: [
          "Separation anxiety severity graded rather than guessed.",
          "Evidence for whether medication or supplements are having an effect.",
          "Clear thresholds for when to escalate to a veterinary behaviourist.",
        ],
        faqs: [
          { q: "Can it tell anxiety from excitement?", a: "Yes. Both raise heart rate, but heart rate variability, recovery speed and the accompanying behavioural signature differ clearly between the two states." },
          { q: "Does it work for cats?", a: "Yes. Feline anxiety presents differently, mainly through hiding, litter avoidance and over-grooming, and the feline model is trained on those markers." },
        ],
      },
      {
        slug: "aggression-prevention",
        name: "Aggression Prevention",
        title: "AI Aggression Prevention for Dogs | Early Warning | PawlogicTech",
        description: "AI aggression prevention that detects pre-escalation warning signals and maps triggers so incidents are intercepted before a bite occurs.",
        keyword: "dog aggression prevention",
        tagline: "Intercept the warning phase, not the incident",
        intro: [
          "Almost no aggressive incident is genuinely unprovoked. There is nearly always a warning phase of stiffening, staring, lip curling, weight shift and freezing, but it can last under two seconds and is easy to miss.",
          "Aggression Prevention detects that escalation window and alerts you in real time, while trigger mapping shows you which contexts to manage or avoid entirely.",
        ],
        capabilities: [
          { name: "Escalation detection", text: "Freeze, stiffen and posture-change signatures identified in real time." },
          { name: "Real-time alerting", text: "An immediate notification during the warning window, not after the event." },
          { name: "Trigger inventory", text: "A ranked list of contexts that reliably precede escalation." },
          { name: "Threshold tracking", text: "Cumulative stress load, which lowers the bar for the next reaction." },
          { name: "Incident documentation", text: "Timestamped records for behaviourists, insurers and legal requirements." },
        ],
        outcomes: [
          "Interventions that happen seconds before an incident rather than after it.",
          "Documented evidence for behaviourist and legal processes.",
          "Recognition of trigger stacking, the cause of most 'sudden' bites.",
        ],
        faqs: [
          { q: "Is this safe to rely on with a dog that has bitten?", a: "It is a management aid, never a substitute for physical safety measures. Any dog with a bite history requires professional behaviourist supervision alongside muzzle training and environmental control." },
          { q: "What is trigger stacking?", a: "Multiple minor stressors accumulating within a short window until the threshold for reaction drops. It explains why a dog tolerates something on Tuesday and reacts to it on Saturday, and our stress load index makes it visible." },
        ],
      },
      {
        slug: "sleep-pattern-analysis",
        name: "Sleep Pattern Analysis",
        title: "Pet Sleep Pattern Analysis | AI Rest Quality | PawlogicTech",
        description: "AI sleep pattern analysis for pets that measures duration, fragmentation and night-time restlessness, one of the earliest indicators of pain and stress.",
        keyword: "pet sleep analysis",
        tagline: "The most under-used diagnostic signal in pet care",
        intro: [
          "Sleep is where pain, anxiety and cognitive decline show themselves first. An arthritic dog does not limp at three in the morning, it repositions eleven times an hour, and no owner is awake to count that.",
          "Sleep Pattern Analysis quantifies duration, fragmentation, position changes and circadian consistency, then flags deterioration in any of them.",
        ],
        capabilities: [
          { name: "Fragmentation index", text: "How often rest is interrupted, the clearest proxy for night-time discomfort." },
          { name: "Position change counting", text: "Repositioning frequency as an orthopaedic pain marker." },
          { name: "Circadian consistency", text: "Rhythm drift, a recognised early sign of canine cognitive dysfunction." },
          { name: "Environmental correlation", text: "Temperature, light and household noise matched against rest quality." },
          { name: "Recovery quality", text: "Whether rest after exertion is genuinely restorative." },
        ],
        outcomes: [
          "Osteoarthritis flagged from night-time restlessness before daytime lameness.",
          "Objective measurement of whether pain relief is actually working.",
          "Early identification of cognitive decline in senior animals.",
        ],
        faqs: [
          { q: "How much sleep is normal?", a: "Adult dogs typically rest 12 to 14 hours a day, puppies and seniors considerably more, and cats 13 to 16 hours. The absolute figure matters far less than change against your own animal's established baseline." },
          { q: "My pet sleeps in my bed. Does that interfere?", a: "No. Movement signatures are separated by source, so your own movement does not contaminate your pet's record." },
        ],
      },
      {
        slug: "social-behavior-insights",
        name: "Social Behavior Insights",
        title: "Pet Social Behavior Insights | Multi-Pet Harmony | PawlogicTech",
        description: "AI social behavior insights that map interaction quality, resource guarding and avoidance between animals in multi-pet households.",
        keyword: "multi-pet behaviour",
        tagline: "See the household dynamic your pets never show you",
        intro: [
          "Conflict between animals is usually silent long before it is loud. Avoidance, resource guarding, blocked access to litter trays and one animal quietly losing sleep are all measurable, and all precede open fighting.",
          "Social Behavior Insights maps proximity, interaction quality and resource access across every animal in the home.",
        ],
        capabilities: [
          { name: "Proximity mapping", text: "Who spends time near whom, and whether that is changing." },
          { name: "Resource access tracking", text: "Fair or contested access to food, water, litter and resting spots." },
          { name: "Avoidance detection", text: "Systematic route and area avoidance, the earliest tension signal." },
          { name: "Play versus conflict", text: "Rough play distinguished from genuine aggression by intensity and reciprocity." },
          { name: "Introduction protocols", text: "Guided, measured integration when a new animal joins the household." },
        ],
        outcomes: [
          "Silent bullying identified before it escalates into injury.",
          "Evidence-led resource placement that ends most territorial disputes.",
          "Safer, faster introductions of new animals.",
        ],
        faqs: [
          { q: "How many animals can be tracked?", a: "Up to eight individually identified animals in a single household, with unlimited environmental sensors." },
          { q: "Do all my pets need a wearable?", a: "For full interaction mapping, yes. Environmental sensors alone still capture resource access and avoidance patterns." },
        ],
      },
      {
        slug: "behavior-reports",
        name: "Behavior Reports",
        title: "AI Pet Behavior Reports | Behaviourist-Ready | PawlogicTech",
        description: "Structured AI behavior reports that summarise triggers, event frequency and programme progress for owners, trainers and veterinary behaviourists.",
        keyword: "pet behaviour reports",
        tagline: "Documentation professionals can actually work from",
        intro: [
          "Behaviour professionals routinely begin with a questionnaire filled in from memory, which is the weakest possible evidence base for a case that may take months.",
          "Behavior Reports replace recollection with a structured record: event frequencies, ranked triggers, intervention timelines and progress against a defined baseline.",
        ],
        capabilities: [
          { name: "Event frequency tables", text: "Counts and durations by behaviour type, week over week." },
          { name: "Ranked trigger analysis", text: "Correlation strength for every identified trigger." },
          { name: "Intervention timeline", text: "What changed, when, and what happened to the numbers afterwards." },
          { name: "Progress scoring", text: "A single trend line against the pre-intervention baseline." },
          { name: "Professional sharing", text: "Secure links for trainers, behaviourists and veterinary teams." },
        ],
        outcomes: [
          "Faster, better-targeted first sessions with a behaviourist.",
          "Objective proof that a programme is or is not working.",
          "Documentation suitable for insurance and boarding requirements.",
        ],
        faqs: [
          { q: "What format are reports in?", a: "A structured PDF plus an interactive web view with a secure expiring link. Both include the raw charts behind every conclusion." },
          { q: "Can a trainer be given ongoing access?", a: "Yes. You can grant read-only access for a defined period and revoke it at any time." },
        ],
      },
    ],
  },
  {
    slug: "ai-pet-training",
    name: "AI Pet Training",
    short: "Adaptive, reward-based training programmes that measure real progress.",
    title: "AI Pet Training | Adaptive Reward-Based Programmes | PawlogicTech",
    description:
      "AI pet training that adapts each session to your animal's learning rate, reinforces positive methods and measures reliability instead of relying on impressions.",
    keyword: "AI pet training",
    hero: "Training that adapts to your animal, session by session",
    intro: [
      "Most training advice is generic. It assumes an average animal, an average handler and an average environment, and then fails quietly when your dog is fearful, your schedule is irregular or your cues are inconsistent.",
      "PawlogicTech builds a programme around measured learning rate, tracks reliability under real-world distraction, and adjusts difficulty automatically so sessions stay in the productive zone.",
    ],
    problem: {
      heading: "Why training plateaus",
      body: "Progress stalls for predictable reasons: sessions are too long, criteria are raised too quickly, reinforcement is inconsistent, or the behaviour was never generalised beyond the kitchen.",
      points: [
        "Owners raise difficulty faster than the animal is ready for.",
        "Reliability is judged in easy environments and assumed everywhere else.",
        "Reinforcement timing drifts by seconds, which is an eternity to a dog.",
        "There is no measurement, so nobody notices the plateau for weeks.",
      ],
    },
    solution: {
      heading: "Measured, adaptive, reward-based programmes",
      body: "Every repetition is logged. The system tracks success rate per cue per environment and only raises criteria when performance justifies it, using exclusively positive reinforcement methods.",
      points: [
        "Difficulty adjusted automatically from measured success rate.",
        "Generalisation tracked separately for each environment.",
        "Session length capped at the point where attention measurably drops.",
        "Reinforcement timing feedback for the handler, not just the animal.",
      ],
    },
    benefits: [
      { name: "Faster acquisition", text: "Correctly paced criteria progression is the single biggest driver of learning speed." },
      { name: "Genuine reliability", text: "A cue that works in the park, not only in the kitchen." },
      { name: "Humane by design", text: "Reward-based only. No aversive methods, ever." },
      { name: "Consistent households", text: "Everyone in the home follows the same cues and criteria." },
    ],
    features: [
      { name: "Adaptive difficulty", text: "Criteria raised or lowered from live success-rate data." },
      { name: "Cue reliability scoring", text: "Per-cue percentages across distraction levels and environments." },
      { name: "Handler timing feedback", text: "Marker-to-reward latency measured and coached." },
      { name: "Micro-session scheduling", text: "Short, frequent sessions timed to your routine and your pet's alertness." },
      { name: "Puppy curriculum", text: "Socialisation windows, habituation checklists and foundation cues." },
      { name: "Household sync", text: "Shared cue lists and criteria across every family member." },
    ],
    steps: [
      { name: "Assess", text: "A short baseline establishes current reliability and learning rate." },
      { name: "Plan", text: "A curriculum is generated around your goals, timeline and environment." },
      { name: "Practise", text: "Guided micro-sessions with live feedback on timing and criteria." },
      { name: "Generalise", text: "Difficulty and distraction increase only when the data supports it." },
    ],
    audience: [
      { name: "New puppies", text: "Owners who want to get the critical first sixteen weeks right." },
      { name: "Rescue dogs", text: "Animals needing confidence building and foundation cues from an unknown starting point." },
      { name: "Working handlers", text: "People with irregular schedules who need short, high-yield sessions." },
      { name: "Cat owners", text: "Carrier training, husbandry cooperation and enrichment for indoor cats." },
    ],
    faqs: [
      { q: "Does PawlogicTech use any aversive methods?", a: "No. The platform is exclusively reward-based. We do not support or integrate with shock, prong, spray or vibration correction devices, and we will not generate programmes that rely on aversive techniques." },
      { q: "How much time does it take each day?", a: "Three to five sessions of two to five minutes each. Short and frequent consistently outperforms one long daily session, and the scheduler is built around that finding." },
      { q: "Can it train a cat?", a: "Yes. Cats train well with reward-based shaping. The feline curriculum focuses on carrier acceptance, cooperative care, recall and enrichment." },
      { q: "What if progress stalls?", a: "The system detects plateaus automatically and lowers criteria to rebuild success rate before progressing again, which is exactly the correction most owners miss." },
    ],
    subs: [
      {
        slug: "puppy-training-ai",
        name: "Puppy Training AI",
        title: "Puppy Training AI | Socialisation & Foundations | PawlogicTech",
        description: "Puppy training AI covering the critical socialisation window, house training, bite inhibition and foundation cues with measured progress tracking.",
        keyword: "puppy training AI",
        tagline: "Get the first sixteen weeks right",
        intro: [
          "The socialisation window between roughly three and sixteen weeks shapes adult temperament more than any training that follows it. Experiences missed in that period are expensive and sometimes impossible to add later.",
          "Puppy Training AI runs a structured habituation checklist alongside foundation cues, house training and bite inhibition, tracking exposure breadth rather than just repetition count.",
        ],
        capabilities: [
          { name: "Socialisation checklist", text: "Surfaces, sounds, people, handling and environments tracked for coverage and quality." },
          { name: "House training scheduler", text: "Prediction based on age, meal timing and observed elimination patterns." },
          { name: "Bite inhibition programme", text: "Staged reduction in mouthing pressure using reward-based protocols." },
          { name: "Crate and alone-time", text: "Gradual duration building that prevents separation anxiety developing." },
          { name: "Foundation cues", text: "Name response, sit, recall, loose lead and settle, each with reliability scoring." },
        ],
        outcomes: [
          "Broad, positive socialisation completed inside the critical window.",
          "House training typically established faster through predictive scheduling.",
          "Alone-time tolerance built before it becomes a problem.",
        ],
        faqs: [
          { q: "When should I start?", a: "The day your puppy comes home, usually at eight weeks. Safe socialisation can begin before the vaccination course is complete by carrying your puppy and using controlled environments, and the programme accounts for that." },
          { q: "Is it suitable for an older rescue puppy?", a: "Yes. If the socialisation window was partly missed, the programme shifts to remedial habituation at a pace set by the animal's confidence data." },
        ],
      },
      {
        slug: "behavior-correction",
        name: "Behavior Correction",
        title: "AI Behavior Correction for Pets | Reward-Based | PawlogicTech",
        description: "Reward-based AI behavior correction that replaces unwanted behaviours with trained alternatives and measures the change objectively.",
        keyword: "pet behaviour correction",
        tagline: "Replace the behaviour, do not just suppress it",
        intro: [
          "Suppressing a behaviour without replacing it rarely lasts, because the underlying need remains unmet. A dog that jumps is seeking greeting contact, and removing the jump without offering an alternative simply displaces the behaviour.",
          "Behavior Correction identifies the function of each unwanted behaviour and trains an incompatible alternative that satisfies the same need.",
        ],
        capabilities: [
          { name: "Functional assessment", text: "What the behaviour achieves for the animal, established from event data." },
          { name: "Alternative behaviour training", text: "An incompatible, reinforceable behaviour taught in its place." },
          { name: "Frequency tracking", text: "Objective before-and-after counts rather than impressions." },
          { name: "Management planning", text: "Environmental changes that reduce rehearsal while training takes hold." },
          { name: "Relapse detection", text: "Early warning when frequency starts creeping back up." },
        ],
        outcomes: [
          "Jumping, counter surfing, door dashing and lead pulling reduced measurably.",
          "Fewer relapses because the underlying need is addressed.",
          "Clear evidence of which week the intervention started working.",
        ],
        faqs: [
          { q: "How long does correction take?", a: "Well-rehearsed behaviours take longer. Typically two to four weeks for recent habits and eight to twelve for behaviours practised over years." },
          { q: "What if the behaviour is medical?", a: "Sudden onset, especially in an adult animal, warrants veterinary assessment first. The system flags patterns consistent with pain or illness rather than training them away." },
        ],
      },
      {
        slug: "obedience-programs",
        name: "Obedience Programs",
        title: "AI Obedience Programs for Dogs | Reliable Cues | PawlogicTech",
        description: "Structured AI obedience programs that build reliable recall, loose-lead walking, stays and settles with per-environment reliability scoring.",
        keyword: "dog obedience program",
        tagline: "Reliability measured where it actually matters",
        intro: [
          "A recall that works in the garden is not a recall. Reliability is environment-specific, and the gap between a 95% success rate at home and a 40% rate at the park is where most obedience training quietly fails.",
          "Obedience Programs score every cue separately across distraction levels, so you always know what your dog can genuinely do and where.",
        ],
        capabilities: [
          { name: "Per-environment scoring", text: "Reliability tracked separately for home, garden, street and park." },
          { name: "Distraction laddering", text: "Difficulty raised in small, measured increments." },
          { name: "Emergency recall", text: "A separate high-value cue reserved and maintained for genuine emergencies." },
          { name: "Loose-lead programme", text: "Pressure and pace data used to build sustained loose-lead walking." },
          { name: "Duration and distance", text: "Stays extended along one axis at a time, as the evidence supports." },
        ],
        outcomes: [
          "Recall reliability that holds under real-world distraction.",
          "An emergency recall that has not been eroded by everyday use.",
          "Honest, per-environment knowledge of what your dog can do.",
        ],
        faqs: [
          { q: "What reliability is good enough for off-lead walking?", a: "We recommend a sustained 90% or better in a comparable distraction environment across at least thirty logged repetitions before considering off-lead access, alongside local legal requirements." },
          { q: "Can multiple family members train the same dog?", a: "Yes, and the platform tracks per-handler reliability, which frequently reveals that inconsistency between handlers is the real obstacle." },
        ],
      },
      {
        slug: "smart-training-devices",
        name: "Smart Training Devices",
        title: "Smart Pet Training Devices | Treat Dispensers & Markers | PawlogicTech",
        description: "Smart training devices including remote treat dispensers, audio markers and interactive feeders, all reward-based and integrated with your programme.",
        keyword: "smart pet training devices",
        tagline: "Perfect timing, every single repetition",
        intro: [
          "Reinforcement timing is the hardest mechanical skill in training. Human markers drift by half a second or more, and to an animal that is long enough to reinforce an entirely different behaviour.",
          "Our device range delivers consistent markers and rewards with millisecond precision, and every dispense is logged into the same programme record.",
        ],
        capabilities: [
          { name: "Precision audio marker", text: "A consistent conditioned marker with no human timing variance." },
          { name: "Remote treat dispensing", text: "Reinforcement at distance, essential for recall and alone-time protocols." },
          { name: "Automated alone-time sessions", text: "Scheduled reinforcement while you are genuinely out of the house." },
          { name: "Interactive enrichment feeders", text: "Puzzle feeding that slows intake and provides cognitive work." },
          { name: "Full session logging", text: "Every marker and reward recorded into the training history." },
        ],
        outcomes: [
          "Consistent reinforcement timing regardless of handler skill.",
          "Separation protocols that can run while you are actually away.",
          "Enrichment that reduces boredom-driven behaviours.",
        ],
        faqs: [
          { q: "Do you sell correction collars?", a: "No. We do not manufacture, sell or integrate with shock, prong, spray or vibration correction devices under any circumstances." },
          { q: "Can devices be used without the training programme?", a: "Yes, they work standalone, though logging and adaptive pacing only function when linked to a programme." },
        ],
      },
      {
        slug: "training-analytics",
        name: "Training Analytics",
        title: "Pet Training Analytics | Progress & Reliability Data | PawlogicTech",
        description: "Training analytics that measure learning rate, cue reliability, plateau detection and handler consistency across every session.",
        keyword: "pet training analytics",
        tagline: "Know exactly why progress sped up or stalled",
        intro: [
          "Training decisions are usually made on feel. Analytics replace that with evidence: which cue is regressing, which handler is inconsistent, which environment is too difficult, and which session length is optimal for your animal.",
          "The result is a programme that improves because it is measured, not because it is repeated.",
        ],
        capabilities: [
          { name: "Learning rate curves", text: "Repetitions to criterion, tracked per cue over time." },
          { name: "Plateau detection", text: "Automatic identification and criteria adjustment when progress flattens." },
          { name: "Handler consistency", text: "Per-person success rates that reveal where the inconsistency sits." },
          { name: "Optimal session length", text: "The point at which attention measurably declines for your animal." },
          { name: "Regression alerts", text: "Warning when a previously reliable cue starts weakening." },
        ],
        outcomes: [
          "Plateaus corrected in days rather than being tolerated for weeks.",
          "Household inconsistency identified and resolved.",
          "Session structure optimised to your individual animal's attention span.",
        ],
        faqs: [
          { q: "Do I have to log every repetition manually?", a: "No. Sessions run through the app or a smart device are logged automatically. Manual entry is available but rarely needed." },
          { q: "Can I export training data?", a: "Yes, as CSV or PDF, which is useful for trainers, competition records and boarding requirements." },
        ],
      },
    ],
  },
  {
    slug: "smart-pet-care",
    name: "Smart Pet Care",
    short: "Connected feeding, hydration, climate and daily-care automation.",
    title: "Smart Pet Care | Automated Feeding & Home Systems | PawlogicTech",
    description:
      "Smart pet care systems that automate feeding, hydration, climate and daily routines with measured intake and intelligent scheduling around your household.",
    keyword: "smart pet care",
    hero: "Daily care that runs correctly, whether you are home or not",
    intro: [
      "Consistency is the foundation of animal wellbeing, and consistency is precisely what modern human schedules destroy. Late feeds, missed water changes and an overheated conservatory in July are ordinary household failures with real health consequences.",
      "Smart Pet Care automates the routine so the routine actually happens, and measures it so you can prove it did.",
    ],
    problem: {
      heading: "Routine care fails in small, invisible ways",
      body: "Nobody intends to feed two hours late or leave a water fountain unfilled. But over a year, small lapses accumulate into measurable weight, hydration and stress effects.",
      points: [
        "Irregular feeding times disrupt digestion and increase begging and anxiety behaviours.",
        "Water intake is almost never measured, despite being a key renal indicator.",
        "Indoor temperature swings affect brachycephalic and long-coated animals disproportionately.",
        "Multi-pet homes rarely know who ate what.",
      ],
    },
    solution: {
      heading: "Connected, measured, automated daily care",
      body: "Feeders, fountains, climate sensors and door systems operate on a schedule that adapts to your pet's actual needs, and every event is logged into the same health record as the monitoring platform.",
      points: [
        "Portion-accurate feeding tied to the nutrition plan.",
        "Hydration measured to the millilitre, per animal.",
        "Climate alerts before a room becomes dangerous.",
        "Full integration with health monitoring and reporting.",
      ],
    },
    benefits: [
      { name: "Consistency without effort", text: "The routine holds on late nights, business trips and busy mornings." },
      { name: "Measured intake", text: "Food and water become data points instead of assumptions." },
      { name: "Safer environments", text: "Temperature and humidity risk flagged before it becomes an emergency." },
      { name: "Travel confidence", text: "Remote visibility and control while someone else covers the household." },
    ],
    features: [
      { name: "Portion-accurate feeding", text: "Gram-level dispensing linked directly to the nutrition plan." },
      { name: "Per-pet identification", text: "RFID and weight signature ensure the right animal gets the right meal." },
      { name: "Hydration monitoring", text: "Fountain-level intake tracking with trend alerts." },
      { name: "Climate safety", text: "Room-by-room temperature and humidity with escalating warnings." },
      { name: "Remote control", text: "Manual dispense, schedule changes and live status from anywhere." },
      { name: "Sitter and boarding mode", text: "Time-limited access for carers with a full audit trail." },
    ],
    steps: [
      { name: "Install", text: "Feeders, fountain and sensors placed and paired in a single session." },
      { name: "Configure", text: "Schedules generated from your pet's nutrition and activity profile." },
      { name: "Automate", text: "Daily care runs itself, adjusting for activity and seasonal change." },
      { name: "Review", text: "Intake and environment data flow into the same health record." },
    ],
    audience: [
      { name: "Long working hours", text: "Households where nobody is home for the middle of the day." },
      { name: "Multi-pet homes", text: "Where per-animal portion control is otherwise impossible." },
      { name: "Weight management", text: "Animals on a prescribed calorie target that must be respected exactly." },
      { name: "Frequent travellers", text: "Owners who need verified care while away." },
    ],
    faqs: [
      { q: "What happens during a power cut?", a: "Feeders hold a battery reserve sufficient for at least two scheduled meals and retain their schedule. You receive an immediate outage notification, and dispensing resumes automatically on restoration." },
      { q: "Can it stop one pet eating another's food?", a: "Yes. Per-pet identification using RFID tags and weight signature means a bowl only opens for the animal it belongs to." },
      { q: "Does it work with wet food?", a: "Our chilled feeder handles wet and raw portions for up to 48 hours. The standard dispenser is dry-food only." },
      { q: "Is an internet connection required?", a: "Schedules run locally and continue during an outage. Connectivity is needed for remote control, alerts and data sync." },
    ],
    subs: [
      {
        slug: "smart-feeding-systems",
        name: "Smart Feeding Systems",
        title: "Smart Pet Feeding Systems | Portion Control AI | PawlogicTech",
        description: "Smart feeding systems with gram-accurate portioning, per-pet identification and schedules that adapt to measured activity and body condition.",
        keyword: "smart pet feeding system",
        tagline: "The right food, the right pet, the right gram",
        intro: [
          "Portion drift is the quiet cause of most pet obesity. A scoop is not a measurement, and the difference between a level and a heaped scoop is easily 20% of a small dog's daily energy requirement.",
          "Smart Feeding Systems dispense by weight, verify the recipient, and adjust automatically as activity and body condition change.",
        ],
        capabilities: [
          { name: "Gram-accurate dispensing", text: "Weight-verified portions rather than volumetric guesses." },
          { name: "Per-pet access control", text: "RFID and weight signature gate each bowl to its owner." },
          { name: "Adaptive portioning", text: "Daily targets adjusted from measured activity and BCS trends." },
          { name: "Slow-feed modes", text: "Staged dispensing for animals that eat too quickly, reducing bloat risk." },
          { name: "Missed-meal alerts", text: "An untouched meal is one of the earliest illness indicators, and it is escalated." },
        ],
        outcomes: [
          "Weight management targets met without daily manual weighing.",
          "Accurate per-animal intake records in multi-pet homes.",
          "Appetite loss caught within hours rather than days.",
        ],
        faqs: [
          { q: "How much food does the hopper hold?", a: "The standard hopper holds 4.5kg of dry food, roughly two weeks for a medium dog, with a low-level alert well before it empties." },
          { q: "Can I still hand feed?", a: "Yes. Manual feeds can be logged in two taps so the intake record stays complete." },
        ],
      },
      {
        slug: "hydration-monitoring",
        name: "Hydration Monitoring",
        title: "Pet Hydration Monitoring | Water Intake Tracking | PawlogicTech",
        description: "Pet hydration monitoring that measures water intake per animal and flags the polydipsia and dehydration patterns linked to renal and endocrine disease.",
        keyword: "pet hydration monitoring",
        tagline: "The most diagnostic number nobody measures",
        intro: [
          "Water intake is one of the most clinically informative measurements in small animal medicine, and almost no household tracks it. Increased drinking is a leading early indicator of chronic kidney disease, diabetes and hyperadrenocorticism.",
          "Hydration Monitoring measures consumption to the millilitre per animal and compares it against weight-adjusted expected ranges.",
        ],
        capabilities: [
          { name: "Millilitre-level measurement", text: "Fountain-integrated volumetric tracking, not estimation." },
          { name: "Per-animal attribution", text: "Individual identification at shared water sources." },
          { name: "Polydipsia alerting", text: "Sustained intake above weight-adjusted thresholds escalated for veterinary review." },
          { name: "Dehydration warnings", text: "Reduced intake correlated with heat, activity and illness markers." },
          { name: "Water quality management", text: "Filter life and circulation monitoring to keep water appealing." },
        ],
        outcomes: [
          "Renal and endocrine disease indicators surfaced early.",
          "Objective intake figures to bring to a veterinary consultation.",
          "Improved drinking in cats, which are chronically under-hydrated.",
        ],
        faqs: [
          { q: "What counts as excessive drinking?", a: "Broadly, sustained intake above roughly 100ml per kilogram of bodyweight per day warrants veterinary investigation, though the alert threshold is tuned to your animal's own established baseline." },
          { q: "Does evaporation distort the readings?", a: "No. Evaporation is modelled from ambient temperature and humidity and subtracted from the intake figure." },
        ],
      },
      {
        slug: "automated-care",
        name: "Automated Care",
        title: "Automated Pet Care | Smart Home Routines | PawlogicTech",
        description: "Automated pet care that coordinates feeding, lighting, climate, door access and enrichment into one reliable daily routine.",
        keyword: "automated pet care",
        tagline: "One routine, coordinated across the whole home",
        intro: [
          "Individual smart devices each solve one problem and none of them talk to each other. The result is a feeder that runs while the heating is off and a pet door that opens during a storm.",
          "Automated Care coordinates the whole household into a single routine that adjusts to weather, season, occupancy and your pet's own data.",
        ],
        capabilities: [
          { name: "Unified routines", text: "Feeding, lighting, climate and access sequenced as one coherent day." },
          { name: "Selective pet doors", text: "Microchip-controlled access with curfew and weather-aware locking." },
          { name: "Circadian lighting", text: "Light schedules that support natural rhythm for indoor animals." },
          { name: "Enrichment scheduling", text: "Puzzle feeders and toys activated during predicted boredom windows." },
          { name: "Occupancy awareness", text: "Routines that adapt automatically when the house is empty." },
        ],
        outcomes: [
          "A stable daily rhythm regardless of the human schedule.",
          "Reduced boredom behaviours through timed enrichment.",
          "Safer outdoor access with curfew and weather controls.",
        ],
        faqs: [
          { q: "Does it work with other smart home platforms?", a: "Yes. Integrations are available for the major ecosystems, and a local API is provided for advanced setups." },
          { q: "What if I want to override the routine?", a: "Any routine can be paused or overridden instantly from the app, and the override is logged." },
        ],
      },
      {
        slug: "care-scheduling",
        name: "Care Scheduling",
        title: "Pet Care Scheduling | Medication & Appointment Reminders | PawlogicTech",
        description: "Pet care scheduling for medication, parasite prevention, vaccinations, grooming and vet appointments with adherence tracking and shared household visibility.",
        keyword: "pet care scheduling",
        tagline: "Nothing missed, nothing doubled up",
        intro: [
          "Medication adherence in companion animals is poor, and the most common failure is not forgetting entirely but losing track of whether someone else already gave the dose.",
          "Care Scheduling gives the whole household one shared record with confirmation, so every dose is given once and recorded.",
        ],
        capabilities: [
          { name: "Medication tracking", text: "Dose-level confirmation shared across every household member." },
          { name: "Preventative calendar", text: "Flea, tick, worming and vaccination timing with regional risk weighting." },
          { name: "Appointment management", text: "Veterinary, grooming and boarding bookings in one calendar." },
          { name: "Adherence reporting", text: "Compliance records your veterinarian can review." },
          { name: "Escalating reminders", text: "Notifications that escalate to a second household member if unconfirmed." },
        ],
        outcomes: [
          "Double dosing eliminated in shared households.",
          "Preventative treatments given on time, every cycle.",
          "Adherence evidence when assessing whether a treatment is working.",
        ],
        faqs: [
          { q: "Can it handle complex medication schedules?", a: "Yes, including tapering doses, alternating days, multiple daily doses and with-food requirements." },
          { q: "Does it sync with my calendar?", a: "Yes, appointments export to any calendar supporting standard subscription feeds." },
        ],
      },
      {
        slug: "smart-devices",
        name: "Smart Devices",
        title: "Smart Pet Devices | Sensors, Feeders & Cameras | PawlogicTech",
        description: "The PawlogicTech smart device range: collar modules, environmental sensors, feeders, fountains and cameras, all built on one privacy-first platform.",
        keyword: "smart pet devices",
        tagline: "One platform, one account, one health record",
        intro: [
          "Buying pet technology piecemeal produces five apps, five accounts and no combined picture. The value of connected care comes from correlation, and correlation requires a single platform.",
          "Every PawlogicTech device writes to the same record, so a missed meal, a restless night and a rising resting heart rate are read together rather than separately.",
        ],
        capabilities: [
          { name: "Collar module", text: "Vitals, activity and location in a unit lighter than a standard ID tag." },
          { name: "Room sensors", text: "Temperature, humidity, light, sound level and motion." },
          { name: "Feeders and fountains", text: "Intake measurement built into daily care hardware." },
          { name: "Care cameras", text: "On-device behavioural classification with privacy-first audio handling." },
          { name: "Unified account", text: "One app, one record, one export." },
        ],
        outcomes: [
          "A complete correlated picture instead of five disconnected apps.",
          "Simpler setup and a single support contact.",
          "Long device life through over-the-air firmware updates.",
        ],
        faqs: [
          { q: "Are the devices waterproof?", a: "The collar module is IP68 rated for swimming and bathing. Room sensors and feeders are indoor-rated only." },
          { q: "Can I start with one device?", a: "Yes. Most households begin with the collar module and add environmental hardware as they see value." },
        ],
      },
    ],
  },
  {
    slug: "ai-pet-safety",
    name: "AI Pet Safety",
    short: "Location intelligence, escape prevention and emergency response.",
    title: "AI Pet Safety | GPS Tracking & Emergency Alerts | PawlogicTech",
    description:
      "AI pet safety with live location intelligence, escape prediction, geofencing and emergency response so a missing animal is found in minutes, not days.",
    keyword: "AI pet safety",
    hero: "The fastest response is the one that starts before you notice",
    intro: [
      "One in three pets goes missing at some point, and the first hour determines the outcome more than anything that follows. Most owners lose that hour simply discovering the animal is gone.",
      "PawlogicTech removes that delay. Boundary breaches, unusual movement and escape-risk conditions trigger alerts immediately, and a structured recovery workflow begins the moment you confirm.",
    ],
    problem: {
      heading: "Recovery fails on time, not on effort",
      body: "Search radius grows roughly with the square of elapsed time. A thirty-minute head start turns a street-level search into a district-level one, and posters go up after the window that mattered has closed.",
      points: [
        "Owners typically notice an escape long after it happens.",
        "Basic trackers report location but never predict risk.",
        "Panic responses such as fireworks cause the highest-risk escapes.",
        "Microchips only work once somebody finds and scans the animal.",
      ],
    },
    solution: {
      heading: "Predict, detect, respond",
      body: "Escape risk is forecast from weather, fireworks calendars, behavioural arousal and historical patterns. Boundary breaches alert instantly, and recovery is a guided workflow rather than an improvised scramble.",
      points: [
        "Risk forecasting ahead of high-danger events.",
        "Live tracking with intelligent power management.",
        "Multi-layer geofencing around home, garden and known routes.",
        "Emergency contact cascade and community alerting.",
      ],
    },
    benefits: [
      { name: "Minutes, not hours", text: "Escape detection starts the clock immediately rather than when you notice." },
      { name: "Prevention first", text: "Risk warnings before firework nights, storms and known trigger events." },
      { name: "Coordinated recovery", text: "A structured workflow instead of panic and guesswork." },
      { name: "Everyday safety", text: "Heat stress, prolonged inactivity and hazard-zone entry all covered." },
    ],
    features: [
      { name: "Live location", text: "GPS with dense-urban and indoor fallback positioning." },
      { name: "Adaptive geofencing", text: "Multiple zones with different rules for day, night and weather." },
      { name: "Escape risk forecasting", text: "Weather, fireworks and arousal data combined into a daily risk score." },
      { name: "Heat stress alerts", text: "Exertion and ambient conditions weighted by breed vulnerability." },
      { name: "Emergency cascade", text: "Contacts, sitters and neighbours notified in a defined sequence." },
      { name: "Recovery workflow", text: "Search zones, shareable found-pet pages and sighting logging." },
    ],
    steps: [
      { name: "Map", text: "Define home, garden, walk routes and known hazard zones." },
      { name: "Predict", text: "Daily escape-risk scoring from environmental and behavioural inputs." },
      { name: "Detect", text: "Boundary breach or abnormal movement triggers an immediate alert." },
      { name: "Recover", text: "A guided workflow coordinates search, contacts and community alerting." },
    ],
    audience: [
      { name: "Escape artists", text: "Dogs that dig, climb or bolt, and cats with unpredictable roaming ranges." },
      { name: "Noise-phobic animals", text: "Pets at high risk during fireworks season and thunderstorms." },
      { name: "Rural households", text: "Large boundaries and livestock proximity requiring wider zone control." },
      { name: "Urban high-traffic areas", text: "Where minutes genuinely determine survival." },
    ],
    faqs: [
      { q: "How accurate is the location tracking?", a: "Typically three to five metres outdoors with clear sky. In dense urban environments or indoors, accuracy is maintained to roughly ten to fifteen metres using assisted positioning." },
      { q: "What is the battery life?", a: "Around fourteen days in standard monitoring. In active tracking mode during a recovery, expect approximately eighteen hours of continuous high-frequency reporting." },
      { q: "Does it work abroad?", a: "Yes. Multi-network roaming is included across most of Europe and North America with no additional configuration." },
      { q: "Is a subscription required?", a: "Location services require a connectivity plan because the device uses cellular networks. Local features such as geofence alerts within range of your home hub continue regardless." },
    ],
    subs: [
      {
        slug: "gps-tracking",
        name: "GPS Tracking",
        title: "Pet GPS Tracking | Live Location & History | PawlogicTech",
        description: "Live pet GPS tracking with three-metre outdoor accuracy, route history, indoor fallback positioning and intelligent battery management.",
        keyword: "pet GPS tracking",
        tagline: "Know where, and know where they have been",
        intro: [
          "Live position answers where your pet is now. Route history answers the more useful question of where they habitually go, which is what actually finds a missing cat.",
          "GPS Tracking records movement corridors, favourite locations and time-of-day patterns alongside real-time position.",
        ],
        capabilities: [
          { name: "Live position", text: "Three to five metre outdoor accuracy with sub-ten-second refresh in active mode." },
          { name: "Route history", text: "Ninety days of movement history with heat mapping." },
          { name: "Indoor fallback", text: "Assisted positioning maintains coverage where GPS cannot reach." },
          { name: "Adaptive power", text: "Reporting frequency scales with movement to preserve battery." },
          { name: "Territory mapping", text: "The actual roaming range of an outdoor cat, which is usually surprising." },
        ],
        outcomes: [
          "Search efforts directed by evidence rather than hope.",
          "Genuine understanding of an outdoor cat's territory.",
          "Detection of a pet regularly visiting a hazard such as a main road.",
        ],
        faqs: [
          { q: "How heavy is the tracker?", a: "The collar module is 24 grams, suitable for cats and dogs from 2.5kg upwards." },
          { q: "Can I share live location with someone else?", a: "Yes. Temporary live-location links can be issued to sitters, walkers or search volunteers and revoked at any time." },
        ],
      },
      {
        slug: "escape-prevention",
        name: "Escape Prevention",
        title: "Pet Escape Prevention AI | Risk Forecasting | PawlogicTech",
        description: "AI escape prevention that forecasts risk from weather, fireworks and behavioural arousal, and detects boundary testing before an escape occurs.",
        keyword: "pet escape prevention",
        tagline: "Stop the escape before it happens",
        intro: [
          "Escapes are rarely random. They cluster around fireworks, thunderstorms, building work, new arrivals and specific weaknesses in a boundary that an animal has been quietly testing for weeks.",
          "Escape Prevention detects boundary testing behaviour and forecasts high-risk days so you can act in advance.",
        ],
        capabilities: [
          { name: "Boundary testing detection", text: "Repeated fence-line patrolling and probing identified early." },
          { name: "Risk day forecasting", text: "Weather, local fireworks calendars and arousal data combined into a daily score." },
          { name: "Weak point mapping", text: "The precise section of boundary your pet is focused on." },
          { name: "Pre-event protocols", text: "Preparation checklists issued ahead of forecast high-risk periods." },
          { name: "Early departure alerts", text: "Notification the moment a boundary is approached, not crossed." },
        ],
        outcomes: [
          "Fence weaknesses repaired before they are exploited.",
          "Proactive preparation for firework nights and storms.",
          "Warning at boundary approach rather than after departure.",
        ],
        faqs: [
          { q: "Does this replace a secure fence?", a: "No. It is an early warning layer on top of proper physical containment, never a substitute for it." },
          { q: "How far ahead is risk forecast?", a: "Up to seven days for weather-driven risk and further ahead for scheduled events such as public firework displays." },
        ],
      },
      {
        slug: "emergency-alerts",
        name: "Emergency Alerts",
        title: "Pet Emergency Alerts | Instant Escalation | PawlogicTech",
        description: "Pet emergency alerts with instant escalation for escapes, heat stress, collisions and collapse, including a defined contact cascade.",
        keyword: "pet emergency alerts",
        tagline: "The right people notified in the right order",
        intro: [
          "In an emergency the failure is almost never a lack of concern, it is a lack of coordination. One person searches while another assumes it is handled and the vet is called twenty minutes late.",
          "Emergency Alerts run a defined cascade so everyone knows their role from the first notification.",
        ],
        capabilities: [
          { name: "Instant escalation", text: "Critical alerts bypass do-not-disturb and repeat until acknowledged." },
          { name: "Contact cascade", text: "A defined sequence of household members, sitters, neighbours and your clinic." },
          { name: "Impact and collapse detection", text: "Sudden deceleration or prolonged immobility triggers an urgent alert." },
          { name: "Heat stress warnings", text: "Breed-weighted thresholds combining exertion and ambient conditions." },
          { name: "Nearest clinic routing", text: "Out-of-hours emergency clinics located and routed automatically." },
        ],
        outcomes: [
          "Coordinated household response with no duplicated effort.",
          "Faster arrival at emergency veterinary care.",
          "Heat stress intercepted before it becomes heatstroke.",
        ],
        faqs: [
          { q: "What if I miss the alert?", a: "Unacknowledged critical alerts escalate automatically to the next contact in your cascade after a delay you configure." },
          { q: "Are false alarms common?", a: "Critical thresholds are deliberately conservative. Vigorous play can occasionally trigger an impact alert, which is dismissed in one tap." },
        ],
      },
      {
        slug: "geofencing",
        name: "Geofencing",
        title: "Pet Geofencing | Safe Zones & Boundary Alerts | PawlogicTech",
        description: "Intelligent pet geofencing with multiple safe zones, hazard zones, time-based rules and instant boundary breach notifications.",
        keyword: "pet geofencing",
        tagline: "Boundaries that understand context",
        intro: [
          "A single circular safe zone is a blunt instrument. Real households need a garden boundary at night, a wider daytime range, and hard exclusion around a main road or a neighbour's livestock.",
          "Geofencing supports layered zones with independent rules for time of day, weather and who is home.",
        ],
        capabilities: [
          { name: "Multiple safe zones", text: "Home, garden, extended range and trusted locations, each with its own rules." },
          { name: "Hazard exclusion zones", text: "Roads, water and livestock areas that trigger immediate alerts on entry." },
          { name: "Time-based rules", text: "Tighter boundaries at night, wider during supervised daytime hours." },
          { name: "Custom shapes", text: "Polygon boundaries that follow your actual property lines." },
          { name: "Dwell alerts", text: "Notification when an animal stays too long in a location that is unusual for them." },
        ],
        outcomes: [
          "Alerts that reflect real risk rather than a crude radius.",
          "Automatic curfew enforcement for outdoor cats.",
          "Immediate warning when a hazard zone is entered.",
        ],
        faqs: [
          { q: "How many zones can I create?", a: "Up to twenty zones per animal, each with independent rules and notification settings." },
          { q: "Will it alert every time my cat crosses the garden line?", a: "Only if you want it to. Dwell thresholds and quiet hours let you suppress routine crossings while keeping hazard alerts fully active." },
        ],
      },
      {
        slug: "safety-monitoring",
        name: "Safety Monitoring",
        title: "Pet Safety Monitoring | Continuous Hazard Detection | PawlogicTech",
        description: "Continuous pet safety monitoring covering heat and cold exposure, hazard zones, prolonged inactivity and environmental risk in the home.",
        keyword: "pet safety monitoring",
        tagline: "Everyday risks, watched continuously",
        intro: [
          "Most pet emergencies are not dramatic escapes. They are a conservatory reaching 38 degrees, a dog shut in a room for six hours, or a cat that has not moved since morning.",
          "Safety Monitoring watches the ordinary hazards continuously, because those are the ones that actually happen.",
        ],
        capabilities: [
          { name: "Thermal exposure", text: "Room-level heat and cold risk with breed-weighted thresholds." },
          { name: "Inactivity detection", text: "Alerts when an animal has not moved for an unusual period." },
          { name: "Confinement detection", text: "Warning when a pet is shut in a room accidentally." },
          { name: "Air quality", text: "Humidity and particulate monitoring relevant to brachycephalic and asthmatic animals." },
          { name: "Sitter oversight", text: "Verified evidence that scheduled visits actually occurred." },
        ],
        outcomes: [
          "Dangerous room temperatures caught before harm occurs.",
          "Accidental confinement detected within minutes.",
          "Verification that paid care was genuinely delivered.",
        ],
        faqs: [
          { q: "How many rooms should I cover?", a: "Most households start with two sensors covering the main resting area and the highest thermal risk room, typically a conservatory or south-facing space." },
          { q: "Does it work while I am on holiday?", a: "Yes, and sitter mode gives your carer time-limited access with a full audit trail of visits." },
        ],
      },
    ],
  },
];

export const getService = (slug: string) => services.find((s) => s.slug === slug);
export const getSub = (service: Service | undefined, slug: string) =>
  service?.subs.find((s) => s.slug === slug);
