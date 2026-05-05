<?php
/**
 * Batch Update Location Pages Script
 * Adds FAQ sections and enhances content to all location pages
 *
 * Usage: php update-pages.php
 * Warning: Make a backup before running!
 */

echo "Starting batch update of location pages...\n\n";

// Define page types and their patterns
$pageTypes = array(
    'maxillofacial-surgeon-in-' => 'maxillofacial',
    'tmj-treatment-in-' => 'tmj',
    'oral-cancer-treatment-in-' => 'oral_cancer',
    'facial-injury-treatment-in-' => 'facial_injury',
    'facial-swelling-treatment-in-' => 'facial_swelling',
    'cosmetic-facial-surgery-in-' => 'cosmetic',
    'rhinoplasty-treatment-in-' => 'rhinoplasty'
);

// Get all PHP files
$files = glob('*.php');
$totalFiles = count($files);
$updated = 0;
$errors = 0;

echo "Found $totalFiles PHP files\n";
echo "Processing...\n\n";

foreach ($files as $file) {
    // Skip non-location pages
    $skipFiles = array('header.php', 'footer.php', 'header-links.php', 'footer-links.php',
                       'index.php', 'about-us.php', 'contact-us.php', 'faq-include.php',
                       'services-content.php', 'stats.php', '410.php');
    if (in_array($file, $skipFiles)) {
        continue;
    }

    // Determine page type
    $pageType = '';
    foreach ($pageTypes as $pattern => $type) {
        if (strpos($file, $pattern) !== false) {
            $pageType = $type;
            // Extract location name from filename
            $location = str_replace(array($pattern, '.php'), '', $file);
            $location = str_replace('-', ' ', $location);
            $location = ucwords($location);
            break;
        }
    }

    if (empty($pageType)) {
        continue; // Skip files that don't match any pattern
    }

    // Read the file
    $content = file_get_contents($file);
    if ($content === false) {
        echo "Error reading: $file\n";
        $errors++;
        continue;
    }

    // Check if already has FAQ section (avoid duplicates)
    if (strpos($content, 'faq-section') !== false || strpos($content, 'faq-accordion') !== false) {
        echo "Skipping (already has FAQ): $file\n";
        continue;
    }

    // Find the position to insert FAQ section (before footer locations or before footer include)
    // Try to find the testimonials section ending or footer section
    $insertPatterns = array(
        '<!-- Footer Locations -->',
        '<?php include(\'footer.php\')?>',
        '</main>'
    );

    $insertPos = false;
    foreach ($insertPatterns as $pattern) {
        $pos = strpos($content, $pattern);
        if ($pos !== false) {
            $insertPos = $pos;
            break;
        }
    }

    if ($insertPos === false) {
        echo "Could not find insertion point: $file\n";
        $errors++;
        continue;
    }

    // Generate FAQ section HTML
    $faqSection = generateFaqSection($pageType, $location);
    $servicesSection = generateServicesSection($pageType, $location);
    $locationContent = generateLocationContent($pageType, $location);

    // Insert before the identified position
    $newContent = substr($content, 0, $insertPos)
                . $servicesSection
                . $locationContent
                . $faqSection
                . substr($content, $insertPos);

    // Write the file
    if (file_put_contents($file, $newContent) !== false) {
        echo "Updated: $file (Type: $pageType, Location: $location)\n";
        $updated++;
    } else {
        echo "Error writing: $file\n";
        $errors++;
    }
}

echo "\n\n========================================\n";
echo "Update Complete!\n";
echo "Total files: $totalFiles\n";
echo "Updated: $updated\n";
echo "Errors: $errors\n";
echo "========================================\n";

function generateFaqSection($pageType, $location) {
    $faqs = getFaqs($pageType, $location);

    $faqHtml = '
        <!-- FAQ Section -->
        <style>
        .faq-section {
            padding: 60px 0;
            background: linear-gradient(135deg, #f8faff 0%, #fff 100%);
        }
        .faq-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .faq-header h2 {
            color: var(--med-dark);
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .faq-header p {
            color: #516171;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
        .faq-accordion {
            max-width: 800px;
            margin: 0 auto;
        }
        .faq-item {
            background: #fff;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 4px 15px rgba(25, 95, 172, 0.08);
            overflow: hidden;
            border: 1px solid #e8eef5;
        }
        .faq-question {
            width: 100%;
            padding: 20px 25px;
            background: none;
            border: none;
            text-align: left;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1rem;
            font-weight: 600;
            color: var(--med-dark);
            transition: all 0.3s ease;
        }
        .faq-question:hover {
            background: #f8faff;
        }
        .faq-question.active {
            background: var(--med-pale);
            color: var(--med-primary);
        }
        .faq-question i {
            transition: transform 0.3s ease;
            color: var(--med-primary);
        }
        .faq-question.active i {
            transform: rotate(180deg);
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .faq-answer-content {
            padding: 0 25px 20px;
            color: #516171;
            line-height: 1.7;
            font-size: 0.95rem;
        }
        .faq-item.active .faq-answer {
            max-height: 500px;
        }
        .faq-cta {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #e8eef5;
        }
        .faq-cta p {
            color: #516171;
            margin-bottom: 15px;
        }
        .faq-cta .btn {
            margin: 5px;
        }
        @media (max-width: 767px) {
            .faq-header h2 {
                font-size: 1.8rem;
            }
            .faq-question {
                font-size: 0.95rem;
                padding: 15px 20px;
            }
            .faq-answer-content {
                padding: 0 20px 15px;
                font-size: 0.9rem;
            }
        }
        </style>

        <section class="faq-section">
            <div class="container">
                <div class="faq-header wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Frequently Asked Questions</h2>
                    <p>Get answers to common questions about maxillofacial treatment and care</p>
                </div>
                <div class="faq-accordion">';

    foreach ($faqs as $index => $faq) {
        $num = $index + 1;
        $faqHtml .= '
                    <div class="faq-item wow fadeInUp" data-wow-delay="' . (0.3 + $index * 0.1) . 's">
                        <button class="faq-question" onclick="toggleFaq(this)">
                            <span>' . $num . '. ' . htmlspecialchars($faq['question']) . '</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                ' . htmlspecialchars($faq['answer']) . '
                            </div>
                        </div>
                    </div>';
    }

    $faqHtml .= '
                </div>
                <div class="faq-cta wow fadeInUp" data-wow-delay="0.9s">
                    <p>Have more questions? We are here to help.</p>
                    <a href="https://wa.me/919000666476" class="btn btn-secondary btn-lg">
                        <i class="fab fa-whatsapp me-2"></i> Ask on WhatsApp
                    </a>
                    <a href="tel:+919000666476" class="btn btn-outline-primary btn-lg">
                        <i class="feather icon-phone-call me-2"></i> Call Us Now
                    </a>
                </div>
            </div>
        </section>

        <script>
        function toggleFaq(button) {
            const faqItem = button.parentElement;
            const isActive = faqItem.classList.contains("active");

            document.querySelectorAll(".faq-item").forEach(item => {
                item.classList.remove("active");
                item.querySelector(".faq-question").classList.remove("active");
            });

            if (!isActive) {
                faqItem.classList.add("active");
                button.classList.add("active");
            }
        }
        </script>
        ';

    return $faqHtml;
}

function getFaqs($pageType, $location) {
    $allFaqs = array(
        'maxillofacial' => array(
            array(
                'question' => 'What is a maxillofacial surgeon and when should I see one?',
                'answer' => 'A maxillofacial surgeon (oral and maxillofacial surgeon) specializes in diagnosing and treating conditions affecting the face, jaw, and mouth. You should see one for issues like jaw pain, TMJ disorders, facial trauma, wisdom teeth problems, jaw misalignment, facial swelling, or suspicious oral lesions. Dr. Suresh P at GnathosFace is a highly experienced maxillofacial surgeon with 20+ years of expertise in these conditions.'
            ),
            array(
                'question' => 'How do I find the best maxillofacial surgeon near me in ' . $location . '?',
                'answer' => 'When searching for the best maxillofacial surgeon, look for qualifications (MDS in Oral and Maxillofacial Surgery), experience in your specific condition, hospital affiliations, and patient reviews. Dr. Suresh P serves patients from ' . $location . ' and surrounding areas from GnathosFace at CARE Hospitals, Hi-tech City, Hyderabad. You can book a consultation via WhatsApp at +91 9000666476.'
            ),
            array(
                'question' => 'What treatments does a maxillofacial surgeon provide?',
                'answer' => 'Maxillofacial surgeons provide a wide range of treatments including TMJ disorder management, jaw correction (orthognathic) surgery, facial trauma and fracture treatment, removal of impacted teeth, treatment of oral cysts and tumors, reconstruction after cancer surgery, sleep apnea treatment, and cosmetic facial procedures. Dr. Suresh P specializes in all these areas with particular expertise in TMJ disorders.'
            ),
            array(
                'question' => 'Is maxillofacial surgery covered by insurance?',
                'answer' => 'Most health insurance plans cover maxillofacial surgery when it is medically necessary, such as for facial trauma, tumor removal, or corrective jaw surgery. Procedures considered cosmetic may not be covered. GnathosFace can help you understand your insurance coverage and provide necessary documentation. Contact us at +91 9000666476 for insurance verification assistance.'
            ),
            array(
                'question' => 'How long is the recovery after maxillofacial surgery?',
                'answer' => 'Recovery time varies depending on the procedure. Minor procedures may require 1-2 weeks, while complex surgeries like jaw correction may need 6-8 weeks for initial recovery. Dr. Suresh P provides detailed post-operative care instructions and follow-up appointments to ensure smooth recovery. Most patients resume normal activities within 2-3 weeks.'
            ),
            array(
                'question' => 'What is the cost of maxillofacial surgery in ' . $location . '?',
                'answer' => 'The cost of maxillofacial surgery depends on the specific procedure, complexity, and hospital facilities. Simple tooth extractions may cost Rs. 5,000-15,000, while complex procedures like jaw surgery may range from Rs. 80,000-3,00,000+. GnathosFace offers transparent pricing and EMI options. Book a consultation for an accurate estimate tailored to your condition.'
            ),
            array(
                'question' => 'Do I need a referral to see a maxillofacial surgeon?',
                'answer' => 'While a referral from your dentist or physician is helpful, you can directly book an appointment with Dr. Suresh P at GnathosFace. If you have specific symptoms like persistent jaw pain, facial swelling, difficulty opening your mouth, or have been advised to see a specialist, simply contact us at +91 9000666476 or book via WhatsApp for convenient scheduling.'
            )
        ),
        'tmj' => array(
            array(
                'question' => 'What is TMJ and how is it treated?',
                'answer' => 'TMJ (Temporomandibular Joint) disorders affect the jaw joint and muscles that control jaw movement. Symptoms include jaw pain, clicking/popping sounds, locking of the jaw, headaches, and facial pain. Treatment ranges from conservative approaches like medications, physical therapy, and night guards to surgical interventions for severe cases. Dr. Suresh P is a TMJ specialist with extensive experience in both conservative and surgical management.'
            ),
            array(
                'question' => 'How do I know if I have TMJ disorder?',
                'answer' => 'Common signs of TMJ disorder include pain or tenderness in the jaw joint area, clicking or popping sounds when opening or closing the mouth, difficulty or discomfort while chewing, locking of the jaw making it hard to open or close, frequent headaches especially in the morning, and pain radiating to the neck and shoulders. If you experience these symptoms, consult Dr. Suresh P at GnathosFace for proper diagnosis.'
            ),
            array(
                'question' => 'Is TMJ treatment covered by insurance?',
                'answer' => 'Insurance coverage for TMJ treatment depends on whether the treatment is considered medically necessary. Conservative treatments like medications and physical therapy are often covered, while some insurance plans may have limitations on surgical treatments. GnathosFace can help verify your coverage and provide documentation required by your insurance provider.'
            ),
            array(
                'question' => 'What are the non-surgical options for TMJ treatment?',
                'answer' => 'Non-surgical TMJ treatments include lifestyle modifications (avoiding hard foods, managing stress), medications (pain relievers, muscle relaxants, anti-inflammatories), physical therapy, dental appliances (splints/night guards), and corticosteroid injections. Dr. Suresh P always recommends starting with conservative treatments and only considers surgery when other options have failed.'
            ),
            array(
                'question' => 'How long does it take to recover from TMJ surgery?',
                'answer' => 'Recovery from TMJ surgery varies based on the type of procedure. Minimally invasive procedures like arthrocentesis require 1-2 weeks recovery, while open joint surgery may need 4-6 weeks. Full recovery and return to normal jaw function may take several months. Dr. Suresh P provides comprehensive post-operative guidance for optimal recovery.'
            ),
            array(
                'question' => 'Can TMJ problems cause other health issues?',
                'answer' => 'Untreated TMJ disorders can lead to chronic pain, difficulty eating and speaking, persistent headaches, ear problems (tinnitus, ear pain), sleep disturbances, and psychological stress. Early diagnosis and treatment by a specialist like Dr. Suresh P can prevent these complications and improve quality of life significantly.'
            ),
            array(
                'question' => 'Where can I find TMJ treatment near me in ' . $location . '?',
                'answer' => 'Dr. Suresh P at GnathosFace provides expert TMJ treatment for patients from ' . $location . ' and surrounding areas. Located at CARE Hospitals, Hi-tech City, Hyderabad, GnathosFace offers comprehensive TMJ diagnosis and treatment. Book your consultation via WhatsApp at +91 9000666476 for personalized care.'
            )
        ),
        'oral_cancer' => array(
            array(
                'question' => 'What are the early signs of oral cancer?',
                'answer' => 'Early signs of oral cancer include persistent mouth ulcers that do not heal within 2 weeks, red or white patches in the mouth, unexplained lumps or thickening in the cheek, difficulty swallowing or chewing, persistent sore throat, numbness in the tongue or lip, and loose teeth without dental cause. Early detection significantly improves treatment outcomes. If you notice any of these symptoms, consult Dr. Suresh P at GnathosFace immediately.'
            ),
            array(
                'question' => 'Who is at risk for oral cancer?',
                'answer' => 'Risk factors for oral cancer include tobacco use (smoking or chewing), excessive alcohol consumption, HPV infection, prolonged sun exposure (lip cancer), poor diet, and a family history of cancer. Men over 40 are at higher risk. However, oral cancer can occur in anyone. Regular screening and avoiding risk factors are key prevention strategies.'
            ),
            array(
                'question' => 'How is oral cancer diagnosed and treated?',
                'answer' => 'Oral cancer diagnosis involves clinical examination, biopsy of suspicious lesions, and imaging tests (CT, MRI, PET scans). Treatment depends on the stage and may include surgery to remove the tumor, radiation therapy, chemotherapy, or a combination. Dr. Suresh P specializes in surgical treatment of oral cancers including tumor removal and reconstructive surgery.'
            ),
            array(
                'question' => 'What does oral cancer surgery involve?',
                'answer' => 'Oral cancer surgery may involve removal of the tumor along with surrounding healthy tissue (margin), removal of lymph nodes in the neck (neck dissection), and reconstructive surgery to restore appearance and function. Dr. Suresh P uses advanced surgical techniques including laser surgery and microvascular reconstruction for optimal outcomes with minimal scarring.'
            ),
            array(
                'question' => 'Is oral cancer treatment covered by insurance?',
                'answer' => 'Most health insurance plans cover oral cancer treatment as it is a serious medical condition. Coverage typically includes surgery, chemotherapy, radiation therapy, and follow-up care. GnathosFace works with major insurance providers and can help you understand your coverage. Contact +91 9000666476 for insurance verification.'
            ),
            array(
                'question' => 'What is the recovery process after oral cancer surgery?',
                'answer' => 'Recovery depends on the extent of surgery. Initial recovery may take 2-4 weeks, with some patients requiring speech and swallowing therapy afterwards. Reconstruction may require additional recovery time. Dr. Suresh P provides comprehensive post-operative care and rehabilitation support to help patients return to normal function as quickly as possible.'
            ),
            array(
                'question' => 'How can I find oral cancer treatment near me in ' . $location . '?',
                'answer' => 'GnathosFace offers expert oral cancer diagnosis and treatment for patients from ' . $location . '. Dr. Suresh P has extensive experience in oral cancer surgery and reconstruction. Early detection and treatment are crucial for better outcomes. Contact us at +91 9000666476 or via WhatsApp to schedule an examination.'
            )
        ),
        'facial_injury' => array(
            array(
                'question' => 'What types of facial injuries does a maxillofacial surgeon treat?',
                'answer' => 'Maxillofacial surgeons treat various facial injuries including jaw fractures (mandible, maxilla), cheekbone (zygomatic) fractures, nasal fractures, orbital (eye socket) fractures, forehead fractures, and soft tissue injuries to the face. Dr. Suresh P at GnathosFace has extensive experience in treating facial trauma with excellent functional and cosmetic outcomes.'
            ),
            array(
                'question' => 'When should I see a doctor for facial injury?',
                'answer' => 'Seek immediate medical attention for facial injuries involving difficulty breathing, severe bleeding that won\'t stop, visible deformity of the face, double vision or vision changes, numbness in the face, inability to open or close the jaw, or teeth that don\'t fit together properly. Even minor-looking injuries can have serious underlying damage that requires professional evaluation.'
            ),
            array(
                'question' => 'How long does it take for facial fractures to heal?',
                'answer' => 'Facial fractures typically take 6-8 weeks to heal. Treatment may involve wiring the jaws shut (intermaxillary fixation) or using plates and screws for surgical fixation. Most patients can return to normal activities within 2-3 weeks, but full healing and rehabilitation may take longer. Dr. Suresh P provides detailed recovery guidance for each patient.'
            ),
            array(
                'question' => 'Will facial injury treatment leave scars?',
                'answer' => 'Modern maxillofacial surgery techniques minimize scarring. Dr. Suresh P uses approaches that hide incisions within natural skin creases and hairline whenever possible. While some scarring is inevitable, proper surgical technique and post-operative care can make scars virtually unnoticeable. Early treatment also leads to better cosmetic outcomes.'
            ),
            array(
                'question' => 'Is facial trauma treatment covered by insurance?',
                'answer' => 'Treatment for facial trauma is typically covered by insurance when it results from accidents, assaults, or other covered incidents. Workers\' compensation may apply for workplace injuries. GnathosFace can help verify your coverage and provide necessary documentation. Contact +91 9000666476 for assistance.'
            ),
            array(
                'question' => 'What should I do immediately after a facial injury?',
                'answer' => 'After a facial injury: 1) Control bleeding with gentle pressure, 2) Apply ice wrapped in cloth to reduce swelling, 3) Do not attempt to realign broken bones, 4) Seek immediate medical care if there are breathing difficulties, severe bleeding, or visible deformity, 5) Keep the head elevated. Prompt professional care is essential for optimal outcomes.'
            ),
            array(
                'question' => 'Where can I find facial injury treatment near me in ' . $location . '?',
                'answer' => 'Dr. Suresh P at GnathosFace provides expert facial trauma treatment for patients from ' . $location . '. With state-of-the-art facilities at CARE Hospitals and 20+ years of experience, you receive the best possible care for facial injuries. Contact +91 9000666476 for immediate assistance.'
            )
        ),
        'facial_swelling' => array(
            array(
                'question' => 'What causes facial swelling and when is it serious?',
                'answer' => 'Facial swelling can result from infections (dental abscess, cellulitis), cysts or tumors, trauma, allergic reactions, salivary gland disorders, or systemic conditions. Serious swelling that warrants immediate attention includes swelling accompanied by fever, difficulty breathing or swallowing, spreading redness, persistent pain, or swelling after dental procedure. Dr. Suresh P can diagnose and treat the underlying cause.'
            ),
            array(
                'question' => 'How is facial swelling treated?',
                'answer' => 'Treatment depends on the cause. Infections may require antibiotics or surgical drainage. Cysts or tumors may need removal. Allergic reactions may need antihistamines or steroids. Dr. Suresh P performs thorough evaluation including imaging and biopsy if needed to determine the exact cause and appropriate treatment for facial swelling.'
            ),
            array(
                'question' => 'Can facial swelling be a sign of cancer?',
                'answer' => 'While most facial swelling is due to benign causes, persistent or progressively enlarging swelling can indicate tumors or cysts. Other concerning features include numbness, loosening of teeth, non-healing ulcers, or unexplained weight loss. Any persistent facial swelling should be evaluated by a specialist like Dr. Suresh P to rule out serious conditions.'
            ),
            array(
                'question' => 'What is the treatment for dental abscess causing facial swelling?',
                'answer' => 'Dental abscess treatment typically involves antibiotics, drainage of the infection, and addressing the source (root canal treatment or tooth extraction). In severe cases, surgical drainage may be required. Dr. Suresh P works with your dentist to provide comprehensive treatment and prevent recurrence.'
            ),
            array(
                'question' => 'How long does facial swelling take to go down?',
                'answer' => 'Resolution time depends on the cause. Minor swelling from mild trauma may resolve in a few days with ice and rest. Infections may take 1-2 weeks with proper treatment. Post-surgical swelling gradually decreases over several weeks. Following Dr. Suresh P\'s instructions is key to faster recovery.'
            ),
            array(
                'question' => 'When should I see a doctor for facial swelling?',
                'answer' => 'See a doctor immediately if facial swelling is accompanied by fever over 101F, difficulty breathing or swallowing, spreading or rapidly increasing swelling, severe pain, or if it lasts more than a few days without improvement. For evaluation of persistent or recurring facial swelling, schedule an appointment with Dr. Suresh P at GnathosFace.'
            ),
            array(
                'question' => 'Where can I find facial swelling treatment near me in ' . $location . '?',
                'answer' => 'Dr. Suresh P at GnathosFace provides expert evaluation and treatment for facial swelling of all causes. Located at CARE Hospitals, Hi-tech City, Hyderabad, we serve patients from ' . $location . ' and surrounding areas. Book your consultation at +91 9000666476 or via WhatsApp.'
            )
        ),
        'cosmetic' => array(
            array(
                'question' => 'What cosmetic facial procedures does a maxillofacial surgeon perform?',
                'answer' => 'Maxillofacial surgeons perform various cosmetic procedures including chin surgery (genioplasty), cheekbone augmentation, jaw contouring, rhinoplasty (nose surgery), lip reshaping, facial bone reshaping, scar revision, and BOTOX/filler injections. Dr. Suresh P combines surgical expertise with aesthetic understanding to achieve natural-looking results that enhance facial harmony.'
            ),
            array(
                'question' => 'How do I know if I need cosmetic facial surgery?',
                'answer' => 'Consider cosmetic facial surgery if you are bothered by facial features that look out of proportion, have functional issues alongside cosmetic concerns (like jaw misalignment affecting bite), have realistic expectations about outcomes, and are in good health. A consultation with Dr. Suresh P can help determine if cosmetic surgery is right for you.'
            ),
            array(
                'question' => 'Is cosmetic facial surgery covered by insurance?',
                'answer' => 'Most cosmetic procedures are not covered by insurance as they are elective. However, procedures that also improve function (like jaw surgery that corrects bite problems) may be partially covered. Dr. Suresh P can provide detailed cost estimates and discuss financing options including EMI plans to make treatment affordable.'
            ),
            array(
                'question' => 'What is the recovery time for cosmetic facial surgery?',
                'answer' => 'Recovery varies by procedure. Minor procedures may require 1 week, while extensive surgeries like jaw reshaping may need 2-4 weeks for initial recovery. Most patients return to work within 2 weeks, though swelling may persist for several months. Dr. Suresh P provides detailed post-operative instructions for optimal recovery.'
            ),
            array(
                'question' => 'How long do cosmetic facial surgery results last?',
                'answer' => 'Most cosmetic facial surgery results are long-lasting. Bone contouring procedures provide permanent results, while soft tissue procedures may require touch-ups over time due to aging. Maintaining a healthy lifestyle and protecting your skin from sun damage helps preserve results. Regular follow-up with Dr. Suresh P ensures lasting satisfaction.'
            ),
            array(
                'question' => 'What are the risks of cosmetic facial surgery?',
                'answer' => 'Like any surgery, cosmetic procedures carry risks including infection, bleeding, scarring, nerve damage (temporary or permanent numbness), asymmetry, and anesthesia risks. However, choosing an experienced surgeon like Dr. Suresh P significantly minimizes these risks. Thorough pre-operative evaluation and following post-operative instructions further reduce complications.'
            ),
            array(
                'question' => 'Where can I find cosmetic facial surgery near me in ' . $location . '?',
                'answer' => 'GnathosFace offers expert cosmetic facial surgery for patients from ' . $location . ' and surrounding areas. Dr. Suresh P\'s dual expertise in maxillofacial surgery and aesthetics ensures beautiful, natural-looking results. Contact +91 9000666476 to schedule a consultation and discuss your cosmetic goals.'
            )
        ),
        'rhinoplasty' => array(
            array(
                'question' => 'What is rhinoplasty and why is it performed?',
                'answer' => 'Rhinoplasty, often called a nose job, is a surgical procedure to change the shape or improve the function of the nose. It is performed for cosmetic reasons to enhance facial harmony or for functional reasons to correct breathing problems caused by structural defects like a deviated septum. Dr. Suresh P at GnathosFace specializes in both aesthetic and functional rhinoplasty.'
            ),
            array(
                'question' => 'How do I find the best rhinoplasty surgeon in ' . $location . '?',
                'answer' => 'The best rhinoplasty surgeon should have extensive experience in facial surgery, a keen aesthetic eye, and a deep understanding of nasal anatomy. Dr. Suresh P, with over 20 years of expertise in maxillofacial surgery, provides expert rhinoplasty for patients from ' . $location . '. You can book a consultation via WhatsApp at +91 9000666476.'
            ),
            array(
                'question' => 'What is the difference between open and closed rhinoplasty?',
                'answer' => 'Closed rhinoplasty involves incisions made inside the nostrils, leaving no visible scars. Open rhinoplasty involves a small incision across the columella (the tissue between the nostrils), allowing better visibility for complex reshaping. Dr. Suresh P chooses the technique that best suits your specific needs and goals.'
            ),
            array(
                'question' => 'Is rhinoplasty surgery painful?',
                'answer' => 'Rhinoplasty is performed under general anesthesia, so you won\'t feel anything during the procedure. Post-surgery, most patients experience some discomfort and nasal congestion rather than severe pain. Dr. Suresh P provides effective pain management and detailed recovery instructions to ensure a comfortable healing process.'
            ),
            array(
                'question' => 'How long is the recovery after nose surgery?',
                'answer' => 'Initial recovery takes about 1-2 weeks, after which most patients can return to work or school. While major swelling subsides within a few weeks, the final results may take up to a year to fully settle as the nose continues to refine. Dr. Suresh P monitors your progress through regular follow-up appointments.'
            ),
            array(
                'question' => 'Will insurance cover my rhinoplasty?',
                'answer' => 'Insurance typically covers rhinoplasty if it is performed for functional reasons, such as correcting a deviated septum that obstructs breathing. Cosmetic rhinoplasty is usually not covered. GnathosFace can help you understand your coverage and provide the necessary medical documentation.'
            ),
            array(
                'question' => 'Where can I get expert rhinoplasty treatment from ' . $location . '?',
                'answer' => 'Dr. Suresh P at GnathosFace provides specialized rhinoplasty for patients from ' . $location . '. Our clinic at CARE Hospitals, Hyderabad, is equipped with advanced surgical technology to ensure the best outcomes. Contact us at +91 9000666476 to schedule your consultation.'
            )
        )
    );

    return isset($allFaqs[$pageType]) ? $allFaqs[$pageType] : $allFaqs['maxillofacial'];
}

function generateServicesSection($pageType, $location) {
    $services = getServices($pageType, $location);
    $title = getServicesTitle($pageType, $location);

    $servicesHtml = '
        <!-- Services Content Section -->
        <style>
        .services-content-section {
            padding: 60px 0;
            background: #fff;
        }
        .services-header {
            text-align: center;
            margin-bottom: 50px;
        }
        .services-header h2 {
            color: var(--med-dark);
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .services-header p {
            color: #516171;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.7;
        }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }
        .service-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px 25px;
            box-shadow: 0 10px 30px rgba(25, 95, 172, 0.08);
            border: 1px solid #e8eef5;
            transition: all 0.4s ease;
        }
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(25, 95, 172, 0.15);
            border-color: var(--med-light);
        }
        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--med-primary), var(--med-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .service-icon i {
            font-size: 1.8rem;
            color: #fff;
        }
        .service-card h3 {
            color: var(--med-dark);
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 12px;
        }
        .service-card p {
            color: #516171;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .services-cta {
            text-align: center;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #e8eef5;
        }
        .services-cta p {
            color: #516171;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        @media (max-width: 991px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 767px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            .services-header h2 {
                font-size: 1.8rem;
            }
            .service-card {
                padding: 25px 20px;
            }
        }
        </style>

        <section class="services-content-section">
            <div class="container">
                <div class="services-header wow fadeInUp" data-wow-delay="0.2s">
                    <h2>' . htmlspecialchars($title) . '</h2>
                    <p>' . htmlspecialchars(getServicesIntro($pageType, $location)) . '</p>
                </div>
                <div class="services-grid">';

    foreach ($services as $index => $service) {
        $servicesHtml .= '
                    <div class="service-card wow fadeInUp" data-wow-delay="' . (0.3 + $index * 0.1) . 's">
                        <div class="service-icon">
                            <i class="fas ' . htmlspecialchars($service['icon']) . '"></i>
                        </div>
                        <h3>' . htmlspecialchars($service['title']) . '</h3>
                        <p>' . htmlspecialchars($service['desc']) . '</p>
                    </div>';
    }

    $servicesHtml .= '
                </div>
                <div class="services-cta wow fadeInUp" data-wow-delay="0.9s">
                    <p>Ready to discuss your treatment options? Contact us today.</p>
                    <a href="https://wa.me/919000666476" class="btn btn-secondary btn-lg">
                        <i class="fab fa-whatsapp me-2"></i> Book WhatsApp Consultation
                    </a>
                    <a href="tel:+919000666476" class="btn btn-outline-primary btn-lg">
                        <i class="feather icon-phone-call me-2"></i> Call +91 9000666476
                    </a>
                </div>
            </div>
        </section>
        ';

    return $servicesHtml;
}

function getServicesTitle($pageType, $location) {
    $titles = array(
        'maxillofacial' => 'Maxillofacial Surgery Services in ' . $location,
        'tmj' => 'TMJ Treatment Services in ' . $location,
        'oral_cancer' => 'Oral Cancer Treatment Services in ' . $location,
        'facial_injury' => 'Facial Injury Treatment Services in ' . $location,
        'facial_swelling' => 'Facial Swelling Treatment Services in ' . $location,
        'cosmetic' => 'Cosmetic Facial Surgery Services in ' . $location,
        'rhinoplasty' => 'Rhinoplasty & Nose Surgery Services in ' . $location
    );
    return isset($titles[$pageType]) ? $titles[$pageType] : 'Our Services in ' . $location;
}

function getServicesIntro($pageType, $location) {
    $intros = array(
        'maxillofacial' => 'If you are searching for the best maxillofacial surgeon in ' . $location . ' or nearby regions, you have come to the right place. Dr. Suresh P at GnathosFace provides comprehensive oral and maxillofacial surgery services to patients from ' . $location . ' and surrounding areas. With over two decades of experience, Dr. Suresh has established himself as a leading maxillofacial surgeon who combines surgical excellence with compassionate patient care.',
        'tmj' => 'If you are experiencing jaw pain, clicking, locking, or other symptoms of TMJ disorder and searching for the best TMJ treatment near you in ' . $location . ', GnathosFace is here to help. Dr. Suresh P is a renowned TMJ specialist with over 20 years of experience in diagnosing and treating temporomandibular joint disorders. Patients from ' . $location . ' receive comprehensive, personalized care that addresses the root cause of their symptoms.',
        'oral_cancer' => 'Oral cancer requires expert, prompt treatment for the best outcomes. If you or a loved one has been diagnosed with oral cancer or shows concerning symptoms, Dr. Suresh P at GnathosFace provides comprehensive oral cancer treatment services to patients from ' . $location . ' and surrounding areas. With specialized training and extensive experience in oral oncology, Dr. Suresh offers hope and healing to cancer patients.',
        'facial_injury' => 'Facial injuries require immediate, expert care to ensure proper healing and optimal functional and cosmetic outcomes. Whether you have experienced a sports injury, road accident, fall, or assault resulting in facial trauma, Dr. Suresh P at GnathosFace provides comprehensive emergency and reconstructive facial injury treatment to patients from ' . $location . '.',
        'facial_swelling' => 'Facial swelling can result from various conditions ranging from minor infections to serious tumors. If you are experiencing persistent or concerning facial swelling and searching for the best treatment near you in ' . $location . ', Dr. Suresh P at GnathosFace provides expert diagnosis and treatment. With specialized expertise in oral and maxillofacial conditions, patients from ' . $location . ' receive comprehensive care.',
        'cosmetic' => 'Enhance your facial appearance and confidence with expert cosmetic facial surgery. Dr. Suresh P at GnathosFace provides a range of cosmetic procedures to patients from ' . $location . ' and surrounding areas. As a maxillofacial surgeon with artistic vision and surgical expertise, Dr. Suresh helps patients achieve their aesthetic goals while ensuring functional improvement.',
        'rhinoplasty' => 'Achieve the perfect balance for your face with expert rhinoplasty. If you are looking for the best nose surgery in ' . $location . ', Dr. Suresh P at GnathosFace offers both cosmetic and functional rhinoplasty. With over 20 years of specialized experience, Dr. Suresh provides personalized care for patients from ' . $location . ' seeking aesthetic improvement or breathing correction.'
    );
    return isset($intros[$pageType]) ? $intros[$pageType] : 'Expert care available for patients from ' . $location . ' and surrounding areas at GnathosFace.';
}

function getServices($pageType, $location) {
    $allServices = array(
        'maxillofacial' => array(
            array('title' => 'TMJ Disorder Treatment', 'icon' => 'fa-head-side-virus', 'desc' => 'The temporomandibular joint (TMJ) connects your jawbone to your skull. TMJ disorders can cause significant pain and affect your ability to eat, speak, and yawn. Dr. Suresh P specializes in diagnosing and treating TMJ disorders using the latest techniques, from conservative management to surgical interventions. Patients from ' . $location . ' receive personalized treatment plans designed to restore jaw function and eliminate pain.'),
            array('title' => 'Jaw Correction Surgery', 'icon' => 'fa-user-gear', 'desc' => 'Jaw misalignments can affect not only your appearance but also your ability to chew, speak, and breathe properly. Orthognathic surgery repositions the jaw bones to achieve proper alignment and function. Dr. Suresh P has extensive experience in performing corrective jaw surgeries for patients from ' . $location . ', helping them achieve better facial balance, improved bite, and enhanced quality of life.'),
            array('title' => 'Facial Trauma Treatment', 'icon' => 'fa-user-injured', 'desc' => 'Facial injuries require immediate and expert care to ensure proper healing and minimize complications. Whether you have suffered a sports injury, road accident, or fall resulting in facial fractures, Dr. Suresh P provides comprehensive trauma care. From diagnosis using advanced imaging to surgical repair and rehabilitation, patients from ' . $location . ' receive prompt, expert treatment for all types of facial injuries.'),
            array('title' => 'Oral Cyst and Tumor Treatment', 'icon' => 'fa-teeth', 'desc' => 'Oral cysts and tumors can develop in the jawbone or soft tissues of the mouth. While many are benign, some may require surgical removal to prevent complications. Dr. Suresh P performs diagnostic evaluation and surgical treatment of oral cysts and tumors for patients from ' . $location . ', using techniques that minimize damage to surrounding tissues and ensure complete removal.'),
            array('title' => 'Wisdom Tooth Extraction', 'icon' => 'fa-tooth', 'desc' => 'Impacted or problematic wisdom teeth often require surgical extraction. Dr. Suresh P provides safe, effective wisdom tooth removal using advanced surgical techniques. Patients from ' . $location . ' benefit from minimal discomfort, faster recovery, and reduced risk of complications like dry socket or nerve damage.'),
            array('title' => 'Facial Reconstruction', 'icon' => 'fa-eye', 'desc' => 'Following trauma, tumor removal, or congenital conditions, facial reconstruction restores both function and appearance. Dr. Suresh P combines surgical expertise with an artistic eye to achieve natural-looking results. Patients from ' . $location . ' receive comprehensive reconstruction services that help them regain confidence and normal facial function.')
        ),
        'tmj' => array(
            array('title' => 'TMJ Disorder Diagnosis', 'icon' => 'fa-stethoscope', 'desc' => 'Accurate diagnosis is the first step to effective TMJ treatment. Dr. Suresh P uses comprehensive evaluation including clinical examination, imaging studies (X-rays, CT, MRI), and joint analysis to determine the exact cause of your TMJ symptoms. Patients from ' . $location . ' receive thorough diagnostic services that form the foundation of effective treatment.'),
            array('title' => 'Conservative TMJ Treatment', 'icon' => 'fa-hand-holding-medical', 'desc' => 'Most TMJ disorders respond well to conservative treatment. Dr. Suresh P offers medications, physical therapy, lifestyle modifications, and dental appliances (splints/night guards) to manage symptoms. For patients from ' . $location . ', conservative approaches are always tried first before considering surgical options.'),
            array('title' => 'TMJ Arthroscopy and Surgery', 'icon' => 'fa-microscope', 'desc' => 'When conservative treatments fail to provide relief, surgical intervention may be necessary. Dr. Suresh P performs advanced TMJ surgeries including arthroscopy, arthrocentesis, and open joint surgery. Patients from ' . $location . ' benefit from minimally invasive techniques that promote faster recovery and better outcomes.'),
            array('title' => 'TMJ Botox Injections', 'icon' => 'fa-syringe', 'desc' => 'Botox injections into the jaw muscles can provide significant relief for TMJ-related pain and muscle spasms. This treatment is particularly effective for patients who do not respond to traditional therapies. Dr. Suresh P offers botox treatment for appropriate candidates from ' . $location . ' as part of a comprehensive TMJ management plan.'),
            array('title' => 'Jaw Joint Replacement', 'icon' => 'fa-bone', 'desc' => 'In severe cases of TMJ damage, total joint replacement may be necessary. Dr. Suresh P has experience with TMJ prosthetic reconstruction for patients with advanced joint degeneration. Patients from ' . $location . ' receive cutting-edge treatment options for even the most complex TMJ conditions.'),
            array('title' => 'Post-Treatment Rehabilitation', 'icon' => 'fa-heart-pulse', 'desc' => 'Successful TMJ treatment extends beyond the initial intervention. Dr. Suresh P provides comprehensive rehabilitation including physical therapy, exercises, and follow-up care. Patients from ' . $location . ' benefit from ongoing support that ensures lasting relief and optimal jaw function.')
        ),
        'oral_cancer' => array(
            array('title' => 'Oral Cancer Screening', 'icon' => 'fa-magnifying-glass', 'desc' => 'Early detection saves lives. Dr. Suresh P provides thorough oral cancer screening using visual examination, brush biopsies, and advanced imaging. Patients from ' . $location . ' receive accurate diagnosis that guides treatment planning and improves outcomes.'),
            array('title' => 'Tumor Removal Surgery', 'icon' => 'fa-scissors', 'desc' => 'Surgical removal of oral tumors requires precision and expertise to ensure complete removal while preserving function and appearance. Dr. Suresh P performs tumor resection using advanced techniques that maximize cancer control and minimize tissue damage for patients from ' . $location . '.'),
            array('title' => 'Neck Dissection', 'icon' => 'fa-user-doctor', 'desc' => 'Oral cancers often spread to lymph nodes in the neck. Dr. Suresh P performs neck dissection to remove affected nodes and prevent cancer spread. For patients from ' . $location . ', this procedure is tailored to individual cancer stages, balancing thorough treatment with preservation of important structures.'),
            array('title' => 'Reconstructive Surgery', 'icon' => 'fa-hand-sparkles', 'desc' => 'After tumor removal, reconstructive surgery restores appearance and function. Dr. Suresh P uses advanced techniques including microvascular free tissue transfer to reconstruct defects. Patients from ' . $location . ' receive comprehensive reconstruction that helps them return to normal life after cancer treatment.'),
            array('title' => 'Follow-up and Survivorship', 'icon' => 'fa-clipboard-check', 'desc' => 'Cancer treatment extends beyond the initial surgery. Dr. Suresh P provides ongoing surveillance and survivorship care for patients from ' . $location . ', monitoring for recurrence and managing treatment side effects. Regular follow-ups ensure long-term health and quality of life.'),
            array('title' => 'Supportive Care', 'icon' => 'fa-comments', 'desc' => 'Cancer treatment affects not just the body but also emotional well-being. Dr. Suresh P and the GnathosFace team provide supportive care including counseling, nutrition guidance, and rehabilitation services. Patients from ' . $location . ' receive holistic support throughout their cancer journey.')
        ),
        'facial_injury' => array(
            array('title' => 'Emergency Facial Trauma Care', 'icon' => 'fa-truck-medical', 'desc' => 'Time is critical in facial trauma. Dr. Suresh P provides emergency care for facial injuries, ensuring proper wound management, fracture stabilization, and pain control. Patients from ' . $location . ' receive prompt treatment that prevents complications and sets the foundation for successful recovery.'),
            array('title' => 'Jaw Fracture Treatment', 'icon' => 'fa-bone', 'desc' => 'Jaw fractures require precise treatment to restore proper bite and function. Dr. Suresh P treats mandible and maxilla fractures using both conservative methods (wiring) and surgical techniques (plates and screws). Patients from ' . $location . ' benefit from expert fracture care that promotes proper healing.'),
            array('title' => 'Orbital Fracture Repair', 'icon' => 'fa-eye', 'desc' => 'Fractures around the eye and cheek require special attention to prevent complications like double vision or facial asymmetry. Dr. Suresh P has extensive experience in repairing orbital and zygomatic fractures. Patients from ' . $location . ' receive meticulous care that preserves both function and appearance.'),
            array('title' => 'Nasal Fracture Treatment', 'icon' => 'fa-head-side-virus', 'desc' => 'Nasal fractures are common facial injuries. Dr. Suresh P provides both closed reduction (non-surgical) and open surgical treatment for nasal fractures. Patients from ' . $location . ' receive appropriate treatment based on fracture severity, ensuring proper breathing and cosmetic outcomes.'),
            array('title' => 'Facial Soft Tissue Repair', 'icon' => 'fa-kit-medical', 'desc' => 'Cuts and soft tissue injuries to the face require careful repair to minimize scarring. Dr. Suresh P performs meticulous facial laceration repair using plastic surgery techniques. Patients from ' . $location . ' benefit from treatment that achieves the best possible cosmetic results.'),
            array('title' => 'Post-Trauma Rehabilitation', 'icon' => 'fa-person-running', 'desc' => 'Recovery from facial trauma extends beyond initial treatment. Dr. Suresh P provides rehabilitation including jaw exercises, speech therapy coordination, and follow-up imaging. Patients from ' . $location . ' receive comprehensive care that ensures full functional recovery.')
        ),
        'facial_swelling' => array(
            array('title' => 'Diagnosis of Facial Swelling', 'icon' => 'fa-search', 'desc' => 'Accurate diagnosis is essential for effective treatment. Dr. Suresh P uses clinical examination, imaging studies (X-rays, CT, MRI), and biopsies when needed to determine the cause of facial swelling. Patients from ' . $location . ' receive thorough evaluation that identifies the underlying problem.'),
            array('title' => 'Dental Infection Treatment', 'icon' => 'fa-tooth', 'desc' => 'Dental infections are a common cause of facial swelling. Dr. Suresh P treats dental abscesses and infections through antibiotics, drainage procedures, and dental treatment coordination. Patients from ' . $location . ' receive relief from painful infections with comprehensive follow-up care.'),
            array('title' => 'Cyst and Tumor Removal', 'icon' => 'fa-scissors', 'desc' => 'Jaw cysts and tumors can cause significant facial swelling and bone destruction if left untreated. Dr. Suresh P performs surgical removal of oral cysts and tumors with reconstruction as needed. Patients from ' . $location . ' benefit from complete treatment that prevents recurrence and restores appearance.'),
            array('title' => 'Salivary Gland Treatment', 'icon' => 'fa-droplet', 'desc' => 'Salivary gland infections and blockages can cause facial swelling, especially near the jaw and ears. Dr. Suresh P diagnoses and treats salivary gland conditions including stone removal and infection management. Patients from ' . $location . ' receive expert care for these often-painful conditions.'),
            array('title' => 'Cellulitis Treatment', 'icon' => 'fa-prescription', 'desc' => 'Facial cellulitis is a serious bacterial infection requiring prompt treatment. Dr. Suresh P provides aggressive antibiotic therapy and surgical drainage when needed. Patients from ' . $location . ' receive urgent care that prevents spread and serious complications.'),
            array('title' => 'Allergic Reaction Management', 'icon' => 'fa-allergies', 'desc' => 'Severe allergic reactions can cause dangerous facial swelling. Dr. Suresh P provides emergency management and investigation of allergy causes. Patients from ' . $location . ' receive comprehensive care that addresses both immediate symptoms and underlying triggers.')
        ),
        'cosmetic' => array(
            array('title' => 'Chin Surgery (Genioplasty)', 'icon' => 'fa-face-smile', 'desc' => 'Chin surgery can enhance facial harmony by correcting a receding or protruding chin. Dr. Suresh P performs both reduction and augmentation genioplasty using advanced techniques. Patients from ' . $location . ' achieve improved facial balance and enhanced self-confidence.'),
            array('title' => 'Jaw Contouring', 'icon' => 'fa-user-pen', 'desc' => 'A strong or square jaw can be softened, while a weak jawline can be enhanced through surgical contouring. Dr. Suresh P reshapes the jaw bone to create the desired facial contour. Patients from ' . $location . ' receive personalized treatment that achieves natural-looking results.'),
            array('title' => 'Cheek Enhancement', 'icon' => 'fa-face-grin-stars', 'desc' => 'High, defined cheekbones are a desirable facial feature. Dr. Suresh P offers both surgical cheek implant placement and cheekbone reduction for the right candidates. Patients from ' . $location . ' benefit from customized approaches that enhance their natural beauty.'),
            array('title' => 'Facial Liposuction', 'icon' => 'fa-person-dots-from-line', 'desc' => 'Excess fat deposits in the face and neck can be removed through liposuction for a more sculpted appearance. Dr. Suresh P performs facial liposuction with precision for natural-looking results. Patients from ' . $location . ' achieve a more defined facial contour.'),
            array('title' => 'Facial Fat Grafting', 'icon' => 'fa-syringe', 'desc' => 'Fat grafting restores volume to areas that have lost fullness due to aging or genetics. Dr. Suresh P uses advanced fat harvesting and injection techniques for long-lasting results. Patients from ' . $location . ' benefit from natural enhancement using their own tissue.'),
            array('title' => 'Scar Revision', 'icon' => 'fa-wand-magic-sparkles', 'desc' => 'Facial scars from injuries, surgery, or acne can be minimized through scar revision techniques. Dr. Suresh P uses surgical excision, steroid injections, laser treatment, and other methods to improve scar appearance. Patients from ' . $location . ' receive treatment that significantly reduces scar visibility.')
        ),
        'rhinoplasty' => array(
            array('title' => 'Cosmetic Nose Reshaping', 'icon' => 'fa-magic', 'desc' => 'Improve the aesthetic appearance of your nose to achieve better facial harmony. Dr. Suresh P provides expert cosmetic rhinoplasty for patients from ' . $location . ', addressing concerns like nose humps, wide nostrils, or drooping tips with natural-looking results.'),
            array('title' => 'Functional Septoplasty', 'icon' => 'fa-wind', 'desc' => 'Correct structural issues within the nose that obstruct breathing. For patients from ' . $location . ' suffering from a deviated septum, Dr. Suresh performs functional rhinoplasty to restore clear breathing and improve quality of life.'),
            array('title' => 'Revision Rhinoplasty', 'icon' => 'fa-redo', 'desc' => 'Correction of results from previous nasal surgeries. If you are unsatisfied with a past nose job, Dr. Suresh P offers revision rhinoplasty for patients from ' . $location . ', focusing on restoring both structural integrity and aesthetic balance.'),
            array('title' => 'Reconstructive Nasal Surgery', 'icon' => 'fa-crutch', 'desc' => 'Restoration of the nose after trauma or tumor removal. Dr. Suresh P provides specialized reconstructive services for patients from ' . $location . ', using advanced techniques to rebuild nasal form and function.'),
            array('title' => 'Nasal Tip Correction', 'icon' => 'fa-arrows-alt-h', 'desc' => 'Targeted refinement of the nasal tip for a more balanced look. Dr. Suresh P offers precise tip contouring for patients from ' . $location . ' who wish to refine their nose without changing the entire nasal structure.'),
            array('title' => 'Comprehensive Aftercare', 'icon' => 'fa-user-check', 'desc' => 'Dedicated post-operative support to ensure the best possible healing and results. Patients from ' . $location . ' receive detailed recovery protocols and regular follow-up monitoring after their rhinoplasty procedure.')
        )
    );

    return isset($allServices[$pageType]) ? $allServices[$pageType] : $allServices['maxillofacial'];
}

function generateLocationContent($pageType, $location) {
    // This adds a location-specific content section to boost word count
    $content = '
        <!-- Location-Specific Content Section -->
        <style>
        .location-content-section {
            padding: 60px 0;
            background: linear-gradient(135deg, var(--pale-blue) 0%, #fff 100%);
        }
        .location-content-inner {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 15px 40px rgba(25, 95, 172, 0.1);
        }
        .location-content-inner h2 {
            color: var(--med-dark);
            font-size: 2rem;
            margin-bottom: 25px;
            text-align: center;
        }
        .location-content-inner p {
            color: #516171;
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .location-content-inner ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }
        .location-content-inner li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            color: #516171;
            font-size: 1rem;
            line-height: 1.6;
        }
        .location-content-inner li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--med-primary);
            font-weight: bold;
        }
        .why-choose-us {
            background: var(--med-pale);
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
        }
        .why-choose-us h3 {
            color: var(--med-dark);
            font-size: 1.4rem;
            margin-bottom: 20px;
        }
        @media (max-width: 767px) {
            .location-content-inner {
                padding: 30px 25px;
            }
            .location-content-inner h2 {
                font-size: 1.6rem;
            }
            .location-content-inner p {
                font-size: 1rem;
            }
        }
        </style>

        <section class="location-content-section">
            <div class="container">
                <div class="location-content-inner wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Expert Maxillofacial Care for Patients from ' . htmlspecialchars($location) . '</h2>
                    <p>If you are looking for the best maxillofacial surgeon or specialized treatment for TMJ disorders, facial injuries, oral cancer, or cosmetic facial surgery, Dr. Suresh P at GnathosFace is your trusted choice. Serving patients from ' . htmlspecialchars($location) . ' and all surrounding regions, Dr. Suresh brings over 20 years of expertise in oral and maxillofacial surgery, providing exceptional care that combines medical excellence with genuine compassion for every patient.</p>

                    <p>At GnathosFace, located at CARE Hospitals, Hi-tech City, Hyderabad, we understand that seeking treatment for facial, jaw, or oral conditions can be concerning. That is why Dr. Suresh P and our entire team are committed to making your experience as comfortable and reassuring as possible. From your first consultation through treatment and recovery, you will receive personalized attention, clear communication, and the highest standard of care available.</p>

                    <p>Patients from ' . htmlspecialchars($location) . ' choose GnathosFace for several important reasons. Our state-of-the-art facility at CARE Hospitals provides access to the latest diagnostic technology and surgical equipment, ensuring accurate diagnosis and optimal treatment outcomes. Dr. Suresh P\'s extensive experience means you benefit from techniques refined over thousands of procedures, reducing risks and enhancing results.</p>

                    <div class="why-choose-us">
                        <h3>Why Choose GnathosFace for Treatment from ' . htmlspecialchars($location) . '?</h3>
                        <ul>
                            <li><strong>20+ Years of Specialized Experience:</strong> Dr. Suresh P has dedicated his career to maxillofacial surgery, mastering the most advanced techniques in the field.</li>
                            <li><strong>Comprehensive Treatment Options:</strong> From conservative management to complex surgical procedures, we offer the full spectrum of treatment options tailored to your specific needs.</li>
                            <li><strong>Patient-Centered Approach:</strong> We take time to understand your concerns, explain your condition thoroughly, and involve you in every decision about your treatment.</li>
                            <li><strong>Modern Facilities:</strong> Our association with CARE Hospitals ensures access to cutting-edge surgical technology, advanced imaging, and comprehensive medical support.</li>
                            <li><strong>Proven Track Record:</strong> Thousands of patients from ' . htmlspecialchars($location) . ' and across India have achieved excellent outcomes under Dr. Suresh P\'s care.</li>
                            <li><strong>Convenient Access:</strong> Despite being based in Hyderabad, we regularly serve patients from ' . htmlspecialchars($location) . ', making the journey worthwhile for expert care.</li>
                            <li><strong>Follow-up and Support:</strong> Our care does not end after treatment. We provide comprehensive follow-up and are always available to address any concerns during your recovery.</li>
                        </ul>
                    </div>

                    <p style="margin-top: 30px; text-align: center;">Whether you are dealing with chronic jaw pain, recovering from facial trauma, facing an oral cancer diagnosis, or seeking to enhance your facial appearance, Dr. Suresh P and the GnathosFace team are here to help. Contact us today at +91 9000666476 or book a WhatsApp consultation to take the first step toward better oral and facial health.</p>
                </div>
            </div>
        </section>
        ';

    return $content;
}
?>