<?php
// FAQ Section for Maxillofacial Surgeon Location Pages
// Usage: include('faq-maxillofacial.php');

// Generate location-specific FAQ content
$page_type = isset($page_type) ? $page_type : 'maxillofacial';
$location_name = isset($location_name) ? $location_name : 'your area';

switch($page_type) {
    case 'maxillofacial':
        $faqs = array(
            array(
                'question' => 'What is a maxillofacial surgeon and when should I see one?',
                'answer' => 'A maxillofacial surgeon (oral and maxillofacial surgeon) specializes in diagnosing and treating conditions affecting the face, jaw, and mouth. You should see one for issues like jaw pain, TMJ disorders, facial trauma, wisdom teeth problems, jaw misalignment, facial swelling, or suspicious oral lesions. Dr. Suresh P at GnathosFace is a highly experienced maxillofacial surgeon with 20+ years of expertise in these conditions.'
            ),
            array(
                'question' => 'How do I find the best maxillofacial surgeon near me in ' . $location_name . '?',
                'answer' => 'When searching for the best maxillofacial surgeon, look for qualifications (MDS in Oral and Maxillofacial Surgery), experience in your specific condition, hospital affiliations, and patient reviews. Dr. Suresh P serves patients from ' . $location_name . ' and surrounding areas from GnathosFace at CARE Hospitals, Hi-tech City, Hyderabad. You can book a consultation via WhatsApp at +91 9000666476.'
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
                'question' => 'What is the cost of maxillofacial surgery in ' . $location_name . '?',
                'answer' => 'The cost of maxillofacial surgery depends on the specific procedure, complexity, and hospital facilities. Simple tooth extractions may cost ₹5,000-15,000, while complex procedures like jaw surgery may range from ₹80,000-3,00,000+. GnathosFace offers transparent pricing and EMI options. Book a consultation for an accurate estimate tailored to your condition.'
            ),
            array(
                'question' => 'Do I need a referral to see a maxillofacial surgeon?',
                'answer' => 'While a referral from your dentist or physician is helpful, you can directly book an appointment with Dr. Suresh P at GnathosFace. If you have specific symptoms like persistent jaw pain, facial swelling, difficulty opening your mouth, or have been advised to see a specialist, simply contact us at +91 9000666476 or book via WhatsApp for convenient scheduling.'
            )
        );
        break;
    case 'tmj':
        $faqs = array(
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
                'question' => 'Where can I find TMJ treatment near me in ' . $location_name . '?',
                'answer' => 'Dr. Suresh P at GnathosFace provides expert TMJ treatment for patients from ' . $location_name . ' and surrounding areas. Located at CARE Hospitals, Hi-tech City, Hyderabad, GnathosFace offers comprehensive TMJ diagnosis and treatment. Book your consultation via WhatsApp at +91 9000666476 for personalized care.'
            )
        );
        break;
    case 'oral_cancer':
        $faqs = array(
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
                'question' => 'How can I find oral cancer treatment near me in ' . $location_name . '?',
                'answer' => 'GnathosFace offers expert oral cancer diagnosis and treatment for patients from ' . $location_name . '. Dr. Suresh P has extensive experience in oral cancer surgery and reconstruction. Early detection and treatment are crucial for better outcomes. Contact us at +91 9000666476 or via WhatsApp to schedule an examination.'
            )
        );
        break;
    case 'facial_injury':
        $faqs = array(
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
                'question' => 'Where can I find facial injury treatment near me in ' . $location_name . '?',
                'answer' => 'Dr. Suresh P at GnathosFace provides expert facial trauma treatment for patients from ' . $location_name . '. With state-of-the-art facilities at CARE Hospitals and 20+ years of experience, you receive the best possible care for facial injuries. Contact +91 9000666476 for immediate assistance.'
            )
        );
        break;
    case 'facial_swelling':
        $faqs = array(
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
                'answer' => 'See a doctor immediately if facial swelling is accompanied by fever over 101°F, difficulty breathing or swallowing, spreading or rapidly increasing swelling, severe pain, or if it lasts more than a few days without improvement. For evaluation of persistent or recurring facial swelling, schedule an appointment with Dr. Suresh P at GnathosFace.'
            ),
            array(
                'question' => 'Where can I find facial swelling treatment near me in ' . $location_name . '?',
                'answer' => 'Dr. Suresh P at GnathosFace provides expert evaluation and treatment for facial swelling of all causes. Located at CARE Hospitals, Hi-tech City, Hyderabad, we serve patients from ' . $location_name . ' and surrounding areas. Book your consultation at +91 9000666476 or via WhatsApp.'
            )
        );
        break;
    case 'cosmetic':
        $faqs = array(
            array(
                'question' => 'What cosmetic facial procedures does a maxillofacial surgeon perform?',
                'answer' => 'Maxillofacial surgeons perform various cosmetic procedures including chin surgery (genioplasty), cheekbone augmentation, jaw contouring, rhinoplasty (nose surgery), lip reshaping, facial bone reshaping, scar revision, andBOTOX/filler injections. Dr. Suresh P combines surgical expertise with aesthetic understanding to achieve natural-looking results that enhance facial harmony.'
            ),
            array(
                'question' => 'How do I know if I need cosmetic facial surgery?',
                'answer' => 'Consider cosmetic facial surgery if you are bothered by facial features that look out of proportion, have functional issues alongside cosmetic concerns (like difficulty chewing due to jaw misalignment), have realistic expectations about outcomes, and are in good health. A consultation with Dr. Suresh P can help determine if cosmetic surgery is right for you.'
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
                'question' => 'Where can I find cosmetic facial surgery near me in ' . $location_name . '?',
                'answer' => 'GnathosFace offers expert cosmetic facial surgery for patients from ' . $location_name . ' and surrounding areas. Dr. Suresh P\'s dual expertise in maxillofacial surgery and aesthetics ensures beautiful, natural-looking results. Contact +91 9000666476 to schedule a consultation and discuss your cosmetic goals.'
            )
        );
        break;
    default:
        $faqs = array(
            array(
                'question' => 'What conditions does a maxillofacial surgeon treat?',
                'answer' => 'Maxillofacial surgeons treat conditions affecting the face, jaw, and mouth including TMJ disorders, facial trauma, jaw misalignment, oral cysts and tumors, impacted teeth, sleep apnea, and facial deformities. Dr. Suresh P at GnathosFace specializes in these areas with 20+ years of experience.'
            ),
            array(
                'question' => 'How do I find the best specialist for my condition?',
                'answer' => 'Look for a board-certified maxillofacial surgeon with experience in your specific condition, hospital affiliations, and positive patient outcomes. Dr. Suresh P serves patients from ' . $location_name . ' and is available at GnathosFace, CARE Hospitals, Hyderabad. Book a consultation at +91 9000666476.'
            ),
            array(
                'question' => 'What should I expect during my first visit?',
                'answer' => 'Your first visit will include a detailed discussion of your symptoms, medical history review, clinical examination, and possibly imaging tests (X-rays, CT scans). Dr. Suresh P will explain your diagnosis and discuss treatment options. Bring any previous records and a list of questions to make the most of your consultation.'
            ),
            array(
                'question' => 'Is treatment painful?',
                'answer' => 'Modern techniques and anesthesia ensure treatments are as comfortable as possible. Some procedures may cause mild discomfort that is managed with prescribed medications. Dr. Suresh P prioritizes patient comfort and provides comprehensive pain management protocols for all procedures.'
            ),
            array(
                'question' => 'How much does treatment cost?',
                'answer' => 'Treatment costs vary based on the condition and procedure complexity. GnathosFace provides transparent pricing and works with multiple insurance providers. EMI options are available for expensive treatments. Contact +91 9000666476 for a personalized cost estimate.'
            ),
            array(
                'question' => 'Do you offer virtual consultations?',
                'answer' => 'Yes, GnathosFace offers virtual consultations for initial assessments and follow-ups when appropriate. You can book a WhatsApp consultation at +91 9000666476. Physical examination may be required for definitive diagnosis and treatment planning.'
            ),
            array(
                'question' => 'Where is GnathosFace located and how do I reach it?',
                'answer' => 'GnathosFace is located at CARE Hospitals, Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032. Patients from ' . $location_name . ' can easily reach us via the Outer Ring Road. Contact +91 9000666476 for directions or to book an appointment.'
            )
        );
}

// Output the FAQ section HTML
?>
<style>
/* FAQ Section Styles */
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
        <div class="faq-accordion">
            <?php foreach($faqs as $index => $faq): ?>
            <div class="faq-item wow fadeInUp" data-wow-delay="<?php echo (0.3 + $index * 0.1); ?>s">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span><?php echo ($index + 1); ?>. <?php echo htmlspecialchars($faq['question']); ?></span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <?php echo htmlspecialchars($faq['answer']); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="faq-cta wow fadeInUp" data-wow-delay="0.9s">
            <p>Have more questions? We're here to help.</p>
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
    const isActive = faqItem.classList.contains('active');

    // Close all FAQs
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
        item.querySelector('.faq-question').classList.remove('active');
    });

    // Open clicked FAQ if it was closed
    if (!isActive) {
        faqItem.classList.add('active');
        button.classList.add('active');
    }
}
</script>