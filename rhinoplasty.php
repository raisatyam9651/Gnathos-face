<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">
<head>

		<!-- Title -->
	<title>Rhinoplasty</title>
	
	
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
        
                icon-bx-wraper.style-7.active .icon-bx, .icon-bx-wraper.style-7:hover .icon-bx {
    background: #FFF !important;
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

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .condition-card:hover .card-image {
            transform: scale(1.1);
        }

        .card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(25,95,172,0.9), transparent);
            padding: 20px;
            color: white;
            transform: translateY(70%);
            transition: transform 0.5s ease;
        }

        .condition-card:hover .card-overlay {
            transform: translateY(0);
        }

        .card-content {
            position: relative;
        }

        .condition-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            position: absolute;
            top: -60px;
            left: 0;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .description {
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 1rem;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease 0.1s;
        }

        .condition-card:hover .description {
            opacity: 1;
            transform: translateY(0);
        }

        .learn-more-btn {
            background: white;
            color: var(--theme-color);
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }

        .condition-card:hover .learn-more-btn {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.2s;
        }

        .learn-more-btn:hover {
            background: var(--theme-color);
            color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .condition-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .condition-icon i {
            color: var(--theme-color);
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .condition-card:hover .condition-icon {
            transform: rotate(360deg);
            background: var(--theme-color);
        }

        .condition-card:hover .condition-icon i {
            color: white;
        }
        .icon-menuss{
            display: inline-flex; 
            align-items: center; 
            justify-content:center; 
        }

        @media (max-width: 1200px) {
            .col-xl-3 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 768px) {
            .col-xl-3 {
                flex: 0 0 100%;
                max-width: 100%;
            }
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
       .fracture-guide__wrapper {
            /*background: linear-gradient(135deg, var(--med-pale) 0%, #F8FBFF 100%);*/
            padding: 3rem 0;
            position: relative;
        }

        .fracture-guide__container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(25, 118, 210, 0.1);
            overflow: hidden;
        }

        .fracture-guide__content-area {
            padding: 2rem;
        }

        .fracture-guide__visual-area {
           
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100%;
            padding: 2rem;
        }

        .fracture-guide__heading {
            /*color: var(--med-primary);*/
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .fracture-guide__heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            /*background: var(--med-primary);*/
            border-radius: 2px;
        }

        .fracture-guide__intro {
            color: #516171;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        .fracture-guide__symptoms {
            margin-bottom: 1.5rem;
        }

        .fracture-guide__symptom {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
            padding: 0.5rem;
            background: rgba(25, 118, 210, 0.03);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .fracture-guide__symptom:hover {
            background: rgba(25, 118, 210, 0.06);
            transform: translateX(5px);
        }

        .fracture-guide__bullet {
            width: 8px;
            height: 8px;
            background: var(--med-primary);
            border-radius: 50%;
            margin-top: 8px;
            margin-right: 12px;
            flex-shrink: 0;
        }

        .fracture-guide__description {
            color: #516171;
            font-size: 0.95rem;
            line-height: 1.5;
            margin: 0;
        }

        .fracture-guide__note {
            color: #516171;
            font-size: 0.9rem;
            line-height: 1.5;
            margin: 0;
            padding: 0.75rem;
            background: rgba(25, 118, 210, 0.03);
            border-left: 3px solid var(--med-primary);
            border-radius: 0 8px 8px 0;
        }

        .fracture-guide__image {
            width: 100%;
            height: auto;
            max-width: 400px;
            border-radius: 10px;
        }
 
        @media (max-width: 991.98px) {
            .fracture-guide__visual-area {
                min-height: 300px;
                order: -1;
            }
            
            .fracture-guide__image {
                max-width: 300px;
            }
        }
        .treatment__wrapper {
            background: linear-gradient(to bottom right, #F8FBFF, var(--med-pale));
            padding: 3rem 0;
        }

        .treatment__content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .treatment__header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .treatment__title {
            color: var(--med-dark);
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .treatment__subtitle {
            color: #516171;
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .treatment__main {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(25, 118, 210, 0.1);
        }

        .treatment__grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            padding: 2rem;
        }

        .treatment__info-box {
            background: rgba(25, 118, 210, 0.03);
            border-radius: 15px;
            padding: 2rem;
            transition: transform 0.3s ease;
        }

        .treatment__info-box:hover {
            transform: translateY(-5px);
        }

        .treatment__info-title {
            color: var(--med-primary);
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .treatment__info-title::before {
            content: '';
            width: 4px;
            height: 20px;
            background: var(--med-primary);
            border-radius: 2px;
        }

        .treatment__info-text {
            color: #516171;
            font-size: 0.95rem;
            line-height: 1.7;
            margin: 0;
        }

        .treatment__highlight {
            grid-column: 1 / -1;
            background: var(--med-primary);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .treatment__highlight-content {
            flex: 1;
        }

        .treatment__highlight-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .treatment__functions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .treatment__function-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: white;
            font-size: 0.9rem;
        }

        .treatment__function-item::before {
            content: '•';
            color: var(--med-light);
            font-size: 1.5rem;
        }

        .treatment__image-box {
            flex: 0 0 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .treatment__image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 991.98px) {
            .treatment__grid {
                grid-template-columns: 1fr;
            }

            .treatment__highlight {
                flex-direction: column;
            }

            .treatment__image-box {
                width: 100%;
                flex: 0 0 200px;
            }
        }


 /*.misaligned-jaw-row{*/
 /*           max-width:100%;*/
 /*           width:100%;*/
 /*           display:flex !important;*/
 /*           flex-direction: row;*/
 /*           gap:10px;*/
            /*margin:0 auto;*/
 /*           justify-content:center;*/
 /*       }*/
        
        
        
         .tmj-section {
            padding: 80px 0;
            background: linear-gradient(135deg, white 0%, var(--med-pale) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .bg-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(145deg, var(--theme-light) 0%, var(--med-primary) 100%);
            opacity: 0.05;
        }
        
        .shape-1 {
            width: 400px;
            height: 400px;
            top: -200px;
            right: -200px;
        }
        
        .shape-2 {
            width: 300px;
            height: 300px;
            bottom: -100px;
            left: -150px;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title {
            color: var(--med-dark);
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -15px;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--theme-color), var(--theme-light));
            border-radius: 2px;
        }
        
        .section-intro {
            max-width: 700px;
            margin: 30px auto 0;
            color: #546E7A;
            font-size: 1.1rem;
        }
        
        .symptoms-container {
            position: relative;
        }
        
        .symptom-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(25, 95, 172, 0.08);
            transition: all 0.4s ease;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
            overflow: hidden;
            border: none;
        }
        
        .symptom-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(to right, var(--theme-color), var(--theme-light));
        }
        
        .symptom-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(33, 150, 243, 0.15);
        }
        
        .number-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, var(--theme-color), var(--theme-light));
            color: white;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 18px;
            box-shadow: 0 4px 8px rgba(33, 150, 243, 0.25);
        }
        
        .card-body {
            padding: 35px 25px 30px 70px;
        }
        
        .symptom-title {
            color: var(--med-dark);
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 15px;
            position: relative;
        }
        
        .symptom-desc {
            color: #546E7A;
            line-height: 1.7;
        }
        
        .note-container {
            margin-top: 50px;
            position: relative;
        }
        
        .note-box {
            background: white;
            border-radius: 16px;
            padding: 35px 40px;
            box-shadow: 0 10px 30px rgba(25, 95, 172, 0.08);
            position: relative;
            overflow: hidden;
        }
        
        .note-box::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(to bottom, var(--theme-color), var(--theme-light));
        }
        
        .note-title {
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--med-dark);
            font-size: 1.25rem;
            position: relative;
        }
        
        .specialist-link {
            color: var(--theme-color);
            font-weight: 700;
            text-decoration: none;
            background-image: linear-gradient(to right, var(--theme-color), var(--theme-color));
            background-position: bottom;
            background-size: 100% 2px;
            background-repeat: no-repeat;
            transition: all 0.3s ease;
            padding-bottom: 2px;
        }
        
        .specialist-link:hover {
            color: var(--theme-light);
            background-size: 0% 2px;
        }
        
        .gradient-accent {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--theme-light) 0%, var(--med-primary) 100%);
            filter: blur(50px);
            opacity: 0.07;
            z-index: 0;
        }
        
        .accent-1 {
            top: 10%;
            right: 5%;
        }
        
        .accent-2 {
            bottom: 20%;
            left: 10%;
        }
        
        @media (max-width: 768px) {
            .tmj-section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .card-body {
                padding: 30px 20px 25px 60px;
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
	
    		<div class="dz-bnr-inr dz-banner-dark  dz-bnr-inr-md" style="background-image:url(assets/images/breadcrumbs/rhino.webp);">
		<div class="container">
			<div class="dz-bnr-inr-entry d-table-cell">
				<h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">Rhinoplasty</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
					<ul class="breadcrumb">
						<li class="breadcrumb-item "><a  class ="text-white"href="index">Home</a></li>
						<li class="breadcrumb-item">Services</li>
					</ul>
				</nav>
				<div class="dz-btn">
					<a href="https://wa.me/919000666476" class="btn btn-lg btn-icon btn-primary radius-xl btn-shadow mb-3 mb-sm-0">
						<span class="left-icon">
							<i class="feather icon-phone-call"></i>
						</span>
						+919000666476
					</a>					
				</div>
			</div>
		</div>
		<!--<span class="text-vertical">24/7 EMERGENCY SERVICE</span>-->
		
	</div>
	
	
	
             <section class="fracture-guide__wrapper">
        <div class="container">
            <div class="fracture-guide__container">
                <div class="row g-0">
                    <!-- Content Side -->
                    <div class="col-lg-6">
                        <div class="fracture-guide__content-area">
                            <h2 class="fracture-guide__heading">Spotting the Need for Rhinoplasty: Know the Signs</h2>
                            <p class="fracture-guide__intro">Nasal issues can affect both appearance and function. Here are some signs that may indicate the need for rhinoplasty:</p>
                            
                            <div class="fracture-guide__symptoms">
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Breathing Difficulty</b>:Trouble breathing through the nose, especially during sleep or physical activity.</p>
                                </div>
                                
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Nasal Asymmetry</b>: Noticeable unevenness or a crooked nose after an injury or naturally occurring.</p>
                                </div>
                                
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Bump or Depression on the Bridge</b>: A visible hump or dip that affects the nose’s appearance.</p>
                                </div>
                                
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Persistent Congestion</b>: Constant nasal blockage or pressure that doesn't improve with medication.</p>
                                </div>
                                
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Snoring or Sleep Issues</b>: Difficulty sleeping due to nasal obstructions can signal structural problems.</p>
                                </div>
                            </div>

                            <p class="fracture-guide__note">
                                <strong>Note:</strong> If you’re considering rhinoplasty, consult the <strong> best maxillofacial surgeon in India</strong> or a <strong>maxillofacial surgeon in Hyderabad</strong> for expert guidance.
                            </p>
                        </div>
                    </div>

                    <!-- Image Side -->
                    <div class="col-lg-6">
                        <div class="fracture-guide__visual-area">
                            <img src="assets/images/rhinoplasty/Spotting Rhinoplasty.webp" alt="Facial Bone Structure" class="fracture-guide__image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
	   <!-- <section class="challenges-section">-->
    <!--    <div class="wave-bg"></div>-->
    <!--    <div class="floating-dots">-->
    <!--        <div class="dot" style="left: 10%; top: 20%;"></div>-->
    <!--        <div class="dot" style="left: 20%; top: 80%;"></div>-->
    <!--        <div class="dot" style="left: 80%; top: 10%;"></div>-->
    <!--        <div class="dot" style="left: 90%; top: 70%;"></div>-->
    <!--        <div class="dot" style="left: 40%; top: 30%;"></div>-->
    <!--    </div>-->
    <!--    <div class="container">-->
    <!--        <h2 class="section-title animate__animated animate__fadeIn">Critical Challenges in Rhinoplasty</h2>-->
    <!--       <p class="fracture-guide">Rhinoplasty involves reshaping the nose to improve both appearance and function. Here are some key challenges that require expert care from a <strong>maxillofacial surgeon in Hyderabad:</strong> </p>-->
                            
    <!--        <div class="row g-4">-->
                <!-- Challenge 1: Bleeding -->
    <!--            <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="challenge-icon pulse-animation">-->
    <!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
    <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>-->
    <!--                        </svg>-->
    <!--                    </div>-->
    <!--                    <h5 class="card-title">Breathing Obstruction</h5>-->
    <!--                    <p class="card-text">Issues like a deviated septum or nasal collapse can affect airflow, requiring precise correction for improved breathing.</p>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Challenge 2: Swelling -->
    <!--            <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="challenge-icon">-->
    <!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
    <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>-->
    <!--                        </svg>-->
    <!--                    </div>-->
    <!--                    <h5 class="card-title">Shape and Symmetry</h5>-->
    <!--                    <p class="card-text">Achieving a balanced and natural nasal shape involves adjusting cartilage and bone structure with accuracy.</p>-->
    <!--                </div>-->
    <!--            </div>-->
                

                <!-- Challenge 3: Jaw Fractures -->
    <!--            <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="challenge-icon">-->
    <!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
    <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>-->
    <!--                        </svg>-->
    <!--                    </div>-->
    <!--                    <h5 class="card-title">Skin Thickness</h5>-->
    <!--                    <p class="card-text"> Thick or thin nasal skin can affect how the nose heals and the outcome, needing tailored surgical techniques.</p>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Challenge 4: Dental Issues -->
    <!--            <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="challenge-icon">-->
    <!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
    <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>-->
    <!--                        </svg>-->
    <!--                    </div>-->
    <!--                    <h5 class="card-title">Functional and Aesthetic Integration</h5>-->
    <!--                    <p class="card-text">Balancing improved nasal function with a natural appearance requires the expertise of the <strong>best oral and maxillofacial surgeon in India.</strong></p>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Challenge 5: Orbital Injuries -->
    <!--            <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 0.8s;">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="challenge-icon">-->
    <!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
    <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>-->
    <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>-->
    <!--                        </svg>-->
    <!--                    </div>-->
    <!--                    <h5 class="card-title">Scar Visibility</h5>-->
    <!--                    <p class="card-text">While incisions are typically hidden, proper technique ensures minimal scarring and a smooth recovery.</p>-->
    <!--                </div>-->
    <!--            </div>-->

                <!-- Challenge 6: Facial Bones -->
    <!--            <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 1s;">-->
    <!--                <div class="challenge-card">-->
    <!--                    <div class="challenge-icon">-->
    <!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
    <!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>-->
    <!--                        </svg>-->
    <!--                    </div>-->
    <!--                    <h5 class="card-title">Revision Surgery</h5>-->
    <!--                    <p class="card-text"> If initial results are unsatisfactory or complications arise, a skilled approach from the best maxillofacial surgeon in India can restore both function and aesthetics.</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


  <section class="tmj-section">
    <!-- Background shapes -->
    <div class="bg-shape shape-1"></div>
    <div class="bg-shape shape-2"></div>

    <!-- Gradient accents -->
    <div class="gradient-accent accent-1"></div>
    <div class="gradient-accent accent-2"></div>

    <div class="container">
        <!-- Section header -->
        <div class="section-header">
            <h2 class="section-title">Critical Challenges in Rhinoplasty</h2>
            <p class="section-intro">Rhinoplasty involves reshaping the nose to improve both appearance and function. Here are some key challenges that require expert care from a maxillofacial surgeon in Hyderabad:</p>
        </div>

        <!-- Rhinoplasty Challenge Cards -->
        <div class="symptoms-container">
            <div class="row">
                <!-- Challenge 1: Breathing Obstruction -->
                <div class="col-lg-6">
                    <div class="symptom-card">
                        <span class="number-badge">1</span>
                        <div class="card-body">
                            <h4 class="symptom-title">Breathing Obstruction</h4>
                            <p class="symptom-desc">Issues like a deviated septum or nasal collapse can affect airflow, requiring precise correction for improved breathing.</p>
                        </div>
                    </div>
                </div>

                <!-- Challenge 2: Shape and Symmetry -->
                <div class="col-lg-6">
                    <div class="symptom-card">
                        <span class="number-badge">2</span>
                        <div class="card-body">
                            <h4 class="symptom-title">Shape and Symmetry</h4>
                            <p class="symptom-desc">Achieving a balanced and natural nasal shape involves adjusting cartilage and bone structure with accuracy.</p>
                        </div>
                    </div>
                </div>

                <!-- Challenge 3: Skin Thickness -->
                <div class="col-lg-6">
                    <div class="symptom-card">
                        <span class="number-badge">3</span>
                        <div class="card-body">
                            <h4 class="symptom-title">Skin Thickness</h4>
                            <p class="symptom-desc">Thick or thin nasal skin can affect how the nose heals and the outcome, needing tailored surgical techniques.</p>
                        </div>
                    </div>
                </div>

                <!-- Challenge 4: Functional and Aesthetic Integration -->
                <div class="col-lg-6">
                    <div class="symptom-card">
                        <span class="number-badge">4</span>
                        <div class="card-body">
                            <h4 class="symptom-title">Functional and Aesthetic Integration</h4>
                            <p class="symptom-desc">Balancing improved nasal function with a natural appearance requires the expertise of the <strong>best oral and maxillofacial surgeon in India</strong>.</p>
                        </div>
                    </div>
                </div>

                <!-- Challenge 5: Scar Visibility -->
                <div class="col-lg-6">
                    <div class="symptom-card">
                        <span class="number-badge">5</span>
                        <div class="card-body">
                            <h4 class="symptom-title">Scar Visibility</h4>
                            <p class="symptom-desc">While incisions are typically hidden, proper technique ensures minimal scarring and a smooth recovery.</p>
                        </div>
                    </div>
                </div>

                <!-- Challenge 6: Revision Surgery -->
                <div class="col-lg-6">
                    <div class="symptom-card">
                        <span class="number-badge">6</span>
                        <div class="card-body">
                            <h4 class="symptom-title">Revision Surgery</h4>
                            <p class="symptom-desc">If initial results are unsatisfactory or complications arise, a skilled approach from the <strong>best maxillofacial surgeon in India</strong> can restore both function and aesthetics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Note box -->
        <div class="note-container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="note-box">
                        <h5 class="note-title">Important Note:</h5>
                        <p>If you are considering rhinoplasty, consult a skilled maxillofacial surgeon for expert care in restoring both form and function.</p>
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
    
    
    	
		<section class="content-inner bg-light twentytwenty-bottom-spacing overlay-primary-light mb-10" style=" background-size: cover; background-position: center; padding : 50px 50px 200px 50px" >
			<div class="container">
				<div class="section-head style-3 row align-items-end mb-0 mb-lg-4">
					<div class="col-xl-7 col-lg-7 m-b30">
						<h2 class="title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">How to Ensure Proper Healing After Rhinoplasty?</h2>
						<p class="m-b0 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">Proper care and management are essential for a smooth recovery and long-lasting results. Here are key indicators for successful healing:</p>
					</div>
					</div> 
				</div>
				<div class="row">
					<div class="col-xl-3 col-md-6 m-b30 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">
						<div class="icon-bx-wraper style-7 box-hover">
							<div class="bg" style="background-image: url(images/background/bg3.webp);"></div>
							<div class="icon-bx">
								<span class="icon-cell">
									<img src="assets/images/services/Facial-injuries/Bleeding-icons.webp" alt="">
								</span>
							</div>
							<div class="icon-content">
								<h3 class="dz-title">Minimal Scarring</h3>
								<p>Advanced surgical techniques ensure incisions are hidden and scarring is barely noticeable, contributing to a natural look.</p>
							</div>
							<div class="dz-media">
							<img src="assets/images/rhinoplasty/Minimal Scarring.webp" alt="">
							</div>
							<div class="icon-footer">
								<a href="#" class="icon-link-hover-end">View All Details <i class="feather icon-arrow-right-circle"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 m-b30 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
						<div class="icon-bx-wraper style-7 box-hover active">
							<div class="bg" style="background-image: url(images/background/bg7.webp);"></div>
							<div class="icon-bx">
								<span class="icon-cell">
									<img src="assets/images/services/Facial-injuries/Swelling and Bruising-icons.webp" alt="">
								</span>
							</div>
							<div class="icon-content">
								<h3 class="dz-title">Improved Breathing</h3>
								<p>Correcting structural issues helps enhance nasal airflow, making breathing easier and more comfortable.</p>
							</div>
							<div class="dz-media">
								<img src="assets/images/rhinoplasty/Improved Breathing.webp" alt="">
							</div>
							<div class="icon-footer">
								<a href="#" class="icon-link-hover-end">View All Details <i class="feather icon-arrow-right-circle"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 m-b30 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.8s">
						<div class="icon-bx-wraper style-7 box-hover">
							<div class="bg" style="background-image: url(images/background/bg7.webp);"></div>
							<div class="icon-bx">
								<span class="icon-cell">
									<img src="assets/images/rhinoplasty/Minimal Scarring.webp" alt="">
								</span>
							</div>
							<div class="icon-content">
								<h3 class="dz-title">Balanced Nasal Shape</h3>
								<p> Precise adjustments to cartilage and bone ensure a symmetrical and harmonious nasal appearance.</p>
							</div>
							<div class="dz-media">
							<img src="assets/images/rhinoplasty/Balanced Nasal Shape.webp" alt="">
							</div>
							<div class="icon-footer">
								<a href="#" class="icon-link-hover-end">View All Details <i class="feather icon-arrow-right-circle"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 m-b30 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.8s">
						<div class="icon-bx-wraper style-7 box-hover">
							<div class="bg" style="background-image: url(images/background/bg7.webp);"></div>
							<div class="icon-bx">
								<span class="icon-cell">
                        <img src="assets/images/services/Facial-injuries/Deformities-icons.webp" alt="">
								</span>
							</div>
							<div class="icon-content">
								<h3 class="dz-title">Reduced Swelling</h3>
								<p>Following post-surgery care guidelines helps minimize swelling and speed up the healing process.</p>
							</div>
							<div class="dz-media">
							<img src="assets/images/rhinoplasty/Reduce Swelling.webp" alt="">
							</div>
							<div class="icon-footer">
								<a href="#" class="icon-link-hover-end">View All Details <i class="feather icon-arrow-right-circle"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 m-b30 mx-auto wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.8s">
						<div class="icon-bx-wraper style-7 box-hover">
							<div class="bg" style="background-image: url(images/background/bg7.webp);"></div>
							<div class="icon-bx">
								<span class="icon-cell">
                        <img src="assets/images/services/Facial-injuries/Deformities-icons.webp" alt="">
								</span>
							</div>
							<div class="icon-content">
								<h3 class="dz-title">Natural Facial Harmony</h3>
								<p>A well-executed rhinoplasty enhances overall facial balance, creating a natural and aesthetically pleasing result.  </p>
							</div>
							<div class="dz-media">
							<img src="assets/images/rhinoplasty/Natural Facial Harmony.webp" alt="">
							</div>
							<div class="icon-footer">
								<a href="#" class="icon-link-hover-end">View All Details <i class="feather icon-arrow-right-circle"></i></a>
							</div>
						</div>
					</div>
				</div>
				
				
						
			
			</div>
			<div class="twentytwenty-center wow bounceIn" data-wow-delay="1.0s" data-wow-duration="0.8s">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-lg-10">

						</div>
					</div>
				</div>
			</div>
		</section>	
		
		
	<?php include('stats.php')?>

		
		  <section class="treatment__wrapper">
        <div class="container">
            <div class="treatment__content">
                <header class="treatment__header">
                    <h2 class="treatment__title">Rhinoplasty & Nasal Structure Correction</h2>
                    <p class="treatment__subtitle">Facial injuries often disrupt the natural alignment of bones, making accurate reconstruction essential for healing. By understanding how facial bones fit together, surgeons can guide the reconstruction process, ensuring both functionality and aesthetic appearance are restored.</p>
                </header>

                <div class="treatment__main">
                    <div class="treatment__grid">
                        <div class="treatment__info-box">
                            <h3 class="treatment__info-title">Timely Treatment</h3>
                            <p class="treatment__info-text">
                                Addressing nasal issues early, such as breathing difficulties or deformities, prevents further complications and ensures better recovery. Quick medical care improves both function and aesthetics..</p>
                        </div>

                        <div class="treatment__info-box">
                            <h3 class="treatment__info-title">Structural Preservation</h3>
                            <p class="treatment__info-text">
                              Maintaining nasal cartilage and bone integrity is essential for long-term results. A well-planned rhinoplasty preserves the natural structure while improving nasal symmetry and function. </p>
                        </div>

                        <div class="treatment__highlight">
                            <div class="treatment__highlight-content">
                                <h3 class="treatment__highlight-title" style="color:white">Essential Nasal Functions</h3>
                                <div class="treatment__functions">
                                    <div class="treatment__function-item">Breathing & Airways</div>
                                    <div class="treatment__function-item">Smell & Sensory Function</div>
                                    <div class="treatment__function-item">Speech & Voice Resonance</div>
                                    <div class="treatment__function-item">Facial Balance & Aesthetics</div>
                                    <div class="treatment__function-item">Protection Against Injury</div>
                                </div>
                            </div>
                            <div class="treatment__image-box">
                                <img src="assets/images/services/Facial-injuries/Facial-Structure-Diagram.webp" alt="Facial Structure Diagram" class="treatment__image">
                            </div>
                        </div>

                        <div class="treatment__info-box">
                            <h3 class="treatment__info-title">Expert Care</h3>
                            <p class="treatment__info-text">
                        Rhinoplasty isn’t just about appearance—it focuses on improving nasal airflow, structural support, and facial harmony. A structured approach ensures both functional and aesthetic recovery.
                               </p>
                        </div>

                        <div class="treatment__info-box">
                            <h3 class="treatment__info-title">Accurate Healing</h3>
                            <p class="treatment__info-text">
Precise surgical techniques and post-operative care are crucial for proper healing. Correct positioning of nasal structures enhances facial symmetry and breathing, ensuring long-term satisfaction.                               </p>
                        </div>
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
                                    <img src="assets/images/services/Facial-injuries/Unmatched-Expertise in-Facial Injury & Reconstruction.webp" alt="">
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
                                <h2 class="title text-white m-b0 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.7s">Unmatched Expertise in Facial Injury & Reconstruction</h2>
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
                                            <h3 class="dz-title">Extensive Experience</h3>
                                            <p>We offer specialized care with a team of top maxillofacial surgeons in Hyderabad.</p>
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
                                               <h3 class="dz-title">Comprehensive Care</h3>
                                            <p>From emergency diagnosis to post-surgery recovery, we use advanced technology for optimal healing.</p>
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
                                         
                                            <h3 class="dz-title">Advanced Skillset</h3>
                                            <p>Our surgeons apply cutting-edge techniques to restore both function and aesthetics with precision.</p>
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
                            <h2 class="title m-b0 text-dark">Real Patients, Real Stories. And our achievements </h2>
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
                                                    <p>I underwent facial reconstruction surgery after a traumatic injury, and I couldn't be happier with the results. The team took great care of me throughout the process, and my recovery was smooth. I'm grateful for the skill and dedication of everyone involved.</p>
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
                                                    <h3 class="title">Akila Ganesh</h3>
                                                    <p>My experience was truly exceptional. The team made me feel comfortable and confident, from the initial consultation to post-surgery recovery. The care and expertise they provided were outstanding. Highly recommend them for anyone dealing with facial injuries.</p>
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
                                                    <h3 class="title">Aditya Bajoria</h3>
                                                    <p>After a serious facial injury, I was worried about the long-term effects. But the treatment I received here was nothing short of amazing. The team ensured I was well-informed and supported every step of the way. I'm so grateful for the positive outcome of my recovery.</p>
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

		

		


		
		
         	<section class="content-inner pt-5 pb-5" style="background-image: url(images/background/bg3.png);     background-position: right bottom; background-repeat: no-repeat;">
		<div class="container">
			<div class="row content-wrapper style-5">
				<div class="col-xxl-7 col-xl-6 col-lg-5 m-b30 align-self-center">
					<div class="content-info">
						<div class="section-head style-1 m-b30">
							<h2 class="title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.7s">Frequently Asked Questions</h2>
						</div>
						<div class="accordion dz-accordion style-1" id="accordionExample">
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								 What is the recovery time after rhinoplasty?
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Recovery time varies, but most patients experience significant improvement within 2–3 weeks. Swelling may take a few months to completely subside. Following your surgeon’s post-care instructions helps speed up the process.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Will there be visible scars after rhinoplasty?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>No, rhinoplasty is typically performed with minimal incisions. Closed rhinoplasty involves internal incisions, leaving no visible scars on the face.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Can rhinoplasty improve breathing issues?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Yes, rhinoplasty can correct structural issues like a deviated septum, improving airflow and overall breathing function.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							     How long do the results of rhinoplasty last?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Rhinoplasty results are usually permanent. However, natural aging and injury may affect the nose's appearance over time.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							Is rhinoplasty painful?
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Mild discomfort and swelling are common after surgery, but pain is usually minimal and manageable with prescribed medications.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							    How do I choose the right surgeon for rhinoplasty?
									</button>
								</h2>
								<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>For the best outcome, consult the  <strong>best maxillofacial surgeon in India </strong> or a <strong> maxillofacial surgeon in Hyderabad </strong> with experience in both functional and cosmetic nasal correction.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-5 col-xl-6 col-lg-7 m-b30">
					<div class="content-media" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
						<div class="dz-media">
							<img src="assets/images/services/Facial-injuries/Frequently-Asked-Questions.webp" alt="">
						</div>
						<div class="item1">
							<div class="info-widget style-5">
								<div class="widget-media text-primary">
									<i class="feather icon-phone-call dz-ring-effect"></i>
								</div>
								<div class="widget-content">
									<h6 class="title">Contact us?</h6>
									<a href="https://wa.me/919000666476" class="text-secondary">+919000666476</a>
								</div>
							</div>
							<a href="https://wa.me/919000666476" class="btn btn-lg btn-icon btn-primary btn-shadow">
								<span class="w-100">Appointment</span> <span class="right-icon"><i class="feather icon-arrow-right"></i></span>
							</a>
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
