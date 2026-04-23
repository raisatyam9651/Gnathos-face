<?php
// Service Content Section for Location Pages
// Usage: include('services-content.php');
// Set $page_type and $location_name before including

$page_type = isset($page_type) ? $page_type : 'maxillofacial';
$location_name = isset($location_name) ? $location_name : 'your area';

switch($page_type) {
    case 'maxillofacial':
        $service_title = 'Maxillofacial Surgery Services in ' . $location_name;
        $service_intro = 'If you are searching for the best maxillofacial surgeon in ' . $location_name . ' or nearby regions, you have come to the right place. Dr. Suresh P at GnathosFace provides comprehensive oral and maxillofacial surgery services to patients from ' . $location_name . ' and surrounding areas. With over two decades of experience, Dr. Suresh has established himself as a leading maxillofacial surgeon who combines surgical excellence with compassionate patient care.';
        $services = array(
            array(
                'title' => 'TMJ Disorder Treatment',
                'icon' => 'fa-head-side-virus',
                'desc' => 'The temporomandibular joint (TMJ) connects your jawbone to your skull. TMJ disorders can cause significant pain and affect your ability to eat, speak, and yawn. Dr. Suresh P specializes in diagnosing and treating TMJ disorders using the latest techniques, from conservative management to surgical interventions. Patients from ' . $location_name . ' receive personalized treatment plans designed to restore jaw function and eliminate pain.'
            ),
            array(
                'title' => 'Jaw Correction Surgery (Orthognathic Surgery)',
                'icon' => 'fa-user-gear',
                'desc' => 'Jaw misalignments can affect not only your appearance but also your ability to chew, speak, and breathe properly. Orthognathic surgery repositions the jaw bones to achieve proper alignment and function. Dr. Suresh P has extensive experience in performing corrective jaw surgeries for patients from ' . $location_name . ', helping them achieve better facial balance, improved bite, and enhanced quality of life.'
            ),
            array(
                'title' => 'Facial Trauma Treatment',
                'icon' => 'fa-user-injured',
                'desc' => 'Facial injuries require immediate and expert care to ensure proper healing and minimize complications. Whether you have suffered a sports injury, road accident, or fall resulting in facial fractures, Dr. Suresh P provides comprehensive trauma care. From diagnosis using advanced imaging to surgical repair and rehabilitation, patients from ' . $location_name . ' receive prompt, expert treatment for all types of facial injuries.'
            ),
            array(
                'title' => 'Oral Cyst and Tumor Treatment',
                'icon' => 'fa-teeth',
                'desc' => 'Oral cysts and tumors can develop in the jawbone or soft tissues of the mouth. While many are benign, some may require surgical removal to prevent complications. Dr. Suresh P performs diagnostic evaluation and surgical treatment of oral cysts and tumors for patients from ' . $location_name . ', using techniques that minimize damage to surrounding tissues and ensure complete removal.'
            ),
            array(
                'title' => 'Wisdom Tooth Extraction',
                'icon' => 'fa-tooth',
                'desc' => 'Impacted or problematic wisdom teeth often require surgical extraction. Dr. Suresh P provides safe, effective wisdom tooth removal using advanced surgical techniques. Patients from ' . $location_name . ' benefit from minimal discomfort, faster recovery, and reduced risk of complications like dry socket or nerve damage.'
            ),
            array(
                'title' => 'Facial Reconstruction',
                'icon' => 'fa-eye',
                'desc' => 'Following trauma, tumor removal, or congenital conditions, facial reconstruction restores both function and appearance. Dr. Suresh P combines surgical expertise with an artistic eye to achieve natural-looking results. Patients from ' . $location_name . ' receive comprehensive reconstruction services that help them regain confidence and normal facial function.'
            )
        );
        break;

    case 'tmj':
        $service_title = 'TMJ Treatment Services in ' . $location_name;
        $service_intro = 'If you are experiencing jaw pain, clicking, locking, or other symptoms of TMJ disorder and searching for the best TMJ treatment near you in ' . $location_name . ', GnathosFace is here to help. Dr. Suresh P is a renowned TMJ specialist with over 20 years of experience in diagnosing and treating temporomandibular joint disorders. Patients from ' . $location_name . ' receive comprehensive, personalized care that addresses the root cause of their symptoms.';
        $services = array(
            array(
                'title' => 'TMJ Disorder Diagnosis',
                'icon' => 'fa-stethoscope',
                'desc' => 'Accurate diagnosis is the first step to effective TMJ treatment. Dr. Suresh P uses comprehensive evaluation including clinical examination, imaging studies (X-rays, CT, MRI), and joint analysis to determine the exact cause of your TMJ symptoms. Patients from ' . $location_name . ' receive thorough diagnostic services that form the foundation of effective treatment.'
            ),
            array(
                'title' => 'Conservative TMJ Treatment',
                'icon' => 'fa-hand-holding-medical',
                'desc' => 'Most TMJ disorders respond well to conservative treatment. Dr. Suresh P offers medications, physical therapy, lifestyle modifications, and dental appliances (splints/night guards) to manage symptoms. For patients from ' . $location_name . ', conservative approaches are always tried first before considering surgical options.'
            ),
            array(
                'title' => 'TMJ Arthroscopy and Surgery',
                'icon' => 'fa-microscope',
                'desc' => 'When conservative treatments fail to provide relief, surgical intervention may be necessary. Dr. Suresh P performs advanced TMJ surgeries including arthroscopy, arthrocentesis, and open joint surgery. Patients from ' . $location_name . ' benefit from minimally invasive techniques that promote faster recovery and better outcomes.'
            ),
            array(
                'title' => 'TMJ Botox Injections',
                'icon' => 'fa-syringe',
                'desc' => 'Botox injections into the jaw muscles can provide significant relief for TMJ-related pain and muscle spasms. This treatment is particularly effective for patients who do not respond to traditional therapies. Dr. Suresh P offers botox treatment for appropriate candidates from ' . $location_name . ' as part of a comprehensive TMJ management plan.'
            ),
            array(
                'title' => 'Jaw Joint Replacement',
                'icon' => 'fa-bone',
                'desc' => 'In severe cases of TMJ damage, total joint replacement may be necessary. Dr. Suresh P has experience with TMJ prosthetic reconstruction for patients with advanced joint degeneration. Patients from ' . $location_name . ' receive cutting-edge treatment options for even the most complex TMJ conditions.'
            ),
            array(
                'title' => 'Post-Treatment Rehabilitation',
                'icon' => 'fa-heart-pulse',
                'desc' => 'Successful TMJ treatment extends beyond the initial intervention. Dr. Suresh P provides comprehensive rehabilitation including physical therapy, exercises, and follow-up care. Patients from ' . $location_name . ' benefit from ongoing support that ensures lasting relief and optimal jaw function.'
            )
        );
        break;

    case 'oral_cancer':
        $service_title = 'Oral Cancer Treatment Services in ' . $location_name;
        $service_intro = 'Oral cancer requires expert, prompt treatment for the best outcomes. If you or a loved one has been diagnosed with oral cancer or shows concerning symptoms, Dr. Suresh P at GnathosFace provides comprehensive oral cancer treatment services to patients from ' . $location_name . ' and surrounding areas. With specialized training and extensive experience in oral oncology, Dr. Suresh offers hope and healing to cancer patients.';
        $services = array(
            array(
                'title' => 'Oral Cancer Screening and Diagnosis',
                'icon' => 'fa-magnifying-glass',
                'desc' => 'Early detection saves lives. Dr. Suresh P provides thorough oral cancer screening using visual examination, brush biopsies, and advanced imaging. Patients from ' . $location_name . ' receive accurate diagnosis that guides treatment planning and improves outcomes.'
            ),
            array(
                'title' => 'Tumor Removal Surgery',
                'icon' => 'fa-scissors',
                'desc' => 'Surgical removal of oral tumors requires precision and expertise to ensure complete removal while preserving function and appearance. Dr. Suresh P performs tumor resection using advanced techniques that maximize cancer control and minimize tissue damage for patients from ' . $location_name . '.'
            ),
            array(
                'title' => 'Neck Dissection',
                'icon' => 'fa-user-doctor',
                'desc' => 'Oral cancers often spread to lymph nodes in the neck. Dr. Suresh P performs neck dissection to remove affected nodes and prevent cancer spread. For patients from ' . $location_name . ', this procedure is tailored to individual cancer stages, balancing thorough treatment with preservation of important structures.'
            ),
            array(
                'title' => 'Reconstructive Surgery',
                'icon' => 'fa-hand-sparkles',
                'desc' => 'After tumor removal, reconstructive surgery restores appearance and function. Dr. Suresh P uses advanced techniques including microvascular free tissue transfer to reconstruct defects. Patients from ' . $location_name . ' receive comprehensive reconstruction that helps them return to normal life after cancer treatment.'
            ),
            array(
                'title' => 'Follow-up and Survivorship Care',
                'icon' => 'fa-clipboard-check',
                'desc' => 'Cancer treatment extends beyond the initial surgery. Dr. Suresh P provides ongoing surveillance and survivorship care for patients from ' . $location_name . ', monitoring for recurrence and managing treatment side effects. Regular follow-ups ensure long-term health and quality of life.'
            ),
            array(
                'title' => 'Supportive Care and Counseling',
                'icon' => 'fa-comments',
                'desc' => 'Cancer treatment affects not just the body but also emotional well-being. Dr. Suresh P and the GnathosFace team provide supportive care including counseling, nutrition guidance, and rehabilitation services. Patients from ' . $location_name . ' receive holistic support throughout their cancer journey.'
            )
        );
        break;

    case 'facial_injury':
        $service_title = 'Facial Injury Treatment Services in ' . $location_name;
        $service_intro = 'Facial injuries require immediate, expert care to ensure proper healing and optimal functional and cosmetic outcomes. Whether you have experienced a sports injury, road accident, fall, or assault resulting in facial trauma, Dr. Suresh P at GnathosFace provides comprehensive emergency and reconstructive facial injury treatment to patients from ' . $location_name . '.';
        $services = array(
            array(
                'title' => 'Emergency Facial Trauma Care',
                'icon' => 'fa-truck-medical',
                'desc' => 'Time is critical in facial trauma. Dr. Suresh P provides emergency care for facial injuries, ensuring proper wound management, fracture stabilization, and pain control. Patients from ' . $location_name . ' receive prompt treatment that prevents complications and sets the foundation for successful recovery.'
            ),
            array(
                'title' => 'Jaw Fracture Treatment',
                'icon' => 'fa-bone',
                'desc' => 'Jaw fractures require precise treatment to restore proper bite and function. Dr. Suresh P treats mandible and maxilla fractures using both conservative methods (wiring) and surgical techniques (plates and screws). Patients from ' . $location_name . ' benefit from expert fracture care that promotes proper healing.'
            ),
            array(
                'title' => 'Orbital and Cheekbone Fracture Repair',
                'icon' => 'fa-eye',
                'desc' => 'Fractures around the eye and cheek require special attention to prevent complications like double vision or facial asymmetry. Dr. Suresh P has extensive experience in repairing orbital and zygomatic fractures. Patients from ' . $location_name . ' receive meticulous care that preserves both function and appearance.'
            ),
            array(
                'title' => 'Nasal Fracture Treatment',
                'icon' => 'fa-head-side-virus',
                'desc' => 'Nasal fractures are common facial injuries. Dr. Suresh P provides both closed reduction (non-surgical) and open surgical treatment for nasal fractures. Patients from ' . $location_name . ' receive appropriate treatment based on fracture severity, ensuring proper breathing and cosmetic outcomes.'
            ),
            array(
                'title' => 'Facial Soft Tissue Repair',
                'icon' => 'fa-kit-medical',
                'desc' => 'Cuts and soft tissue injuries to the face require careful repair to minimize scarring. Dr. Suresh P performs meticulous facial laceration repair using plastic surgery techniques. Patients from ' . $location_name . ' benefit from treatment that achieves the best possible cosmetic results.'
            ),
            array(
                'title' => 'Post-Trauma Rehabilitation',
                'icon' => 'fa-person-running',
                'desc' => 'Recovery from facial trauma extends beyond initial treatment. Dr. Suresh P provides rehabilitation including jaw exercises, speech therapy coordination, and follow-up imaging. Patients from ' . $location_name . ' receive comprehensive care that ensures full functional recovery.'
            )
        );
        break;

    case 'facial_swelling':
        $service_title = 'Facial Swelling Treatment Services in ' . $location_name;
        $service_intro = 'Facial swelling can result from various conditions ranging from minor infections to serious tumors. If you are experiencing persistent or concerning facial swelling and searching for the best treatment near you in ' . $location_name . ', Dr. Suresh P at GnathosFace provides expert diagnosis and treatment. With specialized expertise in oral and maxillofacial conditions, patients from ' . $location_name . ' receive comprehensive care.';
        $services = array(
            array(
                'title' => 'Diagnosis of Facial Swelling',
                'icon' => 'fa-search',
                'desc' => 'Accurate diagnosis is essential for effective treatment. Dr. Suresh P uses clinical examination, imaging studies (X-rays, CT, MRI), and biopsies when needed to determine the cause of facial swelling. Patients from ' . $location_name . ' receive thorough evaluation that identifies the underlying problem.'
            ),
            array(
                'title' => 'Dental Infection Treatment',
                'icon' => 'fa-tooth',
                'desc' => 'Dental infections are a common cause of facial swelling. Dr. Suresh P treats dental abscesses and infections through antibiotics, drainage procedures, and dental treatment coordination. Patients from ' . $location_name . ' receive relief from painful infections with comprehensive follow-up care.'
            ),
            array(
                'title' => 'Cyst and Tumor Removal',
                'icon' => 'fa-scissors',
                'desc' => 'Jaw cysts and tumors can cause significant facial swelling and bone destruction if left untreated. Dr. Suresh P performs surgical removal of oral cysts and tumors with reconstruction as needed. Patients from ' . $location_name . ' benefit from complete treatment that prevents recurrence and restores appearance.'
            ),
            array(
                'title' => 'Salivary Gland Treatment',
                'icon' => 'fa-droplet',
                'desc' => 'Salivary gland infections and blockages can cause facial swelling, especially near the jaw and ears. Dr. Suresh P diagnoses and treats salivary gland conditions including stone removal and infection management. Patients from ' . $location_name . ' receive expert care for these often-painful conditions.'
            ),
            array(
                'title' => 'Cellulitis Treatment',
                'icon' => 'fa-prescription',
                'desc' => 'Facial cellulitis is a serious bacterial infection requiring prompt treatment. Dr. Suresh P provides aggressive antibiotic therapy and surgical drainage when needed. Patients from ' . $location_name . ' receive urgent care that prevents spread and serious complications.'
            ),
            array(
                'title' => 'Allergic Reaction Management',
                'icon' => 'fa-allergies',
                'desc' => 'Severe allergic reactions can cause dangerous facial swelling. Dr. Suresh P provides emergency management and investigation of allergy causes. Patients from ' . $location_name . ' receive comprehensive care that addresses both immediate symptoms and underlying triggers.'
            )
        );
        break;

    case 'cosmetic':
        $service_title = 'Cosmetic Facial Surgery Services in ' . $location_name;
        $service_intro = 'Enhance your facial appearance and confidence with expert cosmetic facial surgery. Dr. Suresh P at GnathosFace provides a range of cosmetic procedures to patients from ' . $location_name . ' and surrounding areas. As a maxillofacial surgeon with artistic vision and surgical expertise, Dr. Suresh helps patients achieve their aesthetic goals while ensuring functional improvement.';
        $services = array(
            array(
                'title' => 'Chin Surgery (Genioplasty)',
                'icon' => 'fa-face-smile',
                'desc' => 'Chin surgery can enhance facial harmony by correcting a receding or protruding chin. Dr. Suresh P performs both reduction and augmentation genioplasty using advanced techniques. Patients from ' . $location_name . ' achieve improved facial balance and enhanced self-confidence.'
            ),
            array(
                'title' => 'Jaw Contouring',
                'icon' => 'fa-user-pen',
                'desc' => 'A strong or square jaw can be softened, while a weak jawline can be enhanced through surgical contouring. Dr. Suresh P reshapes the jaw bone to create the desired facial contour. Patients from ' . $location_name . ' receive personalized treatment that achieves natural-looking results.'
            ),
            array(
                'title' => 'Cheek Enhancement',
                'icon' => 'fa-face-grin-stars',
                'desc' => 'High, defined cheekbones are a desirable facial feature. Dr. Suresh P offers both surgical cheek implant placement and cheekbone reduction for the right candidates. Patients from ' . $location_name . ' benefit from customized approaches that enhance their natural beauty.'
            ),
            array(
                'title' => 'Facial Liposuction',
                'icon' => 'fa-person-dots-from-line',
                'desc' => 'Excess fat deposits in the face and neck can be removed through liposuction for a more sculpted appearance. Dr. Suresh P performs facial liposuction with precision for natural-looking results. Patients from ' . $location_name . ' achieve a more defined facial contour.'
            ),
            array(
                'title' => 'Facial Fat Grafting',
                'icon' => 'fa-syringe',
                'desc' => 'Fat grafting restores volume to areas that have lost fullness due to aging or genetics. Dr. Suresh P uses advanced fat harvesting and injection techniques for long-lasting results. Patients from ' . $location_name . ' benefit from natural enhancement using their own tissue.'
            ),
            array(
                'title' => 'Scar Revision',
                'icon' => 'fa-wand-magic-sparkles',
                'desc' => 'Facial scars from injuries, surgery, or acne can be minimized through scar revision techniques. Dr. Suresh P uses surgical excision, steroid injections, laser treatment, and other methods to improve scar appearance. Patients from ' . $location_name . ' receive treatment that significantly reduces scar visibility.'
            )
        );
        break;

    default:
        $service_title = 'Maxillofacial Services in ' . $location_name;
        $service_intro = 'Access expert maxillofacial care at GnathosFace. Dr. Suresh P provides comprehensive services to patients from ' . $location_name . ', offering treatment for various facial, jaw, and oral conditions.';
        $services = array(
            array('title' => 'Comprehensive Diagnosis', 'icon' => 'fa-stethoscope', 'desc' => 'Thorough evaluation and accurate diagnosis for all maxillofacial conditions.'),
            array('title' => 'Surgical Treatment', 'icon' => 'fa-user-doctor', 'desc' => 'Expert surgical care using the latest techniques and technology.'),
            array('title' => 'Reconstructive Surgery', 'icon' => 'fa-hand-sparkles', 'desc' => 'Advanced reconstruction for trauma, tumor, and congenital conditions.'),
            array('title' => 'Follow-up Care', 'icon' => 'fa-clipboard-list', 'desc' => 'Comprehensive post-treatment care and rehabilitation support.'),
            array('title' => 'Second Opinions', 'icon' => 'fa-comments', 'desc' => 'Expert second opinions for complex cases and treatment planning.'),
            array('title' => 'Patient Education', 'icon' => 'fa-graduation-cap', 'desc' => 'Detailed information and guidance to help patients make informed decisions.')
        );
}
?>

<style>
/* Services Content Section Styles */
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
            <h2><?php echo htmlspecialchars($service_title); ?></h2>
            <p><?php echo htmlspecialchars($service_intro); ?></p>
        </div>
        <div class="services-grid">
            <?php foreach($services as $index => $service): ?>
            <div class="service-card wow fadeInUp" data-wow-delay="<?php echo (0.3 + $index * 0.1); ?>s">
                <div class="service-icon">
                    <i class="fas <?php echo htmlspecialchars($service['icon']); ?>"></i>
                </div>
                <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                <p><?php echo htmlspecialchars($service['desc']); ?></p>
            </div>
            <?php endforeach; ?>
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