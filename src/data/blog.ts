export type Post = {
  slug: string;
  title: string;
  seoTitle: string;
  description: string;
  keyword: string;
  category: string;
  author: string;
  authorRole: string;
  date: string;
  readingTime: number;
  excerpt: string;
  image: "hero" | "sensor" | "cat" | "vet";
  imageAlt: string;
  body: { h2: string; p: string[]; list?: string[] }[];
  faqs: { q: string; a: string }[];
};

export const posts: Post[] = [
  {
    slug: "early-signs-of-illness-in-dogs",
    title: "The Early Signs of Illness in Dogs Most Owners Miss",
    seoTitle: "Early Signs of Illness in Dogs | What Owners Miss | PawlogicTech",
    description:
      "Dogs hide illness by instinct. Learn the eight measurable early signs of illness in dogs, why they are missed, and how continuous monitoring surfaces them sooner.",
    keyword: "early signs of illness in dogs",
    category: "Pet Health",
    author: "Dr. Amelia Hart BVSc MRCVS",
    authorRole: "Veterinary Lead, PawlogicTech",
    date: "2026-06-18",
    readingTime: 8,
    excerpt:
      "By the time a dog looks unwell, the condition has usually been developing for weeks. These are the eight signals that appear first, and why almost nobody notices them.",
    image: "hero",
    imageAlt: "Golden retriever wearing a smart health monitoring collar at home",
    body: [
      {
        h2: "Why dogs hide illness",
        p: [
          "Concealing weakness is an evolutionary advantage. A visibly compromised animal is a target, so dogs and cats developed a strong instinct to behave normally for as long as physically possible. Domestication has not removed that instinct.",
          "The practical consequence is that visible symptoms mark a late stage rather than an early one. What changes first is physiology and routine, and both are subtle enough to be absorbed into everyday life without comment.",
        ],
      },
      {
        h2: "The eight signals that appear first",
        p: [
          "In our monitoring data, these are the changes that most reliably precede a clinical diagnosis. Individually, any one of them may be meaningless. Together, or sustained over more than a week, they matter.",
        ],
        list: [
          "Resting heart rate creeping upward by five to ten beats per minute over several weeks.",
          "Increased night-time repositioning, the earliest reliable orthopaedic pain marker.",
          "A gradual decline in voluntary activity, distinct from a single lazy day.",
          "Water intake rising steadily, often the first sign of renal or endocrine disease.",
          "Slightly slower eating, or leaving a small amount of food consistently.",
          "Reduced enthusiasm for one specific activity, such as stairs or jumping into the car.",
          "Subtle gait asymmetry, measurable long before a visible limp.",
          "Changes in greeting behaviour, which often reflect discomfort rather than mood.",
        ],
      },
      {
        h2: "Why these signals get missed",
        p: [
          "Human memory is poor at gradual change. If your dog slows by one percent a week, you will never notice it, but over three months that is a substantial functional decline.",
          "Veterinary consultations compound the problem. A clinic visit measures a stressed animal in an unfamiliar environment for fifteen minutes, once or twice a year, which is a very small sample of a life.",
        ],
      },
      {
        h2: "What to do with the information",
        p: [
          "A single flagged trend is not a diagnosis. The correct response is to document it and take it to your veterinarian, ideally with dated evidence rather than an impression.",
          "Objective data changes the consultation entirely. A vet presented with ninety days of resting heart rate trend has a genuine starting point, and diagnostic testing can be targeted rather than exploratory.",
        ],
      },
      {
        h2: "The economics of early detection",
        p: [
          "Early intervention is consistently cheaper. Chronic conditions caught in an initial stage are frequently managed with diet and monitoring, while the same condition found late often requires ongoing medication, repeated diagnostics or surgery.",
          "There is a welfare argument that matters more. Pain managed early is pain not experienced for months while everyone assumed the animal was simply slowing down with age.",
        ],
      },
    ],
    faqs: [
      { q: "How often should a healthy adult dog see a vet?", a: "Annually for adults, and every six months for animals over seven years old. Continuous monitoring supplements those visits rather than replacing them." },
      { q: "Is a slight increase in drinking always serious?", a: "Not always, since heat, exercise and diet change all affect intake. A sustained rise over more than a week, unexplained by those factors, warrants veterinary assessment." },
    ],
  },
  {
    slug: "how-ai-detects-pet-anxiety",
    title: "How AI Detects Pet Anxiety Before You Do",
    seoTitle: "How AI Detects Pet Anxiety | Separation Distress | PawlogicTech",
    description:
      "Separation anxiety peaks minutes after you leave, which is exactly when you cannot observe it. Here is how AI measures pet anxiety objectively and what to do with the data.",
    keyword: "AI pet anxiety detection",
    category: "Behaviour",
    author: "Marcus Feld CCAB",
    authorRole: "Head of Behavioural Science, PawlogicTech",
    date: "2026-05-29",
    readingTime: 7,
    excerpt:
      "The behaviour you most need to understand happens when nobody is home. Measurement solves a problem that observation structurally cannot.",
    image: "cat",
    imageAlt: "Tabby cat resting beside a discreet smart home sensor",
    body: [
      {
        h2: "The observation problem",
        p: [
          "Separation distress typically peaks within the first thirty minutes after departure and then partially subsides. That window is, by definition, unobservable by the owner.",
          "Owners therefore reason backwards from evidence: a chewed door frame, a complaint from a neighbour, a puddle in the hallway. All of these are late-stage outcomes, and none of them tell you about severity or trajectory.",
        ],
      },
      {
        h2: "What anxiety actually looks like in data",
        p: [
          "Physiologically, anxiety is straightforward to measure. Heart rate rises, heart rate variability collapses, and neither recovers in the way they would after exercise.",
          "Behaviourally, distress produces a recognisable signature: pacing along consistent routes, repeated door checking, displacement behaviours such as yawning and lip licking, and vocalisation with a distinct acoustic profile from an alert bark.",
        ],
      },
      {
        h2: "Building a severity score",
        p: [
          "The clinically useful output is not a binary anxious or not anxious label. It is a graded score that combines peak arousal, time to settle, and total distress duration.",
          "That number is what makes treatment measurable. A dog whose settle time falls from forty minutes to twelve is improving, even if the owner still comes home to occasional evidence of distress.",
        ],
        list: [
          "Peak physiological arousal in the first thirty minutes.",
          "Time to settle, meaning return to baseline heart rate.",
          "Total minutes of classified distress behaviour.",
          "Recovery consistency across repeated departures.",
        ],
      },
      {
        h2: "Privacy is not optional here",
        p: [
          "Detecting distress vocalisation requires listening, which raises an obvious concern about household audio. Our position is that audio should never leave the device.",
          "Classification runs locally on the sensor. The audio stream is analysed and discarded in memory, and only an event label such as distress vocalisation, four minutes, leaves your home. Human speech is never stored or transmitted.",
        ],
      },
      {
        h2: "Turning measurement into improvement",
        p: [
          "Once severity is measurable, graduated departure protocols become straightforward to run properly. You extend absence duration only when the previous duration produces a settled response, which is the step most owners skip.",
          "Where scores remain high after eight to twelve weeks of consistent work, that is the point to involve a veterinary behaviourist. Arriving with a measured history makes that appointment dramatically more productive.",
        ],
      },
    ],
    faqs: [
      { q: "Can anxiety be cured?", a: "Mild to moderate separation anxiety often resolves substantially with consistent graduated protocols. Severe cases usually improve markedly but may require ongoing management and, in some cases, veterinary-prescribed medication alongside behavioural work." },
      { q: "Does getting a second pet help?", a: "Rarely, if the distress is specifically about separation from a person. It can help with generalised boredom, but it also risks two anxious animals instead of one." },
    ],
  },
  {
    slug: "smart-feeding-and-pet-obesity",
    title: "Smart Feeding and the Pet Obesity Problem",
    seoTitle: "Smart Feeding & Pet Obesity | Portion Control Data | PawlogicTech",
    description:
      "More than half of companion animals are overweight. Learn why feeding guides fail, how portion drift happens, and what measured feeding changes in practice.",
    keyword: "pet obesity smart feeding",
    category: "Nutrition",
    author: "Dr. Amelia Hart BVSc MRCVS",
    authorRole: "Veterinary Lead, PawlogicTech",
    date: "2026-05-11",
    readingTime: 6,
    excerpt:
      "Nobody intends to overfeed. Portion drift is a measurement failure, not a discipline failure, and measurement is the thing that fixes it.",
    image: "sensor",
    imageAlt: "Minimalist smart pet sensor device on a pale sage textile surface",
    body: [
      {
        h2: "The scale of the problem",
        p: [
          "Veterinary bodies across Europe and North America consistently estimate that over half of dogs and cats are overweight or obese. Excess weight is associated with reduced lifespan, earlier onset osteoarthritis and increased anaesthetic risk.",
          "Almost no owner is deliberately overfeeding. The gap between intention and outcome is a measurement problem.",
        ],
      },
      {
        h2: "Why feeding guides do not work",
        p: [
          "The figures printed on a food bag describe an average animal: intact, moderately active, in a temperate climate. Neutering reduces energy requirements by roughly a quarter, and an indoor cat's expenditure bears no resemblance to the modelled average.",
          "Guides also assume accurate portioning, which is where the second failure occurs.",
        ],
      },
      {
        h2: "Portion drift",
        p: [
          "A scoop is a volume, not a mass, and kibble density varies considerably between brands and even between the top and bottom of the same bag. The difference between a level and a generous scoop is easily fifteen to twenty percent.",
          "Add treats, training rewards and food given by a second household member, and daily intake routinely exceeds the intended figure by a third without anyone noticing.",
        ],
        list: [
          "Volumetric scooping instead of weighing.",
          "Treats and chews excluded from the daily calorie count.",
          "Multiple household members feeding without coordination.",
          "No adjustment after neutering or as activity declines with age.",
        ],
      },
      {
        h2: "What measured feeding changes",
        p: [
          "Weight-based dispensing removes portion drift entirely. Logging treats brings the true daily figure into view, and it is usually the moment the problem becomes obvious to the owner.",
          "Coupling intake with measured energy expenditure closes the loop, so the target adjusts as the animal's real activity changes rather than staying fixed at an assumption made a year ago.",
        ],
      },
      {
        h2: "A safe rate of loss",
        p: [
          "Weight loss should be gradual: roughly one to two percent of bodyweight per week for dogs, and no more than half to one percent for cats, where rapid loss carries a serious risk of hepatic lipidosis.",
          "Any structured weight loss plan for an animal with an existing medical condition should be agreed with your veterinarian before starting.",
        ],
      },
    ],
    faqs: [
      { q: "How do I know if my pet is overweight?", a: "Use the nine-point body condition score. You should be able to feel ribs easily under a thin fat layer, see a waist from above and a tucked abdomen from the side. Photo-assisted scoring in the app guides you through it." },
      { q: "Do treats really matter that much?", a: "Considerably. For a ten-kilogram dog, two dental chews can represent close to a quarter of daily energy requirements." },
    ],
  },
  {
    slug: "what-vets-want-from-pet-health-data",
    title: "What Vets Actually Want From Your Pet Health Data",
    seoTitle: "What Vets Want From Pet Health Data | PawlogicTech",
    description:
      "Continuous monitoring only helps if the clinic can use it. Veterinary professionals explain which data changes decisions and which is simply noise.",
    keyword: "pet health data for vets",
    category: "Veterinary",
    author: "Dr. Amelia Hart BVSc MRCVS",
    authorRole: "Veterinary Lead, PawlogicTech",
    date: "2026-04-22",
    readingTime: 7,
    excerpt:
      "A ten-minute consultation cannot absorb ten thousand data points. Here is what clinicians told us they need, and how we structured reporting around it.",
    image: "vet",
    imageAlt: "Veterinarian reviewing pet health data on a tablet in a modern clinic",
    body: [
      {
        h2: "The ten-minute constraint",
        p: [
          "A typical first-opinion consultation runs ten to fifteen minutes, including history taking, physical examination, discussion and notes. Any data presented must be absorbable within that.",
          "Handing a clinician raw telemetry is worse than handing them nothing, because it consumes time without producing insight.",
        ],
      },
      {
        h2: "What clinicians said they use",
        p: [
          "We interviewed veterinary professionals across first-opinion and referral practice while designing our reporting format. Their priorities were consistent and narrow.",
        ],
        list: [
          "Trend direction over absolute values, with a clear baseline for comparison.",
          "Dated onset of change, which frames the differential diagnosis.",
          "Objective weight history rather than owner recollection.",
          "Water intake and appetite, both notoriously unreliable when self-reported.",
          "Night-time activity, which owners simply cannot report.",
        ],
      },
      {
        h2: "What they described as noise",
        p: [
          "Step counts without context, sleep scores presented as a single unexplained number, and any metric with no defined baseline were all identified as unhelpful.",
          "Wellness scores drew particular criticism. A composite number that cannot be decomposed into its inputs is not clinically actionable, however reassuring it looks in an app.",
        ],
      },
      {
        h2: "How we structured reports",
        p: [
          "Our health reports lead with a one-page summary: baseline ranges, trend direction with dates, and any flagged anomalies with severity. Supporting charts follow for anything the clinician wants to interrogate.",
          "Crucially, every conclusion links to the raw data behind it. Clinicians should not be asked to trust an algorithm they cannot inspect.",
        ],
      },
      {
        h2: "The professional relationship",
        p: [
          "Monitoring technology works best as a bridge to veterinary care, not a substitute for it. The goal is a better-informed consultation with a professional who can examine, diagnose and treat.",
          "Owners who treat their data as a conversation starter rather than a diagnosis consistently get the most value from it.",
        ],
      },
    ],
    faqs: [
      { q: "Will my vet accept data from a consumer device?", a: "Increasingly yes, particularly for trend evidence such as weight, water intake and night-time activity. Presenting it as a structured summary rather than raw screenshots makes acceptance far more likely." },
      { q: "Can monitoring data support an insurance claim?", a: "It frequently helps, especially in establishing the date of onset in pre-existing condition disputes. Policies vary, so check the specific requirements with your insurer." },
    ],
  },
  {
    slug: "preparing-your-pet-for-fireworks-season",
    title: "Preparing Your Pet for Fireworks Season, Properly",
    seoTitle: "Fireworks Anxiety in Pets | Preparation Guide | PawlogicTech",
    description:
      "Fireworks cause the highest annual spike in pet escapes. A practical, evidence-led preparation plan starting eight weeks out, plus what to do on the night.",
    keyword: "fireworks anxiety pets",
    category: "Safety",
    author: "Marcus Feld CCAB",
    authorRole: "Head of Behavioural Science, PawlogicTech",
    date: "2026-03-30",
    readingTime: 6,
    excerpt:
      "Preparation starting the week before is preparation that fails. Desensitisation needs eight weeks, and the difference in outcome is dramatic.",
    image: "hero",
    imageAlt: "Calm dog resting indoors in a bright, quiet home environment",
    body: [
      {
        h2: "Why fireworks are the highest-risk night",
        p: [
          "Shelters and recovery services consistently report their largest annual intake spike in the days following major firework events. Panic-driven escape is qualitatively different from ordinary wandering: animals run without navigation and can cover several kilometres.",
          "The combination of sudden unpredictable noise, pressure change and flashing light produces a full sympathetic response that training cannot override in the moment.",
        ],
      },
      {
        h2: "Start eight weeks out",
        p: [
          "Sound desensitisation works, but only at a pace that keeps the animal below its reaction threshold. Playing firework recordings loudly the week before is counterproductive and can sensitise rather than desensitise.",
        ],
        list: [
          "Weeks one to two: recordings at a volume that produces no visible response at all.",
          "Weeks three to five: gradual volume increase, always pairing sound with food or play.",
          "Weeks six to seven: introduce unpredictability in timing and intensity.",
          "Week eight: build and habituate the safe space you will actually use on the night.",
        ],
      },
      {
        h2: "Building the safe space",
        p: [
          "An interior room with minimal windows, heavy curtains and familiar bedding is ideal. It must be introduced positively over weeks so it is genuinely a refuge rather than a place the animal is confined on a frightening night.",
          "Sound masking helps. Continuous broadband noise such as a fan or white noise is more effective than music, which has gaps that bangs cut through.",
        ],
      },
      {
        h2: "On the night",
        p: [
          "Feed early, before displays begin, since a frightened animal will not eat. Ensure identification and microchip details are current and the tracker is fully charged.",
          "Stay calm and available. Comforting a frightened dog does not reinforce fear, which is a persistent myth. Ignoring genuine distress simply leaves the animal to cope alone.",
        ],
      },
      {
        h2: "When to involve your vet",
        p: [
          "For animals with severe noise phobia, behavioural preparation alone is often insufficient. Prescription anxiolytics exist specifically for situational use and can be highly effective.",
          "That conversation needs to happen weeks in advance, not on the afternoon of the event, since some medications require trialling for effect and tolerance first.",
        ],
      },
    ],
    faqs: [
      { q: "Do calming vests and pheromone diffusers work?", a: "Evidence is mixed and effects tend to be modest. They are reasonable additions to a full preparation plan but poor substitutes for desensitisation, and they will not manage severe phobia alone." },
      { q: "Should I take my dog out to see the fireworks?", a: "No. Exposure at full intensity without preparation is flooding, which typically worsens the phobia rather than resolving it." },
    ],
  },
  {
    slug: "indoor-cat-enrichment-guide",
    title: "The Indoor Cat Enrichment Guide That Actually Works",
    seoTitle: "Indoor Cat Enrichment Guide | Evidence-Led | PawlogicTech",
    description:
      "Indoor cats live longer but face boredom, stress and obesity. An evidence-led enrichment plan covering vertical space, hunting simulation and resource layout.",
    keyword: "indoor cat enrichment",
    category: "Behaviour",
    author: "Marcus Feld CCAB",
    authorRole: "Head of Behavioural Science, PawlogicTech",
    date: "2026-02-14",
    readingTime: 7,
    excerpt:
      "Indoor living solves traffic and predation but replaces them with boredom and stress. Enrichment is not decoration, it is preventative medicine.",
    image: "cat",
    imageAlt: "Content indoor tabby cat resting on a linen sofa in natural light",
    body: [
      {
        h2: "The indoor trade-off",
        p: [
          "Indoor cats live substantially longer on average, avoiding road traffic, predation and most infectious disease. That is a genuine welfare win and the reason indoor living is recommended in many contexts.",
          "The cost is behavioural. A cat's natural time budget involves dozens of short hunting sequences per day, and an indoor environment with a full food bowl removes all of them at once.",
        ],
      },
      {
        h2: "Hunting simulation is the priority",
        p: [
          "The single highest-value intervention is replacing free feeding with food that has to be worked for. Puzzle feeders, scattered portions and food-dispensing toys reinstate the search-stalk-catch-eat sequence.",
          "Wand play should follow the same structure and end with a catch and a food reward. Play that ends in frustration without a resolution raises arousal rather than satisfying it.",
        ],
      },
      {
        h2: "Vertical space is not optional",
        p: [
          "Cats assess territory by volume, not floor area. Height provides security, surveillance and a way to avoid conflict in multi-cat households.",
          "A small flat with good vertical routing can offer more usable territory than a large house with none.",
        ],
        list: [
          "At least one elevated resting spot per cat, positioned with a view of the room entrance.",
          "Routes that allow movement around a room without touching the floor.",
          "A high refuge that other animals and children cannot access.",
        ],
      },
      {
        h2: "Resource layout in multi-cat homes",
        p: [
          "The standard guidance is one of each key resource per cat plus one spare, distributed across the home rather than clustered together.",
          "Clustering is the common mistake. Three litter trays in one room is functionally one resource, because a single cat can block access to all three.",
        ],
      },
      {
        h2: "Measuring whether it is working",
        p: [
          "Enrichment success is visible in the data: more distinct activity bouts through the day, less overnight pacing, reduced over-grooming and better-distributed resource use.",
          "If those numbers do not move within three to four weeks, the enrichment is not matched to that individual cat, and the answer is usually more hunting simulation rather than more toys.",
        ],
      },
    ],
    faqs: [
      { q: "How much play does an indoor cat need daily?", a: "Aim for several short sessions totalling twenty to thirty minutes. Short and frequent matches natural hunting patterns far better than one long session." },
      { q: "Do cats get bored of their toys?", a: "Yes, habituation is rapid. Rotating a small selection weekly keeps novelty high without accumulating a cupboard full of ignored toys." },
    ],
  },
];

export const getPost = (slug: string) => posts.find((p) => p.slug === slug);
