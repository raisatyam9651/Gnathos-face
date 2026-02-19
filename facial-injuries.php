<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">
<head>

		<!-- Title -->
	<title>Facial-Injuries| Gnathos</title>
	
	
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

        

    </style>

</head>	
<body id="bg">
<div class="page-wraper">
	

		<!-- Header Star -->
		<?php include('header.php')?>
	<!-- Header End -->
	
	<main class="page-content">
	
    		<div class="dz-bnr-inr dz-banner-dark  dz-bnr-inr-md" style="background-image:url(assets/images/breadcrumbs/face-injury_breadcrumb.webp);">
		<div class="container">
			<div class="dz-bnr-inr-entry d-table-cell">
				<h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">Facial Injuries</h1>
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
                            <h2 class="fracture-guide__heading">Spotting Facial Bone Fractures: Know the Signs</h2>
                            <p class="fracture-guide__intro">Facial injuries may not always be immediately obvious, but certain signs can indicate the presence of fractures:</p>
                            
                            <div class="fracture-guide__symptoms">
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Blackening Around the Eye</b>:This often signals underlying bone trauma.</p>
                                </div>
                                
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Redness or Swelling</b>: Appearing around the eyes or face.</p>
                                </div>
                                
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Pain While Chewing</b>:A symptom of potential jaw or dental trauma..</p>
                                </div>
                                
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Difficulty Opening or Closing the Mouth</b>:A sign of jawbone fractures.</p>
                                </div>
                                
                                <div class="fracture-guide__symptom">
                                    <div class="fracture-guide__bullet"></div>
                                    <p class="fracture-guide__description"><b>Tooth Pain</b>: Sensitivity while chewing or tapping could indicate damage to the teeth or jaw.</p>
                                </div>
                            </div>

                            <p class="fracture-guide__note">
                                <strong>Note:</strong> If you suspect a facial fracture, immediate medical evaluation is necessary to prevent complications and ensure proper healing.
                            </p>
                        </div>
                    </div>

                    <!-- Image Side -->
                    <div class="col-lg-6">
                        <div class="fracture-guide__visual-area">
                            <img src="assets/images/services/Facial-injuries/Spotting-Facial-Bone-Fractures.webp" alt="Facial Bone Structure" class="fracture-guide__image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
	    <section class="challenges-section">
        <div class="wave-bg"></div>
        <div class="floating-dots">
            <div class="dot" style="left: 10%; top: 20%;"></div>
            <div class="dot" style="left: 20%; top: 80%;"></div>
            <div class="dot" style="left: 80%; top: 10%;"></div>
            <div class="dot" style="left: 90%; top: 70%;"></div>
            <div class="dot" style="left: 40%; top: 30%;"></div>
        </div>
        <div class="container">
        
             <div class="section-header">
            <h2 class="section-title">Critical Challenges in Facial Trauma</h2>
            <p class="section-intro">Facial trauma presents unique challenges that require expert care from a maxillofacial surgeon in Hyderabad. Here are key concerns:
</p>
        </div>
            <div class="row g-4">
                <!-- Challenge 1: Bleeding -->
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp">
                    <div class="challenge-card">
                        <div class="challenge-icon pulse-animation">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                        <h5 class="card-title">Profuse Bleeding</h5>
                        <p class="card-text">The face has a dense network of blood vessels, leading to heavy bleeding that needs immediate control to prevent complications.</p>
                    </div>
                </div>

                <!-- Challenge 2: Swelling -->
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                        <h5 class="card-title">Rapid Swelling</h5>
                        <p class="card-text">Injury causes swelling that can obstruct airways, requiring prompt action to maintain breathing.</p>
                    </div>
                </div>
                

                <!-- Challenge 3: Jaw Fractures -->
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                        </div>
                        <h5 class="card-title">Mandibular Trauma</h5>
                        <p class="card-text">Jaw fractures are common and need specialized treatment to ensure proper alignment and restore function.</p>
                    </div>
                </div>

                <!-- Challenge 4: Dental Issues -->
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                            </svg>
                        </div>
                        <h5 class="card-title">Bite Disruption</h5>
                        <p class="card-text">Facial injuries can misalign teeth, disrupting the bite and often requiring orthodontic treatment.</p>
                    </div>
                </div>

                <!-- Challenge 5: Orbital Injuries -->
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 0.8s;">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h5 class="card-title">Orbital Emergencies</h5>
                        <p class="card-text">Fractures around the eye socket need urgent care to prevent vision loss and aesthetic issues.</p>
                    </div>
                </div>

                <!-- Challenge 6: Facial Bones -->
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp" style="animation-delay: 1s;">
                    <div class="challenge-card">
                        <div class="challenge-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                        </div>
                        <h5 class="card-title">Complex Fractures</h5>
                        <p class="card-text">Fractures of the cheekbones, nose, or other facial bones require skilled surgical repair to restore both function and appearance.</p>
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
						<h2 class="title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">How to identify facial bone fracture?</h2>
						<p class="m-b0 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">Facial bone fractures can often be detected through visible signs, but sometimes they may not be immediately obvious. Common indicators include:</p>
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
								<h3 class="dz-title">Bleeding</h3>
								<p>Bleeding from the mouth, nose, or face is a clear sign of injury.</p>
							</div>
							<div class="dz-media">
							<img src="assets/images/services/Facial-injuries/Bleeding.webp" alt="">
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
								<h3 class="dz-title">Swelling and Bruising</h3>
								<p>Blackening around the eyes, redness in the corner or across the eye, or severe swelling may point to fractures.</p>
							</div>
							<div class="dz-media">
								<img src="assets/images/services/Facial-injuries/Swelling-and-Bruising.webp" alt="">
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
									<img src="assets/images/services/Facial-injuries/Pain-and-Discomfort-icons.webp" alt="">
								</span>
							</div>
							<div class="icon-content">
								<h3 class="dz-title">Pain and Discomfort</h3>
								<p>Difficulty in chewing or opening the mouth, along with tooth pain, can suggest damage to the bones or teeth.</p>
							</div>
							<div class="dz-media">
							<img src="assets/images/services/Facial-injuries/Pain-and-Discomfort.webp" alt="">
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
								<h3 class="dz-title">Deformities</h3>
								<p> Any noticeable changes in the shape of the face or jaw alignment after an injury may indicate fractures.</p>
							</div>
							<div class="dz-media">
							<img src="assets/images/services/Facial-injuries/Deformities.webp" alt="">
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
                    <h2 class="treatment__title">Facial Reconstruction & Dental Occlusion</h2>
                    <p class="treatment__subtitle">Facial injuries often disrupt the natural alignment of bones, making accurate reconstruction essential for healing. By understanding how facial bones fit together, surgeons can guide the reconstruction process, ensuring both functionality and aesthetic appearance are restored.</p>
                </header>

                <div class="treatment__main">
                    <div class="treatment__grid">
                        <div class="treatment__info-box">
                            <h3 class="treatment__info-title">Timely Treatment</h3>
                            <p class="treatment__info-text">
                                Facial injuries need quick medical attention to prevent lasting damage and functional issues. Since the face is essential for daily activities, early and accurate treatment ensures better recovery.</p>
                        </div>

                        <div class="treatment__info-box">
                            <h3 class="treatment__info-title">Structural Alignment</h3>
                            <p class="treatment__info-text">
                              Proper bone positioning is key to restoring facial function and appearance. Understanding how facial structures connect helps guide accurate reconstruction for a natural outcome. </p>
                        </div>

                        <div class="treatment__highlight">
                            <div class="treatment__highlight-content">
                                <h3 class="treatment__highlight-title" style="color:white;">Essential Facial Functions</h3>
                                <div class="treatment__functions">
                                    <div class="treatment__function-item">Vision & Eye Protection</div>
                                    <div class="treatment__function-item">Breathing & Airways</div>
                                    <div class="treatment__function-item">Speech & Communication</div>
                                    <div class="treatment__function-item">Eating & Mastication</div>
                                    <div class="treatment__function-item">Facial Expressions</div>
                                    <div class="treatment__function-item">Aesthetic Appearance</div>
                                </div>
                            </div>
                            <div class="treatment__image-box">
                                <img src="assets/images/services/Facial-injuries/Facial-Structure-Diagram.webp" alt="Facial Structure Diagram" class="treatment__image">
                            </div>
                        </div>

                        <div class="treatment__info-box">
                            <h3 class="treatment__info-title">Expert Care</h3>
                            <p class="treatment__info-text">
                               Beyond appearance, the main goal of treatment is to restore essential functions like breathing, speaking, and eating. A well-planned approach ensures both structural and functional recovery.
                               </p>
                        </div>

                        <div class="treatment__info-box">
                            <h3 class="treatment__info-title">Accurate Healing</h3>
                            <p class="treatment__info-text">
                               Precise bone alignment is crucial for proper healing. Correct positioning not only improves function but also enhances facial symmetry, leading to better long-term results.
                               </p>
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
                                            <p>We provide a full spectrum of services to manage and treat facial injuries with expert care.</p>
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
                                            <p>From diagnosis to post-recovery support, we offer a seamless journey, utilizing the latest technology to ensure optimal healing.</p>
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
                                            <p>Our team of experienced surgeons and specialists applies cutting-edge techniques to restore facial functionality and aesthetics with precision.</p>
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
                                            <h3 class="dz-title">Unparalleled expertise</h3>
                                            <p>Our skilled dentists and maxillofacial surgeons use advanced techniques to restore oral health, function, and appearance with precision.</p>
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
								 How do I know if I have a facial bone fracture?
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>If you experience bleeding from the mouth, nose, or face or notice swelling, pain, or difficulty with movement, it's crucial to seek medical attention immediately.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What is the recovery time for facial injury treatment?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Recovery time varies based on the severity of the injury, but most patients can expect to recover within a few weeks to a few months with proper care and follow-up.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Are the results from facial reconstruction permanent?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Yes, with the right care and medical expertise, facial reconstruction results are designed to be long-lasting and restore both function and aesthetics.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							     Will facial injury treatment affect my ability to eat or speak?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>While there may be some initial discomfort, the goal of treatment is to restore your ability to eat, speak, and perform other essential functions as quickly as possible.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							 Can facial injuries affect my vision?
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>Yes, some facial injuries, especially those around the eye area, can impact vision. It’s important to seek immediate care to prevent long-term damage.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.7s">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							     How soon should I seek treatment for a facial injury?
									</button>
								</h2>
								<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p>It’s important to seek treatment as soon as possible. Early intervention helps prevent complications and ensures the best possible outcomes.</p>
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
