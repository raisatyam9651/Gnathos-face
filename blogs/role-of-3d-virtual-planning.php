<?php
$path_prefix = "../";
$page_title = "The Role of 3D Virtual Planning in Maxillofacial Procedures | Gnathos Facial Surgery";
$page_description = "Discover how 3D virtual surgical planning (VSP) is transforming orthognathic surgery, facial trauma, jaw reconstruction, and TMJ replacement with millimetre-level accuracy.";
$page_keywords = "3D virtual surgical planning, VSP, orthognathic surgery, maxillofacial surgery, patient-specific implants, custom surgical splints, CBCT, Dolphin 3D, ProPlan CMF, Gnathos";
$canonical_url = "https://gnathosface.com/blogs/role-of-3d-virtual-planning/";
include $path_prefix . 'header-include.php';
include $path_prefix . 'header.php';
?>
<link href="blog-style.css" rel="stylesheet">


<main>

    <!-- Blog Post Header with Breadcrumb -->
    <div class="bg-surface-container-low border-b border-surface-container-high py-8">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <nav class="flex items-center gap-2 text-sm text-on-surface-variant font-label-md uppercase tracking-wider mb-6">
                <a href="../index.php" class="hover:text-primary transition-colors">Home</a>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                <a href="index.php" class="hover:text-primary transition-colors">Insights & Blogs</a>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                <span class="text-secondary">Technology</span>
            </nav>
            <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-primary mb-6 leading-tight max-w-4xl">The Role of 3D Virtual Planning in Maxillofacial Procedures</h1>
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-3">
                    <img src="../asset/dr-navatha-mortha-facial.webp" alt="Author" class="w-10 h-10 rounded-full object-cover shadow-sm"/>
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-primary">Dr. Navatha Mortha</span>
                        <span class="text-xs text-on-surface-variant uppercase tracking-wider">May 28, 2026</span>
                    </div>
                </div>
                <div class="h-8 w-px bg-surface-container-high hidden md:block"></div>
                <div class="hidden md:flex items-center gap-4">
                    <span class="text-sm text-on-surface-variant font-medium">Share:</span>
                    <a href="#" class="text-on-surface-variant hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">share</span></a>
                    <a href="#" class="text-on-surface-variant hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">link</span></a>
                    <a href="#" class="text-on-surface-variant hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">bookmark</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content and Sidebar Layout -->
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-12 md:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">

            <!-- Left Column: Article Body -->
            <article class="lg:col-span-8">
                <!-- Featured Image -->
                <div class="aspect-[16/9] w-full rounded-2xl overflow-hidden shadow-lg border border-surface-container-high mb-12">
                    <img alt="The Role of 3D Virtual Planning in Maxillofacial Procedures" class="w-full h-full object-cover" src="https://picsum.photos/1200/600?random=12"/>
                </div>

                <!-- Prose Content -->
                <div class="prose prose-lg prose-headings:font-headline-md prose-headings:text-primary prose-p:font-body-md prose-p:text-on-surface-variant prose-a:text-secondary prose-ul:my-6 prose-li:my-2 prose-p:my-4 prose-headings:mt-10 prose-headings:mb-4 prose-img:my-8 max-w-none">

                    <p class="text-xl leading-relaxed text-primary/80 font-medium italic mb-8 border-l-4 border-secondary pl-6">
                        How virtual surgical planning (VSP) and 3D printing are enhancing accuracy and predictability in complex facial trauma and reconstructive surgeries.
                    </p>

                    <!-- Table of Contents -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl border border-surface-container-high my-10 not-prose shadow-sm">
                        <h3 class="font-headline-sm text-[20px] text-primary mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-secondary">format_list_bulleted</span>
                            Table of Contents
                        </h3>
                        <ul class="space-y-3 font-body-md text-on-surface-variant list-none p-0 m-0">
                            <li><a href="#what-is-vsp" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>What is 3D Virtual Surgical Planning?</a></li>
                            <li><a href="#why-2d-is-not-enough" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>Why 2D Planning Is No Longer Enough</a></li>
                            <li><a href="#imaging-chain" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>The Imaging Chain Behind VSP</a></li>
                            <li><a href="#software" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>Software Used in VSP</a></li>
                            <li><a href="#workflow" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>The VSP Workflow Step by Step</a></li>
                            <li><a href="#accuracy" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>How VSP Improves Accuracy</a></li>
                            <li><a href="#orthognathic" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>VSP for Orthognathic Surgery</a></li>
                            <li><a href="#trauma" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>VSP for Facial Trauma</a></li>
                            <li><a href="#reconstruction" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>VSP for Jaw Reconstruction</a></li>
                            <li><a href="#distraction" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>VSP for Distraction Osteogenesis</a></li>
                            <li><a href="#tmj" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>VSP for TMJ Replacement</a></li>
                            <li><a href="#splints-psi" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>Custom Splints and Patient-Specific Implants</a></li>
                            <li><a href="#or-time" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>How VSP Shortens Operating Time</a></li>
                            <li><a href="#outcomes" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>Outcomes and Patient Communication</a></li>
                            <li><a href="#cost" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>Cost-Benefit Analysis</a></li>
                            <li><a href="#future" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>The Future of VSP</a></li>
                            <li><a href="#faq" class="hover:text-secondary transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-secondary">arrow_right</span>Frequently Asked Questions</a></li>
                        </ul>
                    </div>

                    <h2 id="what-is-vsp" class="scroll-mt-24">What is 3D Virtual Surgical Planning?</h2>

                    <p>
                        Three-dimensional virtual surgical planning, commonly abbreviated as VSP, is a computer-based workflow that allows a maxillofacial surgeon to simulate an operation on a digital replica of the patient's face and jaws before entering the operating theatre.
                    </p>

                    <p>
                        Instead of working from flat x-rays and hand-drawn tracings, the surgeon manipulates a precise, patient-specific three-dimensional model. Bone segments can be moved, rotated, and reshaped on screen, and the proposed result can be checked against the patient's soft-tissue envelope.
                    </p>

                    <p>
                        The plan is then translated back into the operating room through 3D-printed surgical splints, cutting guides, anatomical models, and patient-specific implants. For a deeper primer on the underlying procedure, see our guide on <a href="what-is-orthognathic-surgery.php">orthognathic surgery</a> and the broader <a href="jaw-surgery-orthognathic-complete-guide-for-patients.php">complete orthognathic patient guide</a>.
                    </p>

                    <div class="aspect-[16/9] w-full rounded-2xl overflow-hidden shadow-lg border border-surface-container-high my-10"><img alt="Surgeon reviewing 3D virtual surgical plan on a workstation" class="w-full h-full object-cover" src="https://picsum.photos/1200/600?random=101"/></div>

                    <h2 id="why-2d-is-not-enough" class="scroll-mt-24">Why 2D Planning Is No Longer Enough</h2>

                    <p>
                        Traditional orthognathic and trauma planning relied on lateral cephalograms, panoramic radiographs, and plaster study models. These give a flattened, two-dimensional view of a three-dimensional problem.
                    </p>

                    <p>
                        Asymmetry, occlusal cant, and yaw rotations of the jaw are difficult to quantify on a single cephalogram. Critical landmarks can be superimposed or distorted, and the soft-tissue outcome must be guessed from experience rather than predicted.
                    </p>

                    <p>
                        For complex cases such as facial asymmetry, syndromic deformity, post-traumatic reconstruction, and tumour resection, the limitations of 2D planning become clinically significant. VSP closes that gap by giving the surgeon an honest, three-dimensional view of the bony skeleton and the overlying soft tissue.
                    </p>

                    <h2 id="imaging-chain" class="scroll-mt-24">The Imaging Chain Behind VSP</h2>

                    <p>
                        Accurate planning starts with accurate data. Most VSP workflows combine four complementary datasets, each capturing a different aspect of the patient's anatomy.
                    </p>

                    <p>
                        A cone-beam computed tomography (CBCT) scan provides the high-resolution bony anatomy of the skull, midface, mandible, and condyles. CBCT is preferred over medical CT for most maxillofacial cases because it delivers excellent bone detail at a lower radiation dose.
                    </p>

                    <p>
                        An intraoral scan captures the precise geometry of the dental arches and occlusion, replacing messy alginate impressions. The scan is exported as an STL file and merged with the CBCT bone data so that the teeth sit accurately on the jaw skeleton.
                    </p>

                    <p>
                        A facial surface scan, taken with a structured-light or stereophotogrammetry system, records the soft-tissue envelope. It allows the surgeon to preview the predicted facial result after bone movement, which is particularly useful when discussing <a href="can-jaw-surgery-improve-facial-appearance.php">jaw surgery for facial appearance</a>.
                    </p>

                    <p>
                        A model scan of the dental cast is sometimes added when highly detailed occlusal anatomy is required, for example in full-mouth rehabilitation or complex implant planning that may be combined with <a href="dental-implants-vs-bone-grafts.php">dental implants and bone grafts</a>.
                    </p>

                    <h2 id="software" class="scroll-mt-24">Software Used in VSP</h2>

                    <p>
                        A small group of specialised software platforms dominate the VSP landscape. Each offers tools for image fusion, segmentation, osteotomy design, splint design, and fixation planning.
                    </p>

                    <p>
                        Dolphin 3D is widely used for orthognathic tracing, cephalometric analysis, and surgical simulation. It integrates well with iOS and Android intraoral scanners and is a workhorse for routine jaw surgery planning.
                    </p>

                    <p>
                        ProPlan CMF (Materialise) is the industry standard for complex craniofacial, orthognathic, and reconstruction cases. It is paired with Materialise's engineering pipeline for designing custom splints and patient-specific plates.
                    </p>

                    <p>
                        Mimics Innovation Suite is used for detailed segmentation of bone, teeth, vessels, and soft tissue. It is particularly powerful for tumour resection and free-flap reconstruction. Brainlab and 3D Systems offer similar planning environments with strong trauma and neurosurgical integration.
                    </p>

                    <h2 id="workflow" class="scroll-mt-24">The VSP Workflow Step by Step</h2>

                    <p>
                        The VSP workflow follows a predictable sequence, although each case is tailored to the patient. The first step is image fusion, where CBCT, intraoral scan, and face scan are registered into a single coordinate system.
                    </p>

                    <p>
                        Segmentation follows. The surgeon or biomedical engineer isolates the maxilla, mandible, condyles, teeth, and any relevant pathology in three dimensions. This produces the digital "skeleton" on which the surgery will be simulated.
                    </p>

                    <p>
                        Osteotomy design is the next step. The surgeon draws the planned bone cuts virtually, mirroring the surgical access used in theatre. The segments are then moved to their new positions according to the cephalometric and aesthetic plan.
                    </p>

                    <p>
                        Splint fabrication is the bridge between the virtual plan and the operating theatre. Intermediate and final splints are designed in the software and exported as STL files for 3D printing in medical-grade resin.
                    </p>

                    <p>
                        Fixation planning completes the workflow. The position of plates, screws, and any patient-specific implant is defined virtually, so that the surgeon knows exactly where each fixation point will sit before making an incision.
                    </p>

                    <h2 id="accuracy" class="scroll-mt-24">How VSP Improves Accuracy</h2>

                    <p>
                        Published studies and intraoperative measurements consistently show that VSP enables movements to within 1 to 2 millimetres of the planned position. This is well within the threshold required for a stable, well-seated occlusion.
                    </p>

                    <p>
                        Accuracy improves for several reasons. The surgeon can see the anatomy from every angle, measure distances directly, and trial alternative movements. Plate and screw positions are pre-planned, removing the variability of intraoperative bending.
                    </p>

                    <p>
                        For patients, the practical upshot is a more predictable bite, a more symmetrical face, and fewer revisions. It is also a powerful safety tool when operating close to the inferior alveolar nerve, maxillary sinus, or orbital floor.
                    </p>

                    <div class="aspect-[16/9] w-full rounded-2xl overflow-hidden shadow-lg border border-surface-container-high my-10"><img alt="3D-printed surgical splint ready for orthognathic surgery" class="w-full h-full object-cover" src="https://picsum.photos/1200/600?random=102"/></div>

                    <h2 id="orthognathic" class="scroll-mt-24">VSP for Orthognathic Surgery</h2>

                    <p>
                        Orthognathic surgery is the discipline that has benefited most visibly from VSP. The classic Le Fort I maxillary osteotomy, bilateral sagittal split osteotomy (BSSO), and genioplasty are all planned and splinted virtually.
                    </p>

                    <p>
                        For a Le Fort I, the surgeon virtually down-fractures the maxilla, repositions it in three dimensions, and designs a final occlusal splint that guides the new bite. For a BSSO, the mandibular segments are split and advanced or set back along a precisely defined vector.
                    </p>

                    <p>
                        Genioplasty, often the finishing touch in <a href="what-is-orthognathic-surgery-purpose-procedure-and-recovery-explained.php">purpose, procedure and recovery of orthognathic surgery</a>, is planned with millimetre-level control of chin projection, height, and width. Patients see a realistic soft-tissue preview before consenting to the procedure.
                    </p>

                    <p>
                        VSP is also invaluable in combined orthodontic-surgical cases. Modern digital workflows allow the orthodontist to share the planned final occlusion digitally, reducing overall treatment time.
                    </p>

                    <h2 id="trauma" class="scroll-mt-24">VSP for Facial Trauma</h2>

                    <p>
                        In facial trauma, VSP is most valuable when the original anatomy has been disrupted. The intact side of the face is mirrored across the midline, providing a template for reconstructing the fractured side.
                    </p>

                    <p>
                        This is particularly useful in complex orbital, zygomatic, and frontal sinus fractures. Custom orbital floor plates, pre-bent titanium mesh, and patient-specific implants are designed on the mirrored template and sterilised for theatre.
                    </p>

                    <p>
                        Knowing the typical <a href="broken-jaw-symptoms.php">broken jaw symptoms</a> helps patients reach a trauma-ready centre quickly, but it is the digital workflow that determines the quality of the final repair.
                    </p>

                    <h2 id="reconstruction" class="scroll-mt-24">VSP for Jaw Reconstruction</h2>

                    <p>
                        Mandibular and maxillary reconstruction after tumour resection, osteoradionecrosis, or gunshot injury is one of the most demanding applications of VSP. The surgeon must rebuild both the bone and the dental arch that sits on it.
                    </p>

                    <p>
                        For fibula free flap reconstruction, the surgeon harvests a segment of the leg bone, reshapes it according to the planned mandibular contour, and fixates it with a custom plate. The fibula is virtually osteotomised on screen first, and cutting guides are printed to match.
                    </p>

                    <p>
                        Dental implant planning is layered on top of the reconstructed jaw. The implant positions are chosen so that the final prosthesis has good support and a natural emergence profile. This often dovetails with <a href="dental-implants-vs-bone-grafts.php">dental implants and bone grafts</a> when there is a residual ridge deficiency.
                    </p>

                    <h2 id="distraction" class="scroll-mt-24">VSP for Distraction Osteogenesis</h2>

                    <p>
                        Distraction osteogenesis is a technique in which a bone is gradually lengthened after a controlled osteotomy. It is used for severe mandibular hypoplasia, midface hypoplasia in cleft and syndromic patients, and alveolar ridge deficiency.
                    </p>

                    <p>
                        VSP allows the surgeon to choose the osteotomy line, the vector of distraction, and the expected final bone length before the distractor is placed. Custom distractor guides ensure that the device sits exactly along the planned vector.
                    </p>

                    <p>
                        The patient activates the distractor at home over a period of weeks. Periodic imaging confirms that the new bone is forming along the planned path, and the device is removed once consolidation is complete.
                    </p>

                    <h2 id="tmj" class="scroll-mt-24">VSP for TMJ Replacement</h2>

                    <p>
                        Total joint replacement of the temporomandibular joint is reserved for end-stage TMJ disease, ankylosis, multiply operated joints, and congenital deformity. VSP is now considered essential for these cases.
                    </p>

                    <p>
                        A patient-specific TMJ prosthesis is designed on the patient's own CBCT. The fossa component, condylar head, and ramal plate are all custom-machined to fit the patient's anatomy. This avoids the compromises of stock prostheses and reduces operating time.
                    </p>

                    <p>
                        Where the joint replacement is part of a combined orthognathic procedure, VSP unifies both operations into a single, sequenced plan. This is important when treating <a href="can-jaw-surgery-help-with-sleep-apnea.php">jaw surgery for sleep apnoea</a> in patients with retrognathic mandibles and compromised airways.
                    </p>

                    <h2 id="splints-psi" class="scroll-mt-24">Custom Splints and Patient-Specific Implants</h2>

                    <p>
                        Two physical outputs of VSP deserve special mention. The first is the surgical splint. Intermediate splints guide the maxilla into its new position using the unoperated mandible as a reference. Final splints lock the jaws together in the planned occlusion.
                    </p>

                    <p>
                        Patient-specific implants (PSI) are the second. These include custom titanium plates, pre-bent reconstruction plates, orbital floor implants, and TMJ prostheses. PSI reduce operating time, improve accuracy, and often remove the need for intraoperative plate bending.
                    </p>

                    <p>
                        3D-printed anatomical models are a quiet third output, but equally useful. Holding a sterilised model of the patient's jaw in theatre gives the surgeon a tactile reference that flat imaging cannot match.
                    </p>

                    <div class="aspect-[16/9] w-full rounded-2xl overflow-hidden shadow-lg border border-surface-container-high my-10"><img alt="Patient-specific titanium plate designed on a virtual plan" class="w-full h-full object-cover" src="https://picsum.photos/1200/600?random=103"/></div>

                    <h2 id="or-time" class="scroll-mt-24">How VSP Shortens Operating Time</h2>

                    <p>
                        Operating time is one of the strongest predictors of surgical morbidity and infection risk. Anything that reduces theatre time translates directly into a safer operation.
                    </p>

                    <p>
                        VSP shortens operating time by removing guesswork. The osteotomy lines, the splint positions, and the plate bends are all pre-decided. The surgeon does not pause to bend plates or re-measure angles in theatre.
                    </p>

                    <p>
                        Published audits report reductions in theatre time of 30 to 90 minutes for routine bimaxillary orthognathic surgery, and larger savings in complex reconstruction. Less time under anaesthesia means a quicker wake-up and an easier <a href="recovery-time-after-jaw-surgery-complete-healing-timeline-and-care-tips.php">recovery after jaw surgery</a>.
                    </p>

                    <h2 id="outcomes" class="scroll-mt-24">Outcomes and Patient Communication</h2>

                    <p>
                        Beyond the technical advantages, VSP has transformed the consultation itself. Patients can see a three-dimensional prediction of their own face after surgery, which builds trust and shared decision-making.
                    </p>

                    <p>
                        The conversation shifts from abstract promises to a visual plan. Patients understand the magnitude of movement, the location of incisions, and the expected change in their profile. This is particularly valuable in aesthetic-led discussions about <a href="can-jaw-surgery-improve-facial-appearance.php">jaw surgery for facial appearance</a>.
                    </p>

                    <p>
                        Functional outcomes also improve. Better-placed jaws mean better chewing, clearer speech, easier breathing, and reduced joint loading. Combined with sound surgical technique, VSP lowers the risk of revision surgery and protects the patient from <a href="side-effects-of-maxillofacial-surgery-risks-complications-and-prevention.php">maxillofacial surgery risks</a> such as nerve injury and plate malposition.
                    </p>

                    <h2 id="cost" class="scroll-mt-24">Cost-Benefit Analysis</h2>

                    <p>
                        VSP does add an upfront cost. Software licences, engineering time, 3D printing, and custom implants all carry a fee, which is typically passed on to the patient as part of the surgical package.
                    </p>

                    <p>
                        The balance sheet, however, favours VSP for any complex case. Shorter theatre time reduces anaesthesia and operating-room charges. Fewer revisions reduce re-admissions. Faster recovery returns the patient to work sooner.
                    </p>

                    <p>
                        Choosing the right surgeon is part of the value equation. A specialist who has invested in a complete digital workflow will deliver a more predictable result than one who does not. Our guide on <a href="how-to-choose-the-best-maxillofacial-surgeon-in-hyderabad.php">how to choose the best maxillofacial surgeon in Hyderabad</a> walks through the practical questions to ask at consultation.
                    </p>

                    <h2 id="future" class="scroll-mt-24">The Future of VSP</h2>

                    <p>
                        The next wave of VSP is being shaped by artificial intelligence and mixed reality. Machine-learning models are being trained to auto-segment the maxilla, mandible, teeth, and cranial nerves, which will shorten the planning phase.
                    </p>

                    <p>
                        Predictive algorithms will increasingly suggest an aesthetic and functional plan that the surgeon can adjust, rather than starting from a blank canvas. Mixed-reality headsets will allow the surgeon to visualise the virtual plan overlaid on the patient in theatre.
                    </p>

                    <p>
                        At Gnathos, we follow these developments closely. Our commitment is to combine time-tested surgical principles with the best of modern digital technology, so that each patient benefits from a plan that is accurate, predictable, and individually tailored.
                    </p>

                    <!-- Inline CTA -->
                    <div class="my-12 p-8 md:p-10 bg-gradient-to-br from-primary via-primary-container to-primary rounded-2xl border border-primary-fixed/20 text-center not-prose shadow-xl relative overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.1),transparent_60%)] pointer-events-none"></div>
                        <span class="material-symbols-outlined text-[40px] text-secondary mb-4 relative z-10">medical_services</span>
                        <h3 class="font-headline-sm text-[26px] text-on-primary mb-3 relative z-10">Discuss Your Treatment Options</h3>
                        <p class="text-on-primary-container mb-8 relative z-10 max-w-xl mx-auto">Schedule a personalised consultation with our maxillofacial experts to explore the best clinical approach tailored specifically to your condition.</p>
                        <a href="../contact.php" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-secondary text-on-secondary font-semibold text-sm uppercase tracking-wider hover:bg-white hover:text-primary transition-all duration-300 relative z-10 shadow-[0_0_20px_rgba(19,104,112,0.4)]">
                            Book a Consultation
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                    </div>

                    <hr class="my-12 border-surface-container-high" />

                    <!-- Article FAQ -->
                    <h2 id="faq" class="scroll-mt-24 font-headline-md text-primary mb-6">Frequently Asked Questions</h2>
                    <div class="not-prose space-y-4 mb-12">
                        <details class="group border border-surface-container-high rounded-xl bg-surface-container-lowest p-6 cursor-pointer open:bg-surface-container-low transition-colors shadow-sm">
                            <summary class="font-headline-sm text-primary text-[18px] flex justify-between items-center list-none font-semibold">
                                What is 3D virtual surgical planning?
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform text-secondary">expand_more</span>
                            </summary>
                            <p class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                                Three-dimensional virtual surgical planning, or VSP, is a digital workflow that allows your surgeon to plan and rehearse your operation on a computer model of your own face and jaws. The plan is then translated into the operating room through custom surgical splints, cutting guides, and patient-specific implants.
                            </p>
                        </details>

                        <details class="group border border-surface-container-high rounded-xl bg-surface-container-lowest p-6 cursor-pointer open:bg-surface-container-low transition-colors shadow-sm">
                            <summary class="font-headline-sm text-primary text-[18px] flex justify-between items-center list-none font-semibold">
                                Is VSP necessary for jaw surgery?
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform text-secondary">expand_more</span>
                            </summary>
                            <p class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                                VSP is not strictly mandatory for every case, but for orthognathic surgery it is now considered the standard of care. It improves accuracy, shortens operating time, and gives you a realistic preview of the planned result. For complex cases it is essentially indispensable.
                            </p>
                        </details>

                        <details class="group border border-surface-container-high rounded-xl bg-surface-container-lowest p-6 cursor-pointer open:bg-surface-container-low transition-colors shadow-sm">
                            <summary class="font-headline-sm text-primary text-[18px] flex justify-between items-center list-none font-semibold">
                                How accurate is 3D virtual planning?
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform text-secondary">expand_more</span>
                            </summary>
                            <p class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                                Modern VSP systems routinely achieve movements to within 1 to 2 millimetres of the planned position. This is well within the tolerance needed for a stable bite and a symmetrical face. Accuracy depends on image quality, splint fit, and surgical execution.
                            </p>
                        </details>

                        <details class="group border border-surface-container-high rounded-xl bg-surface-container-lowest p-6 cursor-pointer open:bg-surface-container-low transition-colors shadow-sm">
                            <summary class="font-headline-sm text-primary text-[18px] flex justify-between items-center list-none font-semibold">
                                Does VSP increase the cost of surgery?
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform text-secondary">expand_more</span>
                            </summary>
                            <p class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                                VSP adds an upfront fee for software, engineering, 3D printing, and custom implants. In most complex cases the savings from a shorter operation, fewer revisions, and a faster recovery more than offset the upfront cost. Your surgeon will itemise these charges during the consultation.
                            </p>
                        </details>

                        <details class="group border border-surface-container-high rounded-xl bg-surface-container-lowest p-6 cursor-pointer open:bg-surface-container-low transition-colors shadow-sm">
                            <summary class="font-headline-sm text-primary text-[18px] flex justify-between items-center list-none font-semibold">
                                Who does the VSP — the surgeon or a separate company?
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform text-secondary">expand_more</span>
                            </summary>
                            <p class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                                The surgeon owns the clinical plan and makes every surgical decision. A biomedical engineering team, often based at the implant manufacturer or at a dedicated VSP provider, supports the design, segmentation, and 3D printing under the surgeon's direction. Final approval always rests with your operating surgeon.
                            </p>
                        </details>

                        <details class="group border border-surface-container-high rounded-xl bg-surface-container-lowest p-6 cursor-pointer open:bg-surface-container-low transition-colors shadow-sm">
                            <summary class="font-headline-sm text-primary text-[18px] flex justify-between items-center list-none font-semibold">
                                What are patient-specific implants?
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform text-secondary">expand_more</span>
                            </summary>
                            <p class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                                Patient-specific implants are custom-manufactured titanium plates, orbital floors, and joint prostheses designed on your own CBCT scan. Because they are made for your unique anatomy, they fit precisely, reduce operating time, and often remove the need to bend hardware by hand during surgery.
                            </p>
                        </details>

                        <details class="group border border-surface-container-high rounded-xl bg-surface-container-lowest p-6 cursor-pointer open:bg-surface-container-low transition-colors shadow-sm">
                            <summary class="font-headline-sm text-primary text-[18px] flex justify-between items-center list-none font-semibold">
                                Can VSP predict the final facial appearance?
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform text-secondary">expand_more</span>
                            </summary>
                            <p class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                                VSP can simulate the soft-tissue response to the planned bone movement with reasonable accuracy. The prediction is not perfect because skin, muscle, and fat behave in complex ways, but it gives a much more honest preview than 2D imaging and helps align your expectations with the surgical plan.
                            </p>
                        </details>

                        <details class="group border border-surface-container-high rounded-xl bg-surface-container-lowest p-6 cursor-pointer open:bg-surface-container-low transition-colors shadow-sm">
                            <summary class="font-headline-sm text-primary text-[18px] flex justify-between items-center list-none font-semibold">
                                How long does VSP take before surgery?
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform text-secondary">expand_more</span>
                            </summary>
                            <p class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                                Routine orthognathic VSP takes one to two weeks from the planning consultation to the printed splints. Complex reconstruction or custom implants may take three to six weeks because the implants themselves are milled and quality-checked. Your surgeon will confirm the timeline at the planning visit.
                            </p>
                        </details>
                    </div>
                </div>

                <!-- Author Bio Box -->
                <div class="bg-surface-container-low p-8 rounded-2xl border border-surface-container-high flex flex-col md:flex-row gap-6 items-center mt-12">
                    <div class="w-24 h-24 rounded-full overflow-hidden shrink-0 shadow-md">
                        <img alt="Dr. Navatha Mortha" class="w-full h-full object-cover" src="../asset/dr-navatha-mortha-facial.webp"/>
                    </div>
                    <div>
                        <h4 class="font-headline-sm text-lg text-primary mb-1">Dr. Navatha Mortha</h4>
                        <p class="font-label-md text-secondary uppercase tracking-wider mb-3 text-sm">Senior Consultant & Maxillofacial Surgeon</p>
                        <p class="text-sm text-on-surface-variant m-0 leading-relaxed">Dr. Mortha brings over 15 years of dedicated clinical experience to Gnathos Facial Surgery, specialising in complex maxillofacial disorders and minimally invasive interventions. She frequently publishes insights on modern surgical protocols.</p>
                    </div>
                </div>
            </article>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-12">

                <!-- Search Box -->
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container-high">
                    <h3 class="font-headline-sm text-xl text-primary mb-4">Search Journal</h3>
                    <div class="relative">
                        <input type="text" placeholder="Search articles..." class="w-full pl-4 pr-10 py-3 rounded-xl border border-surface-container-high bg-surface text-sm focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent"/>
                        <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                    </div>
                </div>

                <!-- Categories List -->
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container-high">
                    <h3 class="font-headline-sm text-xl text-primary mb-4">Categories</h3>
                    <ul class="space-y-3 font-body-md text-on-surface-variant">
                        <li class="flex items-center justify-between group cursor-pointer">
                            <a href="#" class="group-hover:text-secondary transition-colors">Surgical Techniques</a>
                            <span class="text-xs bg-surface-container-low px-2 py-1 rounded">12</span>
                        </li>
                        <li class="flex items-center justify-between group cursor-pointer">
                            <a href="#" class="group-hover:text-secondary transition-colors">Patient Guides</a>
                            <span class="text-xs bg-surface-container-low px-2 py-1 rounded">8</span>
                        </li>
                        <li class="flex items-center justify-between group cursor-pointer">
                            <a href="#" class="group-hover:text-secondary transition-colors">Technology</a>
                            <span class="text-xs bg-surface-container-low px-2 py-1 rounded">5</span>
                        </li>
                        <li class="flex items-center justify-between group cursor-pointer">
                            <a href="#" class="group-hover:text-secondary transition-colors">Trauma Care</a>
                            <span class="text-xs bg-surface-container-low px-2 py-1 rounded">7</span>
                        </li>
                        <li class="flex items-center justify-between group cursor-pointer">
                            <a href="#" class="group-hover:text-secondary transition-colors">Oncology</a>
                            <span class="text-xs bg-surface-container-low px-2 py-1 rounded">4</span>
                        </li>
                    </ul>
                </div>

                <!-- Related Articles Widget -->
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-surface-container-high">
                    <h3 class="font-headline-sm text-xl text-primary mb-6">Related Articles</h3>
                    <div class="space-y-6 flex flex-col">

        <div class="group cursor-pointer">
            <a href="understanding-facial-trauma-management.php" class="block">
                <span class="text-xs font-semibold text-secondary uppercase tracking-wider mb-1 block">Trauma Care</span>
                <h4 class="font-headline-sm text-lg text-primary leading-snug group-hover:text-secondary transition-colors">Understanding Facial Trauma Management</h4>
            </a>
        </div>

        <div class="group cursor-pointer">
            <a href="early-detection-in-oral-cancers.php" class="block">
                <span class="text-xs font-semibold text-secondary uppercase tracking-wider mb-1 block">Oncology</span>
                <h4 class="font-headline-sm text-lg text-primary leading-snug group-hover:text-secondary transition-colors">Early Detection in Oral Cancers</h4>
            </a>
        </div>

        <div class="group cursor-pointer">
            <a href="cosmetic-facial-surgery-beyond-basics.php" class="block">
                <span class="text-xs font-semibold text-secondary uppercase tracking-wider mb-1 block">Cosmetic</span>
                <h4 class="font-headline-sm text-lg text-primary leading-snug group-hover:text-secondary transition-colors">Cosmetic Facial Surgery: Beyond the Basics</h4>
            </a>
        </div>

                    </div>
                </div>

                <!-- CTA Banner Widget -->
                <div class="bg-primary text-on-primary p-8 rounded-2xl shadow-lg relative overflow-hidden text-center sticky top-24">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.1),transparent_70%)] pointer-events-none"></div>
                    <span class="material-symbols-outlined text-[48px] text-secondary mb-4">calendar_month</span>
                    <h3 class="font-headline-sm text-2xl mb-3">Schedule a Consultation</h3>
                    <p class="text-on-primary-container text-sm mb-6">Discuss your condition with our specialised maxillofacial surgical team.</p>
                    <a href="../contact.php" class="inline-block w-full py-3 rounded-xl bg-secondary hover:bg-secondary/90 transition-colors text-on-secondary font-semibold text-sm uppercase tracking-wider">Book Now</a>
                </div>

            </aside>

        </div>
    </div>

</main>

<?php
include $path_prefix . 'footer.php';
?>