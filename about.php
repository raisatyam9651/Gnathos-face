<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">
<head>

		<!-- Title -->
	<title>About Us| Gnathos</title>
	
	
	<meta name="description" content="Gnathos provides advanced surgical care for face, mouth, and jaw, specializing in maxillofacial treatments to restore function and enhance appearance.">
	 
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
        }

        /* Location icon styling */
        .location-icon {
            margin-right: 10px;
            color: #ffffff;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Smooth pause on hover */
        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
            transform: scale(1.01);
            transition: transform 0.3s ease;
        }

        /* Add a subtle glow effect */
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

        .vmv__card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .vmv__card:nth-child(3) {
            animation-delay: 0.4s;
        }

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

        .vmv__card:hover .vmv__icon-wrapper {
            transform: rotateY(180deg);
        }

        .vmv__icon {
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
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

    </style>

</head>	
<body id="bg">
<div class="page-wraper">
	

		<!-- Header Star -->
		<?php include('header.php')?>
	<!-- Header End -->
	
	<main class="page-content">
	
    		<div class="dz-bnr-inr dz-banner-dark  dz-bnr-inr-md" style="background-image:url(assets/images/about-us.webp);">
		<div class="container">
			<div class="dz-bnr-inr-entry d-table-cell">
				<h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">About Us </h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
					<ul class="breadcrumb">
						<li class="breadcrumb-item "><a  class ="text-white"href="index">Home</a></li>
						<li class="breadcrumb-item">About</li>
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
		<!--<span class="text-vertical">24/7 EMERGENCY SERVICE</span>-->
		
	</div>
	
			<section class="content-inner" style="background-image: url(images/background/bg1.pg); background-repeat: no-repeat; background-position: right bottom;">
		<div class="container">
			<div class="row content-wrapper style-1 align-items-center">
				<div class="col-xl-6 m-b30">
					<div class="content-media">
						<div class="dz-media">
							<img src="assets/images/about-us-1st.webp" alt="">
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
					<div class="section-head style-1 m-b30">
						<h2 class="title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">World-Class Facial Care at GNATHOS </h2>
						<p class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">Experience the future of facial healthcare at GNATHOS. Our state-of-the-art facilities are designed with the latest technology to ensure you receive the highest quality care. Here, advanced tools combine with unmatched expertise, offering a comfortable and effective path to improved facial health and function.</p>
					</div>
					<ul class="list-check text-secondary grid-2 fw-medium m-b30 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s">
						<li>Facial Trauma & Injury Treatment</li>
						<li>Reconstructive Surgery</li>
						<li>TMJ Treatment</li>
						<li>Advanced Maxillofacial Surgery India</li>
						<li>Aesthetic & Functional Facial Enhancements</li>
						<li>Facial Rehabilitation & Recovery</li>
						<li>Emergency Facial Care</li>
						<li>Research and Development</li>
						<!--<li>Multidisciplinary Team</li>-->
						<!--<li>Health Information Technology</li>-->
					</ul>
					<div class="d-flex flex-wrap align-items-center wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.8s">
						<a href="https://wa.me/919000666476" class="btn btn-lg btn-icon btn-secondary btn-shadow m-r30 mb-3 mb-sm-0">
							Appointment
							<span class="right-icon"><i class="feather icon-arrow-right"></i></span>
						</a>
						<div class="info-widget style-5">
							<div class="widget-media text-primary">
								<i class="feather icon-phone-call dz-ring-effect"></i>
							</div>
							<div class="widget-content">
								<h6 class="title">Contact us?</h6>
								<a href="https://wa.me/919000666476" class="text-secondary">+91 9000666476</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
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
	
    <section class="vmv">
        <div class="vmv__particle vmv__particle--1"></div>
        <div class="vmv__particle vmv__particle--2"></div>
        
        <div class="container">
            <header class="vmv__header">
                <h2 class="vmv__title">Vision, Mission & Values</h2>
                <p class="vmv__subtitle">Advancing Facial Healthcare Through Expertise, Innovation, and Compassionate Care</p>
            </header>

            <div class="vmv__grid">
                <!-- Vision Card -->
                <div class="vmv__card">
                    <div class="vmv__card-header">
                        <div class="vmv__icon-wrapper">
                            <i class="fas fa-eye vmv__icon"></i>
                        </div>
                        <h3 class="vmv__card-title">Our Vision</h3>
                    </div>
                    <div class="vmv__card-body">
                        <p class="vmv__description">
                            To be the leading center of excellence in facial reconstruction and rehabilitation, setting new standards in patient care and surgical innovation.
                        </p>
                        <ul class="vmv__list">
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-star"></i>
                                </span>
                                Excellence in Treatment
                            </li>
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-chart-line"></i>
                                </span>
                                Continuous Innovation
                            </li>
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-globe"></i>
                                </span>
                                Global Healthcare Standards
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="vmv__card">
                    <div class="vmv__card-header">
                        <div class="vmv__icon-wrapper">
                            <i class="fas fa-bullseye vmv__icon"></i>
                        </div>
                        <h3 class="vmv__card-title">Our Mission</h3>
                    </div>
                    <div class="vmv__card-body">
                        <p class="vmv__description">
                            To provide comprehensive, advanced care for all facial concerns while ensuring optimal functional and aesthetic outcomes for every patient.
                        </p>
                        <ul class="vmv__list">
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-user-md"></i>
                                </span>
                                Expert Care Delivery
                            </li>
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-hands-helping"></i>
                                </span>
                                Patient-Centered Approach
                            </li>
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-microscope"></i>
                                </span>
                                Advanced Technology
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
                        <h3 class="vmv__card-title">Our Values</h3>
                    </div>
                    <div class="vmv__card-body">
                        <p class="vmv__description">
                            We uphold the highest standards of medical ethics, professional integrity, and patient care in everything we do.
                        </p>
                        <ul class="vmv__list">
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </span>
                                Integrity & Ethics
                            </li>
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-hand-holding-heart"></i>
                                </span>
                                Compassionate Care
                            </li>
                            <li class="vmv__item">
                                <span class="vmv__item-icon">
                                    <i class="fas fa-award"></i>
                                </span>
                                Professional Excellence
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


  
  
		<?php include('stats.php')?>

		
        <section class="content-inner">
            <div class="container">
                <div class="section-head style-1  row align-items-center">
                    <div class="wow fadeInUp text-center" data-wow-delay="0.2s" data-wow-duration="0.8s">
                        <h2 class="title m-b15 text-center">Meet Our Doctors</h2>
                    </div>
                </div>
                <div class="row align-items-center" style="justify-content:center">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                        <div class="dz-team style-1 box-hover">
                            <div class="dz-media">
                                <img src="assets/images/Dr-(1).webp" alt="/">
                                <a href="https://wa.me/919000666476" class="btn btn-primary">
                                    <i class="feather icon-calendar m-r5"></i>
                                    Appointment Now
                                </a>
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h3 class="dz-name"><a href="#">Dr. Suresh P</a></h3>
                                      <span class="dz-position">20+ Years of Experience</span> 
                                    <span class="dz-position">Senior Consultant and TMJ Specialist</span>
                                </div>
                                <a href="contact-us" class="btn btn-square btn-secondary">
                                    <i class="feather icon-arrow-right"></i>
                                </a>
                            </div>
                            <!--<ul class="dz-social">-->
                            <!--    <li>-->
                            <!--        <a href="https://www.linkedin.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-linkedin"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="https://www.instagram.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-instagram"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="https://www.facebook.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-facebook-f"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="https://twitter.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-x-twitter"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="https://www.youtube.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-youtube"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--</ul>-->
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s">
                        <div class="dz-team style-1 box-hover">
                            <div class="dz-media">
                                <img src="assets/images/Dr.webp" alt="/">
                                <a href="https://wa.me/919000666476" class="btn btn-primary">
                                    <i class="feather icon-calendar m-r5"></i>
                                    Appointment Now
                                </a>
                            </div>
                            <div class="dz-content">
                                <div class="clearfix">
                                    <h3 class="dz-name"><a href="#">Dr. Navatha Mortha</a></h3>
                                   <span class="dz-position">15+ Years of Experience</span> 
                                    <span class="dz-position">Senior Consultant and TMJ Specialist</span>

                                </div>
                                <a href="contact-us" class="btn btn-square btn-secondary">
                                    <i class="feather icon-arrow-right"></i>
                                </a>
                            </div>
                            <!--<ul class="dz-social">-->
                            <!--    <li>-->
                            <!--        <a href="https://www.linkedin.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-linkedin"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="https://www.instagram.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-instagram"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="https://www.facebook.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-facebook-f"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="https://twitter.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-x-twitter"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--    <li>-->
                            <!--        <a href="https://www.youtube.com" target="_blank">-->
                            <!--            <i class="fa-brands fa-youtube"></i>-->
                            <!--        </a>-->
                            <!--    </li>-->
                            <!--</ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
  
    
           


           


			<section class="content-inner overlay-secondary-dark background-blend-luminosity bg-img-fix overflow-hidden" style=" background-repeat: no-repeat; background-position: right center; background-size: cover;">
                <div class="container">
                    <div class="row content-wrapper style-7 align-items-center">
                        <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.7s">
                            <div class="content-media">
                                <div class="dz-media">
                                    <img src="assets/images/Excellence-in-Dental.webp" alt="">
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
                                <h2 class="title text-white m-b0 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.7s">Excellence in  Facial Care </h2>
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
                                            <p>We offer a wide range of health services to meet all your needs.</p>
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
                                            <p>Our expert team is here to provide personalized solutions, addressing your specific facial health concerns with precision and care.</p>
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
                                            <p>From consultation to recovery, we provide complete facial care under one roof, using the latest technology for a smooth and stress-free experience.</p>
                                            
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
                                            <p>Our skilled maxillofacial surgeons use advanced techniques to restore facial health, function, and aesthetics with precision.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
           <section class="clearfix p-t50 pb-5   overflow-hidden" style="background:linear-gradient(135deg, var(--pale-blue) 100%, #F8FBFF 0%);; background-repeat: no-repeat; background-position: right center; background-size: cover;">
            <div class="container">
                <div class="row content-wrapper style-2">
                    <div class="col-xl-6">
                        <div class="content-media">
                            <div class="dz-media">
                                <img src="images/about/testmonial-image.webp" alt="">
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
                            <h2 class="title m-b0 text-dark">Real Patients, Real Stories </h2>
                        </div>
                        <div class="swiper-btn-center-lr wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.7s">
                            <div class="swiper testimonial-swiper1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-1 shadow-md">
                                            <!--<div class="dz-media">-->
                                            <!--    <div class="media-inner">-->
                                            <!--        <img src="images/testimonial/img1.webp" alt="/">-->
                                            <!--        <a href="https://www.youtube.com/watch?v=o8OgzQdA70c" class="video-bx1 video-sm popup-youtube">-->
                                            <!--            <div class="video-btn bg-primary">-->
                                            <!--                <i class="fa fa-play"></i>-->
                                            <!--            </div>-->
                                            <!--            <span>Watch The Video</span>-->
                                            <!--        </a>-->
                                            <!--    </div>-->
                                            <!--    <div class="testimonial-info">-->
                                            <!--        <h5 class="testimonial-name">Priya Bhogineni</h5>-->
                                            <!--        <span class="testimonial-position">Patient</span>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="testimonial-detail">
                                                <div class="testimonial-text">
                                                    <h3 class="title">Priya Bhogineni</h3>
                                                    <p>"I had surgery at GNATHOS, and I couldn’t be happier with the results. The care I received was exceptional, and I felt supported throughout the entire process. Highly recommend!"</p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-1 shadow-md">
                                            <!--<div class="dz-media">-->
                                            <!--    <div class="media-inner">-->
                                            <!--        <img src="images/testimonial/img2.webp" alt="/">-->
                                            <!--        <a href="https://www.youtube.com/watch?v=o8OgzQdA70c" class="video-bx1 video-sm popup-youtube">-->
                                            <!--            <div class="video-btn bg-primary">-->
                                            <!--                <i class="fa fa-play"></i>-->
                                            <!--            </div>-->
                                            <!--            <span>Watch The Video</span>-->
                                            <!--        </a>-->
                                            <!--    </div>-->
                                            <!--    <div class="testimonial-info">-->
                                            <!--        <h5 class="testimonial-name">Kenneth Fong</h5>-->
                                            <!--        <span class="testimonial-position">Patient</span>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="testimonial-detail">
                                                <div class="testimonial-text">
                                                    <h3 class="title">Aditya Bajoria</h3>
                                                    <p>"Dr. Navatha made my treatment journey smooth and reassuring. She took the time to explain everything and was with me every step of the way. I’m incredibly grateful for her care and expertise."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-1 shadow-md">
                                            <!--<div class="dz-media">-->
                                            <!--    <div class="media-inner">-->
                                            <!--        <img src="images/testimonial/img3.webp" alt="/">-->
                                            <!--        <a href="https://www.youtube.com/watch?v=o8OgzQdA70c" class="video-bx1 video-sm popup-youtube">-->
                                            <!--            <div class="video-btn bg-primary">-->
                                            <!--                <i class="fa fa-play"></i>-->
                                            <!--            </div>-->
                                            <!--            <span>Watch The Video</span>-->
                                            <!--        </a>-->
                                            <!--    </div>-->
                                            <!--    <div class="testimonial-info">-->
                                            <!--        <h5 class="testimonial-name">Kenneth Fong</h5>-->
                                            <!--        <span class="testimonial-position">Patient</span>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="testimonial-detail">
                                                <div class="testimonial-text">
                                                    <h3 class="title">Akila Ganesh</h3>
                                                    <p>"My experience at GNATHOS was outstanding. Dr. Suresh and the team made sure I was comfortable and confident during my treatment. Their professionalism and skill are unmatched."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper1-button-prev btn-prev ">
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
