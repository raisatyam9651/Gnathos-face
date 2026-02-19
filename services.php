<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">
<head>

		<!-- Title -->
	<title>Services | Gnathosface</title>
	
	
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
         .services-section {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--med-pale) 0%, #ffffff 100%);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            color: var(--med-dark);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--theme-color), var(--theme-light));
            border-radius: 2px;
        }

        .section-title p {
            color: #666;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(25, 95, 172, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            border: none;
            margin-bottom: 30px;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(25, 95, 172, 0.15);
        }

        .card-img-container {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .service-card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, var(--theme-color) 0%, transparent 70%);
            opacity: 0.8;
        }

        .card-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--theme-color);
            font-size: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .card-body {
            padding: 25px;
            text-align: center;
        }

        .card-title {
            color: var(--med-dark);
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .card-text {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .learn-more-btn {
            background: linear-gradient(45deg, var(--theme-color), var(--theme-light));
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .learn-more-btn:hover {
            background: linear-gradient(45deg, var(--med-dark), var(--theme-color));
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(25, 95, 172, 0.3);
            color: white;
        }

        @media (max-width: 768px) {
            .services-section {
                padding: 60px 0;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .card-img-container {
                height: 200px;
            }
            
            .card-body {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .section-title h2 {
                font-size: 1.75rem;
            }
            
            .card-img-container {
                height: 180px;
            }
        }
        

    </style>

</head>	
<body id="bg">
<div class="page-wraper">
	

		<!-- Header Star -->
		<?php include('header.php')?>
		
		
	<!-- Header End -->
	
	
			<div class="dz-bnr-inr dz-banner-dark  dz-bnr-inr-md" style="background-image:url(assets/images/about-us.webp);">
		<div class="container">
			<div class="dz-bnr-inr-entry d-table-cell">
				<h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">Services</h1>
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
	
	
	
     <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Medical Services</h2>
                <p>Comprehensive healthcare solutions with advanced treatments and personalized care for all your medical needs</p>
            </div>
            
            <div class="row" style="row-gap:30px">
                <!-- TMJ Arthroscopy -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/TMJ-Arthroscopy.webp" class="card-img-top" alt="TMJ Arthroscopy">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-tooth"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">TMJ Arthroscopy</h5>
                            <p class="card-text">Advanced minimally invasive procedure for temporomandibular joint disorders, providing precise diagnosis and treatment.</p>
                            <a href="tmj-arthroscopy" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Skin Grafts and Flaps -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/Skin-Grafts-and-Flaps.webp" class="card-img-top" alt="Skin Grafts and Flaps">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-hand-holding-medical"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Skin Grafts and Flaps</h5>
                            <p class="card-text">Reconstructive surgical procedures to restore form and function using advanced tissue transfer techniques.</p>
                            <a href="skin-grafts-and-flaps" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Orthognathic Surgery -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/Orthognathic-Surgery.webp" class="card-img-top" alt="Orthognathic Surgery">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Orthognathic Surgery</h5>
                            <p class="card-text">Corrective jaw surgery to improve facial harmony, bite function, and overall oral health with precision techniques.</p>
                            <a href="orthognathic-surgery-treatment" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Cyst & Tumors -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/Cyst & Tumors.webp" class="card-img-top" alt="Cyst & Tumors">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cyst & Tumors</h5>
                            <p class="card-text">Expert diagnosis and surgical treatment of oral and maxillofacial cysts and tumors with comprehensive care.</p>
                            <a href="cyst-&-tumors-treatment" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Cosmetic Facial Surgery -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/Cosmetic-Facial-Surgery.webp" class="card-img-top" alt="Cosmetic Facial Surgery">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-magic"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cosmetic Facial Surgery</h5>
                            <p class="card-text">Aesthetic enhancement procedures to improve facial appearance and boost confidence with natural-looking results.</p>
                            <a href="cosmetic-facial-surgery-treatment" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Rhinoplasty -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/Rhinoplasty.webp" class="card-img-top" alt="Rhinoplasty">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-head-side-mask"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Rhinoplasty</h5>
                            <p class="card-text">Surgical and non-surgical nose reshaping procedures to enhance facial harmony and improve breathing function.</p>
                            <a href="rhinoplasty-treatment" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- OSA Treatment -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/OSA-Treatment.webp" class="card-img-top" alt="OSA Treatment">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-lungs"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">OSA Treatment</h5>
                            <p class="card-text">Comprehensive obstructive sleep apnea treatment options to improve sleep quality and overall health outcomes.</p>
                            <a href="osa-treatment" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Oral Cancers -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/Oral-Cancers.webp" class="card-img-top" alt="Oral Cancers">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-ribbon"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Oral Cancers</h5>
                            <p class="card-text">Early detection, comprehensive diagnosis, and advanced treatment of oral and oropharyngeal cancers with multidisciplinary care.</p>
                            <a href="oral-cancer-treatment" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Facial Swelling Treatment -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card service-card">
                        <div class="card-img-container">
                            <img src="assets/services/Facial-Swelling-Treatment.webp" class="card-img-top" alt="Facial Swelling Treatment">
                            <div class="card-overlay"></div>
                            <div class="card-icon">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Facial Swelling Treatment</h5>
                            <p class="card-text">Expert evaluation and treatment of facial swelling conditions with targeted therapeutic approaches for optimal recovery.</p>
                            <a href="facial-swelling-treatment" class="learn-more-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
		<!-- Footer -->
	<?php include('footer.php')?>

</div>
<!-- JAVASCRIPT FILES ========================================= -->
<?php include('footer-links.php')?>
</body>
</html>
