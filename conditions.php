<?php
$path_prefix = "";
$page_title = "Oral & Maxillofacial Conditions | Gnathos Facial Surgery";
$page_description = "Comprehensive information on oral and maxillofacial conditions treated by Dr. Suresh P.L., including TMJ disorders, facial trauma, sleep apnea, jaw misalignment, and oral cancers.";
$canonical_url = "https://gnathosface.com/conditions/";
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>

<main>
<!-- Hero Section -->
<section class="relative pt-section-gap pb-section-gap overflow-hidden bg-surface-container-low">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_30%,rgba(19,104,112,0.05),transparent_50%)] pointer-events-none"></div>
  <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
    <span class="text-secondary font-label-md text-label-md uppercase tracking-wider mb-4 block">Clinical Expertise</span>
    <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-primary mb-6">Conditions We Treat</h1>
    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
      Specialized diagnosis and comprehensive evaluation of complex conditions affecting the face, jaws, teeth, and temporomandibular joints.
    </p>
  </div>
</section>

<!-- Grid Cards Section -->
<section class="py-section-gap bg-surface">
  <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
      <!-- Card 1: TMJ Disorders -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="TMJ Disorders" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/tmj_disorders_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">vital_signs</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">TMJ Disorders</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Diagnosis and management of Temporomandibular Joint pain, locking, jaw clicking, and structural joint dysfunction.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="tmj-disorders.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>
      
      <!-- Card 2: Facial Injuries -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Facial Injuries" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/facial_injuries_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">emergency</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Facial Trauma &amp; Injuries</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Treatment of facial fractures (jaw, cheekbone, eye socket), facial lacerations, and soft tissue trauma.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="facial-injuries.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 3: Rhinoplasty / Nasal Concerns -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Rhinoplasty" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/rhinoplasty.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">face_retouching_natural</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Nasal Deformities &amp; Airway Issues</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Functional and aesthetic concerns of the nose, including deviated septum, nasal trauma, and cosmetic disharmony.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="rhinoplasty.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 4: Sleep Apnea (OSA) -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Obstructive Sleep Apnea" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/osa_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">airline_seat_individual_suite</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Sleep Apnea (OSA)</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Severe airway obstructions leading to snoring, disrupted breathing, daytime fatigue, and associated health risks.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="obstructive-sleep-apnea.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 5: Oral Cancer & Tumors -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Oral Cancers" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/oral_cancers_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">coronavirus</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Oral Cavity Cancers &amp; Growths</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Oncological screening, biopsies, and surgical management of malignant and benign tumors of the mouth and jaws.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="oral-cancer.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 6: Jaw Misalignment -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Jaw Reconstruction" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/jaw_reconstruction_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">face</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Jaw Misalignment &amp; Deformities</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Skeletal irregularities of the jaws causing bite issues, breathing difficulties, speech impairments, and aesthetic concerns.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="orthognathic-surgery.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</main>

<?php
include $path_prefix . 'footer.php';
?>
