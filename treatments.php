<?php
$path_prefix = "";
$page_title = "Oral & Maxillofacial Treatments & Procedures | Gnathos Facial Surgery";
$page_description = "Comprehensive listing of oral and maxillofacial surgeries and treatments provided by Dr. Suresh P.L. at Gnathos, including jaw surgery, TMJ arthroscopy, skin grafts, rhinoplasty, and oral cancer treatment.";
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>

<main>
<!-- Hero Section -->
<section class="relative pt-section-gap pb-section-gap overflow-hidden bg-surface-container-low">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_30%,rgba(19,104,112,0.05),transparent_50%)] pointer-events-none"></div>
  <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop text-center">
    <span class="text-secondary font-label-md text-label-md uppercase tracking-wider mb-4 block">Surgical Procedures</span>
    <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-primary mb-6">Treatments We Provide</h1>
    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
      Advanced surgical interventions combining clinical expertise and cutting-edge technology to restore functionality and facial harmony.
    </p>
  </div>
</section>

<!-- Grid Cards Section -->
<section class="py-section-gap bg-surface">
  <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
      <!-- Card 1: TMJ Treatment -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="TMJ Treatment" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/tmj_disorders_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">healing</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">TMJ Treatment</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Surgical and conservative options to alleviate jaw joint pain, muscle spasms, and chewing difficulty.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="tmj-treatment.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>
      
      <!-- Card 2: TMJ Arthroscopy -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43_72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="TMJ Arthroscopy" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/tmj_disorders_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">medical_services</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">TMJ Arthroscopy</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Minimally invasive keyhole joint surgery to inspect, wash, and release locked temporomandibular joints.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="tmj-arthroscopy.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 3: Jaw Surgery -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Jaw Surgery" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/jaw_reconstruction_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">architecture</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Orthognathic (Jaw) Surgery</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Corrective jaw alignment surgery to improve skeletal function, bite mechanics, and facial balance.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="jaw-surgery.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 4: Advanced Jaw Surgery -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Advanced Jaw Surgery" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/jaw_reconstruction_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">precision_manufacturing</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Advanced Jaw Reconstruction</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Complex bone grafting and correction protocols for severe skeletal jaw defects and post-trauma deformities.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="orthognathic-surgery-treatment.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 5: Skin Grafts & Flaps -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Skin Grafts" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/facial_injuries_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">layers</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Skin Grafts &amp; Flaps</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Micro-surgical soft tissue reconstruction and skin grafts to repair trauma or cancer resection defects.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="skin-grafts-and-flaps.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 6: Rhinoplasty Treatment -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Rhinoplasty" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/rhinoplasty.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">face_retouching_natural</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Rhinoplasty Treatment</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Nasal airway clearance, septoplasty, and cosmetic rhinoplasty to restore breathing capability and facial aesthetics.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="rhinoplasty-treatment.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 7: Oral Cancer Treatment -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Oral Cancers" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/oral_cancers_before_after.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">coronavirus</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Oral Cancer Surgery</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Tumor removal, lymph node dissection, and immediate reconstructive surgery for oral cavity lesions.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="oral-cancer-treatment.php">
            View Details
            <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
          </a>
        </div>
      </div>

      <!-- Card 8: Cosmetic Facial Surgery -->
      <div class="group bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
        <div class="h-48 bg-surface-container-low overflow-hidden relative">
          <img alt="Rhinoplasty" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500" src="asset/rhinoplasty.png"/>
        </div>
        <div class="p-8 flex flex-col grow">
          <span class="material-symbols-outlined text-secondary text-[32px] mb-4 icon-weight-300">design_services</span>
          <h3 class="font-headline-sm text-headline-sm text-primary mb-3">Cosmetic Facial Surgery</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mb-6 grow">
            Surgical reshaping of facial bones and soft tissue structures for optimal symmetry, projection, and aesthetic flow.
          </p>
          <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity" href="cosmetic-facial-surgery-treatment.php">
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
