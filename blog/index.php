<?php
$path_prefix = "../";
$page_title = "Clinical Insights &amp; Latest Blogs | Gnathos Facial Surgery";
$page_description = "";
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>


<main>

<section class="py-16 md:py-24 bg-surface border-b border-surface-container-high relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(19,104,112,0.05),transparent_60%)] pointer-events-none"></div>
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10 text-center">
        <span class="font-label-md text-label-md text-secondary tracking-widest uppercase mb-4 block">Our Journal</span>
        <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-primary mb-6">Clinical Insights &amp; Latest Blogs</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">
            Explore our latest articles, case studies, and academic updates on maxillofacial surgery to stay informed on modern surgical advancements.
        </p>
    </div>
</section>

<section class="py-section-gap bg-surface-container-lowest">
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
        
        <!-- Filter Tabs (Optional UI Enhancement) -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-primary text-on-primary font-label-md text-sm uppercase tracking-wider">All</button>
            <button class="px-6 py-2 rounded-full border border-surface-container-high text-on-surface-variant hover:bg-surface-container-low font-label-md text-sm uppercase tracking-wider transition-colors">Surgical Techniques</button>
            <button class="px-6 py-2 rounded-full border border-surface-container-high text-on-surface-variant hover:bg-surface-container-low font-label-md text-sm uppercase tracking-wider transition-colors">Patient Guides</button>
            <button class="px-6 py-2 rounded-full border border-surface-container-high text-on-surface-variant hover:bg-surface-container-low font-label-md text-sm uppercase tracking-wider transition-colors">Technology</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="The Evolution of TMJ Arthroscopy: Minimally Invasive Solutions" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=1"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Surgical Techniques</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">The Evolution of TMJ Arthroscopy: Minimally Invasive Solutions</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        An in-depth look at how advanced arthroscopic techniques are transforming the treatment of complex temporomandibular joint disorders with faster recovery times.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="evolution-of-tmj-arthroscopy.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="Evidence-Based Recovery Protocols for Jaw Reconstruction" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=2"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Patient Guides</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">Evidence-Based Recovery Protocols for Jaw Reconstruction</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        Navigating the critical post-operative phases of orthognathic surgery with our comprehensive, step-by-step clinical recovery guidelines.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="recovery-protocols-jaw-reconstruction.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="The Role of 3D Virtual Planning in Maxillofacial Procedures" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=3"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Technology</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">The Role of 3D Virtual Planning in Maxillofacial Procedures</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        How virtual surgical planning (VSP) and 3D printing are enhancing accuracy and predictability in complex facial trauma and reconstructive surgeries.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="role-of-3d-virtual-planning.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="Understanding Facial Trauma Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=4"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Trauma Care</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">Understanding Facial Trauma Management</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        A guide to immediate care and surgical reconstruction following acute facial injuries and fractures.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="understanding-facial-trauma-management.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="Early Detection in Oral Cancers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=5"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Oncology</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">Early Detection in Oral Cancers</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        Why early screening and timely biopsies are the most important factors for successful treatment of oral malignancies.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="early-detection-in-oral-cancers.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="Maxillomandibular Advancement for OSA" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=6"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Airway Surgery</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">Maxillomandibular Advancement for OSA</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        Exploring the efficacy of major jaw repositioning surgeries in providing long-term relief for Obstructive Sleep Apnea.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="maxillomandibular-advancement-for-osa.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="Rhinoplasty: Balancing Aesthetics and Function" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=7"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Cosmetic</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">Rhinoplasty: Balancing Aesthetics and Function</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        How modern rhinoplasty techniques address both breathing difficulties and aesthetic harmony in a single procedure.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="rhinoplasty-balancing-aesthetics-function.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="Cosmetic Facial Surgery: Beyond the Basics" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=8"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Cosmetic</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">Cosmetic Facial Surgery: Beyond the Basics</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        Exploring advanced techniques in facial rejuvenation and contouring that provide natural, long-lasting results.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="cosmetic-facial-surgery-beyond-basics.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

            <article class="bg-surface-container-lowest rounded-xl shadow-md border border-surface-container-high overflow-hidden group hover:shadow-[0_20px_40px_rgba(26,43,72,0.1)] transition-all duration-300 flex flex-col">
                <div class="h-56 overflow-hidden bg-surface-container-low">
                    <img alt="Dental Implants vs. Bone Grafts: What You Need to Know" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://picsum.photos/800/600?random=9"/>
                </div>
                <div class="p-6 flex flex-col grow">
                    <span class="font-label-sm text-secondary uppercase tracking-wider mb-3 block">Reconstruction</span>
                    <h3 class="font-headline-sm text-[22px] text-primary mb-3 leading-snug">Dental Implants vs. Bone Grafts: What You Need to Know</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-3 grow">
                        Understanding when a bone graft is necessary before dental implant placement and what the procedure entails.
                    </p>
                    <a class="inline-flex items-center gap-2 font-label-md text-label-md text-secondary uppercase tracking-wider hover:opacity-80 transition-opacity mt-auto" href="dental-implants-vs-bone-grafts.php">
                        Read Article
                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>

        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-2 mt-16">
            <button class="w-10 h-10 rounded border border-surface-container-high flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low disabled:opacity-50" disabled>
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button class="w-10 h-10 rounded bg-primary text-on-primary font-label-md text-sm">1</button>
            <button class="w-10 h-10 rounded border border-surface-container-high flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low font-label-md text-sm transition-colors">2</button>
            <button class="w-10 h-10 rounded border border-surface-container-high flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low font-label-md text-sm transition-colors">3</button>
            <button class="w-10 h-10 rounded border border-surface-container-high flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>

    </div>
</section>

</main>

<?php
include $path_prefix . 'footer.php';
?>
