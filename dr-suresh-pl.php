<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">
<head>

    <!-- Title -->
    <title>Dr. Suresh P | Senior Consultant & TMJ Specialist | Gnathos</title>
    
    <meta name="description" content="Meet Dr. Suresh P, Senior Consultant and TMJ Specialist at Gnathos, Hyderabad. 20+ years of experience in TMJ disorders, jaw correction, facial trauma and advanced maxillofacial surgery.">
    
    <!-- Canonical (update URL as per final live link) -->
    <link rel="canonical" href="https://gnathosface.com/dr-suresh-p">
    
    <!-- Structured Data: Physician -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Physician",
      "name": "Dr. Suresh P",
      "description": "Senior Consultant and TMJ Specialist with 20+ years of experience in oral and maxillofacial surgery.",
      "medicalSpecialty": [
        "Oral and Maxillofacial Surgery",
        "TMJ Disorders",
        "Jaw Correction Surgery",
        "Facial Trauma"
      ],
      "affiliation": {
        "@type": "MedicalOrganization",
        "name": "Gnathos Face – Oral & Maxillofacial Surgery Centre"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli",
        "addressLocality": "Hyderabad",
        "addressRegion": "Telangana",
        "postalCode": "500032",
        "addressCountry": "IN"
      },
      "telephone": "+91-9000666476",
      "email": "gnathosface@gmail.com",
      "url": "https://gnathosface.com/dr-suresh-p"
    }
    </script>

    <?php include('header-links.php')?>

    <!-- FAVICONS ICON -->
    <style>
        .site-header{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        :root {
            --theme-color: #195FAC;
            --theme-light: #2196f3;
            --med-primary: #1976D2;
            --med-light: #64B5F6;
            --med-dark: #0D47A1;
            --med-pale: #E3F2FD;
            --pale-blue: #E6F3FF;
        }
       
        .section-title {
            position: relative;
            margin-bottom: 2.5rem;
            color: var(--theme-color);
        }
        .DZ-theme-btn{
            display:none  !important ;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--theme-color);
        }

        .condition-card {
            position: relative;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
        }

        /* Marquee */
        .marquee-container {
            background: linear-gradient(45deg, #172C5A, #2a4380, #172C5A);
            background-size: 200% 200%;
            padding: 20px 0;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 15px rgba(23, 44, 90, 0.3);
            animation: gradientBG 20s ease infinite;
        }

        .marquee-content {
            white-space: nowrap;
            display: inline-block;
            animation: marquee 30s linear infinite;
            color: #ffffff;
            font-size: 1.4rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            padding: 0 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .location-icon {
            margin-right: 10px;
            color: #ffffff;
        }

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
            transform: scale(1.01);
            transition: transform 0.3s ease;
        }

        .marquee-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.1);
            filter: blur(5px);
            z-index: -1;
        }

        @media (max-width: 767px) and (min-width: 200px) {
            .mob{
                display:none;
            }
        }
      
        /* Vision / Mission / Values (re-used) */
        .vmv {
            padding: 5rem 0;
            background: linear-gradient(135deg, #fff 0%, var(--med-pale) 100%);
            position: relative;
            overflow: hidden;
        }

        .vmv__particle {
            position: absolute;
            width: 500px;
            height: 500px;
            border: 2px solid rgba(25, 118, 210, 0.1);
            border-radius: 50%;
        }

        .vmv__particle--1 {
            top: -250px;
            right: -250px;
            animation: rotate 30s linear infinite;
        }

        .vmv__particle--2 {
            bottom: -250px;
            left: -250px;
            animation: rotate 30s linear infinite reverse;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .vmv__header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .vmv__title {
            color: var(--med-dark);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .vmv__subtitle {
            color: #516171;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .vmv__grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .vmv__card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(25, 118, 210, 0.1);
            transition: all 0.4s ease;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }

        .vmv__card:nth-child(2) { animation-delay: 0.2s; }
        .vmv__card:nth-child(3) { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .vmv__card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(25, 118, 210, 0.15);
        }

        .vmv__card-header {
            background: var(--med-primary);
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .vmv__card-header::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(45deg);
            top: -50%;
            left: -50%;
            transition: all 0.6s ease;
        }

        .vmv__card:hover .vmv__card-header::before {
            transform: rotate(45deg) translateY(100%);
        }

        .vmv__icon-wrapper {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
        }

        .vmv__icon {
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }

        .vmv__card:hover .vmv__icon-wrapper {
            transform: rotateY(180deg);
        }

        .vmv__card:hover .vmv__icon {
            transform: rotateY(-180deg);
        }

        .vmv__card-title {
            color: white;
            font-size: 1.5rem;
            margin: 0;
            font-weight: 600;
        }

        .vmv__card-body {
            padding: 2rem;
        }

        .vmv__description {
            color: #516171;
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .vmv__list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .vmv__item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.8rem 0;
            color: #516171;
            transition: all 0.3s ease;
        }

        .vmv__item:hover {
            transform: translateX(10px);
            color: var(--med-primary);
        }

        .vmv__item-icon {
            width: 30px;
            height: 30px;
            background: var(--med-pale);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--med-primary);
            font-size: 0.9rem;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .vmv__item:hover .vmv__item-icon {
            background: var(--med-primary);
            color: white;
        }

        @media (max-width: 991.98px) {
            .vmv__grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767.98px) {
            .vmv__grid {
                grid-template-columns: 1fr;
            }
        }

        /* -------- DOCTOR PAGE SPECIFIC STYLES -------- */

        .doctor-meta-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 6px 14px;
            border-radius: 999px;
            background: var(--med-pale);
            color: var(--med-dark);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .doctor-meta-badge i {
            color: var(--med-primary);
        }

        .doctor-title {
            color: var(--med-dark);
            margin-bottom: 10px;
        }

        .doctor-subtitle {
            font-weight: 500;
            color: #516171;
            margin-bottom: 15px;
        }

        .doctor-highlights {
            list-style: none;
            padding-left: 0;
            margin-bottom: 25px;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 8px 18px;
        }

        .doctor-highlights li {
            position: relative;
            padding-left: 22px;
            font-size: 0.95rem;
            color: #516171;
        }

        .doctor-highlights li::before {
            content: "\f00c";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            font-size: 0.75rem;
            color: var(--med-primary);
        }

        .doctor-info-card {
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(25, 95, 172, 0.12);
            overflow: hidden;
        }

        .doctor-info-header {
            background: linear-gradient(135deg, var(--med-primary), var(--med-dark));
            padding: 20px 24px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .doctor-avatar-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: rgba(255,255,255,0.16);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.9rem;
            font-weight: 700;
        }

        .doctor-info-body {
            padding: 20px 24px;
        }

        .doctor-info-list {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .doctor-info-list li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px dashed rgba(100, 116, 139, 0.4);
            font-size: 0.95rem;
        }

        .doctor-info-list li:last-child {
            border-bottom: none;
        }

        .doctor-info-label {
            font-weight: 600;
            color: #374151;
        }

        .doctor-info-value {
            color: #4b5563;
            text-align: right;
            margin-left: 10px;
        }

        .doctor-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 15px;
        }

        .doctor-cta-group .btn {
            border-radius: 999px;
        }

        .doctor-cta-note {
            font-size: 0.9rem;
            color: #6b7280;
            margin-top: 10px;
        }

        .doctor-section-subtitle {
            font-size: 0.98rem;
            color: #516171;
        }

        .doctor-expertise-box {
            border-radius: 18px;
            background: #ffffff;
            box-shadow: 0 10px 25px rgba(25, 95, 172, 0.08);
            padding: 24px 22px;
            margin-bottom: 30px;
        }

        .doctor-expertise-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--med-dark);
            margin-bottom: 10px;
        }

        .doctor-expertise-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .doctor-tag {
            font-size: 0.85rem;
            padding: 6px 12px;
            border-radius: 999px;
            background: var(--med-pale);
            color: var(--med-primary);
            font-weight: 500;
        }

        @media (max-width: 991.98px) {
            .doctor-highlights {
                grid-template-columns: 1fr;
            }
        }

    </style>

</head> 
<body id="bg">
<div class="page-wraper">
    
    <!-- Header Start -->
    <?php include('header.php')?>
    <!-- Header End -->
    
    <main class="page-content">
    
        <!-- Banner / Hero -->
        <div class="dz-bnr-inr dz-banner-dark dz-bnr-inr-md" style="background-image:url(assets/images/about-us.web);">
            <div class="container">
                <div class="dz-bnr-inr-entry d-table-cell">
                    <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">Dr. Suresh P</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-white" href="index">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="text-white" href="about-us">About</a>
                            </li>
                            <li class="breadcrumb-item">Dr. Suresh P</li>
                        </ul>
                    </nav>
                    <div class="dz-btn">
                        <a href="https://wa.me/919000666476" class="btn btn-lg btn-icon btn-primary radius-xl btn-shadow mb-3 mb-sm-0">
                            <span class="left-icon">
                                <i class="feather icon-phone-call"></i>
                            </span>
                            +91 9000666476
                        </a>                 
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Doctor Intro Section -->
        <section class="content-inner" style="background-image: url(images/background/bg1.pg); background-repeat: no-repeat; background-position: right bottom;">
            <div class="container">
                <div class="row content-wrapper style-1 align-items-center">
                    <div class="col-xl-6 m-b30">
                        <div class="content-media">
                            <div class="dz-media">
                                <!-- Update image path if you have a dedicated portrait -->
                                <img src="assets/images/Dr-(1).webp" alt="Dr Suresh P - Senior Consultant and TMJ Specialist">
                            </div>
                            <div class="item1" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                                <div class="info-widget style-7">
                                </div>
                            </div>
                            <div class="item2" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                                <div class="info-widget style-6 bg-primary">
                                    <div class="info-icon bg-secondary">
                                        <img src="images/svg/clock.svg" alt="">
                                    </div>
                                    <div class="widget-content">
                                        <h4 class="title">Open Hours</h4>
                                        <ul>
                                            <li>Monday <strong>09:30 - 07:30</strong></li>
                                            <li>Tuesday <strong>09:30 - 07:30</strong></li>
                                            <li>Wednesday <strong>09:30 - 07:30</strong></li>
                                            <li>Thursday <strong>09:30 - 07:30</strong></li>
                                            <li>Friday <strong>09:30 - 07:30</strong></li>
                                            <li>Saturday <strong>09:30 - 07:30</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 m-b30">
                        <div class="section-head style-1 m-b20">
                            <div class="doctor-meta-badge">
                                <i class="fas fa-award"></i> 20+ Years of Experience
                            </div>
                            <h2 class="title doctor-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">
                                Senior Consultant &amp; TMJ Specialist
                            </h2>
                            <p class="doctor-subtitle wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.8s">
                                Dedicated to advanced care for jaw joints, facial structure and oral function.
                            </p>
                            <p class="doctor-section-subtitle wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                                Dr. Suresh P is a highly experienced Oral and Maxillofacial Surgeon at <strong>GNATHOS</strong>, specialising in TMJ disorders, jaw correction surgery and facial trauma. With over two decades of surgical expertise, he helps patients restore comfort, function and aesthetics with precision and compassion.
                            </p>
                        </div>
                        <ul class="doctor-highlights wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
                            <li>Advanced management of TMJ pain, locking, clicking and joint dysfunction</li>
                            <li>Corrective jaw (orthognathic) surgeries for facial balance and bite correction</li>
                            <li>Comprehensive care for facial trauma and fracture reconstruction</li>
                            <li>Focus on functional recovery, aesthetics and long-term stability</li>
                            <li>Evidence-based, step-wise approach from conservative to surgical care</li>
                            <li>Patient-centred counselling and clear explanation of treatment options</li>
                        </ul>
                        <div class="doctor-cta-group wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s">
                            <a href="https://wa.me/919000666476" class="btn btn-lg btn-icon btn-secondary btn-shadow">
                                Book WhatsApp Appointment
                                <span class="right-icon"><i class="feather icon-arrow-right"></i></span>
                            </a>
                            <a href="tel:+919000666476" class="btn btn-outline-dark btn-lg">
                                <i class="feather icon-phone-call m-r5"></i> Call Clinic
                            </a>
                        </div>
                        <p class="doctor-cta-note wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.8s">
                            Located at CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Address Marquee -->
        <div class="container-fluid p-0">
            <div class="marquee-container">
                <div class="marquee-content">
                    <i class="fas fa-location-dot location-icon"></i>
                    CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
                    <span style="margin: 0 50px;">•</span>
                    <i class="fas fa-location-dot location-icon"></i>
                    CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
                    <span style="margin: 0 50px;">•</span>
                    <i class="fas fa-location-dot location-icon"></i>
                    CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
                    <span style="margin: 0 50px;">•</span>
                    <i class="fas fa-location-dot location-icon"></i>
                    CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
                </div>
            </div>
        </div>

        <!-- Clinical Focus / Vision Mission Values adapted for Doctor -->
        <section class="vmv">
            <div class="vmv__particle vmv__particle--1"></div>
            <div class="vmv__particle vmv__particle--2"></div>
            
            <div class="container">
                <header class="vmv__header">
                    <h2 class="vmv__title">Clinical Expertise, Philosophy & Values</h2>
                    <p class="vmv__subtitle">
                        Advancing TMJ and maxillofacial care with precision, innovation and patient-first compassion.
                    </p>
                </header>

                <div class="vmv__grid">
                    <!-- Expertise Card -->
                    <div class="vmv__card">
                        <div class="vmv__card-header">
                            <div class="vmv__icon-wrapper">
                                <i class="fas fa-user-md vmv__icon"></i>
                            </div>
                            <h3 class="vmv__card-title">Clinical Expertise</h3>
                        </div>
                        <div class="vmv__card-body">
                            <p class="vmv__description">
                                Dr. Suresh specialises in complex TMJ, jaw and facial conditions, offering advanced treatments tailored to each patient.
                            </p>
                            <ul class="vmv__list">
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-tooth"></i>
                                    </span>
                                    TMJ pain, locking & clicking disorders
                                </li>
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-ruler-combined"></i>
                                    </span>
                                    Orthognathic & jaw correction surgeries
                                </li>
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-user-injured"></i>
                                    </span>
                                    Facial trauma & fracture reconstruction
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Philosophy Card -->
                    <div class="vmv__card">
                        <div class="vmv__card-header">
                            <div class="vmv__icon-wrapper">
                                <i class="fas fa-bullseye vmv__icon"></i>
                            </div>
                            <h3 class="vmv__card-title">Treatment Philosophy</h3>
                        </div>
                        <div class="vmv__card-body">
                            <p class="vmv__description">
                                Every case is approached with a clear diagnosis, step-wise planning and transparent communication.
                            </p>
                            <ul class="vmv__list">
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-microscope"></i>
                                    </span>
                                    Evidence-based, protocol-driven care
                                </li>
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-hand-holding-medical"></i>
                                    </span>
                                    Conservative options before surgery when possible
                                </li>
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-comments"></i>
                                    </span>
                                    Clear explanation of risks, benefits & outcomes
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Values Card -->
                    <div class="vmv__card">
                        <div class="vmv__card-header">
                            <div class="vmv__icon-wrapper">
                                <i class="fas fa-heart vmv__icon"></i>
                            </div>
                            <h3 class="vmv__card-title">Core Values</h3>
                        </div>
                        <div class="vmv__card-body">
                            <p class="vmv__description">
                                At GNATHOS, Dr. Suresh upholds strong ethics, empathy and professional excellence in every interaction.
                            </p>
                            <ul class="vmv__list">
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </span>
                                    Integrity, honesty & ethical care
                                </li>
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-hand-holding-heart"></i>
                                    </span>
                                    Respect and empathy for every patient
                                </li>
                                <li class="vmv__item">
                                    <span class="vmv__item-icon">
                                        <i class="fas fa-award"></i>
                                    </span>
                                    Commitment to continuous learning & excellence
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats (same include to keep consistency & trust section) -->
        <?php include('stats.php')?>

        <!-- Focused Expertise & Quick Info Block -->
        <section class="content-inner">
            <div class="container">
                <div class="row content-wrapper style-1 align-items-start">
                    <div class="col-xl-7 m-b30">
                        <div class="section-head style-1 m-b15">
                            <h2 class="title m-b15">Areas of Special Interest</h2>
                            <p>
                                Drawing from years of dedicated practice in facial and jaw surgery, Dr. Suresh manages a wide range of conditions where function, appearance and comfort are all closely linked.
                            </p>
                        </div>

                        <div class="doctor-expertise-box">
                            <div class="doctor-expertise-title">Key Conditions Treated</div>
                            <div class="doctor-expertise-tags">
                                <span class="doctor-tag">TMJ pain & clicking</span>
                                <span class="doctor-tag">Jaw locking</span>
                                <span class="doctor-tag">Bite & jaw alignment issues</span>
                                <span class="doctor-tag">Facial fractures</span>
                                <span class="doctor-tag">Post-trauma facial deformity</span>
                                <span class="doctor-tag">Pre-surgical orthodontic planning</span>
                                <span class="doctor-tag">Chronic facial pain</span>
                                <span class="doctor-tag">Corrective jaw surgery</span>
                            </div>
                        </div>

                        <p>
                            Whether it’s difficulty opening the mouth, recurrent jaw locking, long-standing bite problems or the impact of facial injuries, Dr. Suresh works closely with patients to identify the root cause and design a treatment plan that balances <strong>function, aesthetics and long-term health</strong>.
                        </p>
                    </div>
                    <div class="col-xl-5 m-b30">
                        <div class="doctor-info-card">
                            <div class="doctor-info-header">
                                <div class="doctor-avatar-circle">
                                    DS
                                </div>
                                <div>
                                    <h4 class="m-b0 text-white">Dr. Suresh P</h4>
                                    <span>Senior Consultant &amp; TMJ Specialist</span><br>
                                    <span>Oral &amp; Maxillofacial Surgeon</span>
                                </div>
                            </div>
                            <div class="doctor-info-body">
                                <ul class="doctor-info-list">
                                    <li>
                                        <span class="doctor-info-label">Experience</span>
                                        <span class="doctor-info-value">20+ Years</span>
                                    </li>
                                    <li>
                                        <span class="doctor-info-label">Primary Location</span>
                                        <span class="doctor-info-value">CARE Hospitals Hi-tech City, Gachibowli</span>
                                    </li>
                                    <li>
                                        <span class="doctor-info-label">Specialisation</span>
                                        <span class="doctor-info-value">TMJ, Jaw Correction &amp; Facial Trauma</span>
                                    </li>
                                    <li>
                                        <span class="doctor-info-label">Languages</span>
                                        <span class="doctor-info-value">English, Hindi, Telugu</span>
                                    </li>
                                </ul>
                                <div class="doctor-cta-group">
                                    <a href="https://wa.me/919000666476" class="btn btn-secondary btn-sm">
                                        <i class="feather icon-calendar m-r5"></i> Book Appointment
                                    </a>
                                    <a href="contact-us" class="btn btn-outline-primary btn-sm">
                                        Contact GNATHOS
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Excellence in Facial Care (re-used section but focused on doctor’s expertise) -->
        <section class="content-inner overlay-secondary-dark background-blend-luminosity bg-img-fix overflow-hidden" style="background-repeat: no-repeat; background-position: right center; background-size: cover;">
            <div class="container">
                <div class="row content-wrapper style-7 align-items-center">
                    <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.7s">
                        <div class="content-media">
                            <div class="dz-media">
                                <img src="assets/images/Excellence-in-Dental.webp" alt="Excellence in Facial Care with Dr Suresh">
                            </div>
                            <div class="item1">
                                <div class="info-widget style-11 bg-primary text-center">
                                    <span class="content-text text-white"><span class="counter">20</span>+</span>
                                    <h3 class="title m-b0 text-white">Years <br> Experienced</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-b30">
                        <div class="section-head style-1 m-b30">
                            <h2 class="title text-white m-b0 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.7s">
                                Excellence in Facial &amp; Jaw Care
                            </h2>
                        </div>
                        <div class="row row-wrapper g-5">
                            <div class="col-sm-6">
                                <div class="icon-bx-wraper style-4 text-center text-white wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.7s">
                                    <div class="icon-bx bg-primary">
                                        <span class="icon-cell">
                                            <i class="flaticon-check"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="dz-title">More Experience</h3>
                                        <p>Thousands of TMJ, jaw and facial cases managed with consistent, predictable outcomes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="icon-bx-wraper style-4 text-center text-white wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.7s">
                                    <div class="icon-bx bg-primary">
                                        <span class="icon-cell">
                                            <i class="flaticon-check"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="dz-title">The Right Answers</h3>
                                        <p>Clear explanation of your diagnosis and a structured plan built around your needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="icon-bx-wraper style-4 text-center text-white wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.7s">
                                    <div class="icon-bx bg-primary">
                                        <span class="icon-cell">
                                            <img src="images/svg/check.svg" alt="">
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="dz-title">Seamless Care</h3>
                                        <p>From first consult to follow-up, you receive coordinated care under one roof at GNATHOS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="icon-bx-wraper style-4 text-center text-white wow fadeInUp" data-wow-delay="1.0s" data-wow-duration="0.7s">
                                    <div class="icon-bx bg-primary">
                                        <span class="icon-cell">
                                            <img src="images/svg/check.svg" alt="">
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h3 class="dz-title">Unparalleled Expertise</h3>
                                        <p>Advanced techniques and meticulous planning for both functional and aesthetic restoration.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Real Patient Stories (focus on cases relevant to Dr. Suresh) -->
        <section class="clearfix p-t50 pb-5 overflow-hidden" style="background:linear-gradient(135deg, var(--pale-blue) 100%, #F8FBFF 0%); background-repeat: no-repeat; background-position: right center; background-size: cover;">
            <div class="container">
                <div class="row content-wrapper style-2">
                    <div class="col-xl-6">
                        <div class="content-media">
                            <div class="dz-media">
                                <img src="images/about/testmonial-image.webp" alt="Patient success stories at GNATHOS">
                            </div>
                            <div class="circle-wrapper" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                                <span class="circle1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="circle2">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                            <div class="item1" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                                <div class="info-widget style-1 move-3">
                                    <div class="avatar-group">
                                        <img class="avatar rounded-circle avatar-sm border border-white border-2" src="images/avatar/small/Avtar-mail.png" alt="">
                                        <img class="avatar rounded-circle avatar-sm border border-white border-2" src="images/avatar/small/Avter-mail.png" alt="">
                                        <img class="avatar rounded-circle avatar-sm border border-white border-2" src="images/avatar/small/Avtar-mail.png" alt="">
                                        <img class="avatar rounded-circle avatar-sm border border-white border-2" src="images/avatar/small/Avter-mail.png" alt="">
                                    </div>
                                    <div class="clearfix ms-2">
                                        <span class="number text-primary">150k</span>
                                        <span>Patient recovers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item2" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                                <div class="info-widget style-3 move-1">
                                    <div class="widget-head">
                                        <div class="widget-media">
                                            <img src="images/avatar/small/Avter-mail.png" alt="">
                                        </div>
                                        <div class="widget-content">
                                            <h6 class="title">Priya Bhogineni</h6>
                                            <ul class="star-list">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>I had surgery with Dr. Suresh, and I’m beyond happy with the results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10 align-self-center m-b30">
                        <div class="section-head style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.7s">
                            <h2 class="title m-b0 text-dark">Real Patients, Real Outcomes</h2>
                        </div>
                        <div class="swiper-btn-center-lr wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.7s">
                            <div class="swiper testimonial-swiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-1 shadow-md">
                                            <div class="testimonial-detail">
                                                <div class="testimonial-text">
                                                    <h3 class="title">Priya Bhogineni</h3>
                                                    <p>"I had surgery at GNATHOS with Dr. Suresh, and I couldn’t be happier with the results. The care I received was exceptional, and I felt supported throughout the entire process. Highly recommend!"</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-1 shadow-md">
                                            <div class="testimonial-detail">
                                                <div class="testimonial-text">
                                                    <h3 class="title">Aditya Bajoria</h3>
                                                    <p>"My jaw alignment issues were affecting my confidence and daily life. After treatment under Dr. Suresh and the GNATHOS team, my bite, smile, and comfort have improved significantly."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-1 shadow-md">
                                            <div class="testimonial-detail">
                                                <div class="testimonial-text">
                                                    <h3 class="title">Akila Ganesh</h3>
                                                    <p>"Following a facial injury, I was anxious about my recovery. Dr. Suresh explained every step clearly and ensured I felt confident and cared for. The outcome exceeded my expectations."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper1-button-prev btn-prev">
                                <img src="images/svg/arrow-left.svg" alt="">
                            </div>
                            <div class="swiper1-button-next btn-next">
                                <img src="images/svg/arrow-right.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    
    <!-- Footer -->
    <?php include('footer.php')?>

</div>
<!-- JAVASCRIPT FILES ========================================= -->
<?php include('footer-links.php')?>
</body>
</html>
