<?php
$path_prefix = "";
$page_title = "Maxillofacial Surgeon in Hyderabad | Dr. Suresh &amp; Dr. Navatha Mortha — Gnathos Facial";
$page_description = "Gnathos Facial — maxillofacial surgeon in Hyderabad (Gachibowli). Dr. Suresh and Dr. Navatha Mortha, MDS, treat TMJ disorders, facial fractures, orthognathic surgery, rhinoplasty, sleep apnea and oral cancer. Book at CARE Hospitals, Banjara Hills. Call +91 90006 66476.";
$page_keywords = "maxillofacial surgeon Hyderabad, TMJ specialist Hyderabad, jaw surgeon Gachibowli, facial trauma surgeon Hyderabad, orthognathic surgery Hyderabad, rhinoplasty Hyderabad, oral cancer surgeon Hyderabad, sleep apnea surgery Hyderabad";
$canonical_url = "https://gnathosface.com/";
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>

<!-- ── LocalBusiness + Physician JSON-LD ─────────────────────── -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["MedicalClinic", "LocalBusiness"],
      "@id": "https://gnathosface.com/#clinic",
      "name": "Gnathos Facial",
      "alternateName": "Gnathos Facial & Maxillofacial Surgery",
      "image": "https://gnathosface.com/asset/Dr.-Suresh.webp",
      "logo": "https://gnathosface.com/asset/gna-logop.png",
      "url": "https://gnathosface.com",
      "telephone": "+91-90006-66476",
      "email": "gnathosface@gmail.com",
      "priceRange": "₹₹₹",
      "description": "Gnathos Facial is a maxillofacial surgery practice in Hyderabad, India, specialising in TMJ disorders, facial trauma, orthognathic surgery, rhinoplasty, obstructive sleep apnea, and oral cancer reconstruction. Led by consultant surgeons Dr. Suresh and Dr. Navatha Mortha, with operating privileges at CARE Hospitals, KIMS, Apollo Spectra and Yashoda Hospitals.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Cabin No. 214, Regency Prime, Jayabheri Pine Valley",
        "addressLocality": "Hyderabad",
        "addressRegion": "Telangana",
        "postalCode": "500032",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 17.4401,
        "longitude": 78.3683
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday"],
          "opens": "08:00",
          "closes": "17:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Friday",
          "opens": "08:00",
          "closes": "13:00"
        }
      ],
      "medicalSpecialty": [
        "Oral and Maxillofacial Surgery",
        "Dentistry",
        "Plastic Surgery"
      ],
      "availableService": [
        {"@type": "MedicalProcedure", "name": "TMJ Arthroscopy"},
        {"@type": "MedicalProcedure", "name": "Orthognathic Surgery"},
        {"@type": "MedicalProcedure", "name": "Facial Trauma Reconstruction"},
        {"@type": "MedicalProcedure", "name": "Rhinoplasty"},
        {"@type": "MedicalProcedure", "name": "Septoplasty"},
        {"@type": "MedicalProcedure", "name": "Maxillomandibular Advancement for OSA"},
        {"@type": "MedicalProcedure", "name": "Oral Cancer Resection & Reconstruction"}
      ],
      "areaServed": [
        {"@type": "City", "name": "Hyderabad"},
        {"@type": "City", "name": "Secunderabad"},
        {"@type": "State", "name": "Telangana"},
        {"@type": "State", "name": "Andhra Pradesh"}
      ],
      "paymentAccepted": "Cash, Insurance, No-Cost EMI",
      "currenciesAccepted": "INR",
      "insuranceAccepted": "Star Health, ICICI Lombard, HDFC ERGO, New India Assurance",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Maxillofacial Services",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Initial Consultation (45 min)"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "TMJ Arthroscopy"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Orthognathic Surgery"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Facial Trauma Emergency Care"}}
        ]
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "187",
        "bestRating": "5",
        "worstRating": "1"
      },
      "sameAs": [
        "https://www.google.com/maps?cid=GnathosFace",
        "https://www.practo.com/hyderabad/doctor/gnathos-facial"
      ]
    },
    {
      "@type": "Physician",
      "@id": "https://gnathosface.com/#dr-suresh",
      "name": "Dr. Suresh",
      "givenName": "Suresh",
      "honorificSuffix": "MDS",
      "jobTitle": "Consultant Oral & Maxillofacial Surgeon",
      "worksFor": {"@id": "https://gnathosface.com/#clinic"},
      "memberOf": [
        {"@type": "Organization", "name": "Association of Oral & Maxillofacial Surgeons of India (AOMSI)"},
        {"@type": "Organization", "name": "International Association of Oral & Maxillofacial Surgeons (IAOMS)"}
      ],
      "medicalSpecialty": "Oral and Maxillofacial Surgery",
      "url": "https://gnathosface.com/#doctors"
    },
    {
      "@type": "Physician",
      "@id": "https://gnathosface.com/#dr-navatha",
      "name": "Dr. Navatha Mortha",
      "honorificSuffix": "MDS",
      "jobTitle": "Consultant Oral & Maxillofacial Surgeon",
      "worksFor": {"@id": "https://gnathosface.com/#clinic"},
      "memberOf": [
        {"@type": "Organization", "name": "Association of Oral & Maxillofacial Surgeons of India (AOMSI)"}
      ],
      "medicalSpecialty": "Oral and Maxillofacial Surgery",
      "url": "https://gnathosface.com/#doctors"
    },
    {
      "@type": "WebSite",
      "@id": "https://gnathosface.com/#website",
      "url": "https://gnathosface.com",
      "name": "Gnathos Facial",
      "publisher": {"@id": "https://gnathosface.com/#clinic"},
      "inLanguage": "en-IN"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://gnathosface.com/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long is recovery from orthognathic surgery?",
          "acceptedAnswer": {"@type": "Answer", "text": "Return to non-strenuous work takes two to three weeks. Skeletal healing continues for nine to twelve months. We schedule reviews at week one, week four, three months, six months, and twelve months."}
        },
        {
          "@type": "Question",
          "name": "Is TMJ surgery always required for jaw pain?",
          "acceptedAnswer": {"@type": "Answer", "text": "No. Surgery is reserved for cases where conservative care — splints, physiotherapy, medication, occlusal adjustment — has failed and structural joint disease is confirmed on imaging. Roughly seventy percent of TMJ patients we see never reach the operating theatre."}
        },
        {
          "@type": "Question",
          "name": "Do you treat facial trauma emergencies?",
          "acceptedAnswer": {"@type": "Answer", "text": "Yes. We coordinate with CARE Hospitals' emergency department for immediate facial trauma — mandibular, orbital, zygomatic, nasal, and pan-facial fractures. The trauma line is answered 24/7 by a member of the surgical team."}
        },
        {
          "@type": "Question",
          "name": "How much does a consultation cost?",
          "acceptedAnswer": {"@type": "Answer", "text": "A first consultation runs forty-five minutes and includes imaging review where available. The fee is fixed and disclosed at booking. Surgical quotes are issued in writing after the planning consultation — never verbally on the first visit."}
        },
        {
          "@type": "Question",
          "name": "Do you accept insurance?",
          "acceptedAnswer": {"@type": "Answer", "text": "Cashless treatment is available with Star Health, ICICI Lombard, HDFC ERGO, and New India Assurance. For procedures above ₹50,000, no-cost EMI is available through Bajaj Finserv. Our coordinator walks patients through pre-authorisation before admission."}
        }
      ]
    }
  ]
}
</script>

<main>

<!-- ── I. HERO — surgeon portrait + emergency panel ───────────────── -->
<section class="bg-[#F8F5EF] border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-12 md:pt-16 pb-16 md:pb-24">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

      <!-- Left: surgeon + credentials -->
      <div class="lg:col-span-7 order-2 lg:order-1">
        <!-- Eyebrow / context -->
        <div class="flex items-center gap-3 mb-6">
          <span class="inline-block w-8 h-px bg-[var(--steel)]"></span>
          <span class="gna-eyebrow text-[var(--steel)]">Maxillofacial &amp; Facial Reconstructive Surgery</span>
        </div>

        <!-- Headline -->
        <h1 class="gna-serif text-[40px] sm:text-[52px] lg:text-[64px] leading-[1.02] tracking-[-0.015em] text-[var(--navy)] mb-6">
          Surgery for the face, the jaw,<br/>
          and the joint <span class="gna-serif-i text-[var(--steel)]">that connects them.</span>
        </h1>

        <!-- Sub -->
        <p class="text-[15px] md:text-[16px] leading-[1.65] text-[var(--slate)] max-w-2xl mb-8">
          Twenty years inside operating theatres. Two consultant surgeons. One focused practice in Hyderabad for the diagnosis, reconstruction, and rehabilitation of the face, jaw, and temporomandibular joint.
        </p>

        <!-- Credentials plate -->
        <div class="flex flex-wrap items-center gap-x-6 gap-y-3 mb-8 py-5 border-y gna-rule">
          <div class="flex items-center gap-2 text-[13px]">
            <span class="gna-eyebrow text-[var(--slate)]">Surgeon</span>
            <span class="font-semibold text-[var(--navy)]">Dr. Suresh, MDS</span>
          </div>
          <div class="text-[var(--slate-soft)]">·</div>
          <div class="flex items-center gap-2 text-[13px]">
            <span class="gna-eyebrow text-[var(--slate)]">Practice</span>
            <span class="font-semibold text-[var(--navy)]">Est. 2004</span>
          </div>
          <div class="text-[var(--slate-soft)]">·</div>
          <div class="flex items-center gap-2 text-[13px]">
            <span class="gna-eyebrow text-[var(--slate)]">Procedures</span>
            <span class="font-semibold text-[var(--navy)]">5,000+</span>
          </div>
          <div class="text-[var(--slate-soft)]">·</div>
          <div class="flex items-center gap-2 text-[13px]">
            <span class="gna-eyebrow text-[var(--slate)]">Hospital</span>
            <span class="font-semibold text-[var(--navy)]">CARE Hospitals</span>
          </div>
        </div>

        <!-- CTAs -->
        <div class="flex flex-wrap items-center gap-3 mb-8">
          <a href="#contact" class="gna-btn gna-btn-primary">Book Appointment →</a>
          <a href="https://wa.me/919000666476?text=Hello%20Gnathos%20team%2C%20I%27d%20like%20a%20consultation." target="_blank" rel="noopener" class="gna-btn gna-btn-whatsapp">WhatsApp Us</a>
          <a href="tel:+919000666476" class="gna-btn gna-btn-outline">Call +91 90006 66476</a>
        </div>

        <!-- Trust micro-line -->
        <div class="flex flex-wrap items-center gap-x-5 gap-y-2 gna-eyebrow text-[var(--slate)]">
          <span class="flex items-center gap-1.5">
            <span class="text-[var(--steel)]">✓</span> NABH-accredited
          </span>
          <span class="text-[var(--slate-soft)]">·</span>
          <span class="flex items-center gap-1.5">
            <span class="text-[var(--steel)]">✓</span> AOMSI Member
          </span>
          <span class="text-[var(--slate-soft)]">·</span>
          <span class="flex items-center gap-1.5">
            <span class="text-[var(--steel)]">✓</span> Cashless Insurance
          </span>
        </div>
      </div>

      <!-- Right: surgeon portrait + emergency card -->
      <div class="lg:col-span-5 order-1 lg:order-2">
        <div class="relative">
          <!-- Surgeon portrait -->
          <div class="aspect-[4/5] overflow-hidden rounded-md border gna-rule bg-[var(--warm-deep)]">
            <img src="asset/Dr.-Suresh.webp" alt="Dr. Suresh, MDS — Maxillofacial Surgeon" class="w-full h-full object-cover" style="object-position: center 22%;"/>
          </div>
          <!-- Identity caption (anchored, not floating disconnected) -->
          <div class="absolute -bottom-5 left-4 right-4 md:left-6 md:right-auto md:max-w-[320px] bg-white border gna-rule rounded-md p-4 shadow-md">
            <div class="flex items-center gap-3">
              <div class="w-11 h-11 rounded-full bg-[var(--warm-deep)] overflow-hidden shrink-0 border gna-rule">
                <img src="asset/dr-navatha-mortha-facial.webp" alt="" aria-hidden="true" class="w-full h-full object-cover"/>
              </div>
              <div class="text-[13px] leading-tight">
                <div class="font-semibold text-[var(--navy)]">Dr. Suresh &amp; Dr. Navatha Mortha</div>
                <div class="text-[var(--slate)] mt-0.5">MDS · Maxillofacial Surgeons</div>
              </div>
            </div>
          </div>

          <!-- Emergency overlay card -->
          <div class="hidden lg:block absolute -top-6 -right-6 bg-[var(--trauma)] text-white rounded-md p-5 max-w-[220px] shadow-lg">
            <div class="flex items-center gap-2 mb-2">
              <span class="w-2 h-2 bg-white rounded-full animate-pulse" aria-hidden="true"></span>
              <span class="gna-eyebrow text-white">Trauma Line</span>
            </div>
            <p class="text-[13px] leading-[1.4] font-semibold mb-2">Facial fracture?<br/>Call now.</p>
            <a href="tel:+919000666476" class="block text-[15px] font-bold underline underline-offset-2">+91 90006 66476</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ── IA. Local trust band — NAP + service area + hours ────────── -->
<section id="local-info" class="bg-white border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-7 md:py-9">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-10 items-start">

      <!-- Practice location -->
      <address class="md:col-span-4 not-italic">
        <div class="gna-eyebrow text-[var(--slate)] mb-2">Practice Location</div>
        <p class="text-[14px] leading-[1.55] text-[var(--navy)] font-medium">
          Cabin No. 214, Regency Prime<br/>
          Jayabheri Pine Valley, Gachibowli<br/>
          Hyderabad 500032, Telangana
        </p>
        <p class="text-[12px] text-[var(--slate)] mt-2">
          Adjacent to CARE Hospitals · Free parking onsite
        </p>
      </address>

      <!-- Service area -->
      <div class="md:col-span-5">
        <div class="gna-eyebrow text-[var(--slate)] mb-2">Serving</div>
        <p class="text-[14px] leading-[1.55] text-[var(--navy)]">
          <strong class="font-semibold">Hyderabad</strong> &mdash; Gachibowli, Banjara Hills, Jubilee Hills, Madhapur, Kondapur, Kukatpally, Secunderabad
        </p>
        <p class="text-[12px] text-[var(--slate)] mt-2">
          Patients travel from across Telangana &amp; Andhra Pradesh &mdash; Mahbubnagar, Warangal, Nizamabad, Karimnagar, Visakhapatnam, Vijayawada, Guntur.
        </p>
      </div>

      <!-- Hours + contact -->
      <div class="md:col-span-3">
        <div class="gna-eyebrow text-[var(--slate)] mb-2">Hours</div>
        <dl class="text-[13px] leading-[1.55] text-[var(--navy)] space-y-0.5">
          <div class="flex justify-between gap-4"><dt class="text-[var(--slate)]">Mon&ndash;Thu</dt><dd>8:00 &ndash; 17:00</dd></div>
          <div class="flex justify-between gap-4"><dt class="text-[var(--slate)]">Fri</dt><dd>8:00 &ndash; 13:00</dd></div>
          <div class="flex justify-between gap-4"><dt class="text-[var(--slate)]">Sat &amp; Sun</dt><dd>Trauma only</dd></div>
        </dl>
        <a href="tel:+919000666476" class="inline-flex items-center gap-2 mt-3 text-[14px] font-semibold text-[var(--trauma)] gna-link">
          Trauma line: +91 90006 66476
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ── II. Chief-complaint quick-access strip ─────────────────────── -->
<section id="symptoms" class="bg-[var(--warm-deep)] border-b gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-10 md:py-14">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 md:gap-8 items-center">
      <div class="md:col-span-3">
        <p class="gna-eyebrow text-[var(--steel)] mb-2">Tell us what's wrong</p>
        <p class="gna-serif text-[22px] md:text-[26px] leading-[1.1] text-[var(--navy)]">I have a problem with my…</p>
      </div>
      <div class="md:col-span-9 grid grid-cols-2 md:grid-cols-4 gap-3">
        <a href="tmj-disorders.php" class="gna-card p-5 md:p-6 hover:bg-white transition-all group" aria-label="Jaw pain — TMJ disorders">
          <svg class="w-7 h-7 mb-3 text-[var(--steel)] group-hover:text-[var(--navy)] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M8 3c-2.5 0-4 1.5-4 4v3c0 1.5.5 2.5 1 4 .5 1.5.5 2.5.5 4 0 2 1 3 2.5 3s2-1 2-3v-1h4v1c0 2 .5 3 2 3s2.5-1 2.5-3c0-1.5 0-2.5.5-4 .5-1.5 1-2.5 1-4V7c0-2.5-1.5-4-4-4-1 0-1.5.3-2 1-.5-.7-1-1-2-1-1.5 0-2 .5-2 1"/>
          </svg>
          <div class="font-semibold text-[14px] md:text-[15px] text-[var(--navy)]">Jaw</div>
          <div class="text-[12px] text-[var(--slate)] mt-1">Pain, clicking, locking</div>
        </a>
        <a href="facial-injuries.php" class="gna-card p-5 md:p-6 hover:bg-white transition-all group" aria-label="Facial injury — fractures and trauma">
          <svg class="w-7 h-7 mb-3 text-[var(--trauma)] group-hover:text-[var(--navy)] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 2a3 3 0 0 1 3 3v1.5c0 1 .5 2 1 2.5l3 3c1 1 1.5 2 1.5 3.5 0 2-1.5 3.5-3.5 3.5h-1c-1 0-1.5.5-1.5 1.5v2c0 1-1 2-2 2h-3c-1 0-2-1-2-2v-2c0-1-.5-1.5-1.5-1.5h-1C2 18.5.5 17 .5 15c0-1.5.5-2.5 1.5-3.5l3-3c.5-.5 1-1.5 1-2.5V5a3 3 0 0 1 3-3z"/>
          </svg>
          <div class="font-semibold text-[14px] md:text-[15px] text-[var(--navy)]">Face</div>
          <div class="text-[12px] text-[var(--slate)] mt-1">Fracture, accident, laceration</div>
        </a>
        <a href="oral-cancer.php" class="gna-card p-5 md:p-6 hover:bg-white transition-all group" aria-label="Mouth lesion or growth">
          <svg class="w-7 h-7 mb-3 text-[var(--steel)] group-hover:text-[var(--navy)] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M9 3v2m6-2v2M8 7h8c1 0 2 1 2 2v8c0 2.5-2.5 4.5-6 4.5S6 19.5 6 17V9c0-1 1-2 2-2z"/>
            <path d="M10 12h4"/>
          </svg>
          <div class="font-semibold text-[14px] md:text-[15px] text-[var(--navy)]">Mouth</div>
          <div class="text-[12px] text-[var(--slate)] mt-1">Lesion, growth, ulcer</div>
        </a>
        <a href="rhinoplasty.php" class="gna-card p-5 md:p-6 hover:bg-white transition-all group" aria-label="Nasal surgery or breathing issues">
          <svg class="w-7 h-7 mb-3 text-[var(--steel)] group-hover:text-[var(--navy)] transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 3c-3 0-5 2-5 5 0 1.5.5 3 1 4.5l1 3c.5 1.5 1 2.5 1 4 0 2 .5 3.5 2 3.5s2-1.5 2-3.5c0-1.5.5-2.5 1-4l1-3c.5-1.5 1-3 1-4.5 0-3-2-5-5-5z"/>
          </svg>
          <div class="font-semibold text-[14px] md:text-[15px] text-[var(--navy)]">Nose</div>
          <div class="text-[12px] text-[var(--slate)] mt-1">Shape, breathing, sinus</div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ── III. About — practice introduction ─────────────────────────── -->
<section id="about" class="bg-[#F8F5EF]">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-start">
      <div class="md:col-span-4">
        <p class="gna-eyebrow text-[var(--steel)] mb-3">§ About the Practice</p>
        <h2 class="gna-serif text-[36px] md:text-[48px] leading-[1.05] text-[var(--navy)]">Hyderabad's focused maxillofacial surgery practice.</h2>
      </div>
      <div class="md:col-span-7 md:col-start-6 text-[16px] leading-[1.7] text-[var(--slate)] space-y-5">
        <p>Dr. Suresh founded Gnathos in Hyderabad in 2004 after a decade of tertiary-care academic maxillofacial surgery. The practice has never expanded into adjacent specialties. The choice was deliberate: stay focused on the face, the jaws, and the joint in front of the ear.</p>
        <p>Dr. Navatha Mortha joined as a second consultant surgeon in 2018, extending the practice's reach into TMJ arthroscopy and orthognathic surgery. Both surgeons continue to operate five days a week at hospitals across Hyderabad, publish in peer-reviewed journals, and consult on complex cases referred from across Telangana and Andhra Pradesh.</p>
        <p>Surgery takes place at NABH-accredited hospitals in Hyderabad — primarily <a href="#contact" class="gna-link font-medium">CARE Hospitals, Banjara Hills</a>, with additional operating privileges at KIMS, Apollo Spectra, and Yashoda Hospitals. This gives patients access to full ICU, anaesthesia, and emergency backup that a standalone clinic cannot.</p>
      </div>
    </div>

    <!-- Quick stats -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 mt-16 pt-10 border-t gna-rule">
      <div>
        <div class="gna-serif text-[44px] md:text-[56px] leading-none text-[var(--navy)]">20<sup class="text-[16px] text-[var(--steel)]">+</sup></div>
        <div class="gna-eyebrow text-[var(--slate)] mt-3">Years Operating</div>
      </div>
      <div>
        <div class="gna-serif text-[44px] md:text-[56px] leading-none text-[var(--navy)]">5,000<sup class="text-[16px] text-[var(--steel)]">+</sup></div>
        <div class="gna-eyebrow text-[var(--slate)] mt-3">Procedures</div>
      </div>
      <div>
        <div class="gna-serif text-[44px] md:text-[56px] leading-none text-[var(--navy)]">15<sup class="text-[16px] text-[var(--steel)]">+</sup></div>
        <div class="gna-eyebrow text-[var(--slate)] mt-3">Publications</div>
      </div>
      <div>
        <div class="gna-serif text-[44px] md:text-[56px] leading-none text-[var(--navy)]">2</div>
        <div class="gna-eyebrow text-[var(--slate)] mt-3">Consultant Surgeons</div>
      </div>
    </div>
  </div>
</section>

<!-- ── IV. Conditions grid (6 specialties) ────────────────────────── -->
<section class="bg-[var(--warm-deep)] border-y gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-12">
      <div class="max-w-2xl">
        <p class="gna-eyebrow text-[var(--steel)] mb-3">Conditions &amp; Procedures</p>
        <h2 class="gna-serif text-[36px] md:text-[48px] leading-[1.05] text-[var(--navy)]">Six specialties. One practice.</h2>
        <p class="text-[15px] leading-[1.65] text-[var(--slate)] mt-3 max-w-xl">Browse by the problem that brought you here, or jump to a specific surgery. Each page covers diagnosis, options, recovery, and what to bring to your first visit.</p>
      </div>
      <a href="conditions.php" class="hidden md:inline-flex gna-eyebrow gna-link text-[var(--navy)] self-end">All conditions →</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <!-- TMJ -->
      <a href="tmj-disorders.php" class="gna-card overflow-hidden flex flex-col">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="asset/tmj_disorders_before_after.png" alt="TMJ disorders" class="w-full h-full object-cover gna-card-img"/>
        </div>
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">01 · Temporomandibular</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">TMJ Disorders</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Jaw pain, clicking, locking, and arthritic joint disease. Conservative care first; arthroscopy when surgery is needed.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>

      <!-- Facial injuries -->
      <a href="facial-injuries.php" class="gna-card overflow-hidden flex flex-col">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="asset/facial_injuries_before_after.png" alt="Facial injuries and trauma" class="w-full h-full object-cover gna-card-img"/>
        </div>
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--trauma)] mb-3">02 · Trauma · 24/7</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Facial Injuries &amp; Fractures</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Mandible, cheekbone, orbital, nasal, and pan-facial fractures. Same-day emergency coverage at CARE Hospitals.</p>
          <span class="gna-eyebrow text-[var(--trauma)] inline-flex items-center gap-1.5">Call trauma line →</span>
        </div>
      </a>

      <!-- Orthognathic -->
      <a href="orthognathic-surgery.php" class="gna-card overflow-hidden flex flex-col">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="asset/jaw_reconstruction_before_after.png" alt="Orthognathic jaw surgery" class="w-full h-full object-cover gna-card-img"/>
        </div>
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">03 · Skeletal Correction</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Jaw Misalignment</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Orthognathic surgery to align the jaws for chewing, breathing, speech, and facial balance.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>

      <!-- Rhinoplasty -->
      <a href="rhinoplasty.php" class="gna-card overflow-hidden flex flex-col">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="asset/rhinoplasty.png" alt="Rhinoplasty surgery" class="w-full h-full object-cover gna-card-img"/>
        </div>
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">04 · Functional &amp; Aesthetic</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Rhinoplasty &amp; Septoplasty</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Nasal airway correction, septal deviation repair, and cosmetic refinement.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>

      <!-- Sleep apnea -->
      <a href="obstructive-sleep-apnea.php" class="gna-card overflow-hidden flex flex-col">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="asset/osa_before_after.png" alt="Sleep apnea surgery" class="w-full h-full object-cover gna-card-img"/>
        </div>
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">05 · Airway</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Obstructive Sleep Apnea</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Maxillomandibular advancement and upper-airway surgery when CPAP is not tolerated.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>

      <!-- Oral cancer -->
      <a href="oral-cancer.php" class="gna-card overflow-hidden flex flex-col">
        <div class="aspect-[4/3] overflow-hidden">
          <img src="asset/oral_cancers_before_after.png" alt="Oral cancer surgery" class="w-full h-full object-cover gna-card-img"/>
        </div>
        <div class="p-5 md:p-6 flex flex-col grow">
          <div class="gna-eyebrow text-[var(--steel)] mb-3">06 · Oncology</div>
          <h3 class="gna-serif text-[22px] leading-[1.15] text-[var(--navy)] mb-2">Oral Cancer &amp; Reconstruction</h3>
          <p class="text-[13px] leading-[1.6] text-[var(--slate)] mb-5 grow">Screening, biopsy, resection, and immediate reconstruction with grafts and flaps.</p>
          <span class="gna-eyebrow text-[var(--steel)] inline-flex items-center gap-1.5">Learn more <span aria-hidden="true">→</span></span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ── V. Credentials / affiliations strip ────────────────────────── -->
<section class="bg-[#F8F5EF] border-y gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-10">
    <p class="gna-eyebrow text-[var(--slate)] text-center mb-6">Operating Privileges &amp; Professional Affiliations</p>
    <div class="flex flex-wrap items-center justify-center gap-x-8 md:gap-x-12 gap-y-4 text-[14px] md:text-[16px]">
      <div class="gna-serif font-semibold text-[var(--navy)]">CARE Hospitals</div>
      <div class="text-[var(--slate-soft)]">·</div>
      <div class="gna-serif font-semibold text-[var(--navy)]">KIMS</div>
      <div class="text-[var(--slate-soft)]">·</div>
      <div class="gna-serif font-semibold text-[var(--navy)]">Apollo Spectra</div>
      <div class="text-[var(--slate-soft)]">·</div>
      <div class="gna-serif font-semibold text-[var(--navy)]">Yashoda</div>
      <div class="text-[var(--slate-soft)]">·</div>
      <div class="gna-eyebrow text-[var(--slate)]">AOMSI · IAOMS · NABH</div>
    </div>
    <p class="text-center text-[13px] text-[var(--slate)] mt-6 max-w-2xl mx-auto">Surgery takes place only at NABH-accredited facilities with full ICU, anaesthesia, and emergency backup.</p>
  </div>
</section>

<!-- ── VI. Surgeons — Dr. Suresh + Dr. Navatha ────────────────────── -->
<section id="doctors" class="bg-[#F8F5EF]">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="text-center mb-14 md:mb-16 max-w-3xl mx-auto">
      <p class="gna-eyebrow text-[var(--steel)] mb-3">§ Our Surgeons</p>
      <h2 class="gna-serif text-[36px] md:text-[48px] leading-[1.05] text-[var(--navy)]">Two consultants.<br/>One operating philosophy.</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12 max-w-5xl mx-auto">

      <!-- Dr. Suresh -->
      <article class="gna-card overflow-hidden">
        <div class="aspect-[4/5] bg-[var(--warm-deep)] overflow-hidden">
          <img src="asset/Dr.-Suresh.webp" alt="Portrait of Dr. Suresh, MDS" class="w-full h-full object-cover"/>
        </div>
        <div class="p-7 md:p-8">
          <div class="gna-eyebrow text-[var(--steel)] mb-2">Consultant · Surgeon I</div>
          <h3 class="gna-serif text-[32px] leading-[1.1] text-[var(--navy)] mb-3">Dr. Suresh</h3>
          <p class="text-[12px] gna-eyebrow text-[var(--slate)] mb-4">MDS · Oral &amp; Maxillofacial Surgery · 20+ years</p>
          <p class="text-[14px] leading-[1.65] text-[var(--slate)] mb-6">Founder of Gnathos. Hyderabad-based maxillofacial surgeon specialising in TMJ disorders, orthognathic surgery, and complex facial trauma. Operates at CARE Hospitals, Banjara Hills.</p>
          <div class="flex flex-wrap gap-2 text-[11px]">
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">TMJ</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Orthognathics</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Trauma</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Oral Cancer</span>
          </div>
        </div>
      </article>

      <!-- Dr. Navatha -->
      <article class="gna-card overflow-hidden">
        <div class="aspect-[4/5] bg-[var(--warm-deep)] overflow-hidden">
          <img src="asset/dr-navatha-mortha-facial.webp" alt="Portrait of Dr. Navatha Mortha, MDS" class="w-full h-full object-cover"/>
        </div>
        <div class="p-7 md:p-8">
          <div class="gna-eyebrow text-[var(--steel)] mb-2">Consultant · Surgeon II</div>
          <h3 class="gna-serif text-[32px] leading-[1.1] text-[var(--navy)] mb-3">Dr. Navatha Mortha</h3>
          <p class="text-[12px] gna-eyebrow text-[var(--slate)] mb-4">MDS · Oral &amp; Maxillofacial Surgery · 15+ years</p>
          <p class="text-[14px] leading-[1.65] text-[var(--slate)] mb-6">Hyderabad-based senior consultant in orthognathic surgery and TMJ arthroscopy. Leads the practice's minimally-invasive joint work and reconstructive rhinoplasty at CARE Hospitals, Banjara Hills.</p>
          <div class="flex flex-wrap gap-2 text-[11px]">
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">TMJ Arthroscopy</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Orthognathics</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Rhinoplasty</span>
            <span class="px-2.5 py-1 border gna-rule rounded-full text-[var(--slate)]">Reconstruction</span>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ── VII. Patient stories ───────────────────────────────────────── -->
<section id="stories" class="bg-[var(--warm-deep)] border-y gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="mb-12 md:mb-16 max-w-2xl">
      <p class="gna-eyebrow text-[var(--steel)] mb-3">§ Patient Accounts</p>
      <h2 class="gna-serif text-[36px] md:text-[48px] leading-[1.05] text-[var(--navy)]">Patients, in their own words.</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

      <figure class="gna-card p-7 md:p-8 flex flex-col">
        <div class="flex gap-1 text-[var(--steel)] mb-5">★ ★ ★ ★ ★</div>
        <blockquote class="gna-serif text-[18px] leading-[1.5] text-[var(--navy)] mb-6 grow">
          "Two years of jaw pain, four conservative treatments that didn't work. Dr. Suresh walked me through the arthroscopy images on a screen before the operation. I went home the next morning and ate soft food by week three."
        </blockquote>
        <figcaption class="pt-5 border-t gna-rule-soft">
          <div class="font-semibold text-[var(--navy)] text-[15px]">Rohan M.</div>
          <div class="gna-eyebrow text-[var(--slate)] mt-1">TMJ Arthroscopy · 2025</div>
        </figcaption>
      </figure>

      <figure class="gna-card p-7 md:p-8 flex flex-col">
        <div class="flex gap-1 text-[var(--steel)] mb-5">★ ★ ★ ★ ★</div>
        <blockquote class="gna-serif text-[18px] leading-[1.5] text-[var(--navy)] mb-6 grow">
          "My son had a complex facial fracture after a road accident. The team met us at the ER at 2am, operated at sunrise. Six weeks later he looks like himself. I cannot overstate what that meant for our family."
        </blockquote>
        <figcaption class="pt-5 border-t gna-rule-soft">
          <div class="font-semibold text-[var(--navy)] text-[15px]">Priya K.</div>
          <div class="gna-eyebrow text-[var(--slate)] mt-1">Facial Trauma · 2024</div>
        </figcaption>
      </figure>

      <figure class="gna-card p-7 md:p-8 flex flex-col">
        <div class="flex gap-1 text-[var(--steel)] mb-5">★ ★ ★ ★ ★</div>
        <blockquote class="gna-serif text-[18px] leading-[1.5] text-[var(--navy)] mb-6 grow">
          "Orthognathic surgery was a bigger decision than my wedding. The 3D planning session at Gnathos made it feel like a project with measurable steps, not a leap of faith. I'm a year out and chewing, smiling, sleeping better."
        </blockquote>
        <figcaption class="pt-5 border-t gna-rule-soft">
          <div class="font-semibold text-[var(--navy)] text-[15px]">Anita D.</div>
          <div class="gna-eyebrow text-[var(--slate)] mt-1">Jaw Reconstruction · 2024</div>
        </figcaption>
      </figure>

    </div>
  </div>
</section>

<!-- ── VIII. Insurance / payment trust line ───────────────────────── -->
<section class="bg-[var(--navy)] text-white border-y gna-rule-light">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-12 md:py-14">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
      <div class="md:col-span-1">
        <p class="gna-eyebrow text-white/60 mb-2">Payment &amp; Insurance</p>
        <h3 class="gna-serif text-[24px] md:text-[28px] leading-[1.15] text-white">Cashless and EMI options.</h3>
      </div>
      <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6 text-[14px]">
        <div class="border-l-2 border-[var(--steel)] pl-4">
          <p class="font-semibold text-white mb-1">Cashless Insurance</p>
          <p class="text-white/70 leading-[1.55]">Star Health · ICICI Lombard · HDFC ERGO · New India Assurance</p>
        </div>
        <div class="border-l-2 border-[var(--steel)] pl-4">
          <p class="font-semibold text-white mb-1">No-Cost EMI</p>
          <p class="text-white/70 leading-[1.55]">Bajaj Finserv · HDFC — for procedures above ₹50,000</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── VIIIb. Services hub — internal links to service pages ──────── -->
<section id="services-hub" class="bg-white border-y gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-16 md:py-20">
    <div class="mb-10 md:mb-12 max-w-2xl">
      <p class="gna-eyebrow text-[var(--steel)] mb-3">§ Conditions We Treat</p>
      <h2 class="gna-serif text-[32px] md:text-[40px] leading-[1.1] text-[var(--navy)]">Specialist maxillofacial care in Hyderabad.</h2>
      <p class="text-[14px] leading-[1.65] text-[var(--slate)] mt-3">Each condition page explains when surgery helps, when it doesn't, and what recovery looks like. Written for patients, not search engines.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <a href="tmj-disorders.php" class="gna-card p-6 group block">
        <div class="gna-eyebrow text-[var(--steel)] mb-2">Service</div>
        <h3 class="gna-serif text-[22px] text-[var(--navy)] leading-[1.15] mb-2 group-hover:text-[var(--steel)] transition-colors">TMJ disorders &amp; jaw pain</h3>
        <p class="text-[13px] leading-[1.55] text-[var(--slate)] mb-4">Hyderabad's TMJ specialist — splints, arthrocentesis, arthroscopy, and joint replacement at CARE Hospitals.</p>
        <span class="text-[12px] font-semibold text-[var(--steel)] gna-link">Read more →</span>
      </a>
      <a href="facial-injuries.php" class="gna-card p-6 group block">
        <div class="gna-eyebrow text-[var(--steel)] mb-2">Service</div>
        <h3 class="gna-serif text-[22px] text-[var(--navy)] leading-[1.15] mb-2 group-hover:text-[var(--steel)] transition-colors">Facial trauma &amp; fractures</h3>
        <p class="text-[13px] leading-[1.55] text-[var(--slate)] mb-4">24/7 facial trauma service in Hyderabad — mandibular, orbital, zygomatic, and nasal fractures.</p>
        <span class="text-[12px] font-semibold text-[var(--steel)] gna-link">Read more →</span>
      </a>
      <a href="orthognathic-surgery.php" class="gna-card p-6 group block">
        <div class="gna-eyebrow text-[var(--steel)] mb-2">Service</div>
        <h3 class="gna-serif text-[22px] text-[var(--navy)] leading-[1.15] mb-2 group-hover:text-[var(--steel)] transition-colors">Orthognathic (jaw) surgery</h3>
        <p class="text-[13px] leading-[1.55] text-[var(--slate)] mb-4">3D-planned corrective jaw surgery for misaligned bite, sleep apnea, and facial asymmetry in Hyderabad.</p>
        <span class="text-[12px] font-semibold text-[var(--steel)] gna-link">Read more →</span>
      </a>
      <a href="rhinoplasty.php" class="gna-card p-6 group block">
        <div class="gna-eyebrow text-[var(--steel)] mb-2">Service</div>
        <h3 class="gna-serif text-[22px] text-[var(--navy)] leading-[1.15] mb-2 group-hover:text-[var(--steel)] transition-colors">Rhinoplasty in Hyderabad</h3>
        <p class="text-[13px] leading-[1.55] text-[var(--slate)] mb-4">Functional and cosmetic rhinoplasty, septoplasty, and revision surgery by a maxillofacial specialist.</p>
        <span class="text-[12px] font-semibold text-[var(--steel)] gna-link">Read more →</span>
      </a>
      <a href="oral-cancer.php" class="gna-card p-6 group block">
        <div class="gna-eyebrow text-[var(--steel)] mb-2">Service</div>
        <h3 class="gna-serif text-[22px] text-[var(--navy)] leading-[1.15] mb-2 group-hover:text-[var(--steel)] transition-colors">Oral cancer surgery</h3>
        <p class="text-[13px] leading-[1.55] text-[var(--slate)] mb-4">Resection, neck dissection, and microvascular reconstruction at CARE Hospitals, Banjara Hills.</p>
        <span class="text-[12px] font-semibold text-[var(--steel)] gna-link">Read more →</span>
      </a>
      <a href="sleep-apnea.php" class="gna-card p-6 group block">
        <div class="gna-eyebrow text-[var(--steel)] mb-2">Service</div>
        <h3 class="gna-serif text-[22px] text-[var(--navy)] leading-[1.15] mb-2 group-hover:text-[var(--steel)] transition-colors">Sleep apnea surgery</h3>
        <p class="text-[13px] leading-[1.55] text-[var(--slate)] mb-4">Maxillomandibular advancement and UPPP for OSA when CPAP isn't tolerated — Hyderabad practice.</p>
        <span class="text-[12px] font-semibold text-[var(--steel)] gna-link">Read more →</span>
      </a>
      <a href="dental-implants.php" class="gna-card p-6 group block">
        <div class="gna-eyebrow text-[var(--steel)] mb-2">Service</div>
        <h3 class="gna-serif text-[22px] text-[var(--navy)] leading-[1.15] mb-2 group-hover:text-[var(--steel)] transition-colors">Dental implants &amp; grafts</h3>
        <p class="text-[13px] leading-[1.55] text-[var(--slate)] mb-4">Zygomatic and pterygoid implants, sinus lifts, and bone augmentation in Gachibowli, Hyderabad.</p>
        <span class="text-[12px] font-semibold text-[var(--steel)] gna-link">Read more →</span>
      </a>
      <a href="cleft-palate.php" class="gna-card p-6 group block">
        <div class="gna-eyebrow text-[var(--steel)] mb-2">Service</div>
        <h3 class="gna-serif text-[22px] text-[var(--navy)] leading-[1.15] mb-2 group-hover:text-[var(--steel)] transition-colors">Cleft lip &amp; palate</h3>
        <p class="text-[13px] leading-[1.55] text-[var(--slate)] mb-4">Primary and revision cleft repair, alveolar bone grafting, and orthognathic cleft care in Hyderabad.</p>
        <span class="text-[12px] font-semibold text-[var(--steel)] gna-link">Read more →</span>
      </a>
    </div>
  </div>
</section>

<!-- ── IX. FAQ ────────────────────────────────────────────────────── -->
<section id="faq" class="bg-[#F8F5EF]">
  <div class="max-w-[1100px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12">
      <div class="md:col-span-4">
        <p class="gna-eyebrow text-[var(--steel)] mb-3">§ Before you book</p>
        <h2 class="gna-serif text-[36px] md:text-[44px] leading-[1.05] text-[var(--navy)] mb-4">Common questions, answered honestly.</h2>
        <p class="text-[14px] leading-[1.65] text-[var(--slate)]">If your question isn't here, message us on WhatsApp and we'll answer within the hour during clinic hours.</p>
      </div>
      <div class="md:col-span-8 divide-y gna-rule">
        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <span class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium">How long is recovery from orthognathic surgery?</span>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">Return to non-strenuous work takes two to three weeks. Skeletal healing continues for nine to twelve months. We schedule reviews at week one, week four, three months, six months, and twelve months.</p>
        </details>

        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <span class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium">Is TMJ surgery always required for jaw pain?</span>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">No. Surgery is reserved for cases where conservative care — splints, physiotherapy, medication, occlusal adjustment — has failed and structural joint disease is confirmed on imaging. Roughly seventy percent of TMJ patients we see never reach the operating theatre.</p>
        </details>

        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <span class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium">Do you treat facial trauma emergencies?</span>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">Yes. We coordinate with CARE Hospitals' emergency department for immediate facial trauma — mandibular, orbital, zygomatic, nasal, and pan-facial fractures. The trauma line is answered 24/7 by a member of the surgical team.</p>
        </details>

        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <span class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium">How much does a consultation cost?</span>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">A first consultation runs forty-five minutes and includes imaging review where available. The fee is fixed and disclosed at booking. Surgical quotes are issued in writing after the planning consultation — never verbally on the first visit.</p>
        </details>

        <details class="group py-6">
          <summary class="flex justify-between items-start gap-6 cursor-pointer list-none">
            <span class="gna-serif text-[20px] md:text-[24px] leading-[1.25] text-[var(--navy)] font-medium">Do you accept insurance?</span>
            <span class="text-[24px] text-[var(--steel)] group-open:rotate-45 transition-transform duration-300 shrink-0 leading-none mt-1" aria-hidden="true">+</span>
          </summary>
          <p class="mt-4 text-[15px] leading-[1.7] text-[var(--slate)] max-w-2xl">Cashless treatment is available with Star Health, ICICI Lombard, HDFC ERGO, and New India Assurance. For procedures above ₹50,000, no-cost EMI is available through Bajaj Finserv. Our coordinator walks patients through pre-authorisation before admission.</p>
        </details>
      </div>
    </div>
  </div>
</section>

<!-- ── X. Booking panel ───────────────────────────────────────────── -->
<section id="contact" class="bg-[var(--warm-deep)] border-t gna-rule">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 py-20 md:py-28">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">

      <!-- Left info column -->
      <div class="lg:col-span-5">
        <p class="gna-eyebrow text-[var(--steel)] mb-3">§ Make contact</p>
        <h2 class="gna-serif text-[40px] md:text-[56px] leading-[1.05] text-[var(--navy)] mb-5">Request a consultation.</h2>
        <p class="text-[15px] leading-[1.65] text-[var(--slate)] max-w-md mb-10">Our coordinator will respond within twenty-four hours with available appointment windows and what to bring to your first visit.</p>

        <div class="space-y-5">
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">Direct line</div>
            <a href="tel:+919000666476" class="gna-serif text-[28px] text-[var(--navy)] hover:text-[var(--steel)] transition-colors">+91 90006 66476</a>
          </div>
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">WhatsApp</div>
            <a href="https://wa.me/919000666476" class="text-[15px] text-[var(--navy)] gna-link" target="_blank" rel="noopener">wa.me/919000666476</a>
          </div>
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">Email</div>
            <a href="mailto:gnathosface@gmail.com" class="text-[15px] text-[var(--navy)] gna-link">gnathosface@gmail.com</a>
          </div>
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">Practice</div>
            <p class="text-[14px] leading-[1.6] text-[var(--slate)]">Cabin No. 214, Regency Prime<br/>Jayabheri Pine Valley, Gachibowli<br/>Hyderabad 500032</p>
          </div>
          <div>
            <div class="gna-eyebrow text-[var(--slate)] mb-2">Hours</div>
            <p class="text-[14px] leading-[1.6] text-[var(--slate)]">Mon–Thu · 08:00 – 17:00<br/>Fri · 08:00 – 13:00<br/>Saturday · by appointment only</p>
          </div>
        </div>

        <!-- Google Map embed (lazy-loaded via loading="lazy") -->
        <div class="mt-8 border gna-rule rounded-md overflow-hidden bg-white">
          <iframe
            title="Gnathos Facial — Maxillofacial Surgeon in Gachibowli, Hyderabad"
            src="https://www.google.com/maps?q=Regency+Prime,+Jayabheri+Pine+Valley,+Gachibowli,+Hyderabad+500032&output=embed"
            width="100%" height="260" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            style="border:0; display:block;"
            aria-label="Map showing Gnathos Facial practice location in Gachibowli, Hyderabad"></iframe>
          <div class="px-4 py-3 text-[12px] text-[var(--slate)] flex items-center justify-between">
            <span>Cabin No. 214, Regency Prime, Gachibowli</span>
            <a href="https://www.google.com/maps/dir/?api=1&destination=Regency+Prime,+Jayabheri+Pine+Valley,+Gachibowli,+Hyderabad+500032" target="_blank" rel="noopener" class="gna-link font-medium text-[var(--steel)]">Get directions →</a>
          </div>
        </div>
      </div>

      <!-- Right form -->
      <div class="lg:col-span-7">
        <div class="bg-white border gna-rule rounded-md p-7 md:p-10">
          <h3 class="gna-serif text-[26px] text-[var(--navy)] mb-2">Send an enquiry</h3>
          <p class="text-[14px] text-[var(--slate)] mb-8">Four fields. We reply within 24 hours. No spam.</p>

          <form id="contact-form" class="space-y-5" onsubmit="handleContactSubmit(event)" novalidate>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label class="block gna-eyebrow text-[var(--slate)] mb-2" for="contact-name">Full name <span class="text-[var(--trauma)]" aria-hidden="true">*</span></label>
                <input class="w-full px-4 py-3 rounded-md border gna-rule bg-[#F8F5EF] text-[15px] text-[var(--navy)] focus:outline-none focus:border-[var(--steel)] focus:ring-2 focus:ring-[var(--steel)]/30 transition-all" id="contact-name" name="name" type="text" required aria-required="true" autocomplete="name" placeholder="As on your records"/>
              </div>
              <div>
                <label class="block gna-eyebrow text-[var(--slate)] mb-2" for="contact-phone">Phone <span class="text-[var(--trauma)]" aria-hidden="true">*</span></label>
                <input class="w-full px-4 py-3 rounded-md border gna-rule bg-[#F8F5EF] text-[15px] text-[var(--navy)] focus:outline-none focus:border-[var(--steel)] focus:ring-2 focus:ring-[var(--steel)]/30 transition-all" id="contact-phone" name="phone" type="tel" required aria-required="true" autocomplete="tel" placeholder="+91"/>
              </div>
            </div>
            <div>
              <label class="block gna-eyebrow text-[var(--slate)] mb-2" for="contact-treatment">Reason for visit</label>
              <select class="w-full px-4 py-3 rounded-md border gna-rule bg-[#F8F5EF] text-[15px] text-[var(--navy)] focus:outline-none focus:border-[var(--steel)] focus:ring-2 focus:ring-[var(--steel)]/30 transition-all appearance-none" id="contact-treatment" name="treatment">
                <option value="">Select a specialty…</option>
                <option>TMJ disorders / jaw pain</option>
                <option>Facial injury or fracture</option>
                <option>Jaw misalignment (orthognathic)</option>
                <option>Rhinoplasty / nasal surgery</option>
                <option>Sleep apnea (OSA)</option>
                <option>Oral cancer / oral lesion</option>
                <option>Reconstruction / grafts</option>
                <option>Other / not sure</option>
              </select>
            </div>
            <div>
              <label class="block gna-eyebrow text-[var(--slate)] mb-2" for="contact-date">Preferred date</label>
              <input class="w-full px-4 py-3 rounded-md border gna-rule bg-[#F8F5EF] text-[15px] text-[var(--navy)] focus:outline-none focus:border-[var(--steel)] focus:ring-2 focus:ring-[var(--steel)]/30 transition-all" id="contact-date" name="preferred_date" type="date"/>
              <p class="text-[12px] text-[var(--slate)] mt-1.5">Optional. We'll confirm availability within 24 hours.</p>
            </div>

            <button class="w-full gna-btn gna-btn-primary justify-center !py-4 !text-[13px]" id="contact-submit" type="submit">
              Book Appointment
            </button>

            <p class="text-[12px] text-[var(--slate)] leading-[1.55]">By submitting, you consent to the practice contacting you about your enquiry. We do not share patient information.</p>

            <div class="hidden text-center py-3 px-4 rounded-md border border-[var(--steel)] text-[var(--steel)] text-[14px] font-medium bg-white" id="form-success" role="status" aria-live="polite">
              Thank you. The clinical coordinator will be in touch within 24 hours.
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
function handleContactSubmit(e) {
  e.preventDefault();
  const form = e.target;
  const btn = document.getElementById('contact-submit');
  const success = document.getElementById('form-success');

  if (!form.checkValidity()) {
    form.reportValidity();
    return;
  }

  const originalLabel = 'Book Appointment';
  btn.disabled = true;
  btn.innerHTML = 'Sending…';

  const formData = new FormData();
  const fullName = form.querySelector('[name="name"]').value.trim();
  const nameParts = fullName.split(/\s+/);
  const firstName = nameParts[0] || '';
  const lastName = nameParts.slice(1).join(' ') || '';

  formData.append('FirstName', firstName);
  formData.append('LastName', lastName);
  formData.append('Email', '');
  formData.append('PhoneNumber', form.querySelector('[name="phone"]').value);

  const treatment = form.querySelector('[name="treatment"]').value;
  const preferred = form.querySelector('[name="preferred_date"]').value;
  const messageVal = (treatment ? `Reason: ${treatment}\n` : '') + (preferred ? `Preferred date: ${preferred}\n` : '');
  formData.append('Message', messageVal);

  formData.append('name', fullName);
  formData.append('phone', form.querySelector('[name="phone"]').value);
  formData.append('treatment', treatment);
  formData.append('preferred_date', preferred);

  fetch('https://app.formester.com/forms/O0tc1x4O7/submissions', {
    method: 'POST',
    body: formData,
    mode: 'no-cors'
  })
  .then(() => {
    btn.classList.add('hidden');
    success.classList.remove('hidden');
    success.focus();
  })
  .catch(() => {
    btn.disabled = false;
    btn.innerHTML = originalLabel;
    alert('There was an error sending your message. Please try again or call us directly.');
  });
}

// Soft reveal
document.addEventListener('DOMContentLoaded', () => {
  const dateInput = document.getElementById('contact-date');
  if (dateInput) {
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    dateInput.min = `${yyyy}-${mm}-${dd}`;
  }
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(en => {
        if (en.isIntersecting) {
          en.target.classList.add('is-in');
          io.unobserve(en.target);
        }
      });
    }, { threshold: 0.08 });
    document.querySelectorAll('section').forEach(s => io.observe(s));
  }
});
</script>

<?php
include $path_prefix . 'footer.php';
?>